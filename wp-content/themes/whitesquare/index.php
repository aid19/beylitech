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
                                    <li class="nav-item active homepage-border"><a class="nav-link" href="index.html">Ana səhifə</a></li>
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
                                    <!-- <li class="nav-item"><a class="nav-link" href="#blog.html">Our Team</a></li> -->
                                    <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#order-project">Xidmətlər</a></li>
                                    <li class="nav-item"><a class="nav-link" href="/contacts">Əlaqə</a></li>
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
    <div class="carousel-inner animated slideInLeft">
      <div class="carousel-item active">   
          <img src="<?php echo get_template_directory_uri()?>/img/blog-img/background1.png" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
              <a class="btn btn-lg btn-primary animated" href="#order-project">Layihə Sifariş edin</a>
              <div class="slider-main-title">
                  <h3 class="maintext10">BEYLITECH</h3>
                  <p>CREATIVE TECHNOLOGIES</p>
                </div>
            </div>       
      </div>
      <div class="carousel-item">
            <img src="<?php echo get_template_directory_uri()?>/img/blog-img/background2.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <a class="btn btn-lg btn-primary" href="#order-project">Layihə Sifariş edin</a>
                <div class="slider-main-title">
                    <h3 class="maintext10">BEYLITECH</h3>
                    <p>CREATIVE TECHNOLOGIES</p>
                </div>
            </div>          
      </div>
      <div class="carousel-item">
          <img src="<?php echo get_template_directory_uri()?>/img/blog-img/background3.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
              <a class="btn btn-lg btn-primary" href="#order-project">Layihə Sifariş edin</a>
              <div class="slider-main-title">
                  <h3 class="maintext10">BEYLITECH</h3>
                  <p>CREATIVE TECHNOLOGIES</p>
                </div>
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

        <section class="area-platform-info" id="order-project">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                    <div class="orderproject">
                    <h1>Layihə sifariş etmək</h1>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 a1">
                    <div class="a11 animated">
                        <h3 class="landing">Landing </h3>
                        <p class="project-details">*inexpensive website for business</br>
                        *brand awareness online</br>
                        *increase in sales and profits</br>
                        </p> 
                    </div>
                    </div>
                    <div class="col-sm-4 a1">
                    <div class="a11 animated">
                        <h3 class="landing">Online Store</h3>
                        <p class="project-details">*for the sale of goods and services</br>
                        *application management</br>
                        *stylish modern design</br>
                        </p> 
                    </div>
                    </div>
                    <div class="col-sm-4 a1">
                    <div class="a11 animated">
                        <h3 class="landing">Blog </h3>
                        <p class="project-details">*large amount of content</br>
                        *registration and users</br>
                        *various modules for your tasks</br>
                        </p> 
                    </div>
                    </div>
                </div>
            </div>
       
            <div class="container">
                <form action="" class="order-form">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="input"></label>
                                <input type="text" class="form-control" id="email" placeholder="Elektron poçt">
                            </div>
                        </div>
                    
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="inputAddress2"></label>
                                <input type="text" class="form-control" id="message" placeholder="Mesaj">
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <button id="form-submit" type="button" class="btn btn-lg btn-gold btn-order-project">Sifariş et</button>
                        </div>
                    </div>
                </form>
            </div>
    </section>


    <!-- ***** Portfolio Area ***** -->
    <section class="portfolio-area" id="portfolio">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="text-center">Onlayn portfolio</h1>
                </div>
            </div>


            <div class="row">
                <div class="col-sm-4 no-padding-x">
                    <div class="portfolio-item">
                        <figure class="imghvr-push-right" style="background-color:white;">
                            <img src="<?php echo get_template_directory_uri()?>/img/portfolio-img/insure.png" height="100%">
                            <figcaption style="background-color:#09103a;">
                                <h1>insure.az</h1>
                                <p>online sığorta portalı</p>
                            </figcaption>
                        </figure>
                    </div>
                </div>

                <div class="col-sm-4 no-padding-x">
                    <div class="portfolio-item">
                        <figure class="imghvr-push-right" style="background-color:white;">
                            <img src="<?php echo get_template_directory_uri()?>/img/portfolio-img/layf.png" height="100%">
                            <figcaption style="background-color:#09103a;">
                                <h1>layf.az</h1>
                                <p>heyriyyə ictimai birliyi</p>
                            </figcaption>
                        </figure>
                    </div>
                </div>

                <div class="col-sm-4 no-padding-x">
                    <div class="portfolio-item">
                        <figure class="imghvr-push-right" style="background-color:white;">
                            <img src="<?php echo get_template_directory_uri()?>/img/portfolio-img/beyli.png" height="100%">
                            <figcaption style="background-color:#09103a;">
                                <h1>beyli.az</h1>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- ***** Portfolio Area End ***** -->

    
    <!-- ***** Features Area Start ***** -->
    <section class="mosh-features-area section_padding_100 clearfix">
        <div class="container">
            <div class="row justify-content-end">



                <div class="col-12 col-md-4 col-md-offset-2">
                    <div class="section-heading">
                        <img src="<?php echo get_template_directory_uri()?>/img/blog-img/logo-footer.png" alt="">
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div class="section-heading">
                        <h2>Bizimlə işinizə başlasanız nə əldə edirsiniz</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Feature Area End ***** -->


     <!-- ***** Service Area Start ***** -->
     <section class="service-area yollo">
        <div class="container-fluid">
            <div class="row"> 
                   <div class="col-sm-12">      
                        <div class="row">
                            <div class="col-sm-3 no-padding-x" style="background:#0e1647"> 
                                <div class="service">
                                    <h4>WORDPRESS</h4>
                                    <p class="first">Wordpress sistemi ilə inteqrasiya</p>
                                    <i class="fab fa-wordpress i3"></i>                                
                                </div>
                            </div>

                            <div class="col-sm-3 no-padding-x"> 
                                <div class="service">
                                    <h4>MÜKƏMMƏL RƏNGLƏR</h4>
                                    <p class="first">Mükəmməl rənglərin seçimi və gözəl dizayn</p>
                                    <i class="fas fa-vial i3"></i>
                                </div>
                            </div>

                            <div class="col-sm-3 no-padding-x" style="background:#0e1647"> 
                                <div class="service">
                                <h4>OPENCART</h4>
                                <p class="first">Opencart sistemi ilə inteqrasiya</p>
                                <i class="fab fa-opencart i3"></i>
                                </div>
                            </div>
                            
                            <div class="col-sm-3 no-padding-x"> 
                                <div class="service">
                                    <h4>DƏSTƏK</h4>
                                    <p class="first">Başa çatmış layihələrə iT dəstək</p>
                                    <i class="fas fa-magic i3"></i>
                                </div>
                            </div>
                            
                            <div class="col-sm-3 no-padding-x"> 
                                <div class="service">
                                    <h4>SÜRƏT</h4>
                                    <p class="first" >Layihələrin sürətli işləməsi</p>
                                    <i class="fas fa-tachometer-alt i3"></i>
                                </div>
                            </div>
                            <div class="col-sm-3 no-padding-x" style="background:#0e1647"> 
                                <div class="service">
                                    <h4>WOOCOMMERCE</h4>
                                    <p class="first">Woocommerce sistemi ilə inteqrasiya</p>
                                    <i class="far fa-edit i3"></i>
                                </div>
                            </div>
                            <div class="col-sm-3 no-padding-x"> 
                                <div class="service">
                                    <h4>SÜRƏTLI YÜKLƏMƏ</h4>
                                    <p class="first" >Layihələrin google page insight sisteminde optimallasdirilması</p>
                                    <i class="fas fa-database i3"></i>
                                </div>
                            </div>
                            <div class="col-sm-3 no-padding-x" style="background:#0e1647"> 
                                <div class="service">
                                    <h4>BITRIX</h4>
                                    <p class="first">Bitrix və 1C sistemi ilə inteqrasiya</p>
                                    <i class="far fa-edit i3"></i>
                                </div>
                            </div>
                     </div>
                </div>
            </div> 
    </section>         
               
            
    <!-- ***** Service Area End ***** -->



<?php get_footer();