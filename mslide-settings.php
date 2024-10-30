<?php
function mslide_admin() {
	register_setting('mslide-config','mslide-exclude-list');
	add_option('mslide-exclude-list',array());
	register_setting('mslide-config','mslide-menu-title');
	add_option('mslide-menu-title','');
	register_setting('mslide-config','mslide-menu-link');
	add_option('mslide-menu-link','');
	register_setting('mslide-config','mslide-selected-menu');
	add_option('mslide-selected-menu', 'not-selected');
	register_setting('mslide-config','mslide-update-v2_0');
	add_option('mslide-update-v2_0', false);
	// header
	register_setting('mslide-settings','mslide-header-bg-color');
	add_option('mslide-header-bg-color','#eef1f3');
	register_setting('mslide-settings','mslide-header-bg-hover-color');
	add_option('mslide-header-bg-hover-color','#13b3ea');
	register_setting('mslide-settings','mslide-header-text-color');
	add_option('mslide-header-text-color','#000000');
	register_setting('mslide-settings','mslide-header-text-hover-color');
	add_option('mslide-header-text-hover-color','#ffffff');
	register_setting('mslide-settings','mslide-header-glow-color');
	add_option('mslide-header-glow-color','#000000');
	register_setting('mslide-settings','mslide-header-bold');
	add_option('mslide-header-bold',true);
	register_setting('mslide-settings','mslide-header-italic');
	add_option('mslide-header-italic',false);
	register_setting('mslide-settings','mslide-header-strike');
	add_option('mslide-header-strike',false);
	register_setting('mslide-settings','mslide-header-glow');
	add_option('mslide-header-glow',true);
	register_setting('mslide-settings','mslide-header-text-glow-radius');
	add_option('mslide-header-text-glow-radius',5);
	register_setting('mslide-settings','mslide-header-bg-glow');
	add_option('mslide-header-bg-glow',false);
	register_setting('mslide-settings','mslide-header-bg-hover-glow');
	add_option('mslide-header-bg-hover-glow',true);
	register_setting('mslide-settings','mslide-header-bg-glow-color');
	add_option('mslide-header-bg-glow-color','#ffffff');
	register_setting('mslide-settings','mslide-header-bg-glow-radius');
	add_option('mslide-header-bg-glow-radius',10);
	// body
	register_setting('mslide-settings','mslide-body-bg-color');
	add_option('mslide-body-bg-color','#ffffff');
	register_setting('mslide-settings','mslide-body-bg-hover-color');
	add_option('mslide-body-bg-hover-color','#8a9297');
	register_setting('mslide-settings','mslide-body-text-color');
	add_option('mslide-body-text-color','#000000');
	register_setting('mslide-settings','mslide-body-text-hover-color');
	add_option('mslide-body-text-hover-color','#ffffff');
	register_setting('mslide-settings','mslide-body-glow-color');
	add_option('mslide-body-glow-color','#000000');
	register_setting('mslide-settings','mslide-body-bold');
	add_option('mslide-body-bold',false);
	register_setting('mslide-settings','mslide-body-italic');
	add_option('mslide-body-italic',false);
	register_setting('mslide-settings','mslide-body-strike');
	add_option('mslide-body-strike',false);
	register_setting('mslide-settings','mslide-body-glow');
	add_option('mslide-body-glow',false);
	register_setting('mslide-settings','mslide-body-text-glow-radius');
	add_option('mslide-body-text-glow-radius',5);
	register_setting('mslide-settings','mslide-body-bg-glow');
	add_option('mslide-body-bg-glow',false);
	register_setting('mslide-settings','mslide-body-bg-hover-glow');
	add_option('mslide-body-bg-hover-glow',true);
	register_setting('mslide-settings','mslide-body-bg-glow-color');
	add_option('mslide-body-bg-glow-color','#ffffff');
	register_setting('mslide-settings','mslide-body-bg-glow-radius');
	add_option('mslide-body-bg-glow-radius',10);
	// border
	register_setting('mslide-settings','mslide-outter-border-color');
	add_option('mslide-outter-border-color','#e8e8e8');
	register_setting('mslide-settings','mslide-inner-border-color');
	add_option('mslide-inner-border-color','#e8e8e8');
	// padding
	register_setting('mslide-settings','mslide-header-padding-tb');
	add_option('mslide-header-padding-tb',10);
	register_setting('mslide-settings','mslide-header-padding-lr');
	add_option('mslide-header-padding-lr',5);
	register_setting('mslide-settings','mslide-body-padding-tb');
	add_option('mslide-body-padding-tb',10);
	register_setting('mslide-settings','mslide-body-padding-lr');
	add_option('mslide-body-padding-lr',5);
	// font-style
	register_setting('mslide-settings','mslide-font-family');
	add_option('mslide-font-family','trebuchet-ms');
	register_setting('mslide-settings','mslide-header-font-size');
	add_option('mslide-header-font-size','1.0');
	register_setting('mslide-settings','mslide-body-font-size');
	add_option('mslide-body-font-size','1.0');
}
function mslide_admin_notice_v2_0() {
	$class = "error";
	$message = "Memphis Sliding Menu Alert: Menu creation has been changed, all current menus have been removed.  Goto Dashboard>Appearance>Widgets>Memphis Sliding Menu to create a new WordPress menu.";
        echo"<div class=\"$class\"> <p>$message</p></div>"; 
}
if(get_option('mslide-update-v2_0') == false) {
	add_action( 'admin_notices', 'mslide_admin_notice_v2_0' );
	update_option('mslide-update-v2_0', true);
}
?>