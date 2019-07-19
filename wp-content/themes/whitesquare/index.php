<?php get_header() ?>



    
    <!-- ***** Header Area Start ***** -->
    <header class="header_area clearfix">
        <div class="container h-100">
            <div class="row h-100">
                <!-- Menu Area Start -->
                <div class="col-12 h-100">
                    <div class="menu_area h-100">
                        <nav class="navbar h-100 navbar-expand-lg align-items-center">
                            <!-- Logo -->
                            <a class="navbar-brand" href="index.html">
                                <!-- <img src="img/blog-img/logo-footer.png" alt="logo"> -->
                                <img src="<?php echo get_template_directory_uri()?>/img/blog-img/logo-footer.png" alt="logo">


                                
                                </a>

                            <!-- Menu Area -->
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mosh-navbar" aria-controls="mosh-navbar" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

                            <div class="collapse navbar-collapse justify-content-end" id="mosh-navbar">
                                <ul class="navbar-nav animated" id="nav">
                                    <li class="nav-item active homepage-border"><a class="nav-link" href="index.html">Homepage</a></li>
                                    <li class="nav-item dropdown ">
                                        <!-- <a class="nav-link dropdown-toggle" href="#" id="moshDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Pages
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="moshDropdown">
                                            <a class="dropdown-item" href="index.html">Home</a>
                                            <a class="dropdown-item" href="about.html">About Us</a>
                                            <a class="dropdown-item" href="services.html">Services</a>
                                            <a class="dropdown-item" href="portfolio.html">Portfolio</a>
                                            <a class="dropdown-item" href="blog.html">Blog</a>
                                            <a class="dropdown-item" href="contact.html">Contact</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="elements.html">Elements</a>
                                        </div>
                                    </li> -->
                                    <li class="nav-item"><a class="nav-link" href="#blog.html">Our Team</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#portfolio.html">Portfolio</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#services.html">Services</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#aboutus.php">About Us</a></li>
                                    <li class="nav-item"><a class="nav-link" href="/contacts">Contacts</a></li>
                                </ul>
                                <!-- Search Form Area Start -->

                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** --> 
  
    <!-- ***** Welcome Area Start ***** -->
    <div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
      <img src="<?php echo get_template_directory_uri()?>/img/blog-img/bigstock.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h1 class="maintext10">BEYLITECH</h1>
          <p >CREATIVE TECHNOLOGIES</p>
        </div>
      </div>
      <div class="carousel-item">
      <img src="<?php echo get_template_directory_uri()?>/img/blog-img/work.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        <h1 class="maintext10">BEYLITECH</h1>
          <p >CREATIVE TECHNOLOGIES</p>
        </div>
      </div>
      <div class="carousel-item">
      <img src="<?php echo get_template_directory_uri()?>/img/blog-img/business.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        <h1 class="maintext10">BEYLITECH</h1>
          <p >CREATIVE TECHNOLOGIES</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

    <!-- ***** Portfolio Area Start ***** -->
    <section class="mosh-portfolio-area section_padding_100_0 clearfix yolo">
        <div  class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="teamm">
                        <h1 id="blog.html" >Our Team</h1>
                    </div>
                </div>	
            </div>

            <div class="row">
                <div class="col-sm-4">
                    <div class="tor">
                        <img src="<?php echo get_template_directory_uri()?>/img/team-img/tor.jpg" alt="" >
                        <h3 class="aa"> CHRIS </h3> 
                        <p class="aa"> PR-menager </p>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="tor">
                        <img src="<?php echo get_template_directory_uri()?>/img/team-img/robert.jpg" alt="" >
                        <h3 class="aa"> ROBERT </h3> 
                        <p class="aa"> Web-programmer</p>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="tor">
                        <img src="<?php echo get_template_directory_uri()?>/img/team-img/skarlet.png" alt="" >
                        <h3 class="aa"> SKARLET </h3> 
                        <p class="aa"> Web-designer </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
        <form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail"></label>
      <input type="email" class="form-control" id="name" placeholder="First Name">
    </div>
    <div class="form-group col-md-6">
      <label for="input"></label>
      <input type="text" class="form-control" id="lastname" placeholder="Last Name">
    </div>
  </div>
  <div class="form-group">
    <label for="input"></label>
    <input type="text" class="form-control" id="Email" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="inputAddress2"></label>
    <input type="text" class="form-control" id="Message" placeholder="Message">
  </div>
  <div class="form-row">
    <div class="col-7">
    <label for="inputAddress"></label>
      <input type="text" class="form-control" id="city" placeholder="City">
    </div>
    <div class="col">
    <label for="inputAddress"></label>
      <input type="text" class="form-control" id="state" placeholder="State">
    </div>
    <div class="col-sm-12">
  <button id="form-submit" type="button" class="btn btn-primary gold">Submit</button>
