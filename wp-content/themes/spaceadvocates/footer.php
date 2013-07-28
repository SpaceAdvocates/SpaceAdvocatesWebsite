			</div> <!-- /#container -->
		</div> <!-- /#content_wrapper -->
	</div> <!-- /#wrapper -->

	<footer id="footer_wrapper">
		<div class="row">
			<div class="small-12 tablet-12 large-6 columns" id="contact_form">
				
				<label for="contact_name">Name*</label>
				<input type="text" id="contact_name" placeholder="Name" />

				<label for="contact_email">Email*</label>
				<input type="text" id="contact_email" placeholder="Email" />

				<label for="contact_updates" id="contact_updates_label">I would like to receive email updates</label>
				<input type="checkbox" id="contact_updates" value="yes" defaultchecked="true" />

				<label for="contact_subject">Subject</label>
				<input type="text" id="contact_subject" placeholder="Subject" />

				<label for="contact_message">Message</label>
				<textarea id="contact_message" placeholder="Message"></textarea>
				
			</div>
		</div>
		<div class="row">
			<?php dynamic_sidebar( 'Footer' ); ?>
			<div>&copy; <?php echo date( "Y" ); echo " "; bloginfo( 'name' ); ?></div>
		</div>
	</footer>

  	<?php wp_footer(); ?>

</body>
</html>
