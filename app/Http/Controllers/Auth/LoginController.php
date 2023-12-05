<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Status;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    protected function authenticated(Request $request, $user)
    {
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
  
                return redirect()->back()->with('error', 'Please enter correct email id and case Id');
                
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
       
    }

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
