<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Status;
use App\Models\Faq;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
   public function more_info()
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

            
        return view('more_info', compact('greeting', 'status_id', 'status_name', 'statusinfo'));
    }

    public function documents()
    {
         return view('document');
    }
    
    public function upload_document(Request $request)
    {
        // $request->validate([
        //     'pdf_files.*' => 'required|mimes:pdf|max:6144',
        // ]);
        $validateUser = Validator::make($request->all(), 
        [
            'pdf_file.*' => 'required|mimes:pdf|max:6144',
        ]);
        
        if ($validateUser->fails()) {
            return redirect()
                ->back()  // Redirect back to the registration form
                ->withErrors($validateUser)  // Pass validation errors to the view
                ->withInput();            // Pass the input data back to the view

            
        }
    
        if ($request->hasFile('pdf_file')) {
            $caseID = Auth::user()->case_id;
            $files = $request->file('pdf_file');
    
            foreach ($files as $file) {
                $pdf = $file;
    
                // You can handle each file here as you did before
                $fileName = curl_file_create($pdf->path(), 'application/pdf', $pdf->getClientOriginalName());
    
                $curl = curl_init();
    
                curl_setopt_array($curl, array(
                    CURLOPT_URL => 'https://clearstart.irslogics.com/publicapi/2020-02-22/documents/casedocument?CaseID='.$caseID.'&apikey=f08f2b3c48ad4134b4ef62abd4aa721d',
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => '',
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 0,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => 'POST',
                    CURLOPT_SAFE_UPLOAD => true,
                    CURLOPT_POSTFIELDS => array('file' => new \CURLFILE($pdf->path(), 'application/pdf', $pdf->getClientOriginalName())),
                ));
    
                $response = curl_exec($curl);
    
                curl_close($curl);
            }
        }
    
        return redirect()->back()->with('success', 'Files uploaded successfully!');
    }

    public function upload_document_p(Request $request)
    {
        // $request->validate([
        //     'pdf_file' => 'required|mimes:pdf|max:6144',
        // ]);
 
            $validateUser = Validator::make($request->all(), 
            [
                'pdf_file' => 'required|mimes:pdf|max:6144',
            ]);


            if ($validateUser->fails()) {
                return redirect()
                    ->back()  // Redirect back to the registration form
                    ->withErrors($validateUser)  // Pass validation errors to the view
                    ->withInput();            // Pass the input data back to the view

                
            }
            
            

        if ($request->hasFile('pdf_file')) {
            $pdf = $request->file('pdf_file');
                
            $fileName = curl_file_create($pdf->path(), 'application/pdf', $pdf->getClientOriginalName());

            $caseID = Auth::user()->case_id;
            $curl9 = curl_init();

            curl_setopt_array($curl9, array(
              CURLOPT_URL => 'https://clearstart.irslogics.com/publicapi/2020-02-22/documents/casedocument?CaseID='.$caseID.'&apikey=f08f2b3c48ad4134b4ef62abd4aa721d',
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_ENCODING => '',
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 0,
              CURLOPT_FOLLOWLOCATION => true,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_CUSTOMREQUEST => 'POST',
              CURLOPT_SAFE_UPLOAD => true,
              CURLOPT_POSTFIELDS => array('file'=> new \CURLFILE($pdf->path(), 'application/pdf', $pdf->getClientOriginalName())),

            ));
        

            $response9 = curl_exec($curl9);

            curl_close($curl9);
        }

        
        return redirect()->back()->with('success', 'File uploaded successfully!');    
    }

    public function appointment()
    {
        
        $case_id = Auth::user()->case_id;
        $curl = curl_init();
        
        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://clearstart.irslogics.com/publicapi/Appointment/GetSetOfficerEmail?CaseID='.$case_id.'&apikey=f08f2b3c48ad4134b4ef62abd4aa721d',
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
              CURLOPT_URL => 'https://clearstart.irslogics.com/publicapi/2020-02-22/cases/casefile?CaseID='.$case_id.'&apikey=f08f2b3c48ad4134b4ef62abd4aa721d',
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
  
                return redirect()->back()->with('error', 'Please enter correct email id and case Id');
                
            }else{


                if(empty($response1['Message'])){
                   
                    if($response1['status'] == 'success'){
                        $response2 = json_decode($response1['data'], true);
                            
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
            
        // ====================================
        
        if (in_array($status_id, $status_for_appointment)){
            return view('appointment', compact('settlement_officer', 'status_id', 'statusinfo'));
        }else{
            return redirect()->route('home');
        }
    }

    public function payment()
    {
        $id = Auth::user()->case_id;
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://clearstart.irslogics.com/publicapi/2020-02-22/cases/casefile?CaseID='.$id.'&apikey=f08f2b3c48ad4134b4ef62abd4aa721d',
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
        $response1 = json_decode($response, true);  
            if(empty($response1['Message'])){
            
                    if($response1['status'] == 'success'){
                           $response2 = json_decode($response1['data'], true);
                            
                            $data['CaseID'] = $response2['CaseID']; 
                            $data['FirstName'] = $response2['FirstName']; 
                            $data['LastName'] = $response2['LastName']; 
                            $data['City'] = $response2['City']; 
                            $data['State'] = $response2['State']; 
                            $data['Zip'] = $response2['Zip']; 
                            $data['Address'] = $response2['Address']; 
                            $data['AptNo'] = $response2['AptNo'];
                            $data['CellPhone'] = $response2['CellPhone'];
                            $data['Email'] = $response2['Email']; 
                            
     
                            $curl1 = curl_init();

                            curl_setopt_array($curl1, array(
                              CURLOPT_URL => 'https://clearstart.irslogics.com/publicapi/2020-02-22/billing/casebillingsummary?CaseID='.$id.'&apikey=f08f2b3c48ad4134b4ef62abd4aa721d',
                              CURLOPT_RETURNTRANSFER => true,
                              CURLOPT_ENCODING => '',
                              CURLOPT_MAXREDIRS => 10,
                              CURLOPT_TIMEOUT => 0,
                              CURLOPT_FOLLOWLOCATION => true,
                              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                              CURLOPT_CUSTOMREQUEST => 'GET',
                            ));
                            
                            $responsee = curl_exec($curl1);
                            
                            curl_close($curl1);
                            // echo $response;
                            $responsee1 = json_decode($responsee, true);  
                            $PastDuee1= $responsee1['data']['PastDue'];
                            // $PastDuee = number_format($PastDuee1);
                            $PastDuee = number_format($PastDuee1,2);
                            if($PastDuee > 0){ 
                                $data['PastDue'] = $PastDuee;
                            }else{
                                $data['PastDue'] = '0.00';
                            }
                            $Balancee1 =  $responsee1['data']['Balance']; 
                            $Balancee = number_format($Balancee1,2);
                            if($Balancee > 0){ 
                                $data['Balance'] = $Balancee;
                            }else{
                                $data['Balance'] = '0.00';
                            }
                            
                           
                        //   payment schedular api code 

                                $curl1 = curl_init();
                                
                                curl_setopt_array($curl1, array(
                                  CURLOPT_URL => 'https://clearstart.irslogics.com/publicapi/2020-02-22/billing/caseamortization?CaseID='.$id.'&apikey=f08f2b3c48ad4134b4ef62abd4aa721d',
                                  CURLOPT_RETURNTRANSFER => true,
                                  CURLOPT_ENCODING => '',
                                  CURLOPT_MAXREDIRS => 10,
                                  CURLOPT_TIMEOUT => 0,
                                  CURLOPT_FOLLOWLOCATION => true,
                                  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                                  CURLOPT_CUSTOMREQUEST => 'GET',
                                  CURLOPT_POSTFIELDS =>'{
                                    
                                }',
                                  CURLOPT_HTTPHEADER => array(
                                    'Content-Type: application/json'
                                  ),
                                ));
                                
                                $response3 = curl_exec($curl1);
                                
                                curl_close($curl1);
                                
                                $response31 = json_decode($response3, true);  
                                $payment_schedular = json_decode($response31['data'], true);  
                        
                        // end 
                        
                        
                        
                        $curlBill = curl_init();

                        curl_setopt_array($curlBill, array(
                          CURLOPT_URL => 'https://clearstart.irslogics.com/publicapi/2020-02-22/billing/casebillingsummary%20?caseID='.$id.'&apikey=f08f2b3c48ad4134b4ef62abd4aa721d',
                          CURLOPT_RETURNTRANSFER => true,
                          CURLOPT_ENCODING => '',
                          CURLOPT_MAXREDIRS => 10,
                          CURLOPT_TIMEOUT => 0,
                          CURLOPT_FOLLOWLOCATION => true,
                          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                          CURLOPT_CUSTOMREQUEST => 'GET',
                        ));
                        
                        $responseBill = curl_exec($curlBill);
                        
                        curl_close($curlBill);

                        $billing_summary = json_decode($responseBill, true);   
                        $PastDuee1= $billing_summary['data']['PastDue'];
                        // $PastDuee = number_format($PastDuee1);
                        $PastDuee = number_format($PastDuee1,2);
                        if($PastDuee > 0){ 
                            $billing_summary_PastDue = $PastDuee;
                        }else{
                            $billing_summary_PastDue = 'N/A';
                        }
                        
                        
                        $TotalFees1= $billing_summary['data']['TotalFees'];
                        $TotalFees2 = number_format($TotalFees1,2);
                        if($TotalFees2 > 0){ 
                            $billing_summary_TotalFees = $TotalFees2;
                        }else{
                            $billing_summary_TotalFees = '0.00';
                        }


                        $Balance1= $billing_summary['data']['Balance'];
                        $Balance2 = number_format($Balance1,2);
                        if($Balance2 > 0){ 
                            $billing_summary_Balance = $Balance2;
                        }else{
                            $billing_summary_Balance = 'Paid In Full';
                        }


                        $AmountDue1= $billing_summary['data']['AmountDue'];
                        $AmountDue2 = number_format($AmountDue1,2);
                        if($AmountDue2 > 0){ 
                            $billing_summary_AmountDue = $AmountDue2;
                        }else{
                            $billing_summary_AmountDue = 'N/A';
                        }
                       
                       
                            return view('payment', compact('data', 'payment_schedular', 'billing_summary', 'billing_summary_PastDue', 'billing_summary_TotalFees', 'billing_summary_Balance', 'billing_summary_AmountDue'));
                    }else{
                          echo "NO DATA FOUND";
                    }
        
            }else{
                echo "NO DATA FOUND";
            }
   
    }

    public function contact()
    {
         return view('contact');
    }

    public function submit_contact(Request $request)
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
  
                return redirect()->back()->with('error', 'Please enter correct email id and case Id');
                
            }else{


                if(empty($response1['Message'])){
                   
                    if($response1['status'] == 'success'){
                        $response2 = json_decode($response1['data'], true);
                            
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
                return redirect()->back()->with('error', 'Please enter correct email id and case Id');
                
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

        

        return redirect()->back()->with('success', "Your message has been successfully sent. Our team is dedicated to providing you with a prompt and helpful response. You can expect to hear back from us shortly. If you require immediate assistance, please don't hesitate to call us at 888-235-0004 M-F 8AM - 5PM PST.");  
    }



    public function faq()
    {    
        $faq = Faq::where('type', 'processing')->get(); 
        $faqs = Faq::where('type', 'service')->get(); 
        return view('faq', compact('faq', 'faqs'));
    }
    
}
