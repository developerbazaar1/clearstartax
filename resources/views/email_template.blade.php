<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Run Payment for client CASE ID</title>
</head>
<body style="background-image: linear-gradient(164deg, #0093f559 46%, #c0d8e93b 40%); margin: 0;    display: flex; justify-content: center; align-items: center;">
    <table style="width: 100%;max-width: 620px;margin: 30px auto;background-color: #ffffff; border-top: 5px solid  #005ff5; border-radius: 4px; font-family: Arial, Helvetica, sans-serif;position: relative; box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;" cellpadding="0" cellspacing="0">
        <tbody>
            
            <tr>
                <td align="center" style=" text-decoration: none; line-height: 24px; font-size: 24px; padding: 28px 28px 20px 28px; color: #0093f5; font-weight: bold;">Hello Team!
                </td>
             </tr>
             <tr>
                <td align="center" style=" text-decoration: none; line-height: 24px; font-size: 20px; padding: 0 28px 28px;  color: green;">
                    <span>Run Payment for client CASE ID: {{$case_id}}
                    </span>
                    
                </td>
             </tr>
             
             <tr style="margin: 0 20px 12px 20px; display: block;">
                <td style="background: #EDF8FE; justify-content: space-between; align-items: center; padding: 15px 18px;">
                    <span style="max-width: 400px; display: inline-block; text-align: left;     margin-right: 40px; font-weight: 600">Client Name: {{$name}}</span>
                    <span style="display:inline-block;width: 390px;text-align: right;"></span>
                </td>
             </tr>
             <tr style="margin: 0 20px 12px 20px; display: block;">
                <td style="background: #EDF8FE;  justify-content: space-between; align-items: center; padding: 15px 18px">
                    <span style="max-width: 126px; display: inline-block; text-align: left;     margin-right: 40px; font-weight: 600">Case ID: {{$case_id}}</span>
                    <span style="display:inline-block;width: 424px;text-align: right;"></span>
                </td>
             </tr>
             <tr style="margin: 0 20px 12px 20px; display: block;">
                <td style="background: #EDF8FE;  justify-content: space-between; align-items: center; padding: 15px 18px">
                    <span style="max-width: 126px; display: inline-block; text-align: left;     margin-right: 40px; font-weight: 600">Date: {{$date}}</span>
                    <span style="display:inline-block;width: 448px;text-align: right;"></span>
                </td>
             </tr>
             <tr style="margin: 0 20px 12px 20px; display: block;">
                <td style="background: #EDF8FE;  justify-content: space-between; align-items: center; padding: 15px 18px">
                    <span style="max-width: 308px; display: inline-block; text-align: left;     margin-right: 40px; font-weight: 600">Run payment amount: ${{$amount}}</span>
                    <span style="display:inline-block;width: 320px;text-align: right;"></span>
                </td>
             </tr>

             <tr>
               <td align="center" style="text-decoration: none; line-height: 24px; font-size: 16px; color: #676767; padding: 20px 28px 28px 28px; ">Client has updated their payment VIA ACH through our quick pay link. Please run the payment for the client.                
               </td>
            </tr>

            
            
             <tr style="background-color: #2c88df;">
                <td align="center" style="text-decoration: none; line-height: 24px; padding: 12px 28px; font-size: 16px; color: #fff; font-weight: 600;">© All rights reserved | Clear Start Tax
                </td>
             </tr>
        </tbody>
    </table>
</body>
</html>