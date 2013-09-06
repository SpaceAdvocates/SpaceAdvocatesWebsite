<?php
/*
Template Name: About Page
*/

	$ranks = $wpdb->get_col("SELECT meta_value FROM $wpdb->usermeta WHERE meta_key = 'rank' GROUP BY meta_value ORDER BY umeta_id" );
	sort ( $ranks );

	foreach( $ranks as $rank ) {
		$sectionOutput = array();
		
		$people = get_users(array(
			'meta_key' => 'rank',
			'meta_value' => $rank
		));

		usort($people, 'sortPositions');

		$sectionOutput['title'] = ucwords(str_replace('_',' ',$rank));
		if($rank == 'director') $sectionOutput['title'] .= 's';

		$count = 0;
		foreach( $people as $person ) {
			$count++;

			$user_info = get_userdata( $person->ID );

			$sectionOutput['people'][] = array(
				'name' => $person->data->display_name,
				'position' => esc_attr( get_the_author_meta( 'position', $person->ID ) ),
				'url' => esc_attr( get_the_author_meta( 'url', $person->ID ) ),
				'bio' => $user_info->user_description,
				'avatar' => get_avatar( $person->ID, 150 ),
				'isEven' => ($count % 2 == 0 )
			);
		}

		$output[] = $sectionOutput;
	}
?>

<?php get_header(); ?>

<h1>We are concerned citizens.<br />We are scientists.<br />We are students.<br />We are teachers.<br />We brought you Penny4NASA.<br />We are Space Advocates.</h1>

<div id="mission">
	<h2>Our Mission</h2>
	<p>Space Advocates is a nonprofit space advocacy organization focused on propelling us into the universe through mining our most precious asset: people. We call upon these space advocates to help us push the envelope, to speak louder, to become involved and put us at the forefront of space exploration.</p>
	<p>We are space advocates and <strong>together we will be heard.</strong></p>
</div>

<h2>The Crew</h2>

<?php foreach( $output as $section ) : ?>
	<section>
		<h3><?= $section['title']; ?></h3>
		<?php foreach( $section['people'] as $person ) : ?>
			<?php if (!$person['isEven']) : ?>
				<div class="row">
			<?php endif; ?>
			<div class="person columns large-6 small-12">
				<?= $person['avatar']; ?>
				<h4 class="name">
					<?php if($person['url']): ?>
						<a href="<?= $person['url']; ?>"><?= $person['name']; ?></a>
					<?php else: ?>
						<?php echo $person['name']; ?>
					<?php endif; ?>
				</h4>
				<h5 class="position"><?= $peron['position']; ?></h5>
				<div class="bio"><?= $person['bio']; ?></div>
			</div>
			<?php if ($person['isEven']) : ?>
				</div>
			<?php endif; ?>
		<?php endforeach; ?>
	</section>
<?php endforeach; ?>

<?php get_footer(); ?>
