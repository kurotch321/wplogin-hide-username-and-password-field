<?php 

function hide_username_login_fields()
{
	if ($_GET['nosso'] !== '') {
		$style .= '<style type="text/css">';
		$style .= '#loginform > *:not(.wp_google_login) { display: none }';
		// Remove margin-top from the Google login button
		$style .= '.login .wp_google_login{ margin-top: 0px }';
		$style .= '.login .wp_google_login__button-container{ margin-top: 0px }';
		$style .= '</style>';
		echo $style;
	}
}
add_action('login_head', 'hide_username_login_fields');
