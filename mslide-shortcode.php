<?php

function mslide_list_children_shortcode($att, $content=null) { mslide_list_children($att); }
add_shortcode( 'mslide_list_children', 'mslide_list_children_shortcode' );

function mslide_list_children($att) {
	global $post;
	if(isset($att['pageid'])) $pageid = $att['pageid'];
	else $pageid = $post->ID;
	if ( is_user_logged_in() ) $post_status = 'publish,private';
	else $post_status = 'publish';
	$args =  array(
		'sort_column' => 'menu_order',
		'child_of' => $pageid,
		'post_status' => $post_status
	);
	$children = get_pages($args);
	?>
	<table class="mslide-table">
		<tr>
			<th><?php echo $post->post_title; ?></th>
			<th></th>
		</tr>
		<?php
		$mod = 0;
		foreach($children as $index => $child) {
			$permalink = get_permalink( $child->ID );
			//var_dump($permalink);
			if($mod == 0 ) { $class = 'mslide-light-bg'; $mod = 1; }
			else { $class = 'mslide-dark-bg'; $mod = 0; }
			echo '<tr><td class="'.$class.'">'.$child->post_title.'</td>';
			echo '<td class="mslide-view-page '.$class.'"><a href="'.$permalink.'" >View Page</a></td></tr>';
		}
		?>
	</table>
	<?php
}
?>