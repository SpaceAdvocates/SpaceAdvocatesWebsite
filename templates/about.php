<?php
/*
Template Name: About Page
*/
?>

<?php get_header(); ?>
	<section id="main" role="main" class="row">

<h1>
We are concerned citizens.<br />
We are scientists.<br />
We are students.<br />
We are teachers.<br />
We brought you Penny4NASA.<br />
We are Space Advocates.
</h1>


<div id="mission">
	<h2>our Mission</h2>
	<p>Space Advocates is a nonprofit space advocacy organization focused on propelling us into the universe through mining our most precious asset: people. We call upon these space advocates to help us push the envelope, to speak louder, to become involved and put us at the forefront of space exploration.<br><br>
	We are space advocates and <strong>together we will be heard.</strong></p>
</div>

<h2>The Crew</h2>

<?php
	$ranks = $wpdb->get_col("SELECT meta_value FROM $wpdb->usermeta WHERE meta_key = 'rank' GROUP BY meta_value ORDER BY umeta_id" );
	sort ( $ranks );
	foreach( $ranks as $rank ) { 
		$people = get_users(array(
			'meta_key' => 'rank',
			'meta_value' => $rank
		));

		usort($people, 'sortPositions');

		$title = ucwords(str_replace('_',' ',$rank));
		if($rank == 'director') $title .= 's';
		?>
		
		<section>
			<h3><?php echo $title; ?></h3>

			<?php
			$count = 0;
			foreach( $people as $person ) {
				$count++;

				$name = $person->data->display_name;
				$rank = esc_attr( get_the_author_meta( 'rank', $person->ID ) );
				$position = esc_attr( get_the_author_meta( 'position', $person->ID ) );
				$url = esc_attr( get_the_author_meta( 'url', $person->ID ) );
				$user_info = get_userdata( $person->ID );
				$avatar = get_avatar( $person->ID, 150 );

				if ($count % 2 == 1 ): ?>
				<div class="row">
				<?php endif; ?>
				
				<div class="person columns large-6 small-12">
					<?php echo $avatar; ?>
					<h4 class="name">
						<?php if($url): ?>
							<a href="<?php echo $url; ?>"><?php echo $name; ?></a>
						<?php else: ?>
							<?php echo $name; ?>
						<?php endif; ?>
					</h4>
					<h5 class="position"><?php echo $position; ?></h5>
					<div class="bio"><?php echo $user_info->user_description; ?></div>
				</div>

				<?php if ($count % 2 == 0 ): ?>
				</div>
				<?php endif;
			} ?>
		</section>
	<?php }
?>
</section> <!-- /#main -->
<?php get_footer(); ?>
