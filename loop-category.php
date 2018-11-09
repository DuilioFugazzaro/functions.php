<?php
//TEST LOOP CATEGORY "contact"

// The Query
query_posts( array ( 'category_name' => 'contact', 'posts_per_page' => -1 ) );

 // The Loop
while ( have_posts() ) : the_post(); ?>

<?php the_content(); ?>

<?php endwhile;?>

<?php wp_reset_query();?>
