<?php

function theme_settings_page(){

    ?>
	    <div class="wrap">
	    <h1>Theme Settings</h1>
	    <form method="post" action="options.php">
	        <?php
	            settings_fields("section");
	            do_settings_sections("theme-options");      
	            submit_button(); 
	        ?>          
	    </form>
		</div>
	<?php

}

function add_theme_menu_item()
{
	add_menu_page("Theme Settings", "Theme Settings", "manage_options", "theme-panel", "theme_settings_page", null, 99);
}

add_action("admin_menu", "add_theme_menu_item");

function display_twitter_element()
{
	?>
    	<input type="text" name="twitter_url" id="twitter_url" value="<?php echo get_option('twitter_url'); ?>" />
    <?php
}

function display_linkedin_element()
{
	?>
    	<input type="text" name="linkedin_url" id="linkedin_url" value="<?php echo get_option('linkedin_url'); ?>" />
    <?php
}
function display_email_element()
{
	?>
    	<input type="text" name="email_url" id="email_url" value="<?php echo get_option('email_url'); ?>" />
    <?php
}

function display_theme_panel_fields()
{
	add_settings_section("section", "All Settings", null, "theme-options");
	
	add_settings_field("twitter_url", "Twitter Profile Url", "display_twitter_element", "theme-options", "section");
    add_settings_field("linkedin_url", "LinkedIn Profile Url", "display_linkedin_element", "theme-options", "section");
    add_settings_field("email_url", "Send To Email Address", "display_email_element", "theme-options", "section");

    register_setting("section", "twitter_url");
    register_setting("section", "linkedin_url");
    register_setting("section", "email_url");
}

add_action("admin_init", "display_theme_panel_fields");

?>



