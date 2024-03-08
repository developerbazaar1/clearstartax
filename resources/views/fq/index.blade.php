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
            <!-- :: first tab start from here -->
            <div class="f-tab-cnt">
                <h6>View your stored results below.</h6>
                <div class="mt-3">
                    <a href="{{ route('fq-add') }}" class="form-tab-switch-btn" id="switch-tab">Start New</a>
                </div>
                <!-- :: user form unfill fill detail show table start here -->

                @if($message = Session::get('success'))
                   <div class="alert mt-3 alert-success alert-dismissible fade show w-100" role="alert">
                     <strong>Success!</strong> {{ $message }}
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close" >
                       <span aria-hidden="true">&times;</span>
                     </button>
                   </div>
               @endif

               @if($message = Session::get('error'))
                    <div class="alert mt-3 alert-danger alert-dismissible fade show w-100" role="alert">
                     <strong>Error!</strong> {{ $message }}
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close" >
                       <span aria-hidden="true">&times;</span>
                     </button>
                   </div>
               @endif
               @if(count($fqs) > 0)
                <div class="table-responsive w-nowrap mt-4">
                    <!-- :: table start here -->
                    <table class="table table-hover">
                        <!-- :: table head -->
                        <thead>
                            <tr>
                                <th>Reference</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Date Of Birth</th>
                                <th>SSN</th>
                                <th>Created At</th>
                                <th>Action</th>
                                
                            </tr>
                        </thead>
                        <!--:: table head end -->
                        <tbody>
                          
                             @if(count($fqs) > 0)
                             @php
                                  $sno = 1;
                             @endphp
                             @foreach($fqs as $fq)
                            <tr>
                                <td>{{ $fq->Reference }} @if($fq->Status == 'Completed')<img class="w-10px complete-table-status ml-1"
                                        src="{{ URL::asset('assets/img/correct-image.png') }}"> @endif</td>
                                <td>{{$fq->First_Name}}</td>
                                <td>{{$fq->Last_Name}}</td>
                                <td>{{$fq->Date_Of_Birth}}</td>
                                <td>{{$fq->SSN}}</td>
                                <td>{{$fq->created_at}}</td> 
                                @if($fq->Status == 'Completed')
                                @php 
                                    $name = Auth::user()->name;
                                    $filename =  $name.'_'.$fq->created_at.'_fqform.pdf';
                                @endphp
                                <td><a href="{{ URL::asset('/public/'.$filename) }}" target="_blank" >{{$fq->Status }}</a></td>
                                @else
                                <td><a href="{{ route('fq-edit', $fq->id )}}" >Continue</a></td>
                                <!-- <td>
                                    <button class="btn-cssbuttons">
                                        <span></span><span>
                                            <iconify-icon icon="jam:menu" width="40" height="40"></iconify-icon>
                                        </span>
                                        <ul>
                                            <li>
                                                <a href="{{ route('fq-edit', $fq->id )}}">
                                                    <iconify-icon icon="akar-icons:edit" width="22" height="22">
                                                    </iconify-icon>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <iconify-icon icon="ic:round-delete" style="color: #ff1818;"
                                                        width="22" height="22"></iconify-icon>
                                                </a>
                                            </li>
                                        </ul>
                                    </button>
                                </td> -->
                                @endif
                            </tr>
                            @php
                               $sno++;
                             @endphp
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
                
               @endif
                <!-- :: user form unfill fill detail show table end-->
            </div>
            <!-- :: first tab end -->
        </div>
    </div>
</section>






@endsection
@section('scripts')  

@endsection