</div>
</form>
    </section>
        <section class="area-platform-info">
            <div class="container">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="orderproject">
                    <h1 > Order Project </h1>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-4 a1">
                    <div class="a11">
                      <h3 class="landing">Landing </h3>
                      <p class="ding">*inexpensive website for business</br>
                        *brand awareness online</br>
                        *increase in sales and profits</br>
                      </p> 
                      <h3 class="price">500 man</h3>
                    </div>
                  </div>
                  <div class="col-sm-4 a1">
                    <div class="a11">
                      <h3 class="landing">Online Store</h3>
                      <p class="ding">*for the sale of goods and services</br>
                        *application management by email and online</br>
                        *stylish modern design</br>
                      </p> 
                      <h3 class="price">500 man</h3>
                    </div>
                  </div>
                  <div class="col-sm-4 a1">
                    <div class="a11">
                      <h3 class="landing">Blog </h3>
                      <p class="ding">*large amount of content</br>
                        *registration and users</br>
                        *various modules for your tasks</br>
                      </p> 
                      <h3 class="price">500 man</h3>
                    </div>
                  </div>
                </div>
            </div>


        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <p class="ourwork">Our Work</p>
                        <h2 id="portfolio.html">See our Online Portfolio</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="mosh-projects-menu">
            <div class="text-center portfolio-menu">
                <p class="active" data-filter="*">All</p>
                <p data-filter=".gd">Graphic Design</p>
                <p data-filter=".bi">Brand Identity</p>
                <p data-filter=".pho">Photography</p>
                <p data-filter=".wd">Web Design</p>
                <p data-filter=".pc">Printing Colaterall</p>
            </div>
        </div>
        <div class="mosh-portfolio">
            <!-- Single gallery Item Start -->
            <div class="single_gallery_item gd">
                <!-- <img src="img/portfolio-img/1.jpg" alt=""> -->
                <img src="<?php echo get_template_directory_uri()?>/img/portfolio-img/1.jpg" alt="">
                <div class="gallery-hover-overlay d-flex align-items-center justify-content-center">
                    <div class="port-hover-text text-center">
                        <h4>DFR Corp. Branding</h4>
                        <a href="#">Brand Identity</a>
                    </div>
                </div>
            </div>
            <!-- Single gallery Item Start -->
            <div class="single_gallery_item bi">
                <!-- <img src="img/portfolio-img/2.jpg" alt=""> -->
                <img src="<?php echo get_template_directory_uri()?>/img/portfolio-img/2.jpg" alt="">
                <div class="gallery-hover-overlay d-flex align-items-center justify-content-center">
                    <div class="port-hover-text text-center">
                        <h4>DFR Corp. Branding</h4>
                        <a href="#">Brand Identity</a>
                    </div>
                </div>
            </div>
            <!-- Single gallery Item Start -->
            <div class="single_gallery_item gd bi">
                <!-- <img src="img/portfolio-img/3.jpg" alt=""> -->
                <img src="<?php echo get_template_directory_uri()?>/img/portfolio-img/3.jpg" alt="">
                <div class="gallery-hover-overlay d-flex align-items-center justify-content-center">
                    <div class="port-hover-text text-center">
                        <h4>DFR Corp. Branding</h4>
                        <a href="#">Brand Identity</a>
                    </div>
                </div>
            </div>
            <!-- Single gallery Item Start -->
            <div class="single_gallery_item pho">
                <!-- <img src="img/portfolio-img/4.jpg" alt=""> -->
                <img src="<?php echo get_template_directory_uri()?>/img/portfolio-img/4.jpg" alt="">
                <div class="gallery-hover-overlay d-flex align-items-center justify-content-center">
                    <div class="port-hover-text text-center">
                        <h4>DFR Corp. Branding</h4>
                        <a href="#">Brand Identity</a>
                    </div>
                </div>
            </div>
            <!-- Single gallery Item Start -->
            <div class="single_gallery_item pho">
                <!-- <img src="img/portfolio-img/5.jpg" alt=""> -->
                <img src="<?php echo get_template_directory_uri()?>/img/portfolio-img/5.jpg" alt="">
                <div class="gallery-hover-overlay d-flex align-items-center justify-content-center">
                    <div class="port-hover-text text-center">
                        <h4>DFR Corp. Branding</h4>
                        <a href="#">Brand Identity</a>
                    </div>
                </div>
            </div>
            <!-- Single gallery Item Start -->
            <div class="single_gallery_item wd pc">
                <!-- <img src="img/portfolio-img/6.jpg" alt=""> -->
                <img src="<?php echo get_template_directory_uri()?>/img/portfolio-img/6.jpg" alt="">
                <div class="gallery-hover-overlay d-flex align-items-center justify-content-center">
                    <div class="port-hover-text text-center">
                        <h4>DFR Corp. Branding</h4>
                        <a href="#">Brand Identity</a>
                    </div>
                </div>
            </div>
            <!-- Single gallery Item Start -->
            <div class="single_gallery_item wd">
                <!-- <img src="img/portfolio-img/7.jpg" alt=""> -->
                <img src="<?php echo get_template_directory_uri()?>/img/portfolio-img/7.jpg" alt="">
                <div class="gallery-hover-overlay d-flex align-items-center justify-content-center">
                    <div class="port-hover-text text-center">
                        <h4>DFR Corp. Branding</h4>
                        <a href="#">Brand Identity</a>
                    </div>
                </div>
            </div>
            <!-- Single gallery Item Start -->
            <div class="single_gallery_item pc">
                <!-- <img src="img/portfolio-img/8.jpg" alt=""> -->
                <img src="<?php echo get_template_directory_uri()?>/img/portfolio-img/8.jpg" alt="">
                <div class="gallery-hover-overlay d-flex align-items-center justify-content-center">
                    <div class="port-hover-text text-center">
                        <h4>DFR Corp. Branding</h4>
                        <a href="#">Brand Identity</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Portfolio Area End ***** -->

    
     <!-- ***** Service Area Start ***** -->

     <section class="service-area yolo">
        <div class="container-fluid">
            <div class="row"> 
                   <div class="col-sm-12">      
                        <h1 id="services.html" class="choose">WHY CHOOSE US</h1>
                        <p class="title6"> LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISICING ELIT,<br>
                        SED DO EIUSMOD TEMPOR INCIDIDUNT UT LABORE ET DOLORE</p>
                        <div class="row">
                            <div class="col-sm-3 chooseus-block no-padding-x"> 
                                <div class="service">
                                       
                                    <h4> MULTILINGUAL</h4>
                                    <p class="first"> Lorem ipsum dolor sit ametcon sectetur adipisicing elit,sed doiusmod tempor </p>
                                    <i class="fas fa-pills i3"></i>
                                     </div>
                                </div>
                            <div class="col-sm-3 no-padding-x "> 
                                <div class="service">
                                    <h4>WOOCOMMERCE</h4>
                                    <p class="first" >Lorem ipsum dolor sit ametcon sectetur adipisicing elit,sed doiusmod tempor</p>
                                    <i  class="fas fa-biohazard i2"></i>
                                </div>
                            </div>
                            <div class="col-sm-3 no-padding-x"> 
                                <div class="service">
                                <h4>POWERFUL</h4>
                                <p class="first">Lorem ipsum dolor sit ametcon sectetur adipisicing elit,sed doiusmod tempor</p>
                                <i class="fab fa-cloudsmith i3"></i>
                                </div>
                            </div>
                            <div class="col-sm-3 no-padding-x"> 
                                <div class="service">
                                    <h4>FLEXIBLE</h4>
                                    <p class="first">Lorem ipsum dolor sit ametcon sectetur adipisicing elit,sed doiusmod tempor</p>
                                    <i class="fas fa-shield-alt i3"></i>
                                </div>
                            </div>
                            <div class="col-sm-3 no-padding-x "> 
                                    <div class="service">
                                        <h4>FREE SUPPORTE</h4>
                                        <p class="first" >Lorem ipsum dolor sit ametcon sectetur adipisicing elit,sed doiusmod tempor</p>
                                        <i class="fas fa-magic i2"></i>
                                    </div>
                                </div>
                                <div class="col-sm-3 no-padding-x "> 
                                        <div class="service">
                                            <h4>MIGHTY ADMIN</h4>
                                            <p class="first" >Lorem ipsum dolor sit ametcon sectetur adipisicing elit,sed doiusmod tempor</p>
                                            <i class="far fa-edit i2"></i>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 no-padding-x "> 
                                            <div class="service">
                                                <h4>PIXEL PERFECT</h4>
                                                <p class="first">Lorem ipsum dolor sit ametcon sectetur adipisicing elit,sed doiusmod tempor</p>
                                                <i class="fas fa-vial i3"></i>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 no-padding-x "> 
                                                <div class="service">
                                                    <h4>FAST LOADING</h4>
                                                    <p class="first">Lorem ipsum dolor sit ametcon sectetur adipisicing elit,sed doiusmod tempor</p>
                                                    <i class="fas fa-database i3"></i>
                                                </div>
                                            </div>
                     </div>
                </div>
            </div> 
    </section>         
               
            
    <!-- ***** Service Area End ***** -->

    

     <!-- ***** Clients Area Start ***** -->
     <section class="mosh-clients-area section_padding_100 clearfix yolo">
        <div class="container ">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <p>clients</p>
                        <h2 id="aboutus.php">All our clients love our work</h2>
                    </div>
                </div>
                <div class="col-12">
                    <div class="clients-logo-area d-sm-flex align-items-center justify-content-between">
                    <!-- <a href="#"><img src="img/clients-img/1.png" alt=""> -->
                        <a href="#"><img src="<?php echo get_template_directory_uri()?>/img/clients-img/1.png" alt=""></a>
                        <!-- <a href="#"><img src="img/clients-img/2.png" alt=""> -->
                        <a href="#"><img src="<?php echo get_template_directory_uri()?>/img/clients-img/2.png" alt=""></a>
                        <!-- <a href="#"><img src="img/clients-img/3.png" alt=""> -->
                        <a href="#"><img src="<?php echo get_template_directory_uri()?>/img/clients-img/3.png" alt=""></a>
                        <!-- <a href="#"><img src="img/clients-img/4.png" alt=""> -->
                        <a href="#"><img src="<?php echo get_template_directory_uri()?>/img/clients-img/4.png" alt=""></a>
                        <!-- <a href="#"><img src="img/clients-img/5.png" alt=""> -->
                        <a href="#"><img src="<?php echo get_template_directory_uri()?>/img/clients-img/5.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Clients Area End ***** -->

    <!-- ***** Features Area Start ***** -->
    <section class="mosh-features-area section_padding_100 clearfix">
        <div class="container-fluid">
            <div class="row justify-content-end">
                <div class="col-12 col-md-6">
                    <div class="section-heading">
                        <p>clients</p>
                        <h2>What you get if you start your business with us</h2>
                    </div>
                    <div class="features-content">
                        <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mat tis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio ves tibul. Nec odio vestibulum est mattis effic iturut magna. Pellente sque sita met tellus blandit. Etiam nec odio.</p>
                        <!-- Progress Bar Content Area -->
                        <div class="features-progress-bar mt-50">
                            <!-- Single Progress Bar -->
                            <div class="single_progress_bar mb-15 wow fadeInUp" data-wow-delay="0.2s">
                                <p>Development</p>
                                <div id="bar1" class="barfiller">
                                    <div class="tipWrap">
                                        <span class="tip"></span>
                                    </div>
                                    <span class="fill" data-percentage="70"></span>
                                </div>
                            </div>
                            <!-- Single Progress Bar -->
                            <div class="single_progress_bar mb-15 wow fadeInUp" data-wow-delay="0.4s">
                                <p>Design</p>
                                <div id="bar2" class="barfiller">
                                    <div class="tipWrap">
                                        <span class="tip"></span>
                                    </div>
                                    <span class="fill" data-percentage="90"></span>
                                </div>
                            </div>
                            <!-- Single Progress Bar -->
                            <div class="single_progress_bar mb-15 wow fadeInUp" data-wow-delay="0.6s">
                                <p>SEO</p>
                                <div id="bar3" class="barfiller">
                                    <div class="tipWrap">
                                        <span class="tip"></span>
                                    </div>
                                    <span class="fill" data-percentage="55"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature Thumb -->
        <div class="features-img">
            <!-- <img src="img/bg-img/features.png" alt=""> -->
            <img src="<?php echo get_template_directory_uri()?>/img/bg-img/features.png" alt="">
        </div>
    </section>
    <!-- ***** Feature Area End ***** -->

    <!-- ***** Service Area Start ***** -->
    <div class="container-fluid">
        <div class="row" >
            <div class="col-sm-12">
                <div class="space">
                    <div class="row">
                    <div class="col-sm-4">
                         <div class="start"> 
                                 <div class="start10">
                                         <i class="fas fa-trophy font end"></i>
                                 <h2 class="tagline"> CREATIVE DESIGNS </h2> 
                                 <p  class="duis"> Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum</p>
                                 </div>
                             </div>
                         </div>
                             <div class="col-sm-4">
                                     <div class="start1">
                                             <div class="start11">
                                                     <i class="fas fa-keyboard end"></i>
                                             <h2 class="tagline"> CODING & USABILITY  </h2> 
                                             <p class="duis"> Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum</p>
                                             </div>
                                         </div>
                             </div>
                                         <div class="col-sm-4">
                                                 <div class="start2">   
                                                         <div class="start12">                              
                                                                 <i class="fas fa-clipboard-check end"></i>
                                                         <h2 class="tagline"> BRAND CONSULTING </h2> 
                                                         <p  class="duis"> Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum</p>
                                                         </div>
                                                     </div>
                                                     </div>
                             </div>
                    </div>
     
                </div>
            </div>
        </div>

    </div>
    <!-- ***** Service Area End ***** -->

    <!-- ***** Workflow Area Start ***** -->
    <section class="mosh-workflow-area clearfix" style="background-image: url(nyc-Gyttylmages-499564613 (1))">
            <div class="row">
                <div class="col-sm-12">
                    <div class="contactus">
                        <div class="maintext">
                            <h1 style="color:whitesmoke"> CONTACT US</h1>
                                <div class="row">
                                        <div class="col-sm-3">
                                                <div class="contacts">
                                                <div class="gem-icon ">
                                                
                                                    </div>
                                                    <i class="fas fa-map-marked-alt qwerty"></i>   
                                                <h4 style="color:white"> ADDRESS</h4>
                                                <p style="color: white"> 908 New Hampshire Avenue</br>
                                                        Northwest #100, Washington, DC</br>
                                                        20037, United States<br>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                    <div class="contacts">
                                                    <i class="fas fa-phone qwerty1" ></i>
                                                    <h4 style="color:white"> PHONES</h4>
                                                    <p style="color:white"> Phone: +1 916-875-2235</br>
                                                            Mobile: +1 916-875-2235<br>
                                                            Fax: +1 916-875-2235</br>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                        <div class="contacts">
                                                            <i class="far fa-envelope qwerty2"></i>
                                                            <h4 style="color:white"> CONTACTS</h4>
                                                        <p style="color:white"> info@domain.ltd</br>
                                                                thegem@domain.ltd</br>
                                                                www.codex-themes.com</br>
                                                            </p>
                                                        </div>
                                                    </div>
                                                        <div class="col-sm-3">
                                                                <div class="contacts">
                                                                <i class="far fa-clock qwerty3"></i>
                                                                <h4 style="color:white"> WORKING HOURS</h4>
                                                                <p style="color:white"> Monday-Friday: 9:00 – 18:00</br>
                                                                        Saturday: 11:00 – 17:00</br>
                                                                        Sunday: Closed</br>
                                                                    </p>
                                                                </div>
                                                            </div>

                                                            
                                </div>

                                    <div class="container">

                                        <div class="row">
                                                  <div class="col-sm-4">
                                                      <div class="form-group">
                                                        <label for="exampleInputEmail1">Name*</label>
                                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name*">
                                                      </div>
                                                  </div>
                                                  <div class="col-sm-4">
                                                      <div class="form-group">
                                                          <label for="exampleInputEmail1">Email*</label>
                                                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email*">
                                                      </div>
                                                  </div>                                               
                                                  <div class="col-sm-4">
                                                          <div class="form-group">
                                                              <label for="exampleInputEmail1">Website*</label>
                                                              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Website*">
                                                          </div>
                                                      </div>                          
                                          </div>
                                    <div>
                                        <div class="row">
                                        <div class="col-sm-12">
                                                <div class="form-group">
                                                        <label for="exampleFormControlTextarea1">message</label>
                                                        <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Message*" rows="11"></textarea>
                                                      </div>
                                                    </div>             
                                    </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-sm-12">
                                                <button type="submit" class="btn btn-primary btn-full">Submit Message</button>
                                            </div>
                                            </div>
                                         </div>                                    
                        </div>
                    </div>                 
            </div>   
    </section>
    

        
    <!-- ***** Service Area End ***** -->



    <!-- ***** CTA Area Start ***** -->
    <section class="mosh-call-to-action-area bg-img bg-overlay section_padding_100" style="background-image: url(<?php echo get_template_directory_uri()?>/img/bg-img/cta.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cta-content text-center wow fadeIn" data-wow-delay="0.5s">
                        <div class="section-heading">
                            <p>give us a shout</p>
                            <h2>Are you Ready to have a Talk?</h2>
                            <a href="contact.html" class="btn mosh-btn">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** CTA Area End ***** -->

<?php get_footer();