<?php
// Template Name: Blog
// Template Post Type: post
?>
<?php get_header(); ?>
<main>
<?php
 
 // The Query
 $the_query = new WP_Query( array('post_type' => 'post') );
  
 // The Loop
 if ( $the_query->have_posts() ) {
     while ( $the_query->have_posts() ) {
         $the_query->the_post();
         get_template_part('content', get_post_format());
     }
 } else {
     // no posts found
 }
 /* Restore original Post Data */
 wp_reset_postdata();
    ?>
</main>
<?php get_footer(); ?>
