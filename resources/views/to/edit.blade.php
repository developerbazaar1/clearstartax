@extends('layouts.header')
@section('styles') 
@endsection
@section('content')


<!-- :: client information head -->
<div class="app-title">
    <div class="user-dashboard-welcome">
        <h1>Hello @php echo ucfirst(Auth::user()->name); @endphp</h1>
        <h5 class="mt-10 mb-5px">Logged in as @php echo Auth::user()->email; @endphp
        </h5>
    </div>
    <div class="user-dashboard-welcome-d-image d-none-sm">
        <img class="paymenttop-image" src="{{ URL::asset('assets/img/documents.png') }}">
    </div>
</div>
<!-- :: end client information head -->
<!-- :: to form start from here -->
<section class="upayment-confirm-section">
    <div class="row justify-content-center">
        <!-- :: tab col start from here -->
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 text-center">
            <!-- :: first tab start from here -->
            
            <!-- :: first tab end -->
            <!-- :: second tab strat from here -->
            <div class="f-tab-cnt" id="tab2" style="display: block;">
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="float-left">
                            <a href="{{ route('tos') }}" class="back-to-tab-one">
                                <iconify-icon icon="solar:arrow-left-linear" style="color: black;" width="30"
                                    height="30">
                                </iconify-icon>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="mt-3">
                            <h6>Please continue and fill out the form. Answers will be saved in your account.
                            </h6>
                        </div>
                    </div>
                    <!-- :: form instruction start from here-->
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 mt-3">
                        <div class="form-name-highlite">
                            <h5 class="i-image">Tax Organizer</h5>
                        </div>
                        <div class="warning-text mt-3 text-left">
                            <p>Please complete a Tax Organizer for each unfiled year and upload any documents
                                required.</p>
                            <p><mark>Ex: If you have 2017, 2018, and 2019 unfiled. You will need to complete
                                    this form 3 times with each years information.</mark></p>
                            <p><mark>You will have the option to fill out addtional forms once you save or
                                    complete this current form that you are on.</mark></p>
                            <p><mark>You may pause and continue your Tax Organizer anytime by clicking "Save
                                    Progress" at the bottom of the form.</mark></p>
                            <h6>Contact us if you need help with the form:</h6>
                            <p class="mb-2"><strong>Phone:</strong> <span><a href="#" class="#">
                                        888-235-0004</a></span></p>
                            <p class="mb-2"><strong>Email:</strong> <span><a href="#"
                                        class="#">info@clearstarttax.com</a></span></p>
                            <p class="mb-2"><strong>Hours:</strong> Monday-Friday 8am-5pm Pacific Standard Time.
                            </p>
                        </div>
      
                            @if($message = Session::get('success'))
                    
                                <div class="alert mt-3 mb-3 p-2 alert-success alert-dismissible" role="alert">
                                  {{ $message }}
                                  <button type="button" class="float-right btn-close" data-dismiss="alert" aria-label="Close"><i class="fa fa-close"></i></button>
                                </div>
                            @endif
                            @if($message = Session::get('error'))
                
                                <div class="alert mt-3 mb-3 p-2 alert-danger alert-dismissible" role="alert">
                                  {{ $message }}
                                  <button type="button" class="float-right btn-close" data-dismiss="alert" aria-label="Close"><i class="fa fa-close"></i></button>
                                </div>
                            @endif
                        <form action="{{route('to-update')}}" method="POST"  enctype="multipart/form-data">
                                @csrf
                            <div class="row mt-4">
                                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 text-left mx-1">
                                    <div class="form-group">
                                        <label class="form-head" for="exampletext"> What Tax Year Is This
                                            Organizer For <span class="red">*</span>
                                        </label>
                                        <div class="d-flex flex-wrap">
                                            <div class="form-check mx-3 w-40px">
                                                <label class="form-check-label">
                                                    <input class="form-check-input @error('What_Tax_Year_Is_This_Organizer_For') is-invalid @enderror" name="What_Tax_Year_Is_This_Organizer_For" id="What_Tax_Year_Is_This_Organizer_For1" value="2023" @if($to->What_Tax_Year_Is_This_Organizer_For == '2023') checked @endif 
                                                        type="radio" >2023
                                                </label>
                                            </div>
                                            <div class="form-check mx-3 w-40px">
                                                <label class="form-check-label">
                                                    <input class="form-check-input @error('What_Tax_Year_Is_This_Organizer_For') is-invalid @enderror" name="What_Tax_Year_Is_This_Organizer_For" id="What_Tax_Year_Is_This_Organizer_For2" value="2022" @if($to->What_Tax_Year_Is_This_Organizer_For == '2022') checked @endif 
                                                        type="radio" >2022
                                                </label>
                                            </div>
                                            <div class="form-check mx-3 w-40px">
                                                <label class="form-check-label">
                                                    <input class="form-check-input @error('What_Tax_Year_Is_This_Organizer_For') is-invalid @enderror" name="What_Tax_Year_Is_This_Organizer_For" id="What_Tax_Year_Is_This_Organizer_For3" value="2021" @if($to->What_Tax_Year_Is_This_Organizer_For == '2021') checked @endif 
                                                        type="radio" >2021
                                                </label>
                                            </div>
                                            <div class="form-check mx-3 w-40px">
                                                <label class="form-check-label">
                                                    <input class="form-check-input @error('What_Tax_Year_Is_This_Organizer_For') is-invalid @enderror" name="What_Tax_Year_Is_This_Organizer_For" id="What_Tax_Year_Is_This_Organizer_For4" value="2020" @if($to->What_Tax_Year_Is_This_Organizer_For == '2020') checked @endif 
                                                        type="radio" >2020
                                                </label>
                                            </div>
                                            <div class="form-check mx-3 w-40px">
                                                <label class="form-check-label">
                                                    <input class="form-check-input @error('What_Tax_Year_Is_This_Organizer_For') is-invalid @enderror" name="What_Tax_Year_Is_This_Organizer_For" id="What_Tax_Year_Is_This_Organizer_For5" value="2019" @if($to->What_Tax_Year_Is_This_Organizer_For == '2019') checked @endif 
                                                        type="radio" >2019
                                                </label>
                                            </div>
                                            <div class="form-check mx-3 w-40px">
                                                <label class="form-check-label">
                                                    <input class="form-check-input @error('What_Tax_Year_Is_This_Organizer_For') is-invalid @enderror" name="What_Tax_Year_Is_This_Organizer_For" id="What_Tax_Year_Is_This_Organizer_For6" value="2018" @if($to->What_Tax_Year_Is_This_Organizer_For == '2018') checked @endif 
                                                        type="radio" >2018
                                                </label>
                                            </div>
                                            <div class="form-check mx-3 w-40px">
                                                <label class="form-check-label">
                                                    <input class="form-check-input @error('What_Tax_Year_Is_This_Organizer_For') is-invalid @enderror" name="What_Tax_Year_Is_This_Organizer_For" id="What_Tax_Year_Is_This_Organizer_For7" value="2017" @if($to->What_Tax_Year_Is_This_Organizer_For == '2017') checked @endif 
                                                        type="radio" >2017
                                                </label>
                                            </div>
                                            <div class="form-check mx-3 w-40px">
                                                <label class="form-check-label">
                                                    <input class="form-check-input @error('What_Tax_Year_Is_This_Organizer_For') is-invalid @enderror" name="What_Tax_Year_Is_This_Organizer_For" id="What_Tax_Year_Is_This_Organizer_For8" value="2016" @if($to->What_Tax_Year_Is_This_Organizer_For == '2016') checked @endif 
                                                        type="radio" >2016
                                                </label>
                                            </div>
                                            <div class="form-check mx-3 w-40px">
                                                <label class="form-check-label">
                                                    <input class="form-check-input @error('What_Tax_Year_Is_This_Organizer_For') is-invalid @enderror" name="What_Tax_Year_Is_This_Organizer_For" id="What_Tax_Year_Is_This_Organizer_For9" value="2015" @if($to->What_Tax_Year_Is_This_Organizer_For == '2015') checked @endif 
                                                        type="radio" >2015
                                                </label>
                                            </div>
                                            <div class="form-check mx-3 w-40px">
                                                <label class="form-check-label">
                                                    <input class="form-check-input @error('What_Tax_Year_Is_This_Organizer_For') is-invalid @enderror" name="What_Tax_Year_Is_This_Organizer_For" id="What_Tax_Year_Is_This_Organizer_For10" value="2014" @if($to->What_Tax_Year_Is_This_Organizer_For == '2014') checked @endif 
                                                        type="radio" >2014
                                                </label>
                                            </div>
                                            <div class="form-check mx-3 w-40px">
                                                <label class="form-check-label">
                                                    <input class="form-check-input @error('What_Tax_Year_Is_This_Organizer_For') is-invalid @enderror" name="What_Tax_Year_Is_This_Organizer_For" id="What_Tax_Year_Is_This_Organizer_For11" value="2013" @if($to->What_Tax_Year_Is_This_Organizer_For == '2013') checked @endif 
                                                        type="radio" >2013
                                                </label>
                                            </div>
                                            <div class="form-check mx-3 w-40px">
                                                <label class="form-check-label">
                                                    <input class="form-check-input @error('What_Tax_Year_Is_This_Organizer_For') is-invalid @enderror" name="What_Tax_Year_Is_This_Organizer_For" id="What_Tax_Year_Is_This_Organizer_For12" value="2012" @if($to->What_Tax_Year_Is_This_Organizer_For == '2012') checked @endif 
                                                        type="radio" >2012
                                                </label>
                                            </div>
                                            <div class="form-check mx-3 w-40px">
                                                <label class="form-check-label">
                                                    <input class="form-check-input @error('What_Tax_Year_Is_This_Organizer_For') is-invalid @enderror" name="What_Tax_Year_Is_This_Organizer_For" id="What_Tax_Year_Is_This_Organizer_For13" value="2011" @if($to->What_Tax_Year_Is_This_Organizer_For == '2011') checked @endif 
                                                        type="radio" >2011
                                                </label>
                                            </div>
                                            <div class="form-check mx-3 w-40px">
                                                <label class="form-check-label">
                                                    <input class="form-check-input @error('What_Tax_Year_Is_This_Organizer_For') is-invalid @enderror" name="What_Tax_Year_Is_This_Organizer_For" id="What_Tax_Year_Is_This_Organizer_For14" value="2010" @if($to->What_Tax_Year_Is_This_Organizer_For == '2010') checked @endif 
                                                        type="radio" >2010
                                                    
                                                </label>
                                            </div>
                                        </div>
                                        @error('What_Tax_Year_Is_This_Organizer_For')
                                            <span class="error" style="font-size: 80%; color: #dc3545;" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <!-- ************************ Section 01 ************************ -->
                            <div class="form-section-highlite mt-3">
                                <div>Personal Information</div>
                            </div>
                            <div class="row mt-3">
                                <!-- :: input 01 -->
                                <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 text-left">
                                    <div class="form-group">
                                        <label class="form-head" for="exampletext"> First Name : <span class="red">*</span></label>
                                        <input type="text" class="form-control @error('First_Name') is-invalid @enderror " name="First_Name" id="First_Name" value="@if(!empty($to->First_Name)){{old('First_Name', $to->First_Name)}}@endif"
                                            placeholder="Enter First name" >
                                        @error('First_Name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- :: input 02 -->
                                <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 text-left">
                                    <div class="form-group">
                                        <label class="form-head" for="lastName"> Last Name : <span class="red">*</span></label>
                                        <input type="text" name="Last_Name" class="form-control  @error('Last_Name') is-invalid @enderror" id="Last_Name"
                                            placeholder="Enter Last name" value="@if(!empty($to->Last_Name)){{old('Last_Name', $to->Last_Name)}}@endif">
                                        @error('Last_Name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- input 03 -->
                                <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 text-left">
                                    <div class="form-group">
                                        <label class="form-head" for="exampletext"> Date Of Birth : <span class="red">*</span></label>
                                            <input type="date" name="Date_Of_Birth" value="@if(!empty($to->Date_Of_Birth)){{old('Date_Of_Birth', $to->Date_Of_Birth)}}@endif" class="form-control @error('Date_Of_Birth') is-invalid @enderror " id="Date_Of_Birth"
                                                placeholder="Enter Date Of Birth" >
                                            @error('Date_Of_Birth')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                </div>
                                <!-- :: input 04 -->
                                <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 text-left">
                                    <div class="form-group">
                                        <label class="form-head" for="exampletext"> SSN : <span class="red">*</span></label>
                                            <input type="text" name="SSN" value="@if(!empty($to->SSN)){{old('SSN', $to->SSN)}}@endif" class="ssn_valid form-control @error('SSN') is-invalid @enderror " id="SSN"
                                                placeholder="Enter your SSN " >
                                            @error('SSN')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                </div>
                                <!-- :: input 05 -->
                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                    <div class="form-group">
                                        <label class="form-head" for="exampletext"> Street Address : <span class="red">*</span></label>
                                        <input type="text" class="form-control @error('Street_Address') is-invalid @enderror " value="@if(!empty($to->Street_Address)){{old('Street_Address', $to->Street_Address)}}@endif" name="Street_Address" id="Street_Address"
                                            placeholder="Enter your street address " >
                                        @error('Street_Address')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- :: input 06 -->
                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                    <div class="form-group">
                                        <label class="form-head" for="exampletext"> Address line 2 : </label>
                                            <input type="text" name="Address_Line_2" class="form-control" id="Address_Line_2 "
                                                placeholder="Enter your address " value="@if(!empty($to->Address_Line_2)){{old('Address_Line_2', $to->Address_Line_2)}}@endif" >
                                    </div>
                                </div>
                                <!-- :: input 07 -->
                                <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 text-left">
                                    <div class="form-group">
                                        <label class="form-head" for="exampletext"> City : <span class="red">*</span></label>
                                            <input type="text" name="City" value="@if(!empty($to->City)){{old('City', $to->City)}}@endif" class="form-control @error('City') is-invalid @enderror " id="City"
                                                placeholder="Enter your city " >
                                            @error('City')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                </div>
                                <!-- :: input 08 -->
                                <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 text-left">
                                    <div class="form-group">
                                        <label class="form-head" for="exampletext"> State : <span class="red">*</span></label>
                                            <input type="text" name="State" value="@if(!empty($to->State)){{old('State', $to->State)}}@endif" class="form-control @error('State') is-invalid @enderror " id="State"
                                                placeholder="Enter your State " >
                                            @error('State')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                </div>
                                <!-- :: input 09 -->
                                <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 text-left">
                                    <div class="form-group">
                                        <label class="form-head" for="exampletext"> Zip Code: <span class="red">*</span></label>
                                            <input type="text" name="Zip_Code" value="@if(!empty($to->Zip_Code)){{old('Zip_Code', $to->Zip_Code)}}@endif" class="form-control @error('Zip_Code') is-invalid @enderror" id="Zip_Code"
                                                placeholder="Enter your zip " >
                                            @error('Zip_Code')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                </div>
                                <!-- :: input 10 -->
                                <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 text-left">
                                    <div class="form-group">
                                        <label class="form-head" for="exampletext"> Country: <span class="red">*</span></label>
                                            <input type="text" name="Country" value="@if(!empty($to->Country)){{old('Country', $to->Country)}}@endif" class="form-control @error('Country') is-invalid @enderror" id="Country"
                                                placeholder="Enter Country " >
                                            @error('Country')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                </div>
                                <!-- :: input 11-->
                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                    <div class="form-group">
                                        <label class="form-head" for="Rent-Or-Own">
                                            Occupation <span class="red">*</span></label>
                                        <input type="text" name="Occupation" value="@if(!empty($to->Occupation)){{old('Occupation', $to->Occupation)}}@endif" class="form-control @error('Occupation') is-invalid @enderror" id="Occupation"
                                                placeholder="Enter Occupation " >
                                            @error('Occupation')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                </div>
                                <!-- :: input 12 -->
                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                    <div class="form-group">
                                        <label class="form-head" for="Rent-Or-Own"> Rent Or Own eg. share rent,
                                            live with relative, etc. : <span class="red">*</span></label>
                                        <input type="text" name="Rent_Or_Own" value="@if(!empty($to->Rent_Or_Own)){{old('Rent_Or_Own', $to->Rent_Or_Own)}}@endif" class="form-control @error('Rent_Or_Own') is-invalid @enderror" id="Rent_Or_Own"
                                                placeholder="Enter Rent Or Own" >
                                            @error('Rent_Or_Own')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                </div>
                                <!-- :: input 13 -->
                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                    <div class="form-group">
                                        <label class="form-head" for="PrimaryPhone"> Primary Phone Number <span class="red">*</span>
                                        </label>
                                        <input type="text" name="Main_Contact_Phone_Number" value="@if(!empty($to->Main_Contact_Phone_Number)){{old('Main_Contact_Phone_Number', $to->Main_Contact_Phone_Number)}}@endif" class="form-control @error('Main_Contact_Phone_Number') is-invalid @enderror" id="Main_Contact_Phone_Number"
                                                placeholder="Enter Your Primary Phone Number " >
                                            @error('Main_Contact_Phone_Number')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                </div>
                                <!-- :: input 14 -->
                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                    <div class="form-group">
                                        <label class="form-head" for="secondryphone"> Secondry Phone Number</label>
                                        <input type="text" name="snd_Contact_Phone_Number" value="@if(!empty($to->snd_Contact_Phone_Number)){{old('snd_Contact_Phone_Number', $to->snd_Contact_Phone_Number)}}@endif" class="form-control @error('snd_Contact_Phone_Number') is-invalid @enderror" id="snd_Contact_Phone_Number"
                                                placeholder="Enter Your Secondry Phone Number"  >
                                            @error('snd_Contact_Phone_Number')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                </div>
                                <!-- **************** SECTION 02 ***************** -->
                                <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
                                    <div class="form-section-highlite mt-3">
                                        <div>SECTION 1: Tax Filing Information</div>
                                    </div>
                                </div>
                                <!-- :: radio input for client filling status  -->
                                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 text-left  mt-4">
                                    <div class="form-group">
                                        <label class="form-head" for="client-f"> Client Filing Status</label>
                                        <div class="d-flex flex-wrap flex-direction">
                                            <!-- :: radio 01 -->
                                            <div class="form-check mx-3">
                                                <label class="form-check-label">
                                                    <input class="form-check-input @error('Client_Filing_Status') is-invalid @enderror" name="Client_Filing_Status" id="c-single" value="single" @if($to->Client_Filing_Status == 'single') checked @endif 
                                                        type="radio" >Single</label>


                                            </div>
                                            <!--  :: radio 02 -->
                                            <div class="form-check mx-3">
                                                <label class="form-check-label">
                                                    <input class="form-check-input @error('Client_Filing_Status') is-invalid @enderror" name="Client_Filing_Status" id="h-household" value="household" @if($to->Client_Filing_Status == 'household') checked @endif 
                                                        type="radio" >    
                                                    Head Of Household</label>
                                            </div>
                                            <!--  :: radio 03 -->
                                            <div class="form-check mx-3">
                                                <label class="form-check-label">
                                                    <input class="form-check-input @error('Client_Filing_Status') is-invalid @enderror" name="Client_Filing_Status" id="m-jointly" value="jointly" @if($to->Client_Filing_Status == 'jointly') checked @endif 
                                                        type="radio" >Married Filing
                                                    Jointly</label>
                                            </div>
                                            <!--  :: radio 04 -->
                                            <div class="form-check mx-3">
                                                <label class="form-check-label">
                                                    
                                                        <input class="form-check-input @error('Client_Filing_Status') is-invalid @enderror" name="Client_Filing_Status" id="m-separately" value="separately" @if($to->Client_Filing_Status == 'separately') checked @endif 
                                                        type="radio" >Married Filing Separately</label>
                                            </div>
                                            <!--  :: radio 05 -->
                                            <div class="form-check mx-3">
                                                <label class="form-check-label">
                                                    <input class="form-check-input @error('Client_Filing_Status') is-invalid @enderror" name="Client_Filing_Status" id="q-widower" value="widower" @if($to->Client_Filing_Status == 'widower') checked @endif 
                                                        type="radio" >Qualified
                                                    Widower</label>
                                            </div>
                                        </div>
                                        @error('Client_Filing_Status')
                                            <span class="error" style="font-size: 80%; color: #dc3545;" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    
                                    </div>
                                </div>
                                <!-- form dependecy for spouse fillinf -->
                                
                                @if( !empty($to->spouse_first_name) || !empty($to->spouse_last_name) || !empty($to->spouse_ssn) || !empty($to->spouse_date_of_birth) || !empty($to->spouse_occupaton) || $to->Client_Filing_Status == 'separately' || $to->Client_Filing_Status == 'jointly' )
                                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 mt-2 mb-2 dependency-tab"
                                    id="dependentto-select" style="display:block !important">
                                    <div class="form-section-divident text-left">
                                        <h6>Spouse Information</h6>
                                    </div>
                                    <div class="row dependency-form-control px-2">
                                        <!-- :: input 01 name -->
                                        <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                            <div class="form-group">
                                                <label class="form-head" for="firstname">First Name </label>
                                                
                                                <input type="text" name="spouse_first_name" class="form-control  @error('spouse_first_name') is-invalid @enderror" id="spouse_first_name"
                                                    placeholder="Enter First Name" value="@if(!empty($to->spouse_first_name)){{old('spouse_first_name', $to->spouse_first_name)}}@endif" >
                                                @error('spouse_first_name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <!-- :: input 02 last name -->
                                        <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                            <div class="form-group">
                                                <label class="form-head" for="lastname"> Last Name
                                                </label>
                                                <input type="text" name="spouse_last_name" class="form-control  @error('spouse_last_name') is-invalid @enderror" id="spouse_last_name"
                                                    placeholder="Enter Last Name" value="@if(!empty($to->spouse_last_name)){{old('spouse_last_name', $to->spouse_last_name)}}@endif" >
                                                @error('spouse_last_name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <!-- :: input 03 Occupation -->
                                        <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                            <div class="form-group">
                                                <label class="form-head" for="occupation"> Occupation
                                                </label>
                                                <input type="text" name="spouse_occupaton" class="form-control  @error('spouse_occupaton') is-invalid @enderror" id="spouse_occupaton"
                                                    placeholder="Enter Occupation" value="@if(!empty($to->spouse_occupaton)){{old('spouse_occupaton', $to->spouse_occupaton)}}@endif" >
                                                @error('spouse_occupaton')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <!-- :: input 04 Dob -->
                                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                            <div class="form-group">
                                                <label class="form-head" for="SSN"> SSN#
                                                </label>
                                                <input type="text" name="spouse_ssn" class="ssn_valid form-control  @error('spouse_ssn') is-invalid @enderror" id="spouse_ssn"
                                                    placeholder="Enter SSN" value="@if(!empty($to->spouse_ssn)){{old('spouse_ssn', $to->spouse_ssn)}}@endif" >
                                                @error('spouse_ssn')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <!-- :: input 05 Date Of Birth -->
                                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                            <div class="form-group">
                                                <label class="form-head" for="dateofbirth"> Date Of Birth
                                                </label>
                                                <input type="text" name="spouse_date_of_birth" class="form-control  @error('spouse_date_of_birth') is-invalid @enderror" id="spouse_date_of_birth"
                                                    placeholder="Enter Date Of Birth" value="@if(!empty($to->spouse_date_of_birth)){{old('spouse_date_of_birth', $to->spouse_date_of_birth)}}@endif" >
                                                @error('spouse_date_of_birth')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @else
                                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 mt-2 mb-2 dependency-tab"
                                    id="dependentto-select" style="display:none !important">
                                    <div class="form-section-divident text-left">
                                        <h6>Spouse Information</h6>
                                    </div>
                                    <div class="row dependency-form-control px-2">
                                        <!-- :: input 01 name -->
                                        <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                            <div class="form-group">
                                                <label class="form-head" for="firstname">First Name </label>
                                                
                                                <input type="text" name="spouse_first_name" class="form-control  @error('spouse_first_name') is-invalid @enderror" id="spouse_first_name"
                                                    placeholder="Enter First Name" value="@if(!empty($to->spouse_first_name)){{old('spouse_first_name', $to->spouse_first_name)}}@endif" >
                                                @error('spouse_first_name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <!-- :: input 02 last name -->
                                        <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                            <div class="form-group">
                                                <label class="form-head" for="lastname"> Last Name
                                                </label>
                                                <input type="text" name="spouse_last_name" class="form-control  @error('spouse_last_name') is-invalid @enderror" id="spouse_last_name"
                                                    placeholder="Enter Last Name" value="@if(!empty($to->spouse_last_name)){{old('spouse_last_name', $to->spouse_last_name)}}@endif" >
                                                @error('spouse_last_name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <!-- :: input 03 Occupation -->
                                        <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                            <div class="form-group">
                                                <label class="form-head" for="occupation"> Occupation
                                                </label>
                                                <input type="text" name="spouse_occupaton" class="form-control  @error('spouse_occupaton') is-invalid @enderror" id="spouse_occupaton"
                                                    placeholder="Enter Occupation" value="@if(!empty($to->spouse_occupaton)){{old('spouse_occupaton', $to->spouse_occupaton)}}@endif" >
                                                @error('spouse_occupaton')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <!-- :: input 04 Dob -->
                                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                            <div class="form-group">
                                                <label class="form-head" for="SSN"> SSN#
                                                </label>
                                                <input type="text" name="spouse_ssn" class="ssn_valid form-control  @error('spouse_ssn') is-invalid @enderror" id="spouse_ssn"
                                                    placeholder="Enter SSN" value="@if(!empty($to->spouse_ssn)){{old('spouse_ssn', $to->spouse_ssn)}}@endif" >
                                                @error('spouse_ssn')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <!-- :: input 05 Date Of Birth -->
                                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                            <div class="form-group">
                                                <label class="form-head" for="dateofbirth"> Date Of Birth
                                                </label>
                                                <input type="text" name="spouse_date_of_birth" class="form-control  @error('spouse_date_of_birth') is-invalid @enderror" id="spouse_date_of_birth"
                                                    placeholder="Enter Date Of Birth" value="@if(!empty($to->spouse_date_of_birth)){{old('spouse_date_of_birth', $to->spouse_date_of_birth)}}@endif" >
                                                @error('spouse_date_of_birth')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                <!-- :: Dependency for spouse filling end -->
                                <!-- :: radio input for employment filling status -->
                                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 text-left  mt-4">
                                    <div class="form-group">
                                        <label class="form-head" for="client_emp"> Client Employment
                                            Status</label>
                                        <div class="d-flex flex-wrap flex-direction">
                                            <!-- :: radio 01 -->
                                            <div class="form-check mx-3">
                                                <label class="form-check-label">
                                                        <input class="form-check-input @error('Client_Employment_Status') is-invalid @enderror" name="Client_Employment_Status" id="c-wage" value="wage" @if($to->Client_Employment_Status == 'wage') checked @endif 
                                                        type="radio" >

                                                        Wage Earner/
                                                    Employee</label>
                                            </div>
                                            <!--  :: radio 02 -->
                                            <div class="form-check mx-3">
                                                <label class="form-check-label">
                                                        <input class="form-check-input @error('Client_Employment_Status') is-invalid @enderror" name="Client_Employment_Status" id="self-employed" value="selfemployed" @if($to->Client_Employment_Status == 'selfemployed') checked @endif 
                                                        type="radio" >Self-Employed <small>(1099, Sole
                                                        Prop)</small></label>
                                            </div>
                                            <!--  :: radio 03 -->
                                            <div class="form-check mx-3">
                                                <label class="form-check-label">
                                                        <input class="form-check-input @error('Client_Employment_Status') is-invalid @enderror" name="Client_Employment_Status" id="business-owner" value="businessowner" @if($to->Client_Employment_Status == 'businessowner') checked @endif 
                                                        type="radio" >Business Owner<small>(LLC, S-Corp,
                                                        C-Corp)</small></label>
                                            </div>
                                            <!--  :: radio 04 -->
                                            <div class="form-check mx-3">
                                                <label class="form-check-label">
                                                    <input class="form-check-input @error('Client_Employment_Status') is-invalid @enderror" name="Client_Employment_Status" id="e-disability" value="disability" @if($to->Client_Employment_Status == 'disability') checked @endif 
                                                        type="radio" >Disability</label>
                                            </div>
                                            <!--  :: radio 05 -->
                                            <div class="form-check mx-3">
                                                <label class="form-check-label">
                                                    <input class="form-check-input @error('Client_Employment_Status') is-invalid @enderror" name="Client_Employment_Status" id="e-retired" value="Retired" @if($to->Client_Employment_Status == 'Retired') checked @endif 
                                                        type="radio" >Retired
                                                    
                                                        </label>
                                            </div>
                                        </div>
                                        @error('Client_Employment_Status')
                                            <span class="error" style="font-size: 80%; color: #dc3545;" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- :: radio for emp filling end -->

                                <!-- emp show hide -->
                                @if( !empty($to->Do_you_have_your_W2s) || $to->Client_Employment_Status == 'wage')
                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left" id="w2-select" style="display: block;">
                                    <div class="form-group">
                                        <label class="form-head" for="do-w2"> Do you have your W2's
                                        </label>
                                        <div class="form-check mx-3">
                                            <label class="form-check-label">
                                                <input class="form-check-input @error('Do_you_have_your_W2s') is-invalid @enderror" name="Do_you_have_your_W2s" id="w2-yes" value="Yes" @if($to->Do_you_have_your_W2s == 'Yes') checked @endif 
                                                        type="radio" >Yes
                                            </label>
                                        </div>
                                        <div class="form-check mx-3">
                                            <label class="form-check-label">
                                                <input class="form-check-input @error('Do_you_have_your_W2s') is-invalid @enderror" name="Do_you_have_your_W2s" id="w2-no" value="No" @if($to->Do_you_have_your_W2s == 'No') checked @endif 
                                                        type="radio" >No
                                                @error('Do_you_have_your_W2s')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                @enderror
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                @else
                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left" id="w2-select" style="display: none;">
                                    <div class="form-group">
                                        <label class="form-head" for="do-w2"> Do you have your W2's
                                        </label>
                                        <div class="form-check mx-3">
                                            <label class="form-check-label">
                                                <input class="form-check-input @error('Do_you_have_your_W2s') is-invalid @enderror" name="Do_you_have_your_W2s" id="w2-yes" value="Yes" @if($to->Do_you_have_your_W2s == 'Yes') checked @endif 
                                                        type="radio" >Yes
                                            </label>
                                        </div>
                                        <div class="form-check mx-3">
                                            <label class="form-check-label">
                                                <input class="form-check-input @error('Do_you_have_your_W2s') is-invalid @enderror" name="Do_you_have_your_W2s" id="w2-no" value="No" @if($to->Do_you_have_your_W2s == 'No') checked @endif 
                                                        type="radio" >No
                                                @error('Do_you_have_your_W2s')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                @enderror
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                <!-- input for emp doc -->
                                <!-- emp option 01 -->

                                @if( $to->Upload_your_W2s || $to->Do_you_have_your_W2s == 'Yes' )
                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left" id="wdoc-select" style="display:block">
                                    <div class="form-group">
                                        <label class="form-head" for="up-w2"> Upload your W2's

                                        </label>
                                        <input type="file" class="form-control @error('Upload_your_W2s') is-invalid @enderror" id="p-document"
                                name="Upload_your_W2s" accept="image/*"  >

                                        <input type="hidden" class="form-control" value="@if(!empty($to->Upload_your_W2s)){{old('bank_old$i', $to->Upload_your_W2s)}}@endif" id="Upload_your_W2s_old" name="Upload_your_W2s_old" >
                                        @if(!empty($to->Upload_your_W2s))
                                        <a target="_blank"  class="" href="@php echo URL::to('/').'/public/'.$to->Upload_your_W2s; @endphp" style="font-size: 10px;">@php echo URL::to('/').'/public/'.$to->Upload_your_W2s; @endphp</a>
                                        @endif

                                        @error('Upload_your_W2s')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                        @enderror
                                    </div>
                                </div>
                                @else
                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left" id="wdoc-select" style="display:none">
                                    <div class="form-group">
                                        <label class="form-head" for="up-w2"> Upload your W2's

                                        </label>
                                        <input type="file" class="form-control" id="p-document"
                                name="Upload_your_W2s" accept="image/*"  >
                                    </div>
                                </div>
                                @endif
                                <!-- emp option 02 -->

                                @if( $to->We_can_file_back_year_returns_based_on_IRS_wage_and_income || ( $to->Do_you_have_your_W2s == 'No' &&  $to->Client_Employment_Status == 'wage') )
                                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 mt-3 text-left "
                                    id="longradio-section" style="display: block;"> 
                                    <div class="form-group">
                                        <label class="form-head" for="long-text">
                                            We can file back year returns based on IRS wage and income. Note,
                                            this will not include any state withholdings, so state returns will
                                            show higher balance. If you authorize us to file based on IRS
                                            reported wages only, any additional amendments in the future will
                                            result in an additional fee for services. Do you agree to let us
                                            file base on IRS wage and income

                                        </label>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input @error('We_can_file_back_year_returns_based_on_IRS_wage_and_income') is-invalid @enderror" name="We_can_file_back_year_returns_based_on_IRS_wage_and_income" id="irswage-yes" value="Yes" @if($to->We_can_file_back_year_returns_based_on_IRS_wage_and_income == 'Yes') checked @endif 
                                                        type="radio" >Yes
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input @error('We_can_file_back_year_returns_based_on_IRS_wage_and_income') is-invalid @enderror" name="We_can_file_back_year_returns_based_on_IRS_wage_and_income" id="irswage-no" value="No" @if($to->We_can_file_back_year_returns_based_on_IRS_wage_and_income == 'No') checked @endif 
                                                        type="radio" >No
                                                @error('We_can_file_back_year_returns_based_on_IRS_wage_and_income')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                @enderror
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                @else
                                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 mt-3 text-left "
                                    id="longradio-section" style="display: none;">
                                    <div class="form-group">
                                        <label class="form-head" for="long-text">
                                            We can file back year returns based on IRS wage and income. Note,
                                            this will not include any state withholdings, so state returns will
                                            show higher balance. If you authorize us to file based on IRS
                                            reported wages only, any additional amendments in the future will
                                            result in an additional fee for services. Do you agree to let us
                                            file base on IRS wage and income

                                        </label>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input @error('We_can_file_back_year_returns_based_on_IRS_wage_and_income') is-invalid @enderror" name="We_can_file_back_year_returns_based_on_IRS_wage_and_income" id="irswage-yes" value="Yes" @if($to->We_can_file_back_year_returns_based_on_IRS_wage_and_income == 'Yes') checked @endif 
                                                        type="radio" >Yes
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input @error('We_can_file_back_year_returns_based_on_IRS_wage_and_income') is-invalid @enderror" name="We_can_file_back_year_returns_based_on_IRS_wage_and_income" id="irswage-no" value="No" @if($to->We_can_file_back_year_returns_based_on_IRS_wage_and_income == 'No') checked @endif 
                                                        type="radio" >No
                                                @error('We_can_file_back_year_returns_based_on_IRS_wage_and_income')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                @enderror
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                <!-- emp option 03 -->

                                @if( $to->You_Will_Need_To_Upload_your_W2s || ($to->We_can_file_back_year_returns_based_on_IRS_wage_and_income == 'No' &&  $to->Client_Employment_Status == 'wage') )
                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left" id="upwdoc-select"
                                    style="display: block;">
                                    <div class="form-group">
                                        <label class="form-head" for="exampletext"> You Will Need To Upload your
                                            W2's

                                        </label>
                                        <input type="file" class="form-control @error('You_Will_Need_To_Upload_your_W2s') is-invalid @enderror" id="up-document"
                                            name="You_Will_Need_To_Upload_your_W2s" accept="image/*">

                                        <input type="hidden" class="form-control" value="@if(!empty($to->You_Will_Need_To_Upload_your_W2s)){{old('bank_old$i', $to->You_Will_Need_To_Upload_your_W2s)}}@endif" id="You_Will_Need_To_Upload_your_W2s_old" name="You_Will_Need_To_Upload_your_W2s_old" >
                                        @if(!empty($to->You_Will_Need_To_Upload_your_W2s))
                                        <a target="_blank"  class="" href="@php echo URL::to('/').'/public/'.$to->You_Will_Need_To_Upload_your_W2s; @endphp" style="font-size: 10px;">@php echo URL::to('/').'/public/'.$to->You_Will_Need_To_Upload_your_W2s; @endphp</a>
                                        @endif

                                        @error('You_Will_Need_To_Upload_your_W2s')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                        @enderror
                                        
                                    </div>
                                </div>
                                @else
                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left" id="upwdoc-select"
                                    style="display: none;">
                                    <div class="form-group">
                                        <label class="form-head" for="exampletext"> You Will Need To Upload your
                                            W2's

                                        </label>
                                        <input type="file" class="form-control" id="up-document"
                                            name="You_Will_Need_To_Upload_your_W2s" accept="image/*">
                                    </div>
                                </div>
                                @endif
                                <!-- emp show hide -->  

                                <!-- self employed and business filling details fill on click radio -->

                                @if( $to->Name_Of_Business ||  $to->Tax_ID  ||  $to->Business_Activity ||  $to->Do_you_have_a_profit_and_loss_statement ||  $to->Client_Employment_Status == 'selfemployed' || $to->Client_Employment_Status == 'businessowner')
                                <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12" id="long-select" style="display: block;">
                                    <div class="form-section-highlite mt-3">
                                        <div>Business Income & Expenses </div>
                                    </div>
                                    <!-- inner row -->
                                    <div class=" row ext-r">
                                        <!-- business form start from here -->
                                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 mt-2 mb-2 dependency-tab"
                                            id="business-select" style="display: block;">
                                            <div class="form-section-divident text-left">
                                                <h6>Business Info </h6>
                                            </div>
                                            <div class="row dependency-form-control px-2">
                                                <!-- :: input 01 Name Of Business  -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="businessname">Name Of
                                                            Business </label>
                                                        <input type="text" name="Name_Of_Business" value="@if(!empty($to->Name_Of_Business)){{old('Name_Of_Business', $to->Name_Of_Business)}}@endif" class="form-control @error('Name_Of_Business') is-invalid @enderror " id="business_name"
                                                        placeholder="Enter Name Of
                                                            Business" >
                                                        @error('Name_Of_Business')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror

                                                    </div>
                                                </div>
                                                <!-- :: input 02 Tax ID# (EIN) -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="tax-id"> Tax ID# (EIN)
                                                        </label>
                                                        <input type="text" name="Tax_ID" value="@if(!empty($to->Tax_ID)){{old('Tax_ID', $to->Tax_ID)}}@endif" class="form-control @error('Tax_ID') is-invalid @enderror " id="tax-identity"
                                                        placeholder="Enter Tax ID#" >
                                                        @error('Tax_ID')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 03Business Activity -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="business-ctivity">Business
                                                            Activity
                                                        </label>
                                                        <input type="text" name="Business_Activity" value="@if(!empty($to->Business_Activity)){{old('Business_Activity', $to->Business_Activity)}}@endif" class="form-control @error('Business_Activity') is-invalid @enderror " id="b-activity"
                                                        placeholder="Enter Business
                                                            Activity" >
                                                        @error('Business_Activity')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6 text-left mt-3">
                                            <div class="form-group">
                                                <label class="form-head" for="p-statement">Do you have a profit
                                                    and loss statement
                                                </label>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input @error('Do_you_have_a_profit_and_loss_statement') is-invalid @enderror" name="Do_you_have_a_profit_and_loss_statement" id="profit-yes" value="Yes" @if($to->Do_you_have_a_profit_and_loss_statement == 'Yes') checked @endif 
                                                        type="radio" >Yes
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input @error('Do_you_have_a_profit_and_loss_statement') is-invalid @enderror" name="Do_you_have_a_profit_and_loss_statement" id="profit-no" value="No" @if($to->Do_you_have_a_profit_and_loss_statement == 'No') checked @endif 
                                                        type="radio" >No
                                                        @error('Do_you_have_a_profit_and_loss_statement')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        @if(($to->Client_Employment_Status == 'selfemployed' || $to->Client_Employment_Status == 'businessowner') && $to->Do_you_have_a_profit_and_loss_statement == 'Yes')
                                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left mt-3"
                                            id="profit-select" style="display: block;">
                                            <div class="form-group">
                                                <label class="form-head" for="profit-loss">
                                                    Upload Profit & Loss Statement
                                                </label>
                                                <input type="file" class="form-control @error('Upload_Profit_Loss_Statement') is-invalid @enderror" id="profit-document"
                                                    name="Upload_Profit_Loss_Statement" accept="image/*" >

                                                <input type="hidden" class="form-control" value="@if(!empty($to->Upload_Profit_Loss_Statement)){{old('bank_old$i', $to->Upload_Profit_Loss_Statement)}}@endif" id="Upload_Profit_Loss_Statement_old" name="Upload_Profit_Loss_Statement_old" >
                                                @if(!empty($to->Upload_Profit_Loss_Statement))
                                                <a target="_blank"  class="" href="@php echo URL::to('/').'/public/'.$to->Upload_Profit_Loss_Statement; @endphp" style="font-size: 10px;">@php echo URL::to('/').'/public/'.$to->Upload_Profit_Loss_Statement; @endphp</a>
                                                @endif

                                                @error('Upload_Profit_Loss_Statement')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                @enderror
                                            </div>
                                        </div>
                                        @else
                                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left mt-3"
                                            id="profit-select" style="display: none;">
                                            <div class="form-group">
                                                <label class="form-head" for="profit-loss">
                                                    Upload Profit & Loss Statement
                                                </label>
                                                <input type="file" class="form-control @error('Upload_Profit_Loss_Statement') is-invalid @enderror" id="profit-document"
                                                    name="Upload_Profit_Loss_Statement" accept="image/*" >
                                                @error('Upload_Profit_Loss_Statement')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                @enderror
                                            </div>
                                        </div>
                                        @endif

                                        <!-- ::input for document Upload Profit & Loss   -->
                                        <!-- inputs for select plofit loss no -->
                                        @if(($to->Client_Employment_Status == 'selfemployed' || $to->Client_Employment_Status == 'businessowner') && $to->Do_you_have_a_profit_and_loss_statement == 'No')
                                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 mt-2 mb-2 dependency-tab"
                                            id="profit-input" style="display: block;">
                                            <div class="form-section-divident text-left mb-4">
                                                <h6> If a question does not apply to you, put 0.</h6>
                                            </div>
                                            <div class="row profit-form-control px-2">
                                                <!-- :: input 01 Accounting -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="Accounting">Accounting
                                                        </label>
                                                        <input type="text" name="Accounting" class="form-control  @error('Accounting') is-invalid @enderror" id="Accounting"
                                                            placeholder="Enter Accounting" value="@if(!empty($to->Accounting)){{old('Accounting', $to->Accounting)}}@endif" >
                                                        @error('Accounting')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                        
                                                        
                                                    </div>
                                                </div>
                                                <!-- :: input 02 Advertising -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="advertising"> Advertising
                                                        </label>
                                                        <input type="text" name="Advertising" class="form-control  @error('Advertising') is-invalid @enderror" id="Advertising"
                                                            placeholder="Enter Advertising" value="@if(!empty($to->Advertising)){{old('Advertising', $to->Advertising)}}@endif" >
                                                        @error('Advertising')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                        
                                                    </div>
                                                </div>
                                                <!-- :: input 03 Alarm/Security Installation -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="alarm"> Alarm/Security
                                                            Installation
                                                        </label>
                                                        <input type="text" name="Alarm_Security_Installation" class="form-control  @error('Alarm_Security_Installation') is-invalid @enderror" id="Alarm_Security_Installation"
                                                            placeholder="Enter Alarm/Security Installation" value="@if(!empty($to->Alarm_Security_Installation)){{old('Alarm_Security_Installation', $to->Alarm_Security_Installation)}}@endif" >
                                                        @error('Alarm_Security_Installation')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 04 Alarm/Security Monitoring -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="a-monitor"> Alarm/Security
                                                            Monitoring
                                                        </label>
                                                        <input type="text" name="Alarm_Security_Monitoring" class="form-control  @error('Alarm_Security_Monitoring') is-invalid @enderror" id="Alarm_Security_Monitoring"
                                                            placeholder="Enter Alarm/Security Monitoring" value="@if(!empty($to->Alarm_Security_Monitoring)){{old('Alarm_Security_Monitoring', $to->Alarm_Security_Monitoring)}}@endif" >
                                                        @error('Alarm_Security_Monitoring')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 05 Appraisal Fees -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="appraisal"> Appraisal Fees
                                                        </label>
                                                        <input type="text" name="Appraisal_Fees" class="form-control  @error('Appraisal_Fees') is-invalid @enderror" id="Appraisal_Fees"
                                                            placeholder="Enter Appraisal_Fees" value="@if(!empty($to->Appraisal_Fees)){{old('Appraisal_Fees', $to->Appraisal_Fees)}}@endif" >
                                                        @error('Appraisal_Fees')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 06 Auto Truck Expenses -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="auto-truck">Auto Truck
                                                            Expenses
                                                        </label>
                                                        <input type="text" name="Auto_Truck_Expenses" class="form-control  @error('Auto_Truck_Expenses') is-invalid @enderror" id="Auto_Truck_Expenses"
                                                            placeholder="Enter Auto Truck Expenses" value="@if(!empty($to->Auto_Truck_Expenses)){{old('Auto_Truck_Expenses', $to->Auto_Truck_Expenses)}}@endif" >
                                                        @error('Auto_Truck_Expenses')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                        
                                                    </div>
                                                </div>
                                                <!-- :: input 07 Bad Debt Includes In Gross Income -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="gross-debt">Bad Debt
                                                            Includes In Gross Income
                                                        </label>
                                                        <input type="text" name="Bad_Debt_Includes_In_Gross_Income" class="form-control  @error('Bad_Debt_Includes_In_Gross_Income') is-invalid @enderror" id="Bad_Debt_Includes_In_Gross_Income"
                                                            placeholder="Enter Auto Truck Expenses" value="@if(!empty($to->Bad_Debt_Includes_In_Gross_Income)){{old('Bad_Debt_Includes_In_Gross_Income', $to->Bad_Debt_Includes_In_Gross_Income)}}@endif" >
                                                        @error('Bad_Debt_Includes_In_Gross_Income')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 08 Bank Service Charges -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="bank-charge">Bank Service
                                                            Charges
                                                        </label>
                                                        <input type="text" name="Bank_Service_Charges" class="form-control  @error('Bank_Service_Charges') is-invalid @enderror" id="Bank_Service_Charges"
                                                            placeholder="Enter Auto Truck Expenses" value="@if(!empty($to->Bank_Service_Charges)){{old('Bank_Service_Charges', $to->Bank_Service_Charges)}}@endif" >
                                                        @error('Bank_Service_Charges')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 09 Books, Subscrp & Publications -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="book-publication">Books,
                                                            Subscription & Publications
                                                        </label>
                                                        <input type="text" name="Books_Subscrp_Publications" class="form-control  @error('Books_Subscrp_Publications') is-invalid @enderror" id="Books_Subscrp_Publications"
                                                            placeholder="Enter Auto Truck Expenses" value="@if(!empty($to->Books_Subscrp_Publications)){{old('Books_Subscrp_Publications', $to->Books_Subscrp_Publications)}}@endif" >
                                                        @error('Books_Subscrp_Publications')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 10 Client Misc. Gov. Fees Inc. In Income -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="misc-info">Client Misc.
                                                            Gov. Fees Inc. In Income
                                                        </label>
                                                        <input type="text" name="Client_Misc_Gov_Fees_Inc_In_Income" class="form-control  @error('Client_Misc_Gov_Fees_Inc_In_Income') is-invalid @enderror" id="Client_Misc_Gov_Fees_Inc_In_Income"
                                                            placeholder="Enter Auto Truck Expenses" value="@if(!empty($to->Client_Misc_Gov_Fees_Inc_In_Income)){{old('Client_Misc_Gov_Fees_Inc_In_Income', $to->Client_Misc_Gov_Fees_Inc_In_Income)}}@endif" >
                                                        @error('Client_Misc_Gov_Fees_Inc_In_Income')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 11 Commission/Outside Services -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head"
                                                            for="commission">Commission/Outside Services
                                                        </label>
                                                        <input type="text" name="Commission_Outside_Services" class="form-control  @error('Commission_Outside_Services') is-invalid @enderror" id="Commission_Outside_Services"
                                                            placeholder="Enter Auto Truck Expenses" value="@if(!empty($to->Commission_Outside_Services)){{old('Commission_Outside_Services', $to->Commission_Outside_Services)}}@endif" >
                                                        @error('Commission_Outside_Services')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 12 Credit Card Discount Fees -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="credit-discount">
                                                            Credit Card Discount Fees
                                                        </label>
                                                        <input type="text" name="Credit_Card_Discount_Fees" class="form-control  @error('Credit_Card_Discount_Fees') is-invalid @enderror" id="Credit_Card_Discount_Fees"
                                                            placeholder="Enter Auto Truck Expenses" value="@if(!empty($to->Credit_Card_Discount_Fees)){{old('Credit_Card_Discount_Fees', $to->Credit_Card_Discount_Fees)}}@endif" >
                                                        @error('Credit_Card_Discount_Fees')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 13 Credit Card Min Usage Fees -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="card-fee">Credit Card Min
                                                            Usage Fees

                                                        </label>
                                                        <input type="text" name="Credit_Card_Min_Usage_Fees" class="form-control  @error('Credit_Card_Min_Usage_Fees') is-invalid @enderror" id="Credit_Card_Min_Usage_Fees"
                                                            placeholder="Enter Auto Truck Expenses" value="@if(!empty($to->Credit_Card_Min_Usage_Fees)){{old('Credit_Card_Min_Usage_Fees', $to->Credit_Card_Min_Usage_Fees)}}@endif" >
                                                        @error('Credit_Card_Min_Usage_Fees')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 14 Depreciation From Prior Year Income Tax-->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="depreciation">Depreciation
                                                            From Prior Year Income Tax

                                                        </label>
                                                        <input type="text" name="Depreciation_From_Prior_Year_Income_Tax" class="form-control  @error('Depreciation_From_Prior_Year_Income_Tax') is-invalid @enderror" id="Depreciation_From_Prior_Year_Income_Tax"
                                                            placeholder="Enter Auto Truck Expenses" value="@if(!empty($to->Depreciation_From_Prior_Year_Income_Tax)){{old('Depreciation_From_Prior_Year_Income_Tax', $to->Depreciation_From_Prior_Year_Income_Tax)}}@endif" >
                                                        @error('Depreciation_From_Prior_Year_Income_Tax')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 15 Domain Name Registration  -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="d-name">Domain Name
                                                            Registration

                                                        </label>
                                                        <input type="text" name="Domain_Name_Registration" class="form-control  @error('Domain_Name_Registration') is-invalid @enderror" id="Domain_Name_Registration"
                                                            placeholder="Enter Auto Truck Expenses" value="@if(!empty($to->Domain_Name_Registration)){{old('Domain_Name_Registration', $to->Domain_Name_Registration)}}@endif" >
                                                        @error('Domain_Name_Registration')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 16 Dues & Membership  -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="membership">Dues &
                                                            Membership

                                                        </label>
                                                        <input type="text" name="Dues_Membership" class="form-control  @error('Dues_Membership') is-invalid @enderror" id="Dues_Membership"
                                                            placeholder="Enter Auto Truck Expenses" value="@if(!empty($to->Dues_Membership)){{old('Dues_Membership', $to->Dues_Membership)}}@endif" >
                                                        @error('Dues_Membership')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 17 Commission/Outside Services -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head"
                                                            for="education-expenses">Education Expenses

                                                        </label>
                                                        <input type="text" name="Education_Expenses" class="form-control  @error('Education_Expenses') is-invalid @enderror" id="Education_Expenses"
                                                            placeholder="Enter Auto Truck Expenses" value="@if(!empty($to->Education_Expenses)){{old('Education_Expenses', $to->Education_Expenses)}}@endif" >
                                                        @error('Education_Expenses')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 18 Employee Benefits -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head"
                                                            for="employee-benefits">Employee Benefits

                                                        </label>
                                                        <input type="text" name="Employee_Benefits" class="form-control  @error('Employee_Benefits') is-invalid @enderror" id="Employee_Benefits"
                                                            placeholder="Enter Auto Truck Expenses" value="@if(!empty($to->Employee_Benefits)){{old('Employee_Benefits', $to->Employee_Benefits)}}@endif" >
                                                        @error('Employee_Benefits')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 19 Employee/Customer Awards, Prices & Troph -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head"
                                                            for="awards-emp">Employee/Customer Awards, Prices &
                                                            Trophy

                                                        </label>
                                                        <input type="text" name="Employee_Customer_Awards_Prices_Troph" class="form-control  @error('Employee_Customer_Awards_Prices_Troph') is-invalid @enderror" id="Employee_Customer_Awards_Prices_Troph"
                                                            placeholder="Enter Auto Truck Expenses" value="@if(!empty($to->Employee_Customer_Awards_Prices_Troph)){{old('Employee_Customer_Awards_Prices_Troph', $to->Employee_Customer_Awards_Prices_Troph)}}@endif" >
                                                        @error('Employee_Customer_Awards_Prices_Troph')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 20 Entertainment  -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head"
                                                            for="e-entertainment ">Entertainment

                                                        </label>
                                                        <input type="text" name="Entertainment" class="form-control  @error('Entertainment') is-invalid @enderror" id="Entertainment"
                                                            placeholder="Enter Auto Truck Expenses" value="@if(!empty($to->Entertainment)){{old('Entertainment', $to->Entertainment)}}@endif" >
                                                        @error('Entertainment')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 21 Equipment & Machinery Purchased -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="e-machinery">Equipment &
                                                            Machinery Purchased

                                                        </label>
                                                        <input type="text" name="Equipment_Machinery_Purchased" class="form-control  @error('Equipment_Machinery_Purchased') is-invalid @enderror" id="Equipment_Machinery_Purchased"
                                                            placeholder="Enter Auto Truck Expenses" value="@if(!empty($to->Equipment_Machinery_Purchased)){{old('Equipment_Machinery_Purchased', $to->Equipment_Machinery_Purchased)}}@endif" >
                                                        @error('Equipment_Machinery_Purchased')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 22 Commission/Outside Services -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="exhibit">Exhibit/Show

                                                        </label>
                                                        <input type="text" name="Exhibit_Show" class="form-control  @error('Exhibit_Show') is-invalid @enderror" id="Exhibit_Show"
                                                            placeholder="Enter Auto Truck Expenses" value="@if(!empty($to->Exhibit_Show)){{old('Exhibit_Show', $to->Exhibit_Show)}}@endif" >
                                                        @error('Exhibit_Show')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 23 Film & Developing -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="film-dev">Film &
                                                            Developing

                                                        </label>
                                                        <input type="text" name="Film_Developing" class="form-control  @error('Film_Developing') is-invalid @enderror" id="Film_Developing"
                                                            placeholder="Enter Auto Truck Expenses" value="@if(!empty($to->Film_Developing)){{old('Film_Developing', $to->Film_Developing)}}@endif" >
                                                        @error('Film_Developing')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 24 Flower & Cards -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="flower-cards">Flower &
                                                            Cards

                                                        </label>
                                                        <input type="text" name="Flower_Cards" class="form-control  @error('Flower_Cards') is-invalid @enderror" id="Flower_Cards"
                                                            placeholder="Enter Auto Truck Expenses" value="@if(!empty($to->Flower_Cards)){{old('Flower_Cards', $to->Flower_Cards)}}@endif" >
                                                        @error('Flower_Cards')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 25 Franchise Fees -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="franchise-fees">Franchise
                                                            Fees

                                                        </label>
                                                        <input type="text" name="Franchise_Fees" class="form-control  @error('Franchise_Fees') is-invalid @enderror" id="Franchise_Fees"
                                                            placeholder="Enter Auto Truck Expenses" value="@if(!empty($to->Franchise_Fees)){{old('Franchise_Fees', $to->Franchise_Fees)}}@endif" >
                                                        @error('Franchise_Fees')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 26 Fuel (For Trucking Business)  -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="fuel-buss">Fuel (For
                                                            Trucking Business)

                                                        </label>
                                                        <input type="text" name="Fuel" class="form-control  @error('Fuel') is-invalid @enderror" id="Fuel"
                                                            placeholder="Enter Auto Truck Expenses" value="@if(!empty($to->Fuel)){{old('Fuel', $to->Fuel)}}@endif" >
                                                        @error('Fuel')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 27 Furniture & Fixtures  -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head"
                                                            for="furniture-fixtures ">Furniture & Fixtures

                                                        </label>
                                                        <input type="text" name="Furniture_Fixtures" class="form-control  @error('Furniture_Fixtures') is-invalid @enderror" id="Furniture_Fixtures"
                                                            placeholder="Enter Auto Truck Expenses" value="@if(!empty($to->Furniture_Fixtures)){{old('Furniture_Fixtures', $to->Furniture_Fixtures)}}@endif" >
                                                        @error('Furniture_Fixtures')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 28 Gift To Employee/Client  -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="client-gift">Gift To
                                                            Employee/Client

                                                        </label>
                                                        <input type="text" name="Gift_To_Employee_Client" class="form-control  @error('Gift_To_Employee_Client') is-invalid @enderror" id="Gift_To_Employee_Client"
                                                            placeholder="Enter Auto Truck Expenses" value="@if(!empty($to->Gift_To_Employee_Client)){{old('Gift_To_Employee_Client', $to->Gift_To_Employee_Client)}}@endif" >
                                                        @error('Gift_To_Employee_Client')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 29 Goodwill -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="goodwill">Goodwill

                                                        </label>
                                                        <input type="text" name="Goodwill" class="form-control  @error('Goodwill') is-invalid @enderror" id="Goodwill"
                                                            placeholder="Enter Auto Truck Expenses" value="@if(!empty($to->Goodwill)){{old('Goodwill', $to->Goodwill)}}@endif" >
                                                        @error('Goodwill')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 30 Commission/Outside Services -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="graphic-design">Graphic
                                                            Design Fees

                                                        </label>
                                                        <input type="text" name="Graphic_Design_Fees" class="form-control  @error('Graphic_Design_Fees') is-invalid @enderror" id="Graphic_Design_Fees"
                                                            placeholder="Enter Auto Truck Expenses" value="@if(!empty($to->Graphic_Design_Fees)){{old('Graphic_Design_Fees', $to->Graphic_Design_Fees)}}@endif" >
                                                        @error('Graphic_Design_Fees')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 31 Home Office -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="">Home Office

                                                        </label>
                                                        <input type="text" name="Home_Office" class="form-control  @error('Home_Office') is-invalid @enderror" id="Home_Office"
                                                            placeholder="Enter Auto Truck Expenses" value="@if(!empty($to->Home_Office)){{old('Home_Office', $to->Home_Office)}}@endif" >
                                                        @error('Home_Office')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 32 Hotel/Motel/Inn -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head"
                                                            for="hotel-motel">Hotel/Motel/Inn

                                                        </label>
                                                        <input type="text" name="Hotel_Motel_Inn" class="form-control  @error('Hotel_Motel_Inn') is-invalid @enderror" id="Hotel_Motel_Inn"
                                                            placeholder="Enter Auto Truck Expenses" value="@if(!empty($to->Hotel_Motel_Inn)){{old('Hotel_Motel_Inn', $to->Hotel_Motel_Inn)}}@endif" >
                                                        @error('Hotel_Motel_Inn')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 33 Insurance Bus. Interruption -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head"
                                                            for="insurance-interruption">Insurance Bus.
                                                            Interruption

                                                        </label>
                                                        <input type="text" name="Insurance_Bus_Interruption" class="form-control  @error('Insurance_Bus_Interruption') is-invalid @enderror" id="Insurance_Bus_Interruption"
                                                            placeholder="Enter Auto Truck Expenses" value="@if(!empty($to->Insurance_Bus_Interruption)){{old('Insurance_Bus_Interruption', $to->Insurance_Bus_Interruption)}}@endif" >
                                                        @error('Insurance_Bus_Interruption')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 34 Insurance For Employees -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head"
                                                            for="insurance-employees">Insurance For Employees

                                                        </label>
                                                        <input type="text" name="Insurance_For_Employees" class="form-control  @error('Insurance_For_Employees') is-invalid @enderror" id="Insurance_For_Employees"
                                                            placeholder="Enter Auto Truck Expenses" value="@if(!empty($to->Insurance_For_Employees)){{old('Insurance_For_Employees', $to->Insurance_For_Employees)}}@endif" >
                                                        @error('Insurance_For_Employees')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 35 Insurance Liability -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="">Insurance Liability

                                                        </label>
                                                        <input type="text" name="Insurance_Liability" class="form-control  @error('Insurance_Liability') is-invalid @enderror" id="Insurance_Liability"
                                                            placeholder="Enter Auto Truck Expenses" value="@if(!empty($to->Insurance_Liability)){{old('Insurance_Liability', $to->Insurance_Liability)}}@endif" >
                                                        @error('Insurance_Liability')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 36 Insurance (Other) -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="Insurance-other">Insurance
                                                            (Other)

                                                        </label>
                                                        <input type="text" name="Insurance_Other" class="form-control  @error('Insurance_Other') is-invalid @enderror" id="Insurance_Other"
                                                            placeholder="Enter Auto Truck Expenses" value="@if(!empty($to->Insurance_Other)){{old('Insurance_Other', $to->Insurance_Other)}}@endif" >
                                                        @error('Insurance_Other')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <!-- :: input 37 Insurance Work. Comp -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="insurance-comp">Insurance
                                                            Work. Company

                                                        </label>
                                                        <input type="text" name="Insurance_Work_Comp" class="form-control  @error('Insurance_Work_Comp') is-invalid @enderror" id="Insurance_Work_Comp"
                                                            placeholder="Enter Auto Truck Expenses" value="@if(!empty($to->Insurance_Work_Comp)){{old('Insurance_Work_Comp', $to->Insurance_Work_Comp)}}@endif" >
                                                        @error('Insurance_Work_Comp')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 38 Internet Services -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head"
                                                            for="internet-services">Internet Services

                                                        </label>
                                                        <input type="text" name="Internet_Services" class="form-control  @error('Internet_Services') is-invalid @enderror" id="Internet_Services"
                                                            placeholder="Enter Auto Truck Expenses" value="@if(!empty($to->Internet_Services)){{old('Internet_Services', $to->Internet_Services)}}@endif" >
                                                        @error('Internet_Services')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 39 Inventory Beginning Of The Year  -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="inventor-year ">Inventory
                                                            Beginning Of The Year

                                                        </label>
                                                        <input type="text" name="Inventory_Beginning_Of_The_Year" class="form-control  @error('Inventory_Beginning_Of_The_Year') is-invalid @enderror" id="Inventory_Beginning_Of_The_Year"
                                                            placeholder="Enter Auto Truck Expenses" value="@if(!empty($to->v)){{old('Inventory_Beginning_Of_The_Year', $to->Inventory_Beginning_Of_The_Year)}}@endif" >
                                                        @error('Inventory_Beginning_Of_The_Year')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 40 Commission/Outside Services -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="breakage">Inventory
                                                            Breakage/Spoilage Exp Unreturn

                                                        </label>
                                                        <input type="text" name="Inventory_Breakage_Spoilage_Exp_Unreturn" class="form-control  @error('Inventory_Breakage_Spoilage_Exp_Unreturn') is-invalid @enderror" id="Inventory_Breakage_Spoilage_Exp_Unreturn"
                                                            placeholder="Enter Auto Truck Expenses" value="@if(!empty($to->Inventory_Breakage_Spoilage_Exp_Unreturn)){{old('Inventory_Breakage_Spoilage_Exp_Unreturn', $to->Inventory_Breakage_Spoilage_Exp_Unreturn)}}@endif" >
                                                        @error('Inventory_Breakage_Spoilage_Exp_Unreturn')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 41 Inventory Ending Of The Year  -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="Inventory">Inventory
                                                            Ending Of The Year

                                                        </label>
                                                        <input type="text" name="Inventory_Ending_Of_The_Year" class="form-control  @error('v') is-invalid @enderror" id="Inventory_Ending_Of_The_Year"
                                                            placeholder="Enter Auto Truck Expenses" value="@if(!empty($to->Inventory_Ending_Of_The_Year)){{old('Inventory_Ending_Of_The_Year', $to->Inventory_Ending_Of_The_Year)}}@endif" >
                                                        @error('Inventory_Ending_Of_The_Year')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 42 Inventory Purchases  -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head"
                                                            for="inventory-purchases ">Inventory Purchases

                                                        </label>
                                                        <input type="text" name="Inventory_Purchases" class="form-control  @error('Inventory_Purchases') is-invalid @enderror" id="Inventory_Purchases"
                                                            placeholder="Enter Auto Truck Expenses" value="@if(!empty($to->Inventory_Purchases)){{old('Inventory_Purchases', $to->Inventory_Purchases)}}@endif" >
                                                        @error('Inventory_Purchases')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 43 Inventory Theft/Loss -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="theft-loss">Inventory
                                                            Theft/Loss

                                                        </label>
                                                        <input type="text" name="Inventory_Theft_Loss" class="form-control  @error('Inventory_Theft_Loss') is-invalid @enderror" id="Inventory_Theft_Loss"
                                                            placeholder="Enter Auto Truck Expenses" value="@if(!empty($to->Inventory_Theft_Loss)){{old('Inventory_Theft_Loss', $to->Inventory_Theft_Loss)}}@endif" >
                                                        @error('Inventory_Theft_Loss')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 44 IRA Regular Or SEP IRA Contributed Year -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="sep-ira">IRA Regular Or
                                                            SEP IRA Contributed Year

                                                        </label>
                                                        <input type="text" name="IRA_Regular_Or_SEP_IRA_Contributed_Year" class="form-control  @error('IRA_Regular_Or_SEP_IRA_Contributed_Year') is-invalid @enderror" id="IRA_Regular_Or_SEP_IRA_Contributed_Year"
                                                            placeholder="Enter Auto Truck Expenses" value="@if(!empty($to->IRA_Regular_Or_SEP_IRA_Contributed_Year)){{old('IRA_Regular_Or_SEP_IRA_Contributed_Year', $to->IRA_Regular_Or_SEP_IRA_Contributed_Year)}}@endif" >
                                                        @error('IRA_Regular_Or_SEP_IRA_Contributed_Year')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 45 Landscaping -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="landscaping">Landscaping

                                                        </label>
                                                        <input type="text" name="Landscaping" class="form-control  @error('Landscaping') is-invalid @enderror" id="Landscaping"
                                                            placeholder="Enter Auto Truck Expenses" value="@if(!empty($to->Landscaping)){{old('Landscaping', $to->Landscaping)}}@endif" >
                                                        @error('Landscaping')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 46 Laundry & Cleaning -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="laundry-cleaning">Laundry
                                                            & Cleaning

                                                        </label>
                                                        <input type="text" name="Laundry_Cleaning" class="form-control  @error('Laundry_Cleaning') is-invalid @enderror" id="Laundry_Cleaning"
                                                            placeholder="Enter Auto Truck Expenses" value="@if(!empty($to->Laundry_Cleaning)){{old('Laundry_Cleaning', $to->Laundry_Cleaning)}}@endif" >
                                                        @error('Laundry_Cleaning')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 47 Legal & Professional Services  -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="legal-professional">Legal
                                                            & Professional Services

                                                        </label>
                                                        <input type="text" name="Legal_Professional_Services" class="form-control  @error('Legal_Professional_Services') is-invalid @enderror" id="Legal_Professional_Services"
                                                            placeholder="Enter Auto Truck Expenses" value="@if(!empty($to->Legal_Professional_Services)){{old('Legal_Professional_Services', $to->Legal_Professional_Services)}}@endif" >
                                                        @error('Legal_Professional_Services')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 48 Licenses & Permits -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="l-permits">Licenses &
                                                            Permits

                                                        </label>
                                                        <input type="text" name="Licenses_Permits" class="form-control  @error('Licenses_Permits') is-invalid @enderror" id="Licenses_Permits"
                                                            placeholder="Enter Auto Truck Expenses" value="@if(!empty($to->Licenses_Permits)){{old('Licenses_Permits', $to->Licenses_Permits)}}@endif" >
                                                        @error('Licenses_Permits')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 49 Licenses & Permits For Client Projects -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="client-permit">Licenses &
                                                            Permits For Client Projects

                                                        </label>
                                                        <input type="text" name="Licenses_Permits_For_Client_Projects" class="form-control  @error('Licenses_Permits_For_Client_Projects') is-invalid @enderror" id="Licenses_Permits_For_Client_Projects"
                                                            placeholder="Enter Auto Truck Expenses" value="@if(!empty($to->Licenses_Permits_For_Client_Projects)){{old('Licenses_Permits_For_Client_Projects', $to->Licenses_Permits_For_Client_Projects)}}@endif" >
                                                        @error('Licenses_Permits_For_Client_Projects')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 50 Locksmith/Keys/Lock Boxes -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head"
                                                            for="Locksmith">Locksmith/Keys/Lock Boxes

                                                        </label>
                                                        <input type="text" name="Locksmith_Keys_Lock_Boxes" class="form-control  @error('Locksmith_Keys_Lock_Boxes') is-invalid @enderror" id="Locksmith_Keys_Lock_Boxes"
                                                            placeholder="Enter Auto Truck Expenses" value="@if(!empty($to->Locksmith_Keys_Lock_Boxes)){{old('Locksmith_Keys_Lock_Boxes', $to->Locksmith_Keys_Lock_Boxes)}}@endif" >
                                                        @error('Locksmith_Keys_Lock_Boxes')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 51 Meals 50% Bus -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="meals">Meals 50% Bus

                                                        </label>
                                                        <input type="text" name="Meals_50_Bus" class="form-control  @error('Meals_50_Bus') is-invalid @enderror" id="Meals_50_Bus"
                                                            placeholder="Enter Auto Truck Expenses" value="@if(!empty($to->Meals_50_Bus)){{old('Meals_50_Bus', $to->Meals_50_Bus)}}@endif" >
                                                        @error('Meals_50_Bus')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 52 Medical Insurance -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="medical-insurance">Medical
                                                            Insurance

                                                        </label>
                                                        <input type="text" name="Medical_Insurance" class="form-control  @error('Medical_Insurance') is-invalid @enderror" id="Medical_Insurance"
                                                            placeholder="Enter Auto Truck Expenses" value="@if(!empty($to->Medical_Insurance)){{old('Medical_Insurance', $to->Medical_Insurance)}}@endif" >
                                                        @error('Medical_Insurance')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 53 Mileage - Business-->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="mileage-bus">Mileage -
                                                            Business

                                                        </label>
                                                        <input type="text" name="Mileage_Business" class="form-control  @error('Mileage_Business') is-invalid @enderror" id="Mileage_Business"
                                                            placeholder="Enter Auto Truck Expenses" value="@if(!empty($to->Mileage_Business)){{old('Mileage_Business', $to->Mileage_Business)}}@endif" >
                                                        @error('Mileage_Business')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 54 Moving Exp.-->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="moving">Moving Exp.

                                                        </label>
                                                        <input type="text" name="Moving_Exp" class="form-control  @error('Moving_Exp') is-invalid @enderror" id="Moving_Exp"
                                                            placeholder="Enter Auto Truck Expenses" value="@if(!empty($to->Moving_Exp)){{old('Moving_Exp', $to->Moving_Exp)}}@endif" >
                                                        @error('Moving_Exp')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 55 Notary Services -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="notary">Notary Services

                                                        </label>
                                                        <input type="text" name="Notary_Services" class="form-control  @error('Notary_Services') is-invalid @enderror" id="Notary_Services"
                                                            placeholder="Enter Auto Truck Expenses" value="@if(!empty($to->Notary_Services)){{old('Notary_Services', $to->Notary_Services)}}@endif" >
                                                        @error('Notary_Services')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 56 Parking  -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="Parking">Parking

                                                        </label>
                                                        <input type="text" name="Parking" class="form-control  @error('Parking') is-invalid @enderror" id="Parking"
                                                            placeholder="Enter Auto Truck Expenses" value="@if(!empty($to->Parking)){{old('Parking', $to->Parking)}}@endif" >
                                                        @error('Parking')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 57 Pension Plan -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="pension-plan">Pension Plan

                                                        </label>
                                                        <input type="text" name="Pension_Plan" class="form-control  @error('Pension_Plan') is-invalid @enderror" id="Pension_Plan"
                                                            placeholder="Enter Auto Truck Expenses" value="@if(!empty($to->Pension_Plan)){{old('Pension_Plan', $to->Pension_Plan)}}@endif" >
                                                        @error('Pension_Plan')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 58 Pest Control -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="pest-control">Pest Control

                                                        </label>
                                                        <input type="text" name="Pest_Control" class="form-control  @error('Pest_Control') is-invalid @enderror" id="Pest_Control"
                                                            placeholder="Enter Auto Truck Expenses" value="@if(!empty($to->Pest_Control)){{old('Pest_Control', $to->Pest_Control)}}@endif" >
                                                        @error('Pest_Control')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 59 Postage & Delivery Freight/Shipping  -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="c-postage">Postage &
                                                            Delivery Freight/Shipping

                                                        </label>
                                                        <input type="text" name="Postage_Delivery_Freight_Shipping" class="form-control  @error('Postage_Delivery_Freight_Shipping') is-invalid @enderror" id="Postage_Delivery_Freight_Shipping"
                                                            placeholder="Enter Auto Truck Expenses" value="@if(!empty($to->Postage_Delivery_Freight_Shipping)){{old('Postage_Delivery_Freight_Shipping', $to->Postage_Delivery_Freight_Shipping)}}@endif" >
                                                        @error('Postage_Delivery_Freight_Shipping')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 60 Printing/Reproductions  -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head"
                                                            for="reproductions">Printing/Reproductions

                                                        </label>
                                                        <input type="text" name="Printing_Reproductions" class="form-control  @error('Printing_Reproductions') is-invalid @enderror" id="Printing_Reproductions"
                                                            placeholder="Enter Auto Truck Expenses" value="@if(!empty($to->Printing_Reproductions)){{old('Printing_Reproductions', $to->Printing_Reproductions)}}@endif" >
                                                        @error('Printing_Reproductions')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 61 Promotional Exp. Products Or Services -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="promotional">Promotional
                                                            Exp. Products Or Services

                                                        </label>
                                                        <input type="text" name="Promotional_Exp_Products_Or_Services" class="form-control  @error('Promotional_Exp_Products_Or_Services') is-invalid @enderror" id="Promotional_Exp_Products_Or_Services"
                                                            placeholder="Enter Auto Truck Expenses" value="@if(!empty($to->Promotional_Exp_Products_Or_Services)){{old('Promotional_Exp_Products_Or_Services', $to->Promotional_Exp_Products_Or_Services)}}@endif" >
                                                        @error('Promotional_Exp_Products_Or_Services')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 62 Commission/Outside Services -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="business-location ">Rent
                                                            Business Location

                                                        </label>
                                                        <input type="text" name="Rent_Business_Location" class="form-control  @error('Rent_Business_Location') is-invalid @enderror" id="Rent_Business_Location"
                                                            placeholder="Enter Auto Truck Expenses" value="@if(!empty($to->Rent_Business_Location)){{old('Rent_Business_Location', $to->Rent_Business_Location)}}@endif" >
                                                        @error('Rent_Business_Location')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 63 Rent/Furniture -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="rent-f">Rent/Furniture

                                                        </label>
                                                        <input type="text" name="Rent_Furniture" class="form-control  @error('Rent_Furniture') is-invalid @enderror" id="Rent_Furniture"
                                                            placeholder="Enter Auto Truck Expenses" value="@if(!empty($to->Rent_Furniture)){{old('Rent_Furniture', $to->Rent_Furniture)}}@endif" >
                                                        @error('Rent_Furniture')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 64 Rent/Lease Auto And Or Truck -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="rent-lease">Rent/Lease
                                                            Auto And Or Truck

                                                        </label>
                                                        <input type="text" name="Rent_Lease_Auto_And_Or_Truck" class="form-control  @error('Rent_Lease_Auto_And_Or_Truck') is-invalid @enderror" id="Rent_Lease_Auto_And_Or_Truck"
                                                            placeholder="Enter Auto Truck Expenses" value="@if(!empty($to->Rent_Lease_Auto_And_Or_Truck)){{old('Rent_Lease_Auto_And_Or_Truck', $to->Rent_Lease_Auto_And_Or_Truck)}}@endif" >
                                                        @error('Rent_Lease_Auto_And_Or_Truck')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 65 Rent/Lease P.O. Box/Storage -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="r-boxes">Rent/Lease P.O.
                                                            Box/Storage

                                                        </label>
                                                        <input type="text" name="Rent_Lease_PO_Box_Storage" class="form-control  @error('Rent_Lease_PO_Box_Storage') is-invalid @enderror" id="Rent_Lease_PO_Box_Storage"
                                                            placeholder="Enter Auto Truck Expenses" value="@if(!empty($to->Rent_Lease_PO_Box_Storage)){{old('Rent_Lease_PO_Box_Storage', $to->Rent_Lease_PO_Box_Storage)}}@endif" >
                                                        @error('Rent_Lease_PO_Box_Storage')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 66 Rent/Lease Equipment -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head"
                                                            for="lease-equipment">Rent/Lease Equipment

                                                        </label>
                                                        <input type="text" name="Rent_Lease_Equipment" class="form-control  @error('Rent_Lease_Equipment') is-invalid @enderror" id="Rent_Lease_Equipment"
                                                            placeholder="Enter Auto Truck Expenses" value="@if(!empty($to->Rent_Lease_Equipment)){{old('Rent_Lease_Equipment', $to->Rent_Lease_Equipment)}}@endif" >
                                                        @error('Rent_Lease_Equipment')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 67 Repair Building -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="repair-building">Repair
                                                            Building

                                                        </label>
                                                        <input type="text" name="Repair_Building" class="form-control  @error('Repair_Building') is-invalid @enderror" id="Repair_Building"
                                                            placeholder="Enter Auto Truck Expenses" value="@if(!empty($to->Repair_Building)){{old('Repair_Building', $to->Repair_Building)}}@endif" >
                                                        @error('Repair_Building')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 68 Repair Equipment -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="">Repair Equipment

                                                        </label>
                                                        <input type="text" name="Repair_Equipment" class="form-control  @error('Repair_Equipment') is-invalid @enderror" id="Repair_Equipment"
                                                            placeholder="Enter Auto Truck Expenses" value="@if(!empty($to->Repair_Equipment)){{old('Repair_Equipment', $to->Repair_Equipment)}}@endif" >
                                                        @error('Repair_Equipment')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 69 Research Expenses -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head"
                                                            for="research-expenses">Research Expenses

                                                        </label>
                                                        <input type="text" name="Research_Expenses" class="form-control  @error('Research_Expenses') is-invalid @enderror" id="Research_Expenses"
                                                            placeholder="Enter Auto Truck Expenses" value="@if(!empty($to->Research_Expenses)){{old('Research_Expenses', $to->Research_Expenses)}}@endif" >
                                                        @error('Research_Expenses')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 70 Royalty For Franchise  -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head"
                                                            for="royalty-franchise ">Royalty For Franchise

                                                        </label>
                                                        <input type="text" name="Royalty_For_Franchise" class="form-control  @error('Royalty_For_Franchise') is-invalid @enderror" id="Royalty_For_Franchise"
                                                            placeholder="Enter Auto Truck Expenses" value="@if(!empty($to->Royalty_For_Franchise)){{old('Royalty_For_Franchise', $to->Royalty_For_Franchise)}}@endif" >
                                                        @error('Royalty_For_Franchise')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 71 Salaries & Wages -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="salaries-wages">Salaries &
                                                            Wages

                                                        </label>
                                                        <input type="text" name="Salaries_Wages" class="form-control  @error('Salaries_Wages') is-invalid @enderror" id="Salaries_Wages"
                                                            placeholder="Enter Auto Truck Expenses" value="@if(!empty($to->Salaries_Wages)){{old('Salaries_Wages', $to->Salaries_Wages)}}@endif" >
                                                        @error('Salaries_Wages')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 72 Samples Expenses -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="samples-expenses">Samples
                                                            Expenses

                                                        </label>
                                                        <input type="text" name="Samples_Expenses" class="form-control  @error('Samples_Expenses') is-invalid @enderror" id="Samples_Expenses"
                                                            placeholder="Enter Auto Truck Expenses" value="@if(!empty($to->Samples_Expenses)){{old('Samples_Expenses', $to->Samples_Expenses)}}@endif" >
                                                        @error('Samples_Expenses')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 73 Seasonal Bus Decorations -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head"
                                                            for="seasonal-decorations">Seasonal Bus Decorations

                                                        </label>
                                                        <input type="text" name="Seasonal_Bus_Decorations" class="form-control  @error('Seasonal_Bus_Decorations') is-invalid @enderror" id="Seasonal_Bus_Decorations"
                                                            placeholder="Enter Auto Truck Expenses" value="@if(!empty($to->Seasonal_Bus_Decorations)){{old('Seasonal_Bus_Decorations', $to->Seasonal_Bus_Decorations)}}@endif" >
                                                        @error('Seasonal_Bus_Decorations')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 74 Signs/Flags/Banners -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head"
                                                            for="sign-flags">Signs/Flags/Banners

                                                        </label>
                                                        <input type="text" name="Signs_Flags_Banners" class="form-control  @error('Signs_Flags_Banners') is-invalid @enderror" id="Signs_Flags_Banners"
                                                            placeholder="Enter Auto Truck Expenses" value="@if(!empty($to->Signs_Flags_Banners)){{old('Signs_Flags_Banners', $to->Signs_Flags_Banners)}}@endif" >
                                                        @error('Signs_Flags_Banners')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 75 Software & Upgrades -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="software-upgrade">Software
                                                            & Upgrades

                                                        </label>
                                                        <input type="text" name="Software_Upgrades" class="form-control  @error('Software_Upgrades') is-invalid @enderror" id="Software_Upgrades"
                                                            placeholder="Enter Auto Truck Expenses" value="@if(!empty($to->Software_Upgrades)){{old('Software_Upgrades', $to->Software_Upgrades)}}@endif" >
                                                        @error('Software_Upgrades')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 76 Supplies Shop  -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="supplies-shop ">Supplies
                                                            Shop

                                                        </label>
                                                        <input type="text" name="Supplies_Shop" class="form-control  @error('Supplies_Shop') is-invalid @enderror" id="Supplies_Shop"
                                                            placeholder="Enter Auto Truck Expenses" value="@if(!empty($to->Supplies_Shop)){{old('Supplies_Shop', $to->Supplies_Shop)}}@endif" >
                                                        @error('Supplies_Shop')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 77 Supplies Office -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="supplies-office">Supplies
                                                            Office

                                                        </label>
                                                        <input type="text" name="Supplies_Office" class="form-control  @error('Supplies_Office') is-invalid @enderror" id="Supplies_Office"
                                                            placeholder="Enter Auto Truck Expenses" value="@if(!empty($to->Supplies_Office)){{old('Supplies_Office', $to->Supplies_Office)}}@endif" >
                                                        @error('Supplies_Office')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 78 Swimming Pool Purchased Or Installed -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="pool-purchased">Swimming
                                                            Pool Purchased Or Installed

                                                        </label>
                                                        <input type="text" name="Swimming_PoolPurchased_Or_Installed" class="form-control  @error('Swimming_PoolPurchased_Or_Installed') is-invalid @enderror" id="Swimming_PoolPurchased_Or_Installed"
                                                            placeholder="Enter Auto Truck Expenses" value="@if(!empty($to->Swimming_PoolPurchased_Or_Installed)){{old('Swimming_PoolPurchased_Or_Installed', $to->Swimming_PoolPurchased_Or_Installed)}}@endif" >
                                                        @error('Swimming_PoolPurchased_Or_Installed')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 79 Swimming Pool Services -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="pool-services">Swimming
                                                            Pool Services

                                                        </label>
                                                        <input type="text" name="Swimming_Pool_Services" class="form-control  @error('Swimming_Pool_Services') is-invalid @enderror" id="Swimming_Pool_Services"
                                                            placeholder="Enter Auto Truck Expenses" value="@if(!empty($to->Swimming_Pool_Services)){{old('Swimming_Pool_Services', $to->Swimming_Pool_Services)}}@endif" >
                                                        @error('Swimming_Pool_Services')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 80 Tax Estimated FTB Sole Corp LLC  -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="ftb-tax">Tax Estimated FTB
                                                            Sole Corp LLC

                                                        </label>
                                                        <input type="text" name="Tax_Estimated_FTB_Sole_Corp_LLC" class="form-control  @error('Tax_Estimated_FTB_Sole_Corp_LLC') is-invalid @enderror" id="Tax_Estimated_FTB_Sole_Corp_LLC"
                                                            placeholder="Enter Auto Truck Expenses" value="@if(!empty($to->Tax_Estimated_FTB_Sole_Corp_LLC)){{old('Tax_Estimated_FTB_Sole_Corp_LLC', $to->Tax_Estimated_FTB_Sole_Corp_LLC)}}@endif" >
                                                        @error('Tax_Estimated_FTB_Sole_Corp_LLC')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 81 Tax Estimated IRS Sole Corp LLC -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="irs-sole">Tax Estimated
                                                            IRS Sole Corp LLC

                                                        </label>
                                                        <input type="text" name="Tax_Estimated_IRS_Sole_Corp_LLC" class="form-control  @error('Tax_Estimated_IRS_Sole_Corp_LLC') is-invalid @enderror" id="Tax_Estimated_IRS_Sole_Corp_LLC"
                                                            placeholder="Enter Auto Truck Expenses" value="@if(!empty($to->Tax_Estimated_IRS_Sole_Corp_LLC)){{old('Tax_Estimated_IRS_Sole_Corp_LLC', $to->Tax_Estimated_IRS_Sole_Corp_LLC)}}@endif" >
                                                        @error('Tax_Estimated_IRS_Sole_Corp_LLC')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 82 Tax Real Estate House/Business -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="real-state-tax">Tax Real
                                                            Estate House/Business

                                                        </label>
                                                        <input type="text" name="Tax_Real_Estate_House_Business" class="form-control  @error('Tax_Real_Estate_House_Business') is-invalid @enderror" id="Tax_Real_Estate_House_Business"
                                                            placeholder="Enter Auto Truck Expenses" value="@if(!empty($to->Tax_Real_Estate_House_Business)){{old('Tax_Real_Estate_House_Business', $to->Tax_Real_Estate_House_Business)}}@endif" >
                                                        @error('Tax_Real_Estate_House_Business')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 83 Tax Sale That Included In Income  -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="sale-tax">Tax Sale That
                                                            Included In Income

                                                        </label>
                                                        <input type="text" name="Tax_Sale_That_Included_In_Income" class="form-control  @error('Tax_Sale_That_Included_In_Income') is-invalid @enderror" id="Tax_Sale_That_Included_In_Income"
                                                            placeholder="Enter Auto Truck Expenses" value="@if(!empty($to->Tax_Sale_That_Included_In_Income)){{old('Tax_Sale_That_Included_In_Income', $to->Tax_Sale_That_Included_In_Income)}}@endif" >
                                                        @error('Tax_Sale_That_Included_In_Income')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 84 taxes Payroll (Employer's Portion) -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="payroll">Taxes Payroll
                                                            (Employer's Portion)

                                                        </label>
                                                        <input type="text" name="Taxes_Payroll_Employers_Portion" class="form-control  @error('Taxes_Payroll_Employers_Portion') is-invalid @enderror" id="Taxes_Payroll_Employers_Portion"
                                                            placeholder="Enter Auto Truck Expenses" value="@if(!empty($to->Taxes_Payroll_Employers_Portion)){{old('Taxes_Payroll_Employers_Portion', $to->Taxes_Payroll_Employers_Portion)}}@endif" >
                                                        @error('Taxes_Payroll_Employers_Portion')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 85 Telephone/FAX/Pager/Cell -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head"
                                                            for="telephone">Telephone/FAX/Pager/Cell

                                                        </label>
                                                        <input type="text" name="Telephone_FAX_Pager_Cell" class="form-control  @error('Telephone_FAX_Pager_Cell') is-invalid @enderror" id="Telephone_FAX_Pager_Cell"
                                                            placeholder="Enter Auto Truck Expenses" value="@if(!empty($to->Telephone_FAX_Pager_Cell)){{old('Telephone_FAX_Pager_Cell', $to->Telephone_FAX_Pager_Cell)}}@endif" >
                                                        @error('Telephone_FAX_Pager_Cell')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 86 Tips With Verifiable Receipts -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="verifiable">Tips With
                                                            Verifiable Receipts

                                                        </label>
                                                        <input type="text" name="Tips_With_Verifiable_Receipts" class="form-control  @error('Tips_With_Verifiable_Receipts') is-invalid @enderror" id="Tips_With_Verifiable_Receipts"
                                                            placeholder="Enter Auto Truck Expenses" value="@if(!empty($to->Tips_With_Verifiable_Receipts)){{old('Tips_With_Verifiable_Receipts', $to->Tips_With_Verifiable_Receipts)}}@endif" >
                                                        @error('Tips_With_Verifiable_Receipts')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 87 Tools, Molds, Dies, Jigs  -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="molds">Tools, Molds, Dies,
                                                            Jigs

                                                        </label>
                                                        <input type="text" name="Tools_Molds_Dies_Jigs" class="form-control  @error('Tools_Molds_Dies_Jigs') is-invalid @enderror" id="Tools_Molds_Dies_Jigs"
                                                            placeholder="Enter Auto Truck Expenses" value="@if(!empty($to->Tools_Molds_Dies_Jigs)){{old('Tools_Molds_Dies_Jigs', $to->Tools_Molds_Dies_Jigs)}}@endif" >
                                                        @error('Tools_Molds_Dies_Jigs')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 88 Towing Services -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="towing-services">Towing
                                                            Services

                                                        </label>
                                                        <input type="text" name="Towing_Services" class="form-control  @error('Towing_Services') is-invalid @enderror" id="Towing_Services"
                                                            placeholder="Enter Auto Truck Expenses" value="@if(!empty($to->Towing_Services)){{old('Towing_Services', $to->Towing_Services)}}@endif" >
                                                        @error('Towing_Services')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 89 Trademark & Patent Expenses -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head"
                                                            for="trademark-patent">Trademark & Patent Expenses

                                                        </label>
                                                        <input type="text" name="Trademark_Patent_Expenses" class="form-control  @error('Trademark_Patent_Expenses') is-invalid @enderror" id="Trademark_Patent_Expenses"
                                                            placeholder="Enter Auto Truck Expenses" value="@if(!empty($to->Trademark_Patent_Expenses)){{old('Trademark_Patent_Expenses', $to->Trademark_Patent_Expenses)}}@endif" >
                                                        @error('Trademark_Patent_Expenses')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 90 Travel -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="travel">Travel

                                                        </label>
                                                        <input type="text" name="Travel" class="form-control  @error('Travel') is-invalid @enderror" id="Travel"
                                                            placeholder="Enter Auto Truck Expenses" value="@if(!empty($to->Travel)){{old('Travel', $to->Travel)}}@endif" >
                                                        @error('Travel')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 91 Uniform Cleaning Services  -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="uniform-cleaning">Uniform
                                                            Cleaning Services

                                                        </label>
                                                        <input type="text" name="Uniform_Cleaning_Services" class="form-control  @error('Uniform_Cleaning_Services') is-invalid @enderror" id="Uniform_Cleaning_Services"
                                                            placeholder="Enter Auto Truck Expenses" value="@if(!empty($to->Uniform_Cleaning_Services)){{old('Uniform_Cleaning_Services', $to->Uniform_Cleaning_Services)}}@endif" >
                                                        @error('Uniform_Cleaning_Services')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 92 Uniform Purchased -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="">Uniform Purchased

                                                        </label>
                                                        <input type="text" name="Uniform_Purchased" class="form-control  @error('Uniform_Purchased') is-invalid @enderror" id="Uniform_Purchased"
                                                            placeholder="Enter Auto Truck Expenses" value="@if(!empty($to->Uniform_Purchased)){{old('Uniform_Purchased', $to->Uniform_Purchased)}}@endif" >
                                                        @error('Uniform_Purchased')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 93 Utilities Electric & Gas  -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="electric-gas">Utilities
                                                            Electric & Gas

                                                        </label>
                                                        <input type="text" name="Utilities_Electric_Gas" class="form-control  @error('Utilities_Electric_Gas') is-invalid @enderror" id="Utilities_Electric_Gas"
                                                            placeholder="Enter Auto Truck Expenses" value="@if(!empty($to->Utilities_Electric_Gas)){{old('Utilities_Electric_Gas', $to->Utilities_Electric_Gas)}}@endif" >
                                                        @error('Utilities_Electric_Gas')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 94 Vandalism/Graffiti Clean Up Fees -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head"
                                                            for="graffiti">Vandalism/Graffiti Clean Up Fees

                                                        </label>
                                                        <input type="text" name="Vandalism_Graffiti_Clean_Up_Fees" class="form-control  @error('Vandalism_Graffiti_Clean_Up_Fees') is-invalid @enderror" id="Vandalism_Graffiti_Clean_Up_Fees"
                                                            placeholder="Enter Auto Truck Expenses" value="@if(!empty($to->Vandalism_Graffiti_Clean_Up_Fees)){{old('Vandalism_Graffiti_Clean_Up_Fees', $to->Vandalism_Graffiti_Clean_Up_Fees)}}@endif" >
                                                        @error('Vandalism_Graffiti_Clean_Up_Fees')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 95 Wash Vehicle For Trucking, Taxi Business -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="wash-vehicle">Wash Vehicle
                                                            For Trucking, Taxi Business

                                                        </label>
                                                        <input type="text" name="Wash_Vehicle_For_Trucking_Taxi_Business" class="form-control  @error('Wash_Vehicle_For_Trucking_Taxi_Business') is-invalid @enderror" id="Wash_Vehicle_For_Trucking_Taxi_Business"
                                                            placeholder="Enter Auto Truck Expenses" value="@if(!empty($to->Wash_Vehicle_For_Trucking_Taxi_Business)){{old('Wash_Vehicle_For_Trucking_Taxi_Business', $to->Wash_Vehicle_For_Trucking_Taxi_Business)}}@endif" >
                                                        @error('Wash_Vehicle_For_Trucking_Taxi_Business')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 96 Waste Disposal -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="waste-disposal">Waste
                                                            Disposal

                                                        </label>
                                                        <input type="text" name="Waste_Disposal" class="form-control  @error('Waste_Disposal') is-invalid @enderror" id="Waste_Disposal"
                                                            placeholder="Enter Auto Truck Expenses" value="@if(!empty($to->Waste_Disposal)){{old('Waste_Disposal', $to->Waste_Disposal)}}@endif" >
                                                        @error('Waste_Disposal')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 97 Web Design Fees -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="web-Design">Web Design
                                                            Fees

                                                        </label>
                                                        <input type="text" name="Web_Design_Fees" class="form-control  @error('Web_Design_Fees') is-invalid @enderror" id="Web_Design_Fees"
                                                            placeholder="Enter Auto Truck Expenses" value="@if(!empty($to->Web_Design_Fees)){{old('Web_Design_Fees', $to->Web_Design_Fees)}}@endif" >
                                                        @error('Web_Design_Fees')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 98 Web Hosting Fees -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="web-hosting">Web Hosting
                                                            Fees

                                                        </label>
                                                        <input type="text" name="Web_Hosting_Fees" class="form-control  @error('Web_Hosting_Fees') is-invalid @enderror" id="Web_Hosting_Fees"
                                                            placeholder="Enter Auto Truck Expenses" value="@if(!empty($to->Web_Hosting_Fees)){{old('Web_Hosting_Fees', $to->Web_Hosting_Fees)}}@endif" >
                                                        @error('Web_Hosting_Fees')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 99 other -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="other">Other

                                                        </label>
                                                        <input type="text" name="Other" class="form-control  @error('Other') is-invalid @enderror" id="Other"
                                                            placeholder="Enter Auto Truck Expenses" value="@if(!empty($to->Other)){{old('Other', $to->Other)}}@endif" >
                                                        @error('Other')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 100 other 2 -->
                                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="other-2">Other 2

                                                        </label>
                                                        <input type="text" name="Other1" class="form-control  @error('Other1') is-invalid @enderror" id="Other1"
                                                            placeholder="Enter Auto Truck Expenses" value="@if(!empty($to->Other1)){{old('Other1', $to->Other1)}}@endif" >
                                                        @error('Other1')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @else
                                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 mt-2 mb-2 dependency-tab"
                                            id="profit-input" style="display: none;">
                                            <div class="form-section-divident text-left mb-4">
                                                <h6> If a question does not apply to you, put 0.</h6>
                                            </div>
                                            <div class="row profit-form-control px-2">
                                                <!-- :: input 01 Accounting -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="Accounting">Accounting
                                                        </label>
                                                        <input type="text" name="Accounting" class="form-control  @error('Accounting') is-invalid @enderror" id="Accounting"
                                                            placeholder="Enter Accounting" value="{{ old('Accounting') }}" >
                                                        @error('Accounting')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                        
                                                        
                                                    </div>
                                                </div>
                                                <!-- :: input 02 Advertising -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="advertising"> Advertising
                                                        </label>
                                                        <input type="text" name="Advertising" class="form-control  @error('Advertising') is-invalid @enderror" id="Advertising"
                                                            placeholder="Enter Advertising" value="{{ old('Advertising') }}" >
                                                        @error('Advertising')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                        
                                                    </div>
                                                </div>
                                                <!-- :: input 03 Alarm/Security Installation -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="alarm"> Alarm/Security
                                                            Installation
                                                        </label>
                                                        <input type="text" name="Alarm_Security_Installation" class="form-control  @error('Alarm_Security_Installation') is-invalid @enderror" id="Alarm_Security_Installation"
                                                            placeholder="Enter Alarm/Security Installation" value="{{ old('Alarm_Security_Installation') }}" >
                                                        @error('Alarm_Security_Installation')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 04 Alarm/Security Monitoring -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="a-monitor"> Alarm/Security
                                                            Monitoring
                                                        </label>
                                                        <input type="text" name="Alarm_Security_Monitoring" class="form-control  @error('Alarm_Security_Monitoring') is-invalid @enderror" id="Alarm_Security_Monitoring"
                                                            placeholder="Enter Alarm/Security Monitoring" value="{{ old('Alarm_Security_Monitoring') }}" >
                                                        @error('Alarm_Security_Monitoring')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 05 Appraisal Fees -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="appraisal"> Appraisal Fees
                                                        </label>
                                                        <input type="text" name="Appraisal_Fees" class="form-control  @error('Appraisal_Fees') is-invalid @enderror" id="Appraisal_Fees"
                                                            placeholder="Enter Appraisal_Fees" value="{{ old('Appraisal_Fees') }}" >
                                                        @error('Appraisal_Fees')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 06 Auto Truck Expenses -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="auto-truck">Auto Truck
                                                            Expenses
                                                        </label>
                                                        <input type="text" name="Auto_Truck_Expenses" class="form-control  @error('Auto_Truck_Expenses') is-invalid @enderror" id="Auto_Truck_Expenses"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Auto_Truck_Expenses') }}" >
                                                        @error('Auto_Truck_Expenses')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                        
                                                    </div>
                                                </div>
                                                <!-- :: input 07 Bad Debt Includes In Gross Income -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="gross-debt">Bad Debt
                                                            Includes In Gross Income
                                                        </label>
                                                        <input type="text" name="Bad_Debt_Includes_In_Gross_Income" class="form-control  @error('Bad_Debt_Includes_In_Gross_Income') is-invalid @enderror" id="Bad_Debt_Includes_In_Gross_Income"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Bad_Debt_Includes_In_Gross_Income') }}" >
                                                        @error('Bad_Debt_Includes_In_Gross_Income')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 08 Bank Service Charges -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="bank-charge">Bank Service
                                                            Charges
                                                        </label>
                                                        <input type="text" name="Bank_Service_Charges" class="form-control  @error('Bank_Service_Charges') is-invalid @enderror" id="Bank_Service_Charges"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Bank_Service_Charges') }}" >
                                                        @error('Bank_Service_Charges')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 09 Books, Subscrp & Publications -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="book-publication">Books,
                                                            Subscription & Publications
                                                        </label>
                                                        <input type="text" name="Books_Subscrp_Publications" class="form-control  @error('Books_Subscrp_Publications') is-invalid @enderror" id="Books_Subscrp_Publications"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Books_Subscrp_Publications') }}" >
                                                        @error('Books_Subscrp_Publications')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 10 Client Misc. Gov. Fees Inc. In Income -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="misc-info">Client Misc.
                                                            Gov. Fees Inc. In Income
                                                        </label>
                                                        <input type="text" name="Client_Misc_Gov_Fees_Inc_In_Income" class="form-control  @error('Client_Misc_Gov_Fees_Inc_In_Income') is-invalid @enderror" id="Client_Misc_Gov_Fees_Inc_In_Income"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Client_Misc_Gov_Fees_Inc_In_Income') }}" >
                                                        @error('Client_Misc_Gov_Fees_Inc_In_Income')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 11 Commission/Outside Services -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head"
                                                            for="commission">Commission/Outside Services
                                                        </label>
                                                        <input type="text" name="Commission_Outside_Services" class="form-control  @error('Commission_Outside_Services') is-invalid @enderror" id="Commission_Outside_Services"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Commission_Outside_Services') }}" >
                                                        @error('Commission_Outside_Services')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 12 Credit Card Discount Fees -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="credit-discount">
                                                            Credit Card Discount Fees
                                                        </label>
                                                        <input type="text" name="Credit_Card_Discount_Fees" class="form-control  @error('Credit_Card_Discount_Fees') is-invalid @enderror" id="Credit_Card_Discount_Fees"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Credit_Card_Discount_Fees') }}" >
                                                        @error('Credit_Card_Discount_Fees')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 13 Credit Card Min Usage Fees -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="card-fee">Credit Card Min
                                                            Usage Fees

                                                        </label>
                                                        <input type="text" name="Credit_Card_Min_Usage_Fees" class="form-control  @error('Credit_Card_Min_Usage_Fees') is-invalid @enderror" id="Credit_Card_Min_Usage_Fees"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Credit_Card_Min_Usage_Fees') }}" >
                                                        @error('Credit_Card_Min_Usage_Fees')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 14 Depreciation From Prior Year Income Tax-->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="depreciation">Depreciation
                                                            From Prior Year Income Tax

                                                        </label>
                                                        <input type="text" name="Depreciation_From_Prior_Year_Income_Tax" class="form-control  @error('Depreciation_From_Prior_Year_Income_Tax') is-invalid @enderror" id="Depreciation_From_Prior_Year_Income_Tax"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Depreciation_From_Prior_Year_Income_Tax') }}" >
                                                        @error('Depreciation_From_Prior_Year_Income_Tax')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 15 Domain Name Registration  -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="d-name">Domain Name
                                                            Registration

                                                        </label>
                                                        <input type="text" name="Domain_Name_Registration" class="form-control  @error('Domain_Name_Registration') is-invalid @enderror" id="Domain_Name_Registration"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Domain_Name_Registration') }}" >
                                                        @error('Domain_Name_Registration')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 16 Dues & Membership  -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="membership">Dues &
                                                            Membership

                                                        </label>
                                                        <input type="text" name="Dues_Membership" class="form-control  @error('Dues_Membership') is-invalid @enderror" id="Dues_Membership"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Dues_Membership') }}" >
                                                        @error('Dues_Membership')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 17 Commission/Outside Services -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head"
                                                            for="education-expenses">Education Expenses

                                                        </label>
                                                        <input type="text" name="Education_Expenses" class="form-control  @error('Education_Expenses') is-invalid @enderror" id="Education_Expenses"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Education_Expenses') }}" >
                                                        @error('Education_Expenses')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 18 Employee Benefits -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head"
                                                            for="employee-benefits">Employee Benefits

                                                        </label>
                                                        <input type="text" name="Employee_Benefits" class="form-control  @error('Employee_Benefits') is-invalid @enderror" id="Employee_Benefits"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Employee_Benefits') }}" >
                                                        @error('Employee_Benefits')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 19 Employee/Customer Awards, Prices & Troph -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head"
                                                            for="awards-emp">Employee/Customer Awards, Prices &
                                                            Trophy

                                                        </label>
                                                        <input type="text" name="Employee_Customer_Awards_Prices_Troph" class="form-control  @error('Employee_Customer_Awards_Prices_Troph') is-invalid @enderror" id="Employee_Customer_Awards_Prices_Troph"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Employee_Customer_Awards_Prices_Troph') }}" >
                                                        @error('Employee_Customer_Awards_Prices_Troph')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 20 Entertainment  -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head"
                                                            for="e-entertainment ">Entertainment

                                                        </label>
                                                        <input type="text" name="Entertainment" class="form-control  @error('Entertainment') is-invalid @enderror" id="Entertainment"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Entertainment') }}" >
                                                        @error('Entertainment')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 21 Equipment & Machinery Purchased -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="e-machinery">Equipment &
                                                            Machinery Purchased

                                                        </label>
                                                        <input type="text" name="Equipment_Machinery_Purchased" class="form-control  @error('Equipment_Machinery_Purchased') is-invalid @enderror" id="Equipment_Machinery_Purchased"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Equipment_Machinery_Purchased') }}" >
                                                        @error('Equipment_Machinery_Purchased')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 22 Commission/Outside Services -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="exhibit">Exhibit/Show

                                                        </label>
                                                        <input type="text" name="Exhibit_Show" class="form-control  @error('Exhibit_Show') is-invalid @enderror" id="Exhibit_Show"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Exhibit_Show') }}" >
                                                        @error('Exhibit_Show')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 23 Film & Developing -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="film-dev">Film &
                                                            Developing

                                                        </label>
                                                        <input type="text" name="Film_Developing" class="form-control  @error('Film_Developing') is-invalid @enderror" id="Film_Developing"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Film_Developing') }}" >
                                                        @error('Film_Developing')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 24 Flower & Cards -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="flower-cards">Flower &
                                                            Cards

                                                        </label>
                                                        <input type="text" name="Flower_Cards" class="form-control  @error('Flower_Cards') is-invalid @enderror" id="Flower_Cards"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Flower_Cards') }}" >
                                                        @error('Flower_Cards')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 25 Franchise Fees -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="franchise-fees">Franchise
                                                            Fees

                                                        </label>
                                                        <input type="text" name="Franchise_Fees" class="form-control  @error('Franchise_Fees') is-invalid @enderror" id="Franchise_Fees"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Franchise_Fees') }}" >
                                                        @error('Franchise_Fees')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 26 Fuel (For Trucking Business)  -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="fuel-buss">Fuel (For
                                                            Trucking Business)

                                                        </label>
                                                        <input type="text" name="Fuel" class="form-control  @error('Fuel') is-invalid @enderror" id="Fuel"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Fuel') }}" >
                                                        @error('Fuel')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 27 Furniture & Fixtures  -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head"
                                                            for="furniture-fixtures ">Furniture & Fixtures

                                                        </label>
                                                        <input type="text" name="Furniture_Fixtures" class="form-control  @error('Furniture_Fixtures') is-invalid @enderror" id="Furniture_Fixtures"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Furniture_Fixtures') }}" >
                                                        @error('Furniture_Fixtures')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 28 Gift To Employee/Client  -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="client-gift">Gift To
                                                            Employee/Client

                                                        </label>
                                                        <input type="text" name="Gift_To_Employee_Client" class="form-control  @error('Gift_To_Employee_Client') is-invalid @enderror" id="Gift_To_Employee_Client"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Gift_To_Employee_Client') }}" >
                                                        @error('Gift_To_Employee_Client')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 29 Goodwill -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="goodwill">Goodwill

                                                        </label>
                                                        <input type="text" name="Goodwill" class="form-control  @error('Goodwill') is-invalid @enderror" id="Goodwill"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Goodwill') }}" >
                                                        @error('Goodwill')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 30 Commission/Outside Services -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="graphic-design">Graphic
                                                            Design Fees

                                                        </label>
                                                        <input type="text" name="Graphic_Design_Fees" class="form-control  @error('Graphic_Design_Fees') is-invalid @enderror" id="Graphic_Design_Fees"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Graphic_Design_Fees') }}" >
                                                        @error('Graphic_Design_Fees')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 31 Home Office -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="">Home Office

                                                        </label>
                                                        <input type="text" name="Home_Office" class="form-control  @error('Home_Office') is-invalid @enderror" id="Home_Office"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Home_Office') }}" >
                                                        @error('Home_Office')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 32 Hotel/Motel/Inn -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head"
                                                            for="hotel-motel">Hotel/Motel/Inn

                                                        </label>
                                                        <input type="text" name="Hotel_Motel_Inn" class="form-control  @error('Hotel_Motel_Inn') is-invalid @enderror" id="Hotel_Motel_Inn"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Hotel_Motel_Inn') }}" >
                                                        @error('Hotel_Motel_Inn')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 33 Insurance Bus. Interruption -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head"
                                                            for="insurance-interruption">Insurance Bus.
                                                            Interruption

                                                        </label>
                                                        <input type="text" name="Insurance_Bus_Interruption" class="form-control  @error('Insurance_Bus_Interruption') is-invalid @enderror" id="Insurance_Bus_Interruption"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Insurance_Bus_Interruption') }}" >
                                                        @error('Insurance_Bus_Interruption')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 34 Insurance For Employees -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head"
                                                            for="insurance-employees">Insurance For Employees

                                                        </label>
                                                        <input type="text" name="Insurance_For_Employees" class="form-control  @error('Insurance_For_Employees') is-invalid @enderror" id="Insurance_For_Employees"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Insurance_For_Employees') }}" >
                                                        @error('Insurance_For_Employees')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 35 Insurance Liability -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="">Insurance Liability

                                                        </label>
                                                        <input type="text" name="Insurance_Liability" class="form-control  @error('Insurance_Liability') is-invalid @enderror" id="Insurance_Liability"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Insurance_Liability') }}" >
                                                        @error('Insurance_Liability')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 36 Insurance (Other) -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="Insurance-other">Insurance
                                                            (Other)

                                                        </label>
                                                        <input type="text" name="Insurance_Other" class="form-control  @error('Insurance_Other') is-invalid @enderror" id="Insurance_Other"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Insurance_Other') }}" >
                                                        @error('Insurance_Other')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <!-- :: input 37 Insurance Work. Comp -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="insurance-comp">Insurance
                                                            Work. Company

                                                        </label>
                                                        <input type="text" name="Insurance_Work_Comp" class="form-control  @error('Insurance_Work_Comp') is-invalid @enderror" id="Insurance_Work_Comp"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Insurance_Work_Comp') }}" >
                                                        @error('Insurance_Work_Comp')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 38 Internet Services -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head"
                                                            for="internet-services">Internet Services

                                                        </label>
                                                        <input type="text" name="Internet_Services" class="form-control  @error('Internet_Services') is-invalid @enderror" id="Internet_Services"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Internet_Services') }}" >
                                                        @error('Internet_Services')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 39 Inventory Beginning Of The Year  -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="inventor-year ">Inventory
                                                            Beginning Of The Year

                                                        </label>
                                                        <input type="text" name="Inventory_Beginning_Of_The_Year" class="form-control  @error('Inventory_Beginning_Of_The_Year') is-invalid @enderror" id="Inventory_Beginning_Of_The_Year"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Inventory_Beginning_Of_The_Year') }}" >
                                                        @error('Inventory_Beginning_Of_The_Year')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 40 Commission/Outside Services -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="breakage">Inventory
                                                            Breakage/Spoilage Exp Unreturn

                                                        </label>
                                                        <input type="text" name="Inventory_Breakage_Spoilage_Exp_Unreturn" class="form-control  @error('Inventory_Breakage_Spoilage_Exp_Unreturn') is-invalid @enderror" id="Inventory_Breakage_Spoilage_Exp_Unreturn"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Inventory_Breakage_Spoilage_Exp_Unreturn') }}" >
                                                        @error('Inventory_Breakage_Spoilage_Exp_Unreturn')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 41 Inventory Ending Of The Year  -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="Inventory">Inventory
                                                            Ending Of The Year

                                                        </label>
                                                        <input type="text" name="Inventory_Ending_Of_The_Year" class="form-control  @error('v') is-invalid @enderror" id="Inventory_Ending_Of_The_Year"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Inventory_Ending_Of_The_Year') }}" >
                                                        @error('Inventory_Ending_Of_The_Year')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 42 Inventory Purchases  -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head"
                                                            for="inventory-purchases ">Inventory Purchases

                                                        </label>
                                                        <input type="text" name="Inventory_Purchases" class="form-control  @error('Inventory_Purchases') is-invalid @enderror" id="Inventory_Purchases"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Inventory_Purchases') }}" >
                                                        @error('Inventory_Purchases')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 43 Inventory Theft/Loss -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="theft-loss">Inventory
                                                            Theft/Loss

                                                        </label>
                                                        <input type="text" name="Inventory_Theft_Loss" class="form-control  @error('Inventory_Theft_Loss') is-invalid @enderror" id="Inventory_Theft_Loss"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Inventory_Theft_Loss') }}" >
                                                        @error('Inventory_Theft_Loss')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 44 IRA Regular Or SEP IRA Contributed Year -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="sep-ira">IRA Regular Or
                                                            SEP IRA Contributed Year

                                                        </label>
                                                        <input type="text" name="IRA_Regular_Or_SEP_IRA_Contributed_Year" class="form-control  @error('IRA_Regular_Or_SEP_IRA_Contributed_Year') is-invalid @enderror" id="IRA_Regular_Or_SEP_IRA_Contributed_Year"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('IRA_Regular_Or_SEP_IRA_Contributed_Year') }}" >
                                                        @error('IRA_Regular_Or_SEP_IRA_Contributed_Year')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 45 Landscaping -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="landscaping">Landscaping

                                                        </label>
                                                        <input type="text" name="Landscaping" class="form-control  @error('Landscaping') is-invalid @enderror" id="Landscaping"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Landscaping') }}" >
                                                        @error('Landscaping')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 46 Laundry & Cleaning -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="laundry-cleaning">Laundry
                                                            & Cleaning

                                                        </label>
                                                        <input type="text" name="Laundry_Cleaning" class="form-control  @error('Laundry_Cleaning') is-invalid @enderror" id="Laundry_Cleaning"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Laundry_Cleaning') }}" >
                                                        @error('Laundry_Cleaning')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 47 Legal & Professional Services  -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="legal-professional">Legal
                                                            & Professional Services

                                                        </label>
                                                        <input type="text" name="Legal_Professional_Services" class="form-control  @error('Legal_Professional_Services') is-invalid @enderror" id="Legal_Professional_Services"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Legal_Professional_Services') }}" >
                                                        @error('Legal_Professional_Services')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 48 Licenses & Permits -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="l-permits">Licenses &
                                                            Permits

                                                        </label>
                                                        <input type="text" name="Licenses_Permits" class="form-control  @error('Licenses_Permits') is-invalid @enderror" id="Licenses_Permits"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Licenses_Permits') }}" >
                                                        @error('Licenses_Permits')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 49 Licenses & Permits For Client Projects -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="client-permit">Licenses &
                                                            Permits For Client Projects

                                                        </label>
                                                        <input type="text" name="Licenses_Permits_For_Client_Projects" class="form-control  @error('Licenses_Permits_For_Client_Projects') is-invalid @enderror" id="Licenses_Permits_For_Client_Projects"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Licenses_Permits_For_Client_Projects') }}" >
                                                        @error('Licenses_Permits_For_Client_Projects')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 50 Locksmith/Keys/Lock Boxes -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head"
                                                            for="Locksmith">Locksmith/Keys/Lock Boxes

                                                        </label>
                                                        <input type="text" name="Locksmith_Keys_Lock_Boxes" class="form-control  @error('Locksmith_Keys_Lock_Boxes') is-invalid @enderror" id="Locksmith_Keys_Lock_Boxes"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Locksmith_Keys_Lock_Boxes') }}" >
                                                        @error('Locksmith_Keys_Lock_Boxes')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 51 Meals 50% Bus -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="meals">Meals 50% Bus

                                                        </label>
                                                        <input type="text" name="Meals_50_Bus" class="form-control  @error('Meals_50_Bus') is-invalid @enderror" id="Meals_50_Bus"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Meals_50_Bus') }}" >
                                                        @error('Meals_50_Bus')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 52 Medical Insurance -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="medical-insurance">Medical
                                                            Insurance

                                                        </label>
                                                        <input type="text" name="Medical_Insurance" class="form-control  @error('Medical_Insurance') is-invalid @enderror" id="Medical_Insurance"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Medical_Insurance') }}" >
                                                        @error('Medical_Insurance')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 53 Mileage - Business-->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="mileage-bus">Mileage -
                                                            Business

                                                        </label>
                                                        <input type="text" name="Mileage_Business" class="form-control  @error('Mileage_Business') is-invalid @enderror" id="Mileage_Business"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Mileage_Business') }}" >
                                                        @error('Mileage_Business')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 54 Moving Exp.-->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="moving">Moving Exp.

                                                        </label>
                                                        <input type="text" name="Moving_Exp" class="form-control  @error('Moving_Exp') is-invalid @enderror" id="Moving_Exp"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Moving_Exp') }}" >
                                                        @error('Moving_Exp')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 55 Notary Services -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="notary">Notary Services

                                                        </label>
                                                        <input type="text" name="Notary_Services" class="form-control  @error('Notary_Services') is-invalid @enderror" id="Notary_Services"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Notary_Services') }}" >
                                                        @error('Notary_Services')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 56 Parking  -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="Parking">Parking

                                                        </label>
                                                        <input type="text" name="Parking" class="form-control  @error('Parking') is-invalid @enderror" id="Parking"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Parking') }}" >
                                                        @error('Parking')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 57 Pension Plan -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="pension-plan">Pension Plan

                                                        </label>
                                                        <input type="text" name="Pension_Plan" class="form-control  @error('Pension_Plan') is-invalid @enderror" id="Pension_Plan"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Pension_Plan') }}" >
                                                        @error('Pension_Plan')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 58 Pest Control -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="pest-control">Pest Control

                                                        </label>
                                                        <input type="text" name="Pest_Control" class="form-control  @error('Pest_Control') is-invalid @enderror" id="Pest_Control"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Pest_Control') }}" >
                                                        @error('Pest_Control')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 59 Postage & Delivery Freight/Shipping  -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="c-postage">Postage &
                                                            Delivery Freight/Shipping

                                                        </label>
                                                        <input type="text" name="Postage_Delivery_Freight_Shipping" class="form-control  @error('Postage_Delivery_Freight_Shipping') is-invalid @enderror" id="Postage_Delivery_Freight_Shipping"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Postage_Delivery_Freight_Shipping') }}" >
                                                        @error('Postage_Delivery_Freight_Shipping')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 60 Printing/Reproductions  -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head"
                                                            for="reproductions">Printing/Reproductions

                                                        </label>
                                                        <input type="text" name="Printing_Reproductions" class="form-control  @error('Printing_Reproductions') is-invalid @enderror" id="Printing_Reproductions"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Printing_Reproductions') }}" >
                                                        @error('Printing_Reproductions')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 61 Promotional Exp. Products Or Services -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="promotional">Promotional
                                                            Exp. Products Or Services

                                                        </label>
                                                        <input type="text" name="Promotional_Exp_Products_Or_Services" class="form-control  @error('Promotional_Exp_Products_Or_Services') is-invalid @enderror" id="Promotional_Exp_Products_Or_Services"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Promotional_Exp_Products_Or_Services') }}" >
                                                        @error('Promotional_Exp_Products_Or_Services')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 62 Commission/Outside Services -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="business-location ">Rent
                                                            Business Location

                                                        </label>
                                                        <input type="text" name="Rent_Business_Location" class="form-control  @error('Rent_Business_Location') is-invalid @enderror" id="Rent_Business_Location"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Rent_Business_Location') }}" >
                                                        @error('Rent_Business_Location')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 63 Rent/Furniture -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="rent-f">Rent/Furniture

                                                        </label>
                                                        <input type="text" name="Rent_Furniture" class="form-control  @error('Rent_Furniture') is-invalid @enderror" id="Rent_Furniture"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Rent_Furniture') }}" >
                                                        @error('Rent_Furniture')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 64 Rent/Lease Auto And Or Truck -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="rent-lease">Rent/Lease
                                                            Auto And Or Truck

                                                        </label>
                                                        <input type="text" name="Rent_Lease_Auto_And_Or_Truck" class="form-control  @error('Rent_Lease_Auto_And_Or_Truck') is-invalid @enderror" id="Rent_Lease_Auto_And_Or_Truck"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Rent_Lease_Auto_And_Or_Truck') }}" >
                                                        @error('Rent_Lease_Auto_And_Or_Truck')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 65 Rent/Lease P.O. Box/Storage -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="r-boxes">Rent/Lease P.O.
                                                            Box/Storage

                                                        </label>
                                                        <input type="text" name="Rent_Lease_PO_Box_Storage" class="form-control  @error('Rent_Lease_PO_Box_Storage') is-invalid @enderror" id="Rent_Lease_PO_Box_Storage"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Rent_Lease_PO_Box_Storage') }}" >
                                                        @error('Rent_Lease_PO_Box_Storage')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 66 Rent/Lease Equipment -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head"
                                                            for="lease-equipment">Rent/Lease Equipment

                                                        </label>
                                                        <input type="text" name="Rent_Lease_Equipment" class="form-control  @error('Rent_Lease_Equipment') is-invalid @enderror" id="Rent_Lease_Equipment"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Rent_Lease_Equipment') }}" >
                                                        @error('Rent_Lease_Equipment')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 67 Repair Building -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="repair-building">Repair
                                                            Building

                                                        </label>
                                                        <input type="text" name="Repair_Building" class="form-control  @error('Repair_Building') is-invalid @enderror" id="Repair_Building"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Repair_Building') }}" >
                                                        @error('Repair_Building')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 68 Repair Equipment -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="">Repair Equipment

                                                        </label>
                                                        <input type="text" name="Repair_Equipment" class="form-control  @error('Repair_Equipment') is-invalid @enderror" id="Repair_Equipment"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Repair_Equipment') }}" >
                                                        @error('Repair_Equipment')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 69 Research Expenses -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head"
                                                            for="research-expenses">Research Expenses

                                                        </label>
                                                        <input type="text" name="Research_Expenses" class="form-control  @error('Research_Expenses') is-invalid @enderror" id="Research_Expenses"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Research_Expenses') }}" >
                                                        @error('Research_Expenses')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 70 Royalty For Franchise  -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head"
                                                            for="royalty-franchise ">Royalty For Franchise

                                                        </label>
                                                        <input type="text" name="Royalty_For_Franchise" class="form-control  @error('Royalty_For_Franchise') is-invalid @enderror" id="Royalty_For_Franchise"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Royalty_For_Franchise') }}" >
                                                        @error('Royalty_For_Franchise')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 71 Salaries & Wages -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="salaries-wages">Salaries &
                                                            Wages

                                                        </label>
                                                        <input type="text" name="Salaries_Wages" class="form-control  @error('Salaries_Wages') is-invalid @enderror" id="Salaries_Wages"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Salaries_Wages') }}" >
                                                        @error('Salaries_Wages')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 72 Samples Expenses -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="samples-expenses">Samples
                                                            Expenses

                                                        </label>
                                                        <input type="text" name="Samples_Expenses" class="form-control  @error('Samples_Expenses') is-invalid @enderror" id="Samples_Expenses"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Samples_Expenses') }}" >
                                                        @error('Samples_Expenses')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 73 Seasonal Bus Decorations -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head"
                                                            for="seasonal-decorations">Seasonal Bus Decorations

                                                        </label>
                                                        <input type="text" name="Seasonal_Bus_Decorations" class="form-control  @error('Seasonal_Bus_Decorations') is-invalid @enderror" id="Seasonal_Bus_Decorations"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Seasonal_Bus_Decorations') }}" >
                                                        @error('Seasonal_Bus_Decorations')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 74 Signs/Flags/Banners -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head"
                                                            for="sign-flags">Signs/Flags/Banners

                                                        </label>
                                                        <input type="text" name="Signs_Flags_Banners" class="form-control  @error('Signs_Flags_Banners') is-invalid @enderror" id="Signs_Flags_Banners"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Signs_Flags_Banners') }}" >
                                                        @error('Signs_Flags_Banners')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 75 Software & Upgrades -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="software-upgrade">Software
                                                            & Upgrades

                                                        </label>
                                                        <input type="text" name="Software_Upgrades" class="form-control  @error('Software_Upgrades') is-invalid @enderror" id="Software_Upgrades"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Software_Upgrades') }}" >
                                                        @error('Software_Upgrades')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 76 Supplies Shop  -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="supplies-shop ">Supplies
                                                            Shop

                                                        </label>
                                                        <input type="text" name="Supplies_Shop" class="form-control  @error('Supplies_Shop') is-invalid @enderror" id="Supplies_Shop"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Supplies_Shop') }}" >
                                                        @error('Supplies_Shop')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 77 Supplies Office -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="supplies-office">Supplies
                                                            Office

                                                        </label>
                                                        <input type="text" name="Supplies_Office" class="form-control  @error('Supplies_Office') is-invalid @enderror" id="Supplies_Office"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Supplies_Office') }}" >
                                                        @error('Supplies_Office')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 78 Swimming Pool Purchased Or Installed -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="pool-purchased">Swimming
                                                            Pool Purchased Or Installed

                                                        </label>
                                                        <input type="text" name="Swimming_PoolPurchased_Or_Installed" class="form-control  @error('Swimming_PoolPurchased_Or_Installed') is-invalid @enderror" id="Swimming_PoolPurchased_Or_Installed"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Swimming_PoolPurchased_Or_Installed') }}" >
                                                        @error('Swimming_PoolPurchased_Or_Installed')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 79 Swimming Pool Services -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="pool-services">Swimming
                                                            Pool Services

                                                        </label>
                                                        <input type="text" name="Swimming_Pool_Services" class="form-control  @error('Swimming_Pool_Services') is-invalid @enderror" id="Swimming_Pool_Services"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Swimming_Pool_Services') }}" >
                                                        @error('Swimming_Pool_Services')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 80 Tax Estimated FTB Sole Corp LLC  -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="ftb-tax">Tax Estimated FTB
                                                            Sole Corp LLC

                                                        </label>
                                                        <input type="text" name="Tax_Estimated_FTB_Sole_Corp_LLC" class="form-control  @error('Tax_Estimated_FTB_Sole_Corp_LLC') is-invalid @enderror" id="Tax_Estimated_FTB_Sole_Corp_LLC"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Tax_Estimated_FTB_Sole_Corp_LLC') }}" >
                                                        @error('Tax_Estimated_FTB_Sole_Corp_LLC')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 81 Tax Estimated IRS Sole Corp LLC -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="irs-sole">Tax Estimated
                                                            IRS Sole Corp LLC

                                                        </label>
                                                        <input type="text" name="Tax_Estimated_IRS_Sole_Corp_LLC" class="form-control  @error('Tax_Estimated_IRS_Sole_Corp_LLC') is-invalid @enderror" id="Tax_Estimated_IRS_Sole_Corp_LLC"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Tax_Estimated_IRS_Sole_Corp_LLC') }}" >
                                                        @error('Tax_Estimated_IRS_Sole_Corp_LLC')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 82 Tax Real Estate House/Business -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="real-state-tax">Tax Real
                                                            Estate House/Business

                                                        </label>
                                                        <input type="text" name="Tax_Real_Estate_House_Business" class="form-control  @error('Tax_Real_Estate_House_Business') is-invalid @enderror" id="Tax_Real_Estate_House_Business"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Tax_Real_Estate_House_Business') }}" >
                                                        @error('Tax_Real_Estate_House_Business')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 83 Tax Sale That Included In Income  -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="sale-tax">Tax Sale That
                                                            Included In Income

                                                        </label>
                                                        <input type="text" name="Tax_Sale_That_Included_In_Income" class="form-control  @error('Tax_Sale_That_Included_In_Income') is-invalid @enderror" id="Tax_Sale_That_Included_In_Income"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Tax_Sale_That_Included_In_Income') }}" >
                                                        @error('Tax_Sale_That_Included_In_Income')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 84 taxes Payroll (Employer's Portion) -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="payroll">Taxes Payroll
                                                            (Employer's Portion)

                                                        </label>
                                                        <input type="text" name="Taxes_Payroll_Employers_Portion" class="form-control  @error('Taxes_Payroll_Employers_Portion') is-invalid @enderror" id="Taxes_Payroll_Employers_Portion"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Taxes_Payroll_Employers_Portion') }}" >
                                                        @error('Taxes_Payroll_Employers_Portion')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 85 Telephone/FAX/Pager/Cell -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head"
                                                            for="telephone">Telephone/FAX/Pager/Cell

                                                        </label>
                                                        <input type="text" name="Telephone_FAX_Pager_Cell" class="form-control  @error('Telephone_FAX_Pager_Cell') is-invalid @enderror" id="Telephone_FAX_Pager_Cell"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Telephone_FAX_Pager_Cell') }}" >
                                                        @error('Telephone_FAX_Pager_Cell')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 86 Tips With Verifiable Receipts -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="verifiable">Tips With
                                                            Verifiable Receipts

                                                        </label>
                                                        <input type="text" name="Tips_With_Verifiable_Receipts" class="form-control  @error('Tips_With_Verifiable_Receipts') is-invalid @enderror" id="Tips_With_Verifiable_Receipts"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Tips_With_Verifiable_Receipts') }}" >
                                                        @error('Tips_With_Verifiable_Receipts')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 87 Tools, Molds, Dies, Jigs  -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="molds">Tools, Molds, Dies,
                                                            Jigs

                                                        </label>
                                                        <input type="text" name="Tools_Molds_Dies_Jigs" class="form-control  @error('Tools_Molds_Dies_Jigs') is-invalid @enderror" id="Tools_Molds_Dies_Jigs"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Tools_Molds_Dies_Jigs') }}" >
                                                        @error('Tools_Molds_Dies_Jigs')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 88 Towing Services -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="towing-services">Towing
                                                            Services

                                                        </label>
                                                        <input type="text" name="Towing_Services" class="form-control  @error('Towing_Services') is-invalid @enderror" id="Towing_Services"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Towing_Services') }}" >
                                                        @error('Towing_Services')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 89 Trademark & Patent Expenses -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head"
                                                            for="trademark-patent">Trademark & Patent Expenses

                                                        </label>
                                                        <input type="text" name="Trademark_Patent_Expenses" class="form-control  @error('Trademark_Patent_Expenses') is-invalid @enderror" id="Trademark_Patent_Expenses"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Trademark_Patent_Expenses') }}" >
                                                        @error('Trademark_Patent_Expenses')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 90 Travel -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="travel">Travel

                                                        </label>
                                                        <input type="text" name="Travel" class="form-control  @error('Travel') is-invalid @enderror" id="Travel"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Travel') }}" >
                                                        @error('Travel')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 91 Uniform Cleaning Services  -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="uniform-cleaning">Uniform
                                                            Cleaning Services

                                                        </label>
                                                        <input type="text" name="Uniform_Cleaning_Services" class="form-control  @error('Uniform_Cleaning_Services') is-invalid @enderror" id="Uniform_Cleaning_Services"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Uniform_Cleaning_Services') }}" >
                                                        @error('Uniform_Cleaning_Services')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 92 Uniform Purchased -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="">Uniform Purchased

                                                        </label>
                                                        <input type="text" name="Uniform_Purchased" class="form-control  @error('Uniform_Purchased') is-invalid @enderror" id="Uniform_Purchased"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Uniform_Purchased') }}" >
                                                        @error('Uniform_Purchased')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 93 Utilities Electric & Gas  -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="electric-gas">Utilities
                                                            Electric & Gas

                                                        </label>
                                                        <input type="text" name="Utilities_Electric_Gas" class="form-control  @error('Utilities_Electric_Gas') is-invalid @enderror" id="Utilities_Electric_Gas"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Utilities_Electric_Gas') }}" >
                                                        @error('Utilities_Electric_Gas')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 94 Vandalism/Graffiti Clean Up Fees -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head"
                                                            for="graffiti">Vandalism/Graffiti Clean Up Fees

                                                        </label>
                                                        <input type="text" name="Vandalism_Graffiti_Clean_Up_Fees" class="form-control  @error('Vandalism_Graffiti_Clean_Up_Fees') is-invalid @enderror" id="Vandalism_Graffiti_Clean_Up_Fees"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Vandalism_Graffiti_Clean_Up_Fees') }}" >
                                                        @error('Vandalism_Graffiti_Clean_Up_Fees')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 95 Wash Vehicle For Trucking, Taxi Business -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="wash-vehicle">Wash Vehicle
                                                            For Trucking, Taxi Business

                                                        </label>
                                                        <input type="text" name="Wash_Vehicle_For_Trucking_Taxi_Business" class="form-control  @error('Wash_Vehicle_For_Trucking_Taxi_Business') is-invalid @enderror" id="Wash_Vehicle_For_Trucking_Taxi_Business"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Wash_Vehicle_For_Trucking_Taxi_Business') }}" >
                                                        @error('Wash_Vehicle_For_Trucking_Taxi_Business')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 96 Waste Disposal -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="waste-disposal">Waste
                                                            Disposal

                                                        </label>
                                                        <input type="text" name="Waste_Disposal" class="form-control  @error('Waste_Disposal') is-invalid @enderror" id="Waste_Disposal"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Waste_Disposal') }}" >
                                                        @error('Waste_Disposal')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 97 Web Design Fees -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="web-Design">Web Design
                                                            Fees

                                                        </label>
                                                        <input type="text" name="Web_Design_Fees" class="form-control  @error('Web_Design_Fees') is-invalid @enderror" id="Web_Design_Fees"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Web_Design_Fees') }}" >
                                                        @error('Web_Design_Fees')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 98 Web Hosting Fees -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="web-hosting">Web Hosting
                                                            Fees

                                                        </label>
                                                        <input type="text" name="Web_Hosting_Fees" class="form-control  @error('Web_Hosting_Fees') is-invalid @enderror" id="Web_Hosting_Fees"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Web_Hosting_Fees') }}" >
                                                        @error('Web_Hosting_Fees')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 99 other -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="other">Other

                                                        </label>
                                                        <input type="text" name="Other" class="form-control  @error('Other') is-invalid @enderror" id="Other"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Other') }}" >
                                                        @error('Other')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 100 other 2 -->
                                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="other-2">Other 2

                                                        </label>
                                                        <input type="text" name="Other1" class="form-control  @error('Other1') is-invalid @enderror" id="Other1"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Other1') }}" >
                                                        @error('Other1')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        <!-- input for select profit loss no end here -->
                                        <!-- long section sub form for vehicle details  -->
                                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 mb-3">
                                            <div class="form-section-highlite mt-3">
                                                <div> Vehicle Information & Expenses:
                                                </div>
                                            </div>
                                        </div>
                                        <!-- long section sub form for vehicle details  -->
                                        <!-- select input for no of vehicle -->
                                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left"
                                            id="vehiclecountSection" style="">
                                            <div class="form-group depend-cnt">
                                                <label class="form-head" for="count-depend">How many motor
                                                    vehicles do you
                                                    have?</label>
                                                <div class="select-group h-40">
                                                    <select class="form-control @error('How_many_motor_vehicles_do_you_have') is-invalid @enderror" id="count-vehicle"
                                                        name="How_many_motor_vehicles_do_you_have">
                                                        @if ($to->How_many_motor_vehicles_do_you_have == '0')
                                                            <option value="0" selected>Select an option</option>
                                                        @else
                                                            <option value="0">Select an option</option>
                                                        @endif

                                                        @if ($to->How_many_motor_vehicles_do_you_have == '1')
                                                            <option value="1" selected>1</option>
                                                        @else
                                                            <option value="1">1</option>
                                                        @endif

                                                        @if ($to->How_many_motor_vehicles_do_you_have == '2')
                                                            <option value="2" selected>2</option>
                                                        @else
                                                            <option value="2">2</option>
                                                        @endif

                                                        @if ($to->How_many_motor_vehicles_do_you_have == '3')
                                                            <option value="3" selected>3</option>
                                                        @else
                                                            <option value="3">3</option>
                                                        @endif

                                                        @if ($to->How_many_motor_vehicles_do_you_have == '4')
                                                            <option value="4" selected>4</option>
                                                        @else
                                                            <option value="4">4</option>
                                                        @endif

                                                        @if ($to->How_many_motor_vehicles_do_you_have == '5')
                                                            <option value="5" selected>5</option>
                                                        @else
                                                            <option value="5">5</option>
                                                        @endif
                                                    </select>
                                                    @error('How_many_motor_vehicles_do_you_have')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <!-- select input for no of vehicle -->
                                        <!-- vehicle fill form -->
                                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 mt-2 mb-2 dependency-tab"
                                            id="vehicle-select" style="">
                                            <!-- <div class="form-section-divident text-left mb-3">
                                                <h6>Vehicle 1</h6>
                                            </div> -->

                                            <div class="row count-investment-form-control px-2">
                                               

                                            </div>
                                        </div>
                                        <!-- vehicle fil form end here -->

                                        <!-- business form end here -->
                                    </div>
                                </div>
                                @else
                                <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12" id="long-select" style="display: none;">
                                    <div class="form-section-highlite mt-3">
                                        <div>Business Income & Expenses </div>
                                    </div>
                                    <!-- inner row -->
                                    <div class=" row ext-r">
                                        <!-- business form start from here -->
                                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 mt-2 mb-2 dependency-tab"
                                            id="business-select" style="display: block;">
                                            <div class="form-section-divident text-left">
                                                <h6>Business Info </h6>
                                            </div>
                                            <div class="row dependency-form-control px-2">
                                                <!-- :: input 01 Name Of Business  -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="businessname">Name Of
                                                            Business </label>
                                                        <input type="text" name="Name_Of_Business" value="{{ old('Name_Of_Business') }}" class="form-control @error('Name_Of_Business') is-invalid @enderror " id="business_name"
                                                        placeholder="Enter Name Of
                                                            Business" >
                                                        @error('Name_Of_Business')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror

                                                    </div>
                                                </div>
                                                <!-- :: input 02 Tax ID# (EIN) -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="tax-id"> Tax ID# (EIN)
                                                        </label>
                                                        <input type="text" name="Tax_ID" value="{{ old('Tax_ID') }}" class="form-control @error('Tax_ID') is-invalid @enderror " id="tax-identity"
                                                        placeholder="Enter Tax ID#" >
                                                        @error('Tax_ID')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 03Business Activity -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="business-ctivity">Business
                                                            Activity
                                                        </label>
                                                        <input type="text" name="Business_Activity" value="{{ old('Business_Activity') }}" class="form-control @error('Business_Activity') is-invalid @enderror " id="b-activity"
                                                        placeholder="Enter Business
                                                            Activity" >
                                                        @error('Business_Activity')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- :: input radio do you have a profit and loss statement  -->
                                        <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6 text-left mt-3">
                                            <div class="form-group">
                                                <label class="form-head" for="p-statement">Do you have a profit
                                                    and loss statement
                                                </label>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input @error('Do_you_have_a_profit_and_loss_statement') is-invalid @enderror" name="Do_you_have_a_profit_and_loss_statement" id="profit-yes" value="Yes" @if(old('Do_you_have_a_profit_and_loss_statement') == 'Yes') checked @endif 
                                                        type="radio" >Yes
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input @error('Do_you_have_a_profit_and_loss_statement') is-invalid @enderror" name="Do_you_have_a_profit_and_loss_statement" id="profit-no" value="No" @if(old('Do_you_have_a_profit_and_loss_statement') == 'No') checked @endif 
                                                        type="radio" >No
                                                        @error('Do_you_have_a_profit_and_loss_statement')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- input radio do you have a profit and loss statement end  -->
                                        <!-- ::input for document Upload Profit & Loss   -->
                                        @if((old('Client_Employment_Status') == 'selfemployed' || old('Client_Employment_Status') == 'businessowner') && old('Do_you_have_a_profit_and_loss_statement') == 'Yes'))
                                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left mt-3"
                                            id="profit-select" style="display: block;">
                                            <div class="form-group">
                                                <label class="form-head" for="profit-loss">
                                                    Upload Profit & Loss Statement
                                                </label>
                                                <input type="file" class="form-control @error('Upload_Profit_Loss_Statement') is-invalid @enderror" id="profit-document"
                                                    name="Upload_Profit_Loss_Statement" accept="image/*" >

                                                <input type="hidden" class="form-control" value="@if(!empty($to->Upload_Profit_Loss_Statement)){{old('bank_old$i', $to->Upload_Profit_Loss_Statement)}}@endif" id="Upload_Profit_Loss_Statement_old" name="Upload_Profit_Loss_Statement_old" >
                                                @if(!empty($to->Upload_Profit_Loss_Statement))
                                                <a target="_blank"  class="" href="@php echo URL::to('/').'/public/'.$to->Upload_Profit_Loss_Statement; @endphp" style="font-size: 10px;">@php echo URL::to('/').'/public/'.$to->Upload_Profit_Loss_Statement; @endphp</a>
                                                @endif

                                                @error('Upload_Profit_Loss_Statement')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                @enderror
                                            </div>
                                        </div>
                                        @else
                                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left mt-3"
                                            id="profit-select" style="display: none;">
                                            <div class="form-group">
                                                <label class="form-head" for="profit-loss">
                                                    Upload Profit & Loss Statement
                                                </label>
                                                <input type="file" class="form-control @error('Upload_Profit_Loss_Statement') is-invalid @enderror" id="profit-document"
                                                    name="Upload_Profit_Loss_Statement" accept="image/*" >
                                                @error('Upload_Profit_Loss_Statement')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                @enderror
                                            </div>
                                        </div>
                                        @endif

                                        <!-- ::input for document Upload Profit & Loss   -->
                                        <!-- inputs for select plofit loss no -->
                                        @if((old('Client_Employment_Status') == 'selfemployed' || old('Client_Employment_Status') == 'businessowner') && old('Upload_Profit_Loss_Statement') == 'No'))
                                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 mt-2 mb-2 dependency-tab"
                                            id="profit-input" style="display: block;">
                                            <div class="form-section-divident text-left mb-4">
                                                <h6> If a question does not apply to you, put 0.</h6>
                                            </div>
                                            <div class="row profit-form-control px-2">
                                                <!-- :: input 01 Accounting -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="Accounting">Accounting
                                                        </label>
                                                        <input type="text" name="Accounting" class="form-control  @error('Accounting') is-invalid @enderror" id="Accounting"
                                                            placeholder="Enter Accounting" value="{{ old('Accounting') }}" >
                                                        @error('Accounting')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                        
                                                        
                                                    </div>
                                                </div>
                                                <!-- :: input 02 Advertising -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="advertising"> Advertising
                                                        </label>
                                                        <input type="text" name="Advertising" class="form-control  @error('Advertising') is-invalid @enderror" id="Advertising"
                                                            placeholder="Enter Advertising" value="{{ old('Advertising') }}" >
                                                        @error('Advertising')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                        
                                                    </div>
                                                </div>
                                                <!-- :: input 03 Alarm/Security Installation -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="alarm"> Alarm/Security
                                                            Installation
                                                        </label>
                                                        <input type="text" name="Alarm_Security_Installation" class="form-control  @error('Alarm_Security_Installation') is-invalid @enderror" id="Alarm_Security_Installation"
                                                            placeholder="Enter Alarm/Security Installation" value="{{ old('Alarm_Security_Installation') }}" >
                                                        @error('Alarm_Security_Installation')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 04 Alarm/Security Monitoring -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="a-monitor"> Alarm/Security
                                                            Monitoring
                                                        </label>
                                                        <input type="text" name="Alarm_Security_Monitoring" class="form-control  @error('Alarm_Security_Monitoring') is-invalid @enderror" id="Alarm_Security_Monitoring"
                                                            placeholder="Enter Alarm/Security Monitoring" value="{{ old('Alarm_Security_Monitoring') }}" >
                                                        @error('Alarm_Security_Monitoring')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 05 Appraisal Fees -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="appraisal"> Appraisal Fees
                                                        </label>
                                                        <input type="text" name="Appraisal_Fees" class="form-control  @error('Appraisal_Fees') is-invalid @enderror" id="Appraisal_Fees"
                                                            placeholder="Enter Appraisal_Fees" value="{{ old('Appraisal_Fees') }}" >
                                                        @error('Appraisal_Fees')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 06 Auto Truck Expenses -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="auto-truck">Auto Truck
                                                            Expenses
                                                        </label>
                                                        <input type="text" name="Auto_Truck_Expenses" class="form-control  @error('Auto_Truck_Expenses') is-invalid @enderror" id="Auto_Truck_Expenses"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Auto_Truck_Expenses') }}" >
                                                        @error('Auto_Truck_Expenses')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                        
                                                    </div>
                                                </div>
                                                <!-- :: input 07 Bad Debt Includes In Gross Income -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="gross-debt">Bad Debt
                                                            Includes In Gross Income
                                                        </label>
                                                        <input type="text" name="Bad_Debt_Includes_In_Gross_Income" class="form-control  @error('Bad_Debt_Includes_In_Gross_Income') is-invalid @enderror" id="Bad_Debt_Includes_In_Gross_Income"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Bad_Debt_Includes_In_Gross_Income') }}" >
                                                        @error('Bad_Debt_Includes_In_Gross_Income')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 08 Bank Service Charges -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="bank-charge">Bank Service
                                                            Charges
                                                        </label>
                                                        <input type="text" name="Bank_Service_Charges" class="form-control  @error('Bank_Service_Charges') is-invalid @enderror" id="Bank_Service_Charges"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Bank_Service_Charges') }}" >
                                                        @error('Bank_Service_Charges')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 09 Books, Subscrp & Publications -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="book-publication">Books,
                                                            Subscription & Publications
                                                        </label>
                                                        <input type="text" name="Books_Subscrp_Publications" class="form-control  @error('Books_Subscrp_Publications') is-invalid @enderror" id="Books_Subscrp_Publications"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Books_Subscrp_Publications') }}" >
                                                        @error('Books_Subscrp_Publications')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 10 Client Misc. Gov. Fees Inc. In Income -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="misc-info">Client Misc.
                                                            Gov. Fees Inc. In Income
                                                        </label>
                                                        <input type="text" name="Client_Misc_Gov_Fees_Inc_In_Income" class="form-control  @error('Client_Misc_Gov_Fees_Inc_In_Income') is-invalid @enderror" id="Client_Misc_Gov_Fees_Inc_In_Income"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Client_Misc_Gov_Fees_Inc_In_Income') }}" >
                                                        @error('Client_Misc_Gov_Fees_Inc_In_Income')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 11 Commission/Outside Services -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head"
                                                            for="commission">Commission/Outside Services
                                                        </label>
                                                        <input type="text" name="Commission_Outside_Services" class="form-control  @error('Commission_Outside_Services') is-invalid @enderror" id="Commission_Outside_Services"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Commission_Outside_Services') }}" >
                                                        @error('Commission_Outside_Services')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 12 Credit Card Discount Fees -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="credit-discount">
                                                            Credit Card Discount Fees
                                                        </label>
                                                        <input type="text" name="Credit_Card_Discount_Fees" class="form-control  @error('Credit_Card_Discount_Fees') is-invalid @enderror" id="Credit_Card_Discount_Fees"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Credit_Card_Discount_Fees') }}" >
                                                        @error('Credit_Card_Discount_Fees')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 13 Credit Card Min Usage Fees -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="card-fee">Credit Card Min
                                                            Usage Fees

                                                        </label>
                                                        <input type="text" name="Credit_Card_Min_Usage_Fees" class="form-control  @error('Credit_Card_Min_Usage_Fees') is-invalid @enderror" id="Credit_Card_Min_Usage_Fees"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Credit_Card_Min_Usage_Fees') }}" >
                                                        @error('Credit_Card_Min_Usage_Fees')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 14 Depreciation From Prior Year Income Tax-->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="depreciation">Depreciation
                                                            From Prior Year Income Tax

                                                        </label>
                                                        <input type="text" name="Depreciation_From_Prior_Year_Income_Tax" class="form-control  @error('Depreciation_From_Prior_Year_Income_Tax') is-invalid @enderror" id="Depreciation_From_Prior_Year_Income_Tax"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Depreciation_From_Prior_Year_Income_Tax') }}" >
                                                        @error('Depreciation_From_Prior_Year_Income_Tax')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 15 Domain Name Registration  -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="d-name">Domain Name
                                                            Registration

                                                        </label>
                                                        <input type="text" name="Domain_Name_Registration" class="form-control  @error('Domain_Name_Registration') is-invalid @enderror" id="Domain_Name_Registration"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Domain_Name_Registration') }}" >
                                                        @error('Domain_Name_Registration')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 16 Dues & Membership  -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="membership">Dues &
                                                            Membership

                                                        </label>
                                                        <input type="text" name="Dues_Membership" class="form-control  @error('Dues_Membership') is-invalid @enderror" id="Dues_Membership"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Dues_Membership') }}" >
                                                        @error('Dues_Membership')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 17 Commission/Outside Services -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head"
                                                            for="education-expenses">Education Expenses

                                                        </label>
                                                        <input type="text" name="Education_Expenses" class="form-control  @error('Education_Expenses') is-invalid @enderror" id="Education_Expenses"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Education_Expenses') }}" >
                                                        @error('Education_Expenses')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 18 Employee Benefits -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head"
                                                            for="employee-benefits">Employee Benefits

                                                        </label>
                                                        <input type="text" name="Employee_Benefits" class="form-control  @error('Employee_Benefits') is-invalid @enderror" id="Employee_Benefits"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Employee_Benefits') }}" >
                                                        @error('Employee_Benefits')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 19 Employee/Customer Awards, Prices & Troph -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head"
                                                            for="awards-emp">Employee/Customer Awards, Prices &
                                                            Trophy

                                                        </label>
                                                        <input type="text" name="Employee_Customer_Awards_Prices_Troph" class="form-control  @error('Employee_Customer_Awards_Prices_Troph') is-invalid @enderror" id="Employee_Customer_Awards_Prices_Troph"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Employee_Customer_Awards_Prices_Troph') }}" >
                                                        @error('Employee_Customer_Awards_Prices_Troph')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 20 Entertainment  -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head"
                                                            for="e-entertainment ">Entertainment

                                                        </label>
                                                        <input type="text" name="Entertainment" class="form-control  @error('Entertainment') is-invalid @enderror" id="Entertainment"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Entertainment') }}" >
                                                        @error('Entertainment')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 21 Equipment & Machinery Purchased -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="e-machinery">Equipment &
                                                            Machinery Purchased

                                                        </label>
                                                        <input type="text" name="Equipment_Machinery_Purchased" class="form-control  @error('Equipment_Machinery_Purchased') is-invalid @enderror" id="Equipment_Machinery_Purchased"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Equipment_Machinery_Purchased') }}" >
                                                        @error('Equipment_Machinery_Purchased')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 22 Commission/Outside Services -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="exhibit">Exhibit/Show

                                                        </label>
                                                        <input type="text" name="Exhibit_Show" class="form-control  @error('Exhibit_Show') is-invalid @enderror" id="Exhibit_Show"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Exhibit_Show') }}" >
                                                        @error('Exhibit_Show')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 23 Film & Developing -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="film-dev">Film &
                                                            Developing

                                                        </label>
                                                        <input type="text" name="Film_Developing" class="form-control  @error('Film_Developing') is-invalid @enderror" id="Film_Developing"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Film_Developing') }}" >
                                                        @error('Film_Developing')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 24 Flower & Cards -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="flower-cards">Flower &
                                                            Cards

                                                        </label>
                                                        <input type="text" name="Flower_Cards" class="form-control  @error('Flower_Cards') is-invalid @enderror" id="Flower_Cards"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Flower_Cards') }}" >
                                                        @error('Flower_Cards')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 25 Franchise Fees -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="franchise-fees">Franchise
                                                            Fees

                                                        </label>
                                                        <input type="text" name="Franchise_Fees" class="form-control  @error('Franchise_Fees') is-invalid @enderror" id="Franchise_Fees"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Franchise_Fees') }}" >
                                                        @error('Franchise_Fees')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 26 Fuel (For Trucking Business)  -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="fuel-buss">Fuel (For
                                                            Trucking Business)

                                                        </label>
                                                        <input type="text" name="Fuel" class="form-control  @error('Fuel') is-invalid @enderror" id="Fuel"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Fuel') }}" >
                                                        @error('Fuel')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 27 Furniture & Fixtures  -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head"
                                                            for="furniture-fixtures ">Furniture & Fixtures

                                                        </label>
                                                        <input type="text" name="Furniture_Fixtures" class="form-control  @error('Furniture_Fixtures') is-invalid @enderror" id="Furniture_Fixtures"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Furniture_Fixtures') }}" >
                                                        @error('Furniture_Fixtures')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 28 Gift To Employee/Client  -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="client-gift">Gift To
                                                            Employee/Client

                                                        </label>
                                                        <input type="text" name="Gift_To_Employee_Client" class="form-control  @error('Gift_To_Employee_Client') is-invalid @enderror" id="Gift_To_Employee_Client"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Gift_To_Employee_Client') }}" >
                                                        @error('Gift_To_Employee_Client')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 29 Goodwill -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="goodwill">Goodwill

                                                        </label>
                                                        <input type="text" name="Goodwill" class="form-control  @error('Goodwill') is-invalid @enderror" id="Goodwill"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Goodwill') }}" >
                                                        @error('Goodwill')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 30 Commission/Outside Services -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="graphic-design">Graphic
                                                            Design Fees

                                                        </label>
                                                        <input type="text" name="Graphic_Design_Fees" class="form-control  @error('Graphic_Design_Fees') is-invalid @enderror" id="Graphic_Design_Fees"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Graphic_Design_Fees') }}" >
                                                        @error('Graphic_Design_Fees')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 31 Home Office -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="">Home Office

                                                        </label>
                                                        <input type="text" name="Home_Office" class="form-control  @error('Home_Office') is-invalid @enderror" id="Home_Office"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Home_Office') }}" >
                                                        @error('Home_Office')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 32 Hotel/Motel/Inn -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head"
                                                            for="hotel-motel">Hotel/Motel/Inn

                                                        </label>
                                                        <input type="text" name="Hotel_Motel_Inn" class="form-control  @error('Hotel_Motel_Inn') is-invalid @enderror" id="Hotel_Motel_Inn"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Hotel_Motel_Inn') }}" >
                                                        @error('Hotel_Motel_Inn')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 33 Insurance Bus. Interruption -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head"
                                                            for="insurance-interruption">Insurance Bus.
                                                            Interruption

                                                        </label>
                                                        <input type="text" name="Insurance_Bus_Interruption" class="form-control  @error('Insurance_Bus_Interruption') is-invalid @enderror" id="Insurance_Bus_Interruption"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Insurance_Bus_Interruption') }}" >
                                                        @error('Insurance_Bus_Interruption')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 34 Insurance For Employees -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head"
                                                            for="insurance-employees">Insurance For Employees

                                                        </label>
                                                        <input type="text" name="Insurance_For_Employees" class="form-control  @error('Insurance_For_Employees') is-invalid @enderror" id="Insurance_For_Employees"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Insurance_For_Employees') }}" >
                                                        @error('Insurance_For_Employees')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 35 Insurance Liability -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="">Insurance Liability

                                                        </label>
                                                        <input type="text" name="Insurance_Liability" class="form-control  @error('Insurance_Liability') is-invalid @enderror" id="Insurance_Liability"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Insurance_Liability') }}" >
                                                        @error('Insurance_Liability')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 36 Insurance (Other) -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="Insurance-other">Insurance
                                                            (Other)

                                                        </label>
                                                        <input type="text" name="Insurance_Other" class="form-control  @error('Insurance_Other') is-invalid @enderror" id="Insurance_Other"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Insurance_Other') }}" >
                                                        @error('Insurance_Other')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <!-- :: input 37 Insurance Work. Comp -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="insurance-comp">Insurance
                                                            Work. Company

                                                        </label>
                                                        <input type="text" name="Insurance_Work_Comp" class="form-control  @error('Insurance_Work_Comp') is-invalid @enderror" id="Insurance_Work_Comp"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Insurance_Work_Comp') }}" >
                                                        @error('Insurance_Work_Comp')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 38 Internet Services -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head"
                                                            for="internet-services">Internet Services

                                                        </label>
                                                        <input type="text" name="Internet_Services" class="form-control  @error('Internet_Services') is-invalid @enderror" id="Internet_Services"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Internet_Services') }}" >
                                                        @error('Internet_Services')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 39 Inventory Beginning Of The Year  -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="inventor-year ">Inventory
                                                            Beginning Of The Year

                                                        </label>
                                                        <input type="text" name="Inventory_Beginning_Of_The_Year" class="form-control  @error('Inventory_Beginning_Of_The_Year') is-invalid @enderror" id="Inventory_Beginning_Of_The_Year"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Inventory_Beginning_Of_The_Year') }}" >
                                                        @error('Inventory_Beginning_Of_The_Year')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 40 Commission/Outside Services -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="breakage">Inventory
                                                            Breakage/Spoilage Exp Unreturn

                                                        </label>
                                                        <input type="text" name="Inventory_Breakage_Spoilage_Exp_Unreturn" class="form-control  @error('Inventory_Breakage_Spoilage_Exp_Unreturn') is-invalid @enderror" id="Inventory_Breakage_Spoilage_Exp_Unreturn"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Inventory_Breakage_Spoilage_Exp_Unreturn') }}" >
                                                        @error('Inventory_Breakage_Spoilage_Exp_Unreturn')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 41 Inventory Ending Of The Year  -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="Inventory">Inventory
                                                            Ending Of The Year

                                                        </label>
                                                        <input type="text" name="Inventory_Ending_Of_The_Year" class="form-control  @error('v') is-invalid @enderror" id="Inventory_Ending_Of_The_Year"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Inventory_Ending_Of_The_Year') }}" >
                                                        @error('Inventory_Ending_Of_The_Year')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 42 Inventory Purchases  -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head"
                                                            for="inventory-purchases ">Inventory Purchases

                                                        </label>
                                                        <input type="text" name="Inventory_Purchases" class="form-control  @error('Inventory_Purchases') is-invalid @enderror" id="Inventory_Purchases"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Inventory_Purchases') }}" >
                                                        @error('Inventory_Purchases')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 43 Inventory Theft/Loss -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="theft-loss">Inventory
                                                            Theft/Loss

                                                        </label>
                                                        <input type="text" name="Inventory_Theft_Loss" class="form-control  @error('Inventory_Theft_Loss') is-invalid @enderror" id="Inventory_Theft_Loss"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Inventory_Theft_Loss') }}" >
                                                        @error('Inventory_Theft_Loss')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 44 IRA Regular Or SEP IRA Contributed Year -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="sep-ira">IRA Regular Or
                                                            SEP IRA Contributed Year

                                                        </label>
                                                        <input type="text" name="IRA_Regular_Or_SEP_IRA_Contributed_Year" class="form-control  @error('IRA_Regular_Or_SEP_IRA_Contributed_Year') is-invalid @enderror" id="IRA_Regular_Or_SEP_IRA_Contributed_Year"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('IRA_Regular_Or_SEP_IRA_Contributed_Year') }}" >
                                                        @error('IRA_Regular_Or_SEP_IRA_Contributed_Year')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 45 Landscaping -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="landscaping">Landscaping

                                                        </label>
                                                        <input type="text" name="Landscaping" class="form-control  @error('Landscaping') is-invalid @enderror" id="Landscaping"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Landscaping') }}" >
                                                        @error('Landscaping')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 46 Laundry & Cleaning -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="laundry-cleaning">Laundry
                                                            & Cleaning

                                                        </label>
                                                        <input type="text" name="Laundry_Cleaning" class="form-control  @error('Laundry_Cleaning') is-invalid @enderror" id="Laundry_Cleaning"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Laundry_Cleaning') }}" >
                                                        @error('Laundry_Cleaning')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 47 Legal & Professional Services  -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="legal-professional">Legal
                                                            & Professional Services

                                                        </label>
                                                        <input type="text" name="Legal_Professional_Services" class="form-control  @error('Legal_Professional_Services') is-invalid @enderror" id="Legal_Professional_Services"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Legal_Professional_Services') }}" >
                                                        @error('Legal_Professional_Services')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 48 Licenses & Permits -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="l-permits">Licenses &
                                                            Permits

                                                        </label>
                                                        <input type="text" name="Licenses_Permits" class="form-control  @error('Licenses_Permits') is-invalid @enderror" id="Licenses_Permits"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Licenses_Permits') }}" >
                                                        @error('Licenses_Permits')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 49 Licenses & Permits For Client Projects -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="client-permit">Licenses &
                                                            Permits For Client Projects

                                                        </label>
                                                        <input type="text" name="Licenses_Permits_For_Client_Projects" class="form-control  @error('Licenses_Permits_For_Client_Projects') is-invalid @enderror" id="Licenses_Permits_For_Client_Projects"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Licenses_Permits_For_Client_Projects') }}" >
                                                        @error('Licenses_Permits_For_Client_Projects')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 50 Locksmith/Keys/Lock Boxes -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head"
                                                            for="Locksmith">Locksmith/Keys/Lock Boxes

                                                        </label>
                                                        <input type="text" name="Locksmith_Keys_Lock_Boxes" class="form-control  @error('Locksmith_Keys_Lock_Boxes') is-invalid @enderror" id="Locksmith_Keys_Lock_Boxes"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Locksmith_Keys_Lock_Boxes') }}" >
                                                        @error('Locksmith_Keys_Lock_Boxes')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 51 Meals 50% Bus -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="meals">Meals 50% Bus

                                                        </label>
                                                        <input type="text" name="Meals_50_Bus" class="form-control  @error('Meals_50_Bus') is-invalid @enderror" id="Meals_50_Bus"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Meals_50_Bus') }}" >
                                                        @error('Meals_50_Bus')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 52 Medical Insurance -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="medical-insurance">Medical
                                                            Insurance

                                                        </label>
                                                        <input type="text" name="Medical_Insurance" class="form-control  @error('Medical_Insurance') is-invalid @enderror" id="Medical_Insurance"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Medical_Insurance') }}" >
                                                        @error('Medical_Insurance')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 53 Mileage - Business-->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="mileage-bus">Mileage -
                                                            Business

                                                        </label>
                                                        <input type="text" name="Mileage_Business" class="form-control  @error('Mileage_Business') is-invalid @enderror" id="Mileage_Business"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Mileage_Business') }}" >
                                                        @error('Mileage_Business')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 54 Moving Exp.-->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="moving">Moving Exp.

                                                        </label>
                                                        <input type="text" name="Moving_Exp" class="form-control  @error('Moving_Exp') is-invalid @enderror" id="Moving_Exp"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Moving_Exp') }}" >
                                                        @error('Moving_Exp')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 55 Notary Services -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="notary">Notary Services

                                                        </label>
                                                        <input type="text" name="Notary_Services" class="form-control  @error('Notary_Services') is-invalid @enderror" id="Notary_Services"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Notary_Services') }}" >
                                                        @error('Notary_Services')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 56 Parking  -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="Parking">Parking

                                                        </label>
                                                        <input type="text" name="Parking" class="form-control  @error('Parking') is-invalid @enderror" id="Parking"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Parking') }}" >
                                                        @error('Parking')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 57 Pension Plan -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="pension-plan">Pension Plan

                                                        </label>
                                                        <input type="text" name="Pension_Plan" class="form-control  @error('Pension_Plan') is-invalid @enderror" id="Pension_Plan"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Pension_Plan') }}" >
                                                        @error('Pension_Plan')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 58 Pest Control -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="pest-control">Pest Control

                                                        </label>
                                                        <input type="text" name="Pest_Control" class="form-control  @error('Pest_Control') is-invalid @enderror" id="Pest_Control"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Pest_Control') }}" >
                                                        @error('Pest_Control')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 59 Postage & Delivery Freight/Shipping  -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="c-postage">Postage &
                                                            Delivery Freight/Shipping

                                                        </label>
                                                        <input type="text" name="Postage_Delivery_Freight_Shipping" class="form-control  @error('Postage_Delivery_Freight_Shipping') is-invalid @enderror" id="Postage_Delivery_Freight_Shipping"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Postage_Delivery_Freight_Shipping') }}" >
                                                        @error('Postage_Delivery_Freight_Shipping')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 60 Printing/Reproductions  -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head"
                                                            for="reproductions">Printing/Reproductions

                                                        </label>
                                                        <input type="text" name="Printing_Reproductions" class="form-control  @error('Printing_Reproductions') is-invalid @enderror" id="Printing_Reproductions"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Printing_Reproductions') }}" >
                                                        @error('Printing_Reproductions')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 61 Promotional Exp. Products Or Services -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="promotional">Promotional
                                                            Exp. Products Or Services

                                                        </label>
                                                        <input type="text" name="Promotional_Exp_Products_Or_Services" class="form-control  @error('Promotional_Exp_Products_Or_Services') is-invalid @enderror" id="Promotional_Exp_Products_Or_Services"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Promotional_Exp_Products_Or_Services') }}" >
                                                        @error('Promotional_Exp_Products_Or_Services')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 62 Commission/Outside Services -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="business-location ">Rent
                                                            Business Location

                                                        </label>
                                                        <input type="text" name="Rent_Business_Location" class="form-control  @error('Rent_Business_Location') is-invalid @enderror" id="Rent_Business_Location"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Rent_Business_Location') }}" >
                                                        @error('Rent_Business_Location')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 63 Rent/Furniture -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="rent-f">Rent/Furniture

                                                        </label>
                                                        <input type="text" name="Rent_Furniture" class="form-control  @error('Rent_Furniture') is-invalid @enderror" id="Rent_Furniture"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Rent_Furniture') }}" >
                                                        @error('Rent_Furniture')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 64 Rent/Lease Auto And Or Truck -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="rent-lease">Rent/Lease
                                                            Auto And Or Truck

                                                        </label>
                                                        <input type="text" name="Rent_Lease_Auto_And_Or_Truck" class="form-control  @error('Rent_Lease_Auto_And_Or_Truck') is-invalid @enderror" id="Rent_Lease_Auto_And_Or_Truck"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Rent_Lease_Auto_And_Or_Truck') }}" >
                                                        @error('Rent_Lease_Auto_And_Or_Truck')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 65 Rent/Lease P.O. Box/Storage -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="r-boxes">Rent/Lease P.O.
                                                            Box/Storage

                                                        </label>
                                                        <input type="text" name="Rent_Lease_PO_Box_Storage" class="form-control  @error('Rent_Lease_PO_Box_Storage') is-invalid @enderror" id="Rent_Lease_PO_Box_Storage"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Rent_Lease_PO_Box_Storage') }}" >
                                                        @error('Rent_Lease_PO_Box_Storage')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 66 Rent/Lease Equipment -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head"
                                                            for="lease-equipment">Rent/Lease Equipment

                                                        </label>
                                                        <input type="text" name="Rent_Lease_Equipment" class="form-control  @error('Rent_Lease_Equipment') is-invalid @enderror" id="Rent_Lease_Equipment"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Rent_Lease_Equipment') }}" >
                                                        @error('Rent_Lease_Equipment')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 67 Repair Building -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="repair-building">Repair
                                                            Building

                                                        </label>
                                                        <input type="text" name="Repair_Building" class="form-control  @error('Repair_Building') is-invalid @enderror" id="Repair_Building"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Repair_Building') }}" >
                                                        @error('Repair_Building')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 68 Repair Equipment -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="">Repair Equipment

                                                        </label>
                                                        <input type="text" name="Repair_Equipment" class="form-control  @error('Repair_Equipment') is-invalid @enderror" id="Repair_Equipment"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Repair_Equipment') }}" >
                                                        @error('Repair_Equipment')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 69 Research Expenses -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head"
                                                            for="research-expenses">Research Expenses

                                                        </label>
                                                        <input type="text" name="Research_Expenses" class="form-control  @error('Research_Expenses') is-invalid @enderror" id="Research_Expenses"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Research_Expenses') }}" >
                                                        @error('Research_Expenses')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 70 Royalty For Franchise  -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head"
                                                            for="royalty-franchise ">Royalty For Franchise

                                                        </label>
                                                        <input type="text" name="Royalty_For_Franchise" class="form-control  @error('Royalty_For_Franchise') is-invalid @enderror" id="Royalty_For_Franchise"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Royalty_For_Franchise') }}" >
                                                        @error('Royalty_For_Franchise')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 71 Salaries & Wages -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="salaries-wages">Salaries &
                                                            Wages

                                                        </label>
                                                        <input type="text" name="Salaries_Wages" class="form-control  @error('Salaries_Wages') is-invalid @enderror" id="Salaries_Wages"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Salaries_Wages') }}" >
                                                        @error('Salaries_Wages')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 72 Samples Expenses -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="samples-expenses">Samples
                                                            Expenses

                                                        </label>
                                                        <input type="text" name="Samples_Expenses" class="form-control  @error('Samples_Expenses') is-invalid @enderror" id="Samples_Expenses"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Samples_Expenses') }}" >
                                                        @error('Samples_Expenses')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 73 Seasonal Bus Decorations -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head"
                                                            for="seasonal-decorations">Seasonal Bus Decorations

                                                        </label>
                                                        <input type="text" name="Seasonal_Bus_Decorations" class="form-control  @error('Seasonal_Bus_Decorations') is-invalid @enderror" id="Seasonal_Bus_Decorations"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Seasonal_Bus_Decorations') }}" >
                                                        @error('Seasonal_Bus_Decorations')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 74 Signs/Flags/Banners -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head"
                                                            for="sign-flags">Signs/Flags/Banners

                                                        </label>
                                                        <input type="text" name="Signs_Flags_Banners" class="form-control  @error('Signs_Flags_Banners') is-invalid @enderror" id="Signs_Flags_Banners"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Signs_Flags_Banners') }}" >
                                                        @error('Signs_Flags_Banners')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 75 Software & Upgrades -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="software-upgrade">Software
                                                            & Upgrades

                                                        </label>
                                                        <input type="text" name="Software_Upgrades" class="form-control  @error('Software_Upgrades') is-invalid @enderror" id="Software_Upgrades"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Software_Upgrades') }}" >
                                                        @error('Software_Upgrades')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 76 Supplies Shop  -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="supplies-shop ">Supplies
                                                            Shop

                                                        </label>
                                                        <input type="text" name="Supplies_Shop" class="form-control  @error('Supplies_Shop') is-invalid @enderror" id="Supplies_Shop"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Supplies_Shop') }}" >
                                                        @error('Supplies_Shop')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 77 Supplies Office -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="supplies-office">Supplies
                                                            Office

                                                        </label>
                                                        <input type="text" name="Supplies_Office" class="form-control  @error('Supplies_Office') is-invalid @enderror" id="Supplies_Office"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Supplies_Office') }}" >
                                                        @error('Supplies_Office')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 78 Swimming Pool Purchased Or Installed -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="pool-purchased">Swimming
                                                            Pool Purchased Or Installed

                                                        </label>
                                                        <input type="text" name="Swimming_PoolPurchased_Or_Installed" class="form-control  @error('Swimming_PoolPurchased_Or_Installed') is-invalid @enderror" id="Swimming_PoolPurchased_Or_Installed"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Swimming_PoolPurchased_Or_Installed') }}" >
                                                        @error('Swimming_PoolPurchased_Or_Installed')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 79 Swimming Pool Services -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="pool-services">Swimming
                                                            Pool Services

                                                        </label>
                                                        <input type="text" name="Swimming_Pool_Services" class="form-control  @error('Swimming_Pool_Services') is-invalid @enderror" id="Swimming_Pool_Services"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Swimming_Pool_Services') }}" >
                                                        @error('Swimming_Pool_Services')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 80 Tax Estimated FTB Sole Corp LLC  -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="ftb-tax">Tax Estimated FTB
                                                            Sole Corp LLC

                                                        </label>
                                                        <input type="text" name="Tax_Estimated_FTB_Sole_Corp_LLC" class="form-control  @error('Tax_Estimated_FTB_Sole_Corp_LLC') is-invalid @enderror" id="Tax_Estimated_FTB_Sole_Corp_LLC"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Tax_Estimated_FTB_Sole_Corp_LLC') }}" >
                                                        @error('Tax_Estimated_FTB_Sole_Corp_LLC')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 81 Tax Estimated IRS Sole Corp LLC -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="irs-sole">Tax Estimated
                                                            IRS Sole Corp LLC

                                                        </label>
                                                        <input type="text" name="Tax_Estimated_IRS_Sole_Corp_LLC" class="form-control  @error('Tax_Estimated_IRS_Sole_Corp_LLC') is-invalid @enderror" id="Tax_Estimated_IRS_Sole_Corp_LLC"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Tax_Estimated_IRS_Sole_Corp_LLC') }}" >
                                                        @error('Tax_Estimated_IRS_Sole_Corp_LLC')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 82 Tax Real Estate House/Business -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="real-state-tax">Tax Real
                                                            Estate House/Business

                                                        </label>
                                                        <input type="text" name="Tax_Real_Estate_House_Business" class="form-control  @error('Tax_Real_Estate_House_Business') is-invalid @enderror" id="Tax_Real_Estate_House_Business"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Tax_Real_Estate_House_Business') }}" >
                                                        @error('Tax_Real_Estate_House_Business')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 83 Tax Sale That Included In Income  -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="sale-tax">Tax Sale That
                                                            Included In Income

                                                        </label>
                                                        <input type="text" name="Tax_Sale_That_Included_In_Income" class="form-control  @error('Tax_Sale_That_Included_In_Income') is-invalid @enderror" id="Tax_Sale_That_Included_In_Income"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Tax_Sale_That_Included_In_Income') }}" >
                                                        @error('Tax_Sale_That_Included_In_Income')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 84 taxes Payroll (Employer's Portion) -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="payroll">Taxes Payroll
                                                            (Employer's Portion)

                                                        </label>
                                                        <input type="text" name="Taxes_Payroll_Employers_Portion" class="form-control  @error('Taxes_Payroll_Employers_Portion') is-invalid @enderror" id="Taxes_Payroll_Employers_Portion"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Taxes_Payroll_Employers_Portion') }}" >
                                                        @error('Taxes_Payroll_Employers_Portion')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 85 Telephone/FAX/Pager/Cell -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head"
                                                            for="telephone">Telephone/FAX/Pager/Cell

                                                        </label>
                                                        <input type="text" name="Telephone_FAX_Pager_Cell" class="form-control  @error('Telephone_FAX_Pager_Cell') is-invalid @enderror" id="Telephone_FAX_Pager_Cell"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Telephone_FAX_Pager_Cell') }}" >
                                                        @error('Telephone_FAX_Pager_Cell')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 86 Tips With Verifiable Receipts -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="verifiable">Tips With
                                                            Verifiable Receipts

                                                        </label>
                                                        <input type="text" name="Tips_With_Verifiable_Receipts" class="form-control  @error('Tips_With_Verifiable_Receipts') is-invalid @enderror" id="Tips_With_Verifiable_Receipts"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Tips_With_Verifiable_Receipts') }}" >
                                                        @error('Tips_With_Verifiable_Receipts')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 87 Tools, Molds, Dies, Jigs  -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="molds">Tools, Molds, Dies,
                                                            Jigs

                                                        </label>
                                                        <input type="text" name="Tools_Molds_Dies_Jigs" class="form-control  @error('Tools_Molds_Dies_Jigs') is-invalid @enderror" id="Tools_Molds_Dies_Jigs"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Tools_Molds_Dies_Jigs') }}" >
                                                        @error('Tools_Molds_Dies_Jigs')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 88 Towing Services -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="towing-services">Towing
                                                            Services

                                                        </label>
                                                        <input type="text" name="Towing_Services" class="form-control  @error('Towing_Services') is-invalid @enderror" id="Towing_Services"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Towing_Services') }}" >
                                                        @error('Towing_Services')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 89 Trademark & Patent Expenses -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head"
                                                            for="trademark-patent">Trademark & Patent Expenses

                                                        </label>
                                                        <input type="text" name="Trademark_Patent_Expenses" class="form-control  @error('Trademark_Patent_Expenses') is-invalid @enderror" id="Trademark_Patent_Expenses"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Trademark_Patent_Expenses') }}" >
                                                        @error('Trademark_Patent_Expenses')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 90 Travel -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="travel">Travel

                                                        </label>
                                                        <input type="text" name="Travel" class="form-control  @error('Travel') is-invalid @enderror" id="Travel"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Travel') }}" >
                                                        @error('Travel')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 91 Uniform Cleaning Services  -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="uniform-cleaning">Uniform
                                                            Cleaning Services

                                                        </label>
                                                        <input type="text" name="Uniform_Cleaning_Services" class="form-control  @error('Uniform_Cleaning_Services') is-invalid @enderror" id="Uniform_Cleaning_Services"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Uniform_Cleaning_Services') }}" >
                                                        @error('Uniform_Cleaning_Services')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 92 Uniform Purchased -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="">Uniform Purchased

                                                        </label>
                                                        <input type="text" name="Uniform_Purchased" class="form-control  @error('Uniform_Purchased') is-invalid @enderror" id="Uniform_Purchased"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Uniform_Purchased') }}" >
                                                        @error('Uniform_Purchased')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 93 Utilities Electric & Gas  -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="electric-gas">Utilities
                                                            Electric & Gas

                                                        </label>
                                                        <input type="text" name="Utilities_Electric_Gas" class="form-control  @error('Utilities_Electric_Gas') is-invalid @enderror" id="Utilities_Electric_Gas"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Utilities_Electric_Gas') }}" >
                                                        @error('Utilities_Electric_Gas')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 94 Vandalism/Graffiti Clean Up Fees -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head"
                                                            for="graffiti">Vandalism/Graffiti Clean Up Fees

                                                        </label>
                                                        <input type="text" name="Vandalism_Graffiti_Clean_Up_Fees" class="form-control  @error('Vandalism_Graffiti_Clean_Up_Fees') is-invalid @enderror" id="Vandalism_Graffiti_Clean_Up_Fees"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Vandalism_Graffiti_Clean_Up_Fees') }}" >
                                                        @error('Vandalism_Graffiti_Clean_Up_Fees')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 95 Wash Vehicle For Trucking, Taxi Business -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="wash-vehicle">Wash Vehicle
                                                            For Trucking, Taxi Business

                                                        </label>
                                                        <input type="text" name="Wash_Vehicle_For_Trucking_Taxi_Business" class="form-control  @error('Wash_Vehicle_For_Trucking_Taxi_Business') is-invalid @enderror" id="Wash_Vehicle_For_Trucking_Taxi_Business"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Wash_Vehicle_For_Trucking_Taxi_Business') }}" >
                                                        @error('Wash_Vehicle_For_Trucking_Taxi_Business')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 96 Waste Disposal -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="waste-disposal">Waste
                                                            Disposal

                                                        </label>
                                                        <input type="text" name="Waste_Disposal" class="form-control  @error('Waste_Disposal') is-invalid @enderror" id="Waste_Disposal"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Waste_Disposal') }}" >
                                                        @error('Waste_Disposal')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 97 Web Design Fees -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="web-Design">Web Design
                                                            Fees

                                                        </label>
                                                        <input type="text" name="Web_Design_Fees" class="form-control  @error('Web_Design_Fees') is-invalid @enderror" id="Web_Design_Fees"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Web_Design_Fees') }}" >
                                                        @error('Web_Design_Fees')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 98 Web Hosting Fees -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="web-hosting">Web Hosting
                                                            Fees

                                                        </label>
                                                        <input type="text" name="Web_Hosting_Fees" class="form-control  @error('Web_Hosting_Fees') is-invalid @enderror" id="Web_Hosting_Fees"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Web_Hosting_Fees') }}" >
                                                        @error('Web_Hosting_Fees')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 99 other -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="other">Other

                                                        </label>
                                                        <input type="text" name="Other" class="form-control  @error('Other') is-invalid @enderror" id="Other"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Other') }}" >
                                                        @error('Other')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 100 other 2 -->
                                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="other-2">Other 2

                                                        </label>
                                                        <input type="text" name="Other1" class="form-control  @error('Other1') is-invalid @enderror" id="Other1"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Other1') }}" >
                                                        @error('Other1')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @else
                                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 mt-2 mb-2 dependency-tab"
                                            id="profit-input" style="display: none;">
                                            <div class="form-section-divident text-left mb-4">
                                                <h6> If a question does not apply to you, put 0.</h6>
                                            </div>
                                            <div class="row profit-form-control px-2">
                                                <!-- :: input 01 Accounting -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="Accounting">Accounting
                                                        </label>
                                                        <input type="text" name="Accounting" class="form-control  @error('Accounting') is-invalid @enderror" id="Accounting"
                                                            placeholder="Enter Accounting" value="{{ old('Accounting') }}" >
                                                        @error('Accounting')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                        
                                                        
                                                    </div>
                                                </div>
                                                <!-- :: input 02 Advertising -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="advertising"> Advertising
                                                        </label>
                                                        <input type="text" name="Advertising" class="form-control  @error('Advertising') is-invalid @enderror" id="Advertising"
                                                            placeholder="Enter Advertising" value="{{ old('Advertising') }}" >
                                                        @error('Advertising')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                        
                                                    </div>
                                                </div>
                                                <!-- :: input 03 Alarm/Security Installation -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="alarm"> Alarm/Security
                                                            Installation
                                                        </label>
                                                        <input type="text" name="Alarm_Security_Installation" class="form-control  @error('Alarm_Security_Installation') is-invalid @enderror" id="Alarm_Security_Installation"
                                                            placeholder="Enter Alarm/Security Installation" value="{{ old('Alarm_Security_Installation') }}" >
                                                        @error('Alarm_Security_Installation')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 04 Alarm/Security Monitoring -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="a-monitor"> Alarm/Security
                                                            Monitoring
                                                        </label>
                                                        <input type="text" name="Alarm_Security_Monitoring" class="form-control  @error('Alarm_Security_Monitoring') is-invalid @enderror" id="Alarm_Security_Monitoring"
                                                            placeholder="Enter Alarm/Security Monitoring" value="{{ old('Alarm_Security_Monitoring') }}" >
                                                        @error('Alarm_Security_Monitoring')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 05 Appraisal Fees -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="appraisal"> Appraisal Fees
                                                        </label>
                                                        <input type="text" name="Appraisal_Fees" class="form-control  @error('Appraisal_Fees') is-invalid @enderror" id="Appraisal_Fees"
                                                            placeholder="Enter Appraisal_Fees" value="{{ old('Appraisal_Fees') }}" >
                                                        @error('Appraisal_Fees')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 06 Auto Truck Expenses -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="auto-truck">Auto Truck
                                                            Expenses
                                                        </label>
                                                        <input type="text" name="Auto_Truck_Expenses" class="form-control  @error('Auto_Truck_Expenses') is-invalid @enderror" id="Auto_Truck_Expenses"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Auto_Truck_Expenses') }}" >
                                                        @error('Auto_Truck_Expenses')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                        
                                                    </div>
                                                </div>
                                                <!-- :: input 07 Bad Debt Includes In Gross Income -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="gross-debt">Bad Debt
                                                            Includes In Gross Income
                                                        </label>
                                                        <input type="text" name="Bad_Debt_Includes_In_Gross_Income" class="form-control  @error('Bad_Debt_Includes_In_Gross_Income') is-invalid @enderror" id="Bad_Debt_Includes_In_Gross_Income"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Bad_Debt_Includes_In_Gross_Income') }}" >
                                                        @error('Bad_Debt_Includes_In_Gross_Income')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 08 Bank Service Charges -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="bank-charge">Bank Service
                                                            Charges
                                                        </label>
                                                        <input type="text" name="Bank_Service_Charges" class="form-control  @error('Bank_Service_Charges') is-invalid @enderror" id="Bank_Service_Charges"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Bank_Service_Charges') }}" >
                                                        @error('Bank_Service_Charges')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 09 Books, Subscrp & Publications -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="book-publication">Books,
                                                            Subscription & Publications
                                                        </label>
                                                        <input type="text" name="Books_Subscrp_Publications" class="form-control  @error('Books_Subscrp_Publications') is-invalid @enderror" id="Books_Subscrp_Publications"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Books_Subscrp_Publications') }}" >
                                                        @error('Books_Subscrp_Publications')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 10 Client Misc. Gov. Fees Inc. In Income -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="misc-info">Client Misc.
                                                            Gov. Fees Inc. In Income
                                                        </label>
                                                        <input type="text" name="Client_Misc_Gov_Fees_Inc_In_Income" class="form-control  @error('Client_Misc_Gov_Fees_Inc_In_Income') is-invalid @enderror" id="Client_Misc_Gov_Fees_Inc_In_Income"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Client_Misc_Gov_Fees_Inc_In_Income') }}" >
                                                        @error('Client_Misc_Gov_Fees_Inc_In_Income')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 11 Commission/Outside Services -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head"
                                                            for="commission">Commission/Outside Services
                                                        </label>
                                                        <input type="text" name="Commission_Outside_Services" class="form-control  @error('Commission_Outside_Services') is-invalid @enderror" id="Commission_Outside_Services"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Commission_Outside_Services') }}" >
                                                        @error('Commission_Outside_Services')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 12 Credit Card Discount Fees -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="credit-discount">
                                                            Credit Card Discount Fees
                                                        </label>
                                                        <input type="text" name="Credit_Card_Discount_Fees" class="form-control  @error('Credit_Card_Discount_Fees') is-invalid @enderror" id="Credit_Card_Discount_Fees"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Credit_Card_Discount_Fees') }}" >
                                                        @error('Credit_Card_Discount_Fees')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 13 Credit Card Min Usage Fees -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="card-fee">Credit Card Min
                                                            Usage Fees

                                                        </label>
                                                        <input type="text" name="Credit_Card_Min_Usage_Fees" class="form-control  @error('Credit_Card_Min_Usage_Fees') is-invalid @enderror" id="Credit_Card_Min_Usage_Fees"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Credit_Card_Min_Usage_Fees') }}" >
                                                        @error('Credit_Card_Min_Usage_Fees')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 14 Depreciation From Prior Year Income Tax-->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="depreciation">Depreciation
                                                            From Prior Year Income Tax

                                                        </label>
                                                        <input type="text" name="Depreciation_From_Prior_Year_Income_Tax" class="form-control  @error('Depreciation_From_Prior_Year_Income_Tax') is-invalid @enderror" id="Depreciation_From_Prior_Year_Income_Tax"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Depreciation_From_Prior_Year_Income_Tax') }}" >
                                                        @error('Depreciation_From_Prior_Year_Income_Tax')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 15 Domain Name Registration  -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="d-name">Domain Name
                                                            Registration

                                                        </label>
                                                        <input type="text" name="Domain_Name_Registration" class="form-control  @error('Domain_Name_Registration') is-invalid @enderror" id="Domain_Name_Registration"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Domain_Name_Registration') }}" >
                                                        @error('Domain_Name_Registration')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 16 Dues & Membership  -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="membership">Dues &
                                                            Membership

                                                        </label>
                                                        <input type="text" name="Dues_Membership" class="form-control  @error('Dues_Membership') is-invalid @enderror" id="Dues_Membership"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Dues_Membership') }}" >
                                                        @error('Dues_Membership')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 17 Commission/Outside Services -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head"
                                                            for="education-expenses">Education Expenses

                                                        </label>
                                                        <input type="text" name="Education_Expenses" class="form-control  @error('Education_Expenses') is-invalid @enderror" id="Education_Expenses"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Education_Expenses') }}" >
                                                        @error('Education_Expenses')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 18 Employee Benefits -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head"
                                                            for="employee-benefits">Employee Benefits

                                                        </label>
                                                        <input type="text" name="Employee_Benefits" class="form-control  @error('Employee_Benefits') is-invalid @enderror" id="Employee_Benefits"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Employee_Benefits') }}" >
                                                        @error('Employee_Benefits')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 19 Employee/Customer Awards, Prices & Troph -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head"
                                                            for="awards-emp">Employee/Customer Awards, Prices &
                                                            Trophy

                                                        </label>
                                                        <input type="text" name="Employee_Customer_Awards_Prices_Troph" class="form-control  @error('Employee_Customer_Awards_Prices_Troph') is-invalid @enderror" id="Employee_Customer_Awards_Prices_Troph"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Employee_Customer_Awards_Prices_Troph') }}" >
                                                        @error('Employee_Customer_Awards_Prices_Troph')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 20 Entertainment  -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head"
                                                            for="e-entertainment ">Entertainment

                                                        </label>
                                                        <input type="text" name="Entertainment" class="form-control  @error('Entertainment') is-invalid @enderror" id="Entertainment"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Entertainment') }}" >
                                                        @error('Entertainment')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 21 Equipment & Machinery Purchased -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="e-machinery">Equipment &
                                                            Machinery Purchased

                                                        </label>
                                                        <input type="text" name="Equipment_Machinery_Purchased" class="form-control  @error('Equipment_Machinery_Purchased') is-invalid @enderror" id="Equipment_Machinery_Purchased"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Equipment_Machinery_Purchased') }}" >
                                                        @error('Equipment_Machinery_Purchased')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 22 Commission/Outside Services -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="exhibit">Exhibit/Show

                                                        </label>
                                                        <input type="text" name="Exhibit_Show" class="form-control  @error('Exhibit_Show') is-invalid @enderror" id="Exhibit_Show"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Exhibit_Show') }}" >
                                                        @error('Exhibit_Show')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 23 Film & Developing -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="film-dev">Film &
                                                            Developing

                                                        </label>
                                                        <input type="text" name="Film_Developing" class="form-control  @error('Film_Developing') is-invalid @enderror" id="Film_Developing"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Film_Developing') }}" >
                                                        @error('Film_Developing')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 24 Flower & Cards -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="flower-cards">Flower &
                                                            Cards

                                                        </label>
                                                        <input type="text" name="Flower_Cards" class="form-control  @error('Flower_Cards') is-invalid @enderror" id="Flower_Cards"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Flower_Cards') }}" >
                                                        @error('Flower_Cards')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 25 Franchise Fees -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="franchise-fees">Franchise
                                                            Fees

                                                        </label>
                                                        <input type="text" name="Franchise_Fees" class="form-control  @error('Franchise_Fees') is-invalid @enderror" id="Franchise_Fees"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Franchise_Fees') }}" >
                                                        @error('Franchise_Fees')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 26 Fuel (For Trucking Business)  -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="fuel-buss">Fuel (For
                                                            Trucking Business)

                                                        </label>
                                                        <input type="text" name="Fuel" class="form-control  @error('Fuel') is-invalid @enderror" id="Fuel"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Fuel') }}" >
                                                        @error('Fuel')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 27 Furniture & Fixtures  -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head"
                                                            for="furniture-fixtures ">Furniture & Fixtures

                                                        </label>
                                                        <input type="text" name="Furniture_Fixtures" class="form-control  @error('Furniture_Fixtures') is-invalid @enderror" id="Furniture_Fixtures"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Furniture_Fixtures') }}" >
                                                        @error('Furniture_Fixtures')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 28 Gift To Employee/Client  -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="client-gift">Gift To
                                                            Employee/Client

                                                        </label>
                                                        <input type="text" name="Gift_To_Employee_Client" class="form-control  @error('Gift_To_Employee_Client') is-invalid @enderror" id="Gift_To_Employee_Client"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Gift_To_Employee_Client') }}" >
                                                        @error('Gift_To_Employee_Client')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 29 Goodwill -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="goodwill">Goodwill

                                                        </label>
                                                        <input type="text" name="Goodwill" class="form-control  @error('Goodwill') is-invalid @enderror" id="Goodwill"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Goodwill') }}" >
                                                        @error('Goodwill')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 30 Commission/Outside Services -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="graphic-design">Graphic
                                                            Design Fees

                                                        </label>
                                                        <input type="text" name="Graphic_Design_Fees" class="form-control  @error('Graphic_Design_Fees') is-invalid @enderror" id="Graphic_Design_Fees"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Graphic_Design_Fees') }}" >
                                                        @error('Graphic_Design_Fees')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 31 Home Office -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="">Home Office

                                                        </label>
                                                        <input type="text" name="Home_Office" class="form-control  @error('Home_Office') is-invalid @enderror" id="Home_Office"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Home_Office') }}" >
                                                        @error('Home_Office')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 32 Hotel/Motel/Inn -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head"
                                                            for="hotel-motel">Hotel/Motel/Inn

                                                        </label>
                                                        <input type="text" name="Hotel_Motel_Inn" class="form-control  @error('Hotel_Motel_Inn') is-invalid @enderror" id="Hotel_Motel_Inn"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Hotel_Motel_Inn') }}" >
                                                        @error('Hotel_Motel_Inn')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 33 Insurance Bus. Interruption -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head"
                                                            for="insurance-interruption">Insurance Bus.
                                                            Interruption

                                                        </label>
                                                        <input type="text" name="Insurance_Bus_Interruption" class="form-control  @error('Insurance_Bus_Interruption') is-invalid @enderror" id="Insurance_Bus_Interruption"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Insurance_Bus_Interruption') }}" >
                                                        @error('Insurance_Bus_Interruption')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 34 Insurance For Employees -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head"
                                                            for="insurance-employees">Insurance For Employees

                                                        </label>
                                                        <input type="text" name="Insurance_For_Employees" class="form-control  @error('Insurance_For_Employees') is-invalid @enderror" id="Insurance_For_Employees"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Insurance_For_Employees') }}" >
                                                        @error('Insurance_For_Employees')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 35 Insurance Liability -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="">Insurance Liability

                                                        </label>
                                                        <input type="text" name="Insurance_Liability" class="form-control  @error('Insurance_Liability') is-invalid @enderror" id="Insurance_Liability"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Insurance_Liability') }}" >
                                                        @error('Insurance_Liability')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 36 Insurance (Other) -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="Insurance-other">Insurance
                                                            (Other)

                                                        </label>
                                                        <input type="text" name="Insurance_Other" class="form-control  @error('Insurance_Other') is-invalid @enderror" id="Insurance_Other"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Insurance_Other') }}" >
                                                        @error('Insurance_Other')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <!-- :: input 37 Insurance Work. Comp -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="insurance-comp">Insurance
                                                            Work. Company

                                                        </label>
                                                        <input type="text" name="Insurance_Work_Comp" class="form-control  @error('Insurance_Work_Comp') is-invalid @enderror" id="Insurance_Work_Comp"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Insurance_Work_Comp') }}" >
                                                        @error('Insurance_Work_Comp')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 38 Internet Services -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head"
                                                            for="internet-services">Internet Services

                                                        </label>
                                                        <input type="text" name="Internet_Services" class="form-control  @error('Internet_Services') is-invalid @enderror" id="Internet_Services"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Internet_Services') }}" >
                                                        @error('Internet_Services')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 39 Inventory Beginning Of The Year  -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="inventor-year ">Inventory
                                                            Beginning Of The Year

                                                        </label>
                                                        <input type="text" name="Inventory_Beginning_Of_The_Year" class="form-control  @error('Inventory_Beginning_Of_The_Year') is-invalid @enderror" id="Inventory_Beginning_Of_The_Year"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Inventory_Beginning_Of_The_Year') }}" >
                                                        @error('Inventory_Beginning_Of_The_Year')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 40 Commission/Outside Services -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="breakage">Inventory
                                                            Breakage/Spoilage Exp Unreturn

                                                        </label>
                                                        <input type="text" name="Inventory_Breakage_Spoilage_Exp_Unreturn" class="form-control  @error('Inventory_Breakage_Spoilage_Exp_Unreturn') is-invalid @enderror" id="Inventory_Breakage_Spoilage_Exp_Unreturn"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Inventory_Breakage_Spoilage_Exp_Unreturn') }}" >
                                                        @error('Inventory_Breakage_Spoilage_Exp_Unreturn')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 41 Inventory Ending Of The Year  -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="Inventory">Inventory
                                                            Ending Of The Year

                                                        </label>
                                                        <input type="text" name="Inventory_Ending_Of_The_Year" class="form-control  @error('v') is-invalid @enderror" id="Inventory_Ending_Of_The_Year"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Inventory_Ending_Of_The_Year') }}" >
                                                        @error('Inventory_Ending_Of_The_Year')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 42 Inventory Purchases  -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head"
                                                            for="inventory-purchases ">Inventory Purchases

                                                        </label>
                                                        <input type="text" name="Inventory_Purchases" class="form-control  @error('Inventory_Purchases') is-invalid @enderror" id="Inventory_Purchases"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Inventory_Purchases') }}" >
                                                        @error('Inventory_Purchases')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 43 Inventory Theft/Loss -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="theft-loss">Inventory
                                                            Theft/Loss

                                                        </label>
                                                        <input type="text" name="Inventory_Theft_Loss" class="form-control  @error('Inventory_Theft_Loss') is-invalid @enderror" id="Inventory_Theft_Loss"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Inventory_Theft_Loss') }}" >
                                                        @error('Inventory_Theft_Loss')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 44 IRA Regular Or SEP IRA Contributed Year -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="sep-ira">IRA Regular Or
                                                            SEP IRA Contributed Year

                                                        </label>
                                                        <input type="text" name="IRA_Regular_Or_SEP_IRA_Contributed_Year" class="form-control  @error('IRA_Regular_Or_SEP_IRA_Contributed_Year') is-invalid @enderror" id="IRA_Regular_Or_SEP_IRA_Contributed_Year"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('IRA_Regular_Or_SEP_IRA_Contributed_Year') }}" >
                                                        @error('IRA_Regular_Or_SEP_IRA_Contributed_Year')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 45 Landscaping -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="landscaping">Landscaping

                                                        </label>
                                                        <input type="text" name="Landscaping" class="form-control  @error('Landscaping') is-invalid @enderror" id="Landscaping"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Landscaping') }}" >
                                                        @error('Landscaping')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 46 Laundry & Cleaning -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="laundry-cleaning">Laundry
                                                            & Cleaning

                                                        </label>
                                                        <input type="text" name="Laundry_Cleaning" class="form-control  @error('Laundry_Cleaning') is-invalid @enderror" id="Laundry_Cleaning"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Laundry_Cleaning') }}" >
                                                        @error('Laundry_Cleaning')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 47 Legal & Professional Services  -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="legal-professional">Legal
                                                            & Professional Services

                                                        </label>
                                                        <input type="text" name="Legal_Professional_Services" class="form-control  @error('Legal_Professional_Services') is-invalid @enderror" id="Legal_Professional_Services"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Legal_Professional_Services') }}" >
                                                        @error('Legal_Professional_Services')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 48 Licenses & Permits -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="l-permits">Licenses &
                                                            Permits

                                                        </label>
                                                        <input type="text" name="Licenses_Permits" class="form-control  @error('Licenses_Permits') is-invalid @enderror" id="Licenses_Permits"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Licenses_Permits') }}" >
                                                        @error('Licenses_Permits')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 49 Licenses & Permits For Client Projects -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="client-permit">Licenses &
                                                            Permits For Client Projects

                                                        </label>
                                                        <input type="text" name="Licenses_Permits_For_Client_Projects" class="form-control  @error('Licenses_Permits_For_Client_Projects') is-invalid @enderror" id="Licenses_Permits_For_Client_Projects"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Licenses_Permits_For_Client_Projects') }}" >
                                                        @error('Licenses_Permits_For_Client_Projects')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 50 Locksmith/Keys/Lock Boxes -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head"
                                                            for="Locksmith">Locksmith/Keys/Lock Boxes

                                                        </label>
                                                        <input type="text" name="Locksmith_Keys_Lock_Boxes" class="form-control  @error('Locksmith_Keys_Lock_Boxes') is-invalid @enderror" id="Locksmith_Keys_Lock_Boxes"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Locksmith_Keys_Lock_Boxes') }}" >
                                                        @error('Locksmith_Keys_Lock_Boxes')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 51 Meals 50% Bus -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="meals">Meals 50% Bus

                                                        </label>
                                                        <input type="text" name="Meals_50_Bus" class="form-control  @error('Meals_50_Bus') is-invalid @enderror" id="Meals_50_Bus"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Meals_50_Bus') }}" >
                                                        @error('Meals_50_Bus')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 52 Medical Insurance -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="medical-insurance">Medical
                                                            Insurance

                                                        </label>
                                                        <input type="text" name="Medical_Insurance" class="form-control  @error('Medical_Insurance') is-invalid @enderror" id="Medical_Insurance"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Medical_Insurance') }}" >
                                                        @error('Medical_Insurance')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 53 Mileage - Business-->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="mileage-bus">Mileage -
                                                            Business

                                                        </label>
                                                        <input type="text" name="Mileage_Business" class="form-control  @error('Mileage_Business') is-invalid @enderror" id="Mileage_Business"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Mileage_Business') }}" >
                                                        @error('Mileage_Business')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 54 Moving Exp.-->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="moving">Moving Exp.

                                                        </label>
                                                        <input type="text" name="Moving_Exp" class="form-control  @error('Moving_Exp') is-invalid @enderror" id="Moving_Exp"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Moving_Exp') }}" >
                                                        @error('Moving_Exp')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 55 Notary Services -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="notary">Notary Services

                                                        </label>
                                                        <input type="text" name="Notary_Services" class="form-control  @error('Notary_Services') is-invalid @enderror" id="Notary_Services"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Notary_Services') }}" >
                                                        @error('Notary_Services')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 56 Parking  -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="Parking">Parking

                                                        </label>
                                                        <input type="text" name="Parking" class="form-control  @error('Parking') is-invalid @enderror" id="Parking"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Parking') }}" >
                                                        @error('Parking')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 57 Pension Plan -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="pension-plan">Pension Plan

                                                        </label>
                                                        <input type="text" name="Pension_Plan" class="form-control  @error('Pension_Plan') is-invalid @enderror" id="Pension_Plan"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Pension_Plan') }}" >
                                                        @error('Pension_Plan')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 58 Pest Control -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="pest-control">Pest Control

                                                        </label>
                                                        <input type="text" name="Pest_Control" class="form-control  @error('Pest_Control') is-invalid @enderror" id="Pest_Control"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Pest_Control') }}" >
                                                        @error('Pest_Control')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 59 Postage & Delivery Freight/Shipping  -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="c-postage">Postage &
                                                            Delivery Freight/Shipping

                                                        </label>
                                                        <input type="text" name="Postage_Delivery_Freight_Shipping" class="form-control  @error('Postage_Delivery_Freight_Shipping') is-invalid @enderror" id="Postage_Delivery_Freight_Shipping"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Postage_Delivery_Freight_Shipping') }}" >
                                                        @error('Postage_Delivery_Freight_Shipping')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 60 Printing/Reproductions  -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head"
                                                            for="reproductions">Printing/Reproductions

                                                        </label>
                                                        <input type="text" name="Printing_Reproductions" class="form-control  @error('Printing_Reproductions') is-invalid @enderror" id="Printing_Reproductions"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Printing_Reproductions') }}" >
                                                        @error('Printing_Reproductions')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 61 Promotional Exp. Products Or Services -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="promotional">Promotional
                                                            Exp. Products Or Services

                                                        </label>
                                                        <input type="text" name="Promotional_Exp_Products_Or_Services" class="form-control  @error('Promotional_Exp_Products_Or_Services') is-invalid @enderror" id="Promotional_Exp_Products_Or_Services"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Promotional_Exp_Products_Or_Services') }}" >
                                                        @error('Promotional_Exp_Products_Or_Services')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 62 Commission/Outside Services -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="business-location ">Rent
                                                            Business Location

                                                        </label>
                                                        <input type="text" name="Rent_Business_Location" class="form-control  @error('Rent_Business_Location') is-invalid @enderror" id="Rent_Business_Location"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Rent_Business_Location') }}" >
                                                        @error('Rent_Business_Location')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 63 Rent/Furniture -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="rent-f">Rent/Furniture

                                                        </label>
                                                        <input type="text" name="Rent_Furniture" class="form-control  @error('Rent_Furniture') is-invalid @enderror" id="Rent_Furniture"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Rent_Furniture') }}" >
                                                        @error('Rent_Furniture')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 64 Rent/Lease Auto And Or Truck -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="rent-lease">Rent/Lease
                                                            Auto And Or Truck

                                                        </label>
                                                        <input type="text" name="Rent_Lease_Auto_And_Or_Truck" class="form-control  @error('Rent_Lease_Auto_And_Or_Truck') is-invalid @enderror" id="Rent_Lease_Auto_And_Or_Truck"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Rent_Lease_Auto_And_Or_Truck') }}" >
                                                        @error('Rent_Lease_Auto_And_Or_Truck')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 65 Rent/Lease P.O. Box/Storage -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="r-boxes">Rent/Lease P.O.
                                                            Box/Storage

                                                        </label>
                                                        <input type="text" name="Rent_Lease_PO_Box_Storage" class="form-control  @error('Rent_Lease_PO_Box_Storage') is-invalid @enderror" id="Rent_Lease_PO_Box_Storage"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Rent_Lease_PO_Box_Storage') }}" >
                                                        @error('Rent_Lease_PO_Box_Storage')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 66 Rent/Lease Equipment -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head"
                                                            for="lease-equipment">Rent/Lease Equipment

                                                        </label>
                                                        <input type="text" name="Rent_Lease_Equipment" class="form-control  @error('Rent_Lease_Equipment') is-invalid @enderror" id="Rent_Lease_Equipment"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Rent_Lease_Equipment') }}" >
                                                        @error('Rent_Lease_Equipment')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 67 Repair Building -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="repair-building">Repair
                                                            Building

                                                        </label>
                                                        <input type="text" name="Repair_Building" class="form-control  @error('Repair_Building') is-invalid @enderror" id="Repair_Building"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Repair_Building') }}" >
                                                        @error('Repair_Building')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 68 Repair Equipment -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="">Repair Equipment

                                                        </label>
                                                        <input type="text" name="Repair_Equipment" class="form-control  @error('Repair_Equipment') is-invalid @enderror" id="Repair_Equipment"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Repair_Equipment') }}" >
                                                        @error('Repair_Equipment')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 69 Research Expenses -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head"
                                                            for="research-expenses">Research Expenses

                                                        </label>
                                                        <input type="text" name="Research_Expenses" class="form-control  @error('Research_Expenses') is-invalid @enderror" id="Research_Expenses"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Research_Expenses') }}" >
                                                        @error('Research_Expenses')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 70 Royalty For Franchise  -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head"
                                                            for="royalty-franchise ">Royalty For Franchise

                                                        </label>
                                                        <input type="text" name="Royalty_For_Franchise" class="form-control  @error('Royalty_For_Franchise') is-invalid @enderror" id="Royalty_For_Franchise"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Royalty_For_Franchise') }}" >
                                                        @error('Royalty_For_Franchise')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 71 Salaries & Wages -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="salaries-wages">Salaries &
                                                            Wages

                                                        </label>
                                                        <input type="text" name="Salaries_Wages" class="form-control  @error('Salaries_Wages') is-invalid @enderror" id="Salaries_Wages"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Salaries_Wages') }}" >
                                                        @error('Salaries_Wages')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 72 Samples Expenses -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="samples-expenses">Samples
                                                            Expenses

                                                        </label>
                                                        <input type="text" name="Samples_Expenses" class="form-control  @error('Samples_Expenses') is-invalid @enderror" id="Samples_Expenses"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Samples_Expenses') }}" >
                                                        @error('Samples_Expenses')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 73 Seasonal Bus Decorations -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head"
                                                            for="seasonal-decorations">Seasonal Bus Decorations

                                                        </label>
                                                        <input type="text" name="Seasonal_Bus_Decorations" class="form-control  @error('Seasonal_Bus_Decorations') is-invalid @enderror" id="Seasonal_Bus_Decorations"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Seasonal_Bus_Decorations') }}" >
                                                        @error('Seasonal_Bus_Decorations')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 74 Signs/Flags/Banners -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head"
                                                            for="sign-flags">Signs/Flags/Banners

                                                        </label>
                                                        <input type="text" name="Signs_Flags_Banners" class="form-control  @error('Signs_Flags_Banners') is-invalid @enderror" id="Signs_Flags_Banners"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Signs_Flags_Banners') }}" >
                                                        @error('Signs_Flags_Banners')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 75 Software & Upgrades -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="software-upgrade">Software
                                                            & Upgrades

                                                        </label>
                                                        <input type="text" name="Software_Upgrades" class="form-control  @error('Software_Upgrades') is-invalid @enderror" id="Software_Upgrades"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Software_Upgrades') }}" >
                                                        @error('Software_Upgrades')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 76 Supplies Shop  -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="supplies-shop ">Supplies
                                                            Shop

                                                        </label>
                                                        <input type="text" name="Supplies_Shop" class="form-control  @error('Supplies_Shop') is-invalid @enderror" id="Supplies_Shop"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Supplies_Shop') }}" >
                                                        @error('Supplies_Shop')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 77 Supplies Office -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="supplies-office">Supplies
                                                            Office

                                                        </label>
                                                        <input type="text" name="Supplies_Office" class="form-control  @error('Supplies_Office') is-invalid @enderror" id="Supplies_Office"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Supplies_Office') }}" >
                                                        @error('Supplies_Office')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 78 Swimming Pool Purchased Or Installed -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="pool-purchased">Swimming
                                                            Pool Purchased Or Installed

                                                        </label>
                                                        <input type="text" name="Swimming_PoolPurchased_Or_Installed" class="form-control  @error('Swimming_PoolPurchased_Or_Installed') is-invalid @enderror" id="Swimming_PoolPurchased_Or_Installed"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Swimming_PoolPurchased_Or_Installed') }}" >
                                                        @error('Swimming_PoolPurchased_Or_Installed')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 79 Swimming Pool Services -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="pool-services">Swimming
                                                            Pool Services

                                                        </label>
                                                        <input type="text" name="Swimming_Pool_Services" class="form-control  @error('Swimming_Pool_Services') is-invalid @enderror" id="Swimming_Pool_Services"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Swimming_Pool_Services') }}" >
                                                        @error('Swimming_Pool_Services')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 80 Tax Estimated FTB Sole Corp LLC  -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="ftb-tax">Tax Estimated FTB
                                                            Sole Corp LLC

                                                        </label>
                                                        <input type="text" name="Tax_Estimated_FTB_Sole_Corp_LLC" class="form-control  @error('Tax_Estimated_FTB_Sole_Corp_LLC') is-invalid @enderror" id="Tax_Estimated_FTB_Sole_Corp_LLC"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Tax_Estimated_FTB_Sole_Corp_LLC') }}" >
                                                        @error('Tax_Estimated_FTB_Sole_Corp_LLC')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 81 Tax Estimated IRS Sole Corp LLC -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="irs-sole">Tax Estimated
                                                            IRS Sole Corp LLC

                                                        </label>
                                                        <input type="text" name="Tax_Estimated_IRS_Sole_Corp_LLC" class="form-control  @error('Tax_Estimated_IRS_Sole_Corp_LLC') is-invalid @enderror" id="Tax_Estimated_IRS_Sole_Corp_LLC"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Tax_Estimated_IRS_Sole_Corp_LLC') }}" >
                                                        @error('Tax_Estimated_IRS_Sole_Corp_LLC')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 82 Tax Real Estate House/Business -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="real-state-tax">Tax Real
                                                            Estate House/Business

                                                        </label>
                                                        <input type="text" name="Tax_Real_Estate_House_Business" class="form-control  @error('Tax_Real_Estate_House_Business') is-invalid @enderror" id="Tax_Real_Estate_House_Business"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Tax_Real_Estate_House_Business') }}" >
                                                        @error('Tax_Real_Estate_House_Business')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 83 Tax Sale That Included In Income  -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="sale-tax">Tax Sale That
                                                            Included In Income

                                                        </label>
                                                        <input type="text" name="Tax_Sale_That_Included_In_Income" class="form-control  @error('Tax_Sale_That_Included_In_Income') is-invalid @enderror" id="Tax_Sale_That_Included_In_Income"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Tax_Sale_That_Included_In_Income') }}" >
                                                        @error('Tax_Sale_That_Included_In_Income')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 84 taxes Payroll (Employer's Portion) -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="payroll">Taxes Payroll
                                                            (Employer's Portion)

                                                        </label>
                                                        <input type="text" name="Taxes_Payroll_Employers_Portion" class="form-control  @error('Taxes_Payroll_Employers_Portion') is-invalid @enderror" id="Taxes_Payroll_Employers_Portion"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Taxes_Payroll_Employers_Portion') }}" >
                                                        @error('Taxes_Payroll_Employers_Portion')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 85 Telephone/FAX/Pager/Cell -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head"
                                                            for="telephone">Telephone/FAX/Pager/Cell

                                                        </label>
                                                        <input type="text" name="Telephone_FAX_Pager_Cell" class="form-control  @error('Telephone_FAX_Pager_Cell') is-invalid @enderror" id="Telephone_FAX_Pager_Cell"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Telephone_FAX_Pager_Cell') }}" >
                                                        @error('Telephone_FAX_Pager_Cell')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 86 Tips With Verifiable Receipts -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="verifiable">Tips With
                                                            Verifiable Receipts

                                                        </label>
                                                        <input type="text" name="Tips_With_Verifiable_Receipts" class="form-control  @error('Tips_With_Verifiable_Receipts') is-invalid @enderror" id="Tips_With_Verifiable_Receipts"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Tips_With_Verifiable_Receipts') }}" >
                                                        @error('Tips_With_Verifiable_Receipts')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 87 Tools, Molds, Dies, Jigs  -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="molds">Tools, Molds, Dies,
                                                            Jigs

                                                        </label>
                                                        <input type="text" name="Tools_Molds_Dies_Jigs" class="form-control  @error('Tools_Molds_Dies_Jigs') is-invalid @enderror" id="Tools_Molds_Dies_Jigs"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Tools_Molds_Dies_Jigs') }}" >
                                                        @error('Tools_Molds_Dies_Jigs')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 88 Towing Services -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="towing-services">Towing
                                                            Services

                                                        </label>
                                                        <input type="text" name="Towing_Services" class="form-control  @error('Towing_Services') is-invalid @enderror" id="Towing_Services"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Towing_Services') }}" >
                                                        @error('Towing_Services')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 89 Trademark & Patent Expenses -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head"
                                                            for="trademark-patent">Trademark & Patent Expenses

                                                        </label>
                                                        <input type="text" name="Trademark_Patent_Expenses" class="form-control  @error('Trademark_Patent_Expenses') is-invalid @enderror" id="Trademark_Patent_Expenses"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Trademark_Patent_Expenses') }}" >
                                                        @error('Trademark_Patent_Expenses')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 90 Travel -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="travel">Travel

                                                        </label>
                                                        <input type="text" name="Travel" class="form-control  @error('Travel') is-invalid @enderror" id="Travel"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Travel') }}" >
                                                        @error('Travel')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 91 Uniform Cleaning Services  -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="uniform-cleaning">Uniform
                                                            Cleaning Services

                                                        </label>
                                                        <input type="text" name="Uniform_Cleaning_Services" class="form-control  @error('Uniform_Cleaning_Services') is-invalid @enderror" id="Uniform_Cleaning_Services"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Uniform_Cleaning_Services') }}" >
                                                        @error('Uniform_Cleaning_Services')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 92 Uniform Purchased -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="">Uniform Purchased

                                                        </label>
                                                        <input type="text" name="Uniform_Purchased" class="form-control  @error('Uniform_Purchased') is-invalid @enderror" id="Uniform_Purchased"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Uniform_Purchased') }}" >
                                                        @error('Uniform_Purchased')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 93 Utilities Electric & Gas  -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="electric-gas">Utilities
                                                            Electric & Gas

                                                        </label>
                                                        <input type="text" name="Utilities_Electric_Gas" class="form-control  @error('Utilities_Electric_Gas') is-invalid @enderror" id="Utilities_Electric_Gas"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Utilities_Electric_Gas') }}" >
                                                        @error('Utilities_Electric_Gas')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 94 Vandalism/Graffiti Clean Up Fees -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head"
                                                            for="graffiti">Vandalism/Graffiti Clean Up Fees

                                                        </label>
                                                        <input type="text" name="Vandalism_Graffiti_Clean_Up_Fees" class="form-control  @error('Vandalism_Graffiti_Clean_Up_Fees') is-invalid @enderror" id="Vandalism_Graffiti_Clean_Up_Fees"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Vandalism_Graffiti_Clean_Up_Fees') }}" >
                                                        @error('Vandalism_Graffiti_Clean_Up_Fees')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 95 Wash Vehicle For Trucking, Taxi Business -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="wash-vehicle">Wash Vehicle
                                                            For Trucking, Taxi Business

                                                        </label>
                                                        <input type="text" name="Wash_Vehicle_For_Trucking_Taxi_Business" class="form-control  @error('Wash_Vehicle_For_Trucking_Taxi_Business') is-invalid @enderror" id="Wash_Vehicle_For_Trucking_Taxi_Business"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Wash_Vehicle_For_Trucking_Taxi_Business') }}" >
                                                        @error('Wash_Vehicle_For_Trucking_Taxi_Business')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 96 Waste Disposal -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="waste-disposal">Waste
                                                            Disposal

                                                        </label>
                                                        <input type="text" name="Waste_Disposal" class="form-control  @error('Waste_Disposal') is-invalid @enderror" id="Waste_Disposal"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Waste_Disposal') }}" >
                                                        @error('Waste_Disposal')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 97 Web Design Fees -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="web-Design">Web Design
                                                            Fees

                                                        </label>
                                                        <input type="text" name="Web_Design_Fees" class="form-control  @error('Web_Design_Fees') is-invalid @enderror" id="Web_Design_Fees"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Web_Design_Fees') }}" >
                                                        @error('Web_Design_Fees')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 98 Web Hosting Fees -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="web-hosting">Web Hosting
                                                            Fees

                                                        </label>
                                                        <input type="text" name="Web_Hosting_Fees" class="form-control  @error('Web_Hosting_Fees') is-invalid @enderror" id="Web_Hosting_Fees"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Web_Hosting_Fees') }}" >
                                                        @error('Web_Hosting_Fees')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 99 other -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="other">Other

                                                        </label>
                                                        <input type="text" name="Other" class="form-control  @error('Other') is-invalid @enderror" id="Other"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Other') }}" >
                                                        @error('Other')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- :: input 100 other 2 -->
                                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="other-2">Other 2

                                                        </label>
                                                        <input type="text" name="Other1" class="form-control  @error('Other1') is-invalid @enderror" id="Other1"
                                                            placeholder="Enter Auto Truck Expenses" value="{{ old('Other1') }}" >
                                                        @error('Other1')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        <!-- input for select profit loss no end here -->
                                        <!-- long section sub form for vehicle details  -->
                                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 mb-3">
                                            <div class="form-section-highlite mt-3">
                                                <div> Vehicle Information & Expenses:
                                                </div>
                                            </div>
                                        </div>
                                        <!-- long section sub form for vehicle details  -->
                                        <!-- select input for no of vehicle -->
                                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left"
                                            id="vehiclecountSection" style="">
                                            <div class="form-group depend-cnt">
                                                <label class="form-head" for="count-depend">How many motor
                                                    vehicles do you
                                                    have?</label>
                                                <div class="select-group h-40">
                                                    <select class="form-control @error('How_many_motor_vehicles_do_you_have') is-invalid @enderror" id="count-vehicle"
                                                        name="How_many_motor_vehicles_do_you_have">
                                                        @if (old('How_many_motor_vehicles_do_you_have') == '0')
                                                            <option value="0" selected>Select an option</option>
                                                        @else
                                                            <option value="0">Select an option</option>
                                                        @endif

                                                        @if (old('How_many_motor_vehicles_do_you_have') == '1')
                                                            <option value="1" selected>1</option>
                                                        @else
                                                            <option value="1">1</option>
                                                        @endif

                                                        @if (old('How_many_motor_vehicles_do_you_have') == '2')
                                                            <option value="2" selected>2</option>
                                                        @else
                                                            <option value="2">2</option>
                                                        @endif

                                                        @if (old('How_many_motor_vehicles_do_you_have') == '3')
                                                            <option value="3" selected>3</option>
                                                        @else
                                                            <option value="3">3</option>
                                                        @endif

                                                        @if (old('How_many_motor_vehicles_do_you_have') == '4')
                                                            <option value="4" selected>4</option>
                                                        @else
                                                            <option value="4">4</option>
                                                        @endif

                                                        @if (old('How_many_motor_vehicles_do_you_have') == '5')
                                                            <option value="5" selected>5</option>
                                                        @else
                                                            <option value="5">5</option>
                                                        @endif
                                                    </select>
                                                    @error('How_many_motor_vehicles_do_you_have')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <!-- select input for no of vehicle -->
                                        <!-- vehicle fill form -->
                                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 mt-2 mb-2 dependency-tab"
                                            id="vehicle-select" style="">
                                            <!-- <div class="form-section-divident text-left mb-3">
                                                <h6>Vehicle 1</h6>
                                            </div> -->

                                            <div class="row count-investment-form-control px-2">
                                               

                                            </div>
                                        </div>
                                        <!-- vehicle fil form end here -->

                                        <!-- business form end here -->
                                    </div>
                                </div>
                                @endif
                                <!-- self employed and business filling details fill on click radio emd here -->

                                <!--:: section 02 start here -->
                                <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
                                    <div class="form-section-highlite mt-3">
                                        <div>SECTION 2: Dependents</div>
                                    </div>
                                </div>
                                <!-- input radio for dependent  -->
                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 mt-3 text-left "
                                    id="dependentsSectio">
                                    <div class="form-group">
                                        <label class="form-head" for="have-dependent"> Do you have any
                                            dependents;
                                            EXCLUDING yourself and your spouse? <br>
                                            <small>(only include dependents that you claim on your tax
                                                returns)</small>
                                        </label>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input @error('Do_you_have_any_dependents_EXCLUDING_yourself_and_your_spouse') is-invalid @enderror" name="Do_you_have_any_dependents_EXCLUDING_yourself_and_your_spouse" id="dependents-yes" value="have any dependents yes" @if($to->Do_you_have_any_dependents_EXCLUDING_yourself_and_your_spouse == 'have any dependents yes') checked @endif 
                                                        type="radio" >Yes
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input @error('Do_you_have_any_dependents_EXCLUDING_yourself_and_your_spouse') is-invalid @enderror" name="Do_you_have_any_dependents_EXCLUDING_yourself_and_your_spouse" id="dependents-no" value="have any dependents no" @if($to->Do_you_have_any_dependents_EXCLUDING_yourself_and_your_spouse == 'have any dependents no') checked @endif 
                                                        type="radio" >No
                                                @error('Do_you_have_any_dependents_EXCLUDING_yourself_and_your_spouse')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                @enderror
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <!-- :: input for dependent select -->

                                @if( $to->How_many_dependents_do_you_have || $to->Do_you_have_any_dependents_EXCLUDING_yourself_and_your_spouse == 'have any dependents yes' )
                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 mt-3 text-left"
                                    id="dependencycount-section" style="display: block;">
                                    <div class="form-group depend-cnt">
                                        <label class="form-head" for="count-depend">How many dependents do you
                                            have?</label>
                                        <div class="select-group h-40">
                                            <select class="form-control" id="count-depend" name="How_many_dependents_do_you_have">
                                                @if ($to->How_many_dependents_do_you_have == '0')
                                                        <option value="0" selected>Select an option</option>
                                                    @else
                                                        <option value="0">Select an option</option>
                                                    @endif

                                                    @if ($to->How_many_dependents_do_you_have == '1')
                                                        <option value="1" selected>1</option>
                                                    @else
                                                        <option value="1">1</option>
                                                    @endif

                                                    @if ($to->How_many_dependents_do_you_have == '2')
                                                        <option value="2" selected>2</option>
                                                    @else
                                                        <option value="2">2</option>
                                                    @endif

                                                    @if ($to->How_many_dependents_do_you_have == '3')
                                                        <option value="3" selected>3</option>
                                                    @else
                                                        <option value="3">3</option>
                                                    @endif

                                                    @if ($to->How_many_dependents_do_you_have == '4')
                                                        <option value="4" selected>4</option>
                                                    @else
                                                        <option value="4">4</option>
                                                    @endif

                                                    @if ($to->How_many_dependents_do_you_have == '5')
                                                        <option value="5" selected>5</option>
                                                    @else
                                                        <option value="5">5</option>
                                                    @endif
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                @else
                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 mt-3 text-left"
                                    id="dependencycount-section" style="display: none;">
                                    <div class="form-group depend-cnt">
                                        <label class="form-head" for="count-depend">How many dependents do you
                                            have?</label>
                                        <div class="select-group h-40">
                                            <select class="form-control" id="count-depend" name="How_many_dependents_do_you_have">
                                                @if (old('How_many_dependents_do_you_have') == '0')
                                                        <option value="0" selected>Select an option</option>
                                                    @else
                                                        <option value="0">Select an option</option>
                                                    @endif

                                                    @if (old('How_many_dependents_do_you_have') == '1')
                                                        <option value="1" selected>1</option>
                                                    @else
                                                        <option value="1">1</option>
                                                    @endif

                                                    @if (old('How_many_dependents_do_you_have') == '2')
                                                        <option value="2" selected>2</option>
                                                    @else
                                                        <option value="2">2</option>
                                                    @endif

                                                    @if (old('How_many_dependents_do_you_have') == '3')
                                                        <option value="3" selected>3</option>
                                                    @else
                                                        <option value="3">3</option>
                                                    @endif

                                                    @if (old('How_many_dependents_do_you_have') == '4')
                                                        <option value="4" selected>4</option>
                                                    @else
                                                        <option value="4">4</option>
                                                    @endif

                                                    @if (old('How_many_dependents_do_you_have') == '5')
                                                        <option value="5" selected>5</option>
                                                    @else
                                                        <option value="5">5</option>
                                                    @endif
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                @endif


                                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 mt-2 mb-2 dependency-tab"
                                    id="dependentSections" style="">
                                    <!-- This is where the dependent sections will be added dynamically -->
                                </div>

                                <!-- :: dependend count form here -->
                                <!--:: section 02 end here-->
                                <!-- :: section 03 start from here -->
                                <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
                                    <div class="form-section-highlite mt-3 mb-3">
                                        <div>SECTION 3: Tax Questions</div>
                                    </div>
                                </div>
                                <!-- form input start fro here -->
                                <!-- input radio  -->
                                <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6 text-left">
                                    <div class="form-group">
                                        <label class="form-head" for="m-stts">Did your marital status
                                            change during the year?
                                        </label>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input @error('Did_your_marital_status_change_during_the_year') is-invalid @enderror" name="Did_your_marital_status_change_during_the_year" id="ms-yes" value="Yes" @if($to->Did_your_marital_status_change_during_the_year == 'Yes') checked @endif 
                                                        type="radio" >Yes
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input @error('Did_your_marital_status_change_during_the_year') is-invalid @enderror" name="Did_your_marital_status_change_during_the_year" id="ms-no" value="No" @if($to->Did_your_marital_status_change_during_the_year == 'No') checked @endif 
                                                        type="radio" >No
                                            @error('Did_your_marital_status_change_during_the_year')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                            @enderror
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <!-- input radio  -->
                                <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6 text-left">
                                    <div class="form-group">
                                        <label class="form-head" for="change-address">Did your address change
                                            from
                                            last year?
                                        </label>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input @error('Did_your_address_change_from_last_year') is-invalid @enderror" name="Did_your_address_change_from_last_year" id="caddress-yes" value="Yes" @if($to->Did_your_address_change_from_last_year == 'Yes') checked @endif 
                                                        type="radio" >Yes
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input @error('Did_your_address_change_from_last_year') is-invalid @enderror" name="Did_your_address_change_from_last_year" id="caddress-yes" value="No" @if($to->Did_your_address_change_from_last_year == 'No') checked @endif 
                                                        type="radio" >
                                                No
                                                @error('Did_your_address_change_from_last_year')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                @enderror
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <!-- input radio  -->
                                <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6 text-left">
                                    <div class="form-group">
                                        <label class="form-head" for="claimed-taxpayer">Can you be claimed as a
                                            dependent by another tax payer?
                                        </label>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input @error('Can_you_be_claimed_as_a_dependent_by_another_tax_payer') is-invalid @enderror" name="Can_you_be_claimed_as_a_dependent_by_another_tax_payer" id="cldependent-yes" value="Yes" @if($to->Can_you_be_claimed_as_a_dependent_by_another_tax_payer == 'Yes') checked @endif 
                                                        type="radio" >Yes
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input @error('Can_you_be_claimed_as_a_dependent_by_another_tax_payer') is-invalid @enderror" name="Can_you_be_claimed_as_a_dependent_by_another_tax_payer" id="cldependent-no" value="No" @if($to->Can_you_be_claimed_as_a_dependent_by_another_tax_payer == 'No') checked @endif 
                                                        type="radio" >No
                                                @error('Can_you_be_claimed_as_a_dependent_by_another_tax_payer')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                @enderror
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <!-- input radio  -->
                                <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6 text-left">
                                    <div class="form-group">
                                        <label class="form-head" for="home-loan">Did you take out a home
                                            equity loan this year?
                                        </label>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input @error('Did_you_take_out_a_home_equity_loan_this_year') is-invalid @enderror" name="Did_you_take_out_a_home_equity_loan_this_year" id="homeloan-yes" value="Yes" @if($to->Did_you_take_out_a_home_equity_loan_this_year == 'Yes') checked @endif 
                                                        type="radio" >Yes
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input @error('Did_you_take_out_a_home_equity_loan_this_year') is-invalid @enderror" name="Did_you_take_out_a_home_equity_loan_this_year" id="homeloan-no" value="No" @if($to->Did_you_take_out_a_home_equity_loan_this_year == 'No') checked @endif 
                                                        type="radio" >No
                                                @error('Did_you_take_out_a_home_equity_loan_this_year')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                @enderror

                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <!-- input radio  -->
                                <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6 text-left">
                                    <div class="form-group">
                                        <label class="form-head" for="exampletext">Did you acquire or dispose of
                                            any stocks or bonds during the year?
                                        </label>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input @error('Did_you_acquire_or_dispose_of_any_stocks_or_bonds_during_the_yea') is-invalid @enderror" name="Did_you_acquire_or_dispose_of_any_stocks_or_bonds_during_the_yea" id="stocks-yes" value="Yes" @if($to->Did_you_acquire_or_dispose_of_any_stocks_or_bonds_during_the_yea == 'Yes') checked @endif 
                                                        type="radio" >Yes
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input @error('Did_you_acquire_or_dispose_of_any_stocks_or_bonds_during_the_yea') is-invalid @enderror" name="Did_you_acquire_or_dispose_of_any_stocks_or_bonds_during_the_yea" id="stocks-no" value="No" @if($to->Did_you_acquire_or_dispose_of_any_stocks_or_bonds_during_the_yea == 'No') checked @endif 
                                                        type="radio" >No
                                                @error('Did_you_acquire_or_dispose_of_any_stocks_or_bonds_during_the_yea')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                @enderror
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <!-- input radio  -->

                                @if( $to->Upload_Form_1099B || $to->Did_you_acquire_or_dispose_of_any_stocks_or_bonds_during_the_yea == 'Yes' )
                                <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6 text-left" id="upload-stock" style="display:block">
                                    <div class="form-group">
                                        <label class="form-head" for="up-form">Upload Form 1099-B
                                        </label>
                                        <input type="file" class="form-control @error('Upload_Form_1099B') is-invalid @enderror" id="stock-document"
                                            name="Upload_Form_1099B" accept="image/*">

                                        <input type="hidden" class="form-control" value="@if(!empty($to->Upload_Form_1099B)){{old('bank_old$i', $to->Upload_Form_1099B)}}@endif" id="Upload_Form_1099B_old" name="Upload_Form_1099B_old" >
                                        @if(!empty($to->Upload_Form_1099B))
                                        <a target="_blank"  class="" href="@php echo URL::to('/').'/public/'.$to->Upload_Form_1099B; @endphp" style="font-size: 10px;">@php echo URL::to('/').'/public/'.$to->Upload_Form_1099B; @endphp</a>
                                        @endif

                                        @error('Upload_Form_1099B')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                        @enderror
                                    </div>
                                </div>
                                @else
                                <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6 text-left" id="upload-stock" style="display:none">
                                    <div class="form-group">
                                        <label class="form-head" for="up-form">Upload Form 1099-B
                                        </label>
                                        <input type="file" class="form-control" id="stock-document"
                                            name="Upload_Form_1099B" accept="image/*">

                                    </div>
                                </div>
                                @endif

                                <!-- input radio  -->
                                <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6 text-left">
                                    <div class="form-group">
                                        <label class="form-head" for="f-income">Did you have any foreign
                                            income or pay any foreign taxes during the year?
                                        </label>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                 <input class="form-check-input @error('Did_you_have_any_foreign_income_or_pay_any_foreign_taxes_during_') is-invalid @enderror" name="Did_you_have_any_foreign_income_or_pay_any_foreign_taxes_during_" id="foreign-yes" value="Yes" @if($to->Did_you_have_any_foreign_income_or_pay_any_foreign_taxes_during_ == 'Yes') checked @endif 
                                                        type="radio" >Yes
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input @error('Did_you_have_any_foreign_income_or_pay_any_foreign_taxes_during_') is-invalid @enderror" name="Did_you_have_any_foreign_income_or_pay_any_foreign_taxes_during_" id="foreign-no" value="No" @if($to->Did_you_have_any_foreign_income_or_pay_any_foreign_taxes_during_ == 'No') checked @endif 
                                                        type="radio" >No
                                                @error('Did_you_have_any_foreign_income_or_pay_any_foreign_taxes_during_')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                @enderror
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <!-- input radio  -->
                                <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6 text-left">
                                    <div class="form-group">
                                        <label class="form-head" for="exampletext">Did you receive any lump-sum
                                            payment from a pension, profit sharing or 401(k) plan?
                                        </label>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input @error('Did_you_receive_any_lump_sum_payment_from_a_pension_profit_shari') is-invalid @enderror" name="Did_you_receive_any_lump_sum_payment_from_a_pension_profit_shari" id="lump-yes" value="Yes" @if($to->Did_you_receive_any_lump_sum_payment_from_a_pension_profit_shari == 'Yes') checked @endif 
                                                        type="radio" >Yes
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input @error('Did_you_receive_any_lump_sum_payment_from_a_pension_profit_shari') is-invalid @enderror" name="Did_you_receive_any_lump_sum_payment_from_a_pension_profit_shari" id="lump-no" value="No" @if($to->Did_you_receive_any_lump_sum_payment_from_a_pension_profit_shari == 'No') checked @endif 
                                                        type="radio" >No
                                                @error('Did_you_receive_any_lump_sum_payment_from_a_pension_profit_shari')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                @enderror
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <!-- input radio  -->
                                <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6 text-left">
                                    <div class="form-group">
                                        <label class="form-head" for="iraradio">Did you make any withdrawals
                                            from an IRA, Keogh, SIMPLE, or SEP account?
                                        </label>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input @error('Did_you_make_any_withdrawals_from_an_IRA_Keogh_SIMPLE_or_SEP_acc') is-invalid @enderror" name="Did_you_make_any_withdrawals_from_an_IRA_Keogh_SIMPLE_or_SEP_acc" id="ira-yes" value="Yes" @if($to->Did_you_make_any_withdrawals_from_an_IRA_Keogh_SIMPLE_or_SEP_acc == 'Yes') checked @endif 
                                                        type="radio" >Yes
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input @error('Did_you_make_any_withdrawals_from_an_IRA_Keogh_SIMPLE_or_SEP_acc') is-invalid @enderror" name="Did_you_make_any_withdrawals_from_an_IRA_Keogh_SIMPLE_or_SEP_acc" id="ira-no" value="No" @if($to->Did_you_make_any_withdrawals_from_an_IRA_Keogh_SIMPLE_or_SEP_acc == 'No') checked @endif 
                                                        type="radio" >No
                                                @error('Did_you_make_any_withdrawals_from_an_IRA_Keogh_SIMPLE_or_SEP_acc')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                @enderror
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <!-- input radio  -->
                                <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6 text-left">
                                    <div class="form-group">
                                        <label class="form-head" for="iraradio">Did you make any non-cash
                                            charitable contributions (clothing, furniture, etc.)
                                        </label>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input @error('Did_you_make_any_non_cash_charitable_contributions') is-invalid @enderror" name="Did_you_make_any_non_cash_charitable_contributions" id="ncc-yes" value="Yes" @if($to->Did_you_make_any_non_cash_charitable_contributions == 'Yes') checked @endif 
                                                        type="radio" >Yes
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input @error('Did_you_make_any_non_cash_charitable_contributions') is-invalid @enderror" name="Did_you_make_any_non_cash_charitable_contributions" id="ncc-no" value="No" @if($to->Did_you_make_any_non_cash_charitable_contributions == 'No') checked @endif 
                                                        type="radio" >No
                                                @error('Did_you_make_any_non_cash_charitable_contributions')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                @enderror
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <!-- input radio  -->
                                <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6 text-left">
                                    <div class="form-group">
                                        <label class="form-head" for="carradio">Did you use your car on the job
                                            for other than commuting?
                                        </label>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input @error('Did_you_use_your_car_on_the_job_for_other_than_commuting') is-invalid @enderror" name="Did_you_use_your_car_on_the_job_for_other_than_commuting" id="carjob-yes" value="Yes" @if($to->Did_you_use_your_car_on_the_job_for_other_than_commuting == 'Yes') checked @endif 
                                                        type="radio" >Yes
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input @error('Did_you_use_your_car_on_the_job_for_other_than_commuting') is-invalid @enderror" name="Did_you_use_your_car_on_the_job_for_other_than_commuting" id="carjob-no" value="No" @if($to->Did_you_use_your_car_on_the_job_for_other_than_commuting == 'No') checked @endif 
                                                        type="radio" >No
                                                @error('Did_you_use_your_car_on_the_job_for_other_than_commuting')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                @enderror
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <!-- input radio  -->
                                <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6 text-left">
                                    <div class="form-group">
                                        <label class="form-head" for="carradio">Did you work out of town for
                                            part of the year?
                                        </label>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input @error('Did_you_work_out_of_town_for_part_of_the_year') is-invalid @enderror" name="Did_you_work_out_of_town_for_part_of_the_year" id="wtown-yes" value="Yes" @if($to->Did_you_work_out_of_town_for_part_of_the_year == 'Yes') checked @endif 
                                                        type="radio" >Yes
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input @error('Did_you_work_out_of_town_for_part_of_the_year') is-invalid @enderror" name="Did_you_work_out_of_town_for_part_of_the_year" id="wtown-no" value="No" @if($to->Did_you_work_out_of_town_for_part_of_the_year == 'No') checked @endif 
                                                        type="radio" >No
                                                @error('Did_you_work_out_of_town_for_part_of_the_year')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                @enderror
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <!-- input radio  -->
                                <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6 text-left">
                                    <div class="form-group">
                                        <label class="form-head" for="carradio">Did you have any educational
                                            expenses during the year?
                                        </label>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input @error('Did_you_have_any_educational_expenses_during_the_year') is-invalid @enderror" name="Did_you_have_any_educational_expenses_during_the_year" id="expense-yes" value="Yes" @if($to->Did_you_have_any_educational_expenses_during_the_year == 'Yes') checked @endif 
                                                        type="radio" >Yes
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input @error('Did_you_have_any_educational_expenses_during_the_year') is-invalid @enderror" name="Did_you_have_any_educational_expenses_during_the_year" id="expense-no" value="No" @if($to->Did_you_have_any_educational_expenses_during_the_year == 'No') checked @endif 
                                                        type="radio" >No
                                                @error('Did_you_have_any_educational_expenses_during_the_year')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                @enderror
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <!-- input radio  -->
                                <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6 text-left">
                                    <div class="form-group">
                                        <label class="form-head" for="carradio">Did you have any child care
                                            expenses other than Child Support?
                                        </label>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input @error('Did_you_have_any_child_care_expenses_other_than_Child_Support') is-invalid @enderror" name="Did_you_have_any_child_care_expenses_other_than_Child_Support" id="childcare-yes" value="Yes" @if($to->Did_you_have_any_child_care_expenses_other_than_Child_Support == 'Yes') checked @endif 
                                                        type="radio" >Yes
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input @error('Did_you_have_any_child_care_expenses_other_than_Child_Support') is-invalid @enderror" name="Did_you_have_any_child_care_expenses_other_than_Child_Support" id="childcare-no" value="No" @if($to->Did_you_have_any_child_care_expenses_other_than_Child_Support == 'No') checked @endif 
                                                        type="radio" >No
                                                @error('Did_you_have_any_child_care_expenses_other_than_Child_Support')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                @enderror
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <!-- child care expenses record  -->

                                @if( $to->Amount ||  $to->Number_of_children_cared_for ||  $to->Services_Performed_in_your_house ||  $to->Name_address_of_provider || $to->Did_you_have_any_child_care_expenses_other_than_Child_Support == 'Yes' )
                                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 mt-2 mb-2 dependency-tab"
                                    id="childSections" style="display: block;">
                                    <div class="form-section-divident text-left">
                                        <h6>Child Care Expenses</h6>
                                    </div>
                                    <!-- form dependecy  -->
                                    <div class="row dependency-form-control px-2">
                                        <!-- :: input 01 name -->
                                        <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 text-left">
                                            <div class="form-group">
                                                <label class="form-head" for="Amount"> Amount $</label>
                                                <input type="text" name="Amount" class="form-control  @error('Amount') is-invalid @enderror" id="Amount"
                                                    placeholder="Enter Amount" value="@if(!empty($to->Amount)){{old('Amount', $to->Amount)}}@endif" >
                                                @error('Amount')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <!-- :: input 02 Dob -->
                                        <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 text-left">
                                            <div class="form-group">
                                                <label class="form-head" for="children_number"> Number of
                                                    children cared for
                                                </label>
                                                <input type="text" name="Number_of_children_cared_for" class="form-control  @error('Number_of_children_cared_for') is-invalid @enderror" id="Number_of_children_cared_for"
                                                    placeholder="Enter Number of children cared for" value="@if(!empty($to->Number_of_children_cared_for)){{old('Number_of_children_cared_for', $to->Number_of_children_cared_for)}}@endif" >
                                                @error('Number_of_children_cared_for')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <!-- :: input 03 Dob -->
                                        <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 text-left">
                                            <div class="form-group">
                                                <label class="form-head" for="house-service"> Services Performed
                                                    in your house?
                                                </label>
                                                <input type="text" name="Services_Performed_in_your_house" class="form-control  @error('Services_Performed_in_your_house') is-invalid @enderror" id="Services_Performed_in_your_house"
                                                    placeholder="Enter Services Performed
                                                    in your house" value="@if(!empty($to->Services_Performed_in_your_house)){{old('Services_Performed_in_your_house', $to->Services_Performed_in_your_house)}}@endif" >
                                                @error('Services_Performed_in_your_house')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <!-- :: input 04 Dob -->
                                        <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 text-left">
                                            <div class="form-group">
                                                <label class="form-head" for="provider-name"> Name & address of
                                                    provider
                                                </label>
                                                <input type="text" name="Name_address_of_provider" class="form-control  @error('Name_address_of_provider') is-invalid @enderror" id="Name_address_of_provider"
                                                    placeholder="Enter Name & address of provider" value="@if(!empty($to->Name_address_of_provider)){{old('Name_address_of_provider', $to->Name_address_of_provider)}}@endif" >
                                                @error('Name_address_of_provider')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @else
                                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 mt-2 mb-2 dependency-tab"
                                    id="childSections" style="display: none;">
                                    <div class="form-section-divident text-left">
                                        <h6>Child Care Expenses</h6>
                                    </div>
                                    <!-- form dependecy  -->
                                    <div class="row dependency-form-control px-2">
                                        <!-- :: input 01 name -->
                                        <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 text-left">
                                            <div class="form-group">
                                                <label class="form-head" for="Amount"> Amount $</label>
                                                <input type="text" name="Amount" class="form-control  @error('Amount') is-invalid @enderror" id="Amount"
                                                    placeholder="Enter Amount" value="{{ old('Amount') }}">
                                                @error('Amount')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <!-- :: input 02 Dob -->
                                        <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 text-left">
                                            <div class="form-group">
                                                <label class="form-head" for="children_number"> Number of
                                                    children cared for
                                                </label>
                                                <input type="text" name="Number_of_children_cared_for" class="form-control  @error('Number_of_children_cared_for') is-invalid @enderror" id="Number_of_children_cared_for"
                                                    placeholder="Enter Number of children cared for" value="{{ old('Number_of_children_cared_for') }}">
                                                @error('Number_of_children_cared_for')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <!-- :: input 03 Dob -->
                                        <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 text-left">
                                            <div class="form-group">
                                                <label class="form-head" for="house-service"> Services Performed
                                                    in your house?
                                                </label>
                                                <input type="text" name="Services_Performed_in_your_house" class="form-control  @error('Services_Performed_in_your_house') is-invalid @enderror" id="Services_Performed_in_your_house"
                                                    placeholder="Enter Services Performed
                                                    in your house" value="{{ old('Services_Performed_in_your_house') }}">
                                                @error('Services_Performed_in_your_house')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <!-- :: input 04 Dob -->
                                        <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 text-left">
                                            <div class="form-group">
                                                <label class="form-head" for="provider-name"> Name & address of
                                                    provider
                                                </label>
                                                <input type="text" name="Name_address_of_provider" class="form-control  @error('Name_address_of_provider') is-invalid @enderror" id="Name_address_of_provider"
                                                    placeholder="Enter Name & address of provider" value="{{ old('Name_address_of_provider') }}">
                                                @error('Name_address_of_provider')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                <!-- child care expenses end here -->
                                <!-- input radio  -->
                                <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6 text-left">
                                    <div class="form-group">
                                        <label class="form-head" for="carradio">Are you, your spouse, and all
                                            dependents covered by health insurance?
                                        </label>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input @error('Are_you_your_spouse_and_all_dependents_covered_by_health_insuran') is-invalid @enderror" name="Are_you_your_spouse_and_all_dependents_covered_by_health_insuran" id="insurance-yes" value="Yes" @if($to->Are_you_your_spouse_and_all_dependents_covered_by_health_insuran == 'Yes') checked @endif 
                                                        type="radio" >Yes
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input @error('Are_you_your_spouse_and_all_dependents_covered_by_health_insuran') is-invalid @enderror" name="Are_you_your_spouse_and_all_dependents_covered_by_health_insuran" id="insurance-partial" value="Partial" @if($to->Are_you_your_spouse_and_all_dependents_covered_by_health_insuran == 'Partial') checked @endif 
                                                        type="radio" >Partial
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input @error('Are_you_your_spouse_and_all_dependents_covered_by_health_insuran') is-invalid @enderror" name="Are_you_your_spouse_and_all_dependents_covered_by_health_insuran" id="insurance-no" value="No" @if($to->Are_you_your_spouse_and_all_dependents_covered_by_health_insuran == 'No') checked @endif 
                                                        type="radio" >No
                                                @error('Are_you_your_spouse_and_all_dependents_covered_by_health_insuran')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <!--:: input health policy document upload  -->

                                @if( $to->Upload_all_1095_or_proof_of_insurance || $to->Are_you_your_spouse_and_all_dependents_covered_by_health_insuran == 'Partial' || $to->Are_you_your_spouse_and_all_dependents_covered_by_health_insuran == 'Yes'  )
                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left" id="health-doc" style="display:block;">
                                    <div class="form-group">
                                        <label class="form-head" for="exampletext">
                                            Upload all 1095 or proof of insurance
                                        </label>
                                        <input type="file" class="form-control @error('Upload_all_1095_or_proof_of_insurance') is-invalid @enderror" id="p-document"
                                            name="Upload_all_1095_or_proof_of_insurance" accept="image/*">

                                        <input type="hidden" class="form-control" value="@if(!empty($to->Upload_all_1095_or_proof_of_insurance)){{old('bank_old$i', $to->Upload_all_1095_or_proof_of_insurance)}}@endif" id="Upload_all_1095_or_proof_of_insurance_old" name="Upload_all_1095_or_proof_of_insurance_old" >
                                        @if(!empty($to->Upload_all_1095_or_proof_of_insurance))
                                        <a target="_blank"  class="" href="@php echo URL::to('/').'/public/'.$to->Upload_all_1095_or_proof_of_insurance; @endphp" style="font-size: 10px;">@php echo URL::to('/').'/public/'.$to->Upload_all_1095_or_proof_of_insurance; @endphp</a>
                                        @endif
                                        
                                        @error('Upload_all_1095_or_proof_of_insurance')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                        @enderror
                                    </div>
                                </div>
                                @else
                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left" id="health-doc" style="display:none;">
                                    <div class="form-group">
                                        <label class="form-head" for="exampletext">
                                            Upload all 1095 or proof of insurance
                                        </label>
                                        <input type="file" class="form-control @error('Upload_all_1095_or_proof_of_insurance') is-invalid @enderror" id="p-document"
                                            name="Upload_all_1095_or_proof_of_insurance" accept="image/*">
                                        @error('Upload_all_1095_or_proof_of_insurance')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                        @enderror
                                    </div>
                                </div>
                                @endif
                                <!-- input health policy document upload end here -->
                                <!-- :: section 03 end here -->

                                <!-- :: section 04 name and date  -->
                                <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
                                    <div class="form-section-highlite mt-3 mb-3">
                                        <div>SECTION 4: Date & Signature</div>
                                    </div>
                                </div>

                                <!-- input for print name   -->
                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                    <div class="form-group">
                                        <label class="form-head" for="FullName"> Print Full Name<span class="red">*</span></label>
                                        <input type="text" class="form-control @error('Print_Full_Name') is-invalid @enderror" name="Print_Full_Name" id="Print_Full_Name"
                                            placeholder="Enter Full Name" value="@if(!empty($to->Print_Full_Name)){{old('Print_Full_Name', $to->Print_Full_Name)}}@endif" >
                                            @error('Print_Full_Name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        
                                    </div>
                                </div>
                                <!-- input for print name   -->
                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                    <div class="form-group">
                                        <label class="form-head" for="FullName"> Date<span class="red">*</span></label>
                                        <input type="date" class="form-control @error('Date') is-invalid @enderror" name="Date" id="Date"
                                            placeholder="Date" value="@if(!empty($to->Date)){{old('Date', $to->Date)}}@endif" >
                                        @error('Date')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- signature pad -->
                                
                                <input type="hidden" name="toid" id="toid" value="@if(!empty($to->id)){{old('toid', $to->id)}}@endif">

                                <input type="hidden" name="browser" id="browser" value="{{ old('browser') }}">
                                <input type="hidden" name="device" id="device" value="{{ old('device') }}">

                                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 mt-4 mb-4">
                                    <div class="row">
                                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 t-end">
                                            <button class="btn f-form-save-btn" type="submit" name="submit" value="function1">Save Progress</button>

                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12 col-sm-12 t-start">
                                            <button class="btn f-form-submit-btn" type="submit" name="submit" value="function2">Submit</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- form submit btn end here -->

                                <!-- section 04 name and date end here -->



                            </div>
                            <!-- main row for form -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>






@endsection
@section('scripts')  
  <script>
    // jQuery(document).ready(function($) {

    //     var canvas = document.getElementById("signature");
    //     var signaturePad = new SignaturePad(canvas);

    //     $('#clear-signature').on('click', function() {
    //         signaturePad.clear();
    //     });

    // });
    </script>

    <!--tab switch function -->
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        // Get references to the tabs and the switch button
        const tab1 = document.querySelector(".f-tab-cnt");
        const tab2 = document.getElementById("tab2");
        // const switchButton = document.getElementById("switch-tab");
        const backButton = document.querySelector(".back-to-tab-one");

        // Function to toggle between the two tabs
        function toggleTabs() {
            if (tab1.style.display === "block" || tab1.style.display === "") {
                tab1.style.display = "none";
                tab2.style.display = "block";
            } else {
                tab1.style.display = "block";
                tab2.style.display = "none";
            }
        }

        // Add a click event listener to the switch button
        // switchButton.addEventListener("click", function(e) {
        //     e.preventDefault();
        //     toggleTabs();
        // });

        // Add a click event listener to the back link
        backButton.addEventListener("click", function(e) {
            e.preventDefault();
            toggleTabs();
        });
    });
    </script>

    <!-- ************** for dependent 01 ****************-->
    <script>
    // Get references to the radio buttons and the select element
    const mJointly = document.getElementById("m-jointly");
    const mSeparately = document.getElementById("m-separately");
    const cSingle = document.getElementById("c-single");
    const hHousehold = document.getElementById("h-household");
    const qWidower = document.getElementById("q-widower");
    const dependenttoSelect = document.getElementById("dependentto-select");

    // Add event listeners to the radio buttons
    mJointly.addEventListener("change", function() {
        if (this.checked) {
            dependenttoSelect.style.display = "block";
        }
    });

    mSeparately.addEventListener("change", function() {
        if (this.checked) {
            dependenttoSelect.style.display = "block";
        }
    });

    cSingle.addEventListener("change", function() {
        if (this.checked) {
            dependenttoSelect.style.display = "none";
        }
    });

    hHousehold.addEventListener("change", function() {
        if (this.checked) {
            dependenttoSelect.style.display = "none";
        }
    });

    qWidower.addEventListener("change", function() {
        if (this.checked) {
            dependenttoSelect.style.display = "none";
        }
    });

    // By default, hide the select element
    // dependenttoSelect.style.display = "none";
    </script>
    <!-- ************** for dependent 01 ****************-->

    <!-- ************** for client emp status****************-->
    <script>
    // Get references to the radio buttons and the select element
    const cWage = document.getElementById("c-wage");
    const selfEmployed = document.getElementById("self-employed");
    const businessOwner = document.getElementById("business-owner");
    const eDisability = document.getElementById("e-disability");
    const eRetired = document.getElementById("e-retired");
    const w2Select = document.getElementById("w2-select");
    const w2Yes = document.getElementById("w2-yes");
    const w2No = document.getElementById("w2-no");
    const irswageYes = document.getElementById("irswage-yes");
    const irswageNo = document.getElementById("irswage-no");
    const wdocSelect = document.getElementById("wdoc-select");
    const longradioSection = document.getElementById("longradio-section");
    const upwdocSelect = document.getElementById("upwdoc-select");
    const longSelect = document.getElementById("long-select");

    // Add event listeners to the radio buttons
    cWage.addEventListener("change", function() {
        if (this.checked) {
            w2Select.style.display = "block";
        }
    });
    cWage.addEventListener("change", function() {
        if (this.checked) {
            longSelect.style.display = "none";
        }
    });

    selfEmployed.addEventListener("change", function() {
        if (this.checked) {
            longradioSection.style.display = "none";
        }
    });
    selfEmployed.addEventListener("change", function() {
        if (this.checked) {
            upwdocSelect.style.display = "none";
        }
    });
    selfEmployed.addEventListener("change", function() {
        if (this.checked) {
            w2Select.style.display = "none";
        }
    });
    selfEmployed.addEventListener("change", function() {
        if (this.checked) {
            wdocSelect.style.display = "none";
        }
    });
    selfEmployed.addEventListener("change", function() {
        if (this.checked) {
            longradioSection.style.display = "none";
            upwdocSelect.style.display = "none";
        }
    });
    selfEmployed.addEventListener("change", function() {
        if (this.checked) {
            upwdocSelect.style.display = "none";
        }
    });
    selfEmployed.addEventListener("change", function() {
        if (this.checked) {
            longSelect.style.display = "block";
        }
    });
    businessOwner.addEventListener("change", function() {
        if (this.checked) {
            longradioSection.style.display = "none";
        }
    });
    businessOwner.addEventListener("change", function() {
        if (this.checked) {
            upwdocSelect.style.display = "none";
        }
    });
    businessOwner.addEventListener("change", function() {
        if (this.checked) {
            w2Select.style.display = "none";
        }
    });
    businessOwner.addEventListener("change", function() {
        if (this.checked) {
            wdocSelect.style.display = "none";
        }
    });
    businessOwner.addEventListener("change", function() {
        if (this.checked) {
            longradioSection.style.display = "none";
            upwdocSelect.style.display = "none";
        }
    });
    businessOwner.addEventListener("change", function() {
        if (this.checked) {
            upwdocSelect.style.display = "none";
        }
    });
    businessOwner.addEventListener("change", function() {
        if (this.checked) {
            longSelect.style.display = "block";
        }
    });

    eDisability.addEventListener("change", function() {
        if (this.checked) {
            longradioSection.style.display = "none";
        }
    });
    eDisability.addEventListener("change", function() {
        if (this.checked) {
            upwdocSelect.style.display = "none";
        }
    });
    eDisability.addEventListener("change", function() {
        if (this.checked) {
            w2Select.style.display = "none";
        }
    });
    eDisability.addEventListener("change", function() {
        if (this.checked) {
            wdocSelect.style.display = "none";
        }
    });
    eDisability.addEventListener("change", function() {
        if (this.checked) {
            longradioSection.style.display = "none";
            upwdocSelect.style.display = "none";
        }
    });
    eDisability.addEventListener("change", function() {
        if (this.checked) {
            upwdocSelect.style.display = "none";
        }
    });
    eDisability.addEventListener("change", function() {
        if (this.checked) {
            longSelect.style.display = "none";
        }
    });

    eRetired.addEventListener("change", function() {
        if (this.checked) {
            longradioSection.style.display = "none";
        }
    });
    eRetired.addEventListener("change", function() {
        if (this.checked) {
            upwdocSelect.style.display = "none";
        }
    });
    eRetired.addEventListener("change", function() {
        if (this.checked) {
            w2Select.style.display = "none";
        }
    });
    eRetired.addEventListener("change", function() {
        if (this.checked) {
            wdocSelect.style.display = "none";
        }
    });
    eRetired.addEventListener("change", function() {
        if (this.checked) {
            longradioSection.style.display = "none";
            upwdocSelect.style.display = "none";
        }
    });
    eRetired.addEventListener("change", function() {
        if (this.checked) {
            upwdocSelect.style.display = "none";
        }
    });
    eRetired.addEventListener("change", function() {
        if (this.checked) {
            longSelect.style.display = "none";
        }
    });
    w2Yes.addEventListener("change", function() {
        if (this.checked) {
            wdocSelect.style.display = "block";
        }
    });


    w2No.addEventListener("change", function() {
        if (this.checked) {
            wdocSelect.style.display = "none";
        }
    });
    w2Yes.addEventListener("change", function() {
        if (this.checked) {
            longradioSection.style.display = "none";
            upwdocSelect.style.display = "none";
        }
    });


    w2No.addEventListener("change", function() {
        if (this.checked) {
            longradioSection.style.display = "block";
        }
    });

    irswageYes.addEventListener("change", function() {
        if (this.checked) {
            upwdocSelect.style.display = "none";
        }
    });


    irswageNo.addEventListener("change", function() {
        if (this.checked) {
            upwdocSelect.style.display = "block";
        }
    });


    // By default, hide the select element
    // w2Select.style.display = "none";
    // wdocSelect.style.display = "none";
    // longradioSection.style.display = "none";
    // upwdocSelect.style.display = "none";
    // longSelect.style.display = "none";
    </script>
    <!-- ************** for client emp status ****************-->
    <!-- :: Script for dependent select section -->
    <script>
    const dependentsYes = document.getElementById("dependents-yes");
    const dependentsNo = document.getElementById("dependents-no");
    const dependencycountSection = document.getElementById("dependencycount-section");
    const dependentSections = document.getElementById("dependentSections");

    dependentsYes.addEventListener("change", function() {
        if (this.checked) {
            dependencycountSection.style.display = "block";
        }
    });

    dependentsNo.addEventListener("change", function() {
        if (this.checked) {
            dependencycountSection.style.display = "none";
        }
    });
    dependentsNo.addEventListener("change", function() {
        if (this.checked) {
            dependentSections.style.display = "none";
        }
    });

    // dependencycountSection.style.display = "none";
    </script>
    <!-- Script for dependent select section end -->
    <!-- :: script for count dependent section -->
    <script>
    $(document).ready(function() {
        // Hide the dependent sections by default
        $("#dependentSections").hide();

        // Function to show/hide dependent sections based on the selected number of dependents
        $("#count-depend").change(function() {
            var selectedCount = parseInt($(this).val());
            $("#dependentSections").empty();

            for (var i = 1; i <= selectedCount; i++) {
                var dependentSection = `
                    <div class="form-section-divident text-left">
                        <h6>Dependent ${i}</h6>
                    </div>
                    <!-- form dependency -->
                    <div class="row dependency-form-control px-2">
                        <!-- :: input 01 name -->
                        <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 text-left">
                            <div class="form-group">
                                <label class="form-head" for="name"> Name </label>
                                <input type="text" class="form-control" id="dependent_name${i}" name="dependent_name${i}"
                                placeholder="Enter your Name" value="{{ old('dependent_name${i}') }}" required>
                            </div>
                        </div>
                        <!-- :: input 02  -->
                        <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 text-left">
                            <div class="form-group">
                                <label class="form-head" for="dob"> Date Of Birth </label>
                                <input type="date" class="form-control" id="dependent_dob${i}" name="dependent_dob${i}"
                                placeholder="Enter your DOB" value="{{ old('dependent_dob${i}') }}" required>
                            </div>
                        </div>
                        <!-- :: input 03 -->
                        <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 text-left">
                            <div class="form-group">
                                <label class="form-head" for="ssn"> SSN </label>
                                <input type="text" class="ssn_valid form-control" id="dependent_ssn${i}" name="dependent_ssn${i}"
                                placeholder="Enter your SSN" value="{{ old('dependent_ssn${i}') }}" required>
                            </div>
                        </div>
                        <!-- :: input 04 -->
                        <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 text-left">
                            <div class="form-group">
                                <label class="form-head" for="Relationship"> Relationship </label>
                                <input type="text" class="form-control" id="dependent_relationaship${i}" name="dependent_relationaship${i}"
                                placeholder="Enter your SSN" value="{{ old('dependent_relationaship${i}') }}" required>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                            <div class="form-group">
                                <label class="form-head" for="documentupload"> Dependent  <small>(Upload Birth Certificate or SSN Card)</small> </label>
                                <input type="file" class="form-control" id="dependent_bc_and_ssn${i}" placeholder="Enter Relationship" name="dependent_bc_and_ssn${i}" accept="image/*" required>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                            <div class="form-group">
                                <label class="form-head" for="uploadrelation"> Dependent  <small>(Upload School records or write a letter if not in school)</small> </label>
                                <input type="file" class="form-control" id="dependent_upload_sr${i}" placeholder="Enter Relationship" name="dependent_upload_sr${i}" accept="image/*" required>
                            </div>
                        </div>
                        
                    </div>
                `;
                $("#dependentSections").append(dependentSection);
            }

            if (selectedCount > 0) {
                $("#dependentSections").show();
            } else {
                $("#dependentSections").hide();
            }
        });
    });
    </script>
    <!-- :: script for stocks and bonds   -->
    <script>
    const stocksYes = document.getElementById("stocks-yes");
    const stocksNo = document.getElementById("stocks-no");
    const uploadStock = document.getElementById("upload-stock");

    stocksYes.addEventListener("change", function() {
        if (this.checked) {
            uploadStock.style.display = "block";
        }
    });


    stocksNo.addEventListener("change", function() {
        if (this.checked) {
            uploadStock.style.display = "none";
        }
    });

    // uploadStock.style.display = "none";
    </script>
    <!-- :: function for child care expenses  -->
    <script>
    const childcareYes = document.getElementById("childcare-yes");
    const childcareNo = document.getElementById("childcare-no");
    const childSections = document.getElementById("childSections");

    childcareYes.addEventListener("change", function() {
        if (this.checked) {
            childSections.style.display = "block";
        }
    });
    childcareNo.addEventListener("change", function() {
        if (this.checked) {
            childSections.style.display = "none";
        }
    });

    // childSections.style.display = "none";
    </script>
    <!-- function for child care expenses end here -->

    <!-- :: health document input upload section  -->
    <script>
    const insuranceYes = document.getElementById("insurance-yes");
    const insurancePartial = document.getElementById("insurance-partial");
    const insuranceNo = document.getElementById("insurance-no");
    const healthDoc = document.getElementById("health-doc");

    insuranceYes.addEventListener("change", function() {
        if (this.checked) {
            healthDoc.style.display = "block";
        }
    });
    insurancePartial.addEventListener("change", function() {
        if (this.checked) {
            healthDoc.style.display = "block";
        }
    });
    insuranceNo.addEventListener("change", function() {
        if (this.checked) {
            healthDoc.style.display = "none";
        }
    });

    // healthDoc.style.display = "none";
    </script>
    <!-- health document input upload section end here -->

    <!-- ::  script for profit  loss statement -->
    <script>
    const profitYes = document.getElementById("profit-yes");
    const profitNo = document.getElementById("profit-no");
    const profitSelect = document.getElementById("profit-select");
    const profitInput = document.getElementById("profit-input");

    profitYes.addEventListener("change", function() {
        if (this.checked) {
            profitSelect.style.display = "block";
        }
    });
    profitYes.addEventListener("change", function() {
        if (this.checked) {
            profitInput.style.display = "none";
        }
    });

    profitNo.addEventListener("change", function() {
        if (this.checked) {
            profitSelect.style.display = "none";
        }
    });
    profitNo.addEventListener("change", function() {
        if (this.checked) {
            profitInput.style.display = "block";
        }
    });
    // profitSelect.style.display = "none";
    // profitInput.style.display = "none";
    </script>
    <!--  script for profit loass ststement end here -->
    <!-- :: script for manage vehicle information -->
    <script>
    $(document).ready(function() {
        // Hide the dependent sections by default
        $("#vehicle-select").hide();

        // Function to show/hide dependent sections based on the selected number of dependents
        $("#count-vehicle").change(function() {
            var selectedCount = parseInt($(this).val());
            $("#vehicle-select").empty();

            for (var i = 1; i <= selectedCount; i++) {
                var vehicleSelect = `
                    <div class="form-section-divident text-left">
                        <h6>Vehicle ${i}</h6>
                    </div>
                    <!-- form vehicle  -->
                    <div class="row count-investment-form-control px-2">
    <!-- :: input 01 Description of vehicle -->
    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
        <div class="form-group">
            <label class="form-head" for="description-vehicle"> Description of vehicle </label>
            <input type="text" class="form-control" name="description_vehicle${i}" id="description_vehicle${i}"
                                    placeholder="Enter description vehicle" value="{{ old('description_vehicle${i}') }}" required >
        </div>
    </div>
    <!-- :: input 02 Is the vehicle used in business or by an employee -->
    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
        <div class="form-group">
            <label class="form-head" for="vehicle-used"> Is the vehicle used in business or by an employee </label>
            <input type="text" class="form-control" name="vehicle_used${i}" id="vehicle_used${i}"
                                    placeholder="Enter vehicle used" value="{{ old('vehicle_used${i}') }}" required >
        </div>
    </div>
    <!-- :: input 03 Cost (including sales tax) -->
    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
        <div class="form-group">
            <label class="form-head" for="cost-vehicle"> Cost (including sales tax) </label>
            <input type="text" class="form-control" name="vehicle_cost${i}" id="vehicle_cost${i}"
                                    placeholder="Enter vehicle cost" value="{{ old('vehicle_cost${i}') }}" required >
        </div>
    </div>
    <!-- :: input 04 Date placed in service -->
    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
        <div class="form-group">
            <label class="form-head" for="service-date"> Date placed in service </label>
            <input type="text" class="form-control" name="service_date${i}" id="service_date${i}"
                                    placeholder="Enter service date" value="{{ old('service_date${i}') }}" required >
        </div>
    </div>
    <!-- :: input 05 Business Miles -->
    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
        <div class="form-group">
            <label class="form-head" for="exampletext"> Business Miles </label>
            <input type="text" class="form-control" name="Business_Miles${i}" id="Business_Miles${i}"
                                    placeholder="Enter Business Miles" value="{{ old('Business_Miles${i}') }}" required >
        </div>
    </div>
    <!-- :: input 06 Commuting miles -->
    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
        <div class="form-group">
            <label class="form-head" for="commuting-miles"> Commuting miles </label>
            <input type="text" class="form-control" name="commuting_miles${i}" id="commuting_miles${i}"
                                    placeholder="Enter commuting miles" value="{{ old('commuting_miles${i}') }}" required >
        </div>
    </div>
    <!-- :: input 07 Other personal use miles -->
    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
        <div class="form-group">
            <label class="form-head" for="other-miles"> Other personal use miles </label>
            <input type="text" class="form-control" name="other_miles${i}" id="other_miles${i}"
                                    placeholder="Enter other miles" value="{{ old('other_miles${i}') }}" required >
        </div>
    </div>
    <!-- :: input 08 total miles driven -->
    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
        <div class="form-group">
            <label class="form-head" for="driven-miles"> Total miles driven </label>
            <input type="text" class="form-control" name="driven_miles${i}" id="driven_miles${i}"
                                    placeholder="Enter driven miles" value="{{ old('driven_miles${i}') }}" required >
        </div>
    </div>
    <!-- :: input 09 Gas & oil expenses -->
    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
        <div class="form-group">
            <label class="form-head" for="oil-expenses"> Gas & oil expenses </label>
            <input type="text" class="form-control" name="oil_expenses${i}" id="oil_expenses${i}"
                                    placeholder="Enter oil expenses" value="{{ old('oil_expenses${i}') }}" required >
        </div>
    </div>
    <!-- :: input 10 Repairs & Maintenance -->
    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
        <div class="form-group">
            <label class="form-head" for="repairs-maintenance"> Repairs & Maintenance </label>
            <input type="text" class="form-control" name="repairs_maintenance${i}" id="repairs_maintenance${i}"
                                    placeholder="Enter repairs maintenance" value="{{ old('repairs_maintenance${i}') }}" required >
        </div>
    </div>
    <!-- :: input 11 auto-insurance -->
    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
        <div class="form-group">
            <label class="form-head" for="auto-insurance"> Auto insurance </label>
            <input type="text" class="form-control" name="auto_insurance${i}" id="auto_insurance${i}"
                                    placeholder="Enter auto insurance" value="{{ old('auto_insurance${i}') }}" required >
        </div>
    </div>
    <!-- :: input 12 auto-insurance -->
    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
        <div class="form-group">
            <label class="form-head" for="licenses-fees"> Registration, licenses, and fees </label>
            <input type="text" class="form-control" name="reg_lf${i}" id="reg_lf${i}"
                                    placeholder="Enter Registration, licenses, and fees" value="{{ old('reg_lf${i}') }}" required >
        </div>
    </div>
    <!-- :: input 13 auto-insurance -->
    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
        <div class="form-group">
            <label class="form-head" for="auto-expenses "> Other auto expenses (identify) </label>
            <input type="text" class="form-control" name="auto_expenses${i}" id="auto_expenses${i}"
                                    placeholder="Enter Other auto expenses" value="{{ old('auto_expenses${i}') }}" required >
        </div>
    </div>
    <!-- :: input 14 Auto rentals -->
    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
        <div class="form-group">
            <label class="form-head" for="auto-rentals"> Auto rentals </label>
            <input type="text" class="form-control" name="auto_rentals${i}" id="auto_rentals${i}"
                                    placeholder="Enter auto rentals" value="{{ old('auto_rentals${i}') }}" required >
        </div>
    </div>
    <!-- :: input 15 Is another car available for person use -->
    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
        <div class="form-group">
            <label class="form-head" for="another-car"> Is another car available for person use </label>
            <input type="text" class="form-control" name="another_car${i}" id="another_car${i}"
                                    placeholder="Enter another car" value="{{ old('another_car${i}') }}" required >
        </div>
    </div>
    <!-- :: input 16  Do you have evidence to support your mileage information -->
    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
        <div class="form-group">
            <label class="form-head" for="evidence-"> Do you have evidence to support your mileage information </label>
            <input type="text" class="form-control" name="evidence${i}" id="evidence${i}"
                                    placeholder="Enter evidence" value="{{ old('evidence${i}') }}" required >
        </div>
    </div>
    <!-- :: input 17  If yes is the evidence written in a log or another place -->
    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
        <div class="form-group">
            <label class="form-head" for="written-evidence"> If yes is the evidence written in a log or another place </label>
            <input type="text" class="form-control" name="written_evidence${i}" id="written_evidence${i}"
                                    placeholder="Enter written evidence" value="{{ old('written_evidence${i}') }}" required >
        </div>
    </div>
</div>
                `;
                $("#vehicle-select").append(vehicleSelect);
            }

            if (selectedCount > 0) {
                $("#vehicle-select").show();
            } else {
                $("#vehicle-select").hide();
            }
        });
    });
    </script>
<script>
    // Add this JavaScript code to capture the browser name
    document.getElementById('browser').value = navigator.userAgent;
</script>
<script>
    document.getElementById('device').value = navigator.userAgent;
</script>
<script>
    // primary phone number should only allow 10 digit numbers that doesn't start with 0 or 1. exclude letters please 
    $('#Main_Contact_Phone_Number').on('input', function() {
        var value = $(this).val().trim();
        
        // Remove non-numeric characters
        value = value.replace(/\D/g, '');
        
        // Ensure the number is not starting with 0 or 1
        if (value.charAt(0) === '0' || value.charAt(0) === '1') {
            value = value.slice(1); // Remove the first character
        }

        // Limit length to 10 characters
        if (value.length > 10) {
            value = value.slice(0, 10);
        }

        $(this).val(value);
    });


    // same for secondary phone number 
    $('#snd_Contact_Phone_Number').on('input', function() {
        var value = $(this).val().trim();
        
        // Remove non-numeric characters
        value = value.replace(/\D/g, '');
        
        // Ensure the number is not starting with 0 or 1
        if (value.charAt(0) === '0' || value.charAt(0) === '1') {
            value = value.slice(1); // Remove the first character
        }

        // Limit length to 10 characters
        if (value.length > 10) {
            value = value.slice(0, 10);
        }

        $(this).val(value);
    });

    // country should only allow letters, exclude numbers please
    $('#Country').on('input', function() {
        var value = $(this).val().trim();
        
        // Remove non-alphabetic characters
        value = value.replace(/[^a-zA-Z]/g, '');

        $(this).val(value);
    });

    //  zip code should only allow 5 digit numbers, exclude letters please
    $('#Zip_Code').on('input', function() {
        var value = $(this).val().trim();
        
        // Remove non-numeric characters
        value = value.replace(/\D/g, '');

        // Limit length to 5 characters
        if (value.length > 5) {
            value = value.slice(0, 5);
        }

        $(this).val(value);
    });

    //  state allows for numbers but it should just be letters 
    $('#State').on('input', function() {
        var value = $(this).val().trim();
        
        // Remove non-letter characters
        value = value.replace(/[^a-zA-Z]/g, '');

        $(this).val(value);
    });

    //  city allows for numbers but it should just be letters 
    $('#City').on('input', function() {
        var value = $(this).val().trim();
        
        // Remove non-letter characters
        value = value.replace(/[^a-zA-Z]/g, '');

        $(this).val(value);
    });

    //  SSN should only allow 9 digit numbers. this one allows letters and no character limit
    $('.ssn_valid').on('input', function() {
        var value = $(this).val().trim();
        
        // Remove non-numeric characters
        value = value.replace(/\D/g, '');

        // Limit length to 9 characters
        if (value.length > 9) {
            value = value.slice(0, 9);
        }

        $(this).val(value);
    });

    
</script>
<script>
window.onload = function() {
    var dateInputs = document.querySelectorAll('.form-control[type="date"]');
    dateInputs.forEach(function(dateInput) {
        dateInput.addEventListener('keydown', function(event) {
            event.preventDefault();
        });
    });
    dateInputs.forEach(function(dateInput) {
        dateInput.addEventListener('touchstart', function(event) {
            event.preventDefault();
        });
    });
    dateInputs.forEach(function(dateInput) {
        dateInput.addEventListener('mousedown', function(event) {
            event.preventDefault();
        });
    });
};
</script>

@endsection