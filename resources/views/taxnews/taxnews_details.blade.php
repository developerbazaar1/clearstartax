@extends('layouts.header')
@section('styles') 
@endsection
@section('content')

	<section class="news-card-container mt-1">
		<div class="row news-card-row">
			<div class="col-md-12">
				<div class="article-detail">
					<!-- news article heading with details sub heading -->
					<!-- news article heading -->
					<div class="news-article-head mt-0 mb-5">
						<h1>@if($taxnews_details[0]['post_title']) {{ $taxnews_details[0]['post_title'] }} @endif</h1>
					</div>
					<!-- news article banner image -->
					<div class="article-banner">
						<img class="article-banner-img" src="@if($taxnews_details[0]['image']) {{ $taxnews_details[0]['image'] }} @endif" />
					</div>
					<!-- news article content -->
					<div class="news-content mt-4">
					    @php if($taxnews_details[0]['content2']){ echo $taxnews_details[0]['content2']; } @endphp
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- section for other related article news article  -->

	<div style="text-align: end;" class="mt-5 mb-2">
	    <a href="{{ route('taxnews-details', $taxnews_related[0]['ID'])}}" style="font-size:18px" class="rm-link"><strong>Next Post <iconify-icon class="icon-arrow" icon="bi:arrow-right" style="color: #00aad8;vertical-align: middle;" width="20" height="20"></iconify-icon></strong>
									</a>
	</div>

	<section class="related article section">
		<div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 mt-5 mb-0">
            <div class="form-name-highlite">
                            <h5 class="i-image"><strong> Related Tax News post</strong></h5>
                        </div>
            </div>
			<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
				<div class="carousel-wrap">
					<div id="news-slider" class="owl-carousel">
					    
					    @if(count($taxnews_related) > 0)
                        @foreach($taxnews_related as $tn)
                    
						<div class="card-container-sec cst-mgw">
							<div class="card-image">
							    @if(!empty($tn['image']))
								<img src="{{ $tn['image'] }}" class="attachment-full size-full wp-post-image lazyautosizes ls-is-cached lazyloaded" alt="third-party-platforms"  />
								<a href="{{ route('taxnews-details', $tn['ID'])}}" class="over-layer">
									<i class="fa fa-link"></i>
								</a>
								@endif
							</div>
							<div class="card-body">
								<h1> @if(!empty($tn['post_title'])){{ $tn['post_title'] }} @endif</h1>
							</div>
							<!--author detail-->
							<div class="" style="padding: 0px 16px 16px 16px;">
							    <div class="card-author mt-2">
								    @php
    							        $dateString = $tn['post_date'];
                                        $dateTime = new DateTime($dateString);
                                        $formattedDate = $dateTime->format('F jS, Y');
    
    							    @endphp
    							    
    							    @if(!empty($tn['post_date']))
    								<p class="post-timestamp mb-0">{{$formattedDate}}</p>
								    @endif
								    
								</div>
								<div class="read-more mt-2">
									<a href="{{ route('taxnews-details', $tn['ID'])}}" class="rm-link">Read more <iconify-icon class="icon-arrow" icon="bi:arrow-right" style="color: #00aad8;vertical-align: middle;" width="20" height="20"></iconify-icon>
									</a>
								</div>
							    
							</div>
							
						</div>
					    
					    @endforeach
                        @endif
                    
					</div>
				</div>
			</div>
	</section>

@endsection
@section('scripts')  
        <script src="{{ URL::asset('assets/js/owl.carousel.min.js') }}"></script>
		<script>
			$(document).ready(function() {
				$("#news-slider").owlCarousel({
					items: 3,
					itemsDesktop: [1199, 3],
					itemsDesktopSmall: [980, 2],
					itemsMobile: [600, 1],
					navigation: true,
					navigationText: ["", ""],
					pagination: true,
					autoPlay: true
				});
			});
			s
		</script>
@endsection