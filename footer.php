			</div> <!-- /#container -->
		</div> <!-- /#content_wrapper -->
	</div> <!-- /#wrapper -->

	<div id="footer_wrapper">
		<footer>
			<div class="row">
				<?php dynamic_sidebar( 'Footer' ); ?>
			</div>
			<div class="copy">
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
