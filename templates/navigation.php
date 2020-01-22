<header id="page-header" class="page-header-container">
                <div class="page-header-top">
                    <div class="page-header-top-items container">
                        <div class="row">
                            <div class="col-md-7 col-lg-8 col-sm-2 hide-on-mobile" id="top-text">
                                <p class="">The Experts in Real-Time Location Systems</p>
                            </div>
                            <div class="col-md-3 col-lg-2 col-sm-6  top-item-buy">
                                <a href="tel:+612-9412-2100"><i class="fas fa-phone-alt"></i> +(612) 9412 2100</a>
                            </div>
                            <div class="col-md-2 col-lg-2 col-sm-6  top-item-enquiry">
                                <a href="contact#form"><i class="fas fa-comment-dots"></i> Enquiry</a>
                            </div>
                        </div>
                    </div>
                </div>

            <div id="page-nav-container" class="page-header-content">
                <div class="container navigation-container">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <div id="logo" class="col-sm-8 col-md-6 col-lg-3 page-logo">                                
                                <a class="navbar-brand" href="../airista"><img class="img-fluid" src="assets/images/rtls-logo.png" alt="Logo"></a>                                
                            </div>
                            
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                              <span class="navbar-toggler-icon"></span>
                            </button>
                          
                            <div class="collapse navbar-collapse col-sm-12 col-md-12 col-lg-9" id="navbarSupportedContent">
                              <ul class="navbar-nav">

                                <li class="nav-item <?php if($title == 'home') echo 'active';?>">
                                  <a class="nav-link" href="../airista">Home</a>
                                </li>
                                <li class="nav-item dropdown <?= ($page == 'tech' ) ? 'active' : ''?>">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Techologies
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item <?= ($name == 'wifi') ? 'active' : ''?>" href="wifi-technology"><i class="fas fa-wifi"></i>Wi-Fi RTLS Technology</a>
                                            <a class="dropdown-item <?= ($name == 'cellular') ? 'active' : ''?>" href="cellular-technology"><i class="fas fa-mobile-alt"></i>Cellular RTLS Technology</a>
                                            <a class="dropdown-item <?= ($name == 'rf') ? 'active' : ''?>" href="rf-technology"><i class="fas fa-broadcast-tower"></i>Radio Frequency RTLS Technology</a>
                                            <a class="dropdown-item <?= ($name == 'bluetooth') ? 'active' : ''?>" href="bluetooth-technology"><i class="fab fa-bluetooth"></i>Bluetooth RTLS Technology</a>
                                        </div>
                                </li>
                                <li class="nav-item dropdown <?= ($page == 'app') ? 'active' : ''?>">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Examples
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item <?= ($name == 'airista-app') ? 'active' : ''?>" href="airista-application"><i class="fas fa-caret-right"></i>Airista Application</a>
                                            <a class="dropdown-item <?= ($name == 'twig-com-app') ? 'active' : ''?>" href="twig-com-application"><i class="fas fa-caret-right"></i>TWIG Com Application</a>
                                            <a class="dropdown-item <?= ($name == 'mini-paccs-app') ? 'active' : ''?>" href="mini-paccs-application"><i class="fas fa-caret-right"></i>Mini PACCS Application</a>
                                            <a class="dropdown-item <?= ($name == 'quupa-app') ? 'active' : ''?>" href="quuppa-application"><i class="fas fa-caret-right"></i>Quuppa Application</a>

                                        </div>
                                </li>
                                <li class="nav-item <?= ($name == 'contact') ? 'active' : ''?>">
                                    <a class="nav-link" href="contact">Contact Us</a>
                                </li>

                            </div>
                          </nav>
                    </div>
                </div>
            </div>
</header>