@extends('layouts.header')
@section('styles') 
@endsection
@section('content')

<!-- :: client information head -->
<div class="app-title">
	<div class="user-dashboard-welcome">
		<h1>Hello @php echo ucfirst(Auth::user()->name); @endphp</h1>
		<h5 class="mt-10 mb-5px">"Answers to Your Questions: FAQ - Find What You Need"</h5>
		<!-- <p>"Explore Your Personalized Dashboard, Christian!"</p> -->
	</div>
	<div class="user-dashboard-welcome-d-image d-none-sm">
		<!--:: image top head dashboard  -->
		<img class="faq-top-image" src="{{ URL::asset('assets/img/faq-top.png') }}">
	</div>
</div>
<!-- :: client information head -->
<!--:: faq accordian  -->
<section class="faq-accordian mt-2">
	<div class="row justify-content-center">
		<div class="col-md-11">
			<div class="accordion" id="accordionExample">
				<!-- :: accordian one -->
				<h3 class="mt-4 mb-4">Processing FAQs:</h3>

				@foreach($faq as $f)
				<div class="accordion-item mb-3 ">
					<h2 class="accordion-header" id="headingOne">
						<button class="accordion-button cst-acc-br" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$f->id}}" aria-expanded="true" aria-controls="collapse{{$f->id}}">{{ $f->question }}</button>
					</h2>
					<div id="collapse{{$f->id}}" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
						<div class="accordion-body">
							{{ $f->answer }}
						</div>
					</div>
				</div>
				@endforeach

				<h3 class="mt-5 pt-3 mb-4">Customer Service FAQs:</h3>
				@foreach($faqs as $fs)
				<div class="accordion-item mb-3 ">
					<h2 class="accordion-header" id="headingOne">
						<button class="accordion-button cst-acc-br" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$fs->id}}" aria-expanded="true" aria-controls="collapse{{$fs->id}}">{{ $fs->question }}</button>
					</h2>
					<div id="collapse{{$fs->id}}" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
						<div class="accordion-body">
							{{ $fs->answer }}
						</div>
					</div>
				</div>
				@endforeach
				
			</div>
		</div>
	</div>
</section>


@endsection
@section('scripts')  
<script>
	//  event listeners to each accordion button for custom open/close functionality
	const accordionButtons = document.querySelectorAll(".accordion-button");
	accordionButtons.forEach(button => {
		button.addEventListener("click", () => {
			// Toggle the "collapsed" class on the button
			button.classList.toggle("collapsed");
			const targetId = button.getAttribute("data-bs-target").substring(1);
			const targetCollapse = document.getElementById(targetId);
			targetCollapse.classList.toggle("show");
		});
	});
</script>
@endsection