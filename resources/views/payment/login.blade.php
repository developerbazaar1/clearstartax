@extends('payment.layouts.header')
@section('styles') 
@endsection
@section('content')
    <div class="payment_details_login home-content mx-auto mt-5">
        <p class="fw-bold mb-3 text-center">Enter your CASE ID and EMAIL to schedule an appointment.</p>
        <div id="myTabContent" class="tab-content position-relative">
            <div id="loader"></div>
            <div class="tab-pane active in" id="home">
                
                <form action="{{route('login-check')}}"  enctype="multipart/form-data" id="login_form" method="post">
                {{ csrf_field() }}
                
                    

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
                                                    <label class="mb-0">Case ID</label>
                                                    <input type="number"  data-ref="case_id" autocomplete="off" value="@php if(isset($id)){ if(!empty($id)){ echo $id; } }@endphp" class="card-input__input" name="case_id" id="case_id" required>
                                                </div>
                                            
                                            </div>
                                        </div>
                                        
                                        <div class="row mt-3">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label class="mb-0">Email</label>
                                                    <input type="email"  data-ref="email" autocomplete="off" value="" class="card-input__input" name="email" id="email" required>
                                                </div>
                                            
                                            </div>
                                        </div>

                                    </div>
                                   
                                    <button type="submit" class="card-form__button">Access Appointment Calendar</button>
                                    
                                </div>
                            </div>
                                   
                        </div>
                    </div>




                </form>
            </div>

            
        </div>
        <div class="text-center social_contact mt-4">
            <p class="small_anchor mb-0">If you have questions or need help, please contact us:</p>
            <p> <img src="{{ URL::asset('assets/image/telephone(2).png') }}" class="img-fluid" alt="" style="
    filter: brightness(0.1);
"> <a class="small_anchor"  href="tel:888-235-0004" style="
    
">888-235-0004 <span class="text-black">and Press </span> #3 </a>| <img src="{{ URL::asset('assets/image/envelope.png') }}" class="span_envelop img-fluid" alt="" style="
    filter: brightness(0.1);
"> <a class="small_anchor" href="mailto:billing@clearstarttax.com" style="
    
">info@clearstarttax.com</a></p>
        </div>
    </div>
    
@endsection
@section('scripts')  
@endsection
