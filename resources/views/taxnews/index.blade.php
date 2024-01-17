@extends('layouts.header')
@section('styles') 
@endsection
@section('content')

  <div class="app-title">
    <div class="user-dashboard-welcome">
      <h1>Hello @php echo ucfirst(Auth::user()->name); @endphp</h1>
      <h5 class="mt-10 mb-5px">"Tax News : Stay Informed, Stay Ahead of Tax Updates!" </h5>
    </div>
    <div class="user-dashboard-welcome-d-image d-none-sm">
      <!-- :: image top head dashboard  -->
      <img class="paymenttop-image" src="{{ URL::asset('assets/img/documents.png') }}">
    </div>
  </div>
  <!-- :: end client information head -->
  <!-- :: document upload section  -->
  <section class="news-section ">
    <div class="row justify-content-center">
      <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
        <!-- heading for tax  -->
        <div class="form-name-highlite">
                    <h5 class="i-image"><strong>Tax News</strong></h5>
                </div>
      </div>
    </div>
  </section>
  <section class="news-card-container mt-3">
    <div class="row news-card-row">
      <div class="col-md-12">
        <div class="card-news-grid">
        
            @if(count($taxnewsPaginated) > 0)
                    @foreach($taxnewsPaginated as $tn)
                   
          <div class="card-container-sec">
            <div class="card-image">
                @if(!empty($tn['image']))
              <img src="{{ $tn['image'] }}" class="attachment-full size-full wp-post-image lazyautosizes ls-is-cached lazyloaded" alt="third-party-platforms" />
                                <a href="{{ route('taxnews-details', $tn['ID'])}}" class="over-layer"><i class="fa fa-link"></i></a>
                            @endif
            </div>
            <div class="card-body">
              <h1>@if(!empty($tn['post_title'])) {{ $tn['post_title'] }} @endif </h1>
            
            </div>
            <div style="padding: 0px 16px 16px 16px;">
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
            <!-- for pagination -->
            <!-- for pagination -->
    </div>
  </section>

  <Section class="pagination-area mt-4">
        <div class="row justify-content-center" style="">
            <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 float-end">
                <div class="pagination-box">
                    {{ $taxnewsPaginated->onEachSide(0)->withPath(route('taxnews'))->links() }}
                </div>
            </div>
        </div>
    </Section>
  
@endsection
@section('scripts')  

@endsection