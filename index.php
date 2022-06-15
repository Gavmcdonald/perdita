<?php get_header(); 

$twitterURL = get_option('twitter_url'); 
$emailURL = get_option('email_url');
$linkedinURL = get_option('linkedin_url');
$imageURL = get_option('image_url');
?>
<main>
    <h1>Shannon Hughes Spence</h1>
    <?php if(!empty($emailURL)) : ?>
        <img src="<?php echo $imageURL; ?>" class="user-image"/>
    <?php endif; ?>
    <ul class="social">

        
        <?php if(str_contains($emailURL, "@")) : ?>
            <li><a href="mailto:<?php echo $emailURL?>" target="_blank" rel="noopener noreferrer"><span class="fa-solid fa-3x fa-square-envelope"></span></a></li>
        <?php endif; ?>
        <?php if(str_contains($linkedinURL, "linked")) : ?>
            <li><a href="<?php echo $linkedinURL?>" target="_blank" rel="noopener noreferrer"><span class="fa-brands fa-3x fa-linkedin"></span></a></li>
        <?php endif; ?>
        <?php if(str_contains($twitterURL, "twitter")) : ?>
            <li><a href="<?php echo $twitterURL?>" target="_blank" rel="noopener noreferrer"><span class="fa-brands fa-3x fa-twitter-square"></span></a></li>
        <?php endif; ?>
        </ul>
        <p class="user-bio">Research Assistant 📚 MSc Sociology 👩‍🎓 Researching gender, health, the occult, and the body 📖 Chess amateur ♟ Knitting enthusiast 🧶 (I promise I'm cool)</p>

</main>
<?php get_footer(); ?>