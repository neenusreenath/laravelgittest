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
        <div id="wrapper">
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
                                    <li><a href="#navigation">Home</a></li>
                                    <li><a href="#about">About</a></li>
                                    <li><a href="#our_service">Services</a></li>
                                    <li><a href="#team">Remedies</a></li>
                                  
                                    <li><a href="#contact">Contact</a></li>
                                </ul>
                            </div>  <!-- collapse navbar-collapse -->
                        </div>  <!-- container-fluid -->
                    </nav>  <!-- navbar -->
                </section>  <!-- #navigation -->
                <section id="starting">
                    <div class="text-center starting-text">
                        <h2>Ohm Namah Sivaya</h2>
                        <h2 class="rene">CLOCK ASTROLOGY SERVICES</h2>
                        <h2>Sri.Mulloor S Parameswaran Nair</h2>
                    </div>
                </section>
                <div id="bottom" class="bottom text-center">
                    <a href="#about"><i class="ion-ios7-arrow-down"></i></a>
                </div>
            </div><!-- overlay-1 -->
        </div>  <!-- wrapper -->        
            
        <!-- About Us -->
        <section id="about">
            <div class="container">
                <div class="row text-center" id= "heading">
                    <div class="col-md-6 col-md-offset-3 wow animated zoomInDown" id= "heading-text">
                        <h3>About The Astrologer</h3>
                        <hr class= "full">
                        <br/>
                    </div>
                </div>  <!-- row -->
                <div class="row about-us-text">
                    <div class="col-md-12">
                        <center><img src="{{asset('img/Edited1.jpg')}}"></center>
                       
                        <p class= "client-comment text-center">Sri Mulloor S.Parameswaran Nair is a famous astrologer and a member of Veda Vedanga Gaveshana Parishath.He has more than 25 years of experience in Vedic Astrology and has immense and profound knowledge in Hindu predictive astrology.
                         </p>
                       

                    </div>
                </div>  <!-- row -->
                
            </div>  <!-- container -->
        </section>  <!-- about us -->

        <!-- Our service -->
        <section id="our_service">
            <div class="container">
                <div class="row text-center" id= "heading">
                    <div class="col-md-6 col-md-offset-3 wow animated zoomInDown" id= "heading-text">
                        <h3>Our Services</h3>
                        <hr class= "full">
                        <br/>
                    </div>
                </div>
                <div class="wow animated zoomIn" data-wow-delay="0.1s">
                    <div class="col-md-3 row main_content">
                    
                        <h5 class="text-center"><a href="{{url('/phone')}}"> Phone Consultation</a></h5>               
                    <br>                   
                        <h5 class="text-center"><a href="{{url('/year')}}"> Yearly Detailed Report </a></h5>
                    <br>
                    
                        <h5 class="text-center"><a href="{{url('/luck')}}"> Get Lucky Dates</a></h5>
                   <br>
                        <h5 class="text-center"><a href="{{url('/marriage')}}"> Marriage Prediction</a></h5>
                </div>
                <div class="col-md-3 row main_content">  
                        <h5 class="text-center"><a href="{{url('/health')}}"> Health Horoscope</a></h5>
                    <br>
                      <h5 class="text-center"><a href="{{url('/child')}}"> Child Birth Issue</a></h5>
                    <br>
                      <h5 class="text-center"><a href="{{url('/vasthu')}}"> Vasthu</a></h5>
                    <br>
                      <h5 class="text-center"><a href="{{url('/numerology')}}"> Numerology</a></h5>
                </div><!-- row main_content -->
                <div class="col-md-3 row main_content">
                    
                       
                        <h5 class="text-center"><a href="{{url('/person')}}"> Personalised Predictions</a></h5>
                    <br>
                         <h5 class="text-center"><a href="{{url('/match')}}"> Match Making</a></h5>
                    <br>
                       <h5 class="text-center"><a href="{{url('/relationship')}}"> Relationship Problem</a></h5>
                    <br>
                         <h5 class="text-center"><a href="{{url('/wealth')}}"> Wealth Problem</a></h5>
                    <br>
                </div>
                <div class="col-md-3 row main_content">
                        <h5 class="text-center"><a href="{{url('/germ')}}"> Lucky Gemstone Recommendation</a></h5>
                    <br>
                        <h5 class="text-center"><a href="{{url('/death')}}"> Death Remedy</a></h5>
                    <br>
               
                        <h5 class="text-center"><a href="{{url('/muhoorthams')}}"> Take Muhurtham</a></h5>

                    <br>
                        <h5 class="text-center"><a href="{{url('/business')}}"> Business Report</a></h5>
                    <br>
                </div>
            </div>
            </div>  <!-- container -->
        </section>  <!-- our_service -->

        <!-- Our Team -->
        <section id="team">
            <div class="container">
                <div class="team-members">
                    <div class="row text-center" id="heading">
                        <div class="wow animated zoomInDown" id="heading-text">
                            <h3>Remedies</h3>
                            <hr class="full">
                           
                        </div>
                    </div>
                    <div class="row main_content text-center">
                       
                           <h5 class="text-center"><a href="{{url('/gemremedy')}}"> Gemstones</a></h5>
                            <br>
                            <h5 class="text-center"><a href="{{url('/rudraksharemedy')}}"> Rudrakshas</a></h5>
                            <br>
                            <h5 class="text-center"><a href="{{url('/yanthraremedy')}}"> Yanthras</a></h5>
                        </div>
                        </div>  <!-- col-md-4 -->
                    </div> <!-- row main_content -->
                </div>  <!-- team-members -->
            </div>  <!-- container -->
        </section>  <!-- team -->

        <!-- Portfolio -->
        
        
        
        <!-- Clients -->
       <!-- clients -->

        <!-- contact -->
        <section id= "contact">
            <div class= "container">
                <div class="row text-center" id= "heading">
                     <div class= "bg-image col-md-12">
                        <div class= "col-md-6 col-md-offset-3" id= "heading-text">
                            <h3>Contact</h3>
                            <hr class= "full">
                           
                        </div>
                    </div>
                </div>
              
                    <div class= "col-md-12 col-md-offset-0">
                        
                           
                                <div class= "row">
                                    
                                    <div class= "col-md-12">
                                        <p class= "client-comment text-center"><b>
                                           Monday - Sunday  : 7am  -  4:30pm, 6:30pm  -  9pm<br>
                                           Saturday  :Holiday<br>
                                        </b></p>
                                    </div>
                                    
                                    
                                </div>      
                </div>
                    
                        <div class= "col-lg-6 col-lg-offset-3" id= "heading-text">

                            
                            <h4 class="text-danger text-center"> For appointments please contact below phone numbers</h4>
                        
                   
                        <h5 class="text-center">Mob    :     +91 9446614125
                            <br>
                            Res  :  0471 2742738<br>
                            Email:clockastro@gmail.com
                        <br><br>Address       :        Clock House, Kadakampally Lane, Anayara PO, Thiruvananthapuram,Kerala</h5>
                        </div>
                    </div>  
                </div>
                <div class= "row">
                    <div class= "col-md-6 col-md-offset-3 text-center">
                        <ul class="socials-icons">
                            <li>
                                <a href="https://www.facebook.com/mulloor.parameswaran.3" data-toggle="tooltip" title="Share in Facebook" class="facebook"><i class="fa fa-facebook"></i></a>
                            </li>
                        
                            
                        </ul>
                    </div>
                </div>
            </div>

        </section>  <!-- contacts --> 
            
        <!-- footer -->
        <section id= "footer" class= "main-footer">
            
            <div class= "row">
                <div class= "copyright text-center">
                    <p> © 2019 Designed and Developed by <a href="http://themewagon.com"><span class= "theme">Neenu S</span></a></p>
                    <p>unni.neenu@gmail.com</p>
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

