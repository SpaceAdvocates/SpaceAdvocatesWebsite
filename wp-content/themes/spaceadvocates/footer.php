			</div> <!-- /#container -->
		</div> <!-- /#content_wrapper -->
	</div> <!-- /#wrapper -->

	<footer id="footer_wrapper">
		<div class="row">
			<?php dynamic_sidebar( 'Footer' ); ?>
			<div>&copy; <?php echo date( "Y" ); echo " "; bloginfo( 'name' ); ?></div>
		</div>
	</footer>

  	<?php wp_footer(); ?>

</body>
</html>
