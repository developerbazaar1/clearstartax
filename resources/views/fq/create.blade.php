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
                            <a href="{{ route('fqs') }}" class="back-to-tab-one">
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
                            <p>You may pause and continue your financial questionnaire anytime by clicking "Save
                                Progress" at the bottom of the form</p>
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
                            <form action="{{route('fq-store')}}" method="POST"  enctype="multipart/form-data">
                                @csrf
                                <!-- :: form section 01 -->
                                <div class="form-section-highlite mt-3">
                                    <h5>SECTION 1: Personal Information</h5>
                                </div>
                                <div class="row mt-3">
                                    
                                    <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 text-left">
                                        <div class="form-group">
                                            <label class="form-head" for="exampletext"> Last Name : <span class="red">*</span></label>
                                            <input type="text" name="Last_name" class="form-control  @error('Last_name') is-invalid @enderror" id="Last_name"
                                                placeholder="Enter Last name" value="{{ old('Last_name') }}">
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
                                            <input type="text" class="form-control @error('First_name') is-invalid @enderror " name="First_name" id="First_name" value="{{ old('First_name') }}"
                                                placeholder="Enter First name" >
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
                                            <input type="date" name="Date_of_birth" value="{{ old('Date_of_birth') }}" class="form-control @error('Date_of_birth') is-invalid @enderror " id="Date_of_birth"
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
                                            <input type="text" name="SSN#" value="{{ old('SSN#') }}" class="ssn_valid form-control @error('SSN#') is-invalid @enderror " id="SSN#"
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
                                            <input type="text" class="form-control @error('Street_address') is-invalid @enderror " value="{{ old('Street_address') }}" name="Street_address" id="Street_address"
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
                                                placeholder="Enter your address " >
                                        </div>
                                    </div>
                                    <!-- :: input 07 -->
                                    <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 text-left">
                                        <div class="form-group">
                                            <label class="form-head" for="exampletext"> City : <span class="red">*</span></label>
                                            <input type="text" name="City" value="{{ old('City') }}" class="form-control @error('City') is-invalid @enderror " id="City"
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
                                            <input type="text" name="State" value="{{ old('State') }}" class="form-control @error('State') is-invalid @enderror " id="State"
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
                                            <input type="text" name="Zip_code" value="{{ old('Zip_code') }}" class="form-control @error('Zip_code') is-invalid @enderror" id="Zip_code"
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
                                            <input type="text" name="Country_of_residence" value="{{ old('Country_of_residence') }}" class="form-control @error('Country_of_residence') is-invalid @enderror " id="Country_of_residence"
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
                                            <input type="text" name="Rent_or_own" value="{{ old('Rent_or_own') }}" class="form-control @error('Rent_or_own') is-invalid @enderror " id="Rent_or_own"
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
                                            <input type="text" name="Driver_license#" value="{{ old('Driver_license#') }}" class="form-control @error('Driver_license#') is-invalid @enderror " id="Driver_license#"
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
                                            <input type="text"  value="{{ old('Primary_phone_number') }}" name="Primary_phone_number" class="form-control @error('Primary_phone_number') is-invalid @enderror " id="Primary_phone_number"
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
                                            <input type="text" name="2nd_contact_phone_number" class="form-control" id="2nd_contact_phone_number" value="{{ old('2nd_contact_phone_number') }}"
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
                                                        name="Marital_status" id="Marital_status1" value="Single" @if(old('Marital_status') == 'Single') checked @endif>Single
                                                </label>
                                            </div>
                                            <div class="form-check @error('Marital_status') is-invalid @enderror">
                                                <label class="form-check-label">
                                                    <input class="form-check-input @error('Marital_status') is-invalid @enderror" name="Marital_status" id="Marital_status2" type="radio"
                                                     value="Married"  @if(old('Marital_status') == 'Married') checked @endif>Married
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
                                    @if(old('Marital_status') == 'Married')
                                    <div class="col-md-4 ff col-lg-4 col-sm-12 col-xs-12 text-left"
                                        id="marriedStatusSection">
                                        <div class="form-group">
                                            <label class="form-head" for="exampletext"> Married Filing Status <span class="red">*</span>
                                            </label>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" id="Married_Filing_Status1" type="radio"
                                                        name="Married_Filing_Status"
                                                        value="Married Filing Separately" @if(old('Married_Filing_Status') == 'Married Filing Separately') checked @endif>Married Filing Separately
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input @error('Married_Filing_Status') is-invalid @enderror" id="Married_Filing_Status2" type="radio"
                                                        name="Married_Filing_Status" value="Married Filing Jointly" @if(old('Married_Filing_Status') == 'Married Filing Jointly') checked @endif>Married
                                                    Filing Jointly
                                                    @error('Married_Filing_Status')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    @else
                                    <div class="col-md-4 gg col-lg-4 col-sm-12 col-xs-12 text-left"
                                        id="marriedStatusSection" style="display: none;">
                                        <div class="form-group">
                                            <label class="form-head" for="exampletext"> Married Filing Status <span class="red">*</span>
                                            </label>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" id="Married_Filing_Status1" type="radio"
                                                        name="Married_Filing_Status"
                                                        value="Married Filing Separately" @if(old('Married_Filing_Status') == 'Married Filing Separately') checked @endif>Married Filing Separately
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input @error('Married_Filing_Status') is-invalid @enderror" id="Married_Filing_Status2" type="radio"
                                                        name="Married_Filing_Status" value="Married Filing Jointly" @if(old('Married_Filing_Status') == 'Married Filing Jointly') checked @endif>Married
                                                    Filing Jointly
                                                    @error('Married_Filing_Status')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    <!-- :: input 19 -->
                                    <!-- **************** spouse detail ************ -->
                                    @if(old('Married_Filing_Status') == 'Married Filing Jointly' && old('Marital_status') == 'Married') 
                                    
                                    <div class="col-12" id="spousesection1a" >
                                        <div class="row" >
                                            <div class="col-md-12" id="spouse-select">
                                                <div class="form-section-highlite mt-3 mb-3">
                                                    <div>SECTION 1(a): Spouse Information
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 mt-2 mb-2 dependency-tab"
                                                id="spouse-tab" >
                                                <div class="form-section-divident text-left">
                                                    <h6>Spouse Info <span class="red">*</span></h6>
                                                </div>
                                                <div class="row dependency-form-control px-2">
                                                    <!-- :: input 01 name -->
                                                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                        <div class="form-group">
                                                            <label class="form-head" for="firstname">First Name </label>
                                                            <input type="text" class="form-control @error('spouse_first_name') is-invalid @enderror" name="spouse_first_name" id="spouse_first_name"  value="{{ old('spouse_first_name') }}"
                                                                placeholder="Enter first name" >
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
                                                            <input type="text" class="form-control @error('spouse_last_name') is-invalid @enderror" name="spouse_last_name" id="spouse_last_name" value="{{ old('spouse_last_name') }}"
                                                                placeholder="Enter last name" >
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
                                                            <label class="form-head" for="driving-li"> Driver's License
                                                            </label>
                                                            <input type="text" class="form-control @error('spouse_Driver_License') is-invalid @enderror" name="spouse_Driver_License" id="spouse_Driver_License" value="{{ old('spouse_Driver_License') }}"
                                                                placeholder="Enter driver lisence" >
                                                            @error('spouse_Driver_License')
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
                                                            <input type="text" class="ssn_valid form-control @error('spouse_ssn') is-invalid @enderror" name="spouse_ssn" id="spouse_ssn"
                                                                placeholder="Enter ssn" value="{{ old('spouse_ssn') }}">
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
                                                            <input type="date" class="form-control @error('spouse_date_of_birth') is-invalid @enderror" name="spouse_date_of_birth" id="spouse_date_of_birth" value="{{ old('spouse_date_of_birth') }}"
                                                                >
                                                            @error('spouse_date_of_birth')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @else
                                    <div class="col-12" id="spousesection1a" style="display: none;">
                                        <div class="row" >
                                            <div class="col-md-12" id="spouse-select">
                                                <div class="form-section-highlite mt-3 mb-3">
                                                    <div>SECTION 1(a): Spouse Information
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 mt-2 mb-2 dependency-tab"
                                                id="spouse-tab" >
                                                <div class="form-section-divident text-left">
                                                    <h6>Spouse Info <span class="red">*</span></h6>
                                                </div>
                                                <div class="row dependency-form-control px-2">
                                                    <!-- :: input 01 name -->
                                                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                        <div class="form-group">
                                                            <label class="form-head" for="firstname">First Name </label>
                                                            <input type="text" class="form-control @error('spouse_first_name') is-invalid @enderror" name="spouse_first_name" id="spouse_first_name"  value="{{ old('spouse_first_name') }}"
                                                                placeholder="Enter first name" >
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
                                                            <input type="text" class="form-control @error('spouse_last_name') is-invalid @enderror" name="spouse_last_name" id="spouse_last_name" value="{{ old('spouse_last_name') }}"
                                                                placeholder="Enter last name" >
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
                                                            <label class="form-head" for="driving-li"> Driver's License
                                                            </label>
                                                            <input type="text" class="form-control @error('spouse_Driver_License') is-invalid @enderror" name="spouse_Driver_License" id="spouse_Driver_License" value="{{ old('spouse_Driver_License') }}"
                                                                placeholder="Enter driver lisence" >
                                                            @error('spouse_Driver_License')
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
                                                            <input type="text" class="ssn_valid form-control @error('spouse_ssn') is-invalid @enderror" name="spouse_ssn" id="spouse_ssn"
                                                                placeholder="Enter ssn" value="{{ old('spouse_ssn') }}">
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
                                                            <input type="date" class="form-control @error('spouse_date_of_birth') is-invalid @enderror" name="spouse_date_of_birth" id="spouse_date_of_birth" value="{{ old('spouse_date_of_birth') }}"
                                                                >
                                                            @error('spouse_date_of_birth')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
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
                                                        value="have any dependents yes" @if(old('Do_you_have_any_dependents_EXCLUDING_yourself_and_your_spouse?') == 'have any dependents yes') checked @endif>Yes
                                                       
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input @error('Do_you_have_any_dependents_EXCLUDING_yourself_and_your_spouse?') is-invalid @enderror" name="Do_you_have_any_dependents_EXCLUDING_yourself_and_your_spouse?" id="Do_you_have_any_dependents_EXCLUDING_yourself_and_your_spouse?2" type="radio"
                                                     value="have any dependents no" @if(old('Do_you_have_any_dependents_EXCLUDING_yourself_and_your_spouse?') == 'have any dependents no') checked @endif>No
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
                                    @if(old('Do_you_have_any_dependents_EXCLUDING_yourself_and_your_spouse?') == 'have any dependents yes')
                                    
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left"
                                        id="dependencyCountSection" style="display: block;">
                                        <div class="form-group depend-cnt">
                                            <label class="form-head" for="count-depend">How many dependents do you
                                                have? <span class="red">*</span></label>
                                            <div class="select-group h-40">
                                                <select class="form-control @error('How_many_dependents_do_you_have') is-invalid @enderror" id="How_many_dependents_do_you_have" name="How_many_dependents_do_you_have">
                                                  

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
                                                @error('How_many_dependents_do_you_have')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    @else
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left"
                                        id="dependencyCountSection" style="display: none;">
                                        <div class="form-group depend-cnt">
                                            <label class="form-head" for="count-depend">How many dependents do you
                                                have? <span class="red">*</span></label>
                                            <div class="select-group h-40">
                                                <select class="form-control @error('How_many_dependents_do_you_have') is-invalid @enderror" id="How_many_dependents_do_you_have" name="How_many_dependents_do_you_have">
                                                  

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
                                                
                                                @error('How_many_dependents_do_you_have'){{ $message }}
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 mt-2 mb-2 dependency-tab "
                                        id="inputContainer" style="display: none;" >
                                        
                                    </div>    


                                     <!-- **************** sum form head ************ -->
                                    
                                    <!-- **************** sum form head ************ -->
                                    <!-- ::::::section 02::::::: -->
                                    <div class="col-12">
                                        <div class="row">    
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
                                                                    type="radio" name="Client_employment_status" value="Wage Earner" @if(old('Client_employment_status') == 'Wage Earner') checked @endif>Wage
                                                                Earner/ Employee
                                                                 
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" id="Client_employment_status2"
                                                                    type="radio" name="Client_employment_status"
                                                                    value="Self-Employed" @if(old('Client_employment_status') == 'Self-Employed') checked @endif>Self-Employed
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" id="Client_employment_status3"
                                                                    type="radio" name="Client_employment_status"
                                                                    value="Disability" @if(old('Client_employment_status') == 'Disability') checked @endif>Disability
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" id="Client_employment_status4"
                                                                    type="radio" name="Client_employment_status" value="Retired" @if(old('Client_employment_status') == 'Retired') checked @endif>Retired
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input @error('Client_employment_status') is-invalid @enderror" id="Client_employment_status5"
                                                                    type="radio" name="Client_employment_status"
                                                                    value="Unemployed" @if(old('Client_employment_status') == 'Unemployed') checked @endif>Unemployed
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
                                            <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 dependency-tab Spouse_Employment_Status_detail_Section1"  id="Spouse_Employment_Status_detail_Section_em" style="display: none;">
                                                <div class="form-section-divident text-left mb-3">
                                                    <h6>Employer</h6>
                                                </div>
                                                <div class="row px-2">
                                                    <!-- :: input 01 -->
                                                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                        <div class="form-group">
                                                            <label class="form-head" for="spouname">Employer Name</label>
                                                            <input type="text" class="form-control" name="Em_Employer_Name" id="emspousename" placeholder="" >
                                                        </div>
                                                    </div>
                                                    <!-- :: input 02 -->
                                                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                        <div class="form-group">
                                                            <label class="form-head" for="spOccupation">Occupation</label>
                                                            <input type="text" class="form-control" id="emspouseOccupation" name="Em_Occupation" placeholder="" >
                                                        </div>
                                                    </div>
                                                    <!-- input 03 -->
                                                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                        <div class="form-group">
                                                            <label class="form-head" for="spaddress">Employer Address</label>
                                                            <input type="text" class="form-control" id="emspouseAddress" name="Em_Employer_Address" placeholder="" >
                                                        </div>
                                                    </div>
                                                    <!-- input 04 -->
                                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                        <div class="form-group">
                                                            <label class="form-head" for="sptime">How Long with this Employer</label>
                                                            <input type="text" class="form-control" name="Em_How_Long_with_this_Employer" id="emspousetime" placeholder="" >
                                                        </div>
                                                    </div>
                                                    <!-- input 05 -->
                                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                        <div class="form-group">
                                                            <label class="form-head" for="spw4">Number of Exemptions claimed on W4</label>
                                                            <input type="text" name="Em_Number_of_Exemptions_claimed_on_W4" class="form-control" id="emspousew4" placeholder="" >
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- radio for spouse pay period -->
                                            <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 mt-4 Spouse_Employment_Status_detail_Section2"  id="Spouse_Employment_Status_detail_Section_spouse" style="display: none;">
                                                <div class=" mt-2 mb-2">
                                                    <!-- :::input radio -->
                                                    <div class="form-group d-flex cnt-justified" style="align-items: baseline;">
                                                        <label class="form-head" for="exampletext"> Spouse Pay Period </label>
                                                        <div class="form-check">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" id="optionsRadiosWeekly" type="radio" name="EmspStatus" value="Weekly">Weekly </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" id="optionsRadiosmonthly" type="radio" name="EmspStatus" value="Monthly">Monthly </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" id="optionsRadiosbiweekly" type="radio" name="EmspStatus" value="Bi-Weekly">Bi-Weekly </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" id="optionsRadiossemi-monthly " type="radio" name="EmspStatus" value="Semi-Monthly">Semi-Monthly </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="text" class="form-control" name="emspouseamount" id="emspouseamount" placeholder="" >
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ::::::section 02::::::: -->


                                    <div class="col-12" id="spousesection2a" style="display: none;">
                                        <div class="row">
                                            <!-- id="spousesection2a" style="display: none;" -->
                                            <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12" id="spousesection2a_ttyy" >
                                    
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

                                            <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 dependency-tab Spouse_Employment_Status_detail_Section1"  id="Spouse_Employment_Status_detail_Section_spouse" style="display: none;">
                                                <div class="form-section-divident text-left mb-3">
                                                    <h6>Spouse Employer</h6>
                                                </div>
                                                <div class="row px-2">
                                                    <!-- :: input 01 -->
                                                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                        <div class="form-group">
                                                            <label class="form-head" for="spouname">Employer Name</label>
                                                            <input type="text" class="form-control" name="Spouse_Employer_Name" id="spousename" placeholder="" >
                                                        </div>
                                                    </div>
                                                    <!-- :: input 02 -->
                                                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                        <div class="form-group">
                                                            <label class="form-head" for="spOccupation">Occupation</label>
                                                            <input type="text" class="form-control" id="spouseOccupation" name="Spouse_Occupation" placeholder="" >
                                                        </div>
                                                    </div>
                                                    <!-- input 03 -->
                                                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                        <div class="form-group">
                                                            <label class="form-head" for="spaddress">Employer Address</label>
                                                            <input type="text" class="form-control" id="spouseAddress" name="Spouse_Employer_Address" placeholder="" >
                                                        </div>
                                                    </div>
                                                    <!-- input 04 -->
                                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                        <div class="form-group">
                                                            <label class="form-head" for="sptime">How Long with this Employer</label>
                                                            <input type="text" class="form-control" name="Spouse_How_Long_with_this_Employer" id="spousetime" placeholder="" >
                                                        </div>
                                                    </div>
                                                    <!-- input 05 -->
                                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                        <div class="form-group">
                                                            <label class="form-head" for="spw4">Number of Exemptions claimed on W4</label>
                                                            <input type="text" name="Spouse_Number_of_Exemptions_claimed_on_W4" class="form-control" id="spousew4" placeholder="" >
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- radio for spouse pay period -->
                                            <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 mt-4 Spouse_Employment_Status_detail_Section2"  id="Spouse_Employment_Status_detail_Section_spouse" style="display: none;">
                                                <div class=" mt-2 mb-2">
                                                    <!-- :::input radio -->
                                                    <div class="form-group d-flex cnt-justified" style="align-items: baseline;">
                                                        <label class="form-head" for="exampletext"> Spouse Pay Period </label>
                                                        <div class="form-check">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" id="optionsRadiosWeekly" type="radio" name="spStatus" value="Weekly">Weekly </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" id="optionsRadiosmonthly" type="radio" name="spStatus" value="Monthly">Monthly </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" id="optionsRadiosbiweekly" type="radio" name="spStatus" value="Bi-Weekly">Bi-Weekly </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" id="optionsRadiossemi-monthly " type="radio" name="spStatus" value="Semi-Monthly">Semi-Monthly </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="text" class="form-control" name="Spouse_Pay_amount" id="spouseamount" placeholder="" >
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


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
                                            <span class="currency_input">$</span>
                                            <input type="number"  step="any" class="numberInputOnly1 form-control @error('Cash_on_hand_amount') is-invalid @enderror" name="Cash_on_hand_amount" id="Cash_on_hand_amount"
                                                placeholder="Enter Amount" value="{{ old('Cash_on_hand_amount') }}"
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
                                                 

                                                    @if (old('How_many_bank_accounts_do_you_have') == '0')
                                                        <option value="0" selected>Select an option</option>
                                                    @else
                                                        <option value="0">Select an option</option>
                                                    @endif

                                                    @if (old('How_many_bank_accounts_do_you_have') == '1')
                                                        <option value="1" selected>1</option>
                                                    @else
                                                        <option value="1">1</option>
                                                    @endif

                                                    @if (old('How_many_bank_accounts_do_you_have') == '2')
                                                        <option value="2" selected>2</option>
                                                    @else
                                                        <option value="2">2</option>
                                                    @endif

                                                    @if (old('How_many_bank_accounts_do_you_have') == '3')
                                                        <option value="3" selected>3</option>
                                                    @else
                                                        <option value="3">3</option>
                                                    @endif

                                                    @if (old('How_many_bank_accounts_do_you_have') == '4')
                                                        <option value="4" selected>4</option>
                                                    @else
                                                        <option value="4">4</option>
                                                    @endif

                                                    @if (old('How_many_bank_accounts_do_you_have') == '5')
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
                                    <!-- :: input Bank 1 (Upload most recent 3 months of bank statements)  -->
                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 text-left">
                                        <!-- File input fields for bank statements -->
                                        <div id="bankStatementInputs">
                                            <!--  input fields will be dynamically created -->
                                        </div>
                                    </div>
                                    <!-- input Can you take a loan against your 401k Account?  -->
                                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                        <div class="form-group">
                                            <label class="form-head" for="exampletext"> Can you take a loan against
                                                your 401k Account?
                                            <span class="red">*</span></label>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input @error('Can_you_take_a_loan_against_your_401k_account') is-invalid @enderror" id="Can_you_take_a_loan_against_your_401k_account1"
                                                        type="radio" name="Can_you_take_a_loan_against_your_401k_account" value="Yes" @if(old('Can_you_take_a_loan_against_your_401k_account') == 'Yes') checked @endif>Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input @error('Can_you_take_a_loan_against_your_401k_account') is-invalid @enderror" id="Can_you_take_a_loan_against_your_401k_account2"
                                                        type="radio" name="Can_you_take_a_loan_against_your_401k_account" value="No" @if(old('Can_you_take_a_loan_against_your_401k_account') == 'No') checked @endif>No
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
                                                        type="radio" name="Do_you_have_any_investments?" value="Yes" @if(old('Do_you_have_any_investments?') == 'Yes') checked @endif>Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input @error('Do_you_have_any_investments?') is-invalid @enderror" id="have-investment-no"
                                                        type="radio" name="Do_you_have_any_investments?" value="No" @if(old('Do_you_have_any_investments?') == 'No') checked @endif>No
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
                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 text-left"
                                        id="investment-select">
                                        <div class="form-group">
                                            <label class="form-head" for="exampletext">How many type of investments
                                                do you have? <span class="red">*</span>
                                            </label>
                                            <div class="select-group h-40">
                                                <select class="form-control" id="How_many_type_of_investments_do_you_have"
                                                    name="How_many_type_of_investments_do_you_have?">
                                                    @if (old('How_many_type_of_investments_do_you_have?') == '0')
                                                        <option value="0" selected>Select an option</option>
                                                    @else
                                                        <option value="0">Select an option</option>
                                                    @endif

                                                    @if (old('How_many_type_of_investments_do_you_have?') == '1')
                                                        <option value="1" selected>1</option>
                                                    @else
                                                        <option value="1">1</option>
                                                    @endif

                                                    @if (old('How_many_type_of_investments_do_you_have?') == '2')
                                                        <option value="2" selected>2</option>
                                                    @else
                                                        <option value="2">2</option>
                                                    @endif

                                                    @if (old('How_many_type_of_investments_do_you_have?') == '3')
                                                        <option value="3" selected>3</option>
                                                    @else
                                                        <option value="3">3</option>
                                                    @endif

                                                    @if (old('How_many_type_of_investments_do_you_have?') == '4')
                                                        <option value="4" selected>4</option>
                                                    @else
                                                        <option value="4">4</option>
                                                    @endif

                                                    @if (old('How_many_type_of_investments_do_you_have?') == '5')
                                                        <option value="5" selected>5</option>
                                                    @else
                                                        <option value="5">5</option>
                                                    @endif
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ::::: how many investment filling form :::::: -->
                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 mt-2 mb-2 dependency-tab"
                                        id="inputContainerinv" style="">
                                    </div>

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
                                                        type="radio" name="Do_you_have_any_credi_cards?" value="Yes" @if(old('Do_you_have_any_credi_cards?') == 'Yes') checked @endif>Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input @error('Do_you_have_any_credi_cards?') is-invalid @enderror" id="credit-card-no" type="radio"
                                                        name="Do_you_have_any_credi_cards?" value="No" @if(old('Do_you_have_any_credi_cards?') == 'No') checked @endif>No
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
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left"
                                        id="credit-card-select">
                                        <div class="form-group">
                                            <label class="form-head" for="exampletext">How many Credit Cards Do You
                                                Have? <span class="red">*</span>
                                            </label>
                                            <div class="select-group h-40">
                                                <select class="form-control" id="count-credit-accounts"
                                                    name="How_many_credit_cards_do_you_have?">
                                                    @if (old('How_many_credit_cards_do_you_have?') == '0')
                                                        <option value="0" selected>Select an option</option>
                                                    @else
                                                        <option value="0">Select an option</option>
                                                    @endif

                                                    @if (old('How_many_credit_cards_do_you_have?') == '1')
                                                        <option value="1" selected>1</option>
                                                    @else
                                                        <option value="1">1</option>
                                                    @endif

                                                    @if (old('How_many_credit_cards_do_you_have?') == '2')
                                                        <option value="2" selected>2</option>
                                                    @else
                                                        <option value="2">2</option>
                                                    @endif

                                                    @if (old('How_many_credit_cards_do_you_have?') == '3')
                                                        <option value="3" selected>3</option>
                                                    @else
                                                        <option value="3">3</option>
                                                    @endif

                                                    @if (old('How_many_credit_cards_do_you_have?') == '4')
                                                        <option value="4" selected>4</option>
                                                    @else
                                                        <option value="4">4</option>
                                                    @endif

                                                    @if (old('How_many_credit_cards_do_you_have?') == '5')
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
                                        <div id="cardStatementInputs">
                                            <!--  input fields will be dynamically created -->
                                        </div>
                                    </div>

                                    




                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                        <div class="form-group">
                                            <label class="form-head" for="exampletext"> Do You Have Life Insurance?
                                                (Life insurance policy with cash value - NOT TERM LIFE)
                                            <span class="red">*</span></label>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input @error('Do_you_have_life_insurance?') is-invalid @enderror" id="life-insurance-yes"
                                                        type="radio" name="Do_you_have_life_insurance?" value="Yes" @if(old('Do_you_have_life_insurance?') == 'Yes') checked @endif>Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input @error('Do_you_have_life_insurance?') is-invalid @enderror" id="life-insurance-no"
                                                        type="radio" name="Do_you_have_life_insurance?" value="No" @if(old('Do_you_have_life_insurance?') == 'No') checked @endif>No
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
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left"
                                        id="insurance-select" style="display: none;">
                                        <div class="form-group">
                                            <label class="form-head" for="exampletext">How Many Life Insurance
                                                Policy Do You Have? (Life insurance policy with cash value – NOT
                                                TERM LIFE) <span class="red">*</span>
                                            </label>
                                            <div class="select-group h-40">
                                                <select class="form-control" id="How_many_life_insurance_policy_do_you_have?"
                                                    name="How_many_life_insurance_policy_do_you_have?">
                                                    @if (old('How_many_life_insurance_policy_do_you_have?') == '0')
                                                        <option value="0" selected>Select an option</option>
                                                    @else
                                                        <option value="0">Select an option</option>
                                                    @endif

                                                    @if (old('How_many_life_insurance_policy_do_you_have?') == '1')
                                                        <option value="1" selected>1</option>
                                                    @else
                                                        <option value="1">1</option>
                                                    @endif

                                                    @if (old('How_many_life_insurance_policy_do_you_have?') == '2')
                                                        <option value="2" selected>2</option>
                                                    @else
                                                        <option value="2">2</option>
                                                    @endif
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 mt-2 mb-3 dependency-tab"
                                            id="inputContainerinsure" style="">
                                    </div>


                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                        <div class="form-group">
                                            <label class="form-head" for="exampletext"> Do You Own Any Real Estate?
                                                (Any Real Estate/Primary Residence/Rental Properties/ Lands Owned)
                                            <span class="red">*</span></label>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input @error('Do_you_own_any_real_estate?') is-invalid @enderror" id="real-estate-yes"
                                                        type="radio" name="Do_you_own_any_real_estate?" value="Yes" @if(old('Do_you_own_any_real_estate?') == 'Yes') checked @endif>Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input @error('Do_you_own_any_real_estate?') is-invalid @enderror" id="real-estate-no" type="radio"
                                                        name="Do_you_own_any_real_estate?" value="No" @if(old('Do_you_own_any_real_estate?') == 'No') checked @endif>No
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
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left"
                                        id="realestate-select" style="display: block;">
                                        <div class="form-group">
                                            <label class="form-head" for="exampletext">How Many Properties Do You
                                                Own? <span class="red">*</span>
                                            </label>
                                            <div class="select-group h-40">
                                                <select class="form-control" id="How_many_properties_do_you_own?"
                                                    name="How_many_properties_do_you_own?">
                                                    @if (old('How_many_properties_do_you_own?') == '0')
                                                        <option value="0" selected>Select an option</option>
                                                    @else
                                                        <option value="0">Select an option</option>
                                                    @endif

                                                    @if (old('How_many_properties_do_you_own?') == '1')
                                                        <option value="1" selected>1</option>
                                                    @else
                                                        <option value="1">1</option>
                                                    @endif

                                                    @if (old('How_many_properties_do_you_own?') == '2')
                                                        <option value="2" selected>2</option>
                                                    @else
                                                        <option value="2">2</option>
                                                    @endif
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- ::::::::::::::::::::::how many property count::::::::::::::::::::::: -->
                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 mt-2 mb-3 dependency-tab"
                                        id="inputContainerestate" style="">
                                    </div>

                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                        <div class="form-group">
                                            <label class="form-head" for="exampletext"> Do You Own A Motor Vehicle?
                                            <span class="red">*</span></label>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input @error('Do_you_own_a_motor_vehicle?') is-invalid @enderror" id="motor-vehicle-yes"
                                                        type="radio" name="Do_you_own_a_motor_vehicle?" value="Yes" @if(old('Do_you_own_a_motor_vehicle?') == 'Yes') checked @endif>Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input @error('Do_you_own_a_motor_vehicle?') is-invalid @enderror" id="motor-vehicle-no"
                                                        type="radio" name="Do_you_own_a_motor_vehicle?" value="No" @if(old('Do_you_own_a_motor_vehicle?') == 'No') checked @endif>No
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
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left"
                                        id="motorvehicle-select" style="display: block;">
                                        <div class="form-group">
                                            <label class="form-head" for="exampletext">How Many Motor Vehicles Do
                                                You Own? <span class="red">*</span>

                                            </label>
                                            <div class="select-group h-40">
                                                <select class="form-control" id="How_many_motor_vehicle_do_you_own?"
                                                    name="How_many_motor_vehicle_do_you_own?">
                                                    @if (old('How_many_motor_vehicle_do_you_own?') == '0')
                                                        <option value="0" selected>Select an option</option>
                                                    @else
                                                        <option value="0">Select an option</option>
                                                    @endif

                                                    @if (old('How_many_motor_vehicle_do_you_own?') == '1')
                                                        <option value="1" selected>1</option>
                                                    @else
                                                        <option value="1">1</option>
                                                    @endif

                                                    @if (old('How_many_motor_vehicle_do_you_own?') == '2')
                                                        <option value="2" selected>2</option>
                                                    @else
                                                        <option value="2">2</option>
                                                    @endif
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- :::::::::::::::::: motor vehicle detail form:::::::::::::::: -->
                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 mt-2 mb-2 dependency-tab"
                                        id="inputContainervehical" style="">
                                        
                                    </div>

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
                                                        type="radio" name="Do_you_have_any_other_personal_assets:" value="Yes" @if(old('Do_you_have_any_other_personal_assets:') == 'Yes') checked @endif >Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input @error('Do_you_have_any_other_personal_assets:') is-invalid @enderror" id="Personal-assets-no"
                                                        type="radio" name="Do_you_have_any_other_personal_assets:" value="No" @if(old('Do_you_have_any_other_personal_assets:') == 'No') checked @endif >No
                                                        @error('Do_you_have_any_other_personal_assets:')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left"
                                        id="psassets-select" style="display: block;">
                                        <div class="form-group">
                                            <label class="form-head" for="exampletext">How Many Other Personal
                                                Assets Do You Have? <small>
                                                    (recreational vehicles, boats, RV’s, artwork,
                                                    jewelry, collections, etc) NOTE: Do not include clothing,
                                                    furniture
                                                    and other personal effects. <span class="red">*</span>
                                                </small>
                                            </label>
                                            <div class="select-group h-40">
                                                <select class="form-control" id="How_many_other_personal_assets_do_you_have?"
                                                    name="How_many_other_personal_assets_do_you_have?">
                                                    @if (old('How_many_other_personal_assets_do_you_have?') == '0')
                                                        <option value="0" selected>Select an option</option>
                                                    @else
                                                        <option value="0">Select an option</option>
                                                    @endif

                                                    @if (old('How_many_other_personal_assets_do_you_have?') == '1')
                                                        <option value="1" selected>1</option>
                                                    @else
                                                        <option value="1">1</option>
                                                    @endif

                                                    @if (old('How_many_other_personal_assets_do_you_have?') == '2')
                                                        <option value="2" selected>2</option>
                                                    @else
                                                        <option value="2">2</option>
                                                    @endif

                                                    @if (old('How_many_other_personal_assets_do_you_have?') == '3')
                                                        <option value="3" selected>3</option>
                                                    @else
                                                        <option value="3">3</option>
                                                    @endif

                                                    @if (old('How_many_other_personal_assets_do_you_have?') == '4')
                                                        <option value="4" selected>4</option>
                                                    @else
                                                        <option value="4">4</option>
                                                    @endif

                                                    @if (old('How_many_other_personal_assets_do_you_have?') == '5')
                                                        <option value="5" selected>5</option>
                                                    @else
                                                        <option value="5">5</option>
                                                    @endif
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ::::::::::::::::::: personal assets filling form::::::::::::::: -->
                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 mt-2 mb-3 dependency-tab"
                                        id="inputContainerpersonal" style="">
                                        

                                    </div>


                                    <!-- section 3a -->
                                    <!-- section divident -->
                                    <div class="col-12" id="spousesection3a" style="display: none;">
                                        <div class="row" >
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
                                                    <span class="currency_input">$</span>
                                                    <input type="number"  step="any" class="numberInputOnly1 form-control" name="Spouse_Cash_on_Hand_Amount" id="Spouse_Cash_on_Hand_Amount"
                                                        placeholder="" >
                                                </div>
                                            </div>
                                            <!-- :: input How Many Bank Accounts Do You Have -->
                                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                <div class="form-group">
                                                    <label class="form-head" for="exampletext">How Many Bank Accounts Spouse Have *</label>
                                                    <div class="select-group h-40">
                                                        <select class="form-control" id="How_Many_Bank_Accounts_Spouse_Have"
                                                            name="How_Many_Bank_Accounts_Spouse_Have" >
                                                            <option value="0">Select an option</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
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
                                    </div>




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
                                            <span class="currency_input">$</span>
                                            <input type="number"  step="any"  class="numberInputOnly1 form-control numberInput numberInputOnly1 @error('Interest/Dividends') is-invalid @enderror" name="Interest/Dividends" id="Interest/Dividends"
                                                placeholder="0.00" value="{{ old('Interest/Dividends') }}">
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
                                            <span class="currency_input">$</span>
                                            <input type="number"  step="any" class="numberInputOnly1 form-control numberInput @error('Net_Self-Employed/Business_Income') is-invalid @enderror" name="Net_Self-Employed/Business_Income" id="Net_Self-Employed/Business_Income"
                                                placeholder="0.00" value="{{ old('Net_Self-Employed/Business_Income') }}" >
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
                                            <span class="currency_input">$</span>
                                            <input type="number"  step="any" class="numberInputOnly1 form-control numberInput  @error('Net_Rental_Income') is-invalid @enderror" name="Net_Rental_Income" id="Net_Rental_Income"
                                                placeholder="0.00" value="{{ old('Net_Rental_Income') }}" >
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
                                            <span class="currency_input">$</span>
                                            <input type="number"  step="any" class="numberInputOnly1 form-control numberInput @error('Distribution') is-invalid @enderror" name="Distribution" id="Distribution"
                                                placeholder="0.00" value="{{ old('Distribution') }}" >
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
                                                <span class="currency_input">$</span>
                                            <input type="number"  step="any" class="numberInputOnly1 form-control numberInput @error('Social_Security_Income') is-invalid @enderror" name="Social_Security_Income" id="Social_Security_Income"
                                                placeholder="0.00" value="{{ old('Social_Security_Income') }}" >
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
                                            <span class="currency_input">$</span>
                                            <input type="number"  step="any" class="numberInputOnly1 form-control numberInput @error('Alimony_Income') is-invalid @enderror" name="Alimony_Income" id="Alimony_Income"
                                                placeholder="0.00" value="{{ old('Alimony_Income') }}" >
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
                                                <span class="currency_input">$</span>
                                            <input type="number"  step="any" class="numberInputOnly1 form-control numberInput @error('Retirement_Income/Pension') is-invalid @enderror" name="Retirement_Income/Pension" id="Retirement_Income/Pension"
                                                placeholder="0.00" value="{{ old('Retirement_Income/Pension') }}" >
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
                                            <span class="currency_input">$</span>
                                            <input type="number"  step="any" class="numberInputOnly1 form-control numberInput @error('Other_Income') is-invalid @enderror" name="Other_Income" id="Other_Income"
                                                placeholder="0.00" value="{{ old('Other_Income') }}" >
                                            @error('Other_Income')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>



                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left" id="spousesection4a1" style="display: none;">
                                        <div class="form-group">
                                            <label class="form-head" for="exampletext">Spouse Wages</label>
                                            <span class="currency_input">$</span>
                                            <input type="number"  step="any" class="numberInputOnly1 form-control numberInput @error('Spouse_Wages') is-invalid @enderror"  name="Spouse_Wages" id="Spouse_Wages"
                                                placeholder="0.00" value="@if(!empty(old('Spouse_Wages')))  {{ old('Spouse_Wages') }} @else  @php echo 0; @endphp @endif">
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
                                            <span class="currency_input">$</span>
                                            <input type="number"  step="any" class="numberInputOnly1 form-control numberInput @error('Spouse_Social_Security_Income') is-invalid @enderror"  name="Spouse_Social_Security_Income" id="Spouse_Social_Security_Income"
                                                placeholder="0.00" value="@if(!empty(old('Spouse_Social_Security_Income')))  {{ old('Spouse_Social_Security_Income') }} @else  @php echo 0; @endphp @endif" >
                                            @error('Spouse_Social_Security_Income')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                   

                                    <!-- :: input Total Household Income -->
                                    <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 text-left">
                                        <div class="form-group">
                                            <!-- <label class="form-head" for="exampletext">Total Household
                                                Income</label> -->
                                            <input type="hidden" class="form-control " name="Total_HouseHold_Income_calulate" id="Total_HouseHold_Income_calulate"
                                                placeholder="$_.__" readonly>
                                            <!-- <button type="button" class="btn btn-primary mt-1"
                                                id="calculateBtn">Calculate</button> -->
                                        </div>
                                    </div>
                                    <!-- :: input Total House Hold Income -->
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                        <div class="form-group">
                                            <label class="form-head" for="exampletext">Total House Hold
                                                Income <span class="red">*</span></label>
                                                <span class="currency_input">$</span>
                                            <input type="number"  step="any" class="numberInputOnly1 form-control @error('Total_House_Hold_Income') is-invalid @enderror" name="Total_House_Hold_Income" id="Total_House_Hold_Income"
                                                placeholder="0.00" value="{{ old('Total_House_Hold_Income') }}" >
                                            @error('Total_House_Hold_Income')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 dependency-tab mb-2 Spouse_Employment_Status_detail_Section3_under4a" id="Spouse_Employment_Status_detail_Section3_under4a_spouse" style="display: none;">
                                        <div class="warning-text mt-3 text-left">
                                            <p>
                                                It Looks Like You Or Your Spouse Generate
                                                Income as A Sole Proprietor Or Independent
                                                Contractor. Please Provide The Following Information:
                                            </p>
                                        </div>
                                        <!-- :: inputs  -->
                                        <div class="row px-1">
                                            <!-- input 01 -->
                                            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                <div class="form-group">
                                                    <label class="form-head" for="businessname">Business Name</label>
                                                    <input type="text" class="form-control" id="spbusinessName" name="Spouse_Business_Name" placeholder="" >
                                                </div>
                                            </div>
                                            <!-- input 02 -->
                                            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                <div class="form-group">
                                                    <label class="form-head" for="sempidany">Employee ID # (If any)</label>
                                                    <input type="text" class="form-control" id="espempids" placeholder="" name="Spouse_Employee_ID">
                                                </div>
                                            </div>
                                            <!-- input 03 -->
                                            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 text-left">
                                                <div class="form-group">
                                                    <label class="form-head" for="spempnmb"># of Employees (if any)</label>
                                                    <input type="number" class="form-control" id="spempnumber" placeholder="" name="Spouse_No_of_Employees">
                                                </div>
                                            </div>
                                            <!-- input 04 -->
                                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                <div class="form-group">
                                                    <label class="form-head" for="avppay">Average Monthly Payroll</label>
                                                    <input type="number" class="form-control" id="avppayroll" placeholder="" name="Spouse_Average_Monthly_Payroll">
                                                </div>
                                            </div>
                                            <!-- input 05 -->
                                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                <div class="form-group">
                                                    <label class="form-head" for="bytype">Type of Business (Partnership, LLC, Corporation Other)</label>
                                                    <input type="text" class="form-control" id="btype" placeholder="" name="Spouse_Type_of_Business">
                                                </div>
                                            </div>
                                            <!-- input 06 -->
                                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                <div class="form-group">
                                                    <label class="form-head" for="fqtd">Frequency of Tax Deposits</label>
                                                    <input type="text" class="form-control" id="freqtd" placeholder="" name="Spouse_Frequency_of_Tax_Deposits">
                                                </div>
                                            </div>
                                            <!-- input 07 -->
                                            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                <div class="form-group">
                                                    <label class="form-head" for="bweb">Business Website (if any)</label>
                                                    <input type="text" class="form-control" id="bweb" placeholder="" name="Spouse_Business_Website">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- :: inputs  -->
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
                                            <span class="currency_input">$</span>
                                            <input type="number"  step="any" class="numberInputOnly1 form-control numberInput2 @error('Food_Clothing_Misc') is-invalid @enderror" name="Food_Clothing_Misc" id="Food_Clothing_Misc"
                                                placeholder="0.00" value="{{ old('Food_Clothing_Misc') }}" >
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
                                            <span class="currency_input">$</span>
                                            <input type="number"  step="any" class="numberInputOnly1 form-control numberInput2 @error('Rent/Mortgage') is-invalid @enderror" name="Rent/Mortgage" id="Rent/Mortgage"
                                                placeholder="0.00" value="{{ old('Rent/Mortgage') }}" >
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
                                            <span class="currency_input">$</span>
                                            <input type="number"  step="any" class="numberInputOnly1 form-control numberInput2 @error('Utilities') is-invalid @enderror" name="Utilities" id="Utilities"
                                                placeholder="0.00" value="{{ old('Utilities') }}" >
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
                                                <span class="currency_input">$</span>
                                            <input type="number"  step="any" class="numberInputOnly1 form-control numberInput2 @error('Vehicles_Ownership_Costs') is-invalid @enderror" name="Vehicles_Ownership_Costs" id="Vehicles_Ownership_Costs"
                                                placeholder="0.00" value="{{ old('Vehicles_Ownership_Costs') }}" >
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
                                                <span class="currency_input">$</span>
                                            <input type="number"  step="any" class="numberInputOnly1 form-control numberInput2 @error('Vehicles_Operating_Costs') is-invalid @enderror" name="Vehicles_Operating_Costs" id="Vehicles_Operating_Costs"
                                                placeholder="0.00" value="{{ old('Vehicles_Operating_Costs') }}" >
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
                                            <span class="currency_input">$</span>
                                            <input type="number"  step="any" class="numberInputOnly1 form-control numberInput2 @error('Public_Transportation') is-invalid @enderror" name="Public_Transportation" id="Public_Transportation"
                                                placeholder="0.00" value="{{ old('Public_Transportation') }}" >
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
                                            <span class="currency_input">$</span>
                                            <input type="number"  step="any" class="numberInputOnly1 form-control numberInput2 @error('Health_Insurance') is-invalid @enderror" name="Health_Insurance" id="Health_Insurance"
                                                placeholder="0.00" value="{{ old('Health_Insurance') }}" >
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
                                                <span class="currency_input">$</span>
                                            <input type="number"  step="any" class="numberInputOnly1 form-control numberInput2 @error('Out_of_Pocket_Health_Costs') is-invalid @enderror" name="Out_of_Pocket_Health_Costs" id="Out_of_Pocket_Health_Costs"
                                                placeholder="0.00" value="{{ old('Out_of_Pocket_Health_Costs') }}" >
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
                                                <span class="currency_input">$</span>
                                            <input type="number"  step="any" class="numberInputOnly1 form-control numberInput2 @error('Court_Ordered_Payments') is-invalid @enderror" name="Court_Ordered_Payments" id="Court_Ordered_Payments"
                                                placeholder="0.00" value="{{ old('Court_Ordered_Payments') }}" >
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
                                            <span class="currency_input">$</span>
                                            <input type="number"  step="any" class="numberInputOnly1 form-control numberInput2 @error('Child_Care') is-invalid @enderror" name="Child_Care" id="Child_Care"
                                                placeholder="0.00" value="{{ old('Child_Care') }}" >
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
                                            <span class="currency_input">$</span>
                                            <input type="number"  step="any" class="numberInputOnly1 form-control numberInput2 @error('Life_Insurance') is-invalid @enderror" name="Life_Insurance" id="Life_Insurance"
                                                placeholder="0.00" value="{{ old('Life_Insurance') }}" >
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
                                            <span class="currency_input">$</span>
                                            <input type="number"  step="any" class="numberInputOnly1 form-control numberInput2 @error('Taxes') is-invalid @enderror" name="Taxes" id="Taxes"
                                                placeholder="0.00" value="{{ old('Taxes') }}" >
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
                                            <span class="currency_input">$</span>
                                            <input type="number"  step="any" class="numberInputOnly1 form-control numberInput2 @error('Other_Secure_Debts') is-invalid @enderror" name="Other_Secure_Debts" id="Other_Secure_Debts"
                                                placeholder="0.00" value="{{ old('Other_Secure_Debts') }}">
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
                                            <span class="currency_input">$</span>
                                            <input type="number"  step="any" class="numberInputOnly1 form-control numberInput2 @error('Other_Secure_Debts1') is-invalid @enderror" name="Other_Secure_Debts1" id="Other_Secure_Debts1"
                                                placeholder="0.00" value="{{ old('Other_Secure_Debts1') }}">
                                            @error('Other_Secure_Debts1')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- :: input Total Household Expense -->
                                    <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 text-left">
                                        <div class="form-group">
                                           <!--  <label class="form-head" for="exampletext">Total Household
                                                Expense</label> -->
                                            <input type="hidden" class="form-control" name="TotHouseholdExpensecalculate" id="TotHouseholdExpensecalculate"
                                                placeholder="$_.__" readonly>
                                            <!-- <button type="button" class="btn btn-primary mt-1"
                                                id="calculateBtn2">Calculate</button> -->
                                        </div>
                                    </div>
                                    <!-- :: input Total Household Expense-->
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                        <div class="form-group">
                                            <label class="form-head" for="exampletext">Total Household
                                                Expense <span class="red">*</span></label>
                                                <span class="currency_input">$</span>
                                            <input type="number"  step="any" class="numberInputOnly1  form-control @error('TotHouseholdExpense') is-invalid @enderror" name="TotHouseholdExpense" id="TotHouseholdExpense"
                                                placeholder="0.00" value="{{ old('TotHouseholdExpense') }}" >
                                            @error('TotHouseholdExpense')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>








                                    @if(old('Client_employment_status') == 'Self-Employed')
                                    <div class="col-12" id="section5a" style="display:block;">
                                        <div class="row">
                                          <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 mb-2">
                                            <div class="form-section-highlite mt-3">
                                              <div> SECTION 5 (a): Business Asset Information: (for Self-Employed) </div>
                                            </div>
                                          </div>


                                          <!-- ::::::::: -->
                                          <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                            <div class="form-group">
                                              <label class="form-head" for="exampletext">Business Cash On Hand <span class="red">*</span>
                                              </label>
                                              <span class="currency_input">$</span>
                                              <input type="number" step="any" class="@error('Business_Cash_On_Hand') is-invalid @enderror numberInputOnly1 form-control  numberInputOnly1 " name="Business_Cash_On_Hand" id="Business_Cash_On_Hand" placeholder="0.00" value="{{ old('Business_Cash_On_Hand') }}">
                                              @error('Business_Cash_On_Hand')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                              @enderror

                                            </div>
                                          </div>
                                          <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                            <div class="form-group">
                                              <label class="form-head" for="exampletext">Business Bank Account(s): Please attach 3 months of business bank statements <span class="red">*</span>
                                              </label>
                                              <input type="file" class="form-control @error('Business_Cash_On_Hand') is-invalid @enderror" id="Business_Bank_Account" name="Business_Bank_Account" accept="image/*" >
                                              @error('Business_Bank_Account')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                              @enderror
                                            </div>
                                          </div>
                                          <!-- ::::::::: -->
                                          <!-- ::::::::::::Section 05 (b)::::::::::::  -->
                                          <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 mb-2">
                                            <div class="form-section-highlite mt-3">
                                              <div> SECTION 5 (b): Business Income and expense (for Self-Employed) </div>
                                            </div>
                                            <div class="warning-text mt-3 text-left">
                                              <p> If a question does not apply to you, put 0.</p>
                                            </div>
                                          </div>
                                          <!-- 5b radio -->
                                          <!-- 5b radio end -->
                                          <div class="col-md-12">
                                            <div class="row">
                                              <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 text-left">
                                                <div class="form-group">
                                                  <label class="form-head" for="exampletext">Are you able to provide a current year-to-date Profit & Loss Statement? <span class="red">*</span>
                                                  </label>
                                                  <div class="form-check">
                                                    <label class="form-check-label">
                                                      <input class="form-check-input  @error('Are_you_able_to_provide_current_year_Profit_Loss_Statement') is-invalid @enderror" id="Are_you_able_to_provide_current_year_Profit_Loss_Statement" type="radio" name="Are_you_able_to_provide_current_year_Profit_Loss_Statement" value="yes" @if(old('Are_you_able_to_provide_current_year_Profit_Loss_Statement') == 'yes') checked @endif>Yes </label>
                                                  </div>
                                                  <div class="form-check">
                                                    <label class="form-check-label">
                                                      <input class="form-check-input @error('Are_you_able_to_provide_current_year_Profit_Loss_Statement') is-invalid @enderror" id="Are_you_able_to_provide_current_year_Profit_Loss_Statement1" type="radio" name="Are_you_able_to_provide_current_year_Profit_Loss_Statement" value="no" @if(old('Are_you_able_to_provide_current_year_Profit_Loss_Statement') == 'no') checked @endif>No 
                                                       @error('Are_you_able_to_provide_current_year_Profit_Loss_Statement')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                       @enderror
                                                    </label>
                                                  </div>
                                                </div>
                                              </div>

                                              @if(old('Are_you_able_to_provide_current_year_Profit_Loss_Statement') == 'yes')

                                              <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left" id="section5b_yes" style="display: block;">
                                                <div class="form-group">
                                                  <label class="form-head" for="exampletext">Upload Most Recent Profit & Loss Statement <span class="red">*</span>
                                                  </label>
                                                  <input type="file" class="form-control @error('Upload_Most_Recent_Profit_Loss_Statement') is-invalid @enderror" id="Upload_Most_Recent_Profit_Loss_Statement" name="Upload_Most_Recent_Profit_Loss_Statement" accept="image/*" >
                                                    @error('Upload_Most_Recent_Profit_Loss_Statement')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                              </div>

                                              @else

                                              <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left" id="section5b_yes" style="display: none;">
                                                <div class="form-group">
                                                  <label class="form-head" for="exampletext">Upload Most Recent Profit & Loss Statement <span class="red">*</span>
                                                  </label>
                                                  <input type="file" class="form-control @error('Upload_Most_Recent_Profit_Loss_Statement') is-invalid @enderror" id="Upload_Most_Recent_Profit_Loss_Statement" name="Upload_Most_Recent_Profit_Loss_Statement" accept="image/*" >
                                                    @error('Upload_Most_Recent_Profit_Loss_Statement')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                              </div>
                                              @endif
                                            </div>


                                            @if(old('Are_you_able_to_provide_current_year_Profit_Loss_Statement') == 'no')
                                            <div class="div"  id="section5b_no" style="display:block;">
                                              <div class="row">
                                                <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 mb-2 text-left">
                                                  <div class="warning-text mt-3 text-left">
                                                    <p>Business Income</p>
                                                  </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                  <div class="form-group">
                                                    <label class="form-head" for="exampletext">Item Actual Monthly Gross Receipts <span class="red">*</span>
                                                    </label>
                                                    <span class="currency_input">$</span>
                                                    <input type="number" step="any" class="numberInputOnly1 form-control  numberInputOnly1 @error('Item_Actual_Monthly_Gross_Receipts') is-invalid @enderror " name="Item_Actual_Monthly_Gross_Receipts" id="Item_Actual_Monthly_Gross_Receipts" placeholder="0.00" value="{{ old('Item_Actual_Monthly_Gross_Receipts') }}">
                                                    @error('Item_Actual_Monthly_Gross_Receipts')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                  </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                  <div class="form-group">
                                                    <label class="form-head" for="exampletext">Gross Rental Income <span class="red">*</span>
                                                    </label>
                                                    <span class="currency_input">$</span>
                                                    <input type="number" step="any" class="numberInputOnly1 form-control  numberInputOnly1 @error('Gross_Rental_Income') is-invalid @enderror " name="Gross_Rental_Income" id="Gross_Rental_Income" placeholder="0.00" value="{{ old('Gross_Rental_Income') }}">
                                                    @error('Gross_Rental_Income')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                  </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                  <div class="form-group">
                                                    <label class="form-head" for="exampletext">Interest <span class="red">*</span>
                                                    </label>
                                                    <span class="currency_input">$</span>
                                                    <input type="number" step="any" class="numberInputOnly1 form-control  numberInputOnly1 @error('Interest') is-invalid @enderror " name="Interest" id="Interest" placeholder="0.00" value="{{ old('Interest') }}">
                                                    @error('Interest')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                  </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                  <div class="form-group">
                                                    <label class="form-head" for="exampletext">Dividends <span class="red">*</span>
                                                    </label>
                                                    <span class="currency_input">$</span>
                                                    <input type="number" step="any" class="numberInputOnly1 form-control  numberInputOnly1 @error('Dividends') is-invalid @enderror " name="Dividends" id="Dividends" placeholder="0.00" value="{{ old('Dividends') }}">
                                                    @error('Dividends')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                  </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                  <div class="form-group">
                                                    <label class="form-head" for="exampletext">Cash <span class="red">*</span>
                                                    </label>
                                                    <span class="currency_input">$</span>
                                                    <input type="number" step="any" class="numberInputOnly1 form-control  numberInputOnly1 @error('Cash') is-invalid @enderror " name="Cash" id="Cash" placeholder="0.00" value="{{ old('Cash') }}">
                                                    @error('Cash')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                  </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                  <div class="form-group">
                                                    <label class="form-head" for="exampletext">Other Income <span class="red">*</span>
                                                    </label>
                                                    <span class="currency_input">$</span>
                                                    <input type="number" step="any" class="numberInputOnly1 form-control  numberInputOnly1 @error('Other_Income_5b') is-invalid @enderror " name="Other_Income_5b" id="Other_Income_5b" placeholder="0.00" value="{{ old('Other_Income_5b') }}">
                                                    @error('Other_Income_5b')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                  </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                  <div class="form-group">
                                                    <label class="form-head" for="exampletext">Total Business Income <span class="red">*</span>
                                                    </label>
                                                    <span class="currency_input">$</span>
                                                    <input type="number" step="any" class="numberInputOnly1 form-control  numberInputOnly1 @error('Total_Business_Income') is-invalid @enderror " name="Total_Business_Income" id="Total_Business_Income" placeholder="0.00" value="{{ old('Total_Business_Income') }}">
                                                    @error('Total_Business_Income')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                  </div>
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 mb-2 text-left">
                                                  <div class="warning-text mt-3 text-left">
                                                    <p>Business Expenses</p>
                                                  </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                  <div class="form-group">
                                                    <label class="form-head" for="exampletext">Materials Purchased <span class="red">*</span>
                                                    </label>
                                                    <span class="currency_input">$</span>
                                                    <input type="number" step="any" class="numberInputOnly1 form-control  numberInputOnly1 @error('Materials_Purchased') is-invalid @enderror " name="Materials_Purchased" id="Materials_Purchased" placeholder="0.00" value="{{ old('Materials_Purchased') }}">
                                                    @error('Materials_Purchased')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                  </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                  <div class="form-group">
                                                    <label class="form-head" for="exampletext">Inventory Purchased <span class="red">*</span>
                                                    </label>
                                                    <span class="currency_input">$</span>
                                                    <input type="number" step="any" class="numberInputOnly1 form-control  numberInputOnly1 @error('Inventory_Purchased') is-invalid @enderror " name="Inventory_Purchased" id="Inventory_Purchased" placeholder="0.00" value="{{ old('Inventory_Purchased') }}">
                                                    @error('Inventory_Purchased')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                  </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                  <div class="form-group">
                                                    <label class="form-head" for="exampletext">Gross Wages & Salaries <span class="red">*</span>
                                                    </label>
                                                    <span class="currency_input">$</span>
                                                    <input type="number" step="any" class="numberInputOnly1 form-control  numberInputOnly1 @error('Gross_Wages_Salaries') is-invalid @enderror " name="Gross_Wages_Salaries" id="Gross_Wages_Salaries" placeholder="0.00" value="{{ old('Gross_Wages_Salaries') }}">
                                                    @error('Gross_Wages_Salaries')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                  </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                  <div class="form-group">
                                                    <label class="form-head" for="exampletext">Rent <span class="red">*</span>
                                                    </label>
                                                    <span class="currency_input">$</span>
                                                    <input type="number" step="any" class="numberInputOnly1 form-control  numberInputOnly1 @error('Rent') is-invalid @enderror " name="Rent" id="Rent" placeholder="0.00" value="{{ old('Rent') }}">
                                                    @error('Rent')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                  </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                  <div class="form-group">
                                                    <label class="form-head" for="exampletext">Supplies <span class="red">*</span>
                                                    </label>
                                                    <span class="currency_input">$</span>
                                                    <input type="number" step="any" class="numberInputOnly1 form-control  numberInputOnly1 @error('Supplies') is-invalid @enderror " name="Supplies" id="Supplies" placeholder="0.00" value="{{ old('Supplies') }}">
                                                    @error('Supplies')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                  </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                  <div class="form-group">
                                                    <label class="form-head" for="exampletext">Business Expenses <span class="red">*</span>
                                                    </label>
                                                    <span class="currency_input">$</span>
                                                    <input type="number" step="any" class="numberInputOnly1 form-control  numberInputOnly1 @error('Business_Expenses') is-invalid @enderror " name="Business_Expenses" id="Business_Expenses" placeholder="0.00" value="{{ old('Business_Expenses') }}">
                                                    @error('Business_Expenses')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                  </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                  <div class="form-group">
                                                    <label class="form-head" for="exampletext">Utilities/Telephone <span class="red">*</span>
                                                    </label>
                                                    <span class="currency_input">$</span>
                                                    <input type="number" step="any" class="numberInputOnly1 form-control  numberInputOnly1 @error('Utilities_Telephone') is-invalid @enderror " name="Utilities_Telephone" id="Utilities_Telephone" placeholder="0.00" value="{{ old('Utilities_Telephone') }}">
                                                    @error('Utilities_Telephone')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                  </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                  <div class="form-group">
                                                    <label class="form-head" for="exampletext">Vehicle/Gas/Oil <span class="red">*</span>
                                                    </label>
                                                    <span class="currency_input">$</span>
                                                    <input type="number" step="any" class="numberInputOnly1 form-control  numberInputOnly1 @error('Vehicle_Gas_Oil') is-invalid @enderror " name="Vehicle_Gas_Oil" id="Vehicle_Gas_Oil" placeholder="0.00" value="{{ old('Vehicle_Gas_Oil') }}">
                                                    @error('Vehicle_Gas_Oil')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                  </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                  <div class="form-group">
                                                    <label class="form-head" for="exampletext">Repairs/Maintenance <span class="red">*</span>
                                                    </label>
                                                    <span class="currency_input">$</span>
                                                    <input type="number" step="any" class="numberInputOnly1 form-control  numberInputOnly1 @error('Repairs_Maintenance') is-invalid @enderror " name="Repairs_Maintenance" id="Repairs_Maintenance" placeholder="0.00" value="{{ old('Repairs_Maintenance') }}">
                                                    @error('Repairs_Maintenance')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                  </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                  <div class="form-group">
                                                    <label class="form-head" for="exampletext">Insurance <span class="red">*</span>
                                                    </label>
                                                    <span class="currency_input">$</span>
                                                    <input type="number" step="any" class="numberInputOnly1 form-control  numberInputOnly1 @error('Insurance') is-invalid @enderror " name="Insurance" id="Insurance" placeholder="0.00" value="{{ old('Insurance') }}">
                                                    @error('Insurance')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                  </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                  <div class="form-group">
                                                    <label class="form-head" for="exampletext">Current Taxes <span class="red">*</span>
                                                    </label>
                                                    <span class="currency_input">$</span>
                                                    <input type="number" step="any" class="numberInputOnly1 form-control  numberInputOnly1 @error('Current_Taxes') is-invalid @enderror " name="Current_Taxes" id="Current_Taxes" placeholder="0.00" value="{{ old('Current_Taxes') }}">
                                                    @error('Current_Taxes')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                  </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                  <div class="form-group">
                                                    <label class="form-head" for="exampletext">Other Installment Payments</label>
                                                    <span class="currency_input">$</span>
                                                    <input type="number" step="any" class="numberInputOnly1 form-control  numberInputOnly1 @error('Other_Installment_Payments') is-invalid @enderror " name="Other_Installment_Payments" id="Other_Installment_Payments" placeholder="0.00" value="{{ old('Other_Installment_Payments') }}">
                                                    @error('Other_Installment_Payments')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                  </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                  <div class="form-group">
                                                    <label class="form-head" for="exampletext">Total Business Expenses <span class="red">*</span>
                                                    </label>
                                                    <span class="currency_input">$</span>
                                                    <input type="number" step="any" class="numberInputOnly1 form-control  numberInputOnly1 @error('Total_Business_Expenses') is-invalid @enderror " name="Total_Business_Expenses" id="Total_Business_Expenses" placeholder="0.00" value="{{ old('Total_Business_Expenses') }}">
                                                    @error('Total_Business_Expenses')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                  </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                  <div class="form-group">
                                                    <label class="form-head" for="exampletext">Net Business Income <span class="red">*</span>
                                                    </label>
                                                    <span class="currency_input">$</span>
                                                    <input type="number" step="any" class="numberInputOnly1 form-control  numberInputOnly1 @error('Net_Business_Income') is-invalid @enderror " name="Net_Business_Income" id="Net_Business_Income" placeholder="0.00" value="{{ old('Net_Business_Income') }}">
                                                    @error('Net_Business_Income')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            @else
                                            <div class="div"  id="section5b_no" style="display:none;">
                                              <div class="row">
                                                <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 mb-2 text-left">
                                                  <div class="warning-text mt-3 text-left">
                                                    <p>Business Income</p>
                                                  </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                  <div class="form-group">
                                                    <label class="form-head" for="exampletext">Item Actual Monthly Gross Receipts <span class="red">*</span>
                                                    </label>
                                                    <span class="currency_input">$</span>
                                                    <input type="number" step="any" class="numberInputOnly1 form-control  numberInputOnly1 @error('Item_Actual_Monthly_Gross_Receipts') is-invalid @enderror " name="Item_Actual_Monthly_Gross_Receipts" id="Item_Actual_Monthly_Gross_Receipts" placeholder="0.00" value="{{ old('Item_Actual_Monthly_Gross_Receipts') }}">
                                                    @error('Item_Actual_Monthly_Gross_Receipts')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                  </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                  <div class="form-group">
                                                    <label class="form-head" for="exampletext">Gross Rental Income <span class="red">*</span>
                                                    </label>
                                                    <span class="currency_input">$</span>
                                                    <input type="number" step="any" class="numberInputOnly1 form-control  numberInputOnly1 @error('Gross_Rental_Income') is-invalid @enderror " name="Gross_Rental_Income" id="Gross_Rental_Income" placeholder="0.00" value="{{ old('Gross_Rental_Income') }}">
                                                    @error('Gross_Rental_Income')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                  </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                  <div class="form-group">
                                                    <label class="form-head" for="exampletext">Interest <span class="red">*</span>
                                                    </label>
                                                    <span class="currency_input">$</span>
                                                    <input type="number" step="any" class="numberInputOnly1 form-control  numberInputOnly1 @error('Interest') is-invalid @enderror " name="Interest" id="Interest" placeholder="0.00" value="{{ old('Interest') }}">
                                                    @error('Interest')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                  </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                  <div class="form-group">
                                                    <label class="form-head" for="exampletext">Dividends <span class="red">*</span>
                                                    </label>
                                                    <span class="currency_input">$</span>
                                                    <input type="number" step="any" class="numberInputOnly1 form-control  numberInputOnly1 @error('Dividends') is-invalid @enderror " name="Dividends" id="Dividends" placeholder="0.00" value="{{ old('Dividends') }}">
                                                    @error('Dividends')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                  </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                  <div class="form-group">
                                                    <label class="form-head" for="exampletext">Cash <span class="red">*</span>
                                                    </label>
                                                    <span class="currency_input">$</span>
                                                    <input type="number" step="any" class="numberInputOnly1 form-control  numberInputOnly1 @error('Cash') is-invalid @enderror " name="Cash" id="Cash" placeholder="0.00" value="{{ old('Cash') }}">
                                                    @error('Cash')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                  </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                  <div class="form-group">
                                                    <label class="form-head" for="exampletext">Other Income <span class="red">*</span>
                                                    </label>
                                                    <span class="currency_input">$</span>
                                                    <input type="number" step="any" class="numberInputOnly1 form-control  numberInputOnly1 @error('Other_Income_5b') is-invalid @enderror " name="Other_Income_5b" id="Other_Income_5b" placeholder="0.00" value="{{ old('Other_Income_5b') }}">
                                                    @error('Other_Income_5b')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                  </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                  <div class="form-group">
                                                    <label class="form-head" for="exampletext">Total Business Income <span class="red">*</span>
                                                    </label>
                                                    <span class="currency_input">$</span>
                                                    <input type="number" step="any" class="numberInputOnly1 form-control  numberInputOnly1 @error('Total_Business_Income') is-invalid @enderror " name="Total_Business_Income" id="Total_Business_Income" placeholder="0.00" value="{{ old('Total_Business_Income') }}">
                                                    @error('Total_Business_Income')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                  </div>
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 mb-2 text-left">
                                                  <div class="warning-text mt-3 text-left">
                                                    <p>Business Expenses</p>
                                                  </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                  <div class="form-group">
                                                    <label class="form-head" for="exampletext">Materials Purchased <span class="red">*</span>
                                                    </label>
                                                    <span class="currency_input">$</span>
                                                    <input type="number" step="any" class="numberInputOnly1 form-control  numberInputOnly1 @error('Materials_Purchased') is-invalid @enderror " name="Materials_Purchased" id="Materials_Purchased" placeholder="0.00" value="{{ old('Materials_Purchased') }}">
                                                    @error('Materials_Purchased')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                  </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                  <div class="form-group">
                                                    <label class="form-head" for="exampletext">Inventory Purchased <span class="red">*</span>
                                                    </label>
                                                    <span class="currency_input">$</span>
                                                    <input type="number" step="any" class="numberInputOnly1 form-control  numberInputOnly1 @error('Inventory_Purchased') is-invalid @enderror " name="Inventory_Purchased" id="Inventory_Purchased" placeholder="0.00" value="{{ old('Inventory_Purchased') }}">
                                                    @error('Inventory_Purchased')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                  </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                  <div class="form-group">
                                                    <label class="form-head" for="exampletext">Gross Wages & Salaries <span class="red">*</span>
                                                    </label>
                                                    <span class="currency_input">$</span>
                                                    <input type="number" step="any" class="numberInputOnly1 form-control  numberInputOnly1 @error('Gross_Wages_Salaries') is-invalid @enderror " name="Gross_Wages_Salaries" id="Gross_Wages_Salaries" placeholder="0.00" value="{{ old('Gross_Wages_Salaries') }}">
                                                    @error('Gross_Wages_Salaries')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                  </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                  <div class="form-group">
                                                    <label class="form-head" for="exampletext">Rent <span class="red">*</span>
                                                    </label>
                                                    <span class="currency_input">$</span>
                                                    <input type="number" step="any" class="numberInputOnly1 form-control  numberInputOnly1 @error('Rent') is-invalid @enderror " name="Rent" id="Rent" placeholder="0.00" value="{{ old('Rent') }}">
                                                    @error('Rent')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                  </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                  <div class="form-group">
                                                    <label class="form-head" for="exampletext">Supplies <span class="red">*</span>
                                                    </label>
                                                    <span class="currency_input">$</span>
                                                    <input type="number" step="any" class="numberInputOnly1 form-control  numberInputOnly1 @error('Supplies') is-invalid @enderror " name="Supplies" id="Supplies" placeholder="0.00" value="{{ old('Supplies') }}">
                                                    @error('Supplies')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                  </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                  <div class="form-group">
                                                    <label class="form-head" for="exampletext">Business Expenses <span class="red">*</span>
                                                    </label>
                                                    <span class="currency_input">$</span>
                                                    <input type="number" step="any" class="numberInputOnly1 form-control  numberInputOnly1 @error('Business_Expenses') is-invalid @enderror " name="Business_Expenses" id="Business_Expenses" placeholder="0.00" value="{{ old('Business_Expenses') }}">
                                                    @error('Business_Expenses')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                  </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                  <div class="form-group">
                                                    <label class="form-head" for="exampletext">Utilities/Telephone <span class="red">*</span>
                                                    </label>
                                                    <span class="currency_input">$</span>
                                                    <input type="number" step="any" class="numberInputOnly1 form-control  numberInputOnly1 @error('Utilities_Telephone') is-invalid @enderror " name="Utilities_Telephone" id="Utilities_Telephone" placeholder="0.00" value="{{ old('Utilities_Telephone') }}">
                                                    @error('Utilities_Telephone')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                  </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                  <div class="form-group">
                                                    <label class="form-head" for="exampletext">Vehicle/Gas/Oil <span class="red">*</span>
                                                    </label>
                                                    <span class="currency_input">$</span>
                                                    <input type="number" step="any" class="numberInputOnly1 form-control  numberInputOnly1 @error('Vehicle_Gas_Oil') is-invalid @enderror " name="Vehicle_Gas_Oil" id="Vehicle_Gas_Oil" placeholder="0.00" value="{{ old('Vehicle_Gas_Oil') }}">
                                                    @error('Vehicle_Gas_Oil')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                  </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                  <div class="form-group">
                                                    <label class="form-head" for="exampletext">Repairs/Maintenance <span class="red">*</span>
                                                    </label>
                                                    <span class="currency_input">$</span>
                                                    <input type="number" step="any" class="numberInputOnly1 form-control  numberInputOnly1 @error('Repairs_Maintenance') is-invalid @enderror " name="Repairs_Maintenance" id="Repairs_Maintenance" placeholder="0.00" value="{{ old('Repairs_Maintenance') }}">
                                                    @error('Repairs_Maintenance')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                  </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                  <div class="form-group">
                                                    <label class="form-head" for="exampletext">Insurance <span class="red">*</span>
                                                    </label>
                                                    <span class="currency_input">$</span>
                                                    <input type="number" step="any" class="numberInputOnly1 form-control  numberInputOnly1 @error('Insurance') is-invalid @enderror " name="Insurance" id="Insurance" placeholder="0.00" value="{{ old('Insurance') }}">
                                                    @error('Insurance')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                  </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                  <div class="form-group">
                                                    <label class="form-head" for="exampletext">Current Taxes <span class="red">*</span>
                                                    </label>
                                                    <span class="currency_input">$</span>
                                                    <input type="number" step="any" class="numberInputOnly1 form-control  numberInputOnly1 @error('Current_Taxes') is-invalid @enderror " name="Current_Taxes" id="Current_Taxes" placeholder="0.00" value="{{ old('Current_Taxes') }}">
                                                    @error('Current_Taxes')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                  </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                  <div class="form-group">
                                                    <label class="form-head" for="exampletext">Other Installment Payments</label>
                                                    <span class="currency_input">$</span>
                                                    <input type="number" step="any" class="numberInputOnly1 form-control  numberInputOnly1 @error('Other_Installment_Payments') is-invalid @enderror " name="Other_Installment_Payments" id="Other_Installment_Payments" placeholder="0.00" value="{{ old('Other_Installment_Payments') }}">
                                                    @error('Other_Installment_Payments')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                  </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                  <div class="form-group">
                                                    <label class="form-head" for="exampletext">Total Business Expenses <span class="red">*</span>
                                                    </label>
                                                    <span class="currency_input">$</span>
                                                    <input type="number" step="any" class="numberInputOnly1 form-control  numberInputOnly1 @error('Total_Business_Expenses') is-invalid @enderror " name="Total_Business_Expenses" id="Total_Business_Expenses" placeholder="0.00" value="{{ old('Total_Business_Expenses') }}">
                                                    @error('Total_Business_Expenses')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                  </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                  <div class="form-group">
                                                    <label class="form-head" for="exampletext">Net Business Income <span class="red">*</span>
                                                    </label>
                                                    <span class="currency_input">$</span>
                                                    <input type="number" step="any" class="numberInputOnly1 form-control  numberInputOnly1 @error('Net_Business_Income') is-invalid @enderror " name="Net_Business_Income" id="Net_Business_Income" placeholder="0.00" value="{{ old('Net_Business_Income') }}">
                                                    @error('Net_Business_Income')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            @endif

                                          </div>
                                        </div>
                                    </div>
                                    @else
                                    <div class="col-12" id="section5a" style="display:none;">
                                        <div class="row">
                                          <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 mb-2">
                                            <div class="form-section-highlite mt-3">
                                              <div> SECTION 5 (a): Business Asset Information: (for Self-Employed) </div>
                                            </div>
                                          </div>


                                          <!-- ::::::::: -->
                                          <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                            <div class="form-group">
                                              <label class="form-head" for="exampletext">Business Cash On Hand <span class="red">*</span>
                                              </label>
                                              <span class="currency_input">$</span>
                                              <input type="number" step="any" class="@error('Business_Cash_On_Hand') is-invalid @enderror numberInputOnly1 form-control  numberInputOnly1 " name="Business_Cash_On_Hand" id="Business_Cash_On_Hand" placeholder="0.00" value="{{ old('Business_Cash_On_Hand') }}">
                                              @error('Business_Cash_On_Hand')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                              @enderror

                                            </div>
                                          </div>
                                          <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                            <div class="form-group">
                                              <label class="form-head" for="exampletext">Business Bank Account(s): Please attach 3 months of business bank statements <span class="red">*</span>
                                              </label>
                                              <input type="file" class="form-control @error('Business_Cash_On_Hand') is-invalid @enderror" id="Business_Bank_Account" name="Business_Bank_Account" accept="image/*" >
                                              @error('Business_Bank_Account')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                              @enderror
                                            </div>
                                          </div>
                                          <!-- ::::::::: -->
                                          <!-- ::::::::::::Section 05 (b)::::::::::::  -->
                                          <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 mb-2">
                                            <div class="form-section-highlite mt-3">
                                              <div> SECTION 5 (b): Business Income and expense (for Self-Employed) </div>
                                            </div>
                                            <div class="warning-text mt-3 text-left">
                                              <p> If a question does not apply to you, put 0.</p>
                                            </div>
                                          </div>
                                          <!-- 5b radio -->
                                          <!-- 5b radio end -->
                                          <div class="col-md-12">
                                            <div class="row">
                                              <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 text-left">
                                                <div class="form-group">
                                                  <label class="form-head" for="exampletext">Are you able to provide a current year-to-date Profit & Loss Statement? <span class="red">*</span>
                                                  </label>
                                                  <div class="form-check">
                                                    <label class="form-check-label">
                                                      <input class="form-check-input  @error('Are_you_able_to_provide_current_year_Profit_Loss_Statement') is-invalid @enderror" id="Are_you_able_to_provide_current_year_Profit_Loss_Statement" type="radio" name="Are_you_able_to_provide_current_year_Profit_Loss_Statement" value="yes" @if(old('Are_you_able_to_provide_current_year_Profit_Loss_Statement') == 'yes') checked @endif>Yes </label>
                                                  </div>
                                                  <div class="form-check">
                                                    <label class="form-check-label">
                                                      <input class="form-check-input @error('Are_you_able_to_provide_current_year_Profit_Loss_Statement') is-invalid @enderror" id="Are_you_able_to_provide_current_year_Profit_Loss_Statement1" type="radio" name="Are_you_able_to_provide_current_year_Profit_Loss_Statement" value="no" @if(old('Are_you_able_to_provide_current_year_Profit_Loss_Statement') == 'no') checked @endif>No 
                                                       @error('Are_you_able_to_provide_current_year_Profit_Loss_Statement')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                       @enderror
                                                    </label>
                                                  </div>
                                                </div>
                                              </div>

                                              @if(old('Are_you_able_to_provide_current_year_Profit_Loss_Statement') == 'yes')

                                              <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left" id="section5b_yes" style="display: block;">
                                                <div class="form-group">
                                                  <label class="form-head" for="exampletext">Upload Most Recent Profit & Loss Statement <span class="red">*</span>
                                                  </label>
                                                  <input type="file" class="form-control @error('Upload_Most_Recent_Profit_Loss_Statement') is-invalid @enderror" id="Upload_Most_Recent_Profit_Loss_Statement" name="Upload_Most_Recent_Profit_Loss_Statement" accept="image/*" >
                                                    @error('Upload_Most_Recent_Profit_Loss_Statement')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                              </div>

                                              @else

                                              <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left" id="section5b_yes" style="display: none;">
                                                <div class="form-group">
                                                  <label class="form-head" for="exampletext">Upload Most Recent Profit & Loss Statement <span class="red">*</span>
                                                  </label>
                                                  <input type="file" class="form-control @error('Upload_Most_Recent_Profit_Loss_Statement') is-invalid @enderror" id="Upload_Most_Recent_Profit_Loss_Statement" name="Upload_Most_Recent_Profit_Loss_Statement" accept="image/*" >
                                                    @error('Upload_Most_Recent_Profit_Loss_Statement')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                              </div>
                                              @endif
                                            </div>


                                            @if(old('Are_you_able_to_provide_current_year_Profit_Loss_Statement') == 'no')
                                            <div class="div"  id="section5b_no" style="display:block;">
                                              <div class="row">
                                                <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 mb-2 text-left">
                                                  <div class="warning-text mt-3 text-left">
                                                    <p>Business Income</p>
                                                  </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                  <div class="form-group">
                                                    <label class="form-head" for="exampletext">Item Actual Monthly Gross Receipts <span class="red">*</span>
                                                    </label>
                                                    <span class="currency_input">$</span>
                                                    <input type="number" step="any" class="numberInputOnly1 form-control  numberInputOnly1 @error('Item_Actual_Monthly_Gross_Receipts') is-invalid @enderror " name="Item_Actual_Monthly_Gross_Receipts" id="Item_Actual_Monthly_Gross_Receipts" placeholder="0.00" value="{{ old('Item_Actual_Monthly_Gross_Receipts') }}">
                                                    @error('Item_Actual_Monthly_Gross_Receipts')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                  </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                  <div class="form-group">
                                                    <label class="form-head" for="exampletext">Gross Rental Income <span class="red">*</span>
                                                    </label>
                                                    <span class="currency_input">$</span>
                                                    <input type="number" step="any" class="numberInputOnly1 form-control  numberInputOnly1 @error('Gross_Rental_Income') is-invalid @enderror " name="Gross_Rental_Income" id="Gross_Rental_Income" placeholder="0.00" value="{{ old('Gross_Rental_Income') }}">
                                                    @error('Gross_Rental_Income')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                  </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                  <div class="form-group">
                                                    <label class="form-head" for="exampletext">Interest <span class="red">*</span>
                                                    </label>
                                                    <span class="currency_input">$</span>
                                                    <input type="number" step="any" class="numberInputOnly1 form-control  numberInputOnly1 @error('Interest') is-invalid @enderror " name="Interest" id="Interest" placeholder="0.00" value="{{ old('Interest') }}">
                                                    @error('Interest')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                  </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                  <div class="form-group">
                                                    <label class="form-head" for="exampletext">Dividends <span class="red">*</span>
                                                    </label>
                                                    <span class="currency_input">$</span>
                                                    <input type="number" step="any" class="numberInputOnly1 form-control  numberInputOnly1 @error('Dividends') is-invalid @enderror " name="Dividends" id="Dividends" placeholder="0.00" value="{{ old('Dividends') }}">
                                                    @error('Dividends')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                  </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                  <div class="form-group">
                                                    <label class="form-head" for="exampletext">Cash <span class="red">*</span>
                                                    </label>
                                                    <span class="currency_input">$</span>
                                                    <input type="number" step="any" class="numberInputOnly1 form-control  numberInputOnly1 @error('Cash') is-invalid @enderror " name="Cash" id="Cash" placeholder="0.00" value="{{ old('Cash') }}">
                                                    @error('Cash')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                  </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                  <div class="form-group">
                                                    <label class="form-head" for="exampletext">Other Income <span class="red">*</span>
                                                    </label>
                                                    <span class="currency_input">$</span>
                                                    <input type="number" step="any" class="numberInputOnly1 form-control  numberInputOnly1 @error('Other_Income_5b') is-invalid @enderror " name="Other_Income_5b" id="Other_Income_5b" placeholder="0.00" value="{{ old('Other_Income_5b') }}">
                                                    @error('Other_Income_5b')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                  </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                  <div class="form-group">
                                                    <label class="form-head" for="exampletext">Total Business Income <span class="red">*</span>
                                                    </label>
                                                    <span class="currency_input">$</span>
                                                    <input type="number" step="any" class="numberInputOnly1 form-control  numberInputOnly1 @error('Total_Business_Income') is-invalid @enderror " name="Total_Business_Income" id="Total_Business_Income" placeholder="0.00" value="{{ old('Total_Business_Income') }}">
                                                    @error('Total_Business_Income')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                  </div>
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 mb-2 text-left">
                                                  <div class="warning-text mt-3 text-left">
                                                    <p>Business Expenses</p>
                                                  </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                  <div class="form-group">
                                                    <label class="form-head" for="exampletext">Materials Purchased <span class="red">*</span>
                                                    </label>
                                                    <span class="currency_input">$</span>
                                                    <input type="number" step="any" class="numberInputOnly1 form-control  numberInputOnly1 @error('Materials_Purchased') is-invalid @enderror " name="Materials_Purchased" id="Materials_Purchased" placeholder="0.00" value="{{ old('Materials_Purchased') }}">
                                                    @error('Materials_Purchased')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                  </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                  <div class="form-group">
                                                    <label class="form-head" for="exampletext">Inventory Purchased <span class="red">*</span>
                                                    </label>
                                                    <span class="currency_input">$</span>
                                                    <input type="number" step="any" class="numberInputOnly1 form-control  numberInputOnly1 @error('Inventory_Purchased') is-invalid @enderror " name="Inventory_Purchased" id="Inventory_Purchased" placeholder="0.00" value="{{ old('Inventory_Purchased') }}">
                                                    @error('Inventory_Purchased')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                  </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                  <div class="form-group">
                                                    <label class="form-head" for="exampletext">Gross Wages & Salaries <span class="red">*</span>
                                                    </label>
                                                    <span class="currency_input">$</span>
                                                    <input type="number" step="any" class="numberInputOnly1 form-control  numberInputOnly1 @error('Gross_Wages_Salaries') is-invalid @enderror " name="Gross_Wages_Salaries" id="Gross_Wages_Salaries" placeholder="0.00" value="{{ old('Gross_Wages_Salaries') }}">
                                                    @error('Gross_Wages_Salaries')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                  </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                  <div class="form-group">
                                                    <label class="form-head" for="exampletext">Rent <span class="red">*</span>
                                                    </label>
                                                    <span class="currency_input">$</span>
                                                    <input type="number" step="any" class="numberInputOnly1 form-control  numberInputOnly1 @error('Rent') is-invalid @enderror " name="Rent" id="Rent" placeholder="0.00" value="{{ old('Rent') }}">
                                                    @error('Rent')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                  </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                  <div class="form-group">
                                                    <label class="form-head" for="exampletext">Supplies <span class="red">*</span>
                                                    </label>
                                                    <span class="currency_input">$</span>
                                                    <input type="number" step="any" class="numberInputOnly1 form-control  numberInputOnly1 @error('Supplies') is-invalid @enderror " name="Supplies" id="Supplies" placeholder="0.00" value="{{ old('Supplies') }}">
                                                    @error('Supplies')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                  </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                  <div class="form-group">
                                                    <label class="form-head" for="exampletext">Business Expenses <span class="red">*</span>
                                                    </label>
                                                    <span class="currency_input">$</span>
                                                    <input type="number" step="any" class="numberInputOnly1 form-control  numberInputOnly1 @error('Business_Expenses') is-invalid @enderror " name="Business_Expenses" id="Business_Expenses" placeholder="0.00" value="{{ old('Business_Expenses') }}">
                                                    @error('Business_Expenses')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                  </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                  <div class="form-group">
                                                    <label class="form-head" for="exampletext">Utilities/Telephone <span class="red">*</span>
                                                    </label>
                                                    <span class="currency_input">$</span>
                                                    <input type="number" step="any" class="numberInputOnly1 form-control  numberInputOnly1 @error('Utilities_Telephone') is-invalid @enderror " name="Utilities_Telephone" id="Utilities_Telephone" placeholder="0.00" value="{{ old('Utilities_Telephone') }}">
                                                    @error('Utilities_Telephone')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                  </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                  <div class="form-group">
                                                    <label class="form-head" for="exampletext">Vehicle/Gas/Oil <span class="red">*</span>
                                                    </label>
                                                    <span class="currency_input">$</span>
                                                    <input type="number" step="any" class="numberInputOnly1 form-control  numberInputOnly1 @error('Vehicle_Gas_Oil') is-invalid @enderror " name="Vehicle_Gas_Oil" id="Vehicle_Gas_Oil" placeholder="0.00" value="{{ old('Vehicle_Gas_Oil') }}">
                                                    @error('Vehicle_Gas_Oil')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                  </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                  <div class="form-group">
                                                    <label class="form-head" for="exampletext">Repairs/Maintenance <span class="red">*</span>
                                                    </label>
                                                    <span class="currency_input">$</span>
                                                    <input type="number" step="any" class="numberInputOnly1 form-control  numberInputOnly1 @error('Repairs_Maintenance') is-invalid @enderror " name="Repairs_Maintenance" id="Repairs_Maintenance" placeholder="0.00" value="{{ old('Repairs_Maintenance') }}">
                                                    @error('Repairs_Maintenance')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                  </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                  <div class="form-group">
                                                    <label class="form-head" for="exampletext">Insurance <span class="red">*</span>
                                                    </label>
                                                    <span class="currency_input">$</span>
                                                    <input type="number" step="any" class="numberInputOnly1 form-control  numberInputOnly1 @error('Insurance') is-invalid @enderror " name="Insurance" id="Insurance" placeholder="0.00" value="{{ old('Insurance') }}">
                                                    @error('Insurance')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                  </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                  <div class="form-group">
                                                    <label class="form-head" for="exampletext">Current Taxes <span class="red">*</span>
                                                    </label>
                                                    <span class="currency_input">$</span>
                                                    <input type="number" step="any" class="numberInputOnly1 form-control  numberInputOnly1 @error('Current_Taxes') is-invalid @enderror " name="Current_Taxes" id="Current_Taxes" placeholder="0.00" value="{{ old('Current_Taxes') }}">
                                                    @error('Current_Taxes')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                  </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                  <div class="form-group">
                                                    <label class="form-head" for="exampletext">Other Installment Payments</label>
                                                    <span class="currency_input">$</span>
                                                    <input type="number" step="any" class="numberInputOnly1 form-control  numberInputOnly1 @error('Other_Installment_Payments') is-invalid @enderror " name="Other_Installment_Payments" id="Other_Installment_Payments" placeholder="0.00" value="{{ old('Other_Installment_Payments') }}">
                                                    @error('Other_Installment_Payments')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                  </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                  <div class="form-group">
                                                    <label class="form-head" for="exampletext">Total Business Expenses <span class="red">*</span>
                                                    </label>
                                                    <span class="currency_input">$</span>
                                                    <input type="number" step="any" class="numberInputOnly1 form-control  numberInputOnly1 @error('Total_Business_Expenses') is-invalid @enderror " name="Total_Business_Expenses" id="Total_Business_Expenses" placeholder="0.00" value="{{ old('Total_Business_Expenses') }}">
                                                    @error('Total_Business_Expenses')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                  </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                  <div class="form-group">
                                                    <label class="form-head" for="exampletext">Net Business Income <span class="red">*</span>
                                                    </label>
                                                    <span class="currency_input">$</span>
                                                    <input type="number" step="any" class="numberInputOnly1 form-control  numberInputOnly1 @error('Net_Business_Income') is-invalid @enderror " name="Net_Business_Income" id="Net_Business_Income" placeholder="0.00" value="{{ old('Net_Business_Income') }}">
                                                    @error('Net_Business_Income')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            @else
                                            <div class="div"  id="section5b_no" style="display:none;">
                                              <div class="row">
                                                <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 mb-2 text-left">
                                                  <div class="warning-text mt-3 text-left">
                                                    <p>Business Income</p>
                                                  </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                  <div class="form-group">
                                                    <label class="form-head" for="exampletext">Item Actual Monthly Gross Receipts <span class="red">*</span>
                                                    </label>
                                                    <span class="currency_input">$</span>
                                                    <input type="number" step="any" class="numberInputOnly1 form-control  numberInputOnly1 @error('Item_Actual_Monthly_Gross_Receipts') is-invalid @enderror " name="Item_Actual_Monthly_Gross_Receipts" id="Item_Actual_Monthly_Gross_Receipts" placeholder="0.00" value="{{ old('Item_Actual_Monthly_Gross_Receipts') }}">
                                                    @error('Item_Actual_Monthly_Gross_Receipts')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                  </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                  <div class="form-group">
                                                    <label class="form-head" for="exampletext">Gross Rental Income <span class="red">*</span>
                                                    </label>
                                                    <span class="currency_input">$</span>
                                                    <input type="number" step="any" class="numberInputOnly1 form-control  numberInputOnly1 @error('Gross_Rental_Income') is-invalid @enderror " name="Gross_Rental_Income" id="Gross_Rental_Income" placeholder="0.00" value="{{ old('Gross_Rental_Income') }}">
                                                    @error('Gross_Rental_Income')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                  </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                  <div class="form-group">
                                                    <label class="form-head" for="exampletext">Interest <span class="red">*</span>
                                                    </label>
                                                    <span class="currency_input">$</span>
                                                    <input type="number" step="any" class="numberInputOnly1 form-control  numberInputOnly1 @error('Interest') is-invalid @enderror " name="Interest" id="Interest" placeholder="0.00" value="{{ old('Interest') }}">
                                                    @error('Interest')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                  </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                  <div class="form-group">
                                                    <label class="form-head" for="exampletext">Dividends <span class="red">*</span>
                                                    </label>
                                                    <span class="currency_input">$</span>
                                                    <input type="number" step="any" class="numberInputOnly1 form-control  numberInputOnly1 @error('Dividends') is-invalid @enderror " name="Dividends" id="Dividends" placeholder="0.00" value="{{ old('Dividends') }}">
                                                    @error('Dividends')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                  </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                  <div class="form-group">
                                                    <label class="form-head" for="exampletext">Cash <span class="red">*</span>
                                                    </label>
                                                    <span class="currency_input">$</span>
                                                    <input type="number" step="any" class="numberInputOnly1 form-control  numberInputOnly1 @error('Cash') is-invalid @enderror " name="Cash" id="Cash" placeholder="0.00" value="{{ old('Cash') }}">
                                                    @error('Cash')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                  </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                  <div class="form-group">
                                                    <label class="form-head" for="exampletext">Other Income <span class="red">*</span>
                                                    </label>
                                                    <span class="currency_input">$</span>
                                                    <input type="number" step="any" class="numberInputOnly1 form-control  numberInputOnly1 @error('Other_Income_5b') is-invalid @enderror " name="Other_Income_5b" id="Other_Income_5b" placeholder="0.00" value="{{ old('Other_Income_5b') }}">
                                                    @error('Other_Income_5b')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                  </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                  <div class="form-group">
                                                    <label class="form-head" for="exampletext">Total Business Income <span class="red">*</span>
                                                    </label>
                                                    <span class="currency_input">$</span>
                                                    <input type="number" step="any" class="numberInputOnly1 form-control  numberInputOnly1 @error('Total_Business_Income') is-invalid @enderror " name="Total_Business_Income" id="Total_Business_Income" placeholder="0.00" value="{{ old('Total_Business_Income') }}">
                                                    @error('Total_Business_Income')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                  </div>
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 mb-2 text-left">
                                                  <div class="warning-text mt-3 text-left">
                                                    <p>Business Expenses</p>
                                                  </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                  <div class="form-group">
                                                    <label class="form-head" for="exampletext">Materials Purchased <span class="red">*</span>
                                                    </label>
                                                    <span class="currency_input">$</span>
                                                    <input type="number" step="any" class="numberInputOnly1 form-control  numberInputOnly1 @error('Materials_Purchased') is-invalid @enderror " name="Materials_Purchased" id="Materials_Purchased" placeholder="0.00" value="{{ old('Materials_Purchased') }}">
                                                    @error('Materials_Purchased')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                  </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                  <div class="form-group">
                                                    <label class="form-head" for="exampletext">Inventory Purchased <span class="red">*</span>
                                                    </label>
                                                    <span class="currency_input">$</span>
                                                    <input type="number" step="any" class="numberInputOnly1 form-control  numberInputOnly1 @error('Inventory_Purchased') is-invalid @enderror " name="Inventory_Purchased" id="Inventory_Purchased" placeholder="0.00" value="{{ old('Inventory_Purchased') }}">
                                                    @error('Inventory_Purchased')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                  </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                  <div class="form-group">
                                                    <label class="form-head" for="exampletext">Gross Wages & Salaries <span class="red">*</span>
                                                    </label>
                                                    <span class="currency_input">$</span>
                                                    <input type="number" step="any" class="numberInputOnly1 form-control  numberInputOnly1 @error('Gross_Wages_Salaries') is-invalid @enderror " name="Gross_Wages_Salaries" id="Gross_Wages_Salaries" placeholder="0.00" value="{{ old('Gross_Wages_Salaries') }}">
                                                    @error('Gross_Wages_Salaries')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                  </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                  <div class="form-group">
                                                    <label class="form-head" for="exampletext">Rent <span class="red">*</span>
                                                    </label>
                                                    <span class="currency_input">$</span>
                                                    <input type="number" step="any" class="numberInputOnly1 form-control  numberInputOnly1 @error('Rent') is-invalid @enderror " name="Rent" id="Rent" placeholder="0.00" value="{{ old('Rent') }}">
                                                    @error('Rent')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                  </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                  <div class="form-group">
                                                    <label class="form-head" for="exampletext">Supplies <span class="red">*</span>
                                                    </label>
                                                    <span class="currency_input">$</span>
                                                    <input type="number" step="any" class="numberInputOnly1 form-control  numberInputOnly1 @error('Supplies') is-invalid @enderror " name="Supplies" id="Supplies" placeholder="0.00" value="{{ old('Supplies') }}">
                                                    @error('Supplies')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                  </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                  <div class="form-group">
                                                    <label class="form-head" for="exampletext">Business Expenses <span class="red">*</span>
                                                    </label>
                                                    <span class="currency_input">$</span>
                                                    <input type="number" step="any" class="numberInputOnly1 form-control  numberInputOnly1 @error('Business_Expenses') is-invalid @enderror " name="Business_Expenses" id="Business_Expenses" placeholder="0.00" value="{{ old('Business_Expenses') }}">
                                                    @error('Business_Expenses')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                  </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                  <div class="form-group">
                                                    <label class="form-head" for="exampletext">Utilities/Telephone <span class="red">*</span>
                                                    </label>
                                                    <span class="currency_input">$</span>
                                                    <input type="number" step="any" class="numberInputOnly1 form-control  numberInputOnly1 @error('Utilities_Telephone') is-invalid @enderror " name="Utilities_Telephone" id="Utilities_Telephone" placeholder="0.00" value="{{ old('Utilities_Telephone') }}">
                                                    @error('Utilities_Telephone')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                  </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                  <div class="form-group">
                                                    <label class="form-head" for="exampletext">Vehicle/Gas/Oil <span class="red">*</span>
                                                    </label>
                                                    <span class="currency_input">$</span>
                                                    <input type="number" step="any" class="numberInputOnly1 form-control  numberInputOnly1 @error('Vehicle_Gas_Oil') is-invalid @enderror " name="Vehicle_Gas_Oil" id="Vehicle_Gas_Oil" placeholder="0.00" value="{{ old('Vehicle_Gas_Oil') }}">
                                                    @error('Vehicle_Gas_Oil')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                  </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                  <div class="form-group">
                                                    <label class="form-head" for="exampletext">Repairs/Maintenance <span class="red">*</span>
                                                    </label>
                                                    <span class="currency_input">$</span>
                                                    <input type="number" step="any" class="numberInputOnly1 form-control  numberInputOnly1 @error('Repairs_Maintenance') is-invalid @enderror " name="Repairs_Maintenance" id="Repairs_Maintenance" placeholder="0.00" value="{{ old('Repairs_Maintenance') }}">
                                                    @error('Repairs_Maintenance')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                  </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                  <div class="form-group">
                                                    <label class="form-head" for="exampletext">Insurance <span class="red">*</span>
                                                    </label>
                                                    <span class="currency_input">$</span>
                                                    <input type="number" step="any" class="numberInputOnly1 form-control  numberInputOnly1 @error('Insurance') is-invalid @enderror " name="Insurance" id="Insurance" placeholder="0.00" value="{{ old('Insurance') }}">
                                                    @error('Insurance')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                  </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                  <div class="form-group">
                                                    <label class="form-head" for="exampletext">Current Taxes <span class="red">*</span>
                                                    </label>
                                                    <span class="currency_input">$</span>
                                                    <input type="number" step="any" class="numberInputOnly1 form-control  numberInputOnly1 @error('Current_Taxes') is-invalid @enderror " name="Current_Taxes" id="Current_Taxes" placeholder="0.00" value="{{ old('Current_Taxes') }}">
                                                    @error('Current_Taxes')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                  </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                  <div class="form-group">
                                                    <label class="form-head" for="exampletext">Other Installment Payments</label>
                                                    <span class="currency_input">$</span>
                                                    <input type="number" step="any" class="numberInputOnly1 form-control  numberInputOnly1 @error('Other_Installment_Payments') is-invalid @enderror " name="Other_Installment_Payments" id="Other_Installment_Payments" placeholder="0.00" value="{{ old('Other_Installment_Payments') }}">
                                                    @error('Other_Installment_Payments')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                  </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                  <div class="form-group">
                                                    <label class="form-head" for="exampletext">Total Business Expenses <span class="red">*</span>
                                                    </label>
                                                    <span class="currency_input">$</span>
                                                    <input type="number" step="any" class="numberInputOnly1 form-control  numberInputOnly1 @error('Total_Business_Expenses') is-invalid @enderror " name="Total_Business_Expenses" id="Total_Business_Expenses" placeholder="0.00" value="{{ old('Total_Business_Expenses') }}">
                                                    @error('Total_Business_Expenses')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                  </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left">
                                                  <div class="form-group">
                                                    <label class="form-head" for="exampletext">Net Business Income <span class="red">*</span>
                                                    </label>
                                                    <span class="currency_input">$</span>
                                                    <input type="number" step="any" class="numberInputOnly1 form-control  numberInputOnly1 @error('Net_Business_Income') is-invalid @enderror " name="Net_Business_Income" id="Net_Business_Income" placeholder="0.00" value="{{ old('Net_Business_Income') }}">
                                                    @error('Net_Business_Income')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            @endif

                                          </div>
                                        </div>
                                    </div>
                                    @endif












                                    <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 mb-4">
                                        <div class="form-section-highlite mt-3">
                                            <div>SECTION 6: Other Financial Information
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
                                                        type="radio" name="Are_you_the_beneficiary_of_a_trust_estate_or_life_insurance_po" value="Yes" @if(old('Are_you_the_beneficiary_of_a_trust_estate_or_life_insurance_po') == 'Yes') checked @endif >Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input  @error('Are_you_the_beneficiary_of_a_trust_estate_or_life_insurance_po') is-invalid @enderror" id="beneficiary-no" type="radio"
                                                        name="Are_you_the_beneficiary_of_a_trust_estate_or_life_insurance_po" value="No" @if(old('Are_you_the_beneficiary_of_a_trust_estate_or_life_insurance_po') == 'No') checked @endif >No
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
                                                        name="Are_you_currently_in_bankruptcy" value="Yes" @if(old('Are_you_currently_in_bankruptcy') == 'Yes') checked @endif >Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input @error('Are_you_currently_in_bankruptcy') is-invalid @enderror" id="bankruptcy-no" type="radio"
                                                        name="Are_you_currently_in_bankruptcy" value="No" @if(old('Are_you_currently_in_bankruptcy') == 'No') checked @endif >No
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

                                    @if(old('Are_you_currently_in_bankruptcy') == 'Yes')
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left"
                                        id="bankruptcy-select" style="display:block;">
                                        <div class="form-group">
                                            <label class="form-head" for="exampletext"> Discharge/Dismissal Date <span class="red">*</span>

                                            </label>
                                            <input type="date" class="form-control @error('Discharge/Dismissal_Date') is-invalid @enderror" name="Discharge/Dismissal_Date" id="Discharge/Dismissal_Date"
                                                placeholder="Discharge/Dismissal Date" >
                                            @error('Discharge/Dismissal_Date')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror    
                                        </div>
                                    </div>
                                    @else
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left"
                                        id="bankruptcy-select" style="display:none;">
                                        <div class="form-group">
                                            <label class="form-head" for="exampletext"> Discharge/Dismissal Date <span class="red">*</span>

                                            </label>
                                            <input type="date" class="form-control @error('Discharge/Dismissal_Date') is-invalid @enderror" name="Discharge/Dismissal_Date" id="Discharge/Dismissal_Date"
                                                placeholder="Discharge/Dismissal Date" >
                                            @error('Discharge/Dismissal_Date')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror 
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
                                                        name="Have_you_been_party_to_a_lawsuit?" value="Yes" @if(old('Have_you_been_party_to_a_lawsuit?') == 'Yes') checked @endif >Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input @error('Have_you_been_party_to_a_lawsuit?') is-invalid @enderror" id="lawsuit-no" type="radio"
                                                        name="Have_you_been_party_to_a_lawsuit?" value="No" @if(old('Have_you_been_party_to_a_lawsuit?') == 'No') checked @endif >No
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

                                    @if(old('Have_you_been_party_to_a_lawsuit?') == 'Yes')
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left"
                                        id="lawsuit-select" style="display:block;">
                                        <div class="form-group">
                                            <label class="form-head" for="exampletext">Date the lawsuit was resolved <span class="red">*</span>
                                            </label>
                                            <input type="date" class="form-control  @error('Date_the_lawsuit_was_resolved') is-invalid @enderror" name="Date_the_lawsuit_was_resolved" id="Date_the_lawsuit_was_resolved"
                                                placeholder="Date the lawsuit" >
                                            @error('Date_the_lawsuit_was_resolved')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    @else
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left"
                                        id="lawsuit-select" style="display:none;">
                                        <div class="form-group">
                                            <label class="form-head" for="exampletext">Date the lawsuit was resolved <span class="red">*</span>
                                            </label>
                                            <input type="date" class="form-control  @error('Date_the_lawsuit_was_resolved') is-invalid @enderror" name="Date_the_lawsuit_was_resolved" id="Date_the_lawsuit_was_resolved"
                                                placeholder="Date the lawsuit" >
                                            @error('Date_the_lawsuit_was_resolved?')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
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
                                                        type="radio" name="In_the_past_10_years_have_you_transferred_any_assets_for_less_t" value="Yes" @if(old('In_the_past_10_years_have_you_transferred_any_assets_for_less_t') == 'Yes') checked @endif >Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input @error('In_the_past_10_years_have_you_transferred_any_assets_for_less_t') is-invalid @enderror" id="transferred-assets-no"
                                                        type="radio" name="In_the_past_10_years_have_you_transferred_any_assets_for_less_t" value="No" @if(old('In_the_past_10_years_have_you_transferred_any_assets_for_less_t') == 'No') checked @endif >No
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

                                    @if(old('In_the_past_10_years_have_you_transferred_any_assets_for_less_t') == 'Yes')
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left"
                                        id="transferred-asset-select" style="display:block;">
                                        <div class="form-group">
                                            <label class="form-head" for="exampletext">Date the asset was
                                                transferred <span class="red">*</span>
                                            </label>
                                            <input type="date" class="form-control @error('Date_the_asset_was_transferred') is-invalid @enderror" name="Date_the_asset_was_transferred" id="Date_the_asset_was_transferred"
                                                placeholder="Date the asset was transferred" >
                                            @error('Date_the_asset_was_transferred')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror  
                                        </div>
                                    </div>
                                    @else
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left"
                                        id="transferred-asset-select" style="display:none;">
                                        <div class="form-group">
                                            <label class="form-head" for="exampletext">Date the asset was
                                                transferred <span class="red">*</span>
                                            </label>
                                            <input type="date" class="form-control @error('Date_the_asset_was_transferred') is-invalid @enderror" name="Date_the_asset_was_transferred" id="Date_the_asset_was_transferred"
                                                placeholder="Date the asset was transferred" >
                                            @error('Date_the_asset_was_transferred')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror  
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
                                                        type="radio" name="In_the_past_3_year_have_you_transferred_any_real_property" value="Yes" @if(old('In_the_past_3_year_have_you_transferred_any_real_property') == 'Yes') checked @endif >Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input @error('In_the_past_3_year_have_you_transferred_any_real_property') is-invalid @enderror" id="transferral-property-no"
                                                        type="radio" name="In_the_past_3_year_have_you_transferred_any_real_property" value="No" @if(old('In_the_past_3_year_have_you_transferred_any_real_property') == 'No') checked @endif >No
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

                                    @if(old('In_the_past_3_year_have_you_transferred_any_real_property') == 'Yes')
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left"
                                        id="transferral-select" style="display: block;">
                                        <div class="form-group">
                                            <label class="form-head" for="exampletext">List the type of property and
                                                date of the transfer <span class="red">*</span>
                                            </label>
                                            <input type="text" class="form-control @error('List_the_type_of_property_and_date_of_the_transfer') is-invalid @enderror" name="List_the_type_of_property_and_date_of_the_transfer" id="List_the_type_of_property_and_date_of_the_transfer"
                                                placeholder="List the type of property and date of the transfer"
                                                >
                                            @error('List_the_type_of_property_and_date_of_the_transfer')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                    @else
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 text-left"
                                        id="transferral-select" style="display: none;">
                                        <div class="form-group">
                                            <label class="form-head" for="exampletext">List the type of property and
                                                date of the transfer <span class="red">*</span>
                                            </label>
                                            <input type="text" class="form-control @error('List_the_type_of_property_and_date_of_the_transfer') is-invalid @enderror" name="List_the_type_of_property_and_date_of_the_transfer" id="List_the_type_of_property_and_date_of_the_transfer"
                                                placeholder="List the type of property and date of the transfer"
                                                >
                                            @error('List_the_type_of_property_and_date_of_the_transfer')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
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
                                                placeholder="Enter Full Name" value="{{ old('Print_Full_Name') }}" >
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
                                                placeholder="Date" value="{{ old('Date') }}" >
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
                        <h6>Personal Asset <span id="inputCountpersonal">${i}</span> <span class="red">*</span></h6>
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
                        <h6>Vehicle <span id="inputCountvehical">${i}</span> <span class="red">*</span></h6>
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
                        <h6>Property <span id="inputCountestate">${i}</span> <span class="red">*</span></h6>
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
                        <h6>Life Insurance Policy <span id="inputCountinsure">${i}</span> <span class="red">*</span></h6>
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
                        <h6>Investment <span id="inputCountinv">${i}</span><span class="red">*</span></h6>
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
                    <h6>Dependent <span id="inputCount">${i}</span><span class="red">*</span></h6>
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
                            <input type="text" class="ssn_valid form-control" id="dependent_ssn${i}"  name="dependent_ssn${i}"
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
                                <label class="form-head" for="bank${i}">Bank ${i} <span class="red">*</span><small>(Upload most recent 3 months of bank statements)</small></label>
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
                                <label class="form-head" for="bank${i}">Spouse Bank ${i} <span class="red">*</span><small>(Upload most recent 3 months of bank statements)</small></label>
                                <input type="file" class="form-control" id="bankspouse${i}" name="bankspouse${i}"  accept="image/*">
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
                                <label class="form-head" for="Credit Card${i}">Credit Card ${i} <span class="red">*</span><small>(Upload Most Recent 3 Months Credit Card Statements)</small></label>
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
    investmentSelect.style.display = "none";
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
    creditCardSelect.style.display = "none";
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
    insuranceSelect.style.display = "none";
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
realestateSelect.style.display = "none";
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
motorvehicleSelect.style.display = "none";
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
psassetsselect.style.display = "none";
</script>

