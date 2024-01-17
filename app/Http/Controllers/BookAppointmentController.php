<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Status;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;

class BookAppointmentController extends Controller
{

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
           
            
            if($response2['status'] != 'success'){
  
                $data1 = array(
                      "status"=> 'fail',
                      "message" => 'Something wrong, Check officer email, date and timezone and  try again',
                );
                
                echo json_encode($data1);
                
            }else{
                
                $data1 = array(
                      "status"=> $response2['status'],
                      "slots" => $response2['data'],
                );
                
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
            $timeSlot = 60;
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
                  "TimeSlot" => $timeSlot
                
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
