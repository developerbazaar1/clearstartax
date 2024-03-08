@extends('layouts.header')
@section('styles') 
@endsection
@section('content')

<div class="app-title">
	<div class="user-dashboard-welcome">
		<h1>@php if($greeting){ echo $greeting; echo ' '; } echo ucfirst(Auth::user()->name); @endphp</h1>
		<h5 class="mt-10 mb-5px">Track Your Case: Stay Informed About Your Progress</h5>
	</div>
	<div class="user-dashboard-welcome-d-image d-none-sm">
		<!--:: image top head dashboard  -->
		<img class="moreinfotop-image" src="{{ URL::asset('assets/img/Case-Status.png') }}">
	</div>
</div>
<div class="row justify-content-center">
	<div class="col-md-12 col-lg-7 col-sm-12 col-xs-12">
		<div class="tile-x">
			<div class="tile-body">
				<div class="case-status text-center">
					<h2>Your Case Status is: @php echo $status_name;@endphp</h2>
				</div>
			</div>
			<div class="row p-4">
				<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 p-10-20">
					<div class="tile-body case-inner-card-first">
						<div class="case-card-text">
							<p class="mt-14"><strong>What this means: </strong><span>
									{{ $statusinfo->what_this_means }}
								</span>
							</p>
							<p class="mt-40"><strong>Your next steps: </strong><span>
									{{ $statusinfo->what_happens_next }}
								</span>
							</p>
						</div>
						<div class="case-card-info more-info d-flex mt-41" style="white-space:nowrap;  justify-content: normal;">
							<p>Complete online Financial Questionnaire <br> form to continue your application process. </p>
							<a href="{{ route('fqs') }}" target="_blank" class="info-inner-link mx-2">Click Here</a>
						</div>
						<div class="case-card-info d-flex more-info mt-3" style="white-space:nowrap;  justify-content: normal;">
							<p>Complete online TAX ORGANIZER form to <br>continue your application process. </p>
							<a href="{{ route('tos') }}" target="_blank" class="info-inner-link mx-3">Click Here</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
@section('scripts')  
@endsection

			
	