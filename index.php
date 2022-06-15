<?php get_header();

$twitterURL = get_option('twitter_url');
$emailURL = get_option('email_url');
$linkedinURL = get_option('linkedin_url');
$imageURL = get_option('image_url');
$bio = get_option('bio');
$name = get_option('name')
?>
<main>

    <?php if (!empty($name)) : ?>
        <h1><?php echo $name; ?></h1>
    <?php endif; ?>
    <?php if (!empty($imageURL)) : ?>
        <img src="<?php echo $imageURL; ?>" class="user-image" />
    <?php endif; ?>
    <ul class="social">


        <?php if (str_contains($emailURL, "@")) : ?>
            <li><a href="mailto:<?php echo $emailURL ?>" target="_blank" rel="noopener noreferrer"><span class="fa-solid fa-3x fa-square-envelope"></span></a></li>
        <?php endif; ?>
        <?php if (str_contains($linkedinURL, "linked")) : ?>
            <li><a href="<?php echo $linkedinURL ?>" target="_blank" rel="noopener noreferrer"><span class="fa-brands fa-3x fa-linkedin"></span></a></li>
        <?php endif; ?>
        <?php if (str_contains($twitterURL, "twitter")) : ?>
            <li><a href="<?php echo $twitterURL ?>" target="_blank" rel="noopener noreferrer"><span class="fa-brands fa-3x fa-twitter-square"></span></a></li>
        <?php endif; ?>
    </ul>

    <?php if (!empty($bio)) : ?>
        <p class="user-bio"><?php echo $bio; ?></p>
    <?php endif; ?>

</main>
<?php get_footer(); ?>