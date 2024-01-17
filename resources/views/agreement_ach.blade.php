<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agreement</title>
    <link rel="stylesheet" href="{{ URL::asset('assets/style.css') }}">
    <style>
        p{
            margin: 3px 0px;
        }
    </style>
</head>
<body>
           
                <p style="margin-bottom:10px; text-align: center;"><b>Clear Start Tax Inc ACH Payment Terms and Conditions</b></p>
                <p style="text-align: justify; margin-bottom: 10px;">By clicking the 'Pay' button, you agree to these ACH Payment Terms and Conditions. Your action of clicking the 'Pay' button will automatically generate an electronic signature, acknowledging your agreement and creating a legally binding contract between you (client) and us the company (Clear Start Tax Inc).</p>
                
                    <p style="text-align: justify; margin-bottom: 10px;">
                       <b>- Payment Authorization: :</b>You hereby authorize Clear Start Tax Inc.to initiate an ACH debit entry to the bank account you have provided for the amount indicated on the payment page. You represent and warrant that you have the legal right to use the bank account you have provided.
                    </p>
                    <p style="text-align: justify; margin-bottom: 10px;">
                        <b>- Recurring Payments:</b>If you have agreed to a recurring payment plan, you acknowledge that the bank account you have provided will be debited on a recurring basis as outlined in the payment plan you have selected.
                    </p>
                    <p style="text-align: justify; margin-bottom: 10px;">
                        <b>- Accuracy of Information:</b>You represent and warrant that the information you have provided to Clear Start Tax Inc.is accurate and complete, and that you have the legal right to use the bank account you have provided.
                    </p>
                    <p style="text-align: justify; margin-bottom: 10px;">
                        <b>- Chargebacks and Reversals:</b>In the event of a chargeback or reversal, you agree to provide any necessary documentation or proof of service to support the transaction. You acknowledge that initiating a chargeback or reversal without valid reason, or attempting to circumvent our refund policy, may result in legal action against you and your account being suspended or terminated.
                    </p>
                    <p style="text-align: justify; margin-bottom: 10px;">
                        <b>- Refunds:</b>If a refund is due to you, we will issue a check to the address you have provided in your account information. If the address is no longer valid, you agree to provide Clear Start Tax Inc. with updated information so that we may process the refund. Refunds will be provided in accordance with our established refund policy.
                    </p>
                    <p style="text-align: justify; margin-bottom: 10px;">
                        <b>- Bank Account Changes:</b>If you change your bank account, you are responsible for providing Clear Start Tax Inc.with updated information and ensuring that the new bank account is able to be debited. Any issues arising from the use of an outdated or invalid bank account will be your responsibility.
                    </p>
                    <p style="text-align: justify; margin-bottom: 10px;">
                        <b>- Disputes:</b>If a dispute arises regarding the payment, you agree to resolve the dispute directly with Clear Start Tax Inc. before initiating a chargeback or reversal. If the dispute cannot be resolved, you agree to submit the dispute to binding arbitration under the rules of the American Arbitration Association or any other mutually agreed-upon arbitration organization.
                    </p>
                    <p style="text-align: justify; margin-bottom: 10px;">
                        <b>- Security of Information:</b>We take the security of your payment information seriously and have implemented industry-standard security protocols to protect your sensitive information. You are responsible for keeping your account information secure and notifying Clear Start Tax Inc.immediately if you suspect any unauthorized access or activity on your account.
                    </p>
                    <p style="text-align: justify; margin-bottom: 10px;">
                        <b>- Governing Law:</b>This agreement is governed by the laws of the jurisdiction in which we are located, and you agree to submit to the jurisdiction of the courts of that jurisdiction for the resolution of any disputes.
                    </p>
                
            
            

                   
                   <p> Name on Account : <span style="border-bottom: 1px solid black; display: inline-block;width: 60%;">{!! $accountholdername !!}</span></p>
                   <p> Account#: <span style="border-bottom: 1px solid black; display: inline-block;width: 66%;">{!! $account !!}</span></p>
                   <p> Bank Name : <span style="border-bottom: 1px solid black; display: inline-block;width: 62.5%;">{!! $bankname !!}</span></p>
                   <p> Routing#: <span style="border-bottom: 1px solid black; display: inline-block;width: 61.2%;">{!! $routing !!}</span></p>
                   <p> Billing Address <span>(if different)</span>:<span style="border-bottom: 1px solid black; display: inline-block;width: 54.6%;">{!! $address !!} {!! $aptno !!} {!! $city !!} {!! $state !!} {!! $zip !!}</span></p>

            
                <p style="margin:10px 0; text-decoration: underline;">Amount Paid: ${!! $amount !!}</p>

                <p>By signing here, I agree to be bound by the terms of this Agreement and authorize Clear Start Tax Relief to draft/run payment.</p>
                     <p  style="border-color: black; margin: 10px; border-style: solid; border-width: 1px 1px 1px 1px;">Client's Email:  {!! $email !!}</p>
                    <p  style="border-color: black; margin: 10px; border-style: solid; border-width: 0 1px 1px 1px;">Signers IP: {!! $ip !!}</p>
                    <p  style="border-color: black; margin: 10px; border-style: solid; border-width: 0 1px 1px 1px;">Time Stamp: {!! $timestamp !!}</p>
                    <p style="border-color: black; margin: 10px; border-style: solid; border-width: 0 1px 1px 1px; margin: 10px;">Signed Date: {!! $date !!}</p>
                    <p  style="border-color: black; margin: 10px; border-style: solid; border-width: 0 1px 1px 1px;">Client's Name: {!! $name !!}</p>
                    <p  style="border-color: black; margin: 30px 10px; border-style: solid; border-width: 0 1px 1px 1px;">Client's Signature: <font face="buenossignature400" style="font-size:18px; font-weight:300" >{!! $sign !!}</font></p>
                    
                
            
        
</body>
</html>

