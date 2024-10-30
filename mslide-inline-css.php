<?php
function msm_get_inline_css() {
	// SETTINGS
	ob_start();
	$head_bg_color = get_option('mslide-header-bg-color');
	$head_bg_hover_color = get_option('mslide-header-bg-hover-color');
	$head_text_color =get_option('mslide-header-text-color');
	$head_text_hover_color = get_option('mslide-header-text-hover-color');
	$head_glow_color = get_option('mslide-header-glow-color');
	$head_bold = get_option('mslide-header-bold');
	$head_italic = get_option('mslide-header-italic');
	$head_strike = get_option('mslide-header-strike');
	$head_glow = get_option('mslide-header-glow');
	$head_text_glow_radius = get_option('mslide-header-text-glow-radius');
	$head_bg_glow = get_option('mslide-header-bg-glow');
	$head_bg_hover_glow = get_option('mslide-header-bg-hover-glow');
	$head_bg_glow_radius = get_option('mslide-header-bg-glow-radius');
	$head_bg_glow_color = get_option('mslide-header-bg-glow-color');
	// body
	$body_bg_color = get_option('mslide-body-bg-color');
	$body_bg_hover_color = get_option('mslide-body-bg-hover-color');
	$body_text_color =get_option('mslide-body-text-color');
	$body_text_hover_color = get_option('mslide-body-text-hover-color');
	$body_glow_color = get_option('mslide-body-glow-color');
	$body_bold = get_option('mslide-body-bold');
	$body_italic = get_option('mslide-body-italic');
	$body_strike = get_option('mslide-body-strike');
	$body_glow = get_option('mslide-body-glow');
	$body_text_glow_radius = get_option('mslide-body-text-glow-radius');
	$body_bg_glow = get_option('mslide-body-bg-glow');
	$body_bg_hover_glow = get_option('mslide-body-bg-hover-glow');
	$body_bg_glow_radius = get_option('mslide-body-bg-glow-radius');
	// border
	$border_outter_color = get_option('mslide-outter-border-color');
	$border_inner_color = get_option('mslide-inner-border-color');
	// font style
	$header_font_size = get_option('mslide-header-font-size');
	$body_font_size = get_option('mslide-body-font-size');
	$font_family = str_replace('-',' ',get_option('mslide-font-family'));
	// padding
	$header_padding_tb = get_option('mslide-header-padding-tb');
	$header_padding_lr = get_option('mslide-header-padding-lr');
	$body_padding_tb = get_option('mslide-body-padding-tb');
	$body_padding_lr = get_option('mslide-body-padding-lr');
?>
<style>
#memphis-sliding-menu, .memphis-sliding-menu ul, .memphis-sliding-menu li, .memphis-sliding-menu a {
	margin: 0 !important;
	padding: 0 !important;
	border: none;
	list-style: none;
	text-decoration: none !important;
	position: relative;
	<?php if($font_family != 'theme') { ?>
	font-family: "<?php echo $font_family; ?>", Helvetica,sans-serif !important;
	<?php } ?>
	text-align: left;
}
.memphis-sliding-menu { width: 100% !important; border:1px solid <?php echo $border_outter_color; ?>; }
.memphis-sliding-menu > ul > li { border-bottom: solid 1px <?php echo $border_inner_color; ?>; background: <?php echo $body_bg_color; ?>; color: <?php echo $body_text_color; ?>;}
.memphis-sliding-menu > ul > li:not(:first-child) > a {padding: <?php echo $body_padding_tb;?>px <?php echo $body_padding_lr; ?>px !important; }
.memphis-sliding-menu > ul > li:first-child {
	border-bottom: solid 1px <?php echo $border_inner_color; ?> !important;
	background: <?php echo $head_bg_color; ?> !important;
	padding: <?php echo $header_padding_tb;?>px <?php echo $header_padding_lr; ?>px !important;
	<?php if($head_bg_glow) echo 'box-shadow: inset 0px 0px '.$head_bg_glow_radius.'px '.$head_bg_glow_color.' !important;'; ?>
}

