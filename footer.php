			</div> <!-- /#container -->
		</div> <!-- /#content-wrapper -->
	</div> <!-- /#wrapper -->

	<div id="footer-wrapper" class="sticky-footer-wrapper">
		<footer>
			<div class="section">
				<div class="row">
					<?php dynamic_sidebar( 'Footer' ); ?>
				</div>
			</div>
			<div class="section">
				<div class="row">
					<div class="large-4 column"><?php get_search_form(); ?></div>
					<div class="large-4 column">
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
					<a class="btn-red large-4 column" href="javascript:void(0)">Become A Space Advocate</a>
				</div>
			</div>
			<div class="section copy">
				<div class="row">
					<div class="large-12 column">&copy; <?php echo date( "Y" ); echo " "; bloginfo( 'name' ); ?></div>
				</div>
			</div>
		</footer>
	</div>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="<?php bloginfo('template_directory'); ?>/js/vendor/jquery-2.0.3.min.js"><\/script>')</script>

	<?php wp_footer(); ?>

</body>
</html>
