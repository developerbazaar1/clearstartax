<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\Status;
use App\Models\Faq;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use DateTime;
use DateTimeZone;
use Exception;
use Carbon\Carbon;

class HomeController extends Controller
{
    
    public function dashboard()
    {
         // -----greeting code
        $user_ip = $_SERVER['REMOTE_ADDR'];

        // Send API request to ip-api.com
        $api_url = "http://ip-api.com/json/{$user_ip}";
        $response = file_get_contents($api_url);
        
        // Decode the response JSON
        $data = json_decode($response, true);
        if($data['status'] ==  'fail'){
            $greeting = 'Hello';
        }else{

            // Extract country and timezone
            $country = $data['country'];
            $timezone = $data['timezone'];
            
            // Output the country and timezone
             "Country: " . $country . "<br>";
             "Timezone: " . $timezone;  

            // Set the default time zone
            date_default_timezone_set($timezone);
            
            // Get the current time
             $current_time = date('H:i');
            
            // Define the time ranges and corresponding greetings
            $time_ranges = array(
                array('start' => '05:00', 'end' => '11:59', 'greeting' => 'Good morning'),
                array('start' => '12:00', 'end' => '16:59', 'greeting' => 'Good afternoon'),
                array('start' => '17:00', 'end' => '23:59', 'greeting' => 'Good evening'),
                array('start' => '00:00', 'end' => '04:59', 'greeting' => 'Good night')
            );
            
            // Determine the greeting based on the current time
            $greeting = '';
            foreach ($time_ranges as $range) {
                if ($current_time >= $range['start'] && $current_time <= $range['end']) {
                    $greeting = $range['greeting'];
                    break;
                }
            }
        }

        // --------caseid details
            $case_id = Auth::user()->case_id;
            
            $curl = curl_init();
            
            curl_setopt_array($curl, array(
              CURLOPT_URL => 'https://clearstart.irslogics.com/publicapi/2020-02-22/cases/casefile?CaseID='.$case_id.'&apikey=f08f2b3c48ad4134b4ef62abd4aa721d',
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

            $response = json_decode($response, true);  
            if($response['status'] == 'fail'){
  
                return response()->json([
                    'status' => false,
                    'message' => 'Please enter correct email id and case Id',
                ], 401);
            }else{


                if(empty($response['Message'])){
                   
                    if($response['status'] == 'success'){
                        $response2 = json_decode($response['data'], true);
                            
                            $statusid = $response2['StatusID']; 
                            $statusname = $response2['StatusName']; 
                            
                           
                    }else{
                        
                        return response()->json([
                            'status' => false,
                            'message' => 'The request is invalid, Please try again',
                        ], 401);
                    }
                }else{
                         
                        return response()->json([
                            'status' => false,
                            'message' => 'The request is invalid, Please try again',
                        ], 401);
                }  

            }  

            if($statusid){ 
                $status_id = $statusid;
                $statusinfo = Status::where('status_code', $status_id)->first(); 
            }else{
                $status_id = '';
                $statusinfo = '';
            } 

            if($statusname){ 
                $status_name = $statusname;
            }else{
                $status_name = '';
            }         
        $status_for_fq = array('286', '278', '274'); 
        $status_for_to = array('316', '25'); 
        $status_for_appointment = array('260'); 
        $arr_data = array(
            "greeting" => $greeting,
            "status_id" => $status_id,
            "status_name" => $status_name,
            "statusinfo" => $statusinfo,
            "status_for_fq" => $status_for_fq,
            "status_for_to" => $status_for_to,
            "status_for_appointment" => $status_for_appointment,

        );
        return response()->json([
            'status' => true,
            'message' => 'Get dashboard page data successfully',
            'data' => $arr_data,
        ], 200);
        
    }

    public function get_status()
    {   
       
        $status = status::all();
        if($status){
            return response()->json([
                'status' => true,
                'message' => 'Get status data successfully',
                'data' => $status,
            ], 200);
        }else{
            return response()->json([
                'status' => false,
                'message' => 'status not exist, please try again',
            ], 401);
        }
       
    }


    public function get_faqs(Request $request)
    {   
        if ($request->has('limit')) {
            $limit = $request->input('limit');
        }else{
            $limit = 5000;
        }
        
        if ($request->has('offset')) {
            $offset = $request->input('offset');
        }else{
            $offset = 0;
        }

        $faq = Faq::where('type', 'processing')->skip($offset)->take($limit)->get();
        $faqs = Faq::where('type', 'service')->skip($offset)->take($limit)->get();

        $arr_data = array(
            'processing_faqs'=> $faq,
            'service_faqs'=> $faqs,
        );
        
        if($faq || $faqs){
            return response()->json([
                'status' => true,
                'message' => 'Get faqs data successfully',
                'data' => $arr_data,
            ], 200);
        }else{
            return response()->json([
                'status' => false,
                'message' => 'faq not exist, please try again',
            ], 401);
        }
       
    }


    public function get_in_touch(Request $request)
    { 
         $clientname = Auth::user()->name;
        $clientcaseid = Auth::user()->case_id;
        $sub1 = "Message from [".$clientname."] CASE ID:" .$clientcaseid;
        
        
        
          $curl = curl_init();
        
        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://clearstart.irslogics.com/publicapi/Appointment/GetSetOfficerEmail?CaseID='.$clientcaseid.'&apikey=f08f2b3c48ad4134b4ef62abd4aa721d',
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
        
        $response = json_decode($response, true);  
        
        if($response['status'] != 'success'){
        
            $settlement_officer = '';
            
        }else{
    
            if($response['status'] == 'success'){
                $officerdata = $response['data'];
                // Use preg_match to extract email address
                if (preg_match('/[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}/', $officerdata, $matches)) {
                    $settlement_officer = $matches[0];
                } else {
                    $settlement_officer = '';
                }
            }
        }
                        
        // ------------------------------------
        
           
            $curl1 = curl_init();
            
            curl_setopt_array($curl1, array(
              CURLOPT_URL => 'https://clearstart.irslogics.com/publicapi/2020-02-22/cases/casefile?CaseID='.$clientcaseid.'&apikey=f08f2b3c48ad4134b4ef62abd4aa721d',
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_ENCODING => '',
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 0,
              CURLOPT_FOLLOWLOCATION => true,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_CUSTOMREQUEST => 'GET',
            ));
            
            $response1 = curl_exec($curl1);
            
            curl_close($curl1);

            $response1 = json_decode($response1, true);  
            if($response1['status'] == 'fail'){
                return response()->json([
                    'status' => false,
                    'message' => 'Please enter correct email id and case Id',
                ], 401);
                
            }else{


                if(empty($response1['Message'])){
                   
                    if($response1['status'] == 'success'){
                        $response2 = json_decode($response1['data'], true);
                            
                            $statusid = $response2['StatusID']; 
                            $statusname = $response2['StatusName']; 
                            
                           
                    }else{
                        return response()->json([
                            'status' => false,
                            'message' => 'The request is invalid, Please try again',
                        ], 401);
                       
                    }
                }else{
                        return response()->json([
                            'status' => false,
                            'message' => 'The request is invalid, Please try again',
                        ], 401); 
                }  

            }  

            if($statusid){ 
                $status_id = $statusid;
                $statusinfo = Status::where('status_code', $status_id)->first(); 
            }else{
                $status_id = '';
                $statusinfo = '';
            } 

            if($statusname){ 
                $status_name = $statusname;
            }else{
                $status_name = '';
            }      
          
            
        // ====================================
            
         
       
        $curl = curl_init();
        
        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://clearstart.irslogics.com/publicapi/2020-02-22/cases/caseinfo?CaseID=18259&apikey=f08f2b3c48ad4134b4ef62abd4aa721d',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'GET',
        ));
        
        $response_new = curl_exec($curl);
        
        curl_close($curl);
        $responseData = json_decode($response_new, true);  
            if ($responseData['status'] === 'success') {
                $teamName = $responseData['data']['TeamName'];
                if($teamName){
                    $teamName = $teamName;
                }else{
                    $teamName = "";
                }
            } else {
                return response()->json([
                    'status' => false,
                    'message' => 'Please enter correct email id and case Id',
                ], 401);
                
                
            }
           
        // ======================================    
            
      
      	$document = $request->file('attachment');

        $email_data = array(
            'name'      => $request->name,
            'email'     => $request->email,
            'subject1'  => $request->subject,
            'message1'  => $request->message,
            'case_id'   => $clientcaseid,
            'status'    => $status_name,
            'officer'   => $settlement_officer,
            'team'      => $teamName
        );

        Mail::send('simple_contact_template', $email_data, function ($message) use ($email_data, $sub1, $document) {
             $message->to('info@clearstarttax.com', 'Team')
                ->subject($sub1)
                ->from('no-reply@clearstarttax.com', 'Clear Start Tax');

            // Check if $document is defined and not null
            if ($document) {
                $message->attach($document->getRealPath(), [
                    'as'   => $document->getClientOriginalName(),
                    'mime' => $document->getClientMimeType(),
                ]);
            }
        });
        
        

        return response()->json([
            'status' => true,
            'message' => "Your message has been successfully sent. Our team is dedicated to providing you with a prompt and helpful response. You can expect to hear back from us shortly. If you require immediate assistance, please don't hesitate to call us at 888-235-0004 M-F 8AM - 5PM PST.",
        ], 200);

    }
  
