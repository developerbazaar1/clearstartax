<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\Status;
use App\Models\Fq;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;

class FqController extends Controller
{
    
   

    public function index(Request $request)
    { 

        $fqs = Fq::where('user_id', Auth::user()->id)->orderBy('id','DESC')->get(); 
        // print_r($fqs); die;
        return view('fq.index',compact('fqs'));

    }
  
   
   
}
