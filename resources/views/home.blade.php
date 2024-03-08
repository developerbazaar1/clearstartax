@extends('layouts.header')
@section('styles') 
@endsection
@section('content')

<div class="app-title">
    <div class="user-dashboard-welcome">
        <h1>@php if($greeting){ echo $greeting; echo ' '; } echo ucfirst(Auth::user()->name); @endphp</h1>
        <h5 class="mt-10 mb-5px">Welcome to your Exclusive Client Portal!</h5>
        <p>Explore Your Personalized Dashboard, @php echo ucfirst(Auth::user()->name); @endphp!</p>
    </div>
    <div class="user-dashboard-welcome-d-image d-none-sm">
        <!--:: image top head dashboard  -->
        <img class="dashboardtop-image" src="{{ URL::asset('assets/img/dashboard-top.png') }}">
    </div>
</div>
<!-- :: 01 aleart   for document updation-->
<!-- <div class="row">
    <div class="col-md-12">
        <div class="alert alert-warning alert-dismissible fade show" role="alert"> Your documents are currently incomplete and require immediate review and completion. <a href="#" class="link-text">Click here</a>
            <a type="button" class="close link-text" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 25 25" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M21.4233 4.75666C21.5008 4.67918 21.5623 4.5872 21.6042 4.48597C21.6461 4.38473 21.6677 4.27623 21.6677 4.16666C21.6677 4.05709 21.6461 3.94859 21.6042 3.84736C21.5623 3.74612 21.5008 3.65414 21.4233 3.57666C21.3458 3.49918 21.2539 3.43772 21.1526 3.39579C21.0514 3.35386 20.9429 3.33228 20.8333 3.33228C20.7238 3.33228 20.6153 3.35386 20.514 3.39579C20.4128 3.43772 20.3208 3.49918 20.2433 3.57666L12.5 11.3217L4.75666 3.57666C4.67918 3.49918 4.5872 3.43772 4.48597 3.39579C4.38473 3.35386 4.27623 3.33228 4.16666 3.33228C4.05709 3.33228 3.94859 3.35386 3.84736 3.39579C3.74612 3.43772 3.65414 3.49918 3.57666 3.57666C3.49918 3.65414 3.43772 3.74612 3.39579 3.84736C3.35386 3.94859 3.33228 4.05709 3.33228 4.16666C3.33228 4.27623 3.35386 4.38473 3.39579 4.48597C3.43772 4.5872 3.49918 4.67918 3.57666 4.75666L11.3217 12.5L3.57666 20.2433C3.42018 20.3998 3.33228 20.612 3.33228 20.8333C3.33228 21.0546 3.42018 21.2668 3.57666 21.4233C3.73314 21.5798 3.94537 21.6677 4.16666 21.6677C4.38795 21.6677 4.60018 21.5798 4.75666 21.4233L12.5 13.6783L20.2433 21.4233C20.3998 21.5798 20.612 21.6677 20.8333 21.6677C21.0546 21.6677 21.2668 21.5798 21.4233 21.4233C21.5798 21.2668 21.6677 21.0546 21.6677 20.8333C21.6677 20.612 21.5798 20.3998 21.4233 20.2433L13.6783 12.5L21.4233 4.75666Z" fill="#007899" />
                    </svg>
                </span>
            </a>
        </div>
    </div>
</div> -->
<!-- :: alert end here -->
<!-- :: 02 aleart  for Financial Questionnaire-->
@if (in_array($status_id, $status_for_appointment))
<div class="row">
    <div class="col-md-12">
        <div class="alert alert-warning alert-dismissible fade show" role="alert">Action Required: Schedule an appointment with your agent to go over your investigation results and resolution! <a href="{{ route('appointment') }}" class="link-text">Click here</a>
            <a type="button" class="close link-text" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 25 25" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M21.4233 4.75666C21.5008 4.67918 21.5623 4.5872 21.6042 4.48597C21.6461 4.38473 21.6677 4.27623 21.6677 4.16666C21.6677 4.05709 21.6461 3.94859 21.6042 3.84736C21.5623 3.74612 21.5008 3.65414 21.4233 3.57666C21.3458 3.49918 21.2539 3.43772 21.1526 3.39579C21.0514 3.35386 20.9429 3.33228 20.8333 3.33228C20.7238 3.33228 20.6153 3.35386 20.514 3.39579C20.4128 3.43772 20.3208 3.49918 20.2433 3.57666L12.5 11.3217L4.75666 3.57666C4.67918 3.49918 4.5872 3.43772 4.48597 3.39579C4.38473 3.35386 4.27623 3.33228 4.16666 3.33228C4.05709 3.33228 3.94859 3.35386 3.84736 3.39579C3.74612 3.43772 3.65414 3.49918 3.57666 3.57666C3.49918 3.65414 3.43772 3.74612 3.39579 3.84736C3.35386 3.94859 3.33228 4.05709 3.33228 4.16666C3.33228 4.27623 3.35386 4.38473 3.39579 4.48597C3.43772 4.5872 3.49918 4.67918 3.57666 4.75666L11.3217 12.5L3.57666 20.2433C3.42018 20.3998 3.33228 20.612 3.33228 20.8333C3.33228 21.0546 3.42018 21.2668 3.57666 21.4233C3.73314 21.5798 3.94537 21.6677 4.16666 21.6677C4.38795 21.6677 4.60018 21.5798 4.75666 21.4233L12.5 13.6783L20.2433 21.4233C20.3998 21.5798 20.612 21.6677 20.8333 21.6677C21.0546 21.6677 21.2668 21.5798 21.4233 21.4233C21.5798 21.2668 21.6677 21.0546 21.6677 20.8333C21.6677 20.612 21.5798 20.3998 21.4233 20.2433L13.6783 12.5L21.4233 4.75666Z" fill="#007899" />
                    </svg>
                </span>
            </a>
        </div>
    </div>
