			</div> <!-- /#container -->
		</div> <!-- /#content-wrapper -->
	</div> <!-- /#wrapper -->

	<div id="footer-wrapper">
		<footer>
			<div class="row">
				<?php dynamic_sidebar( 'Footer' ); ?>
			</div>
            <hr />
            <div class="row">
            
            <div class="large-4 column"><?php get_search_form(); ?></div>
            <div class="large-4 column">
            <div class="small-3 columns"><a class="google" href="#"></a></div>            
            <div class="small-3 columns"><a class="facebook" href="#"></a></div>            
            <div class="small-3 columns"><a class="twitter" href="#"></a></div>            
            <div class="small-3 columns"><a class="youtube" href="#"></a></div>
            </div>
            <div class="large-4 column"><a class="btn-red btn-full" href="javascript:void(0)">Become A Space Advocate</a></div>
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
