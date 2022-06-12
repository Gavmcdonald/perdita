<?php get_header(); ?>
<main class="post">
        <h2 class="blog-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

        <?php the_content(); ?>
        <hr>
        <div class="post-foot">
            <div class="post-info">
                <p class="post-date"><?php echo get_the_date(); ?></p>
                <ul class="social">
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
      
</main>
<?php get_footer(); ?>