@extends('frontend.layouts.it')
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
        <header style="height: 50px;">
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
                    <!-- <a href="#top" class="navbar-brand">Parabola Infotech</a> -->
                    <a href="#top" class="navbar-brand"><img style="margin-left: 10px;" src="{{asset('frontend/images/logoN-300x71.png')}}" width="220px;" height="50px"; margin-bottom="10px";> </a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown"><a href="#top">
                          <button class="dropbtn">Home</button>
                          
                        </a></li>
                        <li class="dropdown"><a href="#">
                        <!-- <li class="dropdown"><a href="#team"> -->
                          <button class="dropbtn">Business Solutions </button>
                          
                        </a></li>
                        <!-- <li class="dropdown"><a href="#service"> -->
                        <li class="dropdown"><a href="#">
                          <button class="dropbtn">Our Projects</button>
                          <div class="dropdown-content">
                            <a href="#">Link 1</a>
                            <a href="#">Link 2</a>
                            <a href="#">Link 3</a>
                          </div>
                        </a></li>
                        <!-- <li class="dropdown"><a href="#portfolio"> -->
                        <li class="dropdown"><a href="#">
                          <button class="dropbtn">Service & Solutions</button>
                          <div class="dropdown-content">
                            <a href="#">Link 1</a>
                            <a href="#">Link 2</a>
                            <a href="#">Link 3</a>
                          </div>
                        </a></li>
                        <!-- <li class="dropdown"><a href="#about"> -->
                        <li class="dropdown"><a href="#">
                          <button class="dropbtn">Social Service</button>
                          <div class="dropdown-content">
                            <a href="#">Link 1</a>
                            <a href="#">Link 2</a>
                            <a href="#">Link 3</a>
                          </div>
                        </a></li>
                        <!-- <li class="dropdown"><a href="#contact"> -->
                       <!--  <li class="dropdown"><a href="#">
                          <button class="dropbtn"> Team Members</button>
                          <div class="dropdown-content">
                            <a href="#">Link 1</a>
                            <a href="#">Link 2</a>
                            <a href="#">Link 3</a>
                          </div>
                        </a></li> -->
                         <!-- <li class="dropdown"><a href="#contact"> -->
                         <li class="dropdown"><a href="#">
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
               
                                            <img class="img-responsive" alt="" src="/images/slider/object-oriented-plat.jpg" style="width: 100%"; />
                                            <!-- <img class="img-responsive" alt="" src="/images/slider/{{ $image->image }}" style="width: 100%"; /> -->
                        
                   
                         @endforeach
                      
                     <!--  <div class="carousel-caption">
                        <h3>Los Angeles</h3>
                        <p>LA is always so much fun!</p>
                      </div> -->
                    </div>
              
                    <div class="item">
                      @foreach($images as $image)
               
                                            <img class="img-responsive" alt="" src="/images/slider/Software-Development.jpg" style="width: 100%"; />
                        
                   
                         @endforeach
                      <!-- <div class="carousel-caption">
                        <h3>Chicago</h3>
                        <p>Thank you, Chicago!</p>
                      </div> -->
                    </div>
                  
                    <div class="item">
                        @foreach($images as $image)
               
                                            <img class="img-responsive" alt="" src="/images/slider/IT-services.jpg" style="width: 100%"; />
                        
                   
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
                <h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">COMPANY OVERVIEW</h2>
                <!-- <h5 style="margin-left: 450px;">A SISTER CONCERN OF FBI GROUP</h5> -->
                <p>Parabola Info Tech is a one stop Information Technology solution provider, a Local ICT Venture of FBI Group but Global in Presence, based in Bangladesh; committed to quality, timeliness and cost effectiveness solutions. Parabola Info Tech is specialized in providing custom Software Solution, Cloud Computing, Digital Forensics, Security Access Management, Computer network, web design, web application & Apps development for businesses and others concerns.</p><br>
                <p>Parabola Info Tech is home to a dedicated team of skilled IT professionals who are ready to serve your IT needs with customized solutions irrespective of the size of your company. Specializing in development of business software, Parabola Info Tech ensures the delivery of quality IT services to the entire satisfaction of customers.
