<!DOCTYPE html>
<html>
    <head>
        <title>Clock Astrology</title>

        <!-- meta -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- css -->
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/ionicons.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
        <link rel="stylesheet" href="{{asset('css/owl.theme.css')}}">
        <link rel="stylesheet" href="{{asset('css/owl.transitions.css')}}">
        <link rel="stylesheet" href="{{asset('css/animate.css')}}">
        <link rel="stylesheet" href="{{asset('css/custom.css')}}">

        <!-- js -->
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('js/isotope.pkgd.min.js')}}"></script>
        <script src="{{asset('js/script.js')}}"></script>
        <script src="{{asset('js/wow.min.js')}}"></script>
        <script src="{{asset('js/jquery.actual.min.js')}}"></script>
    </head>

    <body>
        <div id="wrapperremedy">
            <div id="overlay-1">
                <section id= "navigation">
                    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <span class="ion-navicon"></span>
                                </button>
                                <a class="navbar-brand">Clock Astrology</a>
                            </div>
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav navbar-right">
                                    <li><a href="/#navigation">Home</a></li>
                                    <li><a href="/#about">About</a></li>
                                    <li><a href="/#our_service">Service</a></li>
                                    <li><a href="/#team">Remedies</a></li>
    
                                    <li><a href="/#contact">Contact</a></li>
                                </ul>
                            </div>  <!-- collapse navbar-collapse -->
                        </div>  <!-- container-fluid -->
                    </nav>  <!-- navbar -->
                </section>  <!-- #navigation -->
                @yield('content')
                <div id="bottom" class="bottom text-center">
                    <a href="#about"><i class="ion-ios7-arrow-down"></i></a>
                </div>
            </div><!-- overlay-1 -->
        </div>  <!-- wrapper -->        
            
        
        <!-- footer -->
        <section class= "main-footer">
            
            <div class= "row">
                <div class= "copyright text-center">
                    <br>
                    <p> © 2019 Designed and Developed by <a href="http://themewagon.com"><span class= "theme">Neenu S <br><p>unni.neenu@gmail.com</p></span></a></p>
                    

                </div>
            </div>
        </section><!-- footer -->

        <!-- js -->
        <script>
            $(document).ready(function() {
                $("#client-speech").owlCarousel({
                    autoPlay: 3000,
                    navigation : false, // Show next and prev buttons
                    slideSpeed : 700,
                    paginationSpeed : 1000,
                    singleItem:true
                });
            });
        </script>
        <script>
            new WOW().init();
        </script>
        <script>
            $( function() {
                  // init Isotope
                var $container = $('.isotope').isotope
                ({
                    itemSelector: '.element-item',
                    layoutMode: 'fitRows'
                });


                // bind filter button click
                $('#filters').on( 'click', 'button', function() 
                {
                    var filterValue = $( this ).attr('data-filter');
                    // use filterFn if matches value
                    $container.isotope({ filter: filterValue });
                 });
  
              // change is-checked class on buttons
                $('.button-group').each( function( i, buttonGroup ) 
                {
                    var $buttonGroup = $( buttonGroup );
                    $buttonGroup.on( 'click', 'button', function() 
                    {
                        $buttonGroup.find('.is-checked').removeClass('is-checked');
                        $( this ).addClass('is-checked');
                    });
                });
              
            });
        </script>
        <script src="{{asset('js/jquery-ui-1.10.3.min.js')}}"></script>
        <script src="{{asset('js/jquery.knob.js')}}"></script>
        <script src="{{asset('js/daterangepicker.js')}}"></script>
        <script src="{{asset('js/bootstrap3-wysihtml5.all.min.js')}}"></script>
        <script src="{{asset('js/dashboard.js')}}"></script>
       
    </body>
</html>

