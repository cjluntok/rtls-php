<header id="page-header" class="page-header-container">
                <div class="page-header-top">
                    <div class="page-header-top-items container">
                        <div class="row">
                            <div class="col-md-7 col-lg-8 col-sm-2 hide-on-mobile">
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
                                <li class="nav-item dropdown <?= ($title == 'software' or $title == 'hardware') ? 'active' : ''?>">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Products
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item <?= ($title == 'software') ? 'active' : ''?>" href="software"><i class="fas fa-caret-right"></i>Software</a>
                                            <a class="dropdown-item <?= ($title == 'hardware') ? 'active' : ''?>" href="hardware"><i class="fas fa-caret-right"></i>Hardware</a>
                                        </div>
                                </li>
                                <li class="nav-item dropdown <?= ($page == 'solution') ? 'active' : ''?>">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Applications
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item <?= ($name == 'asset-tracking') ? 'active' : ''?>" href="asset-tracking"><i class="fas fa-caret-right"></i>Asset Tracking</a>
                                            <a class="dropdown-item <?= ($name == 'personnel-safety') ? 'active' : ''?>" href="personnel-safety"><i class="fas fa-caret-right"></i>Personnel Safety</a>
                                            <a class="dropdown-item <?= ($name == 'hand-hygiene-compliance') ? 'active' : ''?>" href="hand-hygiene-compliance"><i class="fas fa-caret-right"></i>Hand Hygiene Compliance</a>
                                            <a class="dropdown-item <?= ($name == 'temperature-monitoring') ? 'active' : ''?>" href="temperature-monitoring"><i class="fas fa-caret-right"></i>Temperature Monitoring</a>
                                            <a class="dropdown-item <?= ($name == 'workflow-process-capture') ? 'active' : ''?>" href="workflow-process-capture"><i class="fas fa-caret-right"></i>Workflow & Process Capture</a>

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