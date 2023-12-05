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
                <p style="margin-bottom:10px; text-align: center;"><b>Consent, Verification of Information, and Electronic Signature Agreement</b></p>
                <p style="text-align: justify; margin-bottom: 10px;">By clicking "Submit," I, the undersigned, acknowledge and confirm the following:</p>
                    <p style="text-align: justify; margin-bottom: 10px;">
                       <b>- Electronic Signature and Agreement: :</b>By clicking "Submit", I understand that this action will
automatically generate an electronic signature, acknowledging my agreement to the terms
outlined below and creating a legally binding contract between me (the client) and CLEAR START
TAX. This electronic signature attests to the truthfulness and completeness of all information
provided and is equivalent to a written signature in its legal validity.

                    </p>
                    <p style="text-align: justify; margin-bottom: 10px;">
                        <b>- Accuracy of Information:</b> All information I have provided in this Financial Questionnaire,
including all attached documents, is complete, accurate, and true to the best of my knowledge.
                    </p>
                    <p style="text-align: justify; margin-bottom: 10px;">
                        <b>- Potential Consequences of Incorrect or Insufficient Information:</b>  I understand that providing
incomplete, inaccurate, false, or insufficient information can negatively impact the negotiation and
processing of my paperwork with the IRS for tax relief. This can lead to:
<ul>
    <li>Delays in the processing and/or negotiation of my case</li>
    <li>Altered outcomes, which might not be in my best interest.</li>
    <li>Potential denial of tax relief or other potential ramifications.</li>
</ul>
                    </p>
                    <p style="text-align: justify; margin-bottom: 10px;">
                        <b>-Liability: </b> : I understand and agree that CLEAR START TAX, its employees, agents, or
representatives will not be held responsible or liable for any consequences resulting from
inaccurate or incomplete information I provide. My submissions are solely my responsibility.

                    </p>
                    <p style="text-align: justify; margin-bottom: 10px;">
                        <b>- Recommendation:</b> : I acknowledge that it is in my best interest to thoroughly review all provided
information and attached documents before submission, ensuring all details are complete and
accurate.

                    </p>
                    <p style="text-align: justify; margin-bottom: 10px;">
                        <b>- Assistance and Communication:</b> : If there are any discrepancies, missing information, or
clarifications needed in the information provided, CLEAR START TAX will make reasonable
efforts to contact me to address these issues. We are committed to assisting our clients
throughout this process and ensuring that the most accurate information is presented for tax relief
considerations
                    </p>           
    
                    <p  style="border-color: black; margin: 10px; border-style: solid; border-width: 1px 1px 1px 1px;">Client's Email:  {!! $maindata['email'] !!}</p>
                    <p  style="border-color: black; margin: 10px; border-style: solid; border-width: 0 1px 1px 1px;">Signers IP: {!! $maindata['ip'] !!}</p>
                    <p  style="border-color: black; margin: 10px; border-style: solid; border-width: 0 1px 1px 1px;">Time Stamp: {!! $maindata['timestamp'] !!}</p>
                    <p style="border-color: black; margin: 10px; border-style: solid; border-width: 0 1px 1px 1px; margin:3px">Signed Date: {!! $maindata['signed_date'] !!}</p>
                    <p  style="border-color: black; margin: 10px; border-style: solid; border-width: 0 1px 1px 1px;">Client's Name: {!! $maindata['name'] !!}</p>
                    <p  style="border-color: black; margin: 30px 10px; border-style: solid; border-width: 0 1px 1px 1px;">Client's Signature: <font face="buenossignature400" style="font-size:18px; font-weight:300" >{!! $maindata['signature'] !!}</font></p>
</body>
</html>