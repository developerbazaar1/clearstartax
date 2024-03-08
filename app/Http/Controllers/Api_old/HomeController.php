<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\Status;
use App\Models\Faq;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;

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

        $email_data = array(
            'name'   =>  $request->name,
            'email'  =>  $request->email,
            'subject1'=>  $request->subject,
            'message1'   =>  $request->message,
            'case_id'   =>  $clientcaseid,
        );

        Mail::send('getintouch_email_template', $email_data, function ($message) use ($email_data, $sub1) {
            $message->to('info@clearstarttax.com', 'Team')
                ->subject($sub1)
                ->from('no-reply@clearstarttax.com', 'Clear Start Tax Relief');
        });
        
        
        return response()->json([
            'status' => true,
            'message' => "Your message has been successfully sent. Our team is dedicated to providing you with a prompt and helpful response. You can expect to hear back from us shortly. If you require immediate assistance, please don't hesitate to call us at 888-235-0004 M-F 8AM - 5PM PST.",
        ], 200);

    }
  
   

   
}
