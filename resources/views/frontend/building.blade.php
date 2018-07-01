@extends('frontend.layouts.app')
@section('content')
<style>
.dropbtn {
    background-color: white;
    color: #000099;
    /*padding: 16px;*/
    font-size: 14px;
    border: none;
    height: 40px;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #ddd}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: white;
}
</style>
    <body id="top">

        <!-- start preloader -->
        <div class="preloader">
            <div class="sk-spinner sk-spinner-wave">
                <div class="sk-rect1"></div>
                <div class="sk-rect2"></div>
                <div class="sk-rect3"></div>
                <div class="sk-rect4"></div>
                <div class="sk-rect5"></div>
            </div>
        </div>
        <!-- end preloader -->

        <!-- start header -->
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <p><i class="fa fa-phone"></i><span> Phone</span> +880 1934 114 755</p>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <p><i class="fa fa-envelope-o"></i><span> Email</span><a href="#">parabolatech@gmail.com</a></p>
                    </div>
                    <div class="col-md-5 col-sm-4 col-xs-12">
                        <ul class="social-icon">
                            <li><span>Meet us on</span></li>
                            <li><a href="https://www.facebook.com/ashrafullah274" class="fa fa-facebook"></a></li>
                            <li><a href="https://twitter.com/ashrafullah274" class="fa fa-twitter"></a></li>
                            <li><a href="https://plus.google.com/u/0/112631130076587977507" class="fa fa-google-plus" class="fa fa-google-plus"></a></li>
                            <!--<li><a href="#" class="fa fa-apple"></a></li>-->
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <!-- end header -->

        <!-- start navigation -->
        <nav class="navbar navbar-default templatemo-nav" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon icon-bar"></span>
                        <span class="icon icon-bar"></span>
                        <span class="icon icon-bar"></span>
                    </button>
                    <a href="#top" class="navbar-brand">Parabola Infotech</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown"><a href="#top">
                          <button class="dropbtn">Home</button>
                          
                        </a></li>
                        <li class="dropdown"><a href="#team">
                          <button class="dropbtn">Contructual Projects </button>
                          <div class="dropdown-content">
                            <a href="#">Link 1</a>
                            <a href="#">Link 2</a>
                            <a href="#">Link 3</a>
                          </div>
                        </a></li>
                        <li class="dropdown"><a href="#service">
                          <button class="dropbtn">Venture Projects</button>
                          <div class="dropdown-content">
                            <a href="#">Link 1</a>
                            <a href="#">Link 2</a>
                            <a href="#">Link 3</a>
                          </div>
                        </a></li>
                        <li class="dropdown"><a href="#portfolio">
                          <button class="dropbtn">Media Center</button>
                          <div class="dropdown-content">
                            <a href="#">Link 1</a>
                            <a href="#">Link 2</a>
                            <a href="#">Link 3</a>
                          </div>
                        </a></li>
                        <li class="dropdown"><a href="#about">
                          <button class="dropbtn">E-service</button>
                          <div class="dropdown-content">
                            <a href="#">Link 1</a>
                            <a href="#">Link 2</a>
                            <a href="#">Link 3</a>
                          </div>
                        </a></li>
                        <li class="dropdown"><a href="#contact">
                          <button class="dropbtn"> About us</button>
                          <div class="dropdown-content">
                            <a href="#">Link 1</a>
                            <a href="#">Link 2</a>
                            <a href="#">Link 3</a>
                          </div>
                        </a></li>
                         <li class="dropdown"><a href="#contact">
                          <button class="dropbtn"> Contact us</button>
                          <div class="dropdown-content">
                            <a href="#">Link 1</a>
                            <a href="#">Link 2</a>
                            <a href="#">Link 3</a>
                          </div>
                        </a></li>
                       <!--   <li class="dropdown"><a href="#contact">
                          <button class="dropbtn"> <input type="text" class="form-control" placeholder="Search"></button>
                          
                        </a></li> -->
                        
                        <!-- <li><a href="#top">HOME</a></li> -->
                        <!-- <li><a href="#team">BUSINESS VENTURES</a></li> -->
                        <!-- <li><a href="#service">SOCIAL & MEDIA</a></li>
                        <li><a href="#portfolio">ABOUT US</a></li>
                        <li><a href="#about">ABOUT</a></li>
                        <li><a href="#contact">CONTACT</a></li> -->
                    </ul>
                </div>
            </div>
        </nav>
        <!-- end navigation -->

        <!-- start home -->
        <section id="home">
            {{-- <div class="container">
                <div class="row">
                    <div class="col-md-offset-2 col-md-8">
                        <h1 class="wow fadeIn" data-wow-offset="50" data-wow-delay="0.9s"><img src="images/ashraf.jpg" class="img-circle" alt="Cinque Terre" width="250" height="270"></h1>
                        <div class="element">
                            <div class="sub-element">Md. Ashraf Ullah Bhuiyan</div>
                            <div class="sub-element">Web Designer / Web Developer</div>
                           <!-- <div class="sub-element">Download, edit and apply this awesome template for your websites</div>-->
                        </div>
                        <a data-scroll href="#about" class="btn btn-default wow fadeInUp" data-wow-offset="50" data-wow-delay="0.6s">About</a>
                    </div>
                </div>
            </div> --}}
            <div class="container-full">
                
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                  </ol>
              
                  <!-- Wrapper for slides -->
                  <div class="carousel-inner">
              
                    <div class="item active">
                      <!-- <img src=" alt="" style="width:100%;') }}"> -->
                       @foreach($images as $image)
               
                                            <img class="img-responsive" alt="" src="/images/slider/{{ $image->image }}" style="width: 100%"; />
                        
                   
                         @endforeach
                      
                     <!--  <div class="carousel-caption">
                        <h3>Los Angeles</h3>
                        <p>LA is always so much fun!</p>
                      </div> -->
                    </div>
              
                    <div class="item">
                      @foreach($images as $image)
               
                                            <img class="img-responsive" alt="" src="/images/slider/{{ $image->image }}" style="width: 100%"; />
                        
                   
                         @endforeach
                      <!-- <div class="carousel-caption">
                        <h3>Chicago</h3>
                        <p>Thank you, Chicago!</p>
                      </div> -->
                    </div>
                  
                    <div class="item">
                        @foreach($images as $image)
               
                                            <img class="img-responsive" alt="" src="/images/slider/{{ $image->image }}" style="width: 100%"; />
                        
                   
                         @endforeach
                      <!-- <img src="ny.jpg" alt="New York" style="width:100%;"> -->
                      <!-- <div class="carousel-caption">
                        <h3>New York</h3>
                        <p>We love the Big Apple!</p>
                      </div> -->
                    </div>
                
                  </div>
              
                  <!-- Left and right controls -->
                  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>
        </section>
        <!-- end home -->
        

 

        <!-- start team -->
        <section id="team">
            <div class="container">
                <h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">Business Venture</h2>

             <div class="row">
    <div class='list-group gallery'>


            
                
                 
                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" href="">
                        <img class="img-responsive" alt="" src="/images/business/parabola-infotech (1).jpg" />
                        
                    </a>
                    <a href="http://it.fbigroupbd.com/"><h4>Parabola InfoTech Ltd</h4></a>
                    <h6>Parabola Info Tech is a one stop Information Technology solution provider, a Local ICT Venture of FBI Group but Global in Presence, based in Bangladesh.</h6>

                    
                </div> 
                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" href="">
                        <img class="img-responsive" alt="" src="/images/business/e (1).jpg" />
                        
                    </a>
                    <a href="#"><h4>Parabola Green Architect</h4></a>
                    <h6>We care for your dream and want to merge it with environment so that you can have the feel of environment.</h6>
                    
                </div> <!-- col-6 / end -->
                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" href="">
                        <img class="img-responsive" alt="" src="/images/business/e.e-commerce-1.jpg" />
                        
                    </a>
                     <a href="#"><h4>E-Commerce</h4></a>
                    <h6>We are here for you with a established e-commerce system to make your life easy and relax.</h6>
                    
                </div> <!-- col-6 / end -->
                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" href="">
                        <img class="img-responsive" alt="" src="/images/business/fbi.jpg" />
                        
                        
                    </a>
                    <a href="http://build.fbigroupbd.com/"><h4>FutureTech Buildings Ideas Ltd</h4></a>
                    <h6>We have learnt more about community issue , government fact and life of people. Your property is our liabilities to build with proper engineering with safety and make it valuable.</h6>
                    
                </div> <!-- col-6 / end -->
               
            


        </div> <!-- list-group / end -->
    </div> <!-- row / end -->
        </section>
        <!-- end team -->

        <!-- start service -->
        <section id="service">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">SOCIAL & MEDIA</h2>
                    </div>
                      
                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" href="">
                        <img class="img-responsive" alt="" src="/images/business/e.e-learning (1).jpg" />
                        
                    </a>
                    
                </div> 
                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" href="">
                        <img class="img-responsive" alt="" src="/images/business/e.news_-1 (1).jpg" />
                        
                    </a>
                    
                </div> <!-- col-6 / end -->
                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" href="">
                        <img class="img-responsive" alt="" src="/images/business/e.e-commerce-1.jpg" />
                        
                    </a>
                    
                </div> <!-- col-6 / end -->
                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" href="">
                        <img class="img-responsive" alt="" src="/images/business/images (1).jpeg" />
                        
                    </a>
                    
                </div> <!-- col-6 / end -->
                </div>
            </div>
        </section>
        <!-- end servie -->

        <!-- start portfolio -->
        <section id="portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s"><span>MY</span> PORTFOLIO</h2>
                        <p>My design and development work</p>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
                        <div class="portfolio-thumb">
                           <img src="images/portfolio-img1.jpg" class="img-responsive" alt="portfolio img 1">
                                <div class="portfolio-overlay">
                                    <h4>Project One</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget dia.</p>
                                    <a href="#" class="btn btn-default">DETAIL</a>
                                </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
                        <div class="portfolio-thumb">
                           <img src="images/portfolio-img2.jpg" class="img-responsive" alt="portfolio img 2">
                                <div class="portfolio-overlay">
                                    <h4>Project Two</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget dia.</p>
                                    <a href="#" class="btn btn-default">DETAIL</a>
                                </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
                        <div class="portfolio-thumb">
                           <img src="images/portfolio-img3.jpg" class="img-responsive" alt="portfolio img 3">
                                <div class="portfolio-overlay">
                                    <h4>Project Three</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget dia.</p>
                                    <a href="#" class="btn btn-default">DETAIL</a>
                                </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
                        <div class="portfolio-thumb">
                           <img src="images/portfolio-img4.jpg" class="img-responsive" alt="portfolio img 4">
                                <div class="portfolio-overlay">
                                    <h4>Project Four</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget dia.</p>
                                    <a href="#" class="btn btn-default">DETAIL</a>
                                </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
                        <div class="portfolio-thumb">
                           <img src="images/Screenshot 2017-09-17 00-02-19.jpg" class="img-responsive" alt="portfolio img 3">
                                <div class="portfolio-overlay">
                                    <h4>Project Five</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget dia.</p>
                                    <a href="#" class="btn btn-default">DETAIL</a>
                                </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
                        <div class="portfolio-thumb">
                           <img src="images/Screenshot 2017-09-16 23-57-00.jpg" class="img-responsive" alt="portfolio img 4">
                                <div class="portfolio-overlay">
                                    <h4>Project Six</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget dia.</p>
                                    <a href="#" class="btn btn-default">DETAIL</a>
                                </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
                        <div class="portfolio-thumb">
                           <img src="images/Screenshot 2017-09-16 23-59-32.jpg" class="img-responsive" alt="portfolio img 1">
                                <div class="portfolio-overlay">
                                    <h4>Project Seven</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget dia.</p>
                                    <a href="#" class="btn btn-default">DETAIL</a>
                                </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
                        <div class="portfolio-thumb">
                           <img src="images/StockSnap_ET13T3T5A9-600x400.jpg" class="img-responsive" alt="portfolio img 2">
                                <div class="portfolio-overlay">
                                    <h4>Project Eight</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget dia.</p>
                                    <a href="#" class="btn btn-default">DETAIL</a>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end portfolio -->

            <!-- start about -->
        <section id="about">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">ABOUT</h2>
                    </div>
                    <div class="col-md-8 col-sm-4 col-xs-12 wow fadeInLeft" data-wow-offset="50" data-wow-delay="0.6s">
                        <div class="media">
                            <div class="media-heading-wrapper">
                                <div class="media-object pull-left">
                                    <i class="fa fa-user"></i>
                                </div>
                                <!--<h3 class="media-heading">FULLY RESPONSIVE</h3>-->
                            </div>
                             
                                <div class="container">
               
                        
                    </div>
                    <div class="col-md-8 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
                        <h3>Biography</h3>
                        
                        <p>FBI has started its journey from …. . It has passed a long way to come at this stage. At this time Concerns have been established and there have a lot of attempt to do so. 
