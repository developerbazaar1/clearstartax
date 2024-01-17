@extends('layouts.app')
@section('styles') 
@endsection
@section('content')
        <section class="login-form">
            <div class="login-flex-container">
                <div class="login-main-content">
                    <!-- form div start from here -->
                    <div class="login-signup-form">
                        <div class="row justify-content-center ">
                            <div class="col-md-12 login-form">
                                <div class="form-head-image text-center mt-3">
                                    <img class="c-brand" src="{{ URL::asset('assets/img/cleartax-brand-logo.png') }}">
                                </div>
                                <div class="form-description text-center mt-3">
                                    <h6>Welcome to Your Exclusive Client Portal!</h6>
                                </div>

                                @if($message = Session::get('error'))
                    
                                    <div class="p-2 alert alert-danger alert-dismissible" role="alert">
                                      {{ $message }}
                                      <button type="button" class="float-right btn-close" data-dismiss="alert" aria-label="Close"><i class="fa fa-close"></i></button>
                                    </div>
                                @endif
                    
                                <form action="{{ route('login') }}" class="login-signup-form" autocomplete="off" method="POST">
                                    @csrf
                                    <div class="form-group mb-2">
                                        <label class="form-head log-form-label" for="mailer-mail">Email Address</label>
                                        <div class="inputWithIcon">
                                            <input id="emailInput" placeholder="example@gmail.com" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required>

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                            <svg class="i" xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none">
                                                <path d="M9 11C10.1046 11 11 10.1046 11 9C11 7.89543 10.1046 7 9 7C7.89543 7 7 7.89543 7 9C7 10.1046 7.89543 11 9 11Z" stroke="#858585" />
                                                <path d="M13 15C13 16.105 13 17 9 17C5 17 5 16.105 5 15C5 13.895 6.79 13 9 13C11.21 13 13 13.895 13 15Z" stroke="#858585" />
                                                <path d="M22 12C22 15.771 22 17.657 20.828 18.828C19.657 20 17.771 20 14 20H10C6.229 20 4.343 20 3.172 18.828C2 17.657 2 15.771 2 12C2 8.229 2 6.343 3.172 5.172C4.343 4 6.229 4 10 4H14C17.771 4 19.657 4 20.828 5.172C21.298 5.642 21.579 6.226 21.748 7M19 12H15M19 9H14M19 15H16" stroke="#858585" stroke-linecap="round" />
                                            </svg>
                                        </div>
                                    </div>
                                    <!-- :: input 02 -->
                                    <div class="form-group mb-1 ">
                                        <label class="form-head log-form-label" for="passwordInput">Password</label>
                                        <div class="inputWithIcon">
                                            <input id="passwordInput" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required placeholder="*************">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                            <svg class="i" xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none">
                                                <path d="M12 10V14M10.268 11L13.732 13M13.732 11L10.267 13M6.732 10V14M5 11L8.464 13M8.464 11L5 13M17.268 10V14M15.536 11L19 13M19 11L15.535 13M22 12C22 15.771 22 17.657 20.828 18.828C19.657 20 17.771 20 14 20H10C6.229 20 4.343 20 3.172 18.828C2 17.657 2 15.771 2 12C2 8.229 2 6.343 3.172 5.172C4.343 4 6.229 4 10 4H14C17.771 4 19.657 4 20.828 5.172C21.482 5.825 21.771 6.7 21.898 8" stroke="#858585" stroke-linecap="round" />
                                            </svg>
                                        </div>
                                    </div>
                                    <!-- :: check -->
                                    <div class="form-check mt-2 mb-2">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label check-label" for="flexCheckDefault"> Remember Me </label>
                                    </div>
                                    <!-- :: signinbtn -->
                                    <div class="form-group text-center mb-1">
                                        <button type="submit" class="signin-btn">Sign In</button>
                                    </div>
                                </form>
                                <div class="forget-pass-link text-center mb-3">
                                    <a  href="{{ route('password.request') }}" class="tab-swich-link forget-p" id="forget-link" >Forgot Your Password?</a>
                                </div>
                                <!-- :: signup tag with anchor btn -->
                                <div class="1tab-switch-content text-center">
                                    <p>Don’t have an account? <a href="{{ route('register') }}" class="1tab-swich-link text-link-blue" id="1signup-link"> Sign Up</a>
                                    </p>
                                </div>
                                <!--:: login info -->
                                <div class="mt-2 mb-0 text-center">
                                    <p class="log-txt mb-0">If you have questions or need help, please contact us:</p>
                                </div>
                                <!--:: contact info -->
                                <div class="flex-container justify-content-center mb-3">
                                    <div>
                                        <svg class="mx-1 mt-1px" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                            <path d="M8.4375 1.25C8.4375 1.25 9.89625 1.3825 11.7519 3.23875C13.6081 5.095 13.7406 6.55312 13.7406 6.55312M8.87937 3.46C8.87937 3.46 9.49812 3.63625 10.4262 4.56437C11.3544 5.4925 11.5313 6.11125 11.5313 6.11125" stroke="#333333" stroke-linecap="round" />
                                            <path d="M9.7225 9.09186L9.3825 8.76936L9.7225 9.09249V9.09186ZM11.8763 12.6587L11.5356 12.3356L11.8756 12.6587H11.8763ZM11.0475 13.1025L11.0938 13.5681L11.0475 13.1019V13.1025ZM2.345 4.32811C2.34168 4.26664 2.32628 4.20642 2.29968 4.1509C2.27308 4.09537 2.23581 4.04563 2.18999 4.00451C2.14417 3.96339 2.0907 3.9317 2.03263 3.91125C1.97457 3.89079 1.91304 3.88198 1.85156 3.8853C1.79009 3.88862 1.72987 3.90402 1.67435 3.93062C1.61882 3.95722 1.56908 3.99449 1.52796 4.04031C1.48684 4.08613 1.45515 4.1396 1.4347 4.19767C1.41424 4.25573 1.40543 4.31726 1.40875 4.37874L2.345 4.32811ZM2.94875 1.93249C2.86667 2.0232 2.8233 2.14241 2.82791 2.26466C2.83251 2.38691 2.88473 2.50251 2.97341 2.58679C3.0621 2.67106 3.18021 2.71733 3.30254 2.71571C3.42486 2.71409 3.54171 2.66471 3.62812 2.57811L2.94875 1.93249ZM6.665 12.3825C6.71712 12.4161 6.77539 12.439 6.83643 12.4499C6.89748 12.4608 6.96008 12.4595 7.02061 12.4461C7.08114 12.4326 7.1384 12.4073 7.18908 12.3715C7.23976 12.3358 7.28284 12.2904 7.31583 12.2379C7.34882 12.1854 7.37107 12.1268 7.38128 12.0657C7.39149 12.0045 7.38946 11.9419 7.37532 11.8815C7.36117 11.8212 7.33519 11.7642 7.29887 11.7139C7.26256 11.6637 7.21663 11.6211 7.16375 11.5887L6.665 12.3825ZM9.44562 12.5362C9.32387 12.5108 9.197 12.5348 9.09292 12.6029C8.98884 12.671 8.91607 12.7776 8.89062 12.8994C8.86518 13.0211 8.88914 13.148 8.95724 13.2521C9.02534 13.3562 9.132 13.4289 9.25375 13.4544L9.44562 12.5362ZM9.77812 9.71499L10.0625 9.41499L9.3825 8.76936L9.09812 9.06936L9.77812 9.71499ZM10.9994 9.28874L12.1931 9.97624L12.6606 9.16374L11.4669 8.47624L10.9994 9.28874ZM12.4237 11.4012L11.5356 12.3356L12.2156 12.9819L13.1031 12.0469L12.4237 11.4012ZM5.22437 9.97436C2.80187 7.42374 2.39562 5.27186 2.345 4.32811L1.40875 4.37874C1.47125 5.53499 1.96125 7.89999 4.545 10.62L5.22437 9.97436ZM6.08437 5.82624L6.26312 5.63749L5.58375 4.99186L5.40437 5.18061L6.08437 5.82624ZM6.40437 3.28749L5.61625 2.17311L4.85062 2.71436L5.63812 3.82874L6.40437 3.28749ZM5.74375 5.50311C5.63126 5.39471 5.51772 5.28741 5.40312 5.18124L5.40187 5.18249L5.4 5.18436C5.3889 5.19584 5.37847 5.20795 5.36875 5.22061C5.30748 5.30171 5.259 5.39171 5.225 5.48749C5.16375 5.65936 5.13125 5.88686 5.1725 6.17061C5.25375 6.72811 5.61937 7.47749 6.57375 8.48311L7.25375 7.83686C6.36125 6.89749 6.14125 6.31936 6.1 6.03436C6.08 5.89686 6.1 5.82499 6.10812 5.80186L6.11312 5.78999C6.10801 5.79822 6.10215 5.80596 6.09562 5.81311C6.09196 5.81736 6.08821 5.82215 6.08437 5.82624L5.74375 5.50311ZM6.57375 8.48249C7.52562 9.48499 8.24437 9.87874 8.7925 9.96811C9.07437 10.0137 9.3025 9.97686 9.475 9.90874C9.57058 9.87122 9.65944 9.81845 9.73812 9.75249L9.76062 9.73124L9.76937 9.72249C9.77085 9.72126 9.77231 9.72001 9.77375 9.71874L9.77562 9.71686L9.77625 9.71561C9.77625 9.71561 9.7775 9.71499 9.4375 9.39186C9.0975 9.06936 9.09812 9.06874 9.09812 9.06811L9.09937 9.06749L9.10062 9.06561L9.10437 9.06249C9.11382 9.05336 9.12362 9.0446 9.13375 9.03624C9.13937 9.03249 9.13875 9.03374 9.13062 9.03686C9.11812 9.04186 9.06187 9.06186 8.94312 9.04249C8.69187 9.00124 8.14937 8.77999 7.25375 7.83686L6.57375 8.48249ZM5.61625 2.17311C4.9825 1.27686 3.715 1.12499 2.94875 1.93249L3.62812 2.57811C3.955 2.23436 4.53062 2.26124 4.85062 2.71436L5.61625 2.17311ZM11.5356 12.3356C11.3613 12.5194 11.1794 12.6181 11.0019 12.6356L11.0938 13.5681C11.5606 13.5225 11.9388 13.2737 12.2156 12.9819L11.5356 12.3362V12.3356ZM6.26312 5.63749C6.86812 5.00061 6.91062 4.00436 6.40437 3.28749L5.63875 3.82874C5.9025 4.20186 5.86187 4.69936 5.58375 4.99186L6.26312 5.63749ZM12.1931 9.97624C12.7063 10.2719 12.8069 10.9981 12.4237 11.4012L13.1031 12.0469C13.9188 11.1881 13.6806 9.75124 12.6606 9.16374L12.1931 9.97624ZM10.0625 9.41499C10.3031 9.16124 10.6788 9.10436 10.9994 9.28874L11.4669 8.47624C10.78 8.08124 9.92937 8.19436 9.3825 8.76936L10.0625 9.41499ZM7.16375 11.5887C6.54937 11.2025 5.895 10.68 5.22437 9.97436L4.545 10.62C5.26625 11.3794 5.98062 11.9525 6.665 12.3825L7.16375 11.5887ZM11.0012 12.6356C10.4807 12.6813 9.95616 12.6478 9.44562 12.5362L9.25375 13.4544C9.85779 13.5852 10.4782 13.6236 11.0938 13.5681L11.0019 12.6356H11.0012Z" fill="#333333" />
                                        </svg>
                                        <a href="tel:888-235-0004" class="tel">888-235-0004</a>
                                    </div>
                                    <div>
                                        <svg class="mx-1 mt-1px" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M2 3.71422V10.5714C2 11.026 2.18061 11.4621 2.5021 11.7836C2.82359 12.105 3.25963 12.2857 3.71429 12.2857H12.2857C12.7404 12.2857 13.1764 12.105 13.4979 11.7836C13.8194 11.4621 14 11.026 14 10.5714V3.71422C14 3.25957 13.8194 2.82353 13.4979 2.50204C13.1764 2.18055 12.7404 1.99994 12.2857 1.99994H3.71429C3.25963 1.99994 2.82359 2.18055 2.5021 2.50204C2.18061 2.82353 2 3.25957 2 3.71422Z" stroke="#333333" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M3.71431 4.57162L8.00002 7.14305L12.2857 4.57162" stroke="#333333" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        <a href="mailto:info@clearstarttax.com" class="tel">info@clearstarttax.com</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection
@section('scripts')  
@endsection       