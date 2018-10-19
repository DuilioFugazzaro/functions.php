<?php get_header(); ?>

<!--- Image Slider -->

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

  <div class="carousel-inner">

    <?php
          $args = array (

          'post_type' => 'slide',
          'post_per_page' => -1

          );
          $slide = new WP_Query($args);
            $x=0;

         while($slide->have_posts()) : $slide->the_post(); $x++;?>

         <?php $url_slide = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
          $url_slide = $url_slide[0];  ?>

    <div class="carousel-item <?php if($x==1) {echo 'active';} ?>" style="min-height: 800px;background: linear-gradient(rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url(<?php echo $url_slide ?>)no-repeat center center; background-size:cover; ">
      <div class="carousel-caption carousel-caption-custom">

        <h1 class="slider display-1 text-left slider-custom wow bounceInLeft" data-wow-delay="0.8s"><?php the_title(); ?></h1>
        <div class="text-caption">
        <p><?php the_content(); ?></p>
        </div>
        <button type="button" class="btn btn-primary btn-lg btn-custom-slider  wow fadeIn" data-wow-delay="0.7s"><?php global $ts; echo '' . $ts['opt-text'];?></button>
      </div>
    </div>

  <?php endwhile; ?>
  <?php wp_reset_query(); ?>
  <?php wp_reset_postdata(); ?>
  </div>

  <ol class="carousel-indicators">
        <?php for ($i=0; $i < $x ; $i++) { ?>
          <li data-target="#main-slider" data-slide-to="<?php echo $i ?>" class="<?php if($i==0) {echo 'active';} ?>"></li>
        <?php } ?>
  </ol>

  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
  <section class="slider-down">
    <div class="container">
      <div class="row no-gutters">
        <div class="col-sm-6">
          <h6 class="mt-3 mr-5 " style="color:#fff;">Limited Time Only: <u>THE BEST HOSTING DEAL OF DE YEAR</u></h6>
        </div>
        <div class="col-sm-4">
          <div class="countdown-left"></div>
          <div class="countdown-right"></div>
          <div id="getting-started" class="row justify-content-center date">
          </div>
        </div>
        <div class="col-sm-2">
          <button type="button" class="btn btn-danger btn-countdown wow fadeIn" data-wow-delay="0.3s">GET STARTED</button>
        </div>
      </div>
    </div>

  </section>

  <section id="section-1">
    <div class="container pb-5">
      <div class="row">
        <div class="col-md-4 wow fadeIn" data-wow-delay="0.1s">
          <h2 class="title-sub-carousel"><?php global $ts; echo '' . $ts['opt-text3'];?></h2>
        </div>
        <div class="col-md-8 wow fadeIn" data-wow-delay="0.3s">
          <p class="description lead"><?php global $ts; echo '' . $ts['opt-textarea-paragraph']; ?></p>
        </div>
      </div>
    </div>
    <div class="jumbotron jumbotron-fluid jumbotron-custom">

      <video autoplay muted loop poster="https://dummyimage.com/900x400/000/fff">
          <source src="<?php the_field('video_upload'); ?>"> data-src="<?php the_field('video_upload'); ?>" type="video/mp4">
          <source src="" data-src="//clips.vorwaerts-gmbh.de/big_buck_bunny.webm" type="video/webm">
          <source src="" data-src="//clips.vorwaerts-gmbh.de/big_buck_bunny.ogv" type="video/ogg">
      </video>

      <div class="container text-white">
        <div class="row">
          <div class="col-md-4 col-sm-4">

            <h1 class="text-video"><?php
              global $ts;echo '' . $ts['opt-text4'];?></h1>

          </div>
          <div class="col-md-8 col-sm-8">
            <p class="lead lead-custom mt-5 ml-5"><?php global $ts; echo '' . $ts['opt-textarea-paragraph-section-white1']; ?></p>
            <hr class="my-4">
            <button type="button" class="btn btn-primary btn-lg btn-custom-video-section mx-auto d-block   wow fadeIn" data-wow-delay="0.7s"><?php global $ts; echo '' . $ts['opt-text-button-video']; ?></button>
          </div>
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </div>
    <!-- /.jumbotron -->
  </section>

  <section id="section-white">
    <div class="container text-center wow fadeIn" data-wow-delay="0.1s">
      <div class="row">
        <div class="text">
          <div class="col-md-12 col-sm-12">
            <h2 class="text-center  project"><?php global $ts; echo '' . $ts['opt-text-first']; ?></h2>
            <h2 class="text-center project"><?php global $ts; echo '' . $ts['opt-text-second']; ?></h2>
            <h2 class="text-center display-4 project"><?php global $ts; echo '' . $ts['opt-text-third']; ?></h2>
            <p><?php global $ts; echo '' . $ts['opt-textarea-paragraph-section-white1']; ?></p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="section-red" class="wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center">
      <div class="row">
        <div class="col-md-8">
          <h2 class="wow fadeIn" data-wow-delay="0.1s">YOU ARE LOOKING FOR A DEVELOPER ADAPTED TO YOUR NEEDS..?</h2>
        </div>
        <div class="col-md-4">
          <button type="button" class="btn btn-primary btn-lg btn-custom wow fadeIn" data-wow-delay="0.3s">CONTACT US</button>
        </div>
      </div>
    </div>
  </section>
  <section id="section-image" style="background: linear-gradient(rgba(0,0,0, 0.3), rgba(0,0,0, 0.7)), url(<?php echo get_template_directory_uri() ?>/img/bg-bn3.jpg); backgroud-size: cover; background-position: center center; background-repeat: no-repeat; ">
    <div class="container text-center">
      <div class="row pl-4">
        <div class="col-md-4 col-sm-12 col-xs-12  wow fadeIn" data-wow-delay="0.3s">
          <h2 class="section-image">ABOUT CODE</h2>
          <hr class="riguardo-noi">
          <p class="text-justify section-image">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt quia minus sed atque totam, temporibus laborum cupiditate molestiae officiis, natus repudiandae, officia veritatis illo dolorem,
            tempore commodi ipsam quibusdam error eum repellat
            veniam sunt magni! Ipsa numquam iusto sed atque eius repellat officiis, praesentium dolor, aperiam magni labore laudantium qui nesciunt fuga! Beatae deserunt ab corporis reprehenderit, placeat. Officia, repellat ex, atque aut neque
            molestiae!
            Rem quae praesentium, id maxime nam. Cupiditate laborum totam reiciendis possimus corporis vero, expedita vitae maxime, quasi consectetur quibusdam perspiciatis, soluta modi ex accusantium perferendis obcaecati amet ab voluptate
            mollitia!
            Repellendus nam amet, temporibus libero.</p>
        </div>
        <div class="col-md-8 ">
          <h2 class="section-image">WITH THESE KNOWLEDGE WE REALIZE YOUR PROJECTS</h2>
          <hr class="riguardo-noi">

          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php get_template_part('collapse');?>

          <?php endwhile; else: ?>

          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>

  <section id="section-image-down" class="overlay-section" style="background: linear-gradient(rgba(0,0,0, 0.7), rgba(0,0,0, 0.7)), url(<?php echo get_template_directory_uri() ?>/img/bg-bg2.jpg); backgroud-size: cover; background-position: center center; background-repeat: no-repeat; background-attachment: fixed; position:relative; ">
    <div class="container">
      <div class="row">
        <div class="col-md-12 ">
          <h2 class="text-center  wow fadeIn" data-wow-delay="0.1s">We teach the FRIENDS of our NETWORK everything we have learned. SHARING experiences is the secret of ours <span class="display-4" style="color:#7034BE; font-family: 'Montserrat', sans-serif; font-size:80px; font-weight:500;">SUCCESS!!!</span></h2>
        </div>
      </div>
    </div>
  </section>

  <section id="contact">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-12 wow fadeIn" data-wow-delay="0.3s">
          <h2 class="contact-form text-center mb-5">WRITE US FOR AN APPOINTMENT</h2>

          <div class="card">
            <h5 class="card-header card-header-custom text-center ">Ajax Contact Form</h5>
            <div class="card-body">
              <form class="contact__form" method="post" action="mail.php">

                <!-- form message -->
                <div class="row">
                  <div class="col-12">
                    <div class="alert alert-success contact__msg" style="display: none" role="alert">
                      Your message was sent successfully.
                    </div>
                  </div>
                </div>
                <!-- end message -->

                <!-- form element -->
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input name="name" type="text" class="form-control" placeholder="Name" required>
                  </div>
                    <div class="col-md-6 form-group">
                      <input name="email" type="email" class="form-control" placeholder="Email" required>
                  </div>
                      <div class="col-md-6 form-group">
                        <input name="phone" type="text" class="form-control" placeholder="Phone" required>
                  </div>
                        <div class="col-md-6 form-group">
                          <input name="subject" type="text" class="form-control" placeholder="Subject" required>
                  </div>
                          <div class="col-12 form-group">
                            <textarea name="message" class="form-control" rows="3" placeholder="Message" required></textarea>
                          </div>
                          <div class="col-12">
                            <input name="submit" type="submit" class="btn btn-primary btn-lg btn-contact-custom" value="Send Message">
                  </div>
                          </div>
                          <!-- end form element -->
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="section-red-bottom">
    <div class="container text-center">
      <div class="row">
        <div class="col-md-8 wow fadeIn" data-wow-delay="0.1s">
          <h2>ARE YOU LOOKING FOR A HOSTING SERVICE SUITABLE FOR YOUR NEEDS..? </h2>
        </div>
        <div class="col-md-4 wow fadeIn" data-wow-delay="0.1s">
          <button type="button" class="btn btn-primary btn-lg btn-custom-bottom" id="btn1">www.hww.com</button>

        </div>
      </div>
    </div>
  </section>
  <section id="slider-bottom">
    <div class="container">
      <!-- Container -->

      <!-- Slider -->
      <div id="carouselExampleControls" class="carousel slide wow fadeIn" data-wow-delay="0.3s" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row ">
              <div class=" col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xs-4"><img class="d-block w-100 img-fluid" src="<?php echo get_template_directory_uri() ?>/img/loghi/google.png" alt=""></div>
                <div class=" col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xs-4"><img class="d-block w-100 img-fluid" src="<?php echo get_template_directory_uri() ?>/img/loghi/github-logo.png" alt=""></div>
                  <div class=" col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xs-4"><img class="d-block w-100 img-fluid" src="<?php echo get_template_directory_uri() ?>/img/loghi/logo-found.png" alt=""></div>
                    <div class=" col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xs-4"><img class="d-block w-100 img-fluid" src="<?php echo get_template_directory_uri() ?>/img/loghi/sass-less.png" alt=""></div>
                    </div>
                  </div>
                  <!-- END Slider -->
                  <div class="carousel-item">
                    <div class="row ">
                      <div class=" col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xs-4"><img class="d-block w-100 img-fluid" src="<?php echo get_template_directory_uri() ?>/img/loghi/google.png" alt=""></div>
                        <div class=" col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xs-4"><img class="d-block w-100 img-fluid" src="<?php echo get_template_directory_uri() ?>/img/loghi/github-logo.png" alt=""></div>
                          <div class=" col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xs-4"><img class="d-block w-100 img-fluid" src="<?php echo get_template_directory_uri() ?>/img/loghi/logo-found.png" alt=""></div>
                            <div class=" col-sm-12 col-md-6 col-lg-3 col-xl-3 col-xs-4"><img class="d-block w-100 img-fluid" src="<?php echo get_template_directory_uri() ?>/img/loghi/sass-less.png" alt=""></div>
                            </div>
                          </div>
                        </div>
                        <a class="carousel-control-prev " href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
                        <a class="carousel-control-next " href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
                      </div>
                    </div>
                    <!-- ./Container -->
  </section>
  <?php get_footer(); ?>