   public function get_user(Request $request)
    {   
        $user = User::where('id', Auth::user()->id )->first(); 
       
        if($user){
            return response()->json([
                'status' => true,
                'message' => 'Get user data successfully',
                'user' => $user,
            ], 200);
        }else{
            return response()->json([
                'status' => false,
                'message' => 'User not exist, please try again',
            ], 400);
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
    
     public function get_available_slots_with45(Request $request)
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
    
    
    public function get_available_slots_old1(Request $request)
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

                    // If found, remove all time slots before "12:00 PM-1:00 PM"
                    if ($indexToRemove !== false) {
                        $timeSlots = array_slice($timeSlots, $indexToRemove);
                    }

                    $currentDateTime = Carbon::now($timezone1);
                    $currentHourMinute1 = $currentDateTime->format('h:i A'); // Format: 12:30 AM

                    // Convert the time string to a Carbon instance
                    $carbonTime = Carbon::createFromFormat('h:i A', $currentHourMinute1);

                    // Add 1 hour and set minutes and seconds to zero
                    $currentHourMinute = $carbonTime->addHour()->minute(0)->second(0)->format('h:i A');


                    $timeSlots_arr = [];
                    foreach ($timeSlots as $slot) {
                        // Convert slot time to Carbon instance for comparison
                        $slotTime = Carbon::createFromFormat('h:i A', explode('-', $slot)[0]); // Get start time of the slot

                        // Compare the slot time with the provided time
                        if ($slotTime->gte($currentHourMinute)) { // "gte" means greater than or equal to
                            $timeSlots_arr[] = $slot;
                        }
                    }
                    
                }



                // Check if the first element indicates available time slots in EST
                if ($timeSlots[0] === 'Available time slots in EST') {
                    // Find the index of "3:00 PM-4:00 PM"
                    $indexToRemove = array_search('3:00 PM-4:00 PM', $timeSlots);

                    // If found, remove all time slots before "3:00 PM-4:00 PM"
                    if ($indexToRemove !== false) {
                        $timeSlots = array_slice($timeSlots, $indexToRemove);
                    }
            

                    $currentDateTime = Carbon::now($timezone1);
                    $currentHourMinute1 = $currentDateTime->format('h:i A'); // Format: 12:30 AM

                    // Convert the time string to a Carbon instance
                    $carbonTime = Carbon::createFromFormat('h:i A', $currentHourMinute1);

                    // Add 1 hour and set minutes and seconds to zero
                    $currentHourMinute = $carbonTime->addHour()->minute(0)->second(0)->format('h:i A');


                    $timeSlots_arr = [];
                    foreach ($timeSlots as $slot) {
                        // Convert slot time to Carbon instance for comparison
                        $slotTime = Carbon::createFromFormat('h:i A', explode('-', $slot)[0]); // Get start time of the slot

                        // Compare the slot time with the provided time
                        if ($slotTime->gte($currentHourMinute)) { // "gte" means greater than or equal to
                            $timeSlots_arr[] = $slot;
                        }
                    }
                }

            

                // Check if the first element indicates available time slots in CST
                if ($timeSlots[0] === 'Available time slots in CST') {
                    // Find the index of "2:00 PM-3:00 PM"
                    $indexToRemove = array_search('2:00 PM-3:00 PM', $timeSlots);

                    // If found, remove all time slots before "2:00 PM-3:00 PM"
                    if ($indexToRemove !== false) {
                        $timeSlots = array_slice($timeSlots, $indexToRemove);
                    }

                    $currentDateTime = Carbon::now($timezone1);
                    $currentHourMinute1 = $currentDateTime->format('h:i A'); // Format: 12:30 AM

                    // Convert the time string to a Carbon instance
                    $carbonTime = Carbon::createFromFormat('h:i A', $currentHourMinute1);

                    // Add 1 hour and set minutes and seconds to zero
                    $currentHourMinute = $carbonTime->addHour()->minute(0)->second(0)->format('h:i A');


                    $timeSlots_arr = [];
                    foreach ($timeSlots as $slot) {
                        // Convert slot time to Carbon instance for comparison
                        $slotTime = Carbon::createFromFormat('h:i A', explode('-', $slot)[0]); // Get start time of the slot

                        // Compare the slot time with the provided time
                        if ($slotTime->gte($currentHourMinute)) { // "gte" means greater than or equal to
                            $timeSlots_arr[] = $slot;
                        }
                    }
                }

                // Check if the first element indicates available time slots in MST
                if ($timeSlots[0] === 'Available time slots in MST') {
                    // Find the index of "1:00 PM-2:00 PM"
                    $indexToRemove = array_search('1:00 PM-2:00 PM', $timeSlots);

                    // If found, remove all time slots before "1:00 PM-2:00 PM"
                    if ($indexToRemove !== false) {
                        $timeSlots = array_slice($timeSlots, $indexToRemove);
                    }

                     $currentDateTime = Carbon::now($timezone1);
                    $currentHourMinute1 = $currentDateTime->format('h:i A'); // Format: 12:30 AM

                    // Convert the time string to a Carbon instance
                    $carbonTime = Carbon::createFromFormat('h:i A', $currentHourMinute1);

                    // Add 1 hour and set minutes and seconds to zero
                    $currentHourMinute = $carbonTime->addHour()->minute(0)->second(0)->format('h:i A');


                    $timeSlots_arr = [];
                    foreach ($timeSlots as $slot) {
                        // Convert slot time to Carbon instance for comparison
                        $slotTime = Carbon::createFromFormat('h:i A', explode('-', $slot)[0]); // Get start time of the slot

                        // Compare the slot time with the provided time
                        if ($slotTime->gte($currentHourMinute)) { // "gte" means greater than or equal to
                            $timeSlots_arr[] = $slot;
                        }
                    }
                }


                // Check if the first element indicates available time slots in AKST
                if ($timeSlots[0] === 'Available time slots in AKST') {
                    // Find the index of "11:00 AM-12:00 PM"
                    $indexToRemove = array_search('11:00 AM-12:00 PM', $timeSlots);

                    // If found, remove all time slots before "11:00 AM-12:00 PM"
                    if ($indexToRemove !== false) {
                        $timeSlots = array_slice($timeSlots, $indexToRemove);
                    }

                    $currentDateTime = Carbon::now($timezone1);
                    $currentHourMinute1 = $currentDateTime->format('h:i A'); // Format: 12:30 AM

                    // Convert the time string to a Carbon instance
                    $carbonTime = Carbon::createFromFormat('h:i A', $currentHourMinute1);

                    // Add 1 hour and set minutes and seconds to zero
                    $currentHourMinute = $carbonTime->addHour()->minute(0)->second(0)->format('h:i A');


                    $timeSlots_arr = [];
                    foreach ($timeSlots as $slot) {
                        // Convert slot time to Carbon instance for comparison
                        $slotTime = Carbon::createFromFormat('h:i A', explode('-', $slot)[0]); // Get start time of the slot

                        // Compare the slot time with the provided time
                        if ($slotTime->gte($currentHourMinute)) { // "gte" means greater than or equal to
                            $timeSlots_arr[] = $slot;
                        }
                    }
                }


                // Check if the first element indicates available time slots in HAST
                if ($timeSlots[0] === 'Available time slots in HAST') {
                    // Find the index of "10:00 AM-11:00 AM"
                    $indexToRemove = array_search('10:00 AM-11:00 AM', $timeSlots);

                    // If found, remove all time slots before "10:00 AM-11:00 AM"
                    if ($indexToRemove !== false) {
                        $timeSlots = array_slice($timeSlots, $indexToRemove);
                    }
                     $currentDateTime = Carbon::now($timezone1);
                    $currentHourMinute1 = $currentDateTime->format('h:i A'); // Format: 12:30 AM

                    // Convert the time string to a Carbon instance
                    $carbonTime = Carbon::createFromFormat('h:i A', $currentHourMinute1);

                    // Add 1 hour and set minutes and seconds to zero
                    $currentHourMinute = $carbonTime->addHour()->minute(0)->second(0)->format('h:i A');


                    $timeSlots_arr = [];
                    foreach ($timeSlots as $slot) {
                        // Convert slot time to Carbon instance for comparison
                        $slotTime = Carbon::createFromFormat('h:i A', explode('-', $slot)[0]); // Get start time of the slot

                        // Compare the slot time with the provided time
                        if ($slotTime->gte($currentHourMinute)) { // "gte" means greater than or equal to
                            $timeSlots_arr[] = $slot;
                        }
                    }
                }

                // Check if the first element indicates available time slots in SST
                if ($timeSlots[0] === 'Available time slots in SST') {
                    // Find the index of "9:00 AM-10:00 AM"
                    $indexToRemove = array_search('9:00 AM-10:00 AM', $timeSlots);

                    // If found, remove all time slots before "9:00 AM-10:00 AM"
                    if ($indexToRemove !== false) {
                        $timeSlots = array_slice($timeSlots, $indexToRemove);
                    }
                     $currentDateTime = Carbon::now($timezone1);
                    $currentHourMinute1 = $currentDateTime->format('h:i A'); // Format: 12:30 AM

                    // Convert the time string to a Carbon instance
                    $carbonTime = Carbon::createFromFormat('h:i A', $currentHourMinute1);

                    // Add 1 hour and set minutes and seconds to zero
                    $currentHourMinute = $carbonTime->addHour()->minute(0)->second(0)->format('h:i A');


                    $timeSlots_arr = [];
                    foreach ($timeSlots as $slot) {
                        // Convert slot time to Carbon instance for comparison
                        $slotTime = Carbon::createFromFormat('h:i A', explode('-', $slot)[0]); // Get start time of the slot

                        // Compare the slot time with the provided time
                        if ($slotTime->gte($currentHourMinute)) { // "gte" means greater than or equal to
                            $timeSlots_arr[] = $slot;
                        }
                    }
                }


                // Check if the first element indicates available time slots in CHST
                if ($timeSlots[0] === 'Available time slots in CHST') {
                    // Find the index of "6:00 AM-7:00 AM"
                    $indexToRemove = array_search('6:00 AM-7:00 AM', $timeSlots);

                    // If found, remove all time slots before "6:00 AM-7:00 AM"
                    if ($indexToRemove !== false) {
                        $timeSlots = array_slice($timeSlots, $indexToRemove);
                    }
                     $currentDateTime = Carbon::now($timezone1);
                    $currentHourMinute1 = $currentDateTime->format('h:i A'); // Format: 12:30 AM

                    // Convert the time string to a Carbon instance
                    $carbonTime = Carbon::createFromFormat('h:i A', $currentHourMinute1);

                    // Add 1 hour and set minutes and seconds to zero
                    $currentHourMinute = $carbonTime->addHour()->minute(0)->second(0)->format('h:i A');


                    $timeSlots_arr = [];
                    foreach ($timeSlots as $slot) {
                        // Convert slot time to Carbon instance for comparison
                        $slotTime = Carbon::createFromFormat('h:i A', explode('-', $slot)[0]); // Get start time of the slot

                        // Compare the slot time with the provided time
                        if ($slotTime->gte($currentHourMinute)) { // "gte" means greater than or equal to
                            $timeSlots_arr[] = $slot;
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

                    // If found, remove all time slots before "12:00 PM-1:00 PM"
                    if ($indexToRemove !== false) {
                        $timeSlots = array_slice($timeSlots, $indexToRemove);
                    }
                }


                // Check if the first element indicates available time slots in EST
                if ($timeSlots[0] === 'Available time slots in EST') {
                    // Find the index of "3:00 PM-4:00 PM"
                    $indexToRemove = array_search('3:00 PM-4:00 PM', $timeSlots);

                    // If found, remove all time slots before "3:00 PM-4:00 PM"
                    if ($indexToRemove !== false) {
                        $timeSlots = array_slice($timeSlots, $indexToRemove);
                    }
                }


                // Check if the first element indicates available time slots in CST
                if ($timeSlots[0] === 'Available time slots in CST') {
                    // Find the index of "2:00 PM-3:00 PM"
                    $indexToRemove = array_search('2:00 PM-3:00 PM', $timeSlots);

                    // If found, remove all time slots before "2:00 PM-3:00 PM"
                    if ($indexToRemove !== false) {
                        $timeSlots = array_slice($timeSlots, $indexToRemove);
                    }
                }

                // Check if the first element indicates available time slots in MST
                if ($timeSlots[0] === 'Available time slots in MST') {
                    // Find the index of "1:00 PM-2:00 PM"
                    $indexToRemove = array_search('1:00 PM-2:00 PM', $timeSlots);

                    // If found, remove all time slots before "1:00 PM-2:00 PM"
                    if ($indexToRemove !== false) {
                        $timeSlots = array_slice($timeSlots, $indexToRemove);
                    }
                }

                // Check if the first element indicates available time slots in AKST
                if ($timeSlots[0] === 'Available time slots in AKST') {
                    // Find the index of "11:00 AM-12:00 PM"
                    $indexToRemove = array_search('11:00 AM-12:00 PM', $timeSlots);

                    // If found, remove all time slots before "11:00 AM-12:00 PM"
                    if ($indexToRemove !== false) {
                        $timeSlots = array_slice($timeSlots, $indexToRemove);
                    }
                }

                // Check if the first element indicates available time slots in HAST
                if ($timeSlots[0] === 'Available time slots in HAST') {
                    // Find the index of "10:00 AM-11:00 AM"
                    $indexToRemove = array_search('10:00 AM-11:00 AM', $timeSlots);

                    // If found, remove all time slots before "10:00 AM-11:00 AM"
                    if ($indexToRemove !== false) {
                        $timeSlots = array_slice($timeSlots, $indexToRemove);
                    }
                }

                // Check if the first element indicates available time slots in SST
                if ($timeSlots[0] === 'Available time slots in SST') {
                    // Find the index of "9:00 AM-10:00 AM"
                    $indexToRemove = array_search('9:00 AM-10:00 AM', $timeSlots);

                    // If found, remove all time slots before "9:00 AM-10:00 AM"
                    if ($indexToRemove !== false) {
                        $timeSlots = array_slice($timeSlots, $indexToRemove);
                    }
                }

                // Check if the first element indicates available time slots in CHST
                if ($timeSlots[0] === 'Available time slots in CHST') {
                    // Find the index of "6:00 AM-7:00 AM"
                    $indexToRemove = array_search('6:00 AM-7:00 AM', $timeSlots);

                    // If found, remove all time slots before "6:00 AM-7:00 AM"
                    if ($indexToRemove !== false) {
                        $timeSlots = array_slice($timeSlots, $indexToRemove);
                    }
                }
              
              
               $timeSlots_arr = $timeSlots;
                    // =========================================
            }

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

   
}
