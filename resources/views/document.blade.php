@extends('layouts.header')
@section('styles') 
@endsection
@section('content')


<!-- :: client information head -->
<div class="app-title">
	<div class="user-dashboard-welcome">
		<h1>Hello @php echo ucfirst(Auth::user()->name); @endphp</h1>
		<h5 class="mt-10 mb-5px">"Enter the Document Upload Zone: Seamlessly Submit and Organize Your Files!" </h5>
	</div>
	<div class="user-dashboard-welcome-d-image d-none-sm">
		<!-- :: image top head dashboard  -->
		<img class="paymenttop-image" src="{{ URL::asset('assets/img/documents.png') }}">
	</div>
</div>
<!-- :: end client information head -->
<!-- :: document upload section  -->
<section class="upload-document mt-58">
	<div class="row justify-content-center">
		<div class="col-md-9 col-lg-9 col-sm-12 col-xs-12">
			<div class="tile-x">
				<div class="tile-body">
					<div class="case-status upload-doc-head text-center ">
						<h2>Upload Document</h2>
					</div>
				</div>
				<div class="row p-1020">
					<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 ">
						<!-- :: upload form -->
						 
						@if($message = Session::get('success'))
                    
                                <div class="alert p-2 alert-success alert-dismissible" role="alert">
                                  {{ $message }}
                                  <button type="button" class="float-right btn-close" data-dismiss="alert" aria-label="Close"><i class="fa fa-close"></i></button>
                                </div>
                        @endif
                        @if($message = Session::get('error'))
                    
                                <div class="alert p-2 alert-danger alert-dismissible" role="alert">
                                  {{ $message }}
                                  <button type="button" class="float-right btn-close" data-dismiss="alert" aria-label="Close"><i class="fa fa-close"></i></button>
                                </div>
                        @endif
						<form action="{{route('upload-document')}}" method="POST" enctype="multipart/form-data">
	    					@csrf
	  
							<!-- field col  start :: dropify-->
							<div class="form-group mb-0 pb-0">
								<!-- <label class="form-head mb-2" for="exampletext"> Upload File </label> -->
								<input name="pdf_file" type="file" class="dropify" data-height="100" data-allowed-file-extensions="pdf" required />
								<small class="form-text text-muted upload-info mt-2">Maximum Document Size : Up to 6MB per Upload(Upload Pdf Only)</small>
							</div>
							<div class="text-center mt-3">
									<button type="submit" class="cnt-pay-btn">Upload PDF</button>
							</div>
									
							<!-- :: field col  end :: dropify-->
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!--::alert for doc update -->
<div class="modal fade pay-alert" id="doc-update-alert" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered payment-dialog" role="document">
		<div class="modal-content pay-confirmation">
			<div class="modal-body pay-confirm-alert-body">
				<div class="alert-box">
					<div class="pay-alert-image text-center">
						<img class="w-100px" src="{{ URL::asset('assets/img/document-alert.png') }}">
					</div>
					<div class="pay-alert-content text-center">
						<h2>Congratulations!</h2>
						<p>Your document has been successfully uploaded.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
@section('scripts')  

<script src="{{ URL::asset('assets/js/plugins/dropify.min.js') }}"></script>
<script>
	$('.dropify').dropify();
</script>
@endsection

			
	