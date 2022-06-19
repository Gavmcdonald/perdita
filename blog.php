<?php
// Template Name: Blog
// Template Post Type: post
?>
<?php get_header(); ?>
<main>
    <?php

    // sets the 'paged' parameter for pagination
    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

    // The Query
    $the_query = new WP_Query(array('post_type' => 'post', 'paged' => $paged));

    // The Loop
    if ($the_query->have_posts()) {
        while ($the_query->have_posts()) {
            $the_query->the_post();
            get_template_part('content', get_post_format());
        }

    ?><nav>
            <ul class="pager">
                <li><?php next_posts_link('Previous', $the_query->max_num_pages); ?></li>
                <li><?php previous_posts_link('Next', $the_query->max_num_pages); ?></li>
            </ul>
        </nav> <?php
            } else {
                // no posts found
            }
            /* Restore original Post Data */
            wp_reset_postdata();
                ?>
</main>
<?php get_footer(); ?>