</div>
@endif
@if (in_array($status_id, $status_for_fq))
<div class="row">
    <div class="col-md-12">
        <div class="alert alert-warning alert-dismissible fade show" role="alert">Action Required: Complete online Financial Questionnaire form. <a href="{{ route('fqs') }}" class="link-text">Click here</a>
            <a type="button" class="close link-text" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 25 25" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M21.4233 4.75666C21.5008 4.67918 21.5623 4.5872 21.6042 4.48597C21.6461 4.38473 21.6677 4.27623 21.6677 4.16666C21.6677 4.05709 21.6461 3.94859 21.6042 3.84736C21.5623 3.74612 21.5008 3.65414 21.4233 3.57666C21.3458 3.49918 21.2539 3.43772 21.1526 3.39579C21.0514 3.35386 20.9429 3.33228 20.8333 3.33228C20.7238 3.33228 20.6153 3.35386 20.514 3.39579C20.4128 3.43772 20.3208 3.49918 20.2433 3.57666L12.5 11.3217L4.75666 3.57666C4.67918 3.49918 4.5872 3.43772 4.48597 3.39579C4.38473 3.35386 4.27623 3.33228 4.16666 3.33228C4.05709 3.33228 3.94859 3.35386 3.84736 3.39579C3.74612 3.43772 3.65414 3.49918 3.57666 3.57666C3.49918 3.65414 3.43772 3.74612 3.39579 3.84736C3.35386 3.94859 3.33228 4.05709 3.33228 4.16666C3.33228 4.27623 3.35386 4.38473 3.39579 4.48597C3.43772 4.5872 3.49918 4.67918 3.57666 4.75666L11.3217 12.5L3.57666 20.2433C3.42018 20.3998 3.33228 20.612 3.33228 20.8333C3.33228 21.0546 3.42018 21.2668 3.57666 21.4233C3.73314 21.5798 3.94537 21.6677 4.16666 21.6677C4.38795 21.6677 4.60018 21.5798 4.75666 21.4233L12.5 13.6783L20.2433 21.4233C20.3998 21.5798 20.612 21.6677 20.8333 21.6677C21.0546 21.6677 21.2668 21.5798 21.4233 21.4233C21.5798 21.2668 21.6677 21.0546 21.6677 20.8333C21.6677 20.612 21.5798 20.3998 21.4233 20.2433L13.6783 12.5L21.4233 4.75666Z" fill="#007899" />
                    </svg>
                </span>
            </a>
        </div>
    </div>
</div>
@endif
<!-- :: aleart end for Financial Questionnaire -->
<!-- :: 03 aleart for TAX ORGANIZER -->
@if (in_array($status_id, $status_for_to))
<div class="row">
    <div class="col-md-12">
        <div class="alert alert-warning alert-dismissible fade show" role="alert">Action Required: Complete online Tax Organizer form. <a href="{{ route('tos') }}" class="link-text">Click here</a>
            <a type="button" class="close link-text" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 25 25" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M21.4233 4.75666C21.5008 4.67918 21.5623 4.5872 21.6042 4.48597C21.6461 4.38473 21.6677 4.27623 21.6677 4.16666C21.6677 4.05709 21.6461 3.94859 21.6042 3.84736C21.5623 3.74612 21.5008 3.65414 21.4233 3.57666C21.3458 3.49918 21.2539 3.43772 21.1526 3.39579C21.0514 3.35386 20.9429 3.33228 20.8333 3.33228C20.7238 3.33228 20.6153 3.35386 20.514 3.39579C20.4128 3.43772 20.3208 3.49918 20.2433 3.57666L12.5 11.3217L4.75666 3.57666C4.67918 3.49918 4.5872 3.43772 4.48597 3.39579C4.38473 3.35386 4.27623 3.33228 4.16666 3.33228C4.05709 3.33228 3.94859 3.35386 3.84736 3.39579C3.74612 3.43772 3.65414 3.49918 3.57666 3.57666C3.49918 3.65414 3.43772 3.74612 3.39579 3.84736C3.35386 3.94859 3.33228 4.05709 3.33228 4.16666C3.33228 4.27623 3.35386 4.38473 3.39579 4.48597C3.43772 4.5872 3.49918 4.67918 3.57666 4.75666L11.3217 12.5L3.57666 20.2433C3.42018 20.3998 3.33228 20.612 3.33228 20.8333C3.33228 21.0546 3.42018 21.2668 3.57666 21.4233C3.73314 21.5798 3.94537 21.6677 4.16666 21.6677C4.38795 21.6677 4.60018 21.5798 4.75666 21.4233L12.5 13.6783L20.2433 21.4233C20.3998 21.5798 20.612 21.6677 20.8333 21.6677C21.0546 21.6677 21.2668 21.5798 21.4233 21.4233C21.5798 21.2668 21.6677 21.0546 21.6677 20.8333C21.6677 20.612 21.5798 20.3998 21.4233 20.2433L13.6783 12.5L21.4233 4.75666Z" fill="#007899" />
                    </svg>
                </span>
            </a>
        </div>
    </div>
