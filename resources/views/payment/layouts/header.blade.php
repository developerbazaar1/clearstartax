<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/x-icon" href="{{ URL::asset('assets/fav.ico') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/appointment.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/appointment-responsive.css') }}">
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.8.2.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/cardvalidation.js') }}"></script>
    <title>Clear Start Tax - Appointments</title>
    <script type="text/javascript">
    (function(c,l,a,r,i,t,y){
            c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
            t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
            y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
        })(window, document, "clarity", "script", "kyn8vg3s3w");
    </script>
</head>
    <body>
        <section class="logo">
 
            <div class="container">
                <div class="brand_logo">
                    <a href="{{route('login')}}">
                    <img src="{{ URL::asset('assets/image/clearstartlogo.jpg') }}" class="img-fluid" alt="">
                    </a>
                </div>
    
            </div>
    
        </section>
        @yield('content')
        
        <script src="{{ URL::asset('assets/js/jquery-3.3.1.min.js') }}"></script>
               <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
        <script src="{{ URL::asset('assets/js/popper.min.js') }}"></script>
        <script src="{{ URL::asset('assets/js/bootstrap.min.js') }}"></script>

        @yield('scripts')
    </body>

</html>