<script>
    $(document).ready(function () {
        // Function to check if a value is a number
        function isNumber(value) {
            return !isNaN(value) && isFinite(value);
        }

        // Event listener for the button click
        // $("#calculateBtn").click(function () {
        //     // Get all input values
        //     var inputValues = $(".numberInput").map(function () {
        //         if($(this).val() == ''){
        //             return 0;
        //         }else{
        //             return $(this).val();
        //         }
                
        //     }).get();

        //     // Check if all values are numbers
        //     var allNumbers = inputValues.every(isNumber);

        //     if (allNumbers) {
        //         // Calculate the sum
        //         var sum = inputValues.reduce(function (acc, val) {
        //             return acc + parseFloat(val);
        //         }, 0);

        //         // Display the sum in the result field
        //         $("#Total_HouseHold_Income_calulate").val(sum);
        //     } else {
        //         alert("Please enter valid numbers in all fields.");
        //     }
        // });



        $(".numberInput").on('input', function () {
            // Get all input values
            var inputValues = $(".numberInput").map(function () {
                if($(this).val() == ''){
                    return 0;
                }else{
                    return $(this).val();
                }
                
            }).get();

            // Check if all values are numbers
            var allNumbers = inputValues.every(isNumber);

            if (allNumbers) {
                // Calculate the sum
                var sum = inputValues.reduce(function (acc, val) {
                    return acc + parseFloat(val);
                }, 0);

                // Display the sum in the result field
                $("#Total_HouseHold_Income_calulate").val(sum.toFixed(2)); // Displaying sum with 2 decimal places
                $("#Total_House_Hold_Income").val(sum.toFixed(2));
                
            } else {
                $("#Total_HouseHold_Income_calulate").val(""); // Clear the result field if any input is not a valid number
                $("#Total_House_Hold_Income").val("");
            }
        });

        // Event listener for the button click
        // $("#calculateBtn2").click(function () {
        //     // Get all input values
        //     var inputValues2 = $(".numberInput2").map(function () {
        //         if($(this).val() == ''){
        //             return 0;
        //         }else{
        //             return $(this).val();
        //         }
        //     }).get();

        //     // Check if all values are numbers
        //     var allNumbers2 = inputValues2.every(isNumber);

        //     if (allNumbers2) {
        //         // Calculate the sum
        //         var sum = inputValues2.reduce(function (acc, val) {
        //             return acc + parseFloat(val);
        //         }, 0);

        //         // Display the sum in the result field
        //         $("#TotHouseholdExpensecalculate").val(sum);
        //     } else {
        //         alert("Please enter valid numbers in all fields.");
        //     }
        // });

        $(".numberInput2").on('input', function () {
            // Get all input values
            var inputValues2 = $(".numberInput2").map(function () {
                if($(this).val() == ''){
                    return 0;
                }else{
                    return $(this).val();
                }
            }).get();

            // Check if all values are numbers
            var allNumbers2 = inputValues2.every(isNumber);

            if (allNumbers2) {
                // Calculate the sum
                var sum = inputValues2.reduce(function (acc, val) {
                    return acc + parseFloat(val);
                }, 0);

                // Display the sum in the result field
                $("#TotHouseholdExpensecalculate").val(sum.toFixed(2)); // Displaying sum with 2 decimal places
                $("#TotHouseholdExpense").val(sum.toFixed(2));
            } else {
                $("#TotHouseholdExpensecalculate").val(""); // Clear the result field if any input is not a valid number
                $("#TotHouseholdExpense").val("");
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


$(function () {
    $(".numberInputOnly1").on('input', function (event) {
        if (event.shiftKey == true) {
            event.preventDefault();
        }

        if ((event.keyCode >= 48 && event.keyCode <= 57) || 
            (event.keyCode >= 96 && event.keyCode <= 105) || 
            event.keyCode == 8 || event.keyCode == 9 || 
            event.keyCode == 37 || event.keyCode == 39 || 
            event.keyCode == 46 || event.keyCode == 190) {

            // Allow key codes for numbers, backspace, tab, arrows, delete, and decimal point

            if (event.keyCode == 190) {
                // Check if there's already a decimal point
                if ($(this).val().indexOf('.') !== -1) {
                    event.preventDefault();
                }
            } else {
                // Check if there's a decimal point and if there are more than two digits after it
                var decimalIndex = $(this).val().indexOf('.');
                if (decimalIndex !== -1 && $(this).val().substring(decimalIndex + 1).length >= 2) {
                    event.preventDefault();
                }
            }
        } else {
            event.preventDefault();
        }
    }).blur(function() {
        var value = $(this).val().trim();
        if (!value || value === "") {
            $(this).val("0.00");
        } else if (!isNaN(value) && value.indexOf('.') === -1) {
            $(this).val(value + ".00");
        }
    });
});



</script>


<script>
    // primary phone number should only allow 10 digit numbers that doesn't start with 0 or 1. exclude letters please 
    $('#Primary_phone_number').on('input', function() {
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
    $('#2nd_contact_phone_number').on('input', function() {
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
    $('#Country_of_residence').on('input', function() {
        var value = $(this).val().trim();
        
        // Remove non-alphabetic characters
        value = value.replace(/[^a-zA-Z]/g, '');

        $(this).val(value);
    });

    //  zip code should only allow 5 digit numbers, exclude letters please
    $('#Zip_code').on('input', function() {
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



<script>
// Add an event listener to the "Marital Status" radio buttons
$('input[name="spouse_employment_status"]').on('change', function() {
    if ($(this).val() === 'Self-Employed' ) {
        $('.Spouse_Employment_Status_detail_Section1').show();
        $('.Spouse_Employment_Status_detail_Section2').show();
        $('.Spouse_Employment_Status_detail_Section3_under4a').show();
    }else if($(this).val() === 'Wage Earner'){
        $('.Spouse_Employment_Status_detail_Section1').show();
        $('.Spouse_Employment_Status_detail_Section2').show();
        $('.Spouse_Employment_Status_detail_Section3_under4a').hide();
    }else if($(this).val() === 'Disability'){
        $('.Spouse_Employment_Status_detail_Section2').show();
        $('.Spouse_Employment_Status_detail_Section1').hide();
        $('.Spouse_Employment_Status_detail_Section3_under4a').hide();
    }else if($(this).val() === 'Retired'){
        $('.Spouse_Employment_Status_detail_Section1').hide();
        $('.Spouse_Employment_Status_detail_Section2').hide();
        $('.Spouse_Employment_Status_detail_Section3_under4a').hide();
    }else if($(this).val() === 'Unemployed'){
        $('.Spouse_Employment_Status_detail_Section1').hide();
        $('.Spouse_Employment_Status_detail_Section2').hide();
        $('.Spouse_Employment_Status_detail_Section3_under4a').hide();
    }else {
        $('.Spouse_Employment_Status_detail_Section1').hide();
        $('.Spouse_Employment_Status_detail_Section2').hide();
        $('.Spouse_Employment_Status_detail_Section3_under4a').hide();
    }
});
</script>


<script>
// Add an event listener to the "Marital Status" radio buttons
$('input[name="Client_employment_status"]').on('change', function() {
    if ($(this).val() === 'Self-Employed') {
        $('#section5a').show();
    } else {
       $('#section5a').hide();
       $('#section5b_yes').hide();
       $('#section5b_no').hide();
    }
});


$('input[name="Are_you_able_to_provide_current_year_Profit_Loss_Statement"]').on('change', function() {
    if ($(this).val() === 'yes') {
         $('#section5b_yes').show();
         $('#section5b_no').hide();
    } else {
       $('#section5b_yes').hide();
       $('#section5b_no').show();
    }
});
</script>
@endsection