</div>
@endif
<!-- :: aleart end for TAX ORGANIZER  -->
<!-- :: content start from here -->
<div class="row">
    <div class="col-md-12">
        <div class="tile-x">
            <div class="tile-body">
                <div class="case-status text-center bg-back-blue">
                    <h2>Your Case Status is: @php echo $status_name;@endphp</h2>
                </div>
            </div>
            <div class="row p-4">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 p-10-20">
                    <div class="tile-body case-inner-card-first">
                        <div class="case-card-text ">
                            <h5>What this means: <br> <span class="">
                                    <p  class="li-text text-blue">{{ $statusinfo->what_this_means }}</p>
                                </span>
                            </h5>
                        </div><br>
                        <div class="case-card-text d-lg-none d-view-tab ">
                            <h5>What happens next? <br> <span class="mb-float-right">
                                    <p  class="li-text text-blue">{{ $statusinfo->what_happens_next }}</p>
                                </span>
                            </h5>
                        </div>
                        <!-- <div class="case-card-info d-flex mt-4"><p>Complete online Financial Questionnaire <br> form to continue your application
                            process. </p><a href="https://clearstarttax.com/fqform/" target="_blank" class="info-inner-link mx-3 mbmx-2">Click Here</a></div> -->
                    </div>
                </div>
                <!-- 02 -->
                <div class="col-md-6 col-lg-12 col-sm-12 col-xs-12 p-10-20 d-none-tab">
                    <div class="tile-body case-inner-card-first ">
                        <div class="case-card-text d-none-sm ">
                            <h5>What happens next? <br> <span class="">
                                    <p  class="li-text text-blue">{{ $statusinfo->what_happens_next }}</p>
                                </span>
                            </h5>
                        </div>
                        <!-- <div class="case-card-info d-flex mt-4"><p>Complete online TAX ORGANIZER form to <br>continue your application process. </p><a href="https://clearstarttax.com/toform/" target="_blank" class="info-inner-link mx-3">Click Here</a></div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--:: section for little card -->
