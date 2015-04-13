<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9"><![endif]-->
    <head>
		@include('partials.head')

        <!-- Vendor CSS -->
        <link href="{{ asset('vendors/fullcalendar/fullcalendar.css') }}" rel="stylesheet">
        <link href="{{ asset('vendors/animate-css/animate.min.css') }}" rel="stylesheet">
        <link href="{{ asset('vendors/sweet-alert/sweet-alert.min.css') }}" rel="stylesheet">
        @yield('head')
            
        <!-- CSS -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        
    </head>
    <body>
		@include('partials.header')
        
        <section id="main">

			@include('partials.sidebar')
            
			@include('partials.rightsidebar')
            
            
            <section id="content">
                <div class="container">
					@include('partials.blockheader')
                    
					@yield('content')
                    
                </div>
            </section>

        </section>
        
		@include('partials.iewarning')


        <footer>
            <!-- Javascript Libraries -->
            <script src="{{ asset('js/app.js') }}"></script>

            @include('partials.scripts')

            @yield('footer')

        </footer>
        
    </body>
  </html>