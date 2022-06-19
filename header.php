<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo get_bloginfo( 'name' ); ?></title>
    <link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet">
    <link rel="stylesheet" 
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <?php wp_head();?>
</head>

<body>
    <div class="layout">
        <nav class="main-nav">
            <ul>
                <li><a href="<?php echo get_bloginfo('wpurl'); ?>/index.php">Home</a></li>
                <li><a href="<?php echo get_bloginfo('wpurl'); ?>/blog">Blog</a></li>
                <!-- <li><a href="<?php echo get_bloginfo('wpurl'); ?>/post.html">Resume</a></li>
                <li><a href="#">Publications</a></li> -->
            </ul>
        </nav>