Board of directories has been structured in a such way to meet any problem and to any concern directly. We have a mission to enrich our service and serve the people. And this is the starting of a new era to combine all the technology and ideas. . Our software solution has proved its quality to our valuable client. Not only in software but also we are about to design ones dream. Building architecture, fashions, entertainment and holiday planner all the concepts are live for your service for a long time. E-commerce is available for your comfort shopping. All the sister concerns are for our valuable customers. We are trying to make life easier and this is our vision to make ourselves one of yours brand. .</p>
                    </div>
                    <div class="col-md-4 active wow fadeIn" data-wow-offset="50" data-wow-delay="0.9s">
                        <h3>Official Info</h3>
                        <address>
                                    Phone              :   +880 1912 005 005<br>
                                    Road               :- 23 Block - F Bashundhara<br>
                                    Mail               :   info@fbigroupbd.com.<br>
                                   
                                    Website            :   www.fbigroupbd.com<br>
                                    <!--    Marital Status      :   Unmarried<br>-->
                                    
                                </address>
                    </div>
                    
                </div>
            </div>
  </div>
  
   
  </div>

                                  
                           
                    
        </section>
        <!-- end about -->

        <!-- start contact -->
        <section id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">CONTACT</h2>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-offset="50" data-wow-delay="0.9s">
                        <form action="#" method="post">
                            <label>NAME</label>
                            <input name="fullname" type="text" class="form-control" id="fullname">
                            
                            <label>EMAIL</label>
                            <input name="email" type="email" class="form-control" id="email">
                            
                            <label>MESSAGE</label>
                            <textarea name="message" rows="4" class="form-control" id="message"></textarea>
                            
                            <input type="submit" class="form-control">
                        </form>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInRight" data-wow-offset="50" data-wow-delay="0.6s">
                        <address>
                            <p class="address-title">Our ADDRESS</p>
                            <span> Bashundhara , Dhaka</span>
                            <p><i class="fa fa-phone"></i> +8801816357274</p>
                            <p><i class="fa fa-envelope-o"></i> parabolainfotech@gmail.com</p>
                            <p><i class="fa fa-map-marker"></i> Dhaka</p>
                        </address>
                        <ul class="social-icon">
                            <li><h4> SOCIAL</h4></li>
                            <li><a href="https://www.facebook.com/ashrafullah274" class="fa fa-facebook" class="fa fa-facebook"></a></li>
                            <li><a href="https://twitter.com/ashrafullah274" class="fa fa-twitter"></a></li>
                            <li><a href="https://plus.google.com/u/0/112631130076587977507" class="fa fa-google-plus"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- end contact -->



        <!--up down icon-->

        <button onclick="topFunction()" id="myBtn" title="Go to top"><span class="glyphicon glyphicon-circle-arrow-up" aria-hidden="true"></span></button>


        <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("myBtn").style.display = "block";
            } else {
                document.getElementById("myBtn").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
        </script>

        <script type="text/javascript">
    $(document).ready(function(){
        $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
        });
    });
</script>

        <!-- start copyright -->
        <footer id="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">
                        Copyright &copy; 2018 Parabola infotech Ltd</p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end copyright -->

    @endsection