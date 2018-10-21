<!--- Slider Bootstrap 4 For WordPress tront-page.php -->

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

    <div class="carousel-item <?php if($x==1) {echo 'active';} ?>" style="min-height: 800px;background: linear-gradient(rgba(0, 0, 0, .2), rgba(0, 0, 0, .3)), url(<?php echo $url_slide ?>)no-repeat center center; background-size:cover; ">
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
