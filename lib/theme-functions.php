<?php

/****************************************
Backend Functions
*****************************************/

/**
 * Customize Contact Methods
 * @since 1.0.0
 *
 * @author Bill Erickson
 * @link http://sillybean.net/2010/01/creating-a-user-directory-part-1-changing-user-contact-fields/
 *
 * @param array $contactmethods
 * @return array
 */
function mb_contactmethods( $contactmethods ) {
	unset( $contactmethods['aim'] );
	unset( $contactmethods['yim'] );
	unset( $contactmethods['jabber'] );

	return $contactmethods;
}

/**
 * Register Widget Areas
 */
function mb_widgets_init() {
	// Main Sidebar
	register_sidebar(array(
		'name'          => __( 'Main Sidebar', 'mb' ),
		'id'            => 'main-sidebar',
		'description'   => __( 'Widgets for Main Sidebar.', 'mb' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s medium-12 small-6 columns">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>'
	));

	// Footer
	register_sidebar(array(
		'name'          => __( 'Footer', 'mb' ),
		'id'            => 'footer-widgets',
		'description'   => __( 'Widgets for Footer.', 'mb' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s medium-3 small-6 columns">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>'
	));
}

/**
 * Don't Update Theme
 * @since 1.0.0
 *
 * If there is a theme in the repo with the same name,
 * this prevents WP from prompting an update.
 *
 * @author Mark Jaquith
 * @link http://markjaquith.wordpress.com/2009/12/14/excluding-your-plugin-or-theme-from-update-checks/
 *
 * @param array $r, request arguments
 * @param string $url, request url
 * @return array request arguments
 */
function mb_dont_update_theme( $r, $url ) {
	if ( 0 !== strpos( $url, 'http://api.wordpress.org/themes/update-check' ) )
		return $r; // Not a theme update request. Bail immediately.
	$themes = unserialize( $r['body']['themes'] );
	unset( $themes[ get_option( 'template' ) ] );
	unset( $themes[ get_option( 'stylesheet' ) ] );
	$r['body']['themes'] = serialize( $themes );
	return $r;
}

/**
 * Remove Dashboard Meta Boxes
 */
function mb_remove_dashboard_widgets() {
	global $wp_meta_boxes;
	// unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
	// unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
	// unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_drafts']);
	// unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
}

/**
 * Change Admin Menu Order
 */
function mb_custom_menu_order($menu_ord) {
	if (!$menu_ord) return true;
	return array(
		// 'index.php', // Dashboard
		// 'separator1', // First separator
		// 'edit.php?post_type=page', // Pages
		// 'edit.php', // Posts
		// 'upload.php', // Media
		// 'gf_edit_forms', // Gravity Forms
		// 'genesis', // Genesis
		// 'edit-comments.php', // Comments
		// 'separator2', // Second separator
		// 'themes.php', // Appearance
		// 'plugins.php', // Plugins
		// 'users.php', // Users
		// 'tools.php', // Tools
		// 'options-general.php', // Settings
		// 'separator-last', // Last separator
	);
}

add_filter('user_contactmethods', 'modify_contact_methods');
function modify_contact_methods($profile_fields) {
	// Add new fields
	$profile_fields['twitter'] = 'Twitter Username';
	$profile_fields['facebook'] = 'Facebook URL';
	$profile_fields['gplus'] = 'Google+ URL';

	// Remove old fields
	unset($profile_fields['aim']);
	unset($profile_fields['yim']);

	return $profile_fields;
}

add_action( 'show_user_profile', 'my_show_extra_profile_fields' );
add_action( 'edit_user_profile', 'my_show_extra_profile_fields' );
function my_show_extra_profile_fields( $user ) { ?>

	<h3>Position Information</h3>

	<table class="form-table">
		<tr>
			<th><label for="position">Poisition</label></th>
			<td>
				<input type="text" name="position" id="position" value="<?php echo esc_attr( get_the_author_meta( 'position', $user->ID ) ); ?>" class="regular-text" /><br />
				<span class="description">Please enter your position title.</span>
			</td>
		</tr>
		<tr>
			<th>Rank<br><span class="description">Choose which best describes you.</span></th>
			<td>
				<?php
					$author_rank = esc_attr( get_the_author_meta( 'rank', $user->ID ) );
					do_action( 'show_ranks', true );
				?>
			</td>
		</tr>
	</table>
<?php }

add_action ( 'show_ranks', 'rank_checkboxes' );
function rank_checkboxes( $shouldAddBreak = false ) {
	$ranks = array('director','social_media','graphic_design','web_development','government_relations', 'video_development', 'public_and_media_relations');

	foreach($ranks as $rank): ?>
		<label for="rank_<?php echo $rank; ?>">
			<input type="radio" name="rank" id="rank_<?php echo $rank; ?>" value="<?php echo $rank; ?>" <?php if($author_rank === $rank): ?> checked="checked"<?php endif; ?> />
			<?php echo ucwords(str_replace('_',' ',$rank)); ?>
		</label>
		<?php if($shouldAddBreak): ?><br /><?php endif; ?>
	<?php endforeach;
}

add_action( 'personal_options_update', 'my_save_extra_profile_fields' );
add_action( 'edit_user_profile_update', 'my_save_extra_profile_fields' );
function my_save_extra_profile_fields( $user_id ) {

	if ( !current_user_can( 'edit_user', $user_id ) ) {
		return false;
	}

	update_usermeta( $user_id, 'rank', $_POST['rank'] );
	update_usermeta( $user_id, 'position', $_POST['position'] );
}

/**
 * Hide Admin Areas that are not used
 */
function mb_remove_menu_pages() {
	// remove_menu_page('link-manager.php');
}

/**
 * Remove default link for images
 */
function mb_imagelink_setup() {
	$image_set = get_option( 'image_default_link_type' );
	if ($image_set !== 'none') {
		update_option('image_default_link_type', 'none');
	}
}

/**
 * Show Kitchen Sink in WYSIWYG Editor
 */
function mb_unhide_kitchensink($args) {
	$args['wordpress_adv_hidden'] = false;
	return $args;
}

function sortPositions($a, $b) {
	$positionA = esc_attr( get_the_author_meta( 'position', $a->ID ) );
	$positionB = esc_attr( get_the_author_meta( 'position', $b->ID ) );

	$priorities = array(
		'Executive',
		'Assistant Director',
		'Founder',
		'Lead'
	);

	// Check for priorities first
	foreach($priorities as $priority) {
		if(strpos($positionA, $priority) !== false) return -1;
		if(strpos($positionB, $priority) !== false) return 1;
	}

	if ($positionA == $positionB) return 0;
    return ($positionA < $positionB) ? -1 : 1;
}

/****************************************
Frontend
*****************************************/

/**
 * Enqueue scripts
 */
function mb_scripts() {
	// CSS first
	wp_register_style('mb_style', get_stylesheet_directory_uri().'/style.css', null, '1.0', 'all' );

	wp_enqueue_style( 'mb_style' );

	// JavaScript
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	if ( !is_admin() ) {
		wp_enqueue_script('jQuery', get_template_directory_uri() . '/assets/js/vendor/jquery-2.0.3.min.js', false, NULL, true );
		wp_enqueue_script('modernizr', get_template_directory_uri() . '/assets/js/vendor/modernizr-2.6.2.min.js', false, NULL );
		wp_enqueue_script('customplugins', get_template_directory_uri() . '/assets/js/plugins.min.js', array('jquery'), NULL, true );
		wp_enqueue_script('customscripts', get_template_directory_uri() . '/assets/js/main.min.js', array('jquery'), NULL, true );
		wp_enqueue_script('orbit', get_template_directory_uri() . '/assets/js/vendor/foundation.min.js', array('jquery'), NULL, true );	
	}
}

/**
 * Define Custom Namespace
 */

function namespace_init () {
	echo <<<end
<script type="text/javascript">
	var SA = window.SA || {
		vars: {},
		funcs: {}
	};
</script>
end;
}

add_action('wp_footer', 'namespace_init', 0);

/**
 * Initialise Foundation JS
 * @see: http://foundation.zurb.com/docs/javascript.html
 */

if ( ! function_exists( 'foundation_js_init' ) ) :

function foundation_js_init () {
    echo '<script>$(document).foundation();</script>';
}

add_action('wp_footer', 'foundation_js_init', 50);

endif;

function enqueue_facebook () {
	echo <<<end
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=300636513404680";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
end;
}

function enqueue_google_plus () {
	echo <<<end
<script type="text/javascript" src="//apis.google.com/js/plusone.js"></script>
end;
}

function enqueue_twitter () {
	echo <<<end
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
end;
}

/**
 * Remove Query Strings From Static Resources
 */
function mb_remove_script_version($src){
	$parts = explode('?', $src);
	return $parts[0];
}

/**
 * Remove Read More Jump
 */
function mb_remove_more_jump_link($link) {
	$offset = strpos($link, '#more-');
	if ($offset) {
		$end = strpos($link, '"',$offset);
	}
	if ($end) {
		$link = substr_replace($link, '', $offset, $end-$offset);
	}
	return $link;
}
