    <?php
    $args = array(

      'cat'            => 4,
      'posts_per_page' => -1

    );

    $query = new WP_Query($args);?>

    <?php if($query->have_posts()) : while($query->have_posts()) : $query->the_post(); ?>


    <?php endwhile; ?>

    <?php endif; ?>

    // Ripristina Query & Post Data originali
    
    <?php  wp_reset_query();?>
    <?php wp_reset_postdata();?>
