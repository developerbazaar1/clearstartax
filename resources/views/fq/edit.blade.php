@extends('layouts.header')
@section('styles') 
@endsection
@section('content')


<!-- :: client information head -->
<div class="app-title">
    <div class="user-dashboard-welcome">
        <h1>Hello @php echo ucfirst(Auth::user()->name); @endphp</h1>
        <h5 class="mt-10 mb-5px">"Logged in as @php echo Auth::user()->email; @endphp!"
        </h5>
    </div>
    <div class="user-dashboard-welcome-d-image d-none-sm">
        <img class="paymenttop-image" src="{{ URL::asset('assets/img/documents.png') }}">
    </div>
</div>
<!-- :: end client information head -->
<!-- :: fq form start from here -->
<section class="upayment-confirm-section">
    <div class="row justify-content-center">
        <!-- :: tab col start from here -->
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 text-center">
            <!-- :: second tab strat from here -->
            <div class="f-tab-cnt" id="tab2" >
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="float-left">
                            <a href="#" class="back-to-tab-one">
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
                            <h5 class="i-image">Financial Questionnaire</h5>
                        </div>
                        <div class="warning-text mt-3 text-left">
                            <p>Please fill out the financial questionnaire and upload any documents required.
                            </p>
                            <p>You may pause and continue your financial questionnaire anytime by clicking "save
                                progress" at the bottom of the form</p>
                            <h6>Contact us if you need help with the form:</h6>
                            <p class="mb-2"><strong>Phone:</strong> <span><a href="#" class="#">
                                        888-235-0004</a></span></p>
                            <p class="mb-2"><strong>Email:</strong> <span><a href="#"
                                        class="#">info@clearstarttax.com</a></span></p>
                            <p class="mb-2"><strong>Hours:</strong> Monday-Friday 8am-5pm Pacific Standard Time.
                            </p>
                        </div>
                        <!-- :: form start here -->
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
							<form action="{{route('fq-update')}}" method="POST"  enctype="multipart/form-data">
    	    					@csrf
                                <!-- :: form section 01 -->
                                <div class="form-section-highlite mt-3">
                                    <h5">SECTION 1: Personal Information</h5>
                                </div>
                                <div class="row mt-3">
                                    
                                    <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 text-left">
                                        <div class="form-group">
                                            <label class="form-head" for="exampletext"> Last Name : <span class="red">*</span></label>
                                            <input type="text" name="Last_name" class="form-control  @error('Last_name') is-invalid @enderror" id="Last_name"
                                                placeholder="Enter Last name" value="@if(!empty($fq->Last_Name)){{old('Last_name', $fq->Last_Name)}}@endif">
                                            @error('Last_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- :: input 02 -->
                                   <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 text-left">
                                        <div class="form-group">
                                            <label class="form-head" for="exampletext"> First Name : <span class="red">*</span></label>
                                            <input type="text" class="form-control @error('First_name') is-invalid @enderror " name="First_name" id="First_name" value="@if(!empty($fq->First_Name)){{old('First_name', $fq->First_Name)}}@endif"
                                                placeholder="Enter Last name" >
                                            @error('First_name')
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
                                            <input type="date" name="Date_of_birth" value="@if(!empty($fq->Date_Of_Birth)){{old('Date_of_birth', $fq->Date_Of_Birth)}}@endif" class="form-control @error('Date_of_birth') is-invalid @enderror " id="Date_of_birth"
                                                placeholder="Enter Date Of Birth" >
                                            @error('Date_of_birth')
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
                                            <input type="text" name="SSN#" value="@if(!empty($fq->SSN)){{old('SSN#', $fq->SSN)}}@endif"  class="form-control @error('SSN#') is-invalid @enderror " id="SSN#"
                                                placeholder="Enter your SSN " >
                                            @error('SSN#')
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
                                            <input type="text" class="form-control @error('Street_address') is-invalid @enderror " value="@if(!empty($fq->Street_Address)){{old('Street_address', $fq->Street_Address)}}@endif" name="Street_address" id="Street_address"
                                                placeholder="Enter your street address " >
                                            @error('Street_address')
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
                                            <input type="text" name="Address_line_2" class="form-control" id="Address_line_2 "
                                                placeholder="Enter your address " value="@if(!empty($fq->Address_Line_2)){{old('Address_line_2', $fq->Address_Line_2)}}@endif">
                                        </div>
                                    </div>
                                    <!-- :: input 07 -->
                                    <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 text-left">
                                        <div class="form-group">
                                            <label class="form-head" for="exampletext"> City : <span class="red">*</span></label>
                                            <input type="text" name="City" value="@if(!empty($fq->City)){{old('City', $fq->City)}}@endif" class="form-control @error('City') is-invalid @enderror " id="City"
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
                                            <input type="text" name="State" value="@if(!empty($fq->State)){{old('State', $fq->State)}}@endif" class="form-control @error('State') is-invalid @enderror " id="State"
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
                                            <input type="text" name="Zip_code" value="@if(!empty($fq->Zip_Code)){{old('Zip_code', $fq->Zip_Code)}}@endif" class="form-control @error('Zip_code') is-invalid @enderror" id="Zip_code"
                                                placeholder="Enter your zip " >
                                            @error('Zip_code')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- :: input 10 -->
                                    <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 text-left">
                                        <div class="form-group">
                                            <label class="form-head" for="exampletext"> County Of Residence :
                                            <span class="red">*</span></label>
                                            <input type="text" name="Country_of_residence" value="@if(!empty($fq->County_Of_Residence)){{old('Country_of_residence', $fq->County_Of_Residence)}}@endif" class="form-control @error('Country_of_residence') is-invalid @enderror " id="Country_of_residence"
                                                placeholder="Enter your country of residence" >
                                            @error('Country_of_residence')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- :: input 11 -->
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                        <div class="form-group">
                                            <label class="form-head" for="exampletext"> Rent Or Own (eg. share rent,
                                                live with relative, etc. : <span class="red">*</span></label>
                                            <input type="text" name="Rent_or_own" value="@if(!empty($fq->Rent_Or_Own)){{old('Rent_or_own', $fq->Rent_Or_Own)}}@endif" class="form-control @error('Rent_or_own') is-invalid @enderror " id="Rent_or_own"
                                                placeholder="Rent or own" >
                                            @error('Rent_or_own')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- :: input 12 -->
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                        <div class="form-group">
                                            <label class="form-head" for="exampletext"> Driving License <span class="red">*</span></label>
                                            <input type="text" name="Driver_license#" value="@if(!empty($fq->Driver_License)){{old('Driver_license#', $fq->Driver_License)}}@endif" class="form-control @error('Driver_license#') is-invalid @enderror " id="Driver_license#"
                                                placeholder="Enter your driving license number" >
                                            @error('Driver_license#')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- :: input 13 -->
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                        <div class="form-group">
                                            <label class="form-head" for="exampletext"> Primary Phone Number
                                            <span class="red">*</span></label>
                                            <input type="text"  value="@if(!empty($fq->Primary_Phone_Number)){{old('Primary_phone_number', $fq->Primary_Phone_Number)}}@endif" name="Primary_phone_number" class="form-control @error('Primary_phone_number') is-invalid @enderror " id="Primary_phone_number"
                                                placeholder="Enter your primary phone number" >
                                            @error('Primary_phone_number')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- :: input 14 -->
                                   
                                    <!-- :: input 15 -->
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                        <div class="form-group">
                                            <label class="form-head" for="exampletext"> 2nd Contact Phone Number
                                            </label>
                                            <input type="text" name="2nd_contact_phone_number" class="form-control" id="2nd_contact_phone_number" value="@if(!empty($fq->snd_Contact_Phone_Number)){{old('2nd_contact_phone_number', $fq->snd_Contact_Phone_Number)}}@endif"
                                                placeholder="Enter your secondary phone number" >

                                        </div>
                                    </div>

                                    <!-- :: input 16 radio 01 for marital status-->
                                    <div class="col-md-2 col-lg-2 col-sm-12 col-xs-12 text-left">
                                        <div class="form-group">
                                            <label class="form-head" for="exampletext"> Marital Status
                                            <span class="red">*</span></label>
                                            <div class="form-check @error('Marital_status') is-invalid @enderror">
                                                <label class="form-check-label">
                                                    <input class="form-check-input @error('Marital_status') is-invalid @enderror"  type="radio"
                                                        name="Marital_status" id="Marital_status1" value="Single" @if($fq->Marital_Status == 'Single') checked @endif>Single
                                                </label>
                                            </div>
                                            <div class="form-check @error('Marital_status') is-invalid @enderror">
                                                <label class="form-check-label">
                                                    <input class="form-check-input @error('Marital_status') is-invalid @enderror" name="Marital_status" id="Marital_status2" type="radio"
                                                     value="Married"  @if($fq->Marital_Status == 'Married') checked @endif>Married
                                                     @error('Marital_status')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </label>
                                            </div>
                                             
                                        </div>
                                    </div>
                                    <!-- :: input 17 -->
                                    @if($fq->Marital_Status == 'Married')
                                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left"
                                        id="marriedStatusSection">
                                        <div class="form-group">
                                            <label class="form-head" for="exampletext"> Married Filing Status
                                            </label>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" id="Married_Filing_Status1" type="radio"
                                                        name="Married_Filing_Status"
                                                        value="Married Filing Separately" @if($fq->Married_Filing_Status == 'Married Filing Separately') checked @endif>Married Filing Separately
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" id="Married_Filing_Status2" type="radio"
                                                        name="Married_Filing_Status" value="Married Filing Jointly" @if($fq->Married_Filing_Status == 'Married Filing Jointly') checked @endif>Married
                                                    Filing Jointly
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    @else
                                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left"
                                        id="marriedStatusSection" style="display: none;">
                                        <div class="form-group">
                                            <label class="form-head" for="exampletext"> Married Filing Status
                                            </label>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" id="Married_Filing_Status1" type="radio"
                                                        name="Married_Filing_Status"
                                                        value="Married Filing Separately" @if($fq->Married_Filing_Status == 'Married Filing Separately') checked @endif>Married Filing Separately
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" id="Married_Filing_Status2" type="radio"
                                                        name="Married_Filing_Status" value="Married Filing Jointly" @if($fq->Married_Filing_Status == 'Married Filing Jointly') checked @endif>Married
                                                    Filing Jointly
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    <!-- :: input 19 -->
                                    <!-- **************** spouse detail ************ -->

                                    @if($fq->Married_Filing_Status == 'Married Filing Jointly' && $fq->Marital_Status == 'Married')
                                    <div class="row" id="spousesection1a">
                                        <div class="col-md-12" id="spouse-select">
                                            <div class="form-section-highlite mt-3 mb-3">
                                                <div>SECTION 1(a): Spouse Information
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 mt-2 mb-2 dependency-tab"
                                            id="spouse-tab" >
                                            <div class="form-section-divident text-left">
                                                <h6>Spouse Info</h6>
                                            </div>
                                            <div class="row dependency-form-control px-2">
                                                <!-- :: input 01 name -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="firstname">First Name </label>
                                                        <input type="text" class="form-control" name="spouse_first_name" id="spouse_first_name"  value="@if(!empty($fq->spouse_first_name)){{old('spouse_first_name', $fq->spouse_first_name)}}@endif"
                                                            placeholder="Enter first name" >
                                                    </div>
                                                </div>
                                                <!-- :: input 02 last name -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="lastname"> Last Name
                                                        </label>
                                                        <input type="text" class="form-control" name="spouse_last_name" id="spouse_last_name"  value="@if(!empty($fq->spouse_last_name)){{old('spouse_last_name', $fq->spouse_last_name)}}@endif"
                                                            placeholder="Enter last name" >
                                                    </div>
                                                </div>
                                                <!-- :: input 03 Occupation -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="driving-li"> Driver's License
                                                        </label>
                                                        <input type="text" class="form-control" name="spouse_Driver_License" id="spouse_Driver_License"  value="@if(!empty($fq->spouse_Driver_License)){{old('spouse_Driver_License', $fq->spouse_Driver_License)}}@endif"
                                                            placeholder="Enter driver lisence" >
                                                    </div>
                                                </div>
                                                <!-- :: input 04 Dob -->
                                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="SSN"> SSN#
                                                        </label>
                                                        <input type="text" class="form-control" name="spouse_ssn" id="spouse_ssn"
                                                            placeholder="Enter ssn"  value="@if(!empty($fq->spouse_ssn)){{old('spouse_ssn', $fq->spouse_ssn)}}@endif">
                                                    </div>
                                                </div>
                                                <!-- :: input 05 Date Of Birth -->
                                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="dateofbirth"> Date Of Birth
                                                        </label>
                                                        <input type="date" class="form-control" name="spouse_date_of_birth" id="spouse_date_of_birth"  value="@if(!empty($fq->spouse_date_of_birth)){{old('spouse_date_of_birth', $fq->spouse_date_of_birth)}}@endif"
                                                            >
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @else
                                    <div class="row" id="spousesection1a" style="display: none;">
                                        <div class="col-md-12" id="spouse-select">
                                            <div class="form-section-highlite mt-3 mb-3">
                                                <div>SECTION 1(a): Spouse Information
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 mt-2 mb-2 dependency-tab"
                                            id="spouse-tab" >
                                            <div class="form-section-divident text-left">
                                                <h6>Spouse Info</h6>
                                            </div>
                                            <div class="row dependency-form-control px-2">
                                                <!-- :: input 01 name -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="firstname">First Name </label>
                                                        <input type="text" class="form-control" name="spouse_first_name" id="spouse_first_name"  value="@if(!empty($fq->spouse_first_name)){{old('spouse_first_name', $fq->spouse_first_name)}}@endif"
                                                            placeholder="Enter first name" >
                                                    </div>
                                                </div>
                                                <!-- :: input 02 last name -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="lastname"> Last Name
                                                        </label>
                                                        <input type="text" class="form-control" name="spouse_last_name" id="spouse_last_name"  value="@if(!empty($fq->spouse_last_name)){{old('spouse_last_name', $fq->spouse_last_name)}}@endif"
                                                            placeholder="Enter last name" >
                                                    </div>
                                                </div>
                                                <!-- :: input 03 Occupation -->
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="driving-li"> Driver's License
                                                        </label>
                                                        <input type="text" class="form-control" name="spouse_Driver_License" id="spouse_Driver_License"  value="@if(!empty($fq->spouse_Driver_License)){{old('spouse_Driver_License', $fq->spouse_Driver_License)}}@endif"
                                                            placeholder="Enter driver lisence" >
                                                    </div>
                                                </div>
                                                <!-- :: input 04 Dob -->
                                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="SSN"> SSN#
                                                        </label>
                                                        <input type="text" class="form-control" name="spouse_ssn" id="spouse_ssn"
                                                            placeholder="Enter ssn"  value="@if(!empty($fq->spouse_ssn)){{old('spouse_ssn', $fq->spouse_ssn)}}@endif">
                                                    </div>
                                                </div>
                                                <!-- :: input 05 Date Of Birth -->
                                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="dateofbirth"> Date Of Birth
                                                        </label>
                                                        <input type="date" class="form-control" name="spouse_date_of_birth" id="spouse_date_of_birth"  value="@if(!empty($fq->spouse_date_of_birth)){{old('spouse_date_of_birth', $fq->spouse_date_of_birth)}}@endif"
                                                            >
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                        <!-- **************** spouse detail ************ -->
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left"
                                        id="dependentsSection">
                                        <div class="form-group">
                                            <label class="form-head" for="exampletext"> Do you have any dependents;
                                                EXCLUDING yourself and your spouse? <br>
                                                <small>(only include dependents that you claim on your tax
                                                    returns)</small>
                                            <span class="red">*</span></label>
                                            <div class="form-check ">
                                                <label class="form-check-label">
                                                    <input class="form-check-input do_yo_class @error('Do_you_have_any_dependents_EXCLUDING_yourself_and_your_spouse?') is-invalid @enderror"
                                                        type="radio" name="Do_you_have_any_dependents_EXCLUDING_yourself_and_your_spouse?" id="Do_you_have_any_dependents_EXCLUDING_yourself_and_your_spouse?1"
                                                        value="have any dependents yes" @if($fq->Do_you_have_any_dependents_EXCLUDING_yourself_and_your_spouse == 'have any dependents yes') checked @endif>Yes
                                                       
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input @error('Do_you_have_any_dependents_EXCLUDING_yourself_and_your_spouse?') is-invalid @enderror" name="Do_you_have_any_dependents_EXCLUDING_yourself_and_your_spouse?" id="Do_you_have_any_dependents_EXCLUDING_yourself_and_your_spouse?2" type="radio"
                                                     value="have any dependents no" @if($fq->Do_you_have_any_dependents_EXCLUDING_yourself_and_your_spouse == 'have any dependents no') checked @endif>No
                                                     @error('Do_you_have_any_dependents_EXCLUDING_yourself_and_your_spouse?')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- :: input 20 -->
                                    @if($fq->Do_you_have_any_dependents_EXCLUDING_yourself_and_your_spouse == 'have any dependents yes')
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left"
                                        id="dependencyCountSection" style="display: block;">
                                        <div class="form-group depend-cnt">
                                            <label class="form-head" for="count-depend">How many dependents do you
                                                have?</label>
                                            <div class="select-group h-40">
                                                <select class="form-control " id="How_many_dependents_do_you_have" name="How_many_dependents_do_you_have">
                                                  

                                                    @if ($fq->How_many_dependents_do_you_have == '0')
                                                        <option value="0" selected>Select an option</option>
                                                    @else
                                                        <option value="0">Select an option</option>
                                                    @endif

                                                    @if ($fq->How_many_dependents_do_you_have == '1')
                                                        <option value="1" selected>1</option>
                                                    @else
                                                        <option value="1">1</option>
                                                    @endif

                                                    @if ($fq->How_many_dependents_do_you_have == '2')
                                                        <option value="2" selected>2</option>
                                                    @else
                                                        <option value="2">2</option>
                                                    @endif

                                                    @if ($fq->How_many_dependents_do_you_have == '3')
                                                        <option value="3" selected>3</option>
                                                    @else
                                                        <option value="3">3</option>
                                                    @endif

                                                    @if ($fq->How_many_dependents_do_you_have == '4')
                                                        <option value="4" selected>4</option>
                                                    @else
                                                        <option value="4">4</option>
                                                    @endif

                                                    @if ($fq->How_many_dependents_do_you_have == '5')
                                                        <option value="5" selected>5</option>
                                                    @else
                                                        <option value="5">5</option>
                                                    @endif
                                                 
                                                </select>
                                               
                                            </div>
                                        </div>
                                    </div>
                                    @else
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left"
                                        id="dependencyCountSection" style="display: none;">
                                        <div class="form-group depend-cnt">
                                            <label class="form-head" for="count-depend">How many dependents do you
                                                have?</label>
                                            <div class="select-group h-40">
                                                <select class="form-control " id="How_many_dependents_do_you_have" name="How_many_dependents_do_you_have">
                                                  

                                                    @if ($fq->How_many_dependents_do_you_have == '0')
                                                        <option value="0" selected>Select an option</option>
                                                    @else
                                                        <option value="0">Select an option</option>
                                                    @endif

                                                    @if ($fq->How_many_dependents_do_you_have == '1')
                                                        <option value="1" selected>1</option>
                                                    @else
                                                        <option value="1">1</option>
                                                    @endif

                                                    @if ($fq->How_many_dependents_do_you_have == '2')
                                                        <option value="2" selected>2</option>
                                                    @else
                                                        <option value="2">2</option>
                                                    @endif

                                                    @if ($fq->How_many_dependents_do_you_have == '3')
                                                        <option value="3" selected>3</option>
                                                    @else
                                                        <option value="3">3</option>
                                                    @endif

                                                    @if ($fq->How_many_dependents_do_you_have == '4')
                                                        <option value="4" selected>4</option>
                                                    @else
                                                        <option value="4">4</option>
                                                    @endif

                                                    @if ($fq->How_many_dependents_do_you_have == '5')
                                                        <option value="5" selected>5</option>
                                                    @else
                                                        <option value="5">5</option>
                                                    @endif
                                                 
                                                </select>
                                               
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    
                                    @if($fq->How_many_dependents_do_you_have > 0 && $fq->Do_you_have_any_dependents_EXCLUDING_yourself_and_your_spouse == 'have any dependents yes')
                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 mt-2 mb-2 dependency-tab "
                                        id="inputContainer" style="display: block;" >
                                        @php $i = 1; @endphp
                                        @foreach($Fqdependents as $fqdep)
                                        
                                        <div class="form-section-divident text-left">
                                            <h6>Dependent <span id="inputCount">{{$i}}</span></h6>
                                        </div>
                                        <div class="row dependency-form-control px-2" id="dependentno">
                                            <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 text-left">
                                                <div class="form-group">
                                                    <label class="form-head" for="exampletext{{$i}}"> Name </label>
                                                    <input type="text" class="form-control" id="dependent_name{{$i}}" name="dependent_name{{$i}}"
                                                        placeholder="Enter your Name" value="@if(!empty($fqdep->Name)){{old('dependent_name$i', $fqdep->Name)}}@endif" required>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 text-left">
                                                <div class="form-group">
                                                    <label class="form-head" for="exampletext{{$i}}"> Date Of Birth
                                                    </label>
                                                    <input type="date" class="form-control" id="dependent_date_of_birth{{$i}}" name="dependent_date_of_birth{{$i}}" value="@if(!empty($fqdep->Date_Of_Birth)){{old('dependent_date_of_birth$i', $fqdep->Date_Of_Birth)}}@endif"
                                                        placeholder="Enter your DOB" required>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 text-left">
                                                <div class="form-group">
                                                    <label class="form-head" for="exampletext{{$i}}"> SSN
                                                    </label>
                                                    <input type="text" class="form-control" id="dependent_ssn{{$i}}"  name="dependent_ssn{{$i}}"
                                                        placeholder="Enter SSN" value="@if(!empty($fqdep->SSN)){{old('dependent_ssn$i', $fqdep->SSN)}}@endif" required>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 text-left">
                                                <div class="form-group">
                                                    <label class="form-head" for="exampletext{{$i}}"> Relationship
                                                    </label>
                                                    <input type="text" class="form-control" id="dependent_relationship{{$i}}" name="dependent_relationship{{$i}}"
                                                        placeholder="Enter Relationship"  value="@if(!empty($fqdep->Relationship)){{old('dependent_relationship$i', $fqdep->Relationship)}}@endif" required>
                                                </div>
                                            </div>
                                        </div>
                                        @php $i++; @endphp
                                        @endforeach
                                        
                                    </div>  
                                    @else
                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 mt-2 mb-2 dependency-tab "
                                        id="inputContainer" style="display: none;" >
                                        
                                    </div>     
                                    @endif

                                     <!-- **************** sum form head ************ -->
                                    
                                    <!-- **************** sum form head ************ -->
                                    <!-- ::::::section 02::::::: -->
                                    <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
                                        <div class="form-section-highlite mt-3">
                                            <h5">SECTION 2: Employment Information
                                            </h5">
                                        </div>

                                        <div class=" mt-5 mb-2">
                                            <!-- :::input radio -->
                                            <div class="form-group d-flex cnt-justified">
                                                <label class="form-head" for="exampletext"> Client Employment Status
                                                <span class="red">*</span></label>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input " id="Client_employment_status1"
                                                            type="radio" name="Client_employment_status" value="Wage Earner" @if($fq->Client_Employment_Status == 'Wage Earner') checked @endif>Wage
                                                        Earner/ Employee
                                                         
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" id="Client_employment_status2"
                                                            type="radio" name="Client_employment_status"
                                                            value="Self-Employed" @if($fq->Client_Employment_Status == 'Self-Employed') checked @endif >Self-Employed
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" id="Client_employment_status3"
                                                            type="radio" name="Client_employment_status"
                                                            value="Disability" @if($fq->Client_Employment_Status == 'Disability') checked @endif>Disability
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" id="Client_employment_status4"
                                                            type="radio" name="Client_employment_status" value="Retired" @if($fq->Client_Employment_Status == 'Retired') checked @endif>Retired
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input @error('Client_employment_status') is-invalid @enderror" id="Client_employment_status5"
                                                            type="radio" name="Client_employment_status"
                                                            value="Unemployed" @if($fq->Client_Employment_Status == 'Unemployed') checked @endif >Unemployed
                                                            @error('Client_employment_status')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- ::::::section 02::::::: -->
                                    @if($fq->Married_Filing_Status == 'Married Filing Jointly' && $fq->Marital_Status == 'Married')
                                    <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12" id="spousesection2a" >
                                        <div class="form-section-highlite mt-3">
                                            <h5">SECTION 2a: Spouse Employment Information
                                            </h5">
                                        </div>

                                        <div class=" mt-5 mb-2">
                                            <!-- :::input radio -->
                                            <div class="form-group d-flex cnt-justified">
                                                <label class="form-head" for="exampletext"> Spouse Employment Status *
                                                </label>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" id="spouse_employment_status1"
                                                            type="radio" name="spouse_employment_status" value="Self-Employed" @if($fq->spouse_employment_status == 'Self-Employed') checked @endif>
                                                        Self-Employed
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" id="spouse_employment_status2"
                                                            type="radio" name="spouse_employment_status"
                                                            value="Wage Earner" @if($fq->spouse_employment_status == 'Wage Earner') checked @endif>Wage Earner/ Employee
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" id="spouse_employment_status3"
                                                            type="radio" name="spouse_employment_status"
                                                            value="Disability" @if($fq->spouse_employment_status == 'Disability') checked @endif>Disability
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" id="spouse_employment_status4"
                                                            type="radio" name="spouse_employment_status" value="Retired" @if($fq->spouse_employment_status == 'Retired') checked @endif>Retired
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" id="spouse_employment_status5"
                                                            type="radio" name="spouse_employment_status"
                                                            value="Unemployed" @if($fq->spouse_employment_status == 'Unemployed') checked @endif>Unemployed
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @else
                                    <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12" id="spousesection2a" style="display: none;">
                                        <div class="form-section-highlite mt-3">
                                            <h5">SECTION 2a: Spouse Employment Information
                                            </h5">
                                        </div>

                                        <div class=" mt-5 mb-2">
                                            <!-- :::input radio -->
                                            <div class="form-group d-flex cnt-justified">
                                                <label class="form-head" for="exampletext"> Spouse Employment Status *
                                                </label>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" id="spouse_employment_status1"
                                                            type="radio" name="spouse_employment_status" value="Self-Employed" @if(old('spouse_employment_status') == 'Self-Employed') checked @endif>
                                                        Self-Employed
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" id="spouse_employment_status2"
                                                            type="radio" name="spouse_employment_status"
                                                            value="Wage Earner" @if(old('spouse_employment_status') == 'Wage Earner') checked @endif>Wage Earner/ Employee
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" id="spouse_employment_status3"
                                                            type="radio" name="spouse_employment_status"
                                                            value="Disability" @if(old('spouse_employment_status') == 'Disability') checked @endif>Disability
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" id="spouse_employment_status4"
                                                            type="radio" name="spouse_employment_status" value="Retired" @if(old('spouse_employment_status') == 'Retired') checked @endif>Retired
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" id="spouse_employment_status5"
                                                            type="radio" name="spouse_employment_status"
                                                            value="Unemployed" @if(old('spouse_employment_status') == 'Unemployed') checked @endif>Unemployed
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif



                                    <!-- ::::::section 02::::::: -->

                                   <!-- ::::::section 03::::::: -->
                                    <!-- section divident -->
                                    <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 mb-4">
                                        <div class="form-section-highlite mt-3">
                                            <h5">SECTION 3: Personal Asset Information
                                            </h5">
                                        </div>
                                    </div>
                                    <!-- :: input Cash on Hand Amount -->
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                        <div class="form-group">
                                            <label class="form-head" for="exampletext">Cash on Hand Amount <span class="red">*</span></label>
                                            <input type="text" class="form-control @error('Cash_on_hand_amount') is-invalid @enderror" name="Cash_on_hand_amount" id="Cash_on_hand_amount"
                                                placeholder="Enter Amount" value="@if(!empty($fq->Cash_on_Hand_Amount)){{old('Cash_on_hand_amount', $fq->Cash_on_Hand_Amount)}}@endif"
>
                                                @error('Cash_on_hand_amount')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                        </div>
                                    </div>
                                    <!-- :: input How Many Bank Accounts Do You Have -->


                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                        <div class="form-group">
                                            <label class="form-head" for="exampletext">How Many Bank Accounts Do You
                                                Have <span class="red">*</span></label>
                                            <div class="select-group h-40">
                                                <select class="form-control @error('How_many_bank_accounts_do_you_have') is-invalid @enderror" id="How_many_bank_accounts_do_you_have"
                                                    name="How_many_bank_accounts_do_you_have" >
                                                 

                                                    @if ($fq->How_Many_Bank_Accounts_Do_You_Have == '0')
                                                        <option value="0" selected>Select an option</option>
                                                    @else
                                                        <option value="0">Select an option</option>
                                                    @endif

                                                    @if ($fq->How_Many_Bank_Accounts_Do_You_Have == '1')
                                                        <option value="1" selected>1</option>
                                                    @else
                                                        <option value="1">1</option>
                                                    @endif

                                                    @if ($fq->How_Many_Bank_Accounts_Do_You_Have == '2')
                                                        <option value="2" selected>2</option>
                                                    @else
                                                        <option value="2">2</option>
                                                    @endif

                                                    @if ($fq->How_Many_Bank_Accounts_Do_You_Have == '3')
                                                        <option value="3" selected>3</option>
                                                    @else
                                                        <option value="3">3</option>
                                                    @endif

                                                    @if ($fq->How_Many_Bank_Accounts_Do_You_Have == '4')
                                                        <option value="4" selected>4</option>
                                                    @else
                                                        <option value="4">4</option>
                                                    @endif

                                                    @if ($fq->How_Many_Bank_Accounts_Do_You_Have == '5')
                                                        <option value="5" selected>5</option>
                                                    @else
                                                        <option value="5">5</option>
                                                    @endif
                                                </select>
                                                @error('How_many_bank_accounts_do_you_have')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>






                                    @if ($fq->How_Many_Bank_Accounts_Do_You_Have > 0)
                                    <!-- :: input Bank 1 (Upload most recent 3 months of bank statements)  -->
                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 text-left">
                                        <!-- File input fields for bank statements -->
                                        <div id="bankStatementInputs">
                                            @php $i = 1; @endphp
                                            @foreach($Fqbankaccount as $fqbank)
                                            
                                            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                <div class="form-group">
                                                    <label class="form-head" for="bank{{$i}}">Bank {{$i}} <small>(Upload most recent 3 months of bank statements)</small></label>
                                                    <input type="file" class="form-control" id="bank{{$i}}" name="bank{{$i}}" accept="image/*"  >
                                                    <input type="hidden" class="form-control Fqbankaccount_old{{$fqbank->id}}" value="@if(!empty($fqbank->bank)){{old('bank_old$i', $fqbank->bank)}}@endif" id="bank_old{{$i}}" name="bank_old{{$i}}" >
                                                    @if(!empty($fqbank->bank))
                                                    <a target="_blank"  class="Fqbankaccount{{$fqbank->id}}" href="@php echo URL::to('/').'/public/'.$fqbank->bank; @endphp" style="font-size: 10px;">@php echo URL::to('/').'/public/'.$fqbank->bank; @endphp</a><a href="#" class="delete-image-bank ml-3 Fqbankaccount{{$fqbank->id}}" data-id="{{$fqbank->id}}" data-model="Fqbankaccount" style="font-size: 10px;"><b>X</b></a>
                                                    @endif
                                                </div>
                                            </div>
                                            @php $i++; @endphp
                                            @endforeach
                                        </div>
                                    </div>
                                    @else
                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 text-left">
                                        <!-- File input fields for bank statements -->
                                        <div id="bankStatementInputs">
                                            <!--  input fields will be dynamically created -->
                                        </div>
                                    </div>
                                    @endif

                                    <!-- input Can you take a loan against your 401k Account?  -->
                                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                        <div class="form-group">
                                            <label class="form-head" for="exampletext"> Can you take a loan against
                                                your 401k Account?
                                            <span class="red">*</span></label>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input @error('Can_you_take_a_loan_against_your_401k_account') is-invalid @enderror" id="Can_you_take_a_loan_against_your_401k_account1"
                                                        type="radio" name="Can_you_take_a_loan_against_your_401k_account" value="Yes" @if($fq->Can_you_take_a_loan_against_your_401k_Account == 'Yes') checked @endif  >Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input @error('Can_you_take_a_loan_against_your_401k_account') is-invalid @enderror" id="Can_you_take_a_loan_against_your_401k_account2"
                                                        type="radio" name="Can_you_take_a_loan_against_your_401k_account" value="No" @if($fq->Can_you_take_a_loan_against_your_401k_Account == 'No') checked @endif >No
                                                        @error('Can_you_take_a_loan_against_your_401k_account')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- input have any investment-->
                                    <!-- input have any investment-->
                                    <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12 text-left">
                                        <div class="form-group">
                                            <label class="form-head" for="exampletext"> Do You Have Any
                                                Investments?
                                                <br>
                                                <small>(Ex: stocks, bonds, mutual funds, IRA, 401 and all other
                                                    investments/retirement accounts)</small><span class="red">*</span>
                                            </label>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input @error('Do_you_have_any_investments?') is-invalid @enderror" id="have-investment-yes"
                                                        type="radio" name="Do_you_have_any_investments?" value="Yes" @if($fq->Do_You_Have_Any_Investments == 'Yes') checked @endif >Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input @error('Do_you_have_any_investments?') is-invalid @enderror" id="have-investment-no"
                                                        type="radio" name="Do_you_have_any_investments?" value="No" @if($fq->Do_You_Have_Any_Investments == 'No') checked @endif >No
                                                        @error('Do_you_have_any_investments?')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- :: input HHow many type of investments do you have? -->

                                    @if($fq->Do_You_Have_Any_Investments == 'Yes')
                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 text-left"
                                        id="investment-select"  style="display: block;">
                                        <div class="form-group">
                                            <label class="form-head" for="exampletext">How many type of investments
                                                do you have?
                                            </label>
                                            <div class="select-group h-40">
                                                <select class="form-control" id="How_many_type_of_investments_do_you_have"
                                                    name="How_many_type_of_investments_do_you_have?">
                                                    @if ($fq->How_many_type_of_investments_do_you_have  == '0')
                                                        <option value="0" selected>Select an option</option>
                                                    @else
                                                        <option value="0">Select an option</option>
                                                    @endif

                                                    @if ($fq->How_many_type_of_investments_do_you_have == '1')
                                                        <option value="1" selected>1</option>
                                                    @else
                                                        <option value="1">1</option>
                                                    @endif

                                                    @if ($fq->How_many_type_of_investments_do_you_have == '2')
                                                        <option value="2" selected>2</option>
                                                    @else
                                                        <option value="2">2</option>
                                                    @endif

                                                    @if ($fq->How_many_type_of_investments_do_you_have == '3')
                                                        <option value="3" selected>3</option>
                                                    @else
                                                        <option value="3">3</option>
                                                    @endif

                                                    @if ($fq->How_many_type_of_investments_do_you_have == '4')
                                                        <option value="4" selected>4</option>
                                                    @else
                                                        <option value="4">4</option>
                                                    @endif

                                                    @if ($fq->How_many_type_of_investments_do_you_have == '5')
                                                        <option value="5" selected>5</option>
                                                    @else
                                                        <option value="5">5</option>
                                                    @endif
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    @else
                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 text-left"
                                        id="investment-select"  style="display: none;">
                                        <div class="form-group">
                                            <label class="form-head" for="exampletext">How many type of investments
                                                do you have?
                                            </label>
                                            <div class="select-group h-40">
                                                <select class="form-control" id="How_many_type_of_investments_do_you_have"
                                                    name="How_many_type_of_investments_do_you_have?">
                                                    @if ($fq->How_many_type_of_investments_do_you_have  == '0')
                                                        <option value="0" selected>Select an option</option>
                                                    @else
                                                        <option value="0">Select an option</option>
                                                    @endif

                                                    @if ($fq->How_many_type_of_investments_do_you_have == '1')
                                                        <option value="1" selected>1</option>
                                                    @else
                                                        <option value="1">1</option>
                                                    @endif

                                                    @if ($fq->How_many_type_of_investments_do_you_have == '2')
                                                        <option value="2" selected>2</option>
                                                    @else
                                                        <option value="2">2</option>
                                                    @endif

                                                    @if ($fq->How_many_type_of_investments_do_you_have == '3')
                                                        <option value="3" selected>3</option>
                                                    @else
                                                        <option value="3">3</option>
                                                    @endif

                                                    @if ($fq->How_many_type_of_investments_do_you_have == '4')
                                                        <option value="4" selected>4</option>
                                                    @else
                                                        <option value="4">4</option>
                                                    @endif

                                                    @if ($fq->How_many_type_of_investments_do_you_have == '5')
                                                        <option value="5" selected>5</option>
                                                    @else
                                                        <option value="5">5</option>
                                                    @endif
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    <!-- ::::: how many investment filling form :::::: -->
                                    @if($fq->How_many_type_of_investments_do_you_have > 0 && $fq->Do_You_Have_Any_Investments == 'Yes')
                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 mt-2 mb-2 dependency-tab"
                                        id="inputContainerinv" style="display: block;" >
                                        @php $i = 1; @endphp
                                        @foreach($Fqinvestments as $fqinv)
                                        
                                        <div class="form-section-divident text-left mb-3">
                                            <h6>Investment <span id="inputCountinv">{{$i}}</span></h6>
                                        </div>
                                        <div class="row count-investment-form-control px-2">
                                            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                <div class="form-group">
                                                    <label class="form-head" for="exampletext"> Type Of Investment
                                                    </label>
                                                    <input type="text" class="form-control" name="Type_of_investment{{$i}}" id="Type_of_investment{{$i}}"
                                                        placeholder="Enter Type Of Investment" value="@if(!empty($fqinv->Type_of_investment)){{old('Type_of_investment$i', $fqinv->Type_of_investment)}}@endif" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                <div class="form-group">
                                                    <label class="form-head" for="exampletext"> Company Name
                                                    </label>
                                                    <input type="text" class="form-control" name="Company_name{{$i}}" id="Company_name{{$i}}"
                                                        placeholder="Enter Company Name" value="@if(!empty($fqinv->Company_name)){{old('Company_name$i', $fqinv->Company_name)}}@endif" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                <div class="form-group">
                                                    <label class="form-head" for="exampletext"> Current Value
                                                    </label>
                                                    <input type="text" class="form-control" name="Current_value{{$i}}" id="Current_value{{$i}}"
                                                        placeholder="Enter Current Value" value="@if(!empty($fqinv->Current_value)){{old('Current_value$i', $fqinv->Current_value)}}@endif" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                <div class="form-group">
                                                    <label class="form-head" for="exampletext"> Balance
                                                    </label>
                                                    <input type="text" class="form-control" name="Balance{{$i}}" id="Balance{{$i}}"
                                                        placeholder="Enter Balance" value="@if(!empty($fqinv->Balance)){{old('Balance$i', $fqinv->Balance)}}@endif" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                <div class="form-group">
                                                    <label class="form-head" for="exampletext"> Payment
                                                    </label>
                                                    <input type="text" class="form-control" name="Payment{{$i}}" id="Payment{{$i}}"
                                                        placeholder="Enter Payment" value="@if(!empty($fqinv->Payment)){{old('Payment$i', $fqinv->Payment)}}@endif" required>
                                                </div>
                                            </div>
                                        </div>
                                        @php $i++; @endphp
                                        @endforeach
                                    </div>
                                     @else
                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 mt-2 mb-2 dependency-tab"
                                        id="inputContainerinv" style="display: none;" >
                                    </div>
                                    @endif

                                    <!-- ::::::: how many investment have end  -->
                                    <!-- input do you have any credit -->
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                        <div class="form-group">
                                            <label class="form-head" for="exampletext"> Do You Have Any Credit
                                                Cards?
                                            <span class="red">*</span></label>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" id="credit-card-yes"
                                                        type="radio" name="Do_you_have_any_credi_cards?" value="Yes" @if($fq->Do_You_Have_Any_Credit_Cards == 'Yes') checked @endif>Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input @error('Do_you_have_any_credi_cards?') is-invalid @enderror" id="credit-card-no" type="radio"
                                                        name="Do_you_have_any_credi_cards?" value="No" @if($fq->Do_You_Have_Any_Credit_Cards == 'No') checked @endif>No
                                                        @error('Do_you_have_any_credi_cards?')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- input do you have credit count -->

                                    @if($fq->Do_You_Have_Any_Credit_Cards == 'Yes')
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left"
                                        id="credit-card-select" style="display:block;">
                                        <div class="form-group">
                                            <label class="form-head" for="exampletext">How many Credit Cards Do You
                                                Have?
                                            </label>
                                            <div class="select-group h-40">
                                                <select class="form-control" id="count-credit-accounts"
                                                    name="How_many_credit_cards_do_you_have?">
                                                    @if ($fq->How_many_Credit_Cards_Do_You_Have == '0')
                                                        <option value="0" selected>Select an option</option>
                                                    @else
                                                        <option value="0">Select an option</option>
                                                    @endif

                                                    @if ($fq->How_many_Credit_Cards_Do_You_Have == '1')
                                                        <option value="1" selected>1</option>
                                                    @else
                                                        <option value="1">1</option>
                                                    @endif

                                                    @if ($fq->How_many_Credit_Cards_Do_You_Have == '2')
                                                        <option value="2" selected>2</option>
                                                    @else
                                                        <option value="2">2</option>
                                                    @endif

                                                    @if ($fq->How_many_Credit_Cards_Do_You_Have == '3')
                                                        <option value="3" selected>3</option>
                                                    @else
                                                        <option value="3">3</option>
                                                    @endif

                                                    @if ($fq->How_many_Credit_Cards_Do_You_Have == '4')
                                                        <option value="4" selected>4</option>
                                                    @else
                                                        <option value="4">4</option>
                                                    @endif

                                                    @if ($fq->How_many_Credit_Cards_Do_You_Have == '5')
                                                        <option value="5" selected>5</option>
                                                    @else
                                                        <option value="5">5</option>
                                                    @endif
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    @else
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left"
                                        id="credit-card-select" style="display:none">
                                        <div class="form-group">
                                            <label class="form-head" for="exampletext">How many Credit Cards Do You
                                                Have?
                                            </label>
                                            <div class="select-group h-40">
                                                <select class="form-control" id="count-credit-accounts"
                                                    name="How_many_credit_cards_do_you_have?">
                                                    @if ($fq->How_many_Credit_Cards_Do_You_Have == '0')
                                                        <option value="0" selected>Select an option</option>
                                                    @else
                                                        <option value="0">Select an option</option>
                                                    @endif

                                                    @if ($fq->How_many_Credit_Cards_Do_You_Have == '1')
                                                        <option value="1" selected>1</option>
                                                    @else
                                                        <option value="1">1</option>
                                                    @endif

                                                    @if ($fq->How_many_Credit_Cards_Do_You_Have == '2')
                                                        <option value="2" selected>2</option>
                                                    @else
                                                        <option value="2">2</option>
                                                    @endif

                                                    @if ($fq->How_many_Credit_Cards_Do_You_Have == '3')
                                                        <option value="3" selected>3</option>
                                                    @else
                                                        <option value="3">3</option>
                                                    @endif

                                                    @if ($fq->How_many_Credit_Cards_Do_You_Have == '4')
                                                        <option value="4" selected>4</option>
                                                    @else
                                                        <option value="4">4</option>
                                                    @endif

                                                    @if ($fq->How_many_Credit_Cards_Do_You_Have == '5')
                                                        <option value="5" selected>5</option>
                                                    @else
                                                        <option value="5">5</option>
                                                    @endif
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    <!-- :: input Bank 1 (Upload most recent 3 months of bank statements)  -->

                                    @if($fq->How_many_Credit_Cards_Do_You_Have > 0 && $fq->Do_You_Have_Any_Credit_Cards == 'Yes')
                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 text-left">
                                        <!-- File input fields for bank statements -->
                                        <div id="cardStatementInputs" style="display: block;" >
                                            @php $i = 1; @endphp
                                            @foreach($FqCreditcards as $fqcc)
                                       
                                            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                <div class="form-group">
                                                    <label class="form-head" for="Credit Card{{$i}}">Credit Card {{$i}} <small>(Upload Most Recent 3 Months Credit Card Statements)</small></label>
                                                    <input type="file" class="form-control" id="Ccard{{$i}}" name="Credcards{{$i}}" accept="image/*" >
                                                    <input type="hidden" class="form-control FqCreditcards_old{{$fqcc->id}}" value="@if(!empty($fqcc->Creditcards)){{old('Credcards_old$i', $fqcc->Creditcards)}}@endif" id="Credcards_old{{$i}}" name="Credcards_old{{$i}}" >
                                                    <a target="_blank" class="FqCreditcards{{$fqcc->id}}" href="@php echo URL::to('/').'/public/'.$fqcc->Creditcards; @endphp" style="font-size: 10px;">@php echo URL::to('/').'/public/'.$fqcc->Creditcards; @endphp</a><a href="#" class="delete-image-bank ml-3 FqCreditcards{{$fqcc->id}}" data-id="{{$fqcc->id}}" data-model="FqCreditcards" style="font-size: 10px;"><b>X</b></a>
                                                </div>
                                            </div>
                                            @php $i++; @endphp
                                            @endforeach
                                        </div>
                                    </div>
                                    @else
                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 text-left">
                                        <!-- File input fields for bank statements -->
                                        <div id="cardStatementInputs">
                                            <!--  input fields will be dynamically created -->
                                        </div>
                                    </div>
                                    @endif
                                    




                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                        <div class="form-group">
                                            <label class="form-head" for="exampletext"> Do You Have Life Insurance?
                                                (Life insurance policy with cash value - NOT TERM LIFE)
                                            <span class="red">*</span></label>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input @error('Do_you_have_life_insurance?') is-invalid @enderror" id="life-insurance-yes"
                                                        type="radio" name="Do_you_have_life_insurance?" value="Yes" @if($fq->Do_You_Have_Life_Insurance == 'Yes') checked @endif >Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input @error('Do_you_have_life_insurance?') is-invalid @enderror" id="life-insurance-no"
                                                        type="radio" name="Do_you_have_life_insurance?" value="No" @if($fq->Do_You_Have_Life_Insurance == 'No') checked @endif >No
                                                        @error('Do_you_have_life_insurance?')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- input select how many life insurance do you have -->
                                    @if($fq->Do_You_Have_Life_Insurance == 'Yes')
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left"
                                        id="insurance-select" style="display: block;">
                                        <div class="form-group">
                                            <label class="form-head" for="exampletext">How Many Life Insurance
                                                Policy Do You Have? (Life insurance policy with cash value – NOT
                                                TERM LIFE) *
                                            </label>
                                            <div class="select-group h-40">
                                                <select class="form-control" id="How_many_life_insurance_policy_do_you_have?"
                                                    name="How_many_life_insurance_policy_do_you_have?">
                                                    @if ($fq->How_Many_Life_Insurance_Policy_Do_You_Have == '0')
                                                        <option value="0" selected>Select an option</option>
                                                    @else
                                                        <option value="0">Select an option</option>
                                                    @endif

                                                    @if ($fq->How_Many_Life_Insurance_Policy_Do_You_Have == '1')
                                                        <option value="1" selected>1</option>
                                                    @else
                                                        <option value="1">1</option>
                                                    @endif

                                                    @if ($fq->How_Many_Life_Insurance_Policy_Do_You_Have == '2')
                                                        <option value="2" selected>2</option>
                                                    @else
                                                        <option value="2">2</option>
                                                    @endif
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    @else
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left"
                                        id="insurance-select" style="display: none;">
                                        <div class="form-group">
                                            <label class="form-head" for="exampletext">How Many Life Insurance
                                                Policy Do You Have? (Life insurance policy with cash value – NOT
                                                TERM LIFE) *
                                            </label>
                                            <div class="select-group h-40">
                                                <select class="form-control" id="How_many_life_insurance_policy_do_you_have?"
                                                    name="How_many_life_insurance_policy_do_you_have?">
                                                    @if ($fq->How_Many_Life_Insurance_Policy_Do_You_Have == '0')
                                                        <option value="0" selected>Select an option</option>
                                                    @else
                                                        <option value="0">Select an option</option>
                                                    @endif

                                                    @if ($fq->How_Many_Life_Insurance_Policy_Do_You_Have == '1')
                                                        <option value="1" selected>1</option>
                                                    @else
                                                        <option value="1">1</option>
                                                    @endif

                                                    @if ($fq->How_Many_Life_Insurance_Policy_Do_You_Have == '2')
                                                        <option value="2" selected>2</option>
                                                    @else
                                                        <option value="2">2</option>
                                                    @endif
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    @endif

                                    @if($fq->How_Many_Life_Insurance_Policy_Do_You_Have > 0 && $fq->Do_You_Have_Life_Insurance == 'Yes')
                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 mt-2 mb-3 dependency-tab"
                                            id="inputContainerinsure" style="display: block;">
                                        @php $i = 1; @endphp
                                        @foreach($Fqlifeinsure as $fqins)    
                                        <div class="form-section-divident text-left mb-2">
                                            <h6>Life Insurance Policy <span id="inputCountinsure">{{$i}}</span> </h6>
                                        </div>
                                        <div class="row dependency-form-control px-2">
                                            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                <div class="form-group">
                                                    <label class="form-head" for="exampletext"> Policy Number
                                                    </label>
                                                    <input type="number" class="form-control" name="Policy_number{{$i}}" id="Policy_number{{$i}}"
                                                        placeholder="Enter Policy Number" value="@if(!empty($fqins->Policy_number)){{old('Policy_number$i', $fqins->Policy_number)}}@endif" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                <div class="form-group">
                                                    <label class="form-head" for="exampletext"> Owner Of Policy
                                                    </label>
                                                    <input type="text" class="form-control" name="Owner_of_policy{{$i}}" id="Owner_of_policy{{$i}}"
                                                        placeholder="Enter Owner Of Policy" value="@if(!empty($fqins->Owner_of_policy)){{old('Owner_of_policy$i', $fqins->Owner_of_policy)}}@endif" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                <div class="form-group">
                                                    <label class="form-head" for="exampletext"> Current Cash Value
                                                    </label>
                                                    <input type="text" class="form-control" name="Current_cash_value{{$i}}" id="Current_cash_value{{$i}}"
                                                        placeholder="Enter Current Cash Value" value="@if(!empty($fqins->Current_cash_value)){{old('Current_cash_value$i', $fqins->Current_cash_value)}}@endif" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                <div class="form-group">
                                                    <label class="form-head" for="exampletext"> Outstanding Loan
                                                        Balance
                                                    </label>
                                                    <input type="text" class="form-control" name="Outstanding_loan_balance{{$i}}" id="Outstanding_loan_balance{{$i}}"
                                                        placeholder="Outstanding Loan Balance" value="@if(!empty($fqins->Outstanding_loan_balance)){{old('Outstanding_loan_balance$i', $fqins->Outstanding_loan_balance)}}@endif" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                <div class="form-group">
                                                    <label class="form-head" for="exampletext"> Life Insurance
                                                        Policy {{$i}} <small>(Upload Most Recent Policy
                                                            Statement)</small>
                                                    </label>
                                                    <input type="file" class="form-control" id="p-document{{$i}}"
                                                        name="lifeinsure{{$i}}" accept="image/*" >
                                                    <input type="hidden" class="form-control" value="@if(!empty($fqins->policy_document)){{old('lifeinsure_old$i', $fqins->policy_document)}}@endif" id="lifeinsure_old{{$i}}" name="lifeinsure_old{{$i}}" >
                                                    <a target="_blank"  href="@php echo URL::to('/').'/public/'.$fqins->policy_document; @endphp" style="font-size: 10px;">@php echo URL::to('/').'/public/'.$fqins->policy_document; @endphp</a>
                                                </div>
                                            </div>
                                        </div>
                                        @php $i++; @endphp
                                        @endforeach
                                    </div>
                                    @else
                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 mt-2 mb-3 dependency-tab"
                                            id="inputContainerinsure" style="">
                                    </div>
                                    @endif


                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                        <div class="form-group">
                                            <label class="form-head" for="exampletext"> Do You Own Any Real Estate?
                                                (Any Real Estate/Primary Residence/Rental Properties/ Lands Owned)
                                            <span class="red">*</span></label>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input @error('Do_you_own_any_real_estate?') is-invalid @enderror" id="real-estate-yes"
                                                        type="radio" name="Do_you_own_any_real_estate?" value="Yes" @if($fq->Do_You_Own_Any_Real_Estate == 'Yes') checked @endif >Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input @error('Do_you_own_any_real_estate?') is-invalid @enderror" id="real-estate-no" type="radio"
                                                        name="Do_you_own_any_real_estate?" value="No" @if($fq->Do_You_Own_Any_Real_Estate == 'No') checked @endif >No
                                                        @error('Do_you_own_any_real_estate?')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- input No of real state  -->
                                    @if($fq->Do_You_Own_Any_Real_Estate == 'Yes')
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left"
                                        id="realestate-select" style="display: block;">
                                        <div class="form-group">
                                            <label class="form-head" for="exampletext">How Many Properties Do You
                                                Own? *
                                            </label>
                                            <div class="select-group h-40">
                                                <select class="form-control" id="How_many_properties_do_you_own?"
                                                    name="How_many_properties_do_you_own?">
                                                    @if ($fq->How_Many_Properties_Do_You_Own == '0')
                                                        <option value="0" selected>Select an option</option>
                                                    @else
                                                        <option value="0">Select an option</option>
                                                    @endif

                                                    @if ($fq->How_Many_Properties_Do_You_Own == '1')
                                                        <option value="1" selected>1</option>
                                                    @else
                                                        <option value="1">1</option>
                                                    @endif

                                                    @if ($fq->How_Many_Properties_Do_You_Own == '2')
                                                        <option value="2" selected>2</option>
                                                    @else
                                                        <option value="2">2</option>
                                                    @endif
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    @else
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left"
                                        id="realestate-select" style="display: none;">
                                        <div class="form-group">
                                            <label class="form-head" for="exampletext">How Many Properties Do You
                                                Own? *
                                            </label>
                                            <div class="select-group h-40">
                                                <select class="form-control" id="How_many_properties_do_you_own?"
                                                    name="How_many_properties_do_you_own?">
                                                    @if ($fq->How_Many_Properties_Do_You_Own == '0')
                                                        <option value="0" selected>Select an option</option>
                                                    @else
                                                        <option value="0">Select an option</option>
                                                    @endif

                                                    @if ($fq->How_Many_Properties_Do_You_Own == '1')
                                                        <option value="1" selected>1</option>
                                                    @else
                                                        <option value="1">1</option>
                                                    @endif

                                                    @if ($fq->How_Many_Properties_Do_You_Own == '2')
                                                        <option value="2" selected>2</option>
                                                    @else
                                                        <option value="2">2</option>
                                                    @endif
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    @endif

                                    <!-- ::::::::::::::::::::::how many property count::::::::::::::::::::::: -->
                                    @if($fq->How_Many_Properties_Do_You_Own > 0 && $fq->Do_You_Own_Any_Real_Estate == 'Yes')
                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 mt-2 mb-3 dependency-tab"
                                        id="inputContainerestate" style="display: block;">

                                        @php $i = 1; @endphp
                                        @foreach($Fqestate as $fqens)
                                        <div class="form-section-divident text-left mb-3">
                                            <h6>Property <span id="inputCountestate">{{$i}}</span> </h6>
                                        </div>
                                        <div class="row dependency-form-control px-2">
                                            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                <div class="form-group">
                                                    <label class="form-head" for="exampletext"> Property Address
                                                    </label>
                                                    <input type="text" class="form-control" name="Property_address{{$i}}" id="Property_address{{$i}}"
                                                        placeholder=" Property Address" value="@if(!empty($fqens->Property_address)){{old('Property_address$i', $fqens->Property_address)}}@endif" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                <div class="form-group">
                                                    <label class="form-head" for="exampletext"> Country
                                                    </label>
                                                    <input type="text" class="form-control" name="Country{{$i}}" id="Country{{$i}}"
                                                        placeholder="Country" value="@if(!empty($fqens->Country)){{old('Country$i', $fqens->Country)}}@endif" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                <div class="form-group">
                                                    <label class="form-head" for="exampletext"> Mortgage Lender
                                                    </label>
                                                    <input type="text" class="form-control" name="Mortgage_lender{{$i}}" id="Mortgage_lender{{$i}}"
                                                        placeholder="Mortgage Lender" value="@if(!empty($fqens->Mortgage_lender)){{old('Mortgage_lender$i', $fqens->Mortgage_lender)}}@endif" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                <div class="form-group">
                                                    <label class="form-head" for="exampletext"> Purchase Date
                                                    </label>
                                                    <input type="text" class="form-control" name="Purchase_date{{$i}}" id="Purchase_date{{$i}}"
                                                        placeholder="Purchase Date" value="@if(!empty($fqens->Purchase_date)){{old('Purchase_date$i', $fqens->Purchase_date)}}@endif" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                <div class="form-group">
                                                    <label class="form-head" for="exampletext"> Fair Market Value
                                                    </label>
                                                    <input type="text" class="form-control" name="Fair_market_value{{$i}}" id="Fair_market_value{{$i}}"
                                                        placeholder=" Fair Market Value" value="@if(!empty($fqens->Fair_market_value)){{old('Fair_market_value$i', $fqens->Fair_market_value)}}@endif" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                <div class="form-group">
                                                    <label class="form-head" for="exampletext"> Loan Balance
                                                    </label>
                                                    <input type="text" class="form-control" name="Loan_balance{{$i}}" id="Loan_balance{{$i}}"
                                                        placeholder="Loan Balance" value="@if(!empty($fqens->Loan_balance)){{old('Loan_balance$i', $fqens->Loan_balance)}}@endif" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                <div class="form-group">
                                                    <label class="form-head" for="exampletext"> Monthly Payment
                                                    </label>
                                                    <input type="text" class="form-control" name="Monthly_payment{{$i}}" id="Monthly_payment{{$i}}"
                                                        placeholder="Monthly Payment" value="@if(!empty($fqens->Monthly_payment)){{old('Monthly_payment$i', $fqens->Monthly_payment)}}@endif" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                <div class="form-group">
                                                    <label class="form-head" for="exampletext"> Date of Final
                                                        Payment
                                                    </label>
                                                    <input type="text" class="form-control" name="Date_of_final{{$i}}" id="Date_of_final{{$i}}"
                                                        placeholder="Date of Final Payment" value="@if(!empty($fqens->Date_of_final)){{old('Date_of_final$i', $fqens->Date_of_final)}}@endif" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                <div class="form-group">
                                                    <label class="form-head" for="Monthly_property_tax"> Monthly Property Tax
                                                    </label>
                                                    <input type="text" class="form-control" name="Monthly_property_tax{{$i}}" id="Monthly_property_tax{{$i}}"
                                                        placeholder=" Loan Balance" value="@if(!empty($fqens->Monthly_property_tax)){{old('Monthly_property_tax$i', $fqens->Monthly_property_tax)}}@endif" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                <div class="form-group">
                                                    <label class="form-head" for="exampletext"> How is Title held
                                                        (Joint, Tenancy, etc.)
                                                    </label>
                                                    <input type="text" class="form-control" name="How_is_title_held{{$i}}" id="How_is_title_held{{$i}}"
                                                        placeholder="How is Title held" value="@if(!empty($fqens->Property_address)){{old('How_is_title_held$i', $fqens->How_is_title_held)}}@endif" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                <div class="form-group">
                                                    <label class="form-head" for="exampletext"> Property {{$i}} <small>
                                                            (Upload most recent mortgage statement)</small>
                                                    </label>
                                                    <input type="file" class="form-control" id="property_document{{$i}}"
                                                        name="property_document{{$i}}" accept="image/*" >
                                                    <input type="hidden" class="form-control" value="@if(!empty($fqens->property_document)){{old('property_document_old$i', $fqens->property_document)}}@endif" id="property_document_old{{$i}}" name="property_document_old{{$i}}" >
                                                    <a target="_blank"  href="@php echo URL::to('/').'/public/'.$fqens->property_document; @endphp" style="font-size: 10px;">@php echo URL::to('/').'/public/'.$fqens->property_document; @endphp</a>
                                                </div>
                                            </div>
                                        </div>
                                        @php $i++; @endphp
                                        @endforeach

                                    </div>
                                    @else
                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 mt-2 mb-3 dependency-tab"
                                        id="inputContainerestate" style="">
                                    </div>
                                    @endif

                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                        <div class="form-group">
                                            <label class="form-head" for="exampletext"> Do You Own A Motor Vehicle?
                                            <span class="red">*</span></label>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input @error('Do_you_own_a_motor_vehicle?') is-invalid @enderror" id="motor-vehicle-yes"
                                                        type="radio" name="Do_you_own_a_motor_vehicle?" value="Yes" @if($fq->Do_You_Own_A_Motor_Vehicle == 'Yes') checked @endif>Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input @error('Do_you_own_a_motor_vehicle?') is-invalid @enderror" id="motor-vehicle-no"
                                                        type="radio" name="Do_you_own_a_motor_vehicle?" value="No" @if($fq->Do_You_Own_A_Motor_Vehicle == 'No') checked @endif >No
                                                        @error('Do_you_own_a_motor_vehicle?')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- input No of real state  -->

                                    @if($fq->Do_You_Own_A_Motor_Vehicle == 'Yes')
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left"
                                        id="motorvehicle-select" style="display: block;">
                                        <div class="form-group">
                                            <label class="form-head" for="exampletext">How Many Motor Vehicles Do
                                                You Own?

                                            </label>
                                            <div class="select-group h-40">
                                                <select class="form-control" id="How_many_motor_vehicle_do_you_own?"
                                                    name="How_many_motor_vehicle_do_you_own?">
                                                    @if ($fq->How_Many_Motor_Vehicles_Do_You_Own == '0')
                                                        <option value="0" selected>Select an option</option>
                                                    @else
                                                        <option value="0">Select an option</option>
                                                    @endif

                                                    @if ($fq->How_Many_Motor_Vehicles_Do_You_Own == '1')
                                                        <option value="1" selected>1</option>
                                                    @else
                                                        <option value="1">1</option>
                                                    @endif

                                                    @if ($fq->How_Many_Motor_Vehicles_Do_You_Own == '2')
                                                        <option value="2" selected>2</option>
                                                    @else
                                                        <option value="2">2</option>
                                                    @endif
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    @else
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left"
                                        id="motorvehicle-select" style="display: none;">
                                        <div class="form-group">
                                            <label class="form-head" for="exampletext">How Many Motor Vehicles Do
                                                You Own?

                                            </label>
                                            <div class="select-group h-40">
                                                <select class="form-control" id="How_many_motor_vehicle_do_you_own?"
                                                    name="How_many_motor_vehicle_do_you_own?">
                                                    @if ($fq->How_Many_Motor_Vehicles_Do_You_Own == '0')
                                                        <option value="0" selected>Select an option</option>
                                                    @else
                                                        <option value="0">Select an option</option>
                                                    @endif

                                                    @if ($fq->How_Many_Motor_Vehicles_Do_You_Own == '1')
                                                        <option value="1" selected>1</option>
                                                    @else
                                                        <option value="1">1</option>
                                                    @endif

                                                    @if ($fq->How_Many_Motor_Vehicles_Do_You_Own == '2')
                                                        <option value="2" selected>2</option>
                                                    @else
                                                        <option value="2">2</option>
                                                    @endif
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    @endif

                                    <!-- :::::::::::::::::: motor vehicle detail form:::::::::::::::: -->
                                    @if($fq->How_Many_Motor_Vehicles_Do_You_Own > 0 && $fq->Do_You_Own_A_Motor_Vehicle == 'Yes')
                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 mt-2 mb-2 dependency-tab"
                                        id="inputContainervehical" style="">
                                        @php $i = 1; @endphp
                                        @foreach($Fqvehical as $fqveh)
                                        <div class="form-section-divident text-left mb-3">
                                            <h6>Vehicle <span id="inputCountvehical">{{$i}}</span></h6>
                                        </div>
                                        <div class="row count-investment-form-control px-2">
                                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                <div class="form-group">
                                                    <label class="form-head" for="exampletext"> Make and Model
                                                    </label>
                                                    <input type="text" class="form-control" name="Make_and_model{{$i}}" id="Make_and_model{{$i}}"
                                                        placeholder="Enter Make and Model" value="@if(!empty($fqveh->Make_and_model)){{old('Make_and_model$i', $fqveh->Make_and_model)}}@endif" required >
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                <div class="form-group">
                                                    <label class="form-head" for="exampletext"> Year
                                                    </label>
                                                    <input type="text" class="form-control" name="Year{{$i}}" id="Year{{$i}}"
                                                        placeholder="Enter Year" value="@if(!empty($fqveh->Year)){{old('Year$i', $fqveh->Year)}}@endif" required >
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                <div class="form-group">
                                                    <label class="form-head" for="exampletext"> Mileage
                                                    </label>
                                                    <input type="text" class="form-control" name="Mileage{{$i}}" id="Mileage{{$i}}"
                                                        placeholder="Enter Mileage" value="@if(!empty($fqveh->Mileage)){{old('Mileage$i', $fqveh->Mileage)}}@endif" required >
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                <div class="form-group">
                                                    <label class="form-head" for="exampletext"> Lease or Own
                                                    </label>
                                                    <input type="text" class="form-control" name="Lease_or_own{{$i}}" id="Lease_or_own{{$i}}"
                                                        placeholder="Enter Lease or Own" value="@if(!empty($fqveh->Lease_or_own)){{old('Lease_or_own$i', $fqveh->Lease_or_own)}}@endif" required >
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                <div class="form-group">
                                                    <label class="form-head" for="exampletext"> Date Of
                                                        Purchased/Lease
                                                    </label>
                                                    <input type="text" class="form-control" name="Date_of_purchased{{$i}}" id="Date_of_purchased{{$i}}"
                                                        placeholder=" Date Of Purchased/Lease" value="@if(!empty($fqveh->Date_of_purchased)){{old('Date_of_purchased$i', $fqveh->Date_of_purchased)}}@endif" required >
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                <div class="form-group">
                                                    <label class="form-head" for="exampletext"> Date Of Final
                                                        Payment
                                                    </label>
                                                    <input type="text" class="form-control" name="Date_of_final_payment{{$i}}"  id="Date_of_final_payment{{$i}}"
                                                        placeholder=" Date Of Final Payment" value="@if(!empty($fqveh->Date_of_final_payment)){{old('Date_of_final_payment$i', $fqveh->Date_of_final_payment)}}@endif" required >
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                <div class="form-group">
                                                    <label class="form-head" for="exampletext"> Current Value
                                                    </label>
                                                    <input type="text" class="form-control" name="Current_value{{$i}}" id="Current_value{{$i}}"
                                                        placeholder=" Current Value" value="@if(!empty($fqveh->Current_value)){{old('Current_value$i', $fqveh->Current_value)}}@endif" required >
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                <div class="form-group">
                                                    <label class="form-head" for="exampletext"> Current Loan Value
                                                    </label>
                                                    <input type="text" class="form-control" name="Current_loan_value{{$i}}" id="Current_loan_value{{$i}}"
                                                        placeholder="Current Loan Value" value="@if(!empty($fqveh->Current_loan_value)){{old('Current_loan_value$i', $fqveh->Current_loan_value)}}@endif" required >
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                <div class="form-group">
                                                    <label class="form-head" for="exampletext"> Monthly Payment
                                                    </label>
                                                    <input type="text" class="form-control" name="Monthly_payment{{$i}}" id="Monthly_payment{{$i}}"
                                                        placeholder="Monthly Payment" value="@if(!empty($fqveh->Monthly_payment)){{old('Monthly_payment$i', $fqveh->Monthly_payment)}}@endif" required >
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                <div class="form-group">
                                                    <label class="form-head" for="exampletext">Name of Lender/Lessor
                                                    </label>
                                                    <input type="text" class="form-control" name="Name_of_lender{{$i}}" id="Name_of_lender{{$i}}"
                                                        placeholder="Name of Lender/Lessor" value="@if(!empty($fqveh->Name_of_lender)){{old('Name_of_lender$i', $fqveh->Name_of_lender)}}@endif" required >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                            <div class="form-group">
                                                <label class="form-head" for="exampletext"> Is Vehicle 1 Financed or
                                                    Leased?
                                                </label>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" name="Is_vehicle_1_financed_or_leased?{{$i}}" id="Is_vehicle_1_financed_or_leased?{{$i}}"
                                                            type="radio"  value="Yes" @if($fqveh->Is_vehicle_1_financed_or_leased == 'Yes') checked @endif>Yes
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" name="Is_vehicle_1_financed_or_leased?1{{$i}}" id="Is_vehicle_1_financed_or_leased?{{$i}}" 
                                                            type="radio"  value="No" @if($fqveh->Is_vehicle_1_financed_or_leased == 'No') checked @endif >No
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left"
                                            id="upfin-vehicle-select">
                                            <div class="form-group">
                                                <label class="form-head" for="bank1">Vehicle 1 <small> (Upload most
                                                        recent car note statement)
                                                    </small></label>
                                                <input type="file" class="form-control" id="vehicleup{{$i}}"
                                                    name="vehicleup{{$i}}" accept="image/*"  >
                                                <input type="hidden" class="form-control" value="@if(!empty($fqveh->vehicleup)){{old('vehicleup_old$i', $fqveh->vehicleup)}}@endif" id="vehicleup_old{{$i}}" name="vehicleup_old{{$i}}" >
                                                    <a target="_blank"  href="@php echo URL::to('/').'/public/'.$fqveh->vehicleup; @endphp" style="font-size: 10px;">@php echo URL::to('/').'/public/'.$fqveh->vehicleup; @endphp</a>
                                            </div>
                                        </div>
                                        @php $i++; @endphp
                                        @endforeach
                                    </div>
                                    @else
                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 mt-2 mb-2 dependency-tab"
                                        id="inputContainervehical" style="">
                                        
                                    </div>
                                    @endif
                                    

                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                        <div class="form-group">
                                            <label class="form-head" for="exampletext">Do You Have Any Other
                                                Personal Assets: <small>
                                                    (recreational vehicles, boats, RV’s, artwork,
                                                    jewelry, collections, etc) NOTE: Do not include clothing,
                                                    furniture
                                                    and other personal effects.
                                                </small><span class="red">*</span>
                                            </label>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input @error('Do_you_have_any_other_personal_assets:') is-invalid @enderror" id="Personal-assets-yes"
                                                        type="radio" name="Do_you_have_any_other_personal_assets:" value="Yes" @if($fq->Do_You_Have_Any_Other_Personal_Assets == 'Yes') checked @endif >Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input @error('Do_you_have_any_other_personal_assets:') is-invalid @enderror" id="Personal-assets-no"
                                                        type="radio" name="Do_you_have_any_other_personal_assets:" value="No" @if($fq->Do_You_Have_Any_Other_Personal_Assets == 'No') checked @endif >No
                                                        @error('Do_you_have_any_other_personal_assets:')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    @if($fq->Do_You_Have_Any_Other_Personal_Assets == 'Yes')
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left"
                                        id="psassets-select" style="display: block;">
                                        <div class="form-group">
                                            <label class="form-head" for="exampletext">How Many Other Personal
                                                Assets Do You Have? <small>
                                                    (recreational vehicles, boats, RV’s, artwork,
                                                    jewelry, collections, etc) NOTE: Do not include clothing,
                                                    furniture
                                                    and other personal effects.
                                                </small>
                                            </label>
                                            <div class="select-group h-40">
                                                <select class="form-control" id="How_many_other_personal_assets_do_you_have?"
                                                    name="How_many_other_personal_assets_do_you_have?">
                                                    @if ($fq->How_Many_Other_Personal_Assets_Do_You_Have == '0')
                                                        <option value="0" selected>Select an option</option>
                                                    @else
                                                        <option value="0">Select an option</option>
                                                    @endif

                                                    @if ($fq->How_Many_Other_Personal_Assets_Do_You_Have == '1')
                                                        <option value="1" selected>1</option>
                                                    @else
                                                        <option value="1">1</option>
                                                    @endif

                                                    @if ($fq->How_Many_Other_Personal_Assets_Do_You_Have == '2')
                                                        <option value="2" selected>2</option>
                                                    @else
                                                        <option value="2">2</option>
                                                    @endif

                                                    @if ($fq->How_Many_Other_Personal_Assets_Do_You_Have == '3')
                                                        <option value="3" selected>3</option>
                                                    @else
                                                        <option value="3">3</option>
                                                    @endif

                                                    @if ($fq->How_Many_Other_Personal_Assets_Do_You_Have == '4')
                                                        <option value="4" selected>4</option>
                                                    @else
                                                        <option value="4">4</option>
                                                    @endif

                                                    @if ($fq->How_Many_Other_Personal_Assets_Do_You_Have == '5')
                                                        <option value="5" selected>5</option>
                                                    @else
                                                        <option value="5">5</option>
                                                    @endif
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    @else
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left"
                                        id="psassets-select" style="display: none;">
                                        <div class="form-group">
                                            <label class="form-head" for="exampletext">How Many Other Personal
                                                Assets Do You Have? <small>
                                                    (recreational vehicles, boats, RV’s, artwork,
                                                    jewelry, collections, etc) NOTE: Do not include clothing,
                                                    furniture
                                                    and other personal effects.
                                                </small>
                                            </label>
                                            <div class="select-group h-40">
                                                <select class="form-control" id="How_many_other_personal_assets_do_you_have?"
                                                    name="How_many_other_personal_assets_do_you_have?">
                                                    @if ($fq->How_Many_Other_Personal_Assets_Do_You_Have == '0')
                                                        <option value="0" selected>Select an option</option>
                                                    @else
                                                        <option value="0">Select an option</option>
                                                    @endif

                                                    @if ($fq->How_Many_Other_Personal_Assets_Do_You_Have == '1')
                                                        <option value="1" selected>1</option>
                                                    @else
                                                        <option value="1">1</option>
                                                    @endif

                                                    @if ($fq->How_Many_Other_Personal_Assets_Do_You_Have == '2')
                                                        <option value="2" selected>2</option>
                                                    @else
                                                        <option value="2">2</option>
                                                    @endif

                                                    @if ($fq->How_Many_Other_Personal_Assets_Do_You_Have == '3')
                                                        <option value="3" selected>3</option>
                                                    @else
                                                        <option value="3">3</option>
                                                    @endif

                                                    @if ($fq->How_Many_Other_Personal_Assets_Do_You_Have == '4')
                                                        <option value="4" selected>4</option>
                                                    @else
                                                        <option value="4">4</option>
                                                    @endif

                                                    @if ($fq->How_Many_Other_Personal_Assets_Do_You_Have == '5')
                                                        <option value="5" selected>5</option>
                                                    @else
                                                        <option value="5">5</option>
                                                    @endif
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    <!-- ::::::::::::::::::: personal assets filling form::::::::::::::: -->

                                    @if($fq->How_Many_Other_Personal_Assets_Do_You_Have > 0 && $fq->Do_You_Have_Any_Other_Personal_Assets == 'Yes')
                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 mt-2 mb-3 dependency-tab"
                                        id="inputContainerpersonal" style="display: block;">

                                        @php $i = 1; @endphp
                                        @foreach($Fqpersonal as $fqper)
                                        <div class="form-section-divident text-left mb-2">
                                            <h6>Personal Asset <span id="inputCountpersonal">{{$i}}</span> </h6>
                                        </div>
                                        <div class="row dependency-form-control px-2">
                                            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                <div class="form-group">
                                                    <label class="form-head" for="exampletext"> Description of Asset
                                                    </label>
                                                    <input type="text" class="form-control" name="Description_of_asset{{$i}}" id="Description_of_asset{{$i}}"
                                                        placeholder="Description Of Asset" value="@if(!empty($fqper->Description_of_asset)){{old('Description_of_asset$i', $fqper->Description_of_asset)}}@endif" required >
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                <div class="form-group">
                                                    <label class="form-head" for="exampletext">Date of Purchase
                                                    </label>
                                                    <input type="text" class="form-control" name="Date_of_purchase{{$i}}" id="Date_of_purchase{{$i}}"
                                                        placeholder="Enter Date of Purchase" value="@if(!empty($fqper->Date_of_purchase)){{old('Date_of_purchase$i', $fqper->Date_of_purchase)}}@endif" required >
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                <div class="form-group">
                                                    <label class="form-head" for="exampletext">Current Value
                                                    </label>
                                                    <input type="text" class="form-control" name="Current_value{{$i}}" id="Current_value{{$i}}"
                                                        placeholder="Enter Current Value" value="@if(!empty($fqper->Current_value)){{old('Current_value$i', $fqper->Current_value)}}@endif" required >
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                <div class="form-group">
                                                    <label class="form-head" for="exampletext"> Loan Balance

                                                    </label>
                                                    <input type="text" class="form-control" name="Loan_balance{{$i}}" id="Loan_balance{{$i}}"
                                                        placeholder="Loan Balance" value="@if(!empty($fqper->Loan_balance)){{old('Loan_balance$i', $fqper->Loan_balance)}}@endif" required >
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                <div class="form-group">
                                                    <label class="form-head" for="exampletext"> Name of Lender/
                                                        Lessor
                                                    </label>
                                                    <input type="text" class="form-control" name="Name_of_lender{{$i}}" id="Name_of_lender{{$i}}"
                                                        placeholder="Name of Lender/ Lessor" value="@if(!empty($fqper->Name_of_lender)){{old('Name_of_lender$i', $fqper->Name_of_lender)}}@endif" required >
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                <div class="form-group">
                                                    <label class="form-head" for="exampletext"> Date of Final
                                                        Payment
                                                    </label>
                                                    <input type="text" class="form-control" name="Date_of_final_payment{{$i}}" id="Date_of_final_payment{{$i}}"
                                                        placeholder="Date of Final Payment" value="@if(!empty($fqper->Date_of_final_payment)){{old('Date_of_final_payment$i', $fqper->Date_of_final_payment)}}@endif" required >
                                                </div>
                                            </div>
                                        </div>
                                        @php $i++; @endphp
                                        @endforeach
                                        

                                    </div>
                                    @else
                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 mt-2 mb-3 dependency-tab"
                                        id="inputContainerpersonal" style="">
                                        

                                    </div>
                                    @endif

                                    <!-- section 3a -->
                                    <!-- section divident -->

                                    @if($fq->Married_Filing_Status == 'Married Filing Jointly' && $fq->Marital_Status == 'Married')
                                    <div class="row" id="spousesection3a" >
                                        <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 mb-4">
                                            <div class="form-section-highlite mt-3">
                                                <h5">SECTION 3a: Spouse Asset Information
                                                </h5">
                                            </div>
                                        </div>
                                        <!-- :: input Cash on Hand Amount -->
                                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                            <div class="form-group">
                                                <label class="form-head" for="exampletext">Spouse Cash on Hand Amount *</label>
                                                <input type="text" class="form-control" name="Spouse_Cash_on_Hand_Amount" id="Spouse_Cash_on_Hand_Amount" value="@if(!empty($fq->Spouse_Cash_on_Hand_Amount)){{old('Spouse_Cash_on_Hand_Amount$i', $fq->Spouse_Cash_on_Hand_Amount)}}@endif"
                                                    placeholder="$" >
                                            </div>
                                        </div>
                                        <!-- :: input How Many Bank Accounts Do You Have -->
                                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                            <div class="form-group">
                                                <label class="form-head" for="exampletext">How Many Bank Accounts Spouse Have *</label>
                                                <div class="select-group h-40">
                                                    <select class="form-control" id="How_Many_Bank_Accounts_Spouse_Have"
                                                        name="How_Many_Bank_Accounts_Spouse_Have" >
                                                        @if ($fq->How_Many_Bank_Accounts_Spouse_Have == '0')
                                                            <option value="0" selected>Select an option</option>
                                                        @else
                                                            <option value="0">Select an option</option>
                                                        @endif

                                                        @if ($fq->How_Many_Bank_Accounts_Spouse_Have == '1')
                                                            <option value="1" selected>1</option>
                                                        @else
                                                            <option value="1">1</option>
                                                        @endif

                                                        @if ($fq->How_Many_Bank_Accounts_Spouse_Have == '2')
                                                            <option value="2" selected>2</option>
                                                        @else
                                                            <option value="2">2</option>
                                                        @endif

                                                        @if ($fq->How_Many_Bank_Accounts_Spouse_Have == '3')
                                                            <option value="3" selected>3</option>
                                                        @else
                                                            <option value="3">3</option>
                                                        @endif

                                                        @if ($fq->How_Many_Bank_Accounts_Spouse_Have == '4')
                                                            <option value="4" selected>4</option>
                                                        @else
                                                            <option value="4">4</option>
                                                        @endif

                                                        @if ($fq->How_Many_Bank_Accounts_Spouse_Have == '5')
                                                            <option value="5" selected>5</option>
                                                        @else
                                                            <option value="5">5</option>
                                                        @endif
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- :: input Bank 1 (Upload most recent 3 months of bank statements)  -->
                                        @if($fq->How_Many_Bank_Accounts_Spouse_Have > 0)
                                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 text-left">
                                            <!-- File input fields for bank statements -->
                                            <div id="bankStatementInputsspouse" style="display: block;">
                                                @php $i = 1; @endphp
                                                @foreach($Fqbankspouseaccount as $fqbankspouse)
                                                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                    <div class="form-group">
                                                        <label class="form-head" for="bank{{$i}}">Spouse Bank {{$i}} <small>(Upload most recent 3 months of bank statements)</small></label>
                                                        <input type="file" class="form-control" id="bankspouse{{$i}}" name="bankspouse{{$i}}" accept="image/*" >
                                                        <input type="hidden" class="form-control Fqbankspouseaccount_old{{$fqbankspouse->id}}" value="@if(!empty($fqbankspouse->bankspouse)){{old('bankspouse_old$i', $fqbankspouse->bankspouse)}}@endif" id="bankspouse_old{{$i}}" name="bankspouse_old{{$i}}" >
                                                        <a target="_blank"  class="Fqbankspouseaccount{{$fqbankspouse->id}}"  href="@php echo URL::to('/').'/public/'.$fqbankspouse->bankspouse; @endphp" style="font-size: 10px;">@php echo URL::to('/').'/public/'.$fqbankspouse->bankspouse; @endphp</a><a href="#" class="delete-image-bank ml-3 Fqbankspouseaccount{{$fqbankspouse->id}}" data-id="{{$fqbankspouse->id}}" data-model="Fqbankspouseaccount" style="font-size: 10px;"><b>X</b></a>
                                                    </div>
                                                </div>
                                                @php $i++; @endphp
                                                @endforeach
                                            </div>
                                        </div>
                                        @else
                                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 text-left">
                                            <!-- File input fields for bank statements -->
                                            <div id="bankStatementInputsspouse" style="display: none;">
                                                <!--  input fields will be dynamically created -->
                                            </div>
                                        </div>
                                        @endif
                                    </div>

                                    @else
                                    <div class="row" id="spousesection3a" style="display: none;">
                                        <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 mb-4">
                                            <div class="form-section-highlite mt-3">
                                                <h5">SECTION 3a: Spouse Asset Information
                                                </h5">
                                            </div>
                                        </div>
                                        <!-- :: input Cash on Hand Amount -->
                                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                            <div class="form-group">
                                                <label class="form-head" for="exampletext">Spouse Cash on Hand Amount *</label>
                                                <input type="text" class="form-control" name="Spouse_Cash_on_Hand_Amount" id="Spouse_Cash_on_Hand_Amount"
                                                    placeholder="$" value="{{ old('Spouse_Cash_on_Hand_Amount') }}">
                                            </div>
                                        </div>
                                        <!-- :: input How Many Bank Accounts Do You Have -->
                                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                            <div class="form-group">
                                                <label class="form-head" for="exampletext">How Many Bank Accounts Spouse Have *</label>
                                                <div class="select-group h-40">
                                                    <select class="form-control" id="How_Many_Bank_Accounts_Spouse_Have"
                                                        name="How_Many_Bank_Accounts_Spouse_Have" >
                                                        @if (old('How_Many_Bank_Accounts_Spouse_Have') == '0')
                                                            <option value="0" selected>Select an option</option>
                                                        @else
                                                            <option value="0">Select an option</option>
                                                        @endif

                                                        @if (old('How_Many_Bank_Accounts_Spouse_Have') == '1')
                                                            <option value="1" selected>1</option>
                                                        @else
                                                            <option value="1">1</option>
                                                        @endif

                                                        @if (old('How_Many_Bank_Accounts_Spouse_Have') == '2')
                                                            <option value="2" selected>2</option>
                                                        @else
                                                            <option value="2">2</option>
                                                        @endif

                                                        @if (old('How_Many_Bank_Accounts_Spouse_Have') == '3')
                                                            <option value="3" selected>3</option>
                                                        @else
                                                            <option value="3">3</option>
                                                        @endif

                                                        @if (old('How_Many_Bank_Accounts_Spouse_Have') == '4')
                                                            <option value="4" selected>4</option>
                                                        @else
                                                            <option value="4">4</option>
                                                        @endif

                                                        @if (old('How_Many_Bank_Accounts_Spouse_Have') == '5')
                                                            <option value="5" selected>5</option>
                                                        @else
                                                            <option value="5">5</option>
                                                        @endif
                                                        
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- :: input Bank 1 (Upload most recent 3 months of bank statements)  -->
                                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 text-left">
                                            <!-- File input fields for bank statements -->
                                            <div id="bankStatementInputsspouse">
                                                <!--  input fields will be dynamically created -->
                                            </div>
                                        </div>
                                    </div>
                                    @endif





                                    <!-- ::::::::::::::::::: personal assets filling form::::::::::::::: -->
                                    <!-- ::::::section 03 end::::::: -->
                                    <!-- ::::::::::::Section 04 (a)::::::::::::  -->
                                    <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 mb-2">
                                        <div class="form-section-highlite mt-3">
                                            <div>SECTION 4 (a): Personal Monthly Income
                                            </div>
                                        </div>
                                        <div class="warning-text mt-3 text-left">
                                            <p> If a question does not apply to you, put 0
                                            </p>
                                        </div>
                                    </div>
                                    <!-- form for personal monthly income  -->
                                    <!-- :: input Interest/Dividends -->
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                        <div class="form-group">
                                            <label class="form-head" for="exampletext">Interest/Dividends <span class="red">*</span></label>
                                            <input type="text" class="form-control numberInput @error('Interest/Dividends') is-invalid @enderror" name="Interest/Dividends" id="Interest/Dividends"
                                                placeholder="$0.00" value="@if(!empty($fq->Interest_Dividends)){{old('Interest/Dividends', $fq->Interest_Dividends)}}@endif">
                                                @error('Interest/Dividends')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                        </div>
                                    </div>
                                    <!-- :: input Net Self-Employed/Business Income-->
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                        <div class="form-group">
                                            <label class="form-head" for="exampletext">Net Self-Employed/Business
                                                Income <span class="red">*</span></label>
                                            <input type="text" class="form-control numberInput @error('Net_Self-Employed/Business_Income') is-invalid @enderror" name="Net_Self-Employed/Business_Income" id="Net_Self-Employed/Business_Income"
                                                placeholder="$0.00" value="@if(!empty($fq->Net_Self_Employed_Business_Income)){{old('Net_Self-Employed/Business_Income', $fq->Net_Self_Employed_Business_Income)}}@endif" >
                                                @error('Net_Self-Employed/Business_Income')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                        </div>
                                    </div>
                                    <!-- :: input Net Rental Income-->
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                        <div class="form-group">
                                            <label class="form-head" for="exampletext">Net Rental Income <span class="red">*</span></label>
                                            <input type="text" class="form-control numberInput  @error('Net_Rental_Income') is-invalid @enderror" name="Net_Rental_Income" id="Net_Rental_Income"
                                                placeholder="$0.00" value="@if(!empty($fq->Net_Rental_Income)){{old('Net_Rental_Income', $fq->Net_Rental_Income)}}@endif" >
                                                @error('Net_Rental_Income')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                        </div>
                                    </div>
                                    <!-- :: input Net Distribution-->
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                        <div class="form-group">
                                            <label class="form-head" for="exampletext">Distribution <span class="red">*</span></label>
                                            <input type="text" class="form-control numberInput @error('Distribution') is-invalid @enderror" name="Distribution" id="Distribution"
                                                placeholder="$0.00" value="@if(!empty($fq->Distribution)){{old('Distribution', $fq->Distribution)}}@endif" >
                                                @error('Distribution')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                        </div>
                                    </div>
                                    <!-- :: input Social Security Income-->
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                        <div class="form-group">
                                            <label class="form-head" for="exampletext">Social Security
                                                Income <span class="red">*</span></label>
                                            <input type="text" class="form-control numberInput @error('Social_Security_Income') is-invalid @enderror" name="Social_Security_Income" id="Social_Security_Income"
                                                placeholder="$0.00" value="@if(!empty($fq->Social_Security_Income)){{old('Social_Security_Income', $fq->Social_Security_Income)}}@endif" >
                                                @error('Social_Security_Income')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                        </div>
                                    </div>
                                    <!-- :: input Alimony Income -->
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                        <div class="form-group">
                                            <label class="form-head" for="exampletext">Alimony Income <span class="red">*</span></label>
                                            <input type="text" class="form-control numberInput @error('Alimony_Income') is-invalid @enderror" name="Alimony_Income" id="Alimony_Income"
                                                placeholder="$0.00" value="@if(!empty($fq->Alimony_Income)){{old('Alimony_Income', $fq->Alimony_Income)}}@endif" >
                                            @error('Alimony_Income')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- :: input Retirement Income/ Pension -->
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                        <div class="form-group">
                                            <label class="form-head" for="exampletext">Retirement Income/
                                                Pension <span class="red">*</span></label>
                                            <input type="text" class="form-control numberInput @error('Retirement_Income/Pension') is-invalid @enderror" name="Retirement_Income/Pension" id="Retirement_Income/Pension"
                                                placeholder="$0.00" value="@if(!empty($fq->Retirement_Income_Pension)){{old('Retirement_Income/Pension', $fq->Retirement_Income_Pension)}}@endif" >
                                            @error('Retirement_Income/Pension')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- :: input Other Income -->
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                        <div class="form-group">
                                            <label class="form-head" for="exampletext">Other Income</label>
                                            <input type="text" class="form-control numberInput @error('Other_Income') is-invalid @enderror" name="Other_Income" id="Other_Income"
                                                placeholder="$0.00" value="@if(!empty($fq->Other_Income)){{old('Other_Income', $fq->Other_Income)}}@endif" >
                                            @error('Other_Income')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>


                                    @if($fq->Married_Filing_Status == 'Married Filing Jointly' && $fq->Marital_Status == 'Married')
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left" id="spousesection4a1" style="display: block;">
                                        <div class="form-group">
                                            <label class="form-head" for="exampletext">Spouse Wages</label>
                                            <input type="text" class="form-control numberInput @error('Spouse_Wages') is-invalid @enderror"  name="Spouse_Wages" id="Spouse_Wages"
                                                placeholder="$0.00" value="@if(!empty($fq->Spouse_Wages)){{old('Spouse_Wages', $fq->Spouse_Wages)}}@else @php echo 0; @endphp @endif">
                                            @error('Spouse_Wages')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left" id="spousesection4a2" style="display: block;">
                                        <div class="form-group">
                                            <label class="form-head" for="exampletext">Spouse Social Security Income</label>
                                            <input type="text" class="form-control numberInput @error('Spouse_Social_Security_Income') is-invalid @enderror"  name="Spouse_Social_Security_Income" id="Spouse_Social_Security_Income"
                                                placeholder="$0.00" value="@if(!empty($fq->Spouse_Social_Security_Income)){{old('Spouse_Social_Security_Income', $fq->Spouse_Social_Security_Income)}}@else @php echo 0; @endphp @endif" >
                                            @error('Spouse_Social_Security_Income')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    @else
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left" id="spousesection4a1" style="display: none;">
                                        <div class="form-group">
                                            <label class="form-head" for="exampletext">Spouse Wages</label>
                                            <input type="text" class="form-control numberInput @error('Spouse_Wages') is-invalid @enderror"  name="Spouse_Wages" id="Spouse_Wages"
                                                placeholder="$0.00" value="@if(!empty($fq->Spouse_Wages)){{old('Spouse_Wages', $fq->Spouse_Wages)}}@else  @php echo 0; @endphp @endif">
                                            @error('Spouse_Wages')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left" id="spousesection4a2" style="display: none;">
                                        <div class="form-group">
                                            <label class="form-head" for="exampletext">Spouse Social Security Income</label>
                                            <input type="text" class="form-control numberInput @error('Spouse_Social_Security_Income') is-invalid @enderror"  name="Spouse_Social_Security_Income" id="Spouse_Social_Security_Income"
                                                placeholder="$0.00" value="@if(!empty($fq->Spouse_Social_Security_Income)){{old('Spouse_Social_Security_Income', $fq->Spouse_Social_Security_Income)}}@else @php echo 0; @endphp @endif" >
                                            @error('Spouse_Social_Security_Income')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    @endif

                                    
                                   

                                    <!-- :: input Total Household Income -->
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                        <div class="form-group">
                                            <label class="form-head" for="exampletext">Total Household
                                                Income</label>
                                            <input type="text" class="form-control " name="Total_HouseHold_Income_calulate" id="Total_HouseHold_Income_calulate"
                                                placeholder="$_.__" readonly>
                                            <button type="button" class="btn btn-primary mt-1"
                                                id="calculateBtn">Calculate</button>
                                        </div>
                                    </div>
                                    <!-- :: input Total House Hold Income -->
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                        <div class="form-group">
                                            <label class="form-head" for="exampletext">Total House Hold
                                                Income <span class="red">*</span></label>
                                            <input type="text" class="form-control @error('Total_House_Hold_Income') is-invalid @enderror" name="Total_House_Hold_Income" id="Total_House_Hold_Income"
                                                placeholder="$0.00" value="@if(!empty($fq->Total_House_Hold_Income)){{old('Total_House_Hold_Income', $fq->Total_House_Hold_Income)}}@endif" >
                                            @error('Total_House_Hold_Income')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- form for personal montly income end -->
                                    <!-- :::::::::::: section 04 (a) end :::::::::::::: -->
                                     <!-- ::::::::::::Section 04 (b)::::::::::::  -->
                                    <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 mb-2">
                                        <div class="form-section-highlite mt-3">
                                            <div>SECTION 4 (b): Personal Monthly Expense
                                            </div>
                                        </div>
                                        <div class="warning-text mt-3 text-left">
                                            <p> If a question does not apply to you, put 0
                                            </p>
                                        </div>
                                    </div>
                                    <!-- form for personal monthly income  -->
                                    <!-- :: input Food, Clothing & Misc -->
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                        <div class="form-group">
                                            <label class="form-head" for="exampletext">Food, Clothing & Misc <span class="red">*</span></label>
                                            <input type="text" class="form-control numberInput2 @error('Food_Clothing_Misc') is-invalid @enderror" name="Food_Clothing_Misc" id="Food_Clothing_Misc"
                                                placeholder="$0.00" value="@if(!empty($fq->Food_Clothing_Misc)){{old('Food_Clothing_Misc', $fq->Food_Clothing_Misc)}}@endif" >
                                            @error('Food_Clothing_Misc')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- :: input Rent/Mortgage-->
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                        <div class="form-group">
                                            <label class="form-head" for="exampletext">Rent/Mortgage <span class="red">*</span></label>
                                            <input type="text" class="form-control numberInput2 @error('Rent/Mortgage') is-invalid @enderror" name="Rent/Mortgage" id="Rent/Mortgage"
                                                placeholder="$0.00" value="@if(!empty($fq->Rent_Mortgage)){{old('Rent/Mortgage', $fq->Rent_Mortgage)}}@endif" >
                                            @error('Rent/Mortgage')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- :: input Utilities-->
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                        <div class="form-group">
                                            <label class="form-head" for="exampletext">Utilities <span class="red">*</span></label>
                                            <input type="text" class="form-control numberInput2 @error('Utilities') is-invalid @enderror" name="Utilities" id="Utilities"
                                                placeholder="$0.00" value="@if(!empty($fq->Utilities)){{old('Utilities', $fq->Utilities)}}@endif" >
                                            @error('Utilities')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- :: input Vehicles Ownership Costs-->
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                        <div class="form-group">
                                            <label class="form-head" for="exampletext">Vehicles Ownership
                                                Costs <span class="red">*</span></label>
                                            <input type="text" class="form-control numberInput2 @error('Vehicles_Ownership_Costs') is-invalid @enderror" name="Vehicles_Ownership_Costs" id="Vehicles_Ownership_Costs"
                                                placeholder="$0.00" value="@if(!empty($fq->Vehicles_Ownership_Costs)){{old('Vehicles_Ownership_Costs', $fq->Vehicles_Ownership_Costs)}}@endif" >
                                            @error('Vehicles_Ownership_Costs')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- :: input Vehicles Operating Costs-->
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                        <div class="form-group">
                                            <label class="form-head" for="exampletext">Vehicles Operating
                                                Costs <span class="red">*</span></label>
                                            <input type="text" class="form-control numberInput2 @error('Vehicles_Operating_Costs') is-invalid @enderror" name="Vehicles_Operating_Costs" id="Vehicles_Operating_Costs"
                                                placeholder="$0.00" value="@if(!empty($fq->Vehicles_Operating_Costs)){{old('Vehicles_Operating_Costs', $fq->Vehicles_Operating_Costs)}}@endif" >
                                            @error('Vehicles_Operating_Costs')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- :: input Public Transportation  -->
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                        <div class="form-group">
                                            <label class="form-head" for="exampletext">Public Transportation
                                            <span class="red">*</span></label>
                                            <input type="text" class="form-control numberInput2 @error('Public_Transportation') is-invalid @enderror" name="Public_Transportation" id="Public_Transportation"
                                                placeholder="$0.00" value="@if(!empty($fq->Public_Transportation)){{old('Public_Transportation', $fq->Public_Transportation)}}@endif" >
                                            @error('Public_Transportation')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- :: input Health Insurance -->
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                        <div class="form-group">
                                            <label class="form-head" for="exampletext">Health Insurance <span class="red">*</span></label>
                                            <input type="text" class="form-control numberInput2 @error('Health_Insurance') is-invalid @enderror" name="Health_Insurance" id="Health_Insurance"
                                                placeholder="$0.00" value="@if(!empty($fq->Health_Insurance)){{old('Health_Insurance', $fq->Health_Insurance)}}@endif" >
                                            @error('Health_Insurance')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- :: input Out of Pocket Health Costs -->
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                        <div class="form-group">
                                            <label class="form-head" for="exampletext">Out of Pocket Health
                                                Costs <span class="red">*</span></label>
                                            <input type="text" class="form-control numberInput2 @error('Out_of_Pocket_Health_Costs') is-invalid @enderror" name="Out_of_Pocket_Health_Costs" id="Out_of_Pocket_Health_Costs"
                                                placeholder="$0.00" value="@if(!empty($fq->Out_of_Pocket_Health_Costs)){{old('Out_of_Pocket_Health_Costs', $fq->Out_of_Pocket_Health_Costs)}}@endif" >
                                            @error('Out_of_Pocket_Health_Costs')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- :: input Court Ordered Payments -->
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                        <div class="form-group">
                                            <label class="form-head" for="exampletext">Court Ordered
                                                Payments <span class="red">*</span></label>
                                            <input type="text" class="form-control numberInput2 @error('Court_Ordered_Payments') is-invalid @enderror" name="Court_Ordered_Payments" id="Court_Ordered_Payments"
                                                placeholder="$0.00" value="@if(!empty($fq->Court_Ordered_Payments)){{old('Court_Ordered_Payments', $fq->Court_Ordered_Payments)}}@endif" >
                                            @error('Court_Ordered_Payments')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- :: input Child Care  -->
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                        <div class="form-group">
                                            <label class="form-head" for="exampletext">Child Care <span class="red">*</span></label>
                                            <input type="text" class="form-control numberInput2 @error('Child_Care') is-invalid @enderror" name="Child_Care" id="Child_Care"
                                                placeholder="$0.00" value="@if(!empty($fq->Child_Care)){{old('Child_Care', $fq->Child_Care)}}@endif" >
                                            @error('Child_Care')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- :: input Life Insurance -->
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                        <div class="form-group">
                                            <label class="form-head" for="exampletext">Life Insurance <span class="red">*</span></label>
                                            <input type="text" class="form-control numberInput2 @error('Life_Insurance') is-invalid @enderror" name="Life_Insurance" id="Life_Insurance"
                                                placeholder="$0.00" value="@if(!empty($fq->Life_Insurance)){{old('Life_Insurance', $fq->Life_Insurance)}}@endif" >
                                            @error('Life_Insurance')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- :: input Taxes (Income & FICA) -->
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                        <div class="form-group">
                                            <label class="form-head" for="exampletext">Taxes (Income & FICA) <span class="red">*</span></label>
                                            <input type="text" class="form-control numberInput2 @error('Taxes') is-invalid @enderror" name="Taxes" id="Taxes"
                                                placeholder="$0.00" value="@if(!empty($fq->Taxes)){{old('Taxes', $fq->Taxes)}}@endif" >
                                            @error('Taxes')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- :: input Other Secure Debts -->
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                        <div class="form-group">
                                            <label class="form-head" for="exampletext">Other Secure Debts</label>
                                            <input type="text" class="form-control numberInput2 @error('Other_Secure_Debts') is-invalid @enderror" name="Other_Secure_Debts" id="Other_Secure_Debts"
                                                placeholder="$0.00" value="@if(!empty($fq->Other_Secure_Debts)){{old('Other_Secure_Debts', $fq->Other_Secure_Debts)}}@endif">
                                            @error('Other_Secure_Debts')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- :: input Other Secure Debts  02-->
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                        <div class="form-group">
                                            <label class="form-head" for="exampletext">Other Secure Debts</label>
                                            <input type="text" class="form-control numberInput2 @error('Other_Secure_Debts1') is-invalid @enderror" name="Other_Secure_Debts1" id="Other_Secure_Debts1"
                                                placeholder="$0.00" value="@if(!empty($fq->Other_Secure_Debts1)){{old('Other_Secure_Debts1', $fq->Other_Secure_Debts1)}}@endif">
                                            @error('Other_Secure_Debts1')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- :: input Total Household Expense -->
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                        <div class="form-group">
                                            <label class="form-head" for="exampletext">Total Household
                                                Expense</label>
                                            <input type="text" class="form-control" name="TotHouseholdExpensecalculate" id="TotHouseholdExpensecalculate"
                                                placeholder="$_.__" readonly>
                                            <button type="button" class="btn btn-primary mt-1"
                                                id="calculateBtn2">Calculate</button>
                                        </div>
                                    </div>
                                    <!-- :: input Total Household Expense-->
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                        <div class="form-group">
                                            <label class="form-head" for="exampletext">Total Household
                                                Expense <span class="red">*</span></label>
                                            <input type="text" class="form-control @error('TotHouseholdExpense') is-invalid @enderror" name="TotHouseholdExpense" id="TotHouseholdExpense"
                                                placeholder="$0.00" value="@if(!empty($fq->TotHousehold_Expense)){{old('TotHouseholdExpense', $fq->TotHousehold_Expense)}}@endif" >
                                            @error('TotHouseholdExpense')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>



                                    <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 mb-4">
                                        <div class="form-section-highlite mt-3">
                                            <div>SECTION 5: Other Financial Information
                                            </div>
                                        </div>
                                    </div>
                                    <!-- :: form section 05-->
                                    <!-- input are you a benificiary -->
                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 text-left">
                                        <div class="form-group">
                                            <label class="form-head" for="exampletext"> Are you the beneficiary of a
                                                trust, estate, or life insurance policy? <span class="red">*</span>

                                            </label>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input  @error('Are_you_the_beneficiary_of_a_trust_estate_or_life_insurance_po') is-invalid @enderror" id="beneficiary-yes"
                                                        type="radio" name="Are_you_the_beneficiary_of_a_trust_estate_or_life_insurance_po" value="Yes" @if($fq->Are_you_the_beneficiary_of_a_trust_estate_or_life_insurance_po == 'Yes') checked @endif >Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input  @error('Are_you_the_beneficiary_of_a_trust_estate_or_life_insurance_po') is-invalid @enderror" id="beneficiary-no" type="radio"
                                                        name="Are_you_the_beneficiary_of_a_trust_estate_or_life_insurance_po" value="No" @if($fq->Are_you_the_beneficiary_of_a_trust_estate_or_life_insurance_po == 'No') checked @endif >No
                                                        @error('Are_you_the_beneficiary_of_a_trust_estate_or_life_insurance_po')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- input are you a benificiary -->
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                        <div class="form-group">
                                            <label class="form-head" for="exampletext">Are you currently in
                                                bankruptcy? <span class="red">*</span>
                                            </label>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input @error('Are_you_currently_in_bankruptcy') is-invalid @enderror" id="bankruptcy-yes" type="radio"
                                                        name="Are_you_currently_in_bankruptcy" value="Yes" @if($fq->Are_you_currently_in_bankruptcy == 'Yes') checked @endif >Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input @error('Are_you_currently_in_bankruptcy') is-invalid @enderror" id="bankruptcy-no" type="radio"
                                                        name="Are_you_currently_in_bankruptcy" value="No" @if($fq->Are_you_currently_in_bankruptcy == 'No') checked @endif >No
                                                        @error('Are_you_currently_in_bankruptcy')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- input show/hide Discharge/Dismissal Date -->

                                    @if($fq->Are_you_currently_in_bankruptcy == 'Yes')
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left"
                                        id="bankruptcy-select" style="display: block;">
                                        <div class="form-group">
                                            <label class="form-head" for="exampletext"> Discharge/Dismissal Date

                                            </label>
                                            <input type="text" class="form-control" name="Discharge/Dismissal_Date" id="Discharge/Dismissal_Date" value="@if(!empty($fq->Discharge_Dismissal_Date)){{old('Discharge/Dismissal_Date#', $fq->Discharge_Dismissal_Date)}}@endif"
                                                placeholder="Discharge/Dismissal Date" >
                                        </div>
                                    </div>
                                    @else
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left"
                                        id="bankruptcy-select" style="display: none;">
                                        <div class="form-group">
                                            <label class="form-head" for="exampletext"> Discharge/Dismissal Date

                                            </label>
                                            <input type="text" class="form-control" name="Discharge/Dismissal_Date" id="Discharge/Dismissal_Date" value="@if(!empty($fq->Discharge_Dismissal_Date)){{old('Discharge/Dismissal_Date#', $fq->Discharge_Dismissal_Date)}}@endif"
                                                placeholder="Discharge/Dismissal Date" >
                                        </div>
                                    </div>
                                    @endif

                                    <!-- Have you been party to a lawsuit? -->
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                        <div class="form-group">
                                            <label class="form-head" for="exampletext">Have you been party to a
                                                lawsuit? <span class="red">*</span>
                                            </label>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input @error('Have_you_been_party_to_a_lawsuit?') is-invalid @enderror" id="lawsuit-yes" type="radio"
                                                        name="Have_you_been_party_to_a_lawsuit?" value="Yes" @if($fq->Have_you_been_party_to_a_lawsuit == 'Yes') checked @endif  >Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input @error('Have_you_been_party_to_a_lawsuit?') is-invalid @enderror" id="lawsuit-no" type="radio"
                                                        name="Have_you_been_party_to_a_lawsuit?" value="No" @if($fq->Have_you_been_party_to_a_lawsuit == 'No') checked @endif  >No
                                                        @error('Have_you_been_party_to_a_lawsuit?')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- input show/hide Date the lawsuit was resolved -->

                                    @if($fq->Have_you_been_party_to_a_lawsuit == 'Yes')
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left"
                                        id="lawsuit-select" style="display: block;">
                                        <div class="form-group">
                                            <label class="form-head" for="exampletext">Date the lawsuit was resolved
                                            </label>
                                            <input type="text" class="form-control" name="Date_the_lawsuit_was_resolved" id="Date_the_lawsuit_was_resolved"
                                                placeholder="Date the lawsuit" value="@if(!empty($fq->Date_the_lawsuit_was_resolved)){{old('Date_the_lawsuit_was_resolved', $fq->Date_the_lawsuit_was_resolved)}}@endif" >
                                        </div>
                                    </div>
                                    @else
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left"
                                        id="lawsuit-select" style="display: none;">
                                        <div class="form-group">
                                            <label class="form-head" for="exampletext">Date the lawsuit was resolved
                                            </label>
                                            <input type="text" class="form-control" name="Date_the_lawsuit_was_resolved" id="Date_the_lawsuit_was_resolved"
                                                placeholder="Date the lawsuit" value="@if(!empty($fq->Date_the_lawsuit_was_resolved)){{old('Date_the_lawsuit_was_resolved', $fq->Date_the_lawsuit_was_resolved)}}@endif" >
                                        </div>
                                    </div>
                                    @endif

                                    <!--:: input In the past 10 years, have you transferred any assets for less than their full value? -->
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                        <div class="form-group">
                                            <label class="form-head" for="exampletext">In the past 10 years, have
                                                you transferred any assets for less than their full value? <span class="red">*</span>
                                            </label>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input @error('In_the_past_10_years_have_you_transferred_any_assets_for_less_t') is-invalid @enderror" id="transferred-assets-yes"
                                                        type="radio" name="In_the_past_10_years_have_you_transferred_any_assets_for_less_t" value="Yes" @if($fq->In_the_past_10_years_have_you_transferred_any_assets_for_less_t == 'Yes') checked @endif >Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input @error('In_the_past_10_years_have_you_transferred_any_assets_for_less_t') is-invalid @enderror" id="transferred-assets-no"
                                                        type="radio" name="In_the_past_10_years_have_you_transferred_any_assets_for_less_t" value="No" @if($fq->In_the_past_10_years_have_you_transferred_any_assets_for_less_t == 'No') checked @endif >No
                                                        @error('In_the_past_10_years_have_you_transferred_any_assets_for_less_t')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- input show/hide Date the asset was transferred -->
                                    @if($fq->In_the_past_10_years_have_you_transferred_any_assets_for_less_t == 'Yes')
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left"
                                        id="transferred-asset-select" style="display: block;">
                                        <div class="form-group">
                                            <label class="form-head" for="exampletext">Date the asset was
                                                transferred
                                            </label>
                                            <input type="text" class="form-control " name="Date_the_asset_was_transferred" id="Date_the_asset_was_transferred"
                                                placeholder="Date the asset was transferred" value="@if(!empty($fq->Date_the_asset_was_transferred)){{old('Date_the_asset_was_transferred', $fq->Date_the_asset_was_transferred)}}@endif">
                                             
                                        </div>
                                    </div>
                                    @else
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left"
                                        id="transferred-asset-select" style="display: none;">
                                        <div class="form-group">
                                            <label class="form-head" for="exampletext">Date the asset was
                                                transferred
                                            </label>
                                            <input type="text" class="form-control " name="Date_the_asset_was_transferred" id="Date_the_asset_was_transferred"
                                                placeholder="Date the asset was transferred" value="@if(!empty($fq->Date_the_asset_was_transferred)){{old('Date_the_asset_was_transferred', $fq->Date_the_asset_was_transferred)}}@endif">
                                             
                                        </div>
                                    </div>
                                    @endif

                                    <!--:: In the past 3 year, have you transferred any real property (land, house, etc.)? -->
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                        <div class="form-group">
                                            <label class="form-head" for="exampletext">In the past 3 year, have you
                                                transferred any real property (land, house, etc.)? <span class="red">*</span>
                                            </label>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input @error('In_the_past_3_year_have_you_transferred_any_real_property') is-invalid @enderror" id="transferral-property-yes"
                                                        type="radio" name="In_the_past_3_year_have_you_transferred_any_real_property" value="Yes" @if($fq->In_the_past_3_year_have_you_transferred_any_real_property == 'Yes') checked @endif >Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input @error('In_the_past_3_year_have_you_transferred_any_real_property') is-invalid @enderror" id="transferral-property-no"
                                                        type="radio" name="In_the_past_3_year_have_you_transferred_any_real_property" value="No" @if($fq->In_the_past_3_year_have_you_transferred_any_real_property == 'No') checked @endif  >No
                                                        @error('In_the_past_3_year_have_you_transferred_any_real_property')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- input show/hide List the type of property and date of the transfer  -->
                                    @if($fq->In_the_past_3_year_have_you_transferred_any_real_property == 'Yes')
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left"
                                        id="transferral-select" style="display: block;">
                                        <div class="form-group">
                                            <label class="form-head" for="exampletext">List the type of property and
                                                date of the transfer
                                            </label>
                                            <input type="text" class="form-control" name="List_the_type_of_property_and_date_of_the_transfer" id="List_the_type_of_property_and_date_of_the_transfer"
                                                placeholder="List the type of property and date of the transfer" value="@if(!empty($fq->List_the_type_of_property_and_date_of_the_transfer)){{old('List_the_type_of_property_and_date_of_the_transfer', $fq->List_the_type_of_property_and_date_of_the_transfer)}}@endif"
                                                >
                                        </div>
                                    </div>
                                    @else
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left"
                                        id="transferral-select" style="display: none;">
                                        <div class="form-group">
                                            <label class="form-head" for="exampletext">List the type of property and
                                                date of the transfer
                                            </label>
                                            <input type="text" class="form-control" name="List_the_type_of_property_and_date_of_the_transfer" id="List_the_type_of_property_and_date_of_the_transfer"
                                                placeholder="List the type of property and date of the transfer" value="@if(!empty($fq->List_the_type_of_property_and_date_of_the_transfer)){{old('List_the_type_of_property_and_date_of_the_transfer', $fq->List_the_type_of_property_and_date_of_the_transfer)}}@endif"
                                                >
                                        </div>
                                    </div>
                                    @endif








                                    <!-- ::::::::::::::::: section for sig and date ::::::::::::::::::: -->
                                    <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 mb-4">
                                        <div class="form-section-highlite mt-3">
                                            <div>Date & Signature
                                            </div>
                                        </div>
                                    </div>
                                    <!-- form date and signature upload -->
                                    <!-- :: input -->
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                        <div class="form-group">
                                            <label class="form-head" for="exampletext"> Print Full Name <span class="red">*</span></label>
                                            <input type="text" class="form-control @error('Print_Full_Name') is-invalid @enderror" name="Print_Full_Name" id="Print_Full_Name"
                                                placeholder="Enter Full Name" value="@if(!empty($fq->Print_Full_Name)){{old('Print_Full_Name', $fq->Print_Full_Name)}}@endif" >
                                                @error('Print_Full_Name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                        </div>
                                    </div>
                                    <!-- :: input -->
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                        <div class="form-group">
                                            <label class="form-head" for="exampletext">Date <span class="red">*</span></label>
                                            <input type="date" class="form-control @error('Date') is-invalid @enderror" name="Date" id="Date"
                                                placeholder="Date" value="@if(!empty($fq->Date)){{old('Date', $fq->Date)}}@endif" >
                                            @error('Date')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- :: signature pad -->
                                   <!--  <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12" id="sig-pad">
                                        <canvas id="signature" name="Signature" width="950" height="150"
                                            style="border: 1px solid #ddd;"></canvas>
                                        <br>
                                        <button type="button" id="clear-signature">Clear</button>
                                    </div> -->

                                    <input type="hidden" name="fqid" id="fqid" value="@if(!empty($fq->id)){{old('fqid', $fq->id)}}@endif">
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

                                    <!-- form for personal montly income end -->
                                    <!-- :::::::::::: section 04 (b) end :::::::::::::: -->
                                    <!-- ::::::::::::::::::: personal assets filling form::::::::::::::: -->
                                    <!-- <button class="btn btn-primary" type="submit" name="submit">Submit</button> -->

                                    <!-- :::::::::::::::::::::::: insurance filling form:::::::::::::: -->



                                    <!-- ::::::section 03::::::: -->


                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>






@endsection
@section('scripts')  
<script src="{{ URL::asset('assets/js/plugins/signature_pad.min.js') }}"></script>

<!-- query for signature pad -->
<script>
jQuery(document).ready(function($) {

    var canvas = document.getElementById("signature");
    var signaturePad = new SignaturePad(canvas);

    $('#clear-signature').on('click', function() {
        signaturePad.clear();
    });

});
</script>
<script>
    const dropdown6 = document.getElementById('How_many_other_personal_assets_do_you_have?');
    const inputCountDisplay6 = document.getElementById('inputCountpersonal');

    dropdown6.addEventListener('change', function () {
        const selectedValue6 = parseInt(dropdown6.value);
        
        if (selectedValue6 === '0') {
            $('#inputContainerpersonal').hide();
        } else {
 
            $('#inputContainerpersonal').empty();
            // Create new input elements based on the selected value
            for (let i = 1; i <= selectedValue6; i++) {
            var dependentSection6 = `
                    <div class="form-section-divident text-left mb-2">
                        <h6>Personal Asset <span id="inputCountpersonal">${i}</span> </h6>
                    </div>
                    <div class="row dependency-form-control px-2">
                        <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                            <div class="form-group">
                                <label class="form-head" for="exampletext"> Description of Asset
                                </label>
                                <input type="text" class="form-control" name="Description_of_asset${i}" id="Description_of_asset${i}"
                                    placeholder="Description Of Asset" value="{{ old('Description_of_asset${i}') }}" required >
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                            <div class="form-group">
                                <label class="form-head" for="exampletext">Date of Purchase
                                </label>
                                <input type="text" class="form-control" name="Date_of_purchase${i}" id="Date_of_purchase${i}"
                                    placeholder="Enter Date of Purchase" value="{{ old('Date_of_purchase${i}') }}" required >
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                            <div class="form-group">
                                <label class="form-head" for="exampletext">Current Value
                                </label>
                                <input type="text" class="form-control" name="Current_value${i}" id="Current_value${i}"
                                    placeholder="Enter Current Value" value="{{ old('Current_value${i}') }}" required >
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                            <div class="form-group">
                                <label class="form-head" for="exampletext"> Loan Balance

                                </label>
                                <input type="text" class="form-control" name="Loan_balance${i}" id="Loan_balance${i}"
                                    placeholder="Loan Balance" value="{{ old('Loan_balance${i}') }}" required >
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                            <div class="form-group">
                                <label class="form-head" for="exampletext"> Name of Lender/
                                    Lessor
                                </label>
                                <input type="text" class="form-control" name="Name_of_lender${i}" id="Name_of_lender${i}"
                                    placeholder="Name of Lender/ Lessor" value="{{ old('Name_of_lender${i}') }}" required >
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                            <div class="form-group">
                                <label class="form-head" for="exampletext"> Date of Final
                                    Payment
                                </label>
                                <input type="text" class="form-control" name="Date_of_final_payment${i}" id="Date_of_final_payment${i}"
                                    placeholder="Date of Final Payment" value="{{ old('Date_of_final_payment${i}') }}" required >
                            </div>
                        </div>
                    </div>`;

            $('#inputContainerpersonal').show();
            $('#inputContainerpersonal').append(dependentSection6);

            }

            // Update the input count
            inputCountDisplay6.textContent = selectedValue6;
        }
    });
</script>
<script>
    const dropdown5 = document.getElementById('How_many_motor_vehicle_do_you_own?');
    const inputCountDisplay5 = document.getElementById('inputCountvehical');

    dropdown5.addEventListener('change', function () {
        const selectedValue5 = parseInt(dropdown5.value);
        
        if (selectedValue5 === '0') {
            $('#inputContainervehical').hide();
        } else {
 
            $('#inputContainervehical').empty();
            // Create new input elements based on the selected value
            for (let i = 1; i <= selectedValue5; i++) {
            var dependentSection5 = `
                    <div class="form-section-divident text-left mb-3">
                        <h6>Vehicle <span id="inputCountvehical">${i}</span></h6>
                    </div>
                    <div class="row count-investment-form-control px-2">
                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                            <div class="form-group">
                                <label class="form-head" for="exampletext"> Make and Model
                                </label>
                                <input type="text" class="form-control" name="Make_and_model${i}" id="Make_and_model${i}"
                                    placeholder="Enter Make and Model" value="{{ old('Make_and_model${i}') }}" required >
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                            <div class="form-group">
                                <label class="form-head" for="exampletext"> Year
                                </label>
                                <input type="text" class="form-control" name="Year${i}" id="Year${i}"
                                    placeholder="Enter Year" value="{{ old('Year${i}') }}" required >
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                            <div class="form-group">
                                <label class="form-head" for="exampletext"> Mileage
                                </label>
                                <input type="text" class="form-control" name="Mileage${i}" id="Mileage${i}"
                                    placeholder="Enter Mileage" value="{{ old('Mileage${i}') }}" required >
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                            <div class="form-group">
                                <label class="form-head" for="exampletext"> Lease or Own
                                </label>
                                <input type="text" class="form-control" name="Lease_or_own${i}" id="Lease_or_own${i}"
                                    placeholder="Enter Lease or Own" value="{{ old('Lease_or_own${i}') }}" required >
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                            <div class="form-group">
                                <label class="form-head" for="exampletext"> Date Of
                                    Purchased/Lease
                                </label>
                                <input type="text" class="form-control" name="Date_of_purchased${i}" id="Date_of_purchased${i}"
                                    placeholder=" Date Of Purchased/Lease" value="{{ old('Date_of_purchased${i}') }}" required >
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                            <div class="form-group">
                                <label class="form-head" for="exampletext"> Date Of Final
                                    Payment
                                </label>
                                <input type="text" class="form-control" name="Date_of_final_payment${i}"  id="Date_of_final_payment${i}"
                                    placeholder=" Date Of Final Payment" value="{{ old('Date_of_final_payment${i}') }}" required >
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                            <div class="form-group">
                                <label class="form-head" for="exampletext"> Current Value
                                </label>
                                <input type="text" class="form-control" name="Current_value${i}" id="Current_value${i}"
                                    placeholder=" Current Value" value="{{ old('Current_value${i}') }}" required >
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                            <div class="form-group">
                                <label class="form-head" for="exampletext"> Current Loan Value
                                </label>
                                <input type="text" class="form-control" name="Current_loan_value${i}" id="Current_loan_value${i}"
                                    placeholder="Current Loan Value" value="{{ old('Current_loan_value${i}') }}" required >
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                            <div class="form-group">
                                <label class="form-head" for="exampletext"> Monthly Payment
                                </label>
                                <input type="text" class="form-control" name="Monthly_payment${i}" id="Monthly_payment${i}"
                                    placeholder="Monthly Payment" value="{{ old('Monthly_payment${i}') }}" required >
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                            <div class="form-group">
                                <label class="form-head" for="exampletext">Name of Lender/Lessor
                                </label>
                                <input type="text" class="form-control" name="Name_of_lender${i}" id="Name_of_lender${i}"
                                    placeholder="Name of Lender/Lessor" value="{{ old('Name_of_lender${i}') }}" required >
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                        <div class="form-group">
                            <label class="form-head" for="exampletext"> Is Vehicle 1 Financed or
                                Leased?
                            </label>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" name="Is_vehicle_1_financed_or_leased?${i}" id="Is_vehicle_1_financed_or_leased?${i}"
                                        type="radio"  value="Yes" >Yes
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" name="Is_vehicle_1_financed_or_leased?1${i}" id="Is_vehicle_1_financed_or_leased?${i}" 
                                        type="radio"  value="No"  >No
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left"
                        id="upfin-vehicle-select">
                        <div class="form-group">
                            <label class="form-head" for="bank1">Vehicle 1 <small> (Upload most
                                    recent car note statement)
                                </small></label>
                            <input type="file" class="form-control" id="vehicleup${i}"
                                name="vehicleup${i}" accept="image/*" required >
                        </div>
                    </div>`;

            $('#inputContainervehical').show();
            $('#inputContainervehical').append(dependentSection5);

            }

            // Update the input count
            inputCountDisplay5.textContent = selectedValue5;
        }
    });
</script>

<script>
    const dropdown4 = document.getElementById('How_many_properties_do_you_own?');
    const inputCountDisplay4 = document.getElementById('inputCountestate');

    dropdown4.addEventListener('change', function () {
        const selectedValue4 = parseInt(dropdown4.value);
        
        if (selectedValue4 === '0') {
            $('#inputContainerestate').hide();
        } else {
 
            $('#inputContainerestate').empty();
            // Create new input elements based on the selected value
            for (let i = 1; i <= selectedValue4; i++) {
            var dependentSection4 = `
                    <div class="form-section-divident text-left mb-3">
                        <h6>Property <span id="inputCountestate">${i}</span> </h6>
                    </div>
                    <div class="row dependency-form-control px-2">
                        <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                            <div class="form-group">
                                <label class="form-head" for="exampletext"> Property Address
                                </label>
                                <input type="text" class="form-control" name="Property_address${i}" id="Property_address${i}"
                                    placeholder=" Property Address" value="{{ old('Property_address${i}') }}" required>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                            <div class="form-group">
                                <label class="form-head" for="exampletext"> Country
                                </label>
                                <input type="text" class="form-control" name="Country${i}" id="Country${i}"
                                    placeholder="Country" value="{{ old('Country${i}') }}" required>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                            <div class="form-group">
                                <label class="form-head" for="exampletext"> Mortgage Lender
                                </label>
                                <input type="text" class="form-control" name="Mortgage_lender${i}" id="Mortgage_lender${i}"
                                    placeholder="Mortgage Lender" value="{{ old('Mortgage_lender${i}') }}" required>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                            <div class="form-group">
                                <label class="form-head" for="exampletext"> Purchase Date
                                </label>
                                <input type="text" class="form-control" name="Purchase_date${i}" id="Purchase_date${i}"
                                    placeholder="Purchase Date" value="{{ old('Purchase_date${i}') }}" required>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                            <div class="form-group">
                                <label class="form-head" for="exampletext"> Fair Market Value
                                </label>
                                <input type="text" class="form-control" name="Fair_market_value${i}" id="Fair_market_value${i}"
                                    placeholder=" Fair Market Value" value="{{ old('Fair_market_value${i}') }}" required>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                            <div class="form-group">
                                <label class="form-head" for="exampletext"> Loan Balance
                                </label>
                                <input type="text" class="form-control" name="Loan_balance${i}" id="Loan_balance${i}"
                                    placeholder="Loan Balance" value="{{ old('Loan_balance${i}') }}" required>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                            <div class="form-group">
                                <label class="form-head" for="exampletext"> Monthly Payment
                                </label>
                                <input type="text" class="form-control" name="Monthly_payment${i}" id="Monthly_payment${i}"
                                    placeholder="Monthly Payment" value="{{ old('Monthly_payment${i}') }}" required>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                            <div class="form-group">
                                <label class="form-head" for="exampletext"> Date of Final
                                    Payment
                                </label>
                                <input type="text" class="form-control" name="Date_of_final${i}" id="Date_of_final${i}"
                                    placeholder="Date of Final Payment" value="{{ old('Date_of_final${i}') }}" required>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                            <div class="form-group">
                                <label class="form-head" for="Monthly_property_tax"> Monthly Property Tax
                                </label>
                                <input type="text" class="form-control" name="Monthly_property_tax${i}" id="Monthly_property_tax${i}"
                                    placeholder=" Loan Balance" value="{{ old('Monthly_property_tax${i}') }}" required>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                            <div class="form-group">
                                <label class="form-head" for="exampletext"> How is Title held
                                    (Joint, Tenancy, etc.)
                                </label>
                                <input type="text" class="form-control" name="How_is_title_held${i}" id="How_is_title_held${i}"
                                    placeholder="How is Title held" value="{{ old('How_is_title_held${i}') }}" required>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                            <div class="form-group">
                                <label class="form-head" for="exampletext"> Property ${i} <small>
                                        (Upload most recent mortgage statement)</small>
                                </label>
                                <input type="file" class="form-control" id="property_document${i}"
                                    name="property_document${i}" accept="image/*" required>
                            </div>
                        </div>
                    </div>`;

            $('#inputContainerestate').show();
            $('#inputContainerestate').append(dependentSection4);

            }

            // Update the input count
            inputCountDisplay4.textContent = selectedValue4;
        }
    });
</script>
<script>
    const dropdown2 = document.getElementById('How_many_life_insurance_policy_do_you_have?');
    const inputCountDisplay2 = document.getElementById('inputCountinsure');

    dropdown2.addEventListener('change', function () {
        const selectedValue2 = parseInt(dropdown2.value);
        
        if (selectedValue2 === '0') {
            $('#inputContainerinsure').hide();
        } else {
 
            $('#inputContainerinsure').empty();
            // Create new input elements based on the selected value
            for (let i = 1; i <= selectedValue2; i++) {
            var dependentSection2 = `
                    <div class="form-section-divident text-left mb-2">
                        <h6>Life Insurance Policy <span id="inputCountinsure">${i}</span> </h6>
                    </div>
                    <div class="row dependency-form-control px-2">
                        <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                            <div class="form-group">
                                <label class="form-head" for="exampletext"> Policy Number
                                </label>
                                <input type="number" class="form-control" name="Policy_number${i}" id="Policy_number${i}"
                                    placeholder="Enter Policy Number" value="{{ old('Policy_number${i}') }}" required
 >
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                            <div class="form-group">
                                <label class="form-head" for="exampletext"> Owner Of Policy
                                </label>
                                <input type="text" class="form-control" name="Owner_of_policy${i}" id="Owner_of_policy${i}"
                                    placeholder="Enter Owner Of Policy" value="{{ old('Owner_of_policy${i}') }}" required>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                            <div class="form-group">
                                <label class="form-head" for="exampletext"> Current Cash Value
                                </label>
                                <input type="text" class="form-control" name="Current_cash_value${i}" id="Current_cash_value${i}"
                                    placeholder="Enter Current Cash Value" value="{{ old('Current_cash_value${i}') }}" required>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                            <div class="form-group">
                                <label class="form-head" for="exampletext"> Outstanding Loan
                                    Balance
                                </label>
                                <input type="text" class="form-control" name="Outstanding_loan_balance${i}" id="Outstanding_loan_balance${i}"
                                    placeholder="Outstanding Loan Balance" value="{{ old('Outstanding_loan_balance${i}') }}" required>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                            <div class="form-group">
                                <label class="form-head" for="exampletext"> Life Insurance
                                    Policy 1 <small>(Upload Most Recent Policy
                                        Statement)</small>
                                </label>
                                <input type="file" class="form-control" id="p-document${i}"
                                    name="lifeinsure${i}" accept="image/*" required>
                            </div>
                        </div>
                    </div>`;

            $('#inputContainerinsure').show();
            $('#inputContainerinsure').append(dependentSection2);

            }

            // Update the input count
            inputCountDisplay2.textContent = selectedValue2;
        }
    });
</script>

<script>
    const dropdown1 = document.getElementById('How_many_type_of_investments_do_you_have');
    const inputCountDisplay1 = document.getElementById('inputCountinv');

    dropdown1.addEventListener('change', function () {
        const selectedValue1 = parseInt(dropdown1.value);
        
        if (selectedValue1 === '0') {
            $('#inputContainerinv').hide();
        } else {
 
            $('#inputContainerinv').empty();
            // Create new input elements based on the selected value
            for (let i = 1; i <= selectedValue1; i++) {
            var dependentSection1 = `
                    <div class="form-section-divident text-left mb-3">
                        <h6>Investment <span id="inputCountinv">${i}</span></h6>
                    </div>
                    <div class="row count-investment-form-control px-2">
                        <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                            <div class="form-group">
                                <label class="form-head" for="exampletext"> Type Of Investment
                                </label>
                                <input type="text" class="form-control" name="Type_of_investment${i}" id="Type_of_investment${i}"
                                    placeholder="Enter Type Of Investment" value="{{ old('Type_of_investment${i}') }}" required>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                            <div class="form-group">
                                <label class="form-head" for="exampletext"> Company Name
                                </label>
                                <input type="text" class="form-control" name="Company_name${i}" id="Company_name${i}"
                                    placeholder="Enter Company Name" value="{{ old('Company_name${i}') }}" required>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                            <div class="form-group">
                                <label class="form-head" for="exampletext"> Current Value
                                </label>
                                <input type="text" class="form-control" name="Current_value${i}" id="Current_value${i}"
                                    placeholder="Enter Current Value" value="{{ old('Current_value${i}') }}" required>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                            <div class="form-group">
                                <label class="form-head" for="exampletext"> Balance
                                </label>
                                <input type="text" class="form-control" name="Balance${i}" id="Balance${i}"
                                    placeholder="Enter Balance" value="{{ old('Balance${i}') }}" required>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                            <div class="form-group">
                                <label class="form-head" for="exampletext"> Payment
                                </label>
                                <input type="text" class="form-control" name="Payment${i}" id="Payment${i}"
                                    placeholder="Enter Payment" value="{{ old('Payment${i}') }}" required>
                            </div>
                        </div>
                    </div>`;

            $('#inputContainerinv').show();
            $('#inputContainerinv').append(dependentSection1);

            }

            // Update the input count
            inputCountDisplay1.textContent = selectedValue1;
        }
    });
</script>

<script>


        const dropdown = document.getElementById('How_many_dependents_do_you_have');
        const inputCountDisplay = document.getElementById('inputCount');
        
        dropdown.addEventListener('change', function () {
            const selectedValue = parseInt(dropdown.value);
            
            if (selectedValue === '0') {
                $('#inputContainer').hide();
            } else {
     
                $('#inputContainer').empty();
                // Create new input elements based on the selected value
                for (let i = 1; i <= selectedValue; i++) {
                var dependentSection = `
                    <div class="form-section-divident text-left">
                        <h6>Dependent <span id="inputCount">${i}</span></h6>
                    </div>
                    <div class="row dependency-form-control px-2" id="dependentno">
                        <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 text-left">
                            <div class="form-group">
                                <label class="form-head" for="exampletext${i}"> Name </label>
                                <input type="text" class="form-control" id="dependent_name${i}" name="dependent_name${i}"
                                    placeholder="Enter your Name" value="{{ old('dependent_name${i}') }}" required>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 text-left">
                            <div class="form-group">
                                <label class="form-head" for="exampletext${i}"> Date Of Birth
                                </label>
                                <input type="date" class="form-control" id="dependent_date_of_birth${i}" name="dependent_date_of_birth${i}" value="{{ old('dependent_date_of_birth${i}') }}"
                                    placeholder="Enter your DOB" required>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 text-left">
                            <div class="form-group">
                                <label class="form-head" for="exampletext${i}"> SSN
                                </label>
                                <input type="text" class="form-control" id="dependent_ssn${i}"  name="dependent_ssn${i}"
                                    placeholder="Enter SSN" value="{{ old('dependent_ssn${i}') }}" required>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 text-left">
                            <div class="form-group">
                                <label class="form-head" for="exampletext${i}"> Relationship
                                </label>
                                <input type="text" class="form-control" id="dependent_relationship${i}" name="dependent_relationship${i}"
                                    placeholder="Enter Relationship"  value="{{ old('dependent_relationship${i}') }}" required>
                            </div>
                        </div>
                    </div>
                `;

                $('#inputContainer').show();
                $('#inputContainer').append(dependentSection);

                }

                // Update the input count
                inputCountDisplay.textContent = selectedValue;
            }
        });
    
</script>

<script src="js/plugins/dropify.min.js"></script>
    <script>
    $('.dropify').dropify();
    </script>
    <!--tab switch function -->
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        // Get references to the tabs and the switch button
        const tab1 = document.querySelector(".f-tab-cnt");
        const tab2 = document.getElementById("tab2");
        const switchButton = document.getElementById("switch-tab");
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
        switchButton.addEventListener("click", function(e) {
            e.preventDefault();
            toggleTabs();
        });

        // Add a click event listener to the back link
        backButton.addEventListener("click", function(e) {
            e.preventDefault();
            toggleTabs();
        });
    });
    </script>
    <script>
    // Add an event listener to the "Marital Status" radio buttons
    $('input[name="Marital_status"]').on('change', function() {
        if ($(this).val() === 'Married') {
            $('#marriedStatusSection').show();
        } else {
            $('#marriedStatusSection').hide();
            $('#spousesection1a').hide();
            $('#spousesection2a').hide();
            $('#spousesection3a').hide();
            $('#spousesection4a1').hide();
            $('#spousesection4a2').hide();
        }
    });
    </script>
    <!-- js marrige filling section dependecy -->
    <script>
    $(document).ready(function() {
       $('#dependentsSection').show();

        // event listener to the radio buttons for "Married Filing Status"
        $('input[name="Married_Filing_Status"]').change(function() {
            if ($(this).val() === 'Married Filing Separately') {
                // $('#dependentsSection').show();
                $('#spousesection1a').hide();
                $('#spousesection2a').hide();
                $('#spousesection3a').hide();
                $('#spousesection4a1').hide();
                $('#spousesection4a2').hide();
                if ($('.do_yo_class').val() === 'have any dependents yes') {

                    // $('#dependencyCountSection').show();
                    $('#inputContainer').show();
                }

                // $('#dependencyCountSection').show();
                // $('#dependentno').show();
            } else if ($(this).val() === 'Married Filing Jointly') {
                 $('#spousesection1a').show();
                 $('#spousesection2a').show();
                 $('#spousesection3a').show();
                 $('#spousesection4a1').show();
                 $('#spousesection4a2').show();
                // $('#dependentsSection').hide(); 
                // $('#dependencyCountSection').hide();
                // $('#inputContainer').hide();

            }
        });
    });
    </script>
    <!-- script for dependent -->
    <script>
    $(document).ready(function() {  

        //  event listener to the radio buttons for "Do you have any dependents"
        $('input[name="Do_you_have_any_dependents_EXCLUDING_yourself_and_your_spouse?"]').change(function() {

            if ($(this).val() === 'have any dependents yes') {

                $('#dependencyCountSection').show();
                $('#inputContainer').show();
            } else {

                $('#dependencyCountSection').hide();
                $('#inputContainer').hide();
            }
        });
    });
    </script>
    <!-- dependency blue tab open  -->
    <script>
    $(document).ready(function() {
        // Initially, hide all dependent input sections
        $('#dependentSections').hide();

        // Add an event listener to the "count-depend" select input
        $('#count-depend').change(function() {
            // Get the selected count of dependents
            var selectedCount = parseInt($(this).val());

            // Hide all dependent input sections
            $('#dependentSections').hide();

            // Create and populate dependent input sections based on the selected count and show them
            for (var i = 1; i <= selectedCount; i++) {
                var dependentSection = `
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 mt-2 mb-2 dependency-tab">
                        <div class="form-section-divident text-left">
                            <h6>Dependent ${i}</h6>
                        </div>
                        <!-- form dependency -->
                        <div class="row dependency-form-control px-2">
                            <!-- Add your input fields for each dependent here -->
                            <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 text-left">
                                <div class="form-group">
                                    <label class="form-head" for="exampletext"> Name </label>
                                    <input type="text" class="form-control" id="exampleInputtext"
                                        placeholder="Enter your Name" >
                                </div>
                            </div>
                            <!-- Repeat similar input fields for other information like DOB, SSN, and Relationship -->
                        </div>
                    </div>
                `;
            }

            // Show the dependent input sections
            $('#dependentSections').show();
        });
    });
    </script>
    <!-- script for how many bank account  -->
    <script>
    $(document).ready(function() {
        // Add an event listener to the "count-bank-accounts" select input
        $('#How_many_bank_accounts_do_you_have').change(function() {
            // Get the selected count of bank accounts
            var selectedCount = parseInt($(this).val());

            // Remove any existing bank statement input fields
            $('#bankStatementInputs').empty();

            // Create file input fields based on the selected count and show them
            for (var i = 1; i <= selectedCount; i++) {
                var inputField = `
                        <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                            <div class="form-group">
                                <label class="form-head" for="bank${i}">Bank ${i} <small>(Upload most recent 3 months of bank statements)</small></label>
                                <input type="file" class="form-control" id="bank${i}" name="bank${i}" accept="image/*"  required>
                            </div>
                        </div>
                    `;
                $('#bankStatementInputs').append(inputField);
            }
        });
    });
    </script>

    <script>
    $(document).ready(function() {
        // Add an event listener to the "count-bank-accounts" select input
        $('#How_Many_Bank_Accounts_Spouse_Have').change(function() {
            // Get the selected count of bank accounts
            var selectedCount1 = parseInt($(this).val());

            // Remove any existing bank statement input fields
            $('#bankStatementInputsspouse').empty();

            // Create file input fields based on the selected count and show them
            for (var i = 1; i <= selectedCount1; i++) {
                var inputField1 = `
                        <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                            <div class="form-group">
                                <label class="form-head" for="bank${i}">Spouse Bank ${i} <small>(Upload most recent 3 months of bank statements)</small></label>
                                <input type="file" class="form-control" id="bankspouse${i}" name="bankspouse${i}" accept="image/*" >
                            </div>
                        </div>
                    `;
                $('#bankStatementInputsspouse').append(inputField1);
            }
        });
    });
    </script>


    <!-- //////////////////////credit card count upload -->
    <script>
    $(document).ready(function() {

        $('#count-credit-accounts').change(function() {
            // Get the selected count of bank accounts
            var selectedCount = parseInt($(this).val());

            // Remove any existing bank statement input fields
            $('#cardStatementInputs').empty();

            // Create file input fields based on the selected count and show them
            for (var i = 1; i <= selectedCount; i++) {
                var inputField = `
                        <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                            <div class="form-group">
                                <label class="form-head" for="Credit Card${i}">Credit Card ${i} <small>(Upload Most Recent 3 Months Credit Card Statements)</small></label>
                                <input type="file" class="form-control" id="Ccard${i}" name="Credcards${i}" accept="image/*"  required>
                            </div>
                        </div>
                    `;
                $('#cardStatementInputs').append(inputField);
            }
        });
    });
    </script>
    <!-- ///////////////////// credit card count upload -->

    <!-- function for investment hide and show -->
    <script>
    // Get references to the radio buttons and the select element
    const haveInvestmentYes = document.getElementById("have-investment-yes");
    const haveInvestmentNo = document.getElementById("have-investment-no");
    const investmentSelect = document.getElementById("investment-select");

    // Add event listeners to the radio buttons
    haveInvestmentYes.addEventListener("change", function() {
        if (this.checked) {
            investmentSelect.style.display = "block"; 
            $('#inputContainerinv').show();
        }
    });

    haveInvestmentNo.addEventListener("change", function() {
        if (this.checked) {
            investmentSelect.style.display = "none"; 
             $('#inputContainerinv').hide();
        }
    });

    // By default, hide the select element
    // investmentSelect.style.display = "none";
    </script>
    <!-- do you have any credit card manage show  -->
    <script>
    // Get references to the radio buttons and the select element
    const creditCardYes = document.getElementById("credit-card-yes");
    const creditCardNo = document.getElementById("credit-card-no");
    const creditCardSelect = document.getElementById("credit-card-select");

    // Add event listeners to the radio buttons
    creditCardYes.addEventListener("change", function() {
        if (this.checked) {

            creditCardSelect.style.display = "block"; // Show the select element
            $('#cardStatementInputs').show();
        }
    });

    creditCardNo.addEventListener("change", function() {
        if (this.checked) {
            creditCardSelect.style.display = "none"; // Hide the select element
            $('#cardStatementInputs').hide();
        }
    });

    // By default, hide the select element
    // creditCardSelect.style.display = "none";
    </script>
        <!-- manage how many insurance show  -->
    <script>
    // Get references to the radio buttons and the select element
    const lifeInsuranceYes = document.getElementById("life-insurance-yes");
    const lifeInsuranceNo = document.getElementById("life-insurance-no");
    const insuranceSelect = document.getElementById("insurance-select");

    // Add event listeners to the radio buttons
    lifeInsuranceYes.addEventListener("change", function () {
        if (this.checked) {
            insuranceSelect.style.display = "block"; 
            $('#inputContainerinsure').show();
        }
    });

    lifeInsuranceNo.addEventListener("change", function () {
        if (this.checked) {
            insuranceSelect.style.display = "none"; 
            $('#inputContainerinsure').hide();
        }
    });

    // By default, hide the select element
    // insuranceSelect.style.display = "none";
</script>
 <!-- manage how many real estate show  -->
<script>
// Get references to the radio buttons and the select element
const realestateYes = document.getElementById("real-estate-yes");
const realestateNo = document.getElementById("real-estate-no");
const realestateSelect = document.getElementById("realestate-select");

// Add event listeners to the radio buttons
realestateYes.addEventListener("change", function() {
    if (this.checked) {
        realestateSelect.style.display = "block";
        $('#inputContainerestate').show();
    }
});

realestateNo.addEventListener("change", function() {
    if (this.checked) {
        realestateSelect.style.display = "none";
        $('#inputContainerestate').hide();
    }
});

// By default, hide the select element
// realestateSelect.style.display = "none";
</script>
<script>
// Get references to the radio buttons and the select element
const motorvehicleYes = document.getElementById("motor-vehicle-yes");
const motorvehicleNo = document.getElementById("motor-vehicle-no");
const motorvehicleSelect = document.getElementById("motorvehicle-select");

// Add event listeners to the radio buttons
motorvehicleYes.addEventListener("change", function() {
    if (this.checked) {
        motorvehicleSelect.style.display = "block";
        $('#inputContainervehical').show();
    }
});

motorvehicleNo.addEventListener("change", function() {
    if (this.checked) {
        motorvehicleSelect.style.display = "none";
        $('#inputContainervehical').hide();
    }
});

// By default, hide the select element
// motorvehicleSelect.style.display = "none";
</script>
<script>
// Get references to the radio buttons and the select element
const personalassetsYes = document.getElementById("Personal-assets-yes");
const personalassetsNo = document.getElementById("Personal-assets-no");
const psassetsselect = document.getElementById("psassets-select");

// Add event listeners to the radio buttons
personalassetsYes.addEventListener("change", function() {
    if (this.checked) {
        psassetsselect.style.display = "block";
        $('#inputContainerpersonal').show();
    }
});

personalassetsNo.addEventListener("change", function() {
    if (this.checked) {
        psassetsselect.style.display = "none";
        $('#inputContainerpersonal').hide();
    }
});

// By default, hide the select element
// psassetsselect.style.display = "none";
</script>

<script>
    $(document).ready(function () {
        // Function to check if a value is a number
        function isNumber(value) {
            return !isNaN(value) && isFinite(value);
        }

        // Event listener for the button click
        $("#calculateBtn").click(function () {
            // Get all input values
            var inputValues = $(".numberInput").map(function () {
                return $(this).val();
            }).get();

            // Check if all values are numbers
            var allNumbers = inputValues.every(isNumber);

            if (allNumbers) {
                // Calculate the sum
                var sum = inputValues.reduce(function (acc, val) {
                    return acc + parseFloat(val);
                }, 0);

                // Display the sum in the result field
                $("#Total_HouseHold_Income_calulate").val(sum);
            } else {
                alert("Please enter valid numbers in all fields.");
            }
        });

        // Event listener for the button click
        $("#calculateBtn2").click(function () {
            // Get all input values
            var inputValues2 = $(".numberInput2").map(function () {
                return $(this).val();
            }).get();

            // Check if all values are numbers
            var allNumbers2 = inputValues2.every(isNumber);

            if (allNumbers2) {
                // Calculate the sum
                var sum = inputValues2.reduce(function (acc, val) {
                    return acc + parseFloat(val);
                }, 0);

                // Display the sum in the result field
                $("#TotHouseholdExpensecalculate").val(sum);
            } else {
                alert("Please enter valid numbers in all fields.");
            }
        });
    });
</script>

<script>
// Get references to the radio buttons and the select element
const bankruptcyYes = document.getElementById("bankruptcy-yes");
const bankruptcyNo = document.getElementById("bankruptcy-no");
const bankruptcySelect = document.getElementById("bankruptcy-select");

// Add event listeners to the radio buttons
bankruptcyYes.addEventListener("change", function() {
    if (this.checked) {
        bankruptcySelect.style.display = "block";
    }
});

bankruptcyNo.addEventListener("change", function() {
    if (this.checked) {
        bankruptcySelect.style.display = "none";
    }
});

// By default, hide the select element
// bankruptcySelect.style.display = "none";
</script>
<!-- bank cruptcy Discharge/Dismissal Date end -->

<!-- :: Date the lawsuit was resolved s-h  -->
<script>
// Get references to the radio buttons and the select element
const lawsuitYes = document.getElementById("lawsuit-yes");
const lawsuitNo = document.getElementById("lawsuit-no");
const lawsuitSelect = document.getElementById("lawsuit-select");

// Add event listeners to the radio buttons
lawsuitYes.addEventListener("change", function() {
    if (this.checked) {
        lawsuitSelect.style.display = "block";
    }
});

lawsuitNo.addEventListener("change", function() {
    if (this.checked) {
        lawsuitSelect.style.display = "none";
    }
});

// By default, hide the select element
// lawsuitSelect.style.display = "none";
</script>
<!-- Date the lawsuit was resolved end-->

<!-- :: Date the asset was transferred  -->
<script>
// Get references to the radio buttons and the select element
const transferredassetsYes = document.getElementById("transferred-assets-yes");
const transferredassetsNo = document.getElementById("transferred-assets-no");
const transferredassetSelect = document.getElementById("transferred-asset-select");

// Add event listeners to the radio buttons
transferredassetsYes.addEventListener("change", function() {
    if (this.checked) {
        transferredassetSelect.style.display = "block";
    }
});

transferredassetsNo.addEventListener("change", function() {
    if (this.checked) {
        transferredassetSelect.style.display = "none";
    }
});

// By default, hide the select element
// transferredassetSelect.style.display = "none";
</script>
<!-- Date the asset was transferred end-->

<!-- :: Date the asset was transferred  -->
<script>
// Get references to the radio buttons and the select element
const transferralpropertyYes = document.getElementById("transferral-property-yes");
const transferralpropertyNo = document.getElementById("transferral-property-no");
const transferralSelect = document.getElementById("transferral-select");

// Add event listeners to the radio buttons
transferralpropertyYes.addEventListener("change", function() {
    if (this.checked) {
        transferralSelect.style.display = "block";
    }
});

transferralpropertyNo.addEventListener("change", function() {
    if (this.checked) {
        transferralSelect.style.display = "none";
    }
});

// By default, hide the select element
// transferralSelect.style.display = "none";
</script>
<script>
    // Add this JavaScript code to capture the browser name
    document.getElementById('browser').value = navigator.userAgent;
</script>
<script>
    document.getElementById('device').value = navigator.userAgent;
</script>

<script>
    $(document).ready(function() {
        $('.delete-image-bank').click(function() {
            // var imageId = $(this).data('id');
            var imageId = jQuery(this).attr('data-id');
            var model = jQuery(this).attr('data-model');
            var delclass = model+imageId;
            var delclassold = model+'_old'+imageId;
            event.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "{{ route('delete-image-bank') }}/" ,
                type: 'POST',
                data: {imageId:imageId, model:model},
                success: function(response) { 
                    $('.'+delclass).css('display', 'none');
                    $('.'+delclassold).val('');
                },
                error: function(error) {
                    console.log(error.responseText);
                }
            });
        });
    });
</script>

@endsection