The Management Team at Parabola Info Tech is a devoted pool of experience and expertise indiscipline’s of technology as well as organizational development skills. With expertise and proficiencies that are immensely critical in delivering quality services, Parabola Info Tech aids their clients to achieve their goals and to ensure that the respective projects are planned and managed effectively as well as efficiently.</p><br>
                <p>Parabola Info Tech technical team expertise ranges from the likes of programming ,Cloud computing ,web Application & Apps development , software engineering, analysts, domain experts to that of database and system architecture design to name a few. By fusing together this vast range of knowledge with proactive thinking and strategic planning we strive to deliver business solutions above par and approach new challenges with the client’s business objectives in mind.</p>

             <!--  -->
        </section>
        <!-- end team -->

        <!-- start service -->
        <section id="service">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">INTRODUCTION</h2>
                        <h4 style="margin-left: 20px;">passion</h4>
                    </div><br><br><br>
                    <p>
                        Passion’ is a word so excessively used and almost always blindingly paired with work, that if you actually ask around you may find that not everyone really gets what Passion is. At the root of it all, it points to that strong emotion you have inside of you, for someone, or some thing. And anyone who has ever succeeded in making a name for themselves would probably state their passion for the work / craft / industry as a reason for their success, but do you know yours?
                    </p><br>
                      
                
               
                
            </div>
              <div class="row">
                    <div class="col-md-12">
                        
                        <h4 style="margin-left: 20px;">work</h4>
                    </div><br><br><br>
                    <p>
                        I asked around, compiled some questions, got some answers, had a few headaches trying to decipher why everyone is telling me different things about what passion is to them. For example, some equate a passion (for something) to a hobby or a dream, but just because you love to sing (in the shower), that doesn’t necessarily mean that your passion is the act of singing.
                    </p><br>
                      
                
               
                
            </div>
            </div>
        </section>
        <!-- end servie -->

        <!-- start portfolio -->
        <section id="portfolio">
            <section id="service">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- <h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">Mission</h2> -->
                       
                    </div><br><br><br>
                      
                <!-- <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'> -->
                <div>
                    <h4>Mission</h4>
                    <a class="thumbnail" rel="ligthbox" href="">
                    <!-- <a class="thumbnail fancybox" rel="ligthbox" href=""> -->
                        <!-- <img class="img-responsive" alt="" src="/images/business/FBI-Noor-Garden_g_block-600x430.jpg" /> -->
                         <img class="img-responsive" alt="" src="/images/business/tape-234x300.png" />

                        
                    </a>
                    <p>
                        Parabola Infotech is a Software Development company dedicated to providing high-quality Softwares in a comfortable atmosphere for clients who seek secure and active experience outside the box. We intend to make enough profit to generate a fair return for our investors and to finance continued growth and development in quality products. We also maintain a friendly, fair, and creative work environment, which respects diversity, new ideas, and hard work.
                    </p>
                    <!-- <h4>Completed projects</h4> -->
                    
                </div> 
               
                
                </div>
            </div>
        </section>
        <!-- end servie -->
        </section>
        <!-- end portfolio -->
        <!-- start portfolio -->
        <section id="portfolio">
            <section id="service">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- <h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">Mission</h2> -->
                       
                    </div><br><br><br>
                      
             
               
                <!-- <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'> -->
                <div>
                    <h4>
                        Vision
                    </h4>
                    <a class="thumbnail" rel="ligthbox" href="">
                    <!-- <a class="thumbnail fancybox" rel="ligthbox" href=""> -->
                        <!-- <img class="img-responsive" alt="" src="/images/business/Screenshot - 03-Jul-18 , 11_07_17 AM.png" /> -->
                        <img class="img-responsive" alt="" src="/images/business/watch-191x300.png" />
                        
                    </a>
                    <p>
                        When it comes to customer commitment, not many companies are as hyper-focused as Parabola Infotech is. Although development selection, quality, and value all have a place in the company’s mission statement, it’s crystal clear that it’s all about the customer: Parabola Infotech works relentlessly to give customers the most promising software experience as possible. If you’ve ever dealt with Parabola Infotech , you’ll know the brand will uphold the high standard for customer service mentioned in its mission statement, as associates are always roaming asking customers whether they’ve been helped, and doing everything they can to make the experience a memorable one.
                    </p>
                    <!-- <h4>Future projects</h4> -->
                    
                </div> <!-- col-6 / end -->
                </div>
            </div>
        </section>
        <!-- end servie -->
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
                    <div class="col-md-12">
                    <div class="col-md-4 text-left">
                        <p class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">
                        Copyright &copy; 2018 Parabola infotech Ltd</p>
                    </div>
                        <div class="col-md-8">
                        <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown"><a href="#top">
                          About us
                          
                        </a></li>
                        <li class="dropdown"><a href="#team">
                          Business Solutions
                          
                        </a></li>
                        <li class="dropdown"><a href="#service">
                          Competence & Quality
                          
                        </a></li>
                        <li class="dropdown"><a href="#portfolio">
                          Contact Us
                          
                        </a></li>
                        <li class="dropdown"><a href="#about">
                          Expertise
                          
                        </a></li> 
                        <li class="dropdown"><a href="#about">
                          Home
                          
                        </a></li> 
                        <li class="dropdown"><a href="#about">
                         Knowledge & Experience
                          
                        </a></li> 
                        <li class="dropdown"><a href="#about">
                          Media Center
                          
                        </a></li>
                        <li class="dropdown"><a href="#about">
                          Our Projects
                          
                        </a></li>
                        <li class="dropdown"><a href="#about">
                          Service & Solutions
                          
                        </a></li>
                        <li class="dropdown"><a href="#about">
                          Social Service
                          
                        </a></li>
                        <li class="dropdown"><a href="#about">
                          Team Members
                          
                        </a></li>

                       
                    </ul>
                    
                    </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end copyright -->

    @endsection