<div class="row">
    <!-- :: card 01 -->
    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
        <a href="{{ route('documents') }}" class="db-card-redirect">
            <div class="tile">
                <div class="tile-body">
                    <div class="document-card">
                        <div class="document-card-items">
                            <div class="card-icon">
                              <iconify-icon class="d-card-icon d-none-sm" icon="solar:upload-square-broken" width="38" height="38"  style="color: #007899"></iconify-icon>
                                
                                <svg class="d-card-icon d-md-none d-lg-none" xmlns="http://www.w3.org/2000/svg" width="38" height="38" viewBox="0 0 24 24"><g fill="none" stroke="#007899" stroke-linecap="round" stroke-width="1.5"><path stroke-linejoin="round" d="M12 17v-7m0 0l3 3m-3-3l-3 3"/><path d="M16 7H8m14 5c0 4.714 0 7.071-1.465 8.535C19.072 22 16.714 22 12 22s-7.071 0-8.536-1.465C2 19.072 2 16.714 2 12s0-7.071 1.464-8.536C4.93 2 7.286 2 12 2c4.714 0 7.071 0 8.535 1.464c.974.974 1.3 2.343 1.41 4.536"/></g></svg>
                            </div>
                            <div class="db-card-text">
                                <h5>Document Center</h5>
                                <p>View and Upload Essential Case Files</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <!-- :: card 02 -->
    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
        <a href="{{ route('payment') }}" class="db-card-redirect">
            <div class="tile">
                <div class="tile-body">
                    <div class="document-card">
                        <div class="document-card-items">
                            <div class="card-icon">
                                <iconify-icon class="d-card-icon d-none-sm" icon="solar:banknote-2-broken" style="color: #007899;" width="38" height="38"></iconify-icon>
                                <svg class="d-card-icon d-md-none d-lg-none" xmlns="http://www.w3.org/2000/svg" width="38" height="38" viewBox="0 0 24 24">
                                    <g fill="none" stroke="#007899" stroke-width="1.5">
                                        <path stroke-linecap="round" d="M13 5c2.828 0 4.243 0 5.121.879C19 6.757 19 8.172 19 11c0 2.828 0 4.243-.879 5.121C17.243 17 15.828 17 13 17H8c-2.828 0-4.243 0-5.121-.879C2 15.243 2 13.828 2 11c0-2.828 0-4.243.879-5.121C3.757 5 5.172 5 8 5h1m7 15h-5c-2.828 0-4.242 0-5.121-.879c-.49-.49-.707-1.146-.803-2.121m16.046 2.121c.878-.878.878-2.293.878-5.12c0-2.83 0-4.244-.878-5.122c-.49-.49-1.147-.707-2.122-.803" />
                                        <path d="M13 11a2.5 2.5 0 1 1-5 0a2.5 2.5 0 0 1 5 0Z" />
                                        <path stroke-linecap="round" d="M16 13V9M5 13V9" />
                                    </g>
                                </svg>
                            </div>
                            <div class="db-card-text">
                                <h5>Payment Hub</h5>
                                <p>Make a Payment, Review History, Update Method</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <!-- :: card 03 -->
    
    @if (in_array($status_id, $status_for_appointment))
    
    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
        <a href="{{ route('appointment') }}" class="db-card-redirect">
            <div class="tile">
                <div class="tile-body">
                    <div class="document-card">
                        <div class="document-card-items">
                            <div class="card-icon">
                                <iconify-icon class="d-card-icon d-none-sm" icon="solar:calendar-broken" style="color: #007899;" width="37" height="37"></iconify-icon>
                                <svg class="d-card-icon d-md-none d-lg-none" xmlns="http://www.w3.org/2000/svg" width="38" height="38" viewBox="0 0 24 24">
                                    <g fill="none">
                                        <path stroke="#007899" stroke-linecap="round" stroke-width="1.5" d="M14 22h-4c-3.771 0-5.657 0-6.828-1.172C2 19.657 2 17.771 2 14v-2c0-3.771 0-5.657 1.172-6.828C4.343 4 6.229 4 10 4h4c3.771 0 5.657 0 6.828 1.172C22 6.343 22 8.229 22 12v2c0 3.771 0 5.657-1.172 6.828c-.653.654-1.528.943-2.828 1.07M7 4V2.5M17 4V2.5M21.5 9H10.75M2 9h3.875" />
                                        <path fill="#007899" d="M18 17a1 1 0 1 1-2 0a1 1 0 0 1 2 0Zm0-4a1 1 0 1 1-2 0a1 1 0 0 1 2 0Zm-5 4a1 1 0 1 1-2 0a1 1 0 0 1 2 0Zm0-4a1 1 0 1 1-2 0a1 1 0 0 1 2 0Zm-5 4a1 1 0 1 1-2 0a1 1 0 0 1 2 0Zm0-4a1 1 0 1 1-2 0a1 1 0 0 1 2 0Z" />
                                    </g>
                                </svg>
                            </div>
                            <div class="db-card-text">
                                <h5>Schedule an Appointment</h5>
                                <p>Schedule an appointment with your Settlement Officer. Click Here</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    
    @endif
    
    <!-- :: card 04 -->
    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
        <a href="{{ route('contact') }}" class="db-card-redirect">
            <div class="tile">
                <div class="tile-body">
                    <div class="document-card">
                        <div class="document-card-items">
                            <div class="card-icon">
                                <iconify-icon class="d-card-icon d-none-sm" icon="solar:chat-dots-broken" style="color: #007899;" width="37" height="37"></iconify-icon>
                                <svg class="d-card-icon d-md-none d-lg-none" xmlns="http://www.w3.org/2000/svg" width="38" height="38" viewBox="0 0 24 24">
                                    <g fill="none">
                                        <path fill="#007899" d="m13.087 21.388l.645.382l-.645-.382Zm.542-.916l-.646-.382l.646.382Zm-3.258 0l-.645.382l.645-.382Zm.542.916l.646-.382l-.646.382ZM1.25 10.5a.75.75 0 0 0 1.5 0h-1.5Zm1.824 5.126a.75.75 0 0 0-1.386.574l1.386-.574Zm4.716 3.365l-.013.75l.013-.75Zm-2.703-.372l-.287.693l.287-.693Zm16.532-2.706l.693.287l-.693-.287Zm-5.409 3.078l-.012-.75l.012.75Zm2.703-.372l.287.693l-.287-.693Zm.7-15.882l-.392.64l.392-.64Zm1.65 1.65l.64-.391l-.64.392ZM4.388 2.738l-.392-.64l.392.64Zm-1.651 1.65l-.64-.391l.64.392ZM9.403 19.21l.377-.649l-.377.649Zm4.33 2.56l.541-.916l-1.29-.764l-.543.916l1.291.764Zm-4.007-.916l.542.916l1.29-.764l-.541-.916l-1.291.764Zm2.715.152a.52.52 0 0 1-.882 0l-1.291.764c.773 1.307 2.69 1.307 3.464 0l-1.29-.764ZM10.5 2.75h3v-1.5h-3v1.5Zm10.75 7.75v1h1.5v-1h-1.5ZM7.803 18.242c-1.256-.022-1.914-.102-2.43-.316L4.8 19.313c.805.334 1.721.408 2.977.43l.026-1.5ZM1.688 16.2A5.75 5.75 0 0 0 4.8 19.312l.574-1.386a4.25 4.25 0 0 1-2.3-2.3l-1.386.574Zm19.562-4.7c0 1.175 0 2.019-.046 2.685c-.045.659-.131 1.089-.277 1.441l1.385.574c.235-.566.338-1.178.389-1.913c.05-.729.049-1.632.049-2.787h-1.5Zm-5.027 8.241c1.256-.021 2.172-.095 2.977-.429l-.574-1.386c-.515.214-1.173.294-2.428.316l.025 1.5Zm4.704-4.115a4.25 4.25 0 0 1-2.3 2.3l.573 1.386a5.75 5.75 0 0 0 3.112-3.112l-1.386-.574ZM13.5 2.75c1.651 0 2.837 0 3.762.089c.914.087 1.495.253 1.959.537l.783-1.279c-.739-.452-1.577-.654-2.6-.752c-1.012-.096-2.282-.095-3.904-.095v1.5Zm9.25 7.75c0-1.622 0-2.891-.096-3.904c-.097-1.023-.299-1.862-.751-2.6l-1.28.783c.285.464.451 1.045.538 1.96c.088.924.089 2.11.089 3.761h1.5Zm-3.53-7.124a4.25 4.25 0 0 1 1.404 1.403l1.279-.783a5.75 5.75 0 0 0-1.899-1.899l-.783 1.28ZM10.5 1.25c-1.622 0-2.891 0-3.904.095c-1.023.098-1.862.3-2.6.752l.783 1.28c.464-.285 1.045-.451 1.96-.538c.924-.088 2.11-.089 3.761-.089v-1.5ZM2.75 10.5c0-1.651 0-2.837.089-3.762c.087-.914.253-1.495.537-1.959l-1.279-.783c-.452.738-.654 1.577-.752 2.6C1.25 7.61 1.25 8.878 1.25 10.5h1.5Zm1.246-8.403a5.75 5.75 0 0 0-1.899 1.899l1.28.783a4.25 4.25 0 0 1 1.402-1.403l-.783-1.279Zm7.02 17.993c-.202-.343-.38-.646-.554-.884a2.229 2.229 0 0 0-.682-.645l-.754 1.297c.047.028.112.078.224.232c.121.166.258.396.476.764l1.29-.764Zm-3.24-.349c.44.008.718.014.93.037c.198.022.275.054.32.08l.754-1.297a2.244 2.244 0 0 0-.909-.274c-.298-.033-.657-.038-1.069-.045l-.025 1.5Zm6.498 1.113c.218-.367.355-.598.476-.764c.112-.154.177-.204.224-.232l-.754-1.297c-.29.17-.5.395-.682.645c-.173.238-.352.54-.555.884l1.291.764Zm1.924-2.612c-.412.007-.771.012-1.069.045c-.311.035-.616.104-.909.274l.754 1.297c.045-.026.122-.058.32-.08c.212-.023.49-.03.93-.037l-.026-1.5Z" />
                                        <path stroke="#007899" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 11h.009m3.982 0H12m3.991 0H16" />
                                    </g>
                                </svg>
                            </div>
                            <div class="db-card-text">
                                <h5>Get In Touch</h5>
                                <p>Connect with Clear Start Tax!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
  <!-- :: card 05 -->
  <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
        <a href="{{ route('faq') }}" class="db-card-redirect">
            <div class="tile">
                <div class="tile-body">
                    <div class="document-card">
                        <div class="document-card-items">
                            <div class="card-icon">
                                
                              <iconify-icon class="d-card-icon d-none-sm" icon="solar:question-square-broken" width="38" height="38"  style="color: #007899"></iconify-icon>
                                <svg class="d-card-icon d-md-none d-lg-none" xmlns="http://www.w3.org/2000/svg" width="38" height="38" viewBox="0 0 24 24"><g fill="none"><path stroke="#007899" stroke-linecap="round" stroke-width="1.5" d="M10.125 8.875a1.875 1.875 0 1 1 2.828 1.615c-.475.281-.953.708-.953 1.26V13"/><circle cx="12" cy="16" r="1" fill="#007899"/><path stroke="#007899" stroke-linecap="round" stroke-width="1.5" d="M22 12c0 4.714 0 7.071-1.465 8.535C19.072 22 16.714 22 12 22s-7.071 0-8.536-1.465C2 19.072 2 16.714 2 12s0-7.071 1.464-8.536C4.93 2 7.286 2 12 2c4.714 0 7.071 0 8.535 1.464c.974.974 1.3 2.343 1.41 4.536"/></g></svg>
                            </div>
                            <div class="db-card-text">
                                <h5>FAQ</h5>
                                <p>Answers to Your Frequently Asked Questions</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
  <!-- :: card 06 -->
  
   @if (in_array($status_id, $status_for_to))
  <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
        <a href="{{ route('tos') }}" class="db-card-redirect">
            <div class="tile">
                <div class="tile-body">
                    <div class="document-card">
                        <div class="document-card-items">
                            <div class="card-icon">
                                <iconify-icon class="d-card-icon d-none-sm" icon="solar:document-add-outline" style="color: #007899;" width="38" height="38"></iconify-icon>
                                <svg class="d-card-icon d-md-none d-lg-none" xmlns="http://www.w3.org/2000/svg" width="38" height="38" viewBox="0 0 24 24">
                                    <path fill="#007899" fill-rule="evenodd" d="M10.944 1.25h2.112c1.838 0 3.294 0 4.433.153c1.172.158 2.121.49 2.87 1.238a.75.75 0 0 1-1.06 1.06c-.424-.422-1.004-.676-2.01-.811c-1.027-.138-2.382-.14-4.289-.14h-2c-1.907 0-3.261.002-4.29.14c-1.005.135-1.585.389-2.008.812c-.423.423-.677 1.003-.812 2.009c-.138 1.028-.14 2.382-.14 4.289v4c0 1.907.002 3.262.14 4.29c.135 1.005.389 1.585.812 2.008c.423.423 1.003.677 2.009.812c1.028.138 2.382.14 4.289.14h2c1.907 0 3.262-.002 4.29-.14c1.005-.135 1.585-.389 2.008-.812c.696-.696.907-1.777.943-4.309a.75.75 0 0 1 1.5.022c-.035 2.427-.192 4.158-1.382 5.348c-.749.748-1.698 1.08-2.87 1.238c-1.14.153-2.595.153-4.433.153h-2.112c-1.838 0-3.294 0-4.433-.153c-1.172-.158-2.121-.49-2.87-1.238c-.748-.749-1.08-1.698-1.238-2.87c-.153-1.14-.153-2.595-.153-4.433V9.944c0-1.838 0-3.294.153-4.433c.158-1.172.49-2.121 1.238-2.87c.749-.748 1.698-1.08 2.87-1.238c1.14-.153 2.595-.153 4.433-.153Zm7.17 5.796a2.716 2.716 0 1 1 3.84 3.84L17.2 15.643a7.025 7.025 0 0 1-.63.587c-.23.18-.48.334-.744.46c-.224.107-.46.185-.806.3l-2.084.695a1.28 1.28 0 0 1-1.62-1.62l.681-2.04l.014-.043c.116-.347.194-.582.301-.806a4.03 4.03 0 0 1 .46-.744c.153-.196.328-.371.587-.63l.031-.031l4.724-4.724Zm2.78 1.06a1.216 1.216 0 0 0-1.72 0l-.182.182c.01.033.021.07.034.107c.094.27.273.63.611.968a2.553 2.553 0 0 0 1.075.645l.182-.182a1.216 1.216 0 0 0 0-1.72Zm-1.328 3.048a4.083 4.083 0 0 1-.99-.73a4.083 4.083 0 0 1-.73-.99L14.45 12.83c-.301.301-.407.409-.496.523c-.113.145-.21.302-.289.467c-.062.131-.111.274-.246.678l-.4 1.2l.283.283l1.2-.4c.404-.135.547-.184.678-.246c.165-.08.322-.176.467-.289c.114-.089.222-.195.523-.496l3.396-3.396ZM7.25 9A.75.75 0 0 1 8 8.25h6.5a.75.75 0 0 1 0 1.5H8A.75.75 0 0 1 7.25 9Zm0 4a.75.75 0 0 1 .75-.75h2.5a.75.75 0 0 1 0 1.5H8a.75.75 0 0 1-.75-.75Zm0 4a.75.75 0 0 1 .75-.75h1.5a.75.75 0 0 1 0 1.5H8a.75.75 0 0 1-.75-.75Z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="db-card-text">
                                <h5>Tax Organizer</h5>
                                <p>Organize Your Taxes Efficiently</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
  @endif
  
    <!-- :: card 07 -->
  
  @if (in_array($status_id, $status_for_fq))
  <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
        <a href="{{ route('fqs') }}" class="db-card-redirect">
            <div class="tile">
                <div class="tile-body">
                    <div class="document-card">
                        <div class="document-card-items">
                            <div class="card-icon">
                                <iconify-icon class="d-card-icon d-none-sm" icon="solar:document-add-outline" style="color: #007899;" width="38" height="38"></iconify-icon>
                                <svg class="d-card-icon d-md-none d-lg-none" xmlns="http://www.w3.org/2000/svg" width="38" height="38" viewBox="0 0 24 24">
                                    <path fill="#007899" fill-rule="evenodd" d="M10.944 1.25h2.112c1.838 0 3.294 0 4.433.153c1.172.158 2.121.49 2.87 1.238a.75.75 0 0 1-1.06 1.06c-.424-.422-1.004-.676-2.01-.811c-1.027-.138-2.382-.14-4.289-.14h-2c-1.907 0-3.261.002-4.29.14c-1.005.135-1.585.389-2.008.812c-.423.423-.677 1.003-.812 2.009c-.138 1.028-.14 2.382-.14 4.289v4c0 1.907.002 3.262.14 4.29c.135 1.005.389 1.585.812 2.008c.423.423 1.003.677 2.009.812c1.028.138 2.382.14 4.289.14h2c1.907 0 3.262-.002 4.29-.14c1.005-.135 1.585-.389 2.008-.812c.696-.696.907-1.777.943-4.309a.75.75 0 0 1 1.5.022c-.035 2.427-.192 4.158-1.382 5.348c-.749.748-1.698 1.08-2.87 1.238c-1.14.153-2.595.153-4.433.153h-2.112c-1.838 0-3.294 0-4.433-.153c-1.172-.158-2.121-.49-2.87-1.238c-.748-.749-1.08-1.698-1.238-2.87c-.153-1.14-.153-2.595-.153-4.433V9.944c0-1.838 0-3.294.153-4.433c.158-1.172.49-2.121 1.238-2.87c.749-.748 1.698-1.08 2.87-1.238c1.14-.153 2.595-.153 4.433-.153Zm7.17 5.796a2.716 2.716 0 1 1 3.84 3.84L17.2 15.643a7.025 7.025 0 0 1-.63.587c-.23.18-.48.334-.744.46c-.224.107-.46.185-.806.3l-2.084.695a1.28 1.28 0 0 1-1.62-1.62l.681-2.04l.014-.043c.116-.347.194-.582.301-.806a4.03 4.03 0 0 1 .46-.744c.153-.196.328-.371.587-.63l.031-.031l4.724-4.724Zm2.78 1.06a1.216 1.216 0 0 0-1.72 0l-.182.182c.01.033.021.07.034.107c.094.27.273.63.611.968a2.553 2.553 0 0 0 1.075.645l.182-.182a1.216 1.216 0 0 0 0-1.72Zm-1.328 3.048a4.083 4.083 0 0 1-.99-.73a4.083 4.083 0 0 1-.73-.99L14.45 12.83c-.301.301-.407.409-.496.523c-.113.145-.21.302-.289.467c-.062.131-.111.274-.246.678l-.4 1.2l.283.283l1.2-.4c.404-.135.547-.184.678-.246c.165-.08.322-.176.467-.289c.114-.089.222-.195.523-.496l3.396-3.396ZM7.25 9A.75.75 0 0 1 8 8.25h6.5a.75.75 0 0 1 0 1.5H8A.75.75 0 0 1 7.25 9Zm0 4a.75.75 0 0 1 .75-.75h2.5a.75.75 0 0 1 0 1.5H8a.75.75 0 0 1-.75-.75Zm0 4a.75.75 0 0 1 .75-.75h1.5a.75.75 0 0 1 0 1.5H8a.75.75 0 0 1-.75-.75Z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="db-card-text">
                                <h5>Financial Questionnaire</h5>
                                <p>Explore Your Financial Questionnaire</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
   @endif
  
  <!-- :: card 08 -->
   <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
        <a href="{{ route('taxnews') }}" class="db-card-redirect">
            <div class="tile">
                <div class="tile-body">
                    <div class="document-card">
                        <div class="document-card-items">
                            <div class="card-icon">
                               
                                <iconify-icon class="d-card-icon d-none-sm" icon="ion:newspaper-outline" width="38" height="38"  style="color: #007899"></iconify-icon>
                              <svg class="d-card-icon d-md-none d-lg-none" xmlns="http://www.w3.org/2000/svg" width="38" height="38" viewBox="0 0 512 512"><path fill="none" stroke="#007899" stroke-linejoin="round" stroke-width="32" d="M368 415.86V72a24.07 24.07 0 0 0-24-24H72a24.07 24.07 0 0 0-24 24v352a40.12 40.12 0 0 0 40 40h328"/><path fill="none" stroke="#007899" stroke-linejoin="round" stroke-width="32" d="M416 464a48 48 0 0 1-48-48V128h72a24 24 0 0 1 24 24v264a48 48 0 0 1-48 48Z"/><path fill="none" stroke="#007899" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M240 128h64m-64 64h64m-192 64h192m-192 64h192m-192 64h192"/><path fill="#007899" d="M176 208h-64a16 16 0 0 1-16-16v-64a16 16 0 0 1 16-16h64a16 16 0 0 1 16 16v64a16 16 0 0 1-16 16"/></svg>
                            </div>
                            <div class="db-card-text">
                                <h5>Tax News</h5>
                                <p>Stay Informed with the Latest Tax Updates</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>
