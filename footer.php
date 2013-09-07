			</div> <!-- /#container -->
		</div> <!-- /#content-wrapper -->
	</div> <!-- /#wrapper -->

	<div id="footer-wrapper" class="sticky-footer-wrapper">
		<footer>
			<div class="section">
				<div class="row">
					<div class="medium-6 small-12 columns">
						<div class="row">
							<div class="widget small-6 columns">
								<h4 class="widget-title">About</h4>
								<?php wp_nav_menu( array( 'menu' => 'About' ) ); ?>
							</div>
							<div class="widget small-6 columns">
								<h4 class="widget-title">Missions</h4>
								<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu' => 'Missions' ) ); ?>
							</div>
						</div>
					</div>
					<div class="medium-6 small-12 columns">
						<div class="row">
							<div class="widget small-6 columns">
								<h4 class="widget-title">Get Involved</h4>
								<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu' => 'Get Involved' ) ); ?>
							</div>
							<div class="widget small-6 columns">
								<h4 class="widget-title">Resources</h4>
								<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu' => 'Resources' ) ); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="section">
				<div class="row">
					<div class="large-4 medium-6 column"><?php get_search_form(); ?></div>
					<div class="large-4 medium-6 column">
						<div class="row">
							<div class="small-3 columns">
								<a class="facebook" href="https://www.facebook.com/SpaceAdvocates"></a>
							</div>
							<div class="small-3 columns">
								<a class="google" href="https://plus.google.com/b/116044676098904697251/116044676098904697251"></a>
							</div>
							<div class="small-3 columns">
								<a class="twitter" href="https://twitter.com/SpaceAdvocates"></a>
							</div>
							<div class="small-3 columns">
								<a class="youtube" href="http://www.youtube.com/SpaceAdvocates"></a>
							</div>
						</div>
					</div>
					<div class="large-4 medium-6 column">
						<a class="cta btn-red" href="/join">Become A Space Advocate</a>
					</div>
				</div>
			</div>
			<div class="section copy">
				<div class="row">
					<div class="small-12 column">&copy; <?php echo date( "Y" ); echo " "; bloginfo( 'name' ); ?></div>
				</div>
			</div>
		</footer>
	</div>

	<?php wp_footer(); ?>

</body>
</html>
