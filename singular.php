<?php get_header(); ?>
<main class="post">
    <h2 class="blog-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

    <?php the_content(); ?>
    <hr>
    <div class="post-foot">
        <div class="post-info">
            <p class="post-date"><?php echo get_the_date(); ?></p>
            <ul class="social">
                <li><a href="mailto:shannonhughesspence@gmail.com" target="_blank" rel="noopener noreferrer"><span class="fa-solid fa-2x fa-square-envelope"></span></a></li>
                <li><a href="#" target="_blank" rel="noopener noreferrer"><span class="fa-brands fa-2x fa-linkedin"></span></a></li>
                <li><a href="https://twitter.com/intent/tweet" target="_blank" rel="noopener noreferrer"><span class="fa-brands fa-2x fa-twitter-square"></span></a></li>
            </ul>
        </div>

</main>
<?php get_footer(); ?>