<?php 
/*
Plugin Name: login-general-customizable
Plugin URI: http://www.giinu.com.co
Description: Plugin autenticación con varios modelos LDAP, Wordpress
Version: 0.8
Author: Julian Salcedo López
Author URI: http://www.giinu.com.co
*/

class loginCustom{

	function __construct(){
		add_shortcode('login-custom',array($this,'cargarForm'));
		show_admin_bar(false);
	}

	function cargarForm(){
		include('includes/form.php');
	}

}

$loginCustom = new logincustom();


?>

