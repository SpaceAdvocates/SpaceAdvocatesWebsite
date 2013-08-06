<?php
/*
Template Name: About Page
*/
?>

<?php get_header(); ?>

<h1>About Us</h1>

<?php
	$ranks = $wpdb->get_col("SELECT meta_value FROM $wpdb->usermeta WHERE meta_key = 'rank' GROUP BY meta_value ORDER BY umeta_id" );
	$ranks = sort ( $ranks )
	foreach( $ranks as $rank ) { 
		$people = get_users(array(
			'meta_key' => 'rank',
			'meta_value' => $rank
		)); ?>
		
		<section>
			<h2><?php 
				if ($rank == 'director')
					echo ucwords('Directors');
				else
					echo ucwords(str_replace('_',' ',$rank)); 
			?></h2>

			<?php foreach( $people as $person ) {
				//print_r($person);
				$name = $person->data->display_name;
				$rank = esc_attr( get_the_author_meta( 'rank', $person->ID ) );
				$position = esc_attr( get_the_author_meta( 'position', $person->ID ) );
				$url = esc_attr( get_the_author_meta( 'url', $person->ID ) );
				$user_info = get_userdata( $person->ID );
				$avatar = get_avatar( $person->ID, 150 );
				?>
				<div class="person columns large-6 small-12">
					<?php echo $avatar; ?>
					<h3 class="name">
						<?php if($url): ?>
							<a href="<?php echo $url; ?>"><?php echo $name; ?></a>
						<?php else: ?>
							<?php echo $name; ?>
						<?php endif; ?>
					</h3>
					<h4 class="position"><?php echo $position; ?></h4>
					<div class="bio"><?php echo $user_info->user_description; ?></div>
				</div>
			<?php } ?>
		</section>
	<?php }
?>

<?php
	$page_object = get_queried_object();
	$page_id = get_queried_object_id();
	$queried_post = get_post($post_id);

	// echo $queried_post->post_content;
?>

<?php get_footer(); ?>