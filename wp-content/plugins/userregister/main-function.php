<?php
/**
 * @package user Registration Form
 * @version 1.0
 */
/*
Plugin Name: User Registration Form
Plugin URI: http://decode.com
Author: decode
Version: 1.0
Author URI: http://decode.com/
*/


function add_scripts_partner_registration(){
	wp_enqueue_script( 'partner-js', plugins_url( '/js/main.js', __FILE__ ), array(),1.0,true);
	wp_enqueue_style( 'partner-css', plugins_url( '/css/main.css', __FILE__ ), array(),1.0,false);
}
add_action( 'init','add_scripts_partner_registration' );

function registration_form()
{
?>
<form action="">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" class="registerbtn">Register</button>
  </div>
  
  <div class="container signin">
    <p>Already have an account? <a href="#">Sign in</a>.</p>
  </div>
</form>
<?php
}

add_shortcode( 'partner-registration-form', 'registration_form');