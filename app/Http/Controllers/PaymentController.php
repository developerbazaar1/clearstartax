<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Mail;
use PDF;
use Elibyy\TCPDF\Facades\TCPDF;

class PaymentController extends Controller
{
    

    public function store_ach(Request $request)
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
                     ->from('ach@clearstarttax.com', 'Clear Start Tax');
                     });
                    
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
                          echo json_encode($suc);

            }

    }


    public function store(Request $request)
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
         if ($expiry_month >= 1 && $expiry_month <= 9) {
           $expiry_month = sprintf('%02d', $expiry_month);
         } 
        $expiry_year = $request->input('expiry_year');
        $ccExpDate = $expiry_month.$expiry_year;
 
         $accountType = 2;
         $ccType = $cardType;
         $ccNo = $request->input('card_number');
         $ccSecurityNo = $request->input('cvv');
         $nameOnAccount = $request->input('name_on_card');
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
              "nameOnAccount" => $nameOnAccount,
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
                      echo json_encode($suc);
                    
                  }
                }
               
            }
             

        }

        
    }

   
    public function success_card($amount, $tran_id, $email)
    {
        $amount = number_format($amount,2);
        return view('success_card', compact('amount', 'tran_id', 'email'));
    }
    
    
    public function success_ach($amount, $email)
    {
        // $amount1 = (int)$amount2;
        // $amount = number_format($amount1,2);
        return view('success_ach', compact('amount' , 'email'));
    }


   
   


     public function createPDF() 
    {
        $filename = 'hello_world11.pdf';
        $data = [
            'accountname' => 'test',
            'card' => 'test',
            'cardtype' => 'test',
            'exdate' => 'test',
            'address' => 'test',
            'aptno' => 'test',
            'city' => 'test',
            'state' => 'test',
            'zip' => 'test',
            'cvv' => 'test',
            'amount' => 'test',
            'date' => 'test',
            'name' => 'test',
            'sign' => 'test',
            'email' => 'test',
            'ip' => 'test',
            'timestamp' => 'test',
        ];

       

        $view = \View::make('agreement', $data);
        $html = $view->render();

        $pdf = new TCPDF;
        
        // $pdf::setFontSubsetting(true);
        // $fontname = \TCPDF_FONTS::addTTFfont(public_path().'/Buenos Signature 400.ttf', 'TrueTypeUnicode', '', 32); 
        // $pdf::SetFont($fontname, '', 6, '', true);
    
        $pdf::SetFont('helvetica', '', 9);
        $pdf::SetTitle('Hello World');
        $pdf::AddPage();
        $pdf::writeHTML($html, true, false, true, false, '');

        $pdf::Output(public_path($filename), 'F');
        PDF::reset();

        // dd('pdf created');
        // add view content
        // PDF::writeHTML($text, true, 0, true, 0);

        // add image for signature
        // PDF::Image('tcpdf.png', 180, 60, 15, 15, 'PNG');
        
        // define active area for signature appearance
        // PDF::setSignatureAppearance(180, 60, 15, 15);
        
        // save pdf file
        // PDF::Output(public_path($name.'.pdf'), 'F');

        // PDF::reset();

        


        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://clearstart.irslogics.com/publicapi/2020-02-22/documents/casedocument?CaseID=18259&apikey=f08f2b3c48ad4134b4ef62abd4aa721d',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_SAFE_UPLOAD => true,
          CURLOPT_POSTFIELDS => array('file'=> new \CURLFILE('https://pragya.dbtechserver.online/LKG-N-2023-24.pdf')),

        ));
    

        $response = curl_exec($curl);

        curl_close($curl);
        echo $response;
        dd($response);
        // return response()->download(public_path($filename));
    }

    public function createPDF__(Request $request)
    {
        $name = "christian Ha";
        // set certificate file
        // $certificate = 'file://'.url("/").'\vendor\tecnickcom\tcpdf\examples\data\cert\tcpdf.crt';

        // $certificate = 'file://C:\xampp\pragya\htdocs\fastpay\fastpay\fastpay\vendor\tecnickcom\tcpdf\examples\data\cert\tcpdf.crt';
        $certificate = 'file://'.realpath('\examples\data\cert\tcpdf.crt');
        // set additional information in the signature
    
        $info = array(
            'Name' => 'Websolutionstuff',
            'Location' => 'Office',
            'Reason' => 'Websolutionstuff',
            'ContactInfo' => 'http://www.websolutionstuff.com',
        );

        // set document signature
        PDF::setSignature($certificate, $certificate, 'tcpdfdemo', '', 2, $info);
        // $pdf->AddFont('MyFont', '', 'Buenos Signature 400.ttf', true);
        
        // $fontname = 'signature';
        // $fontfile = public_path('fonts/Buenos Signature 400.ttf');
        // $font = \TCPDF_FONTS::addTTFfont($fontfile);
        // PDF::SetFont($fontname, '', 14);
        // $pdf->Cell(0, 10, 'Hello World', 0, 1);


        // $fontname = \TCPDF_FONTS::addTTFfont($fontfile, 'TrueTypeUnicode', '', 96);


        // $pdf->SetFont($fontname, '', 14, '', false);
        // $checkMarkFont = $this->SetFont('MyFont','',10);

        // PDF::SetFont($fontname, '', 9);
        
        PDF::SetFont('helvetica', '', 9);
        // PDF::SetFont('freeserifi', '', 20);
        PDF::SetTitle('Websolutionstuff');
        PDF::AddPage();

        // print a line of text
        $text = '
    <div class="container agreement">
        <div class="row">
            <div class="col">
              
                <font face="BuenosSignature" style="font-size:20, font-weight:100" >Christian Ha</font>
               
                <h4 style="font-family:GlyphStyle">By clicking the "Pay" button, you are "E-Signing and indicating your agreement to the following terms and conditions:</h4>
                <ul class="agreement-list">
                    <li>
                        Payment Authorization: You hereby authorize us to charge the payment method you have provided for the amount indicated on the payment page. You represent and warrant that you have the legal right to use the payment method you have provided.
                    </li>
                    <li>
                        Recurring Payments: If you have agreed to a recurring payment plan, you acknowledge that the payment method you have provided will be charged on a recurring basis as outlined in the payment plan you have selected.
                    </li>
                    <li>
                        Accuracy of Information: You represent and warrant that the information you have provided to us is accurate and complete, and that you have the legal right to use the payment method you have provided.
                    </li>
                    <li>Refunds: If a refund is due to you, it will be processed using the payment method you have provided if the payment method is no longer valid, you agree to provide us with updated information so that we may process the refund.</li>
                    <li>
                        Payment Method Changes: If you change your payment method, you are responsible for providing us with updated information and ensuring that the new payment method is able to be charged.
                    </li>
                    <li>
                        Disputes: If a dispute arises regarding the payment, you agree to resolve the dispute directly with us. If the dispute cannot be resolved, you agree to submit the dispute to binding arbitration.
                    </li>
                    <li>
                        Security of Information: We take the security of your payment information seriously and have implemented industry standard security protocols to protect your sensitive information.
                    </li>
                    <li>
                        Governing Law: This agreement is governed by the law of  the Jurisdiction  in which we are located, and you agree to submit  to the Jurisdiction of the court of that Jurisdiction for the resolution of any disputes.
                    </li>
                </ul>
                <h4>By clicking the "Pay" button, you are "E-Signing and indicating your agreement to the following terms and conditions:</h4>
            </div>
            <div class="col form-details">
                <form class="form-items" action="">
                   <p> Name on Account: <input type="text" value="Card holder name or Bank account holder name"> test test</p>
                   <p> Account # or Card #: <input type="number" value="45454545"></p>
                   <p> Bank Name or Type of Card: <input type="text" value="Bank name"></p>
                   <p> Routing # or Expiration Date: <input type="date" value=""></p>
                   <p> Billing Address <span>(if different)</span>:<input type="text" value="aptnum, city, state, zip"></p>
                   <p>CVV: <input type="number" value="000"></p>
                </form>
            </div> 
            <div class="col end-details">
                <h5 class="amount-text">Amount Paid:</h5>
                <form class="" action="">
                    <p class="amount-border">Client Signature: <input id="text-font" type="text" value="christian Ha"></p>
                    <p class="amount-border">Sign Date: <input type="text" value="30/03/2023"></p>
                    <p class="amount-border">Signers IP: <input type="text" value=" signers IP address"></p>
                </form>
            </div>
        </div>
    
    </div>
';

        // add view content
        PDF::writeHTML($text, true, 0, true, 0);

        // add image for signature
        // PDF::Image('tcpdf.png', 180, 60, 15, 15, 'PNG');
        
        // define active area for signature appearance
        // PDF::setSignatureAppearance(180, 60, 15, 15);
        
        // save pdf file
        PDF::Output(public_path($name.'.pdf'), 'F');

        PDF::reset();

        dd('pdf created');


        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://clearstart.irslogics.com/publicapi/2020-02-22/documents/casedocument?CaseID=18259&apikey=f08f2b3c48ad4134b4ef62abd4aa721d',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_SAFE_UPLOAD => true,
          CURLOPT_POSTFIELDS => array('file'=> new \CURLFILE('https://pragya.dbtechserver.online/LKG-N-2023-24.pdf')),

        ));
    

        $response = curl_exec($curl);

        curl_close($curl);
        echo $response;
        dd($response);
    }



    public function test_storepdf()
    {
        $caseID = 18259;
      
        $filename =  'testpdf.pdf';
        $ip = $_SERVER['REMOTE_ADDR'];           
                    $data = [
                       
                        // 'card' => $ccNo,
                        // 'cardtype' => $cardname,
                        // 'exdate' => $ccExpDate,
                        // 'address' => $Address,
                        // 'aptno' => $AptNo,
                        // 'city' => $City,
                        // 'state' => $State,
                        // 'zip' => $Zip,
                        // 'cvv' => $ccSecurityNo,
                        // 'amount' => $amount,
                        // 'date' => $currentdate,
                        // 'name' => $FullName,
                        // 'sign' => $FullName,
                        // 'email' => $email,
                        'ip' => $ip,
                        // 'timestamp' => $paidDate,
                    ];

           

            $view = \View::make('ftest', $data);
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
     
                      
            // echo json_encode('success');
                    
           
           
    }

}
