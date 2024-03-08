<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Crypt;
use PDF;
use Elibyy\TCPDF\Facades\TCPDF;

class PaymentController extends Controller
{
    
  
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
                       
                       
                            

                            $arr_data = array(
                                'data'=> $data,
                                'payment_schedular'=> $payment_schedular,
                                'billing_summary'=> $billing_summary,
                                'billing_summary_PastDue'=> $billing_summary_PastDue,
                                'billing_summary_TotalFees'=> $billing_summary_TotalFees,
                                'billing_summary_Balance'=> $billing_summary_Balance,
                                'billing_summary_AmountDue'=> $billing_summary_AmountDue,

                            );
                            
                            return response()->json([
                                    'status' => true,
                                    'message' => 'Get payment data successfully',
                                    'data' => $arr_data,
                            ], 200);

                    }else{
                            return response()->json([
                                'status' => false,
                                'message' => 'No data found, please try again',
                            ], 401);
                    }
        
            }else{
                return response()->json([
                    'status' => false,
                    'message' => 'No data found, please try again',
                ], 401);
            }
   
    }

    public function ach_payment_store(Request $request)
    {
            
        if(!empty($request->input('client_email'))){
            $email = $request->input('client_email');
        }else{
            $email = '';
        }
        
          $nameOnAccount = $request->input('account_holder_name');
          $bankName = $request->input('bank_name');
          $bankRoutingNo = $request->input('bankrouteingno');
          $bankAccountNo = $request->input('accountno');

         $currentdate = date('Y-m-d');
         $currenttime = date('H:i:s');
         $currentdatetime = $currentdate.'T'.$currenttime;
 
         $accountType = 1;
         $caseID = $request->input('case_id');
         $primaryAccount = true;

         $paymentTypeID = 2;
         $amount = $request->input('amount');
        
         // $amount = (int)$amount1;
         $paidDate = (string)$currentdatetime;
         $Comment = "Paid";

         $data1 = array(
              "accountType"=> $accountType,
              "bankName" => $bankName,
              "bankRoutingNo" => $bankRoutingNo,
              "bankAccountNo" => $bankAccountNo,
              "nameOnAccount" => $nameOnAccount,
              "caseID" => $caseID,
              "primaryAccount" => true,
              "State" => $request->input('State'),
              "City" => $request->input('City'),
              "Zip" => $request->input('Zip'),
              "Address" => $request->input('Address'),
              "AptNo" => $request->input('AptNo'),
              "emailID" => $email
            //   "phoneNo" => $request->input('phoneNo')
        );
        $encodedData = json_encode($data1);

        $data2 = array(
              "paymentTypeID" =>  $paymentTypeID,
              "amount" =>  $amount,
              "paidDate" =>  $paidDate,
              "Comment" =>  $Comment,
              "caseID" =>  $caseID,
        );

        $encodedData2 = json_encode($data2);

         $curl = curl_init();

          curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://clearstart.irslogics.com/publicapi/2020-02-22/Billing/caseaccount%20?apikey=f08f2b3c48ad4134b4ef62abd4aa721d',
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

          $response1 = curl_exec($curl);

          curl_close($curl);
            if($response1){
        // email

    
       

       $email_data = array(
            'name'   =>  $nameOnAccount,
            'email'  =>  $email,
            'case_id'=>  $caseID,
            'date'   =>  $currentdate,
            'amount' =>  $amount,
        );

 Mail::mailer('secondary')->send('email_template', $email_data, function ($message) use ($email_data) {
                    $message->to('billing@clearstarttax.com', 'Team')
                    ->subject('Run Payment for client CASE ID')
                    ->from('ach@clearstarttax.com', 'Clear Start Tax Relief');
                    });
                    
                    $response_1 = json_decode($response1, true);
                    $status = $response_1['status'];
                    $suc = array("status"=>"$status",  "amount"=>"$amount", "email"=>"$email");


                    $response_1 = json_decode($response1, true);
                    $status = $response_1['status'];
                    $suc = array("status"=>"$status",  "amount"=>"$amount", "email"=>"$email");


                    
                    $response_1 = json_decode($response1, true);
                    $status = $response_1['status'];
                    $suc = array("status"=>"$status",  "amount"=>"$amount", "email"=>"$email");




                        if($suc){



                            $curl7 = curl_init();

        curl_setopt_array($curl7, array(
          CURLOPT_URL => 'https://clearstart.irslogics.com/publicapi/2020-02-22/cases/casefile?CaseID='.$caseID.'&apikey=f08f2b3c48ad4134b4ef62abd4aa721d',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'GET',
        ));

        $response = curl_exec($curl7);

        curl_close($curl7);
        $response7 = json_decode($response, true);  
        if(empty($response7['Message'])){
        
                if($response7['status'] == 'success'){
                       $response72 = json_decode($response7['data'], true);
                        
                        $FirstName = $response72['FirstName']; 
                        $LastName = $response72['LastName']; 
                        $City = $response72['City']; 
                        $State = $response72['State']; 
                        $Zip = $response72['Zip']; 
                        $Address = $response72['Address']; 
                        $AptNo = $response72['AptNo'];
                        $FullName = $FirstName." ".$LastName;

                        
                }
        }
        $filename = $FullName.'.pdf';
        $ip = $_SERVER['REMOTE_ADDR'];           
                    $data = [

                        
                        'account' => $bankAccountNo,
                        'accountholdername' => $nameOnAccount,
                        'routing' => $bankRoutingNo,
                        'bankname' => $bankName,
                        'address' => $request->input('Address'),
                        'aptno' => $request->input('AptNo'),
                        'city' => $request->input('City'),
                        'state' => $request->input('State'),
                        'zip' => $request->input('Zip'),  
                        'amount' => $amount,
                        'date' => $currentdate,
                        'name' => $FullName,
                        'sign' => $FullName,
                        'email' => $email,
                        'ip' => $ip,
                        'timestamp' => $paidDate,
                    ];

           

            $view = \View::make('agreement_ach', $data);
            $html = $view->render();

            $pdf = new TCPDF;
            
            $pdf::SetFont('helvetica', '', 9);
            $pdf::SetTitle('Hello');
            $pdf::AddPage();
            $pdf::writeHTML($html, true, false, true, false, '');

            $pdf::Output(public_path($filename), 'F');
            PDF::reset();


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
              CURLOPT_POSTFIELDS => array('file'=> new \CURLFILE(public_path($filename))),

            ));
        

            $response9 = curl_exec($curl9);

            curl_close($curl9);
     
                      


                        }
                          // echo json_encode($suc);

                            return response()->json([
                                    'status' => true,
                                    'data' => $suc,
                            ], 200);

            }

    }



    public function card_payment_store(Request $request)
    {

        if($request->input('card_type') == 'visa'){
          $cardType = 1;
        }else if($request->input('card_type') == 'mastercard'){
          $cardType = 2;
        }else if($request->input('card_type') == 'discover'){
          $cardType = 4;
        }else{
          $cardType = 3;
        }

        if(!empty($request->input('client_email'))){
            $email = $request->input('client_email');
        }else{
            $email = '';
        }
        
        $cardname = $request->input('card_type');
        $currentdate = date('Y-m-d');
        $currenttime = date('H:i:s');
        $currentdatetime = $currentdate.'T'.$currenttime;

        $expiry_month = $request->input('expiry_month');
        $expiry_year = $request->input('expiry_year');
        $ccExpDate = $expiry_month.$expiry_year;
 
         $accountType = 2;
         $ccType = $cardType;
         $ccNo = $request->input('card_number');
         $ccSecurityNo = $request->input('cvv');
         $caseID = $request->input('case_id');
         $primaryAccount = true;

         $paymentTypeID = 1;
         $amount = $request->input('amount');
         $paidDate = (string)$currentdatetime;
         $Comment = "Paid";

        $curl = curl_init();
        $data1 = array(
              "accountType"=> $accountType,
              "ccType" => $ccType,
              "ccNo" => $ccNo,
              "ccExpDate" => $ccExpDate,
              "ccSecurityNo" => $ccSecurityNo,
              "caseID" => $caseID,
              "primaryAccount" => true,
              "State" => $request->input('State'),
              "City" => $request->input('City'),
              "Zip" => $request->input('Zip'),
              "Address" => $request->input('Address'),
              "AptNo" => $request->input('AptNo'),
              "emailID" => $email
        );
        $encodedData = json_encode($data1);

        $data2 = array(
              "paymentTypeID" =>  $paymentTypeID,
              "amount" =>  $amount,
              "paidDate" =>  $paidDate,
              "Comment" =>  $Comment,
              "caseID" =>  $caseID
        );

        $encodedData2 = json_encode($data2);

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://clearstart.irslogics.com/publicapi/2020-02-22/Billing/caseaccount%20?apikey=f08f2b3c48ad4134b4ef62abd4aa721d',
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

        $response1 = curl_exec($curl);

        curl_close($curl);
        // echo $response1;
        if($response1){

            $curl1 = curl_init();

            curl_setopt_array($curl1, array(
              CURLOPT_URL => 'https://clearstart.irslogics.com/publicapi/2020-02-22/Billing/casepayment?apikey=f08f2b3c48ad4134b4ef62abd4aa721d',
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_ENCODING => '',
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 0,
              CURLOPT_FOLLOWLOCATION => true,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_CUSTOMREQUEST => 'POST',
              CURLOPT_POSTFIELDS => $encodedData2,
          
              CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'
              ),
            ));

            $response2 = curl_exec($curl1);

            curl_close($curl1);
           
            if($response2){
                $response21 = json_decode($response2, true);
                $response22 = json_decode($response21['data'], true);
                $response22['CasePaymentID'];
                $curl3 = curl_init();

                curl_setopt_array($curl3, array(
                  CURLOPT_URL => 'https://clearstart.irslogics.com/publicapi/2020-02-22/billing/casepayment?CaseID='.$caseID.'&apikey=f08f2b3c48ad4134b4ef62abd4aa721d',
                  CURLOPT_RETURNTRANSFER => true,
                  CURLOPT_ENCODING => '',
                  CURLOPT_MAXREDIRS => 10,
                  CURLOPT_TIMEOUT => 0,
                  CURLOPT_FOLLOWLOCATION => true,
                  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                  CURLOPT_CUSTOMREQUEST => 'GET',
                ));

                $response3 = curl_exec($curl3);

                curl_close($curl3);
              
                $response31 = json_decode($response3, true); 
                $response32 = json_decode($response31['data'], true); 
                
                foreach($response32 as $r){
                  if($r['CasePaymentID'] == $response22['CasePaymentID']){  
                      $status = $r['TransactionStatus'];
                      $tran_id = $r['TransactionID'];
                      $amount = $r['Amount'];
                     
                      $suc = array("status"=>"$status", "tran_id"=>"$tran_id", "amount"=>"$amount", "email"=>"$email");

                      if($suc){


                            $curl7 = curl_init();

curl_setopt_array($curl7, array(
  CURLOPT_URL => 'https://clearstart.irslogics.com/publicapi/2020-02-22/cases/casefile?CaseID='.$caseID.'&apikey=f08f2b3c48ad4134b4ef62abd4aa721d',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
));

$response = curl_exec($curl7);

curl_close($curl7);
$response7 = json_decode($response, true);  
        if(empty($response7['Message'])){
        
                if($response7['status'] == 'success'){
                       $response72 = json_decode($response7['data'], true);
                        
                        $FirstName = $response72['FirstName']; 
                        $LastName = $response72['LastName']; 
                        $City = $response72['City']; 
                        $State = $response72['State']; 
                        $Zip = $response72['Zip']; 
                        $Address = $response72['Address']; 
                        $AptNo = $response72['AptNo'];
                        $FullName = $FirstName." ".$LastName;

                        
                }
        }
        $filename = $FullName.'.pdf';
        $ip = $_SERVER['REMOTE_ADDR'];           
                    $data = [
                       
                        'card' => $ccNo,
                        'cardtype' => $cardname,
                        'exdate' => $ccExpDate,
                        'address' => $Address,
                        'aptno' => $AptNo,
                        'city' => $City,
                        'state' => $State,
                        'zip' => $Zip,
                        'cvv' => $ccSecurityNo,
                        'amount' => $amount,
                        'date' => $currentdate,
                        'name' => $FullName,
                        'sign' => $FullName,
                        'email' => $email,
                        'ip' => $ip,
                        'timestamp' => $paidDate,
                    ];

           

            $view = \View::make('agreement', $data);
            $html = $view->render();

// add new font in vendor\tecnickcom\tcpdf\fonts\Buenos Signature 400.ttf" and add font style in agreement blade 
            $pdf = new TCPDF;
            
            $pdf::SetFont('helvetica', '', 9);
            $pdf::SetTitle('Hello');
            $pdf::AddPage();
            $pdf::writeHTML($html, true, false, true, false, '');

            $pdf::Output(public_path($filename), 'F');
            PDF::reset();


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
              CURLOPT_POSTFIELDS => array('file'=> new \CURLFILE(public_path($filename))),

            ));
        

            $response9 = curl_exec($curl9);

            curl_close($curl9);
     
                      }
                      // echo json_encode($suc);
                        return response()->json([
                                'status' => true,
                                'data' => $suc,
                        ], 200);
                    
                  }
                }
               
            }
             

        }

        
    }
   
}
