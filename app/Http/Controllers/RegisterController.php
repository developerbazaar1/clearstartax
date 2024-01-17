<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Status;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    
    public function createUser(Request $request)
    {
        try {

            $validateUser = Validator::make($request->all(), 
            [
                'case_id' => 'required',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|min:6,',
            ]);


            if ($validateUser->fails()) {
                return redirect('register')  // Redirect back to the registration form
                    ->withErrors($validateUser)  // Pass validation errors to the view
                    ->withInput();            // Pass the input data back to the view
            }
            
            $case_id = $request->case_id;
            $email = $request->email;
            $password = $request->password;
            
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


                if(empty($response1['Message'])){
                   
                    if($response['status'] == 'success'){
                        $response2 = json_decode($response['data'], true);
                            
                            $email = $response2['Email']; 
                            
                            if(strtolower($email) == strtolower($email)){
                                 
                                
                                    $marks = Status::pluck('status_code')->toArray();
                                    if (in_array($response2['StatusID'], $marks))
                                    {  
                                        $name = $response2['FirstName'].' '.$response2['LastName'];

                                        $user = User::create([
                                            'name' => $name,
                                            'case_id' => $case_id,
                                            'email' => $email,
                                            'password' => Hash::make($password),
                                        ]);
                                        Auth::login($user);
                                        
                                        return redirect('home'); 
                                    }
                                    else
                                    {
                                      return redirect()->back()->with('error', "We're sorry, but you currently don't have permission to access this portal. If you believe this is an error or have any questions, please contact our support team at 888-235-0004");
                                    }

                            }else{
                                return redirect()->back()->with('error', 'Please enter correct email id');
                                // return redirect(route('login'))->with('error', 'Please enter correct email id');
                            }
                    }else{
                        return redirect()->back()->with('error', 'The request is invalid, Please try again'); 
                    }
                }else{
                        return redirect()->back()->with('error', 'The request is invalid, Please try again'); 
                }  

            }            
               
                
            

        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }


}
