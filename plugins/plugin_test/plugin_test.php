<?php
/*
Plugin Name: Test Plugin
Plugin URI: 
Description: ทดสอบเขียน Plugin WordPress
Author: foremost
Author URI: http://www.facebook.com/foremost.supapat
Version: 1.0
*/



function html_form_code() {
	echo '<button>คลิก</button>';
	
    
}

add_shortcode('test_Button', 'html_form_code');
?>