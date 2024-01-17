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
           
                <p style="margin-bottom:10px; text-align: center;"><b>Clear Start Tax Inc CC/DEBIT Payment Terms and Conditions</b></p>
                <p style="text-align: justify; margin-bottom: 10px;">By clicking the 'Pay' button, you agree to Clear Start Tax Inc CC/Debit Payment Terms and Conditions. Your action of clicking the 'Pay' button will automatically generate an electronic signature, acknowledging your agreement and creating a legally binding contract between you (client) and us the company (Clear Start Tax Inc).</p>
                
                    <p style="text-align: justify; margin-bottom: 10px;">
                       <b>- Payment Authorization: :</b> You hereby authorize Clear Start Tax Inc. to charge the payment method you have provided for the amount indicated on the payment page. You represent and warrant that you have the legal right to use the payment method you have provided.
                    </p>
                    <p style="text-align: justify; margin-bottom: 10px;">
                        <b>- Recurring Payments:</b> If you have agreed to a recurring payment plan, you acknowledge that the payment method you have provided will be charged on a recurring basis as outlined in the payment plan you have selected.
                    </p>
                    <p style="text-align: justify; margin-bottom: 10px;">
                        <b>- Accuracy of Information:</b> You represent and warrant that the information you have provided to Clear Start Tax incis accurate and complete, and that you have the legal right to use the payment method you have provided.
                    </p>
                    <p style="text-align: justify; margin-bottom: 10px;">
                        <b>- Chargebacks:</b> In the event of a chargeback, you agree to provide any necessary documentation or proof of service to support the transaction. You acknowledge that initiating a chargeback without valid reason, or attempting to circumvent our refund policy, may result in legal action against you and your account being suspended or terminated.
                    </p>
                    <p style="text-align: justify; margin-bottom: 10px;">
                        <b>- Refunds:</b> If a refund is due to you, it will be processed using the payment method you have provided. If the payment method is no longer valid, you agree to provide us with updated information so that we may process the refund. Refunds will be provided in accordance with our established refund policy.
                    </p>
                    <p style="text-align: justify; margin-bottom: 10px;">
                        <b>- Payment Method Changes:</b> If you change your payment method, you are responsible for providing Clear Start Tax Incwith updated information and ensuring that the new payment method is able to be charged. Any issues arising from the use of an outdated or invalid payment method will be your responsibility.
                    </p>
                    <p style="text-align: justify; margin-bottom: 10px;">
                        <b>- Disputes:</b> If a dispute arises regarding the payment, you agree to resolve the dispute directly with Clear Start Tax Incbefore initiating a chargeback. If the dispute cannot be resolved, you agree to submit the dispute to binding arbitration under the rules of the American Arbitration Association or any other mutually agreed-upon arbitration organization.
                    </p>
                    <p style="text-align: justify; margin-bottom: 10px;">
                        <b>- Security of Information:</b> Clear Start Tax Inctakes the security of your payment information seriously and have implemented industry-standard security protocols to protect your sensitive information. You are responsible for keeping your account information secure and notifying us immediately if you suspect any unauthorized access or activity on your account.
                    </p>
                    <p style="text-align: justify; margin-bottom: 10px;">
                        <b>- Governing Law:</b> This agreement is governed by the laws of the jurisdiction in which we are located, and you agree to submit to the jurisdiction of the courts of that jurisdiction for the resolution of any disputes.
                    </p>
                
            
            

                   
                   <p> Card #: <span style="border-bottom: 1px solid black; display: inline-block;width: 66%;">{!! $card !!}</span></p>
                   <p> Type of Card: <span style="border-bottom: 1px solid black; display: inline-block;width: 62.5%;">{!! $cardtype !!}</span></p>
                   <p> Expiration Date: <span style="border-bottom: 1px solid black; display: inline-block;width: 61.2%;">{!! $exdate !!}</span></p>
                   <p> Billing Address <span>(if different)</span>:<span style="border-bottom: 1px solid black; display: inline-block;width: 54.6%;">{!! $address !!} {!! $aptno !!} {!! $city !!} {!! $state !!} {!! $zip !!}</span></p>
                   <p>CVV: <span style="border-bottom: 1px solid black; display: inline-block;width: 67%;">{!! $cvv !!}</span></p>

            
                <p style="margin:10px 0; text-decoration: underline;">Amount Paid: ${!! $amount !!}</p>

                <p>By signing here, I agree to be bound by the terms of this Agreement and authorize Clear Start Tax Relief to draft/run payment.</p>
                    <p  style="border-color: black; margin: 10px; border-style: solid; border-width: 1px 1px 1px 1px;">Client's Email:  {!! $email !!}</p>
                    <p  style="border-color: black; margin: 10px; border-style: solid; border-width: 0 1px 1px 1px;">Signers IP: {!! $ip !!}</p>
                    <p  style="border-color: black; margin: 10px; border-style: solid; border-width: 0 1px 1px 1px;">Time Stamp: {!! $timestamp !!}</p>
                    <p style="border-color: black; margin: 10px; border-style: solid; border-width: 0 1px 1px 1px; margin:3px">Signed Date: {!! $date !!}</p>
                    <p  style="border-color: black; margin: 10px; border-style: solid; border-width: 0 1px 1px 1px;">Client's Name: {!! $name !!}</p>
                    <p  style="border-color: black; margin: 30px 10px; border-style: solid; border-width: 0 1px 1px 1px;">Client's Signature: <font face="buenossignature400" style="font-size:18px; font-weight:300" >{!! $sign !!}</font></p>
                    
                
            
        
</body>
</html>