<section class="ift mt-4">
<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
			<div class="payment-info text-center mx-3">
				<p style="
    font-size: 0.9rem;
">If you have questions or need help, please contact us:</p>
				<div class="flex-container justify-content-center mb-3 d-flex">
					<div style="
    font-size: 0.8rem;
">
						<svg class="mx-1 mt-1px" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
							<path d="M8.4375 1.25C8.4375 1.25 9.89625 1.3825 11.7519 3.23875C13.6081 5.095 13.7406 6.55312 13.7406 6.55312M8.87937 3.46C8.87937 3.46 9.49812 3.63625 10.4262 4.56437C11.3544 5.4925 11.5313 6.11125 11.5313 6.11125" stroke="#333333" stroke-linecap="round"></path>
							<path d="M9.7225 9.09186L9.3825 8.76936L9.7225 9.09249V9.09186ZM11.8763 12.6587L11.5356 12.3356L11.8756 12.6587H11.8763ZM11.0475 13.1025L11.0938 13.5681L11.0475 13.1019V13.1025ZM2.345 4.32811C2.34168 4.26664 2.32628 4.20642 2.29968 4.1509C2.27308 4.09537 2.23581 4.04563 2.18999 4.00451C2.14417 3.96339 2.0907 3.9317 2.03263 3.91125C1.97457 3.89079 1.91304 3.88198 1.85156 3.8853C1.79009 3.88862 1.72987 3.90402 1.67435 3.93062C1.61882 3.95722 1.56908 3.99449 1.52796 4.04031C1.48684 4.08613 1.45515 4.1396 1.4347 4.19767C1.41424 4.25573 1.40543 4.31726 1.40875 4.37874L2.345 4.32811ZM2.94875 1.93249C2.86667 2.0232 2.8233 2.14241 2.82791 2.26466C2.83251 2.38691 2.88473 2.50251 2.97341 2.58679C3.0621 2.67106 3.18021 2.71733 3.30254 2.71571C3.42486 2.71409 3.54171 2.66471 3.62812 2.57811L2.94875 1.93249ZM6.665 12.3825C6.71712 12.4161 6.77539 12.439 6.83643 12.4499C6.89748 12.4608 6.96008 12.4595 7.02061 12.4461C7.08114 12.4326 7.1384 12.4073 7.18908 12.3715C7.23976 12.3358 7.28284 12.2904 7.31583 12.2379C7.34882 12.1854 7.37107 12.1268 7.38128 12.0657C7.39149 12.0045 7.38946 11.9419 7.37532 11.8815C7.36117 11.8212 7.33519 11.7642 7.29887 11.7139C7.26256 11.6637 7.21663 11.6211 7.16375 11.5887L6.665 12.3825ZM9.44562 12.5362C9.32387 12.5108 9.197 12.5348 9.09292 12.6029C8.98884 12.671 8.91607 12.7776 8.89062 12.8994C8.86518 13.0211 8.88914 13.148 8.95724 13.2521C9.02534 13.3562 9.132 13.4289 9.25375 13.4544L9.44562 12.5362ZM9.77812 9.71499L10.0625 9.41499L9.3825 8.76936L9.09812 9.06936L9.77812 9.71499ZM10.9994 9.28874L12.1931 9.97624L12.6606 9.16374L11.4669 8.47624L10.9994 9.28874ZM12.4237 11.4012L11.5356 12.3356L12.2156 12.9819L13.1031 12.0469L12.4237 11.4012ZM5.22437 9.97436C2.80187 7.42374 2.39562 5.27186 2.345 4.32811L1.40875 4.37874C1.47125 5.53499 1.96125 7.89999 4.545 10.62L5.22437 9.97436ZM6.08437 5.82624L6.26312 5.63749L5.58375 4.99186L5.40437 5.18061L6.08437 5.82624ZM6.40437 3.28749L5.61625 2.17311L4.85062 2.71436L5.63812 3.82874L6.40437 3.28749ZM5.74375 5.50311C5.63126 5.39471 5.51772 5.28741 5.40312 5.18124L5.40187 5.18249L5.4 5.18436C5.3889 5.19584 5.37847 5.20795 5.36875 5.22061C5.30748 5.30171 5.259 5.39171 5.225 5.48749C5.16375 5.65936 5.13125 5.88686 5.1725 6.17061C5.25375 6.72811 5.61937 7.47749 6.57375 8.48311L7.25375 7.83686C6.36125 6.89749 6.14125 6.31936 6.1 6.03436C6.08 5.89686 6.1 5.82499 6.10812 5.80186L6.11312 5.78999C6.10801 5.79822 6.10215 5.80596 6.09562 5.81311C6.09196 5.81736 6.08821 5.82215 6.08437 5.82624L5.74375 5.50311ZM6.57375 8.48249C7.52562 9.48499 8.24437 9.87874 8.7925 9.96811C9.07437 10.0137 9.3025 9.97686 9.475 9.90874C9.57058 9.87122 9.65944 9.81845 9.73812 9.75249L9.76062 9.73124L9.76937 9.72249C9.77085 9.72126 9.77231 9.72001 9.77375 9.71874L9.77562 9.71686L9.77625 9.71561C9.77625 9.71561 9.7775 9.71499 9.4375 9.39186C9.0975 9.06936 9.09812 9.06874 9.09812 9.06811L9.09937 9.06749L9.10062 9.06561L9.10437 9.06249C9.11382 9.05336 9.12362 9.0446 9.13375 9.03624C9.13937 9.03249 9.13875 9.03374 9.13062 9.03686C9.11812 9.04186 9.06187 9.06186 8.94312 9.04249C8.69187 9.00124 8.14937 8.77999 7.25375 7.83686L6.57375 8.48249ZM5.61625 2.17311C4.9825 1.27686 3.715 1.12499 2.94875 1.93249L3.62812 2.57811C3.955 2.23436 4.53062 2.26124 4.85062 2.71436L5.61625 2.17311ZM11.5356 12.3356C11.3613 12.5194 11.1794 12.6181 11.0019 12.6356L11.0938 13.5681C11.5606 13.5225 11.9388 13.2737 12.2156 12.9819L11.5356 12.3362V12.3356ZM6.26312 5.63749C6.86812 5.00061 6.91062 4.00436 6.40437 3.28749L5.63875 3.82874C5.9025 4.20186 5.86187 4.69936 5.58375 4.99186L6.26312 5.63749ZM12.1931 9.97624C12.7063 10.2719 12.8069 10.9981 12.4237 11.4012L13.1031 12.0469C13.9188 11.1881 13.6806 9.75124 12.6606 9.16374L12.1931 9.97624ZM10.0625 9.41499C10.3031 9.16124 10.6788 9.10436 10.9994 9.28874L11.4669 8.47624C10.78 8.08124 9.92937 8.19436 9.3825 8.76936L10.0625 9.41499ZM7.16375 11.5887C6.54937 11.2025 5.895 10.68 5.22437 9.97436L4.545 10.62C5.26625 11.3794 5.98062 11.9525 6.665 12.3825L7.16375 11.5887ZM11.0012 12.6356C10.4807 12.6813 9.95616 12.6478 9.44562 12.5362L9.25375 13.4544C9.85779 13.5852 10.4782 13.6236 11.0938 13.5681L11.0019 12.6356H11.0012Z" fill="#333333"></path>
						</svg>
						<a href="tel:888-235-0004" class="tel">888-235-0004</a>
					</div>
					<div style="
    font-size: 0.8rem;
">
						<svg class="mx-1 mt-1px" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M2 3.71422V10.5714C2 11.026 2.18061 11.4621 2.5021 11.7836C2.82359 12.105 3.25963 12.2857 3.71429 12.2857H12.2857C12.7404 12.2857 13.1764 12.105 13.4979 11.7836C13.8194 11.4621 14 11.026 14 10.5714V3.71422C14 3.25957 13.8194 2.82353 13.4979 2.50204C13.1764 2.18055 12.7404 1.99994 12.2857 1.99994H3.71429C3.25963 1.99994 2.82359 2.18055 2.5021 2.50204C2.18061 2.82353 2 3.25957 2 3.71422Z" stroke="#333333" stroke-linecap="round" stroke-linejoin="round"></path>
							<path d="M3.71431 4.57162L8.00002 7.14305L12.2857 4.57162" stroke="#333333" stroke-linecap="round" stroke-linejoin="round"></path>
						</svg>
						<a href="mailto:info@clearstarttax.com" class="tel">info@clearstarttax.com</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


@endsection
@section('scripts')  
@endsection