<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Models\Status;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use DB;

class AuthController extends Controller
{
    
    public function createUser(Request $request)
    {
    try{

            $validateUser = Validator::make($request->all(), 
            [
                'case_id' => 'required',
                'email' => 'required|email|unique:users,email',  
                'password' => 'required|min:6,'
            ]);

            if($validateUser->fails()){
                return response()->json([
                    'status' => false,
                    'message' => 'validation error',
                    'errors' => $validateUser->errors()
                ], 401);
            }

            $case_id = $request->case_id;
            $email = $request->email;
            
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
            
            if(isset($response['Message'])){
                if($response['Message'] == 'The request is invalid.'){
                    return response()->json([
                        'status' => false,
                        'message' => 'The request is invalid.',
                    ], 401);
                }
            }
            
            if($response['status'] == 'fail'){
                 

            }else{


                if(empty($response1['Message'])){
                   
                    if($response['status'] == 'success'){
                        $response2 = json_decode($response['data'], true);
                            
                            $data['Email'] = $response2['Email']; 
                            
                            if(strtolower($data['Email']) == strtolower($email)){
                                 
                                $name = $response2['FirstName'].' '.$response2['LastName'];

                                User::create([
                                    'name' => $name,
                                    'case_id' => $request->case_id,
                                    'email' => $request->email,
                                    'password' => Hash::make($request->password),
                                ]);

                                $user = User::where('email', $request->email)->first();
                                if($user){

                                    return response()->json([
                                        'status' => true,
                                        'message' => 'User Registered Successfully',
                                        'user' => $user,
                                        'token' => $user->createToken("API TOKEN")->plainTextToken
                                    ], 200);
                                   
                                }


                            }else{

                                return response()->json([
                                    'status' => false,
                                    'message' => 'Please enter correct email id or case id',
                                ], 401);
                               
                            }
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

        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }


    public function loginUser(Request $request)
    {
        try {
            $validateUser = Validator::make($request->all(), 
            [
                'email' => 'required',
                'password' => 'required',
            ]);

            if($validateUser->fails()){
                return response()->json([
                    'status' => false,
                    'message' => 'validation error',
                    'errors' => $validateUser->errors()
                ], 401);
            }

            
            if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){ 

                $user = Auth::user(); 


                $case_id = $user->case_id;
                $email = $user->email;
                
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


                    if(empty($response1['Message'])){
                       
                        if($response['status'] == 'success'){
                            $response2 = json_decode($response['data'], true);
                                
                                $email = $response2['Email']; 
                                
                                if(strtolower($email) == strtolower($email)){
                                     
                                    
                                        $marks = Status::pluck('status_code')->toArray();
                                        if (!in_array($response2['StatusID'], $marks))
                                        {  
                                            Auth::logout();
                                            return response()->json([
                                                'status' => false,
                                                'message' => "We're sorry, but you currently don't have permission to access this portal. If you believe this is an error or have any questions, please contact our support team at 888-235-0004",
                                            ], 401);
                                            
                                        }else{
                                            return response()->json([
                                                'status' => true,
                                                'message' => 'User Login Successfully',
                                                'user' => $user,
                                                'token' => $user->createToken("API TOKEN")->plainTextToken
                                            ], 200);
                                        }
                                       

                                }else{
                                    
                                    return response()->json([
                                        'status' => false,
                                        'message' => 'Please enter correct email id',
                                    ], 401);
                                }
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

            }else{
                return response()->json([
                    'status' => false,
                    'message' => 'Invalid login details',
                ], 401);
            }

        
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }

  



    public function logout(Request $request)
    {
        $user = $request->user();

        // Check if the user has a valid access token
        if ($user && $user->currentAccessToken()) {
            // Logout by deleting the current access token
            $user->currentAccessToken()->delete();

            return response()->json([
                'status' => true,
                'message' => 'Logged out successfully',
            ], 200);
        }

        // If no valid access token is found, return an error response
        return response()->json([
            'status' => false,
            'message' => 'No valid access token found. User may not be logged in.',
        ], 401);
    }

   
   

}
