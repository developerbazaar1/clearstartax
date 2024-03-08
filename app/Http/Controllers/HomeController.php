<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Status;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
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
  
                return redirect()->back()->with('error', 'Please enter correct email id and case Id');
                
            }else{


                if(empty($response['Message'])){
                   
                    if($response['status'] == 'success'){
                        $response2 = json_decode($response['data'], true);
                            
                            $statusid = $response2['StatusID']; 
                            $statusname = $response2['StatusName']; 
                            
                           
                    }else{
                        return redirect()->back()->with('error', 'The request is invalid, Please try again'); 
                    }
                }else{
                        return redirect()->back()->with('error', 'The request is invalid, Please try again'); 
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
        return view('home', compact('greeting', 'status_id', 'status_name', 'statusinfo', 'status_for_fq', 'status_for_to', 'status_for_appointment'));
    }
}
