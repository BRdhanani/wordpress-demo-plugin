<?php
/**
 * Plugin Name: Sample Plugin
 * Plugin URI: https://github.com/BRdhanani/wordpress/tree/master/sample-plugin
 * Description: This is sample plugin used to display content of a shortcode.
 * Author: Brijesh Dhanani
 */
function plugin_demo($atts) {
	$information = "<style>\r\n";
	$information .= "div.demo {\r\n";
	$information .= "color: #26b158;\r\n";
	$information .= "}\r\n";
	$information .= "</style>\r\n";
	$information .= '<div class="demo">This is a shortcode generated output</div>';
	 
    return $information;
}
add_shortcode('plugin-demo', 'plugin_demo');
