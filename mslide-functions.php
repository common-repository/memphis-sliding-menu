<?php
function mslide_widget() {
	register_widget( 'mslide_init_widget' );
}
class mslide_init_widget extends WP_Widget {

	function __construct() {
		// Instantiate the parent object
		parent::__construct( 'mslide_widget', 'Memphis Sliding Menu' );
	}
	
	function widget( $args, $instance ) {
		$exclude_parents = get_option('mslide-exclude-list');
		$exclude_list = array();
		foreach($exclude_parents as $index => $parent) {
			$args =  array(
				'child_of' => $parent,
				'post_status' => 'publish'
			);
			$children = get_pages($args);
			foreach($children as $index =>$child) {
				array_push($exclude_list, $child->ID);
			}
		}
		$exclude = implode(',',$exclude_list).','.implode(',',$exclude_parents);
		if ( is_user_logged_in() ) $post_status = array('private','publish');
		else $post_status = array('publish');
		$args =  array(
			'link_before' => '',
			'link_after' => '<div></div>',
			'title_li' => '',
			'sort_column' => 'menu_order',
			'post_status' => $post_status,
			'exclude' => $exclude
		);
		if(get_option('mslide-selected-menu') != 'not-selected' && is_nav_menu(get_option('mslide-selected-menu'))) {
			$title = get_option('mslide-menu-title');
			$link = get_option('mslide-menu-link');
			$args = array(
				'menu' => get_option('mslide-selected-menu'),
				'container' => false,
				'items_wrap'      => '<ul id="%1$s" class="%2$s">
													<li><a href="'.$link.'">'.$title.'</a></li>
													%3$s
												</ul>',
				'link_after' => '<div></div>',
			);
		
		
			?>
			<script>
				jQuery(document).ready(function(){
					memphis_sliding_menu();
				});
			</script>
			<div class="memphis-sliding-menu noprint">
				<?php wp_nav_menu( $args); ?>
				<!--<ul> <?php wp_list_pages($args); ?> </ul>-->
			</div>
			</li>
		<?php
		}
	}
	
	

	function update( $new_instance, $old_instance ) { $instance['title'] = strip_tags( $new_instance['title'] ); return $instance; }

	function form( $instance ) {
		if(!empty($_POST)) {
			if(isset($_POST['mslide-menu-title'])) update_option('mslide-menu-title',$_POST['mslide-menu-title']);
			if(isset($_POST['mslide-menu-link'])) update_option('mslide-menu-link',$_POST['mslide-menu-link']);
			if(isset($_POST['mslide-selected-menu'])) update_option('mslide-selected-menu',$_POST['mslide-selected-menu']);
		}
		?>
		<p>
		<label>Menu Title:</label>
		<input type="text" class="widefat" name="mslide-menu-title" value="<?php echo get_option('mslide-menu-title'); ?>" placeholder="A Menu Title" />
		</p>
		<p>
		<label>Menu Link:</label>
		<input type="text" class="widefat" name="mslide-menu-link" value="<?php echo get_option('mslide-menu-link'); ?>" placeholder="http://www.example.com" />
		</p>
		<p>
			<?php
			$menus = get_terms( 'nav_menu', array( 'hide_empty' => true ) );
			$selected_menu = get_option('mslide-selected-menu');
			if(count($menus) > 0) {
				echo '<p><label>Select Menu: </label>';
				echo '<select name="mslide-selected-menu">';
				echo '<option value="not-selected">-= Select =-</option>';
				foreach($menus as $index => $menu) {
					$selected = '';
					if($selected_menu == $menu->name) $selected = 'selected="selected"';
					?>
					<option value="<?php echo $menu->name; ?>" <?php echo $selected; ?> ><?php echo $menu->name; ?></option>
					<?php
				}
				echo '</select></p>';
			} else {
				echo '<p>No Menus have been created, click on the link below to create one.</p>';
			}
			echo 'Create a new <a href="'.admin_url('nav-menus.php').'">Navigation Menu</a>.';
			?>
		</p>
		<?php
	}
	
}
function mslide_script() {
	wp_enqueue_style( 'msm-style', plugins_url().'/memphis-sliding-menu/mslide.css' );
	wp_enqueue_script( 'memphis-sliding-menu-script', plugins_url().'/memphis-sliding-menu/memphis-sliding-menu.js');
	msm_inline_css('msm-style');
}
function msm_inline_css($style_name) {
	$set_inline_style = msm_get_inline_css();
	wp_add_inline_style( $style_name, $set_inline_style );
}
function mslide_admin_script() {
	//LOAD MEMPHIS SLIDING MENU SCRIPTS
	wp_enqueue_style( 'msm-admin-style', plugins_url().'/memphis-sliding-menu/mslide-admin.css' );
	wp_enqueue_script( 'memphis-sliding-menu-script', plugins_url().'/memphis-sliding-menu/memphis-sliding-menu.js');
	//WORDPRESS IRIS COLOR PICKER
	wp_enqueue_style( 'wp-color-picker' );
    wp_enqueue_script( 'mdocs-color-picker', plugins_url('memphis-sliding-menu.js', __FILE__ ), array( 'wp-color-picker' ), false, true );
	msm_inline_admin_css('msm-admin-style');
}
function msm_inline_admin_css($style_name) {
	$set_inline_style = msm_get_admin_inline_css();
	wp_add_inline_style( $style_name, $set_inline_style );
}
function mslide_admin_document_ready() {
?>
<script>
	jQuery(document).ready(function(){
		mslide_admin_menu();
	});
</script>
<?php
}
?>