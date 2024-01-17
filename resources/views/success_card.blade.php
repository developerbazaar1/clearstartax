@extends('layouts.header')
@section('styles') 
@endsection
@section('content')

    <section class="upayment-confirm-section ">
        <div class="row justify-content-center">
            <div class="col-md-7 col-lg-7 col-sm-12 col-xs-12 text-center">
                <div class="payment-confirmation-items">
                    <div class="pay-confirm-logo">
                        <img class="p-confirm w-65px" src="{{ URL::asset('assets/img/correct.png') }}">
                    </div>
                    <div class="c-pay-head mt-4">
                        <h2>Payment <span>Successful!</span></h2>
                    </div>
                    <div class="c-pay-description mt-4">
                        <p> You will recieve a receipt to your email:<br> {{$email}}</p>
                        <p>For your convenience, we will securely store your payment information and use it for any future recurring payments, should you have any remaining.</p>
                        
                        <div class="pay-amount">
                            <p>Amount Paid: ${{$amount}}</p>
                            <p>Transaction ID: {{$tran_id}}</p>
                        </div>
                      
                        <hr class="horizon-divider">
                        <div class="pay-descript-footer">
                            <p>For payment questions, contact our team at <br> billing@clearstarttax.com or <a class="footer-num" href="tel:888-235-0004">888-235-0004</a> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('scripts')  
@endsection