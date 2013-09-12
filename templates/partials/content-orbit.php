<?php

	$slides = array(
		array(
			"text" => "Help increase NASA's funding to 1% of the federal budget.",
			"button" => array( "uri" => "http://www.penny4nasa.org", "text" => "Take Action" ),
			"nav" => "01. Penny4NASA"
		),
		array(
			"text" => "Become a Space Advocate to get the latest mission updates.",
			"button" => array( "uri" => "/join", "text" => "Join" ),
			"nav" => "Coming Soon"
		)
	);

?>

<ul data-orbit class="row">
	<?php foreach ($slides as $index => $slide) : ?>
	<li data-orbit-slide="mission-<?= $index + 1; ?>" class="small-12 columns">
		<img src="<?= get_bloginfo('template_directory') . '/assets/images/slide' . ($index + 1); ?>.jpg" alt="" />
		<div class="row">
			<div class="orbit-caption small-12 columns">
				<div class="row">
					<div class="small-12 columns">
						<div class="small-12 large-8 columns"><h3><?= $slide['text']; ?></h3></div>
						<div class="small-12 large-4 columns"><a class="btn-red" href="<?= $slide->button->uri; ?>"><?= $slide['button']['text']; ?></a></div>
					</div>
				</div>
			</div>
		</div>
	</li>
	<?php endforeach; ?>
</ul>

<div id="orbit-nav" class="row">
	<div class="small-12 columns">
		<ul class="row">
		<?php foreach ($slides as $index => $slide) : ?>
			<li class="small-12 medium-6 columns"><a <?= ($index === 0) ? 'class="active"' : ''; ?> href="javascript:void(0)" data-orbit-link="mission-<?= $index + 1; ?>"><?= $slide['nav']; ?></a></li>
		<?php endforeach; ?>
		</ul>
	</div>
</div>