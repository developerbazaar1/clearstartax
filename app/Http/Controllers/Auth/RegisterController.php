<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'case_id' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $case_id = $data['case_id'];
        $email = $data['email'];
        
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
            
        }else{


            if(empty($response['Message'])){
               
                if($response['status'] == 'success'){
                    $response2 = json_decode($response['data'], true);
                        
                        $data['Email'] = $response2['Email']; 
                        
                        if(strtolower($data['Email']) == strtolower($email)){
                             
                            $name = $response2['FirstName'].' '.$response2['LastName'];

                            return User::create([
                                'name' => $name,
                                'case_id' => $data['case_id'],
                                'email' => $data['email'],
                                'password' => Hash::make($data['password']),
                            ]);
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
}
