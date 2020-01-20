  
          <footer id="page-footer-container" class="page-footer-container">
                <div class="container pt-5">
                  <div class="row">
                    <div class="col-md-6 col-sm-12 col-lg-3 mb-3 text-center">
                            <img src="assets/images/rtls-logo.png" alt="Logo" class="img-fluid">
                    </div>
                    <div class="col-md-12 col-lg-9 col-sm-12">

                      <div class="col-md-4 col-sm-6 col-6 p-0 float-left mb-3">
                            <h5 class="mb-4 font-weight-bold text-uppercase">Products</h5>
                            <hr>
                          <ul class="list-group">
                            <li class="list-group-item bg-transparent border-0 p-0 mb-2"><a href="software">Software</a></li>
                            <li class="list-group-item bg-transparent border-0 p-0 mb-2"><a href="hardware">Hardware</a></li>
                          </ul>
                      </div>

                      <div class="col-md-4 col-sm-6 col-6 p-0 float-left mb-3">
                            <h5 class="mb-4 font-weight-bold text-uppercase">Applications</h5>
                            <hr>
                          <ul class="list-group">
                            <li class="list-group-item bg-transparent border-0 p-0 mb-2"><a href="asset-tracking">Asset Tracking</a></li>
                            <li class="list-group-item bg-transparent border-0 p-0 mb-2"><a href="personnel-safety">Personnel Safety</a></li>
                            <li class="list-group-item bg-transparent border-0 p-0 mb-2"><a href="hand-hygiene-compliance">Hand Hygiene Compliance</a></li>
                            <li class="list-group-item bg-transparent border-0 p-0 mb-2"><a href="temperature-monitoring">Temperature Monitoring</a></li>
                            <li class="list-group-item bg-transparent border-0 p-0 mb-2"><a href="workflow-process-capture">Workflow Process Capture</a></li>
                          </ul>
                      </div>  

                      <div class="col-md-4 col-sm-6 col-6 mb-3 p-0 float-left">
                        <h5 class="mb-4 font-weight-bold text-uppercase">More Info</h5>
                        <hr>

                        <ul class="list-group">
                          <!-- <li class="list-group-item bg-transparent border-0 p-0 mb-2">
                            <a href="about">About Us</a>
                          </li> -->
                          <li class="list-group-item bg-transparent border-0 p-0 mb-2">
                            <a href="contact"> Contact Us</a>       
                          </li class="list-group-item bg-transparent border-0 p-0 mb-2">
                        </ul>
                      </div>
              
                    </div>
                      <div class="col-md-12">
                        <div class="py-4 d-flex justify-content-center align-items-center footer-copyright">
                          <p class="">Copyright © <?= date('Y'); ?> - <strong>RTLS Advisory Services</strong></p>
                        </div>
                      </div>
                  </div>
                </div>
          </footer>
  
  </main>

  <script src="assets/js/vendor/modernizr-3.7.1.min.js"></script>

  <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.4.1.min.js"><\/script>')</script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  
  <script>
  
    $(document).ready(function() {
      window.onload = function () {
        $("html").css('overflow-y','initial');
        $(".loader__main_container").fadeOut(500, function() {
          $('.loader__main_container').remove();
        })
      }
    })
  </script>
  <script src="dist/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/main.js"></script>
  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set','transport','beacon'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async></script>
</body>

</html>