.memphis-sliding-menu > ul > li:first-child:hover { background: <?php echo $head_bg_hover_color; ?> !important;  <?php if($head_bg_hover_glow) echo 'box-shadow: inset 0px 0px '.$head_bg_glow_radius.'px '.$head_bg_glow_color; ?> !important;}
.memphis-sliding-menu > ul > li:first-child:hover > a { color: <?php echo $head_text_hover_color; ?> !important; }
.memphis-sliding-menu > ul > li:first-child > a { <?php if($head_bold) echo 'font-weight: bold !important;'; ?> color: <?php echo $head_text_color; ?> !important; font-size: <?php echo $header_font_size; ?>em; <?php if($head_italic) echo 'font-style: italic;'; ?> <?php if($head_strike) echo 'text-decoration: line-through;'; ?> <?php if($head_glow) echo 'text-shadow: 1px 1px '.$head_text_glow_radius.'px '.$head_glow_color.' !important;'; ?>}
.memphis-sliding-menu > ul > li:not(:first-child):hover { background: <?php echo $body_bg_hover_color; ?> !important; }
.memphis-sliding-menu > ul > li:not(:first-child) > a { display: block !important; color: <?php echo $body_text_color; ?> !important; font-size: <?php echo $body_font_size; ?>em !important; <?php if($body_bold) echo 'font-weight: bold !important;'; ?> <?php if($body_italic) echo 'font-style: italic !important;'; ?> <?php if($body_strike) echo 'text-decoration: line-through !important;'; ?> <?php if($body_glow) echo 'text-shadow: 2px 2px 5px '.$body_glow_color.' !important;'; ?>}
.memphis-sliding-menu > ul > li:not(:first-child):hover > a { color: <?php echo $body_text_hover_color; ?> !important; }
.memphis-sliding-menu > ul > li:last-child { border: none !important; }

