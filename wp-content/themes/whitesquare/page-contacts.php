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
                                        <li class="nav-item"><a class="nav-link" href="aboutus.php">Portfolio</a></li>
                                        <li class="nav-item"><a class="nav-link" href="services.html">Xidmətlər</a></li>
                                        <li class="nav-item"><a class="nav-link" href="portfolio.html">Əlaqə</a></li>
                                    </ul>
                                    <!-- Menu Area End -->
                     
                                </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->

<section class="mosh-portfolio-area section_padding_100_0 clearfix yolo">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="cts">
                    <h1>Contacts</h1>
                        <div class="row">
                            <div class="col-sm-2">
                                <div class="contact-item">   
                                    <div class="contact-block">        
                                        <i class="fas fa-phone card" style="color: #ffffff;  background-color: #09103a;"></i>
                                            <h6 class="tekst">Phone</h6>
                                                <p style="color: #09103a;">
                                                    <a> +994 (12) 408 20 02</a>
                                                </p>
                                    </div>
                                </div>   
                                <div class="contact-item"> 
                                    <div class="contact-block">           
                                        <i class="fas fa-envelope-open-text card" style="color: #ffffff;  background-color: #09103a;"></i>
                                            <h6 class="tekst">E-mail</h6>
                                                <p style="color: #09103a;">
                                                    <a>support@beylitech.az</a>
                                                </p>
                                    </div>
                                </div> 
                                <div class="contact-item"> 
                                    <div class="contact-block">            
                                        <i class="far fa-address-card card" style="color: #ffffff;  background-color: #09103a;"></i>
                                            <h6 class="tekst">Adress</h6>
                                                <p style="color: #09103a;">
                                                    <a>1/25 Ahmad Racabli , Chinar Park Business <br>
                                                    Center 3A Baku, Azerbaijan
                                                    </a>
                                                </p>
                                    </div>
                                </div>        
                            </div>
                            <div class="col-sm-10">
                                <div class="map-info">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d759.4437052739687!2d49.85848872860668!3d40.41383895051471!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x403087f1fad1d885%3A0xc62a900f7ed8c732!2sBeyli%20Group!5e0!3m2!1sru!2s!4v1567773306378!5m2!1sru!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                                </div>
                              </div>
                     </div>
                </div>
            </div>
        </div>
    </div>
</section>

    


<?php get_footer();