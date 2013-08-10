			</div> <!-- /#container -->
		</div> <!-- /#content_wrapper -->
	</div> <!-- /#wrapper -->

	<footer id="footer_wrapper">
		<div class="row">
			<?php dynamic_sidebar( 'Footer' ); ?>
			<div>&copy; <?php echo date( "Y" ); echo " "; bloginfo( 'name' ); ?></div>
		</div>
	</footer>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?php bloginfo('template_directory'); ?>/js/vendor/jquery-2.0.3.min.js"><\/script>')</script>

  	<?php wp_footer(); ?>

</body>
</html>
