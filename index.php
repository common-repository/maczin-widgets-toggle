<?php 
/**
* Plugin Name:       Maczin Widgets Toggle  
* Description:       Add Widgets Toggle here to appear in left bottom. 
* Version:           0.1
* Author:            maczin
* Author URI:        https://profiles.wordpress.org/maczin/
* Text Domain:       https://www.maczin.com.au/
* License:           GPL-2.0+
* License URI:       http://www.gnu.org/licenses/gpl-2.0.txt 
*/

function maczin_widgets_init() {
	
	register_sidebar( array(
		'name'          => __( 'Maczin Toggle', 'kaya' ),
		'id'            => 'maczin-toggle',
		'description'   => __( 'Add widgets here to appear in left bottom.', 'Maczin' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
}
add_action('widgets_init', 'maczin_widgets_init');


 
function maczin_footer_function() {
	?>
	<style>
		
.captcha .wpcf7-form-control,.captcha .form-control {
	background-color: transparent;
    border: none;
	padding: 7px 0px 6px;
}

.quick-contact-outer {
    background-color: transparent;
    bottom: 0;
    display: block !important;
    left: 0;
    margin: 0 20px;
    position: fixed;
    width: 320px;
    z-index: 99999999; 
}

.quick-contact-head {
    background-color: rgba(222, 110, 11, 0.95);
    color: #ffffff;
    cursor: pointer;
    float: left;
    padding: 5px 10px;
    width: 300px;
	-moz-border-radius: 5px 5px 0px 0px;
	-webkit-border-radius: 5px 5px 0px 0px;
	border-radius: 5px 5px 0px 0px;
}

.quick-contact-area {
    background-color: #ffffff;
    float: left;
    width: 300px;
	padding: 10px;
	border: 1px solid #d5d5d5
}

.quick-contact-area form .form-control, .quick-contact-area form textarea.form-control { 
	margin: 0;
	padding: 2px 12px;
	max-height: 100px;
}

.contact-page-form .default-form-style textarea {
	height: 100px;
}

.quick-contact-area .default-form-style textarea {
	height: 80px;
}

.quick-contact-area .default-form-style input[type="text"], .quick-contact-area .default-form-style input[type="email"] {
	height: 35px;
	line-height: 20px;
}

button.close {
	position: relative;
	z-index: 1;	
}

#rc-imageselect, .g-recaptcha {
	transform:scale(0.87);
	-webkit-transform:scale(0.87);
	transform-origin:0 0;
	-webkit-transform-origin:0 0;
}
.fix-dv { position:fixed; right:0; top:40%; z-index:1000;}

.whatsapp img {
    margin-right: 4px;
    margin-top: -3px;
    width: 22px;
}

@media(max-width:767px) {
	.fix-dv {  display: none;}
}

@media only screen and (max-width: 480px) {
	.quick-contact-outer {
		margin: 0;
		max-width: 100%;
		max-height: 100%;
		overflow: auto;	
	}
	.quick-contact-area {
		width: 100%;
		max-width: 100%;
	}
	.quick-contact-head {
		width: 100%;
		max-width: 100%;
	}
}

@media only screen and (min-width: 640px) {
.caption .inner .t1 {    font-size: 35px !important;}
.caption .inner .t2 {    font-size: 22px !important;}
}

p {
    margin: 0 0 3px !important;
}
#quick-contact-form input
{
	width: 100% !important;
	    padding: 5px;
    border-radius: 4px;
    border: 1px solid #bdbbbb;
}
#quick-contact-form textarea
{
   width: 100%;
    height: 91px;
        padding: 5px;
    border-radius: 4px;
    border: 1px solid #bdbbbb;
}
#quick-contact-form input[type="submit"]
{
    background: #df7416 !important;
    border: none !important;
    color: white !important; 	
}

.contact-page-form input
{
	width: 100% !important;
	    padding: 5px;
    border-radius: 4px;
    border: 1px solid #bdbbbb;
}
.contact-page-form textarea
{
   width: 100%;
    height: 91px;
        padding: 5px;
    border-radius: 4px;
    border: 1px solid #bdbbbb;
}
.contact-page-form input[type="submit"]
{
    background: #df7416 !important;
    border: none !important;
    color: white !important; 	
}

	</style>
<div id="quick-contact-form" class="quick-contact-outer">
	<div id="light" class="quick-contact-inner" style="display: block;">
		<div class="quick-contact-head"><center>Contact Us</center></div>
		<div class="quick-contact-area" style="display: none;">
			<?php if(is_active_sidebar('maczin-toggle')){ ?>
				<?php dynamic_sidebar( 'maczin-toggle' ); ?>
			<?php }else{  ?>
			Add widgets here to appear in left bottom.
			<?php } ?> 
		</div>
	</div>
</div>
<script type="text/javascript">
	jQuery(document).ready(function () {
		jQuery('.quick-contact-head').on('click', function(){
			jQuery(this).toggleClass('open')
			jQuery('.quick-contact-area').slideToggle( "slow" );
		});
	});
</script>
	<?php
 
}
add_action( 'wp_footer', 'maczin_footer_function' );
?>
 
<!-- Bottom Left Slider Form -->
