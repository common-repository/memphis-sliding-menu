<?php
function mslide_dashboard_menu() {
	$plugin_url = plugins_url();
	add_menu_page( __('Memphis Sliding Menu'), __('Memphis SM'), 'administrator', 'memphis-sliding-menu.php', 'mslide_dashboard', $plugin_url.'/memphis-sliding-menu/assets/imgs/kon.ico'  );
}

function mslide_dashboard() {
?>
<h1><?php _e('Sliding Menu Configuration'); ?></h1>
<div></div>
<form enctype="multipart/form-data" method="post" action="options.php" class="mslide-setting-form">
	<table class="form-table mdocs-settings-table">
		<?php settings_fields( 'mslide-settings' ); ?>
		<tr>
			<td>
				<h2><?php _e('Style Options'); ?></h2>
				
				<h4><?php _e('Border Style'); ?></h4>
				<label><?php _e('Outter Border Color'); ?></label>
				<input type="text" value="<?php echo get_option('mslide-outter-border-color'); ?>" name="mslide-outter-border-color" id="mslide-outter-border-color-mslide-picker" data-default-color="#e8e8e8"/><br>
				<label><?php _e('Inner Border Color'); ?></label>
				<input type="text" value="<?php echo get_option('mslide-inner-border-color'); ?>" name="mslide-inner-border-color" id="mslide-inner-border-color-mslide-picker" data-default-color="#e8e8e8"/>
				
				<h4><?php _e('Font Style'); ?></h4>
				<label><?php _e('Font Type'); ?></label>
				<?php $font_family = get_option('mslide-font-family'); ?>
				<select name="mslide-font-family" class="mslide-select" id="mslide-font-family">
					<option value="theme" <?php if($font_family == 'theme') echo 'selected'; ?> >Theme Font</option>
					<option value="arial" <?php if($font_family == 'arial') echo 'selected'; ?> >Arial</option>
					<option value="arial-black" <?php if($font_family == 'arial-black') echo 'selected'; ?>>Arial Black</option>
					<option value="comic-sans-ms" <?php if($font_family == 'comic-sans-ms') echo 'selected'; ?>>Comic Sans MS</option>
					<option value="impact" <?php if($font_family == 'impact') echo 'selected'; ?>>Impact</option>
					<option value="lucida-sans-unicode" <?php if($font_family == 'lucida-sans-unicode') echo 'selected'; ?>>Lucida Sans Unicode</option>
					<option value="tahoma" <?php if($font_family == 'tahoma') echo 'selected'; ?>>Tahoma</option>
					<option value="trebuchet-ms" <?php if($font_family == 'trebuchet-ms') echo 'selected'; ?>>Trebuchet MS</option>
					<option value="verdana" <?php if($font_family == 'verdana') echo 'selected'; ?>>Verdana</option>
				</select>
				<br>
				<label><?php _e('Header Font Size'); ?></label>
				<input type="range" min="0" max="10" value="<?php echo get_option('mslide-header-font-size'); ?>" name="mslide-header-font-size" step="0.1" id="mslide-header-font-size-mslide-range"/>
				<input type="text" value="<?php echo get_option('mslide-header-font-size'); ?>" name="mslide-header-font-size" class="mslide-range-textbox" id="mslide-header-font-size-mslide-range-text"/><br>
				<label><?php _e('Body Font Size'); ?></label>
				<input type="range" min="0" max="10" value="<?php echo get_option('mslide-body-font-size'); ?>" name="mslide-body-font-size" step="0.1" id="mslide-body-font-size-mslide-range"/>
				<input type="text" value="<?php echo get_option('mslide-body-font-size'); ?>" name="mslide-body-font-size" class="mslide-range-textbox" id="mslide-body-font-size-mslide-range-text"/>
				
				<h4><?php _e('Header Padding and Spacing'); ?></h4>
				<label><?php _e('Padding Top and Bottom'); ?></label>
				<input type="range" min="0" max="100" value="<?php echo get_option('mslide-header-padding-tb'); ?>" name="mslide-header-padding-tb" step="1" id="mslide-header-padding-tb-mslide-range"/>
				<input type="text" value="<?php echo get_option('mslide-header-padding-tb'); ?>" name="mslide-header-padding-tb" class="mslide-range-textbox" id="mslide-header-padding-tb-mslide-range-text"/><br>
				<label><?php _e('Padding Left and Right'); ?></label>
				<input type="range" min="0" max="100" value="<?php echo get_option('mslide-header-padding-lr'); ?>" name="mslide-header-padding-lr" step="1" id="mslide-header-padding-lr-mslide-range"/>
				<input type="text" value="<?php echo get_option('mslide-header-padding-lr'); ?>" name="mslide-header-padding-lr" class="mslide-range-textbox" id="mslide-header-padding-lr-mslide-range-text"/>
				
				<h4><?php _e('Body Padding and Spacing'); ?></h4>
				<label><?php _e('Padding Top and Bottom'); ?></label>
				<input type="range" min="0" max="100" value="<?php echo get_option('mslide-body-padding-tb'); ?>" name="mslide-body-padding-tb" step="1" id="mslide-body-padding-tb-mslide-range"/>
				<input type="text" value="<?php echo get_option('mslide-body-padding-tb'); ?>" name="mslide-body-padding-tb" class="mslide-range-textbox" id="mslide-body-padding-tb-mslide-range-text"/>
				<br>
				<label><?php _e('Padding Left and Right'); ?></label>
				<input type="range" min="0" max="100" value="<?php echo get_option('mslide-body-padding-lr'); ?>" name="mslide-body-padding-lr" step="1" id="mslide-body-padding-lr-mslide-range"/>
				<input type="text" value="<?php echo get_option('mslide-body-padding-lr'); ?>" name="mslide-body-padding-lr" class="mslide-range-textbox" id="mslide-body-padding-lr-mslide-range-text"/>
				<br>
			</td>
			<td>
				<h2><?php _e('Header Options'); ?></h2>
				<h4><?php _e('Background Options'); ?></h4>
				<label><?php _e('Background Color'); ?></label>
				<input type="text" value="<?php echo get_option('mslide-header-bg-color'); ?>" name="mslide-header-bg-color" id="mslide-header-bg-color-mslide-picker" data-default-color="#eef1f3" /><br>
				<label><?php _e('Background Hover Color'); ?></label>
				<input type="text" value="<?php echo get_option('mslide-header-bg-hover-color'); ?>" name="mslide-header-bg-hover-color" id="mslide-header-bg-hover-color-mslide-picker" data-default-color="#13b3ea" /><br>
				<label><?php _e('Background Glow Color'); ?></label>
				<input type="text" value="<?php echo get_option('mslide-header-bg-glow-color'); ?>" name="mslide-header-bg-glow-color" id="mslide-header-bg-glow-color-mslide-picker" data-default-color="#ffffff" /><br>
				<label><?php _e('Background Glow Raduis'); ?></label>
				<input type="range" min="0" max="50" value="<?php echo get_option('mslide-header-bg-glow-radius'); ?>" name="mslide-header-bg-glow-radius" step="1" id="mslide-header-bg-glow-radius-mslide-range"/>
				<input type="text" value="<?php echo get_option('mslide-header-bg-glow-radius'); ?>" name="mslide-header-bg-glow-radius" class="mslide-range-textbox" id="mslide-header-bg-glow-radius-mslide-range-text"/>
				
				<h4><?php _e('Text Options'); ?></h4>
				<label><?php _e('Text Color'); ?></label>
				<input type="text" value="<?php echo get_option('mslide-header-text-color'); ?>" name="mslide-header-text-color" id="mslide-header-text-color-mslide-picker" data-default-color="#000000;" /><br>
				<label><?php _e('Text Hover Color'); ?></label>
				<input type="text" value="<?php echo get_option('mslide-header-text-hover-color'); ?>" name="mslide-header-text-hover-color" id="mslide-header-text-hover-color-mslide-picker" data-default-color="#ffffff" /><br>
				<label><?php _e('Text Glow Color'); ?></label>
				<input type="text" value="<?php echo get_option('mslide-header-glow-color'); ?>" name="mslide-header-glow-color" id="mslide-header-glow-color-mslide-picker" data-default-color="#000000" /><br>
				<label><?php _e('Text Glow Raduis'); ?></label>
				<input type="range" min="0" max="50" value="<?php echo get_option('mslide-header-text-glow-radius'); ?>" name="mslide-header-text-glow-radius" step="1" id="mslide-header-text-glow-radius-mslide-range"/>
				<input type="text" value="<?php echo get_option('mslide-header-text-glow-radius'); ?>" name="mslide-header-text-glow-radius" class="mslide-range-textbox" id="mslide-header-text-glow-radius-mslide-range-text"/>
				
				<h4><?php _e('Glow Options'); ?></h4>
				<label><?php _e('Text Glow'); ?></label>
				<input type="checkbox" name="mslide-header-glow" id="mslide-header-glow" <?php if(get_option('mslide-header-glow')) echo 'checked'; ?> />
				<label><?php _e('Background Glow'); ?></label>
				<input type="checkbox" name="mslide-header-bg-glow" id="mslide-header-bg-glow" <?php if(get_option('mslide-header-bg-glow')) echo 'checked'; ?> />
				<label><?php _e('Background Hover Glow'); ?></label>
				<input type="checkbox" name="mslide-header-bg-hover-glow" id="mslide-header-bg-hover-glow" <?php if(get_option('mslide-header-bg-hover-glow')) echo 'checked'; ?> />
				<h4><?php _e('Text Formatting'); ?></h4>
				<label><?php _e('Bold'); ?></label>
				<input type="checkbox" name="mslide-header-bold" id="mslide-header-bold" <?php if(get_option('mslide-header-bold')) echo 'checked'; ?> />
				<label><?php _e('Italic'); ?></label>
				<input type="checkbox" name="mslide-header-italic" id="mslide-header-italic" <?php if(get_option('mslide-header-italic')) echo 'checked'; ?> />
					   <label><?php _e('Strikethrough'); ?></label>
				<input type="checkbox" name="mslide-header-strike" id="mslide-header-strike" <?php if(get_option('mslide-header-strike')) echo 'checked'; ?> />
			</td>
			<td>
				<h2><?php _e('Body Options'); ?></h2>
				<label><?php _e('Body Background Color'); ?></label>
				<input type="text" value="<?php echo get_option('mslide-body-bg-color'); ?>" name="mslide-body-bg-color" id="mslide-body-bg-color-mslide-picker" data-default-color="#ffffff" /><br>
				<label><?php _e('Body Background Hover Color'); ?></label>
				<input type="text" value="<?php echo get_option('mslide-body-bg-hover-color'); ?>" name="mslide-body-bg-hover-color" id="mslide-body-bg-hover-color-mslide-picker" data-default-color="#8a9297" /><br>
				<label><?php _e('Body Text Color'); ?></label>
				<input type="text" value="<?php echo get_option('mslide-body-text-color'); ?>" name="mslide-body-text-color" id="mslide-body-text-color-mslide-picker" data-default-color="#000000" /><br>
				<label><?php _e('Body Text Hover Color'); ?></label>
				<input type="text" value="<?php echo get_option('mslide-body-text-hover-color'); ?>" name="mslide-body-text-hover-color" id="mslide-body-text-hover-color-mslide-picker" data-default-color="<?php echo get_option('mslide-body-text-hover-color'); ?>" /><br>
				<label><?php _e('Body Glow Color'); ?></label>
				<input type="text" value="<?php echo get_option('mslide-body-glow-color'); ?>" name="mslide-body-glow-color" id="mslide-body-glow-color-mslide-picker" data-default-color="#000000" /><br>
				<h4><?php _e('Text Formatting'); ?></h4>
				<label><?php _e('Bold'); ?></label>
				<input type="checkbox" name="mslide-body-bold" id="mslide-body-bold" <?php if(get_option('mslide-body-bold')) echo 'checked'; ?> />
				<label><?php _e('Glow'); ?></label>
				<input type="checkbox" name="mslide-body-glow" id="mslide-body-glow" <?php if(get_option('mslide-body-glow')) echo 'checked'; ?> />
					   <label><?php _e('Italic'); ?></label>
				<input type="checkbox" name="mslide-body-italic" id="mslide-body-italic" <?php if(get_option('mslide-body-italic')) echo 'checked'; ?> />
					   <label><?php _e('Strikethrough'); ?></label>
				<input type="checkbox" name="mslide-body-strike" id="mslide-body-strike" <?php if(get_option('mslide-body-strike')) echo 'checked'; ?> />
			</td>
		</tr>
		<tr>
			<td>
				<h2><?php _e('Preview'); ?></h2>
				<?php $widget_preview = new mslide_init_widget(); $widget_preview->widget('',''); ?>
			</td>
		</tr>
	</table>
	<input style="margin:15px;" type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
</form>
<?php
}
?>