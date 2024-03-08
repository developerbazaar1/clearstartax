<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Status;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use DateTime;
use DateTimeZone;
use Exception;
use Carbon\Carbon;

class BookAppointmentController extends Controller
{

    public function get_available_slots_old_without45(Request $request)
    {
      
            if(!empty($request->input('timezone'))){
                $timezone = $request->input('timezone');
            }else{
                $timezone = 'PST';
            }
            
            if(!empty($request->input('email'))){
                $email = $request->input('email');
            }else{
                
                $data1 = array(
                      "status"=> 'fail',
                      "message" => 'There is no settlement officer link with case, please set settlement officer first to book appoitment.',
                );
                echo json_encode($data1);
               
            }
            
            $timeSlot = 60;
            $data = $request->input('date');
            $curl = curl_init();

            curl_setopt_array($curl, array(
              CURLOPT_URL => 'https://clearstart.irslogics.com/publicapi/Appointment/GetAvailableSlots?date='.$data.'&timezone='.$timezone.'&email='.$email.'&timeSlot='.$timeSlot.'&apikey=f08f2b3c48ad4134b4ef62abd4aa721d',
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_ENCODING => '',
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 0,
              CURLOPT_FOLLOWLOCATION => true,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_CUSTOMREQUEST => 'GET',
            ));
            
            $response = curl_exec($curl);
            
            curl_close($curl);
            $response2 = json_decode($response, true);
           
             $timeSlots = $response2['data'];
      		
      		// ----------------------------------------------------------------------------
            
            // Map abbreviations to PHP time zone identifiers
            $timeZoneMapping = [
                'PST'   => 'America/Los_Angeles',   // Pacific Standard Time
                'EST'   => 'America/New_York',      // Eastern Standard Time
                'CST'   => 'America/Chicago',        // Central Standard Time
                'MST'   => 'America/Denver',         // Mountain Standard Time
                'AKST'  => 'America/Anchorage',      // Alaska Standard Time
                'HAST'  => 'Pacific/Honolulu',       // Hawaii-Aleutian Standard Time
                'SST'   => 'Pacific/Apia',           // Samoa Standard Time
                'CHST'  => 'Pacific/Guam',           // Chamorro Standard Time
            ];

            
            $result_msg = 'Available time slots in '.$timezone;
            // Get the PHP time zone identifier
            $timezone1 = $timeZoneMapping[$timezone]; 
		
      
            // Set the timezone you want to get the current date for
            $timezone = new DateTimeZone($timezone1); // Change this to your desired timezone

            // Create a new DateTime object with the specified timezone
            $date = new DateTime('now', $timezone);

            // Format the date as per your requirement
            $current_date = $date->format('Y-m-d H:i:s');

            $current_date_only = $date->format('m/d/Y '); 
           
            // Remove any extra characters after the date (if any)
            $dateString1 = trim($current_date_only);
            $dateString2 = trim($data);

            // Parse the dates with the correct format
            $date1 = Carbon::createFromFormat('m/d/Y', $dateString1);
            $date2 = Carbon::createFromFormat('m/d/Y', $dateString2);


            if ($date1->eq($date2)) {
                  // ===================================
            // Check if the first element indicates available time slots in PST
                if ($timeSlots[0] === 'Available time slots in PST') {
                    // Find the index of "12:00 PM-1:00 PM"
                    $indexToRemove = array_search('12:00 PM-1:00 PM', $timeSlots);
                    if(empty($indexToRemove)){
                        $indexToRemove = array_search('1:00 PM-2:00 PM', $timeSlots);
                        if(empty($indexToRemove)){
                            $indexToRemove = array_search('2:00 PM-3:00 PM', $timeSlots);
                            if(empty($indexToRemove)){
                                $indexToRemove = array_search('3:00 PM-4:00 PM', $timeSlots);
                                if(empty($indexToRemove)){
                                    $indexToRemove = array_search('4:00 PM-5:00 PM', $timeSlots);
                                }
                            }
                        }
                    }
                    // If found, remove all time slots before "12:00 PM-1:00 PM"
                    if ($indexToRemove !== false) {
                        $timeSlots = array_slice($timeSlots, $indexToRemove);
                    }else{
                        $timeSlots = array('All slots are booked for this date');
                    }

                    $currentDateTime = Carbon::now($timezone1); 
                    $currentHourMinute1 = $currentDateTime->format('h:i A'); // Format: 12:30 AM

                    // Convert the time string to a Carbon instance
                    $carbonTime = Carbon::createFromFormat('h:i A', $currentHourMinute1);

                    // Add 1 hour and set minutes and seconds to zero
                    $currentHourMinute = $carbonTime->addHour()->minute(0)->second(0)->format('h:i A');


                    $timeSlots_arr = []; 
                    if($timeSlots[0] == 'All slots are booked for this date'){
                        $slot = 'All slots are booked for this date';
                        $timeSlots_arr[] = $slot;
                    }else{
                        foreach ($timeSlots as $slot) {
                            // Convert slot time to Carbon instance for comparison
                            $slotTime = Carbon::createFromFormat('h:i A', explode('-', $slot)[0]); // Get start time of the slot
    
                            // Compare the slot time with the provided time
                            if ($slotTime->gte($currentHourMinute)) { // "gte" means greater than or equal to
                                $timeSlots_arr[] = $slot;
                            }
                        }
                    }
                      
                }



                // Check if the first element indicates available time slots in EST
                if ($timeSlots[0] === 'Available time slots in EST') {
                    // Find the index of "3:00 PM-4:00 PM"
                    $indexToRemove = array_search('3:00 PM-4:00 PM', $timeSlots);
                    if(empty($indexToRemove)){
                        $indexToRemove = array_search('4:00 PM-5:00 PM', $timeSlots);
                        if(empty($indexToRemove)){
                            $indexToRemove = array_search('5:00 PM-6:00 PM', $timeSlots);
                            if(empty($indexToRemove)){
                                $indexToRemove = array_search('6:00 PM-7:00 PM', $timeSlots);
                                if(empty($indexToRemove)){
                                    $indexToRemove = array_search('7:00 PM-8:00 PM', $timeSlots);
                                }
                            }
                        }
                    }
                    // If found, remove all time slots before "3:00 PM-4:00 PM"
                    if ($indexToRemove !== false) {
                        $timeSlots = array_slice($timeSlots, $indexToRemove);
                    }else{
                        $timeSlots = array('All slots are booked for this date');
                    }
            

                    $currentDateTime = Carbon::now($timezone1);
                    $currentHourMinute1 = $currentDateTime->format('h:i A'); // Format: 12:30 AM

                    // Convert the time string to a Carbon instance
                    $carbonTime = Carbon::createFromFormat('h:i A', $currentHourMinute1);

                    // Add 1 hour and set minutes and seconds to zero
                    $currentHourMinute = $carbonTime->addHour()->minute(0)->second(0)->format('h:i A');

                    
                    $timeSlots_arr = []; 
                    if($timeSlots[0] == 'All slots are booked for this date'){
                        $slot = 'All slots are booked for this date';
                        $timeSlots_arr[] = $slot;
                    }else{
                        foreach ($timeSlots as $slot) {
                            // Convert slot time to Carbon instance for comparison
                            $slotTime = Carbon::createFromFormat('h:i A', explode('-', $slot)[0]); // Get start time of the slot
    
                            // Compare the slot time with the provided time
                            if ($slotTime->gte($currentHourMinute)) { // "gte" means greater than or equal to
                                $timeSlots_arr[] = $slot;
                            }
                        }
                    }
                    
                    
                    
                }

            

                // Check if the first element indicates available time slots in CST
                if ($timeSlots[0] === 'Available time slots in CST') {
                    // Find the index of "2:00 PM-3:00 PM"
                    $indexToRemove = array_search('2:00 PM-3:00 PM', $timeSlots);
                    if(empty($indexToRemove)){
                        $indexToRemove = array_search('3:00 PM-4:00 PM', $timeSlots);
                        if(empty($indexToRemove)){
                            $indexToRemove = array_search('4:00 PM-5:00 PM', $timeSlots);
                            if(empty($indexToRemove)){
                                $indexToRemove = array_search('5:00 PM-6:00 PM', $timeSlots);
                                if(empty($indexToRemove)){
                                    $indexToRemove = array_search('6:00 PM-7:00 PM', $timeSlots);
                                }
                            }
                        }
                    }
                    // If found, remove all time slots before "2:00 PM-3:00 PM"
                    if ($indexToRemove !== false) {
                        $timeSlots = array_slice($timeSlots, $indexToRemove);
                    }else{
                        $timeSlots = array('All slots are booked for this date');
                    }

                    $currentDateTime = Carbon::now($timezone1);
                    $currentHourMinute1 = $currentDateTime->format('h:i A'); // Format: 12:30 AM

                    // Convert the time string to a Carbon instance
                    $carbonTime = Carbon::createFromFormat('h:i A', $currentHourMinute1);

                    // Add 1 hour and set minutes and seconds to zero
                    $currentHourMinute = $carbonTime->addHour()->minute(0)->second(0)->format('h:i A');

                    
                    $timeSlots_arr = []; 
                    if($timeSlots[0] == 'All slots are booked for this date'){
                        $slot = 'All slots are booked for this date';
                        $timeSlots_arr[] = $slot;
                    }else{
                        foreach ($timeSlots as $slot) {
                            // Convert slot time to Carbon instance for comparison
                            $slotTime = Carbon::createFromFormat('h:i A', explode('-', $slot)[0]); // Get start time of the slot
    
                            // Compare the slot time with the provided time
                            if ($slotTime->gte($currentHourMinute)) { // "gte" means greater than or equal to
                                $timeSlots_arr[] = $slot;
                            }
                        }
                    }
                    
                    
                    
                }

                // Check if the first element indicates available time slots in MST
                if ($timeSlots[0] === 'Available time slots in MST') {
                    // Find the index of "1:00 PM-2:00 PM"
                    $indexToRemove = array_search('1:00 PM-2:00 PM', $timeSlots);
                    if(empty($indexToRemove)){
                        $indexToRemove = array_search('2:00 PM-3:00 PM', $timeSlots);
                        if(empty($indexToRemove)){
                            $indexToRemove = array_search('3:00 PM-4:00 PM', $timeSlots);
                            if(empty($indexToRemove)){
                                $indexToRemove = array_search('4:00 PM-5:00 PM', $timeSlots);
                                if(empty($indexToRemove)){
                                    $indexToRemove = array_search('5:00 PM-6:00 PM', $timeSlots);
                                }
                            }
                        }
                    }
                    // If found, remove all time slots before "1:00 PM-2:00 PM"
                    if ($indexToRemove !== false) {
                        $timeSlots = array_slice($timeSlots, $indexToRemove);
                    }else{
                        $timeSlots = array('All slots are booked for this date');
                    }

                     $currentDateTime = Carbon::now($timezone1);
                    $currentHourMinute1 = $currentDateTime->format('h:i A'); // Format: 12:30 AM

                    // Convert the time string to a Carbon instance
                    $carbonTime = Carbon::createFromFormat('h:i A', $currentHourMinute1);

                    // Add 1 hour and set minutes and seconds to zero
                    $currentHourMinute = $carbonTime->addHour()->minute(0)->second(0)->format('h:i A');

                    
                    $timeSlots_arr = []; 
                    if($timeSlots[0] == 'All slots are booked for this date'){
                        $slot = 'All slots are booked for this date';
                        $timeSlots_arr[] = $slot;
                    }else{
                        
                        foreach ($timeSlots as $slot) {
                            // Convert slot time to Carbon instance for comparison
                            $slotTime = Carbon::createFromFormat('h:i A', explode('-', $slot)[0]); // Get start time of the slot
    
                            // Compare the slot time with the provided time
                            if ($slotTime->gte($currentHourMinute)) { // "gte" means greater than or equal to
                                $timeSlots_arr[] = $slot;
                            }
                        }
                    }
                    
                    
                }


                // Check if the first element indicates available time slots in AKST
                if ($timeSlots[0] === 'Available time slots in AKST') {
                    // Find the index of "11:00 AM-12:00 PM"
                    $indexToRemove = array_search('11:00 AM-12:00 PM', $timeSlots);
                    if(empty($indexToRemove)){
                        $indexToRemove = array_search('12:00 PM-1:00 PM', $timeSlots);
                        if(empty($indexToRemove)){
                            $indexToRemove = array_search('1:00 PM-2:00 PM', $timeSlots);
                            if(empty($indexToRemove)){
                                $indexToRemove = array_search('2:00 PM-3:00 PM', $timeSlots);
                                if(empty($indexToRemove)){
                                    $indexToRemove = array_search('3:00 PM-4:00 PM', $timeSlots);
                                }
                            }
                        }
                    }
                    // If found, remove all time slots before "11:00 AM-12:00 PM"
                    if ($indexToRemove !== false) {
                        $timeSlots = array_slice($timeSlots, $indexToRemove);
                    }else{
                        $timeSlots = array('All slots are booked for this date');
                    }

                    $currentDateTime = Carbon::now($timezone1);
                    $currentHourMinute1 = $currentDateTime->format('h:i A'); // Format: 12:30 AM

                    // Convert the time string to a Carbon instance
                    $carbonTime = Carbon::createFromFormat('h:i A', $currentHourMinute1);

                    // Add 1 hour and set minutes and seconds to zero
                    $currentHourMinute = $carbonTime->addHour()->minute(0)->second(0)->format('h:i A');

    
                    $timeSlots_arr = []; 
                    if($timeSlots[0] == 'All slots are booked for this date'){
                        $slot = 'All slots are booked for this date';
                        $timeSlots_arr[] = $slot;
                    }else{
                        
                        foreach ($timeSlots as $slot) {
                            // Convert slot time to Carbon instance for comparison
                            $slotTime = Carbon::createFromFormat('h:i A', explode('-', $slot)[0]); // Get start time of the slot
    
                            // Compare the slot time with the provided time
                            if ($slotTime->gte($currentHourMinute)) { // "gte" means greater than or equal to
                                $timeSlots_arr[] = $slot;
                            }
                        }
                    }
                    
                }


                // Check if the first element indicates available time slots in HAST
                if ($timeSlots[0] === 'Available time slots in HAST') {
                    // Find the index of "10:00 AM-11:00 AM"
                    $indexToRemove = array_search('10:00 AM-11:00 AM', $timeSlots);
                    if(empty($indexToRemove)){
                        $indexToRemove = array_search('11:00 PM-12:00 PM', $timeSlots);
                        if(empty($indexToRemove)){
                            $indexToRemove = array_search('12:00 PM-1:00 PM', $timeSlots);
                            if(empty($indexToRemove)){
                                $indexToRemove = array_search('1:00 PM-2:00 PM', $timeSlots);
                                if(empty($indexToRemove)){
                                    $indexToRemove = array_search('2:00 PM-3:00 PM', $timeSlots);
                                }
                            }
                        }
                    }
                    // If found, remove all time slots before "10:00 AM-11:00 AM"
                    if ($indexToRemove !== false) {
                        $timeSlots = array_slice($timeSlots, $indexToRemove);
                    }else{
                        $timeSlots = array('All slots are booked for this date');
                    }
                     $currentDateTime = Carbon::now($timezone1);
                    $currentHourMinute1 = $currentDateTime->format('h:i A'); // Format: 12:30 AM

                    // Convert the time string to a Carbon instance
                    $carbonTime = Carbon::createFromFormat('h:i A', $currentHourMinute1);

                    // Add 1 hour and set minutes and seconds to zero
                    $currentHourMinute = $carbonTime->addHour()->minute(0)->second(0)->format('h:i A');


                    $timeSlots_arr = []; 
                    if($timeSlots[0] == 'All slots are booked for this date'){
                        $slot = 'All slots are booked for this date';
                        $timeSlots_arr[] = $slot;
                    }else{
                        
                        foreach ($timeSlots as $slot) {
                            // Convert slot time to Carbon instance for comparison
                            $slotTime = Carbon::createFromFormat('h:i A', explode('-', $slot)[0]); // Get start time of the slot
    
                            // Compare the slot time with the provided time
                            if ($slotTime->gte($currentHourMinute)) { // "gte" means greater than or equal to
                                $timeSlots_arr[] = $slot;
                            }
                        }
                    }
                    
                }

                // Check if the first element indicates available time slots in SST
                if ($timeSlots[0] === 'Available time slots in SST') {
                    // Find the index of "9:00 AM-10:00 AM"
                    $indexToRemove = array_search('9:00 AM-10:00 AM', $timeSlots);
                    if(empty($indexToRemove)){
                        $indexToRemove = array_search('10:00 AM-11:00 AM', $timeSlots);
                        if(empty($indexToRemove)){
                            $indexToRemove = array_search('11:00 AM-12:00 PM', $timeSlots);
                            if(empty($indexToRemove)){
                                $indexToRemove = array_search('12:00 PM-1:00 PM', $timeSlots);
                                if(empty($indexToRemove)){
                                    $indexToRemove = array_search('1:00 PM-2:00 PM', $timeSlots);
                                }
                            }
                        }
                    }
                    // If found, remove all time slots before "9:00 AM-10:00 AM"
                    if ($indexToRemove !== false) {
                        $timeSlots = array_slice($timeSlots, $indexToRemove);
                    }else{
                        $timeSlots = array('All slots are booked for this date');
                    }
                     $currentDateTime = Carbon::now($timezone1);
                    $currentHourMinute1 = $currentDateTime->format('h:i A'); // Format: 12:30 AM

                    // Convert the time string to a Carbon instance
                    $carbonTime = Carbon::createFromFormat('h:i A', $currentHourMinute1);

                    // Add 1 hour and set minutes and seconds to zero
                    $currentHourMinute = $carbonTime->addHour()->minute(0)->second(0)->format('h:i A');


                    $timeSlots_arr = []; 
                    if($timeSlots[0] == 'All slots are booked for this date'){
                        $slot = 'All slots are booked for this date';
                        $timeSlots_arr[] = $slot;
                    }else{
                        
                        foreach ($timeSlots as $slot) {
                            // Convert slot time to Carbon instance for comparison
                            $slotTime = Carbon::createFromFormat('h:i A', explode('-', $slot)[0]); // Get start time of the slot
    
                            // Compare the slot time with the provided time
                            if ($slotTime->gte($currentHourMinute)) { // "gte" means greater than or equal to
                                $timeSlots_arr[] = $slot;
                            }
                        }
                    }
                    
                }


                // Check if the first element indicates available time slots in CHST
                if ($timeSlots[0] === 'Available time slots in CHST') {
                    // Find the index of "6:00 AM-7:00 AM"
                    $indexToRemove = array_search('6:00 AM-7:00 AM', $timeSlots);
                    if(empty($indexToRemove)){
                        $indexToRemove = array_search('7:00 AM-8:00 AM', $timeSlots);
                        if(empty($indexToRemove)){
                            $indexToRemove = array_search('8:00 AM-9:00 AM', $timeSlots);
                            if(empty($indexToRemove)){
                                $indexToRemove = array_search('9:00 AM-10:00 AM', $timeSlots);
                                if(empty($indexToRemove)){
                                    $indexToRemove = array_search('10:00 AM-11:00 AM', $timeSlots);
                                }
                            }
                        }
                    }
                    // If found, remove all time slots before "6:00 AM-7:00 AM"
                    if ($indexToRemove !== false) {
                        $timeSlots = array_slice($timeSlots, $indexToRemove);
                    }else{
                        $timeSlots = array('All slots are booked for this date');
                    }
                     $currentDateTime = Carbon::now($timezone1);
                    $currentHourMinute1 = $currentDateTime->format('h:i A'); // Format: 12:30 AM

                    // Convert the time string to a Carbon instance
                    $carbonTime = Carbon::createFromFormat('h:i A', $currentHourMinute1);

                    // Add 1 hour and set minutes and seconds to zero
                    $currentHourMinute = $carbonTime->addHour()->minute(0)->second(0)->format('h:i A');


                    $timeSlots_arr = []; 
                    if($timeSlots[0] == 'All slots are booked for this date'){
                        $slot = 'All slots are booked for this date';
                        $timeSlots_arr[] = $slot;
                    }else{
                        
                        foreach ($timeSlots as $slot) {
                            // Convert slot time to Carbon instance for comparison
                            $slotTime = Carbon::createFromFormat('h:i A', explode('-', $slot)[0]); // Get start time of the slot
    
                            // Compare the slot time with the provided time
                            if ($slotTime->gte($currentHourMinute)) { // "gte" means greater than or equal to
                                $timeSlots_arr[] = $slot;
                            }
                        }
                    }
                    
                }

            // =========================================


            } else {
              
              
              
      
            // ===================================
             // Check if the first element indicates available time slots in PST
                if ($timeSlots[0] === 'Available time slots in PST') { 
                    // Find the index of "12:00 PM-1:00 PM"
                    $indexToRemove = array_search('12:00 PM-1:00 PM', $timeSlots);
                    if(empty($indexToRemove)){
                        $indexToRemove = array_search('1:00 PM-2:00 PM', $timeSlots);
                        if(empty($indexToRemove)){
                            $indexToRemove = array_search('2:00 PM-3:00 PM', $timeSlots);
                            if(empty($indexToRemove)){
                                $indexToRemove = array_search('3:00 PM-4:00 PM', $timeSlots);
                                if(empty($indexToRemove)){
                                    $indexToRemove = array_search('4:00 PM-5:00 PM', $timeSlots);
                                }
                            }
                        }
                    }

                    // If found, remove all time slots before "12:00 PM-1:00 PM"
                    if ($indexToRemove !== false) {
                        $timeSlots = array_slice($timeSlots, $indexToRemove);
                    }else{
                        $timeSlots = array('All slots are booked for this date');
                    }
               
                }
 

                // Check if the first element indicates available time slots in EST
                if ($timeSlots[0] === 'Available time slots in EST') {
                    // Find the index of "3:00 PM-4:00 PM"
                    $indexToRemove = array_search('3:00 PM-4:00 PM', $timeSlots);
                    if(empty($indexToRemove)){
                        $indexToRemove = array_search('4:00 PM-5:00 PM', $timeSlots);
                        if(empty($indexToRemove)){
                            $indexToRemove = array_search('5:00 PM-6:00 PM', $timeSlots);
                            if(empty($indexToRemove)){
                                $indexToRemove = array_search('6:00 PM-7:00 PM', $timeSlots);
                                if(empty($indexToRemove)){
                                    $indexToRemove = array_search('7:00 PM-8:00 PM', $timeSlots);
                                }
                            }
                        }
                    }
                    // If found, remove all time slots before "3:00 PM-4:00 PM"
                    if ($indexToRemove !== false) {
                        $timeSlots = array_slice($timeSlots, $indexToRemove);
                    }else{
                        $timeSlots = array('All slots are booked for this date');
                    }
                }


                // Check if the first element indicates available time slots in CST
                if ($timeSlots[0] === 'Available time slots in CST') {
                    // Find the index of "2:00 PM-3:00 PM"
                    $indexToRemove = array_search('2:00 PM-3:00 PM', $timeSlots);
                    if(empty($indexToRemove)){
                        $indexToRemove = array_search('3:00 PM-4:00 PM', $timeSlots);
                        if(empty($indexToRemove)){
                            $indexToRemove = array_search('4:00 PM-5:00 PM', $timeSlots);
                            if(empty($indexToRemove)){
                                $indexToRemove = array_search('5:00 PM-6:00 PM', $timeSlots);
                                if(empty($indexToRemove)){
                                    $indexToRemove = array_search('6:00 PM-7:00 PM', $timeSlots);
                                }
                            }
                        }
                    }
                    // If found, remove all time slots before "2:00 PM-3:00 PM"
                    if ($indexToRemove !== false) {
                        $timeSlots = array_slice($timeSlots, $indexToRemove);
                    }else{
                        $timeSlots = array('All slots are booked for this date');
                    }
                }

                // Check if the first element indicates available time slots in MST
                if ($timeSlots[0] === 'Available time slots in MST') {
                    // Find the index of "1:00 PM-2:00 PM"
                    $indexToRemove = array_search('1:00 PM-2:00 PM', $timeSlots);
                    if(empty($indexToRemove)){
                        $indexToRemove = array_search('2:00 PM-3:00 PM', $timeSlots);
                        if(empty($indexToRemove)){
                            $indexToRemove = array_search('3:00 PM-4:00 PM', $timeSlots);
                            if(empty($indexToRemove)){
                                $indexToRemove = array_search('4:00 PM-5:00 PM', $timeSlots);
                                if(empty($indexToRemove)){
                                    $indexToRemove = array_search('5:00 PM-6:00 PM', $timeSlots);
                                }
                            }
                        }
                    }
                    // If found, remove all time slots before "1:00 PM-2:00 PM"
                    if ($indexToRemove !== false) {
                        $timeSlots = array_slice($timeSlots, $indexToRemove);
                    }else{
                        $timeSlots = array('All slots are booked for this date');
                    }
                }

                // Check if the first element indicates available time slots in AKST
                if ($timeSlots[0] === 'Available time slots in AKST') {
                    // Find the index of "11:00 AM-12:00 PM"
                    $indexToRemove = array_search('11:00 AM-12:00 PM', $timeSlots);
                    if(empty($indexToRemove)){
                        $indexToRemove = array_search('12:00 PM-1:00 PM', $timeSlots);
                        if(empty($indexToRemove)){
                            $indexToRemove = array_search('1:00 PM-2:00 PM', $timeSlots);
                            if(empty($indexToRemove)){
                                $indexToRemove = array_search('2:00 PM-3:00 PM', $timeSlots);
                                if(empty($indexToRemove)){
                                    $indexToRemove = array_search('3:00 PM-4:00 PM', $timeSlots);
                                }
                            }
                        }
                    }
                    // If found, remove all time slots before "11:00 AM-12:00 PM"
                    if ($indexToRemove !== false) {
                        $timeSlots = array_slice($timeSlots, $indexToRemove);
                    }else{
                        $timeSlots = array('All slots are booked for this date');
                    }
                }

                // Check if the first element indicates available time slots in HAST
                if ($timeSlots[0] === 'Available time slots in HAST') {
                    // Find the index of "10:00 AM-11:00 AM"
                    $indexToRemove = array_search('10:00 AM-11:00 AM', $timeSlots);
                    if(empty($indexToRemove)){
                        $indexToRemove = array_search('11:00 PM-12:00 PM', $timeSlots);
                        if(empty($indexToRemove)){
                            $indexToRemove = array_search('12:00 PM-1:00 PM', $timeSlots);
                            if(empty($indexToRemove)){
                                $indexToRemove = array_search('1:00 PM-2:00 PM', $timeSlots);
                                if(empty($indexToRemove)){
                                    $indexToRemove = array_search('2:00 PM-3:00 PM', $timeSlots);
                                }
                            }
                        }
                    }
                    // If found, remove all time slots before "10:00 AM-11:00 AM"
                    if ($indexToRemove !== false) {
                        $timeSlots = array_slice($timeSlots, $indexToRemove);
                    }else{
                        $timeSlots = array('All slots are booked for this date');
                    }
                }

                // Check if the first element indicates available time slots in SST
                if ($timeSlots[0] === 'Available time slots in SST') {
                    // Find the index of "9:00 AM-10:00 AM"
                    $indexToRemove = array_search('9:00 AM-10:00 AM', $timeSlots);
                    if(empty($indexToRemove)){
                        $indexToRemove = array_search('10:00 AM-11:00 AM', $timeSlots);
                        if(empty($indexToRemove)){
                            $indexToRemove = array_search('11:00 AM-12:00 PM', $timeSlots);
                            if(empty($indexToRemove)){
                                $indexToRemove = array_search('12:00 PM-1:00 PM', $timeSlots);
                                if(empty($indexToRemove)){
                                    $indexToRemove = array_search('1:00 PM-2:00 PM', $timeSlots);
                                }
                            }
                        }
                    }
                    // If found, remove all time slots before "9:00 AM-10:00 AM"
                    if ($indexToRemove !== false) {
                        $timeSlots = array_slice($timeSlots, $indexToRemove);
                    }else{
                        $timeSlots = array('All slots are booked for this date');
                    }
                }

                // Check if the first element indicates available time slots in CHST
                if ($timeSlots[0] === 'Available time slots in CHST') {
                    // Find the index of "6:00 AM-7:00 AM"
                    $indexToRemove = array_search('6:00 AM-7:00 AM', $timeSlots);
                    if(empty($indexToRemove)){
                        $indexToRemove = array_search('7:00 AM-8:00 AM', $timeSlots);
                        if(empty($indexToRemove)){
                            $indexToRemove = array_search('8:00 AM-9:00 AM', $timeSlots);
                            if(empty($indexToRemove)){
                                $indexToRemove = array_search('9:00 AM-10:00 AM', $timeSlots);
                                if(empty($indexToRemove)){
                                    $indexToRemove = array_search('10:00 AM-11:00 AM', $timeSlots);
                                }
                            }
                        }
                    }
                    // If found, remove all time slots before "6:00 AM-7:00 AM"
                    if ($indexToRemove !== false) {
                        $timeSlots = array_slice($timeSlots, $indexToRemove);
                    }else{
                        $timeSlots = array('All slots are booked for this date');
                    }
                }
              
               
                    // =========================================
            }
            
            
               $timeSlots_arr = $timeSlots;
               array_unshift($timeSlots_arr , $result_msg);
            // ====================================
            if($response2['status'] != 'success'){
  
                $data1 = array(
                      "status"=> 'fail',
                      "message" => 'Something wrong, Check officer email, date and timezone and  try again',
                );
                
                echo json_encode($data1);
                
            }else{
                
                // $data1 = array(
                //       "status"=> $response2['status'],
                //       "slots" => $timeSlots_arr,
                // );
            
                
                if (empty($timeSlots_arr)) {
                    // Array is empty
                    $timeSlots_arr1 = array('no slots available for today');
                    $data1 = array(
                        "status" => $response2['status'],
                        "slots" => $timeSlots_arr1,
                    );
                } else {
                    // Array is not empty
                    $data1 = array(
                        "status" => $response2['status'],
                        "slots" => $timeSlots_arr,
                    );
                }
                
                echo json_encode($data1);
                
            }
             
    }
    
