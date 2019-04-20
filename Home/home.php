<?php include '../headerfooter/header.php'; ?>

<section id="intro" class="clearfix">
    <div class="container">
    </div>
  </section>
  <main id="main">
    <section id="about">
      <div class="container">
        <header class="section-header">
        </header>
        <div class="row align-items-center about-container">
          <div class="col-lg-3 content order-lg-1 order-2">
            <h4 class="title"><a href="">VISIT</br>PLACES</a></h4>
          </div>
          <div class="col-lg-9 background order-lg-1 order-2">
             <p><strong>
              Explore and discover Toronto's restaurant,<br/> culture and services and fun things to do.
            </strong></p>
          </div>
        </div>

        <div class="row about-extra placeImage">
          <div class="col-lg-6 wow fadeInUp">
            <img src="images/event.jpg" class="img-fluid" alt="">
          </div>
           <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0">
            <img src="images/booth.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0">
            
          </div>
        </div>

        <div class="row about-extra placeImage">
          <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0">
            <img src="images/restaurant.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0">
            <img src="images/bridge.jpg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 wow fadeInUp pt-4 pt-lg-0 order-2 order-lg-1">
          </div>
          
        </div>

      </div>
    </section><!-- #about -->


    <section id="why-us" class="wow fadeIn">
      <div class="container">
        <header class="section-header">
          <h3>Explore Best of Toranto</h3>
        </header>

        <div class="row row-eq-height justify-content-center">

          <div class="col-lg-3 mb-3">
            <div class="card wow bounceInUp">
                <i class="fa fa-compass"></i>
              <div class="card-body">
                <h5 class="card-title">Explore</h5>
              </div>
            </div>
          </div>

          <div class="col-lg-3 mb-3">
            <div class="card wow bounceInUp">
                <i class="fa fa-line-chart"></i>
              <div class="card-body">
                <h5 class="card-title">Increase Revenue</h5>
              </div>
            </div>
          </div>

          <div class="col-lg-3 mb-3">
            <div class="card wow bounceInUp">
                <i class="fa fa-map"></i>
              <div class="card-body">
                <h5 class="card-title">Easy Location</h5>
              </div>
            </div>
          </div>

        <div class="col-lg-3 mb-3">
            <div class="card wow bounceInUp">
                <i class="fa fa-desktop"></i>
              <div class="card-body">
                <h5 class="card-title">Cross Platform</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio" class="clearfix">
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">Blogs</h3>
        </header>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <img src="images/booth.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Blog 1</a></h4>
                <div>
                  <a href="#" class="link-details" title="Read More"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="images/booth.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Blog 2</a></h4>
                <div>
                  <a href="#" class="link-details" title="Read More"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <img src="images/booth.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Blog 3</a></h4>
                <div>
                  <a href="#" class="link-details" title="Read More"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- #portfolio -->

    <section id="contact">
      <div class="container-fluid">
        
        <div class="row wow fadeInUp">
          <div class="col-lg-6 business">
          <!-- <div class="business"> -->
            <div class="map mb-4 mb-lg-0 title callaction">
             <p>Ready to do</p></br><p>Business</p></br><p>With US?</p>
            </div>
            <!-- </div> -->
          </div>

          <div class="col-lg-6">

            <div class="form">
              <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div>
              <form action="" method="post" role="form" class="contactForm">
                      <div class="section-header">
          <h3>Contact Us</h3>
        </div>

                <div class="form-row">
                  <div class="form-group col-lg-12">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validation"></div>
                </div>
                <div class="text-center"><button type="submit" title="Send Message">Send Message</button></div>
              </form>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #contact -->

  </main>
  <?php include '../headerfooter/footer.php'; ?>