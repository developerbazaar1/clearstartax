@extends('payment.layouts.header')
@section('styles') 
@endsection
@section('content')
    <div class="payment_details_login home-content mx-auto mt-5">
        <p class="fw-bold mb-3 text-center">Enter your CASE ID and EMAIL to update your billing.</p>
        <div id="myTabContent" class="tab-content position-relative">
            <div id="loader"></div>
            <div class="tab-pane active in" id="home">
                
                <form action="{{route('login-check')}}"  enctype="multipart/form-data" id="login_form" method="post">
                {{ csrf_field() }}
                
                    <!--@if ($errors->any())-->
                    <!--    <div class="alert alert-danger">-->
                    <!--        <ul>-->
                    <!--            @foreach ($errors->all() as $error)-->
                    <!--                <li>{{ $error }}</li>-->
                    <!--            @endforeach-->
                    <!--        </ul>-->
                    <!--    </div>-->
                    <!--@endif-->
                    <!--@if($message = Session::get('success'))-->
                    <!--    <div class="alert alert-success alert-dismissible fade show" role="alert">{{ $message }}-->
                    <!--        <button type="button" class="close" data-dismiss="alert" aria-label="Close">-->
                    <!--            <span aria-hidden="true">&times;</span>-->
                    <!--        </button>-->
                    <!--    </div>-->
                    <!--@endif-->

                    @if($message = Session::get('error'))
                    
                        <div class="alert alert-danger alert-dismissible" role="alert">
                          {{ $message }}
                          <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    
                    <div class="container">
                        <div class="error_card"></div>
                        <div class="row">
                            <div class="col-12 col-xs-12">
                                <div class="panel panel-default">
                                    
                                    <div class="panel-body">
                                        
                                        <div class="row mt-3">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Case ID</label>
                                                    <input type="number"  data-ref="case_id" autocomplete="off" value="@php if(isset($id)){ if(!empty($id)){ echo $id; } }@endphp" class="card-input__input" name="case_id" id="case_id" required>
                                                </div>
                                            
                                            </div>
                                        </div>
                                        
                                        <div class="row mt-3">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input type="email"  data-ref="email" autocomplete="off" value="" class="card-input__input" name="email" id="email" required>
                                                </div>
                                            
                                            </div>
                                        </div>

                                    </div>
                                   
                                    <button type="submit" class="card-form__button">Access Billing Info</button>
                                    
                                </div>
                            </div>
                                   
                        </div>
                    </div>




                </form>
            </div>

            
        </div>
        <div class="text-center social_contact mt-4">
            <p class="small_anchor mb-0">If you have questions or need help, please contact us:</p>
            <p> <img src="{{ URL::asset('assets/image/telephone(2).png') }}" class="img-fluid" alt=""> <a class="small_anchor" href="tel:888-235-0004">888-235-0004  </a>| <img src="{{ URL::asset('assets/image/envelope.png') }}" class="span_envelop img-fluid" alt=""> <a class="small_anchor" href="mailto:billing@clearstarttax.com">billing@clearstarttax.com</a></p>
        </div>
    </div>
    
@endsection
@section('scripts')  
@endsection