    public function get_available_slots(Request $request)
    {
      
            if(!empty($request->input('timezone'))){
                $timezone = $request->input('timezone');
            }else{
                $timezone = 'PST';
            }
            
            if(!empty($request->input('email'))){
                $email = $request->input('email');
            }else{
                
                $data1 = array(
                      "status"=> 'fail',
                      "message" => 'There is no settlement officer link with case, please set settlement officer first to book appoitment.',
                );
                echo json_encode($data1);
               
            }
            
            $timeSlot = 90;
            $data = $request->input('date');
            $curl = curl_init();

            curl_setopt_array($curl, array(
              CURLOPT_URL => 'https://clearstart.irslogics.com/publicapi/Appointment/GetAvailableSlots?date='.$data.'&timezone='.$timezone.'&email='.$email.'&timeSlot='.$timeSlot.'&apikey=f08f2b3c48ad4134b4ef62abd4aa721d',
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_ENCODING => '',
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 0,
              CURLOPT_FOLLOWLOCATION => true,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_CUSTOMREQUEST => 'GET',
            ));
            
            $response = curl_exec($curl);
            
            curl_close($curl);
            $response2 = json_decode($response, true);
           
             $timeSlots = $response2['data'];
      		
      		// ----------------------------------------------------------------------------
            
            // Map abbreviations to PHP time zone identifiers
            $timeZoneMapping = [
                'PST'   => 'America/Los_Angeles',   // Pacific Standard Time
                'EST'   => 'America/New_York',      // Eastern Standard Time
                'CST'   => 'America/Chicago',        // Central Standard Time
                'MST'   => 'America/Denver',         // Mountain Standard Time
                'AKST'  => 'America/Anchorage',      // Alaska Standard Time
                'HAST'  => 'Pacific/Honolulu',       // Hawaii-Aleutian Standard Time
                'SST'   => 'Pacific/Apia',           // Samoa Standard Time
                'CHST'  => 'Pacific/Guam',           // Chamorro Standard Time
            ];

            
            $result_msg = 'Available time slots in '.$timezone;
            // Get the PHP time zone identifier
            $timezone1 = $timeZoneMapping[$timezone]; 
		
      
            // Set the timezone you want to get the current date for
            $timezone = new DateTimeZone($timezone1); // Change this to your desired timezone

            // Create a new DateTime object with the specified timezone
            $date = new DateTime('now', $timezone);

            // Format the date as per your requirement
            $current_date = $date->format('Y-m-d H:i:s');

            $current_date_only = $date->format('m/d/Y '); 
           
            // Remove any extra characters after the date (if any)
            $dateString1 = trim($current_date_only);
            $dateString2 = trim($data);

            // Parse the dates with the correct format
            $date1 = Carbon::createFromFormat('m/d/Y', $dateString1);
            $date2 = Carbon::createFromFormat('m/d/Y', $dateString2);


            if ($date1->eq($date2)) {
                  // ===================================
            // Check if the first element indicates available time slots in PST
                if ($timeSlots[0] === 'Available time slots in PST') {
                    // Find the index of "12:00 PM-1:00 PM"
                    $indexToRemove = array_search('12:30 PM-2:00 PM', $timeSlots);
                    if(empty($indexToRemove)){
                        $indexToRemove = array_search('2:00 PM-3:30 PM', $timeSlots);
                        if(empty($indexToRemove)){
                            $indexToRemove = array_search('3:30 PM-5:00 PM', $timeSlots);
                            
                        }
                    }
                    // If found, remove all time slots before "12:00 PM-1:00 PM"
                    if ($indexToRemove !== false) {
                        $timeSlots = array_slice($timeSlots, $indexToRemove);
                    }else{
                        $timeSlots = array('All slots are booked for this date');
                    }

                    $currentDateTime = Carbon::now($timezone1); 
                    $currentHourMinute1 = $currentDateTime->format('h:i A'); // Format: 12:30 AM

                    // Convert the time string to a Carbon instance
                    $carbonTime = Carbon::createFromFormat('h:i A', $currentHourMinute1);

                    // Add 1 hour and set minutes and seconds to zero
                    $currentHourMinute = $carbonTime->addHour()->minute(0)->second(0)->format('h:i A'); 
               
                    // Add 45 minutes to the current time
                    $currentHourMinutePlus45 = $carbonTime->addMinutes(45)->format('h:i A');
                    


                    $timeSlots_arr = []; 
                    if($timeSlots[0] == 'All slots are booked for this date'){
                        $slot = 'All slots are booked for this date';
                        $timeSlots_arr[] = $slot;
                    }else{
                        foreach ($timeSlots as $slot) {
                            // Convert slot time to Carbon instance for comparison
                            $slotTime = Carbon::createFromFormat('h:i A', explode('-', $slot)[0]); // Get start time of the slot
   
                            // Compare the slot time with the provided time
                            
                            
                            $roundedUpTime = $currentDateTime->copy()->ceilHour(); 
                            // Add 45 minutes to the current time
                            $addedTime = $currentDateTime->copy()->addMinutes(45);  
        
                            if ($slotTime->gte($roundedUpTime) && $slotTime->gte($addedTime)) { // "gte" means greater than or equal to
                                $timeSlots_arr[] = $slot;
                            }
                        }
                    }
                      
                }



                // Check if the first element indicates available time slots in EST
                if ($timeSlots[0] === 'Available time slots in EST') {
                    // Find the index of "3:00 PM-4:00 PM"
                    $indexToRemove = array_search('3:30 PM-5:00 PM', $timeSlots);
                    if(empty($indexToRemove)){
                        $indexToRemove = array_search('5:00 PM-6:30 PM', $timeSlots);
                        if(empty($indexToRemove)){
                            $indexToRemove = array_search('6:30 PM-8:00 PM', $timeSlots);
                            
                        }
                    }
                    // If found, remove all time slots before "3:00 PM-4:00 PM"
                    if ($indexToRemove !== false) {
                        $timeSlots = array_slice($timeSlots, $indexToRemove);
                    }else{
                        $timeSlots = array('All slots are booked for this date');
                    }
            

                    $currentDateTime = Carbon::now($timezone1);
                    $currentHourMinute1 = $currentDateTime->format('h:i A'); // Format: 12:30 AM

                    // Convert the time string to a Carbon instance
                    $carbonTime = Carbon::createFromFormat('h:i A', $currentHourMinute1);

                    // Add 1 hour and set minutes and seconds to zero
                    $currentHourMinute = $carbonTime->addHour()->minute(0)->second(0)->format('h:i A');

                    $currentHourMinutePlus45 = $carbonTime->addMinutes(45)->format('h:i A');
                    $timeSlots_arr = []; 
                    if($timeSlots[0] == 'All slots are booked for this date'){
                        $slot = 'All slots are booked for this date';
                        $timeSlots_arr[] = $slot;
                    }else{
                        foreach ($timeSlots as $slot) {
                            // Convert slot time to Carbon instance for comparison
                            $slotTime = Carbon::createFromFormat('h:i A', explode('-', $slot)[0]); // Get start time of the slot
    
                            // Compare the slot time with the provided time
                            $roundedUpTime = $currentDateTime->copy()->ceilHour(); 
                            // Add 45 minutes to the current time
                            $addedTime = $currentDateTime->copy()->addMinutes(45);  
        
                            if ($slotTime->gte($roundedUpTime) && $slotTime->gte($addedTime)) { // "gte" means greater than or equal to
                                $timeSlots_arr[] = $slot;
                            }
                            
                            
                        }
                    }
                    
                    
                    
                }

            

                // Check if the first element indicates available time slots in CST
                if ($timeSlots[0] === 'Available time slots in CST') {
                    // Find the index of "2:00 PM-3:00 PM"
                    $indexToRemove = array_search('2:30 PM-4:00 PM', $timeSlots);
                    if(empty($indexToRemove)){
                        $indexToRemove = array_search('4:00 PM-5:30 PM', $timeSlots);
                        if(empty($indexToRemove)){
                            $indexToRemove = array_search('5:30 PM-7:00 PM', $timeSlots);
                            
                        }
                    }
                    // If found, remove all time slots before "2:00 PM-3:00 PM"
                    if ($indexToRemove !== false) {
                        $timeSlots = array_slice($timeSlots, $indexToRemove);
                    }else{
                        $timeSlots = array('All slots are booked for this date');
                    }

                    $currentDateTime = Carbon::now($timezone1);
                    $currentHourMinute1 = $currentDateTime->format('h:i A'); // Format: 12:30 AM

                    // Convert the time string to a Carbon instance
                    $carbonTime = Carbon::createFromFormat('h:i A', $currentHourMinute1);

                    // Add 1 hour and set minutes and seconds to zero
                    $currentHourMinute = $carbonTime->addHour()->minute(0)->second(0)->format('h:i A');

                    $currentHourMinutePlus45 = $carbonTime->addMinutes(45)->format('h:i A');
                    $timeSlots_arr = []; 
                    if($timeSlots[0] == 'All slots are booked for this date'){
                        $slot = 'All slots are booked for this date';
                        $timeSlots_arr[] = $slot;
                    }else{
                        foreach ($timeSlots as $slot) {
                            // Convert slot time to Carbon instance for comparison
                            $slotTime = Carbon::createFromFormat('h:i A', explode('-', $slot)[0]); // Get start time of the slot
    
                            // Compare the slot time with the provided time
                            $roundedUpTime = $currentDateTime->copy()->ceilHour(); 
                            // Add 45 minutes to the current time
                            $addedTime = $currentDateTime->copy()->addMinutes(45);  
        
                            if ($slotTime->gte($roundedUpTime) && $slotTime->gte($addedTime)) { // "gte" means greater than or equal to
                                $timeSlots_arr[] = $slot;
                            }
                        }
                    }
                    
                    
                    
                }

                // Check if the first element indicates available time slots in MST
                if ($timeSlots[0] === 'Available time slots in MST') {
                    // Find the index of "1:00 PM-2:00 PM"
                    $indexToRemove = array_search('1:30 PM-3:00 PM', $timeSlots);
                    if(empty($indexToRemove)){
                        $indexToRemove = array_search('3:00 PM-4:30 PM', $timeSlots);
                        if(empty($indexToRemove)){
                            $indexToRemove = array_search('4:30 PM-6:00 PM', $timeSlots);
                            
                        }
                    }
                    // If found, remove all time slots before "1:00 PM-2:00 PM"
                    if ($indexToRemove !== false) {
                        $timeSlots = array_slice($timeSlots, $indexToRemove);
                    }else{
                        $timeSlots = array('All slots are booked for this date');
                    }

                     $currentDateTime = Carbon::now($timezone1);
                    $currentHourMinute1 = $currentDateTime->format('h:i A'); // Format: 12:30 AM

                    // Convert the time string to a Carbon instance
                    $carbonTime = Carbon::createFromFormat('h:i A', $currentHourMinute1);

                    // Add 1 hour and set minutes and seconds to zero
                    $currentHourMinute = $carbonTime->addHour()->minute(0)->second(0)->format('h:i A');

                    $currentHourMinutePlus45 = $carbonTime->addMinutes(45)->format('h:i A');
                    $timeSlots_arr = []; 
                    if($timeSlots[0] == 'All slots are booked for this date'){
                        $slot = 'All slots are booked for this date';
                        $timeSlots_arr[] = $slot;
                    }else{
                        
                        foreach ($timeSlots as $slot) {
                            // Convert slot time to Carbon instance for comparison
                            $slotTime = Carbon::createFromFormat('h:i A', explode('-', $slot)[0]); // Get start time of the slot
    
                            // Compare the slot time with the provided time
                            $roundedUpTime = $currentDateTime->copy()->ceilHour(); 
                            // Add 45 minutes to the current time
                            $addedTime = $currentDateTime->copy()->addMinutes(45);  
        
                            if ($slotTime->gte($roundedUpTime) && $slotTime->gte($addedTime)) { // "gte" means greater than or equal to
                                $timeSlots_arr[] = $slot;
                            }
                        }
                    }
                    
                    
                }


                // Check if the first element indicates available time slots in AKST
                if ($timeSlots[0] === 'Available time slots in AKST') {
                    // Find the index of "11:00 AM-12:00 PM"
                    $indexToRemove = array_search('11:30 AM-1:00 PM', $timeSlots);
                    if(empty($indexToRemove)){
                        $indexToRemove = array_search('1:00 PM-2:30 PM', $timeSlots);
                        if(empty($indexToRemove)){
                            $indexToRemove = array_search('2:30 PM-4:00 PM', $timeSlots);
                            
                        }
                    }
                    // If found, remove all time slots before "11:00 AM-12:00 PM"
                    if ($indexToRemove !== false) {
                        $timeSlots = array_slice($timeSlots, $indexToRemove);
                    }else{
                        $timeSlots = array('All slots are booked for this date');
                    }

                    $currentDateTime = Carbon::now($timezone1);
                    $currentHourMinute1 = $currentDateTime->format('h:i A'); // Format: 12:30 AM

                    // Convert the time string to a Carbon instance
                    $carbonTime = Carbon::createFromFormat('h:i A', $currentHourMinute1);

                    // Add 1 hour and set minutes and seconds to zero
                    $currentHourMinute = $carbonTime->addHour()->minute(0)->second(0)->format('h:i A');

                    $currentHourMinutePlus45 = $carbonTime->addMinutes(45)->format('h:i A');
                    $timeSlots_arr = []; 
                    if($timeSlots[0] == 'All slots are booked for this date'){
                        $slot = 'All slots are booked for this date';
                        $timeSlots_arr[] = $slot;
                    }else{
                        
                        foreach ($timeSlots as $slot) {
                            // Convert slot time to Carbon instance for comparison
                            $slotTime = Carbon::createFromFormat('h:i A', explode('-', $slot)[0]); // Get start time of the slot
    
                            // Compare the slot time with the provided time
                            $roundedUpTime = $currentDateTime->copy()->ceilHour(); 
                            // Add 45 minutes to the current time
                            $addedTime = $currentDateTime->copy()->addMinutes(45);  
        
                            if ($slotTime->gte($roundedUpTime) && $slotTime->gte($addedTime)) { // "gte" means greater than or equal to
                                $timeSlots_arr[] = $slot;
                            }
                        }
                    }
                    
                }


                // Check if the first element indicates available time slots in HAST
                if ($timeSlots[0] === 'Available time slots in HAST') {
                    // Find the index of "10:00 AM-11:00 AM"
                    $indexToRemove = array_search('10:30 AM-12:00 PM', $timeSlots);
                    if(empty($indexToRemove)){
                        $indexToRemove = array_search('12:00 PM-1:30 PM', $timeSlots);
                        if(empty($indexToRemove)){
                            $indexToRemove = array_search('1:30 PM-3:00 PM', $timeSlots);
                            
                        }
                    }
                    // If found, remove all time slots before "10:00 AM-11:00 AM"
                    if ($indexToRemove !== false) {
                        $timeSlots = array_slice($timeSlots, $indexToRemove);
                    }else{
                        $timeSlots = array('All slots are booked for this date');
                    }
                     $currentDateTime = Carbon::now($timezone1);
                    $currentHourMinute1 = $currentDateTime->format('h:i A'); // Format: 12:30 AM

                    // Convert the time string to a Carbon instance
                    $carbonTime = Carbon::createFromFormat('h:i A', $currentHourMinute1);

                    // Add 1 hour and set minutes and seconds to zero
                    $currentHourMinute = $carbonTime->addHour()->minute(0)->second(0)->format('h:i A');

                    $currentHourMinutePlus45 = $carbonTime->addMinutes(45)->format('h:i A');
                    $timeSlots_arr = []; 
                    if($timeSlots[0] == 'All slots are booked for this date'){
                        $slot = 'All slots are booked for this date';
                        $timeSlots_arr[] = $slot;
                    }else{
                        
                        foreach ($timeSlots as $slot) {
                            // Convert slot time to Carbon instance for comparison
                            $slotTime = Carbon::createFromFormat('h:i A', explode('-', $slot)[0]); // Get start time of the slot
    
                            // Compare the slot time with the provided time
                            $roundedUpTime = $currentDateTime->copy()->ceilHour(); 
                            // Add 45 minutes to the current time
                            $addedTime = $currentDateTime->copy()->addMinutes(45);  
        
                            if ($slotTime->gte($roundedUpTime) && $slotTime->gte($addedTime)) { // "gte" means greater than or equal to
                                $timeSlots_arr[] = $slot;
                            }
                        }
                    }
                    
                }

                // Check if the first element indicates available time slots in SST
                if ($timeSlots[0] === 'Available time slots in SST') {
                    // Find the index of "9:00 AM-10:00 AM"
                    $indexToRemove = array_search('9:30 AM-11:00 AM', $timeSlots);
                    if(empty($indexToRemove)){
                        $indexToRemove = array_search('11:00 AM-12:30 PM', $timeSlots);
                        if(empty($indexToRemove)){
                            $indexToRemove = array_search('12:30 PM-2:00 PM', $timeSlots);
                            
                        }
                    }
                    // If found, remove all time slots before "9:00 AM-10:00 AM"
                    if ($indexToRemove !== false) {
                        $timeSlots = array_slice($timeSlots, $indexToRemove);
                    }else{
                        $timeSlots = array('All slots are booked for this date');
                    }
                     $currentDateTime = Carbon::now($timezone1);
                    $currentHourMinute1 = $currentDateTime->format('h:i A'); // Format: 12:30 AM

                    // Convert the time string to a Carbon instance
                    $carbonTime = Carbon::createFromFormat('h:i A', $currentHourMinute1);

                    // Add 1 hour and set minutes and seconds to zero
                    $currentHourMinute = $carbonTime->addHour()->minute(0)->second(0)->format('h:i A');

                    $currentHourMinutePlus45 = $carbonTime->addMinutes(45)->format('h:i A');
                    $timeSlots_arr = []; 
                    if($timeSlots[0] == 'All slots are booked for this date'){
                        $slot = 'All slots are booked for this date';
                        $timeSlots_arr[] = $slot;
                    }else{
                        
                        foreach ($timeSlots as $slot) {
                            // Convert slot time to Carbon instance for comparison
                            $slotTime = Carbon::createFromFormat('h:i A', explode('-', $slot)[0]); // Get start time of the slot
    
                            // Compare the slot time with the provided time
                            $roundedUpTime = $currentDateTime->copy()->ceilHour(); 
                            // Add 45 minutes to the current time
                            $addedTime = $currentDateTime->copy()->addMinutes(45);  
        
                            if ($slotTime->gte($roundedUpTime) && $slotTime->gte($addedTime)) { // "gte" means greater than or equal to
                                $timeSlots_arr[] = $slot;
                            }
                        }
                    }
                    
                }


                // Check if the first element indicates available time slots in CHST
                if ($timeSlots[0] === 'Available time slots in CHST') {
                    // Find the index of "6:00 AM-7:00 AM"
                    $indexToRemove = array_search('6:30 AM-8:00 AM', $timeSlots);
                    if(empty($indexToRemove)){
                        $indexToRemove = array_search('8:00 AM-9:30 AM', $timeSlots);
                        if(empty($indexToRemove)){
                            $indexToRemove = array_search('9:30 AM-11:00 AM', $timeSlots);
                            
                        }
                    }
                    // If found, remove all time slots before "6:00 AM-7:00 AM"
                    if ($indexToRemove !== false) {
                        $timeSlots = array_slice($timeSlots, $indexToRemove);
                    }else{
                        $timeSlots = array('All slots are booked for this date');
                    }
                     $currentDateTime = Carbon::now($timezone1);
                    $currentHourMinute1 = $currentDateTime->format('h:i A'); // Format: 12:30 AM

                    // Convert the time string to a Carbon instance
                    $carbonTime = Carbon::createFromFormat('h:i A', $currentHourMinute1);

                    // Add 1 hour and set minutes and seconds to zero
                    $currentHourMinute = $carbonTime->addHour()->minute(0)->second(0)->format('h:i A');

                    $currentHourMinutePlus45 = $carbonTime->addMinutes(45)->format('h:i A');
                    $timeSlots_arr = []; 
                    if($timeSlots[0] == 'All slots are booked for this date'){
                        $slot = 'All slots are booked for this date';
                        $timeSlots_arr[] = $slot;
                    }else{
                        
                        foreach ($timeSlots as $slot) {
                            // Convert slot time to Carbon instance for comparison
                            $slotTime = Carbon::createFromFormat('h:i A', explode('-', $slot)[0]); // Get start time of the slot
    
                            // Compare the slot time with the provided time
                            $roundedUpTime = $currentDateTime->copy()->ceilHour(); 
                            // Add 45 minutes to the current time
                            $addedTime = $currentDateTime->copy()->addMinutes(45);  
        
                            if ($slotTime->gte($roundedUpTime) && $slotTime->gte($addedTime)) { // "gte" means greater than or equal to
                                $timeSlots_arr[] = $slot;
                            }
                        }
                    }
                    
                }

            // =========================================


            } else {
              
              
              
      
            // ===================================
             // Check if the first element indicates available time slots in PST
                if ($timeSlots[0] === 'Available time slots in PST') { 
                    // Find the index of "12:00 PM-1:00 PM"
                    $indexToRemove = array_search('12:30 PM-2:00 PM', $timeSlots);
                    if(empty($indexToRemove)){
                        $indexToRemove = array_search('2:00 PM-3:30 PM', $timeSlots);
                        if(empty($indexToRemove)){
                            $indexToRemove = array_search('3:30 PM-5:00 PM', $timeSlots);
                            
                        }
                    }

                    // If found, remove all time slots before "12:00 PM-1:00 PM"
                    if ($indexToRemove !== false) {
                        $timeSlots = array_slice($timeSlots, $indexToRemove);
                    }else{
                        $timeSlots = array('All slots are booked for this date');
                    }
               
                }
 

                // Check if the first element indicates available time slots in EST
                if ($timeSlots[0] === 'Available time slots in EST') {
                    // Find the index of "3:00 PM-4:00 PM"
                    
                    $indexToRemove = array_search('3:30 PM-5:00 PM', $timeSlots);
                    if(empty($indexToRemove)){
                        $indexToRemove = array_search('5:00 PM-6:30 PM', $timeSlots);
                        if(empty($indexToRemove)){
                            $indexToRemove = array_search('6:30 PM-8:00 PM', $timeSlots);
                            
                        }
                    }
                    
                    // If found, remove all time slots before "3:00 PM-4:00 PM"
                    if ($indexToRemove !== false) {
                        $timeSlots = array_slice($timeSlots, $indexToRemove);
                    }else{
                        $timeSlots = array('All slots are booked for this date');
                    }
                }


                // Check if the first element indicates available time slots in CST
                if ($timeSlots[0] === 'Available time slots in CST') {
                    // Find the index of "2:00 PM-3:00 PM"
                    $indexToRemove = array_search('2:30 PM-4:00 PM', $timeSlots);
                    if(empty($indexToRemove)){
                        $indexToRemove = array_search('4:00 PM-5:30 PM', $timeSlots);
                        if(empty($indexToRemove)){
                            $indexToRemove = array_search('5:30 PM-7:00 PM', $timeSlots);
                            
                        }
                    }
                    // If found, remove all time slots before "2:00 PM-3:00 PM"
                    if ($indexToRemove !== false) {
                        $timeSlots = array_slice($timeSlots, $indexToRemove);
                    }else{
                        $timeSlots = array('All slots are booked for this date');
                    }
                }

                // Check if the first element indicates available time slots in MST
                if ($timeSlots[0] === 'Available time slots in MST') {
                    // Find the index of "1:00 PM-2:00 PM"
                    $indexToRemove = array_search('1:30 PM-3:00 PM', $timeSlots);
                    if(empty($indexToRemove)){
                        $indexToRemove = array_search('3:00 PM-4:30 PM', $timeSlots);
                        if(empty($indexToRemove)){
                            $indexToRemove = array_search('4:30 PM-6:00 PM', $timeSlots);
                            
                        }
                    }
                    // If found, remove all time slots before "1:00 PM-2:00 PM"
                    if ($indexToRemove !== false) {
                        $timeSlots = array_slice($timeSlots, $indexToRemove);
                    }else{
                        $timeSlots = array('All slots are booked for this date');
                    }
                }

                // Check if the first element indicates available time slots in AKST
                if ($timeSlots[0] === 'Available time slots in AKST') {
                    // Find the index of "11:00 AM-12:00 PM"
                    $indexToRemove = array_search('11:30 AM-1:00 PM', $timeSlots);
                    if(empty($indexToRemove)){
                        $indexToRemove = array_search('1:00 PM-2:30 PM', $timeSlots);
                        if(empty($indexToRemove)){
                            $indexToRemove = array_search('2:30 PM-4:00 PM', $timeSlots);
                            
                        }
                    }
                    // If found, remove all time slots before "11:00 AM-12:00 PM"
                    if ($indexToRemove !== false) {
                        $timeSlots = array_slice($timeSlots, $indexToRemove);
                    }else{
                        $timeSlots = array('All slots are booked for this date');
                    }
                }

                // Check if the first element indicates available time slots in HAST
                if ($timeSlots[0] === 'Available time slots in HAST') {
                    // Find the index of "10:00 AM-11:00 AM"
                    $indexToRemove = array_search('10:30 AM-12:00 PM', $timeSlots);
                    if(empty($indexToRemove)){
                        $indexToRemove = array_search('12:00 PM-1:30 PM', $timeSlots);
                        if(empty($indexToRemove)){
                            $indexToRemove = array_search('1:30 PM-3:00 PM', $timeSlots);
                            
                        }
                    }
                    // If found, remove all time slots before "10:00 AM-11:00 AM"
                    if ($indexToRemove !== false) {
                        $timeSlots = array_slice($timeSlots, $indexToRemove);
                    }else{
                        $timeSlots = array('All slots are booked for this date');
                    }
                }

                // Check if the first element indicates available time slots in SST
                if ($timeSlots[0] === 'Available time slots in SST') {
                    // Find the index of "9:00 AM-10:00 AM"
                    $indexToRemove = array_search('9:30 AM-11:00 AM', $timeSlots);
                    if(empty($indexToRemove)){
                        $indexToRemove = array_search('11:00 AM-12:30 PM', $timeSlots);
                        if(empty($indexToRemove)){
                            $indexToRemove = array_search('12:30 PM-2:00 PM', $timeSlots);
                            
                        }
                    }
                    // If found, remove all time slots before "9:00 AM-10:00 AM"
                    if ($indexToRemove !== false) {
                        $timeSlots = array_slice($timeSlots, $indexToRemove);
                    }else{
                        $timeSlots = array('All slots are booked for this date');
                    }
                }

                // Check if the first element indicates available time slots in CHST
                if ($timeSlots[0] === 'Available time slots in CHST') {
                    // Find the index of "6:00 AM-7:00 AM"
                    $indexToRemove = array_search('6:30 AM-8:00 AM', $timeSlots);
                    if(empty($indexToRemove)){
                        $indexToRemove = array_search('8:00 AM-9:30 AM', $timeSlots);
                        if(empty($indexToRemove)){
                            $indexToRemove = array_search('9:30 AM-11:00 AM', $timeSlots);
                            
                        }
                    }
                    // If found, remove all time slots before "6:00 AM-7:00 AM"
                    if ($indexToRemove !== false) {
                        $timeSlots = array_slice($timeSlots, $indexToRemove);
                    }else{
                        $timeSlots = array('All slots are booked for this date');
                    }
                }
             
               
                    // =========================================
            }
            
            
               $timeSlots_arr = $timeSlots;
               array_unshift($timeSlots_arr , $result_msg);
            // ====================================
            if($response2['status'] != 'success'){
  
                $data1 = array(
                      "status"=> 'fail',
                      "message" => 'Something wrong, Check officer email, date and timezone and  try again',
                );
                
                echo json_encode($data1);
                
            }else{
                
                // $data1 = array(
                //       "status"=> $response2['status'],
                //       "slots" => $timeSlots_arr,
                // );
            
                
                if (empty($timeSlots_arr)) {
                    // Array is empty
                    $timeSlots_arr1 = array('no slots available for today');
                    $data1 = array(
                        "status" => $response2['status'],
                        "slots" => $timeSlots_arr1,
                    );
                } else {
                    // Array is not empty
                    $data1 = array(
                        "status" => $response2['status'],
                        "slots" => $timeSlots_arr,
                    );
                }
                
                echo json_encode($data1);
                
            }
             
    }
    
    
    public function book_appointment(Request $request)
    {
        
            if(!empty($request->input('timezone'))){
                $timezone = $request->input('timezone');
            }else{
                $timezone = 'PST';
            }
            
            if(!empty($request->input('email'))){
                $email = $request->input('email');
            }else{
                
                $data1 = array(
                      "status"=> 'fail',
                      "message" => 'There is no settlement officer link with case, please set settlement officer first to book appoitment.',
                );
                echo json_encode($data1);
               
            }
            $timeSlot = 90;
            if(!empty($request->input('date_slot'))){
                $data = $request->input('date_slot');
            }else{
                
                $data1 = array(
                      "status"=> 'fail',
                      "message" => 'There is no slot available to book appoitment, please select.',
                );
                echo json_encode($data1);
               
            }
        
           
            $CaseID = Auth::user()->case_id;
            if(!empty($request->input('comment'))){
                $Comments = $request->input('comment');
            }else{
                $Comments = 'Appointment booked through client portal';
            }
           
            
            
            $curl = curl_init();
            
            $data1 = array(
                  "AgentEmail"=> $email,
                  "Date" => $data,
                  "CaseID" => $CaseID,
                  "Comments" => $Comments,
                  "TimeZone" => $timezone,
                  "TimeSlot" => $timeSlot,
                  "Subject" => "Appointment booked through client portal",
                  "EventTypeID" =>1011
                
            );
            $encodedData = json_encode($data1);
       
            curl_setopt_array($curl, array(
              CURLOPT_URL => 'https://clearstart.irslogics.com/publicapi/Appointment/BookAppointment?apikey=f08f2b3c48ad4134b4ef62abd4aa721d',
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_ENCODING => '',
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 0,
              CURLOPT_FOLLOWLOCATION => true,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_CUSTOMREQUEST => 'POST',
              CURLOPT_POSTFIELDS => $encodedData,
              CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'
              ),
            ));
            
            $response = curl_exec($curl);
            
            curl_close($curl);

            $response2 = json_decode($response, true);
           
            
            if($response2['status'] != 'success'){
                $data1 = array(
                      "status"=> 'fail',
                      "message" => 'Please try again.',
                );
                echo json_encode($data1);
                // return redirect()->back()->with('error', 'Please try again');
                
            }else{
                
                $data1 = array(
                      "status"=> $response2['status'],
                      "message" => $response2['data'],
                );
                
                echo json_encode($data1);
                
            }
            
        
          
    }
 
}