.memphis-sliding-menu > ul > li > a > span {
	display: block !important;
	padding: 12px 10px !important;
}
.memphis-sliding-menu > ul > li > a:hover {
	text-decoration: none !important;
}
.memphis-sliding-menu ul > .active:not(:first-child) { background: <?php echo $body_bg_hover_color; ?> !important; }
.memphis-sliding-menu ul > .active:not(:first-child) > a { color: <?php echo $body_text_hover_color; ?> !important; }
.memphis-sliding-menu ul ul  .current_page_item > a { font-weight: normal !important; color: #13B3EA !important;}

li.has-sub > a div, li.has-sub.active > a div {
	float: right !important;
	width: 20px !important;
	height: 20px !important;
	position: absolute !important;
	right: 2% !important;
	top: 20% !important;
	background: url(<?php echo plugins_url(); ?>/memphis-sliding-menu/assets/imgs/icon_plus.png) 96% center no-repeat !important;
}
li.has-sub.active > a div { background: url(<?php echo plugins_url(); ?>/memphis-sliding-menu/assets/imgs/icon_minus.png) 96% center no-repeat !important; }

/* Sub menu Core Style */
.memphis-sliding-menu ul ul {
	display: none;
	/*
	border-right: 1px solid #a2a194 !important;
	border-left: 1px solid #a2a194 !important;
	*/
}

.memphis-sliding-menu ul ul li {
	padding: 0;
	margin: 0;
	/*border-bottom: 1px solid <?php echo $border_inner_color; ?>;*/
	border-top: none;
	background: <?php echo $body_bg_color; ?> !important;
}

.memphis-sliding-menu ul ul li:last-child {
	border-bottom: none !important;
}
.memphis-sliding-menu ul ul a:hover {
	color: #e94f31 !important;
	
}
/* Sub menu 1 */
.memphis-sliding-menu ul ul a {
	padding: <?php echo $body_padding_tb;?>px <?php echo $body_padding_lr; ?>px !important;
	padding-left: <?php echo $body_padding_lr+15; ?>px !important;
	padding-right: <?php echo $body_padding_lr; ?>px !important;
	display: block !important;
	color: <?php echo $body_text_color; ?> !important;
	border-top: 1px solid <?php echo $border_inner_color; ?> !important;
	font-size: <?php echo $body_font_size; ?>em !important;
}
.memphis-sliding-menu ul ul a:before {
	content: '\00dbb' !important;
	position: absolute !important;
	left: <?php echo $body_padding_lr; ?>px !important;
	color: #e94f31 !important;
}
.memphis-sliding-menu ul ul ul { border: none !important; }
/* Sub menu 2 */
.memphis-sliding-menu ul ul ul a {
	padding: <?php echo $body_padding_tb;?>px <?php echo $body_padding_lr; ?>px !important;
	padding-left: <?php echo $body_padding_lr+25; ?>px !important;
	padding-right: <?php echo $body_padding_lr; ?>px !important;
	display: block !important;
	color: <?php echo $body_text_color; ?> !important;
	border-top: 1px solid <?php echo $border_inner_color; ?> !important;
	font-size: <?php echo $body_font_size; ?>em !important;
}
.memphis-sliding-menu ul ul ul a:before {
	content: '\00dbb' !important;
	position: absolute !important;
	left: <?php echo $body_padding_lr+10; ?>px !important;
	color: #e9c669 !important;
}
/* Sub menu 3 */
.memphis-sliding-menu ul ul ul ul a {
	padding: <?php echo $body_padding_tb;?>px <?php echo $body_padding_lr; ?>px !important;
	padding-left: <?php echo $body_padding_lr+35; ?>px !important;
	padding-right: <?php echo $body_padding_lr; ?>px !important;
	display: block !important;
	color: <?php echo $body_text_color; ?> !important;
	border-top: 1px solid <?php echo $border_inner_color; ?>;
	font-size: <?php echo $body_font_size; ?>em;
}
.memphis-sliding-menu ul ul ul ul a:before {
	content: '\00dbb' !important;
	position: absolute !important;
	left: <?php echo $body_padding_lr+20; ?>px !important;
	color: #e9904c !important;
}
/* Sub menu 4*/
.memphis-sliding-menu ul ul ul ul ul a {
	padding: <?php echo $body_padding_tb;?>px <?php echo $body_padding_lr; ?>px !important;
	padding-left: <?php echo $body_padding_lr+45; ?>px !important;
	padding-right: <?php echo $body_padding_lr; ?>px !important;
	display: block !important;
	color: <?php echo $body_text_color; ?> !important;
	border-top: 1px solid <?php echo $border_inner_color; ?>;
	font-size: <?php echo $body_font_size; ?>em;
}
.memphis-sliding-menu ul ul ul ul ul a:before {
	content: '\00dbb' !important;
	position: absolute !important;
	left: <?php echo $body_padding_lr+30; ?>px !important;
	color: #e96497 !important;
}

/* ADMIN STYLE */
#mslide-widget { list-style: none; }
.mslide-table {text-align: left; font-size: 20px !important; color: #00B2CE !important; border: none;	border-collapse: collapse; margin: 0 10px !important;	padding: 0 !important;	width: 97%;	}
.mslide-table th { padding: 5px; border-bottom: solid 4px #c1c1c1; font-size: 22px; color: #555; }
.mslide-table .mslide-light-bg { padding: 10px 20px; background: #fff; vertical-align: top; }
.mslide-table .mslide-dark-bg { padding: 10px 20px; background: #d8e9f2;  }
.mslide-table a { color: #555 !important; background: #f1f1f1; font-size: 12px; padding: 5px; border-bottom: solid 4px #a9a9a9; font-weight: bold; }
.mslide-table a:hover { color: #FF5000 !important; background: #ffffff; font-size: 12px; padding: 5px; border-bottom: solid 4px #929292; font-weight: bold; }
.mslide-table .mslide-view-page { width: 200px; text-align: right; vertical-align: top;}
.mslide-list ul, .mslide-list > ul > ul { padding-left: 20px !important; }
.form-table td { vertical-align: top; }
.mslide-admin-sliding-menu-width { width: 100% !important; }
.mslide-range-textbox { width: 30px; font-size: 0.7em; position: absolute; }
.mslide-select { font-size: 0.8em; height: auto !important; }
.mslide-setting-form label { vertical-align: top; font-size: 0.8em; }
.mslide-setting-form h4 { color: #0074a2; padding: 0; margin: 8px 0; border-bottom: dashed 1px #dbdbdb;}
</style>
<?php
	$msm_style = ob_get_clean();
	return $msm_style;
}