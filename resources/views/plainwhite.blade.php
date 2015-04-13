<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9"><![endif]-->
    <head>
		@include('partials.head')

        <!-- Vendor CSS -->
        @yield('head')
            
        <!-- CSS -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        
    </head>
    <body>

        
        <section id="main">


            <section id="content">
                <div class="container-fluid">
                    
					@yield('content')
                    
                </div>
            </section>

        </section>
        
		@include('partials.iewarning')


        <footer>
            <!-- Javascript Libraries -->
            <script src="{{ asset('js/app.js') }}"></script>



            @yield('footer')

        </footer>
        
    </body>
  </html>