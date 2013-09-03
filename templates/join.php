<?php
/*
Template Name: Join Page
*/
				 
	if(isset($_POST['email'])) {
		$email = htmlentities(strip_tags($_POST['email']));
		 
		$logname = 'email.csv';
		$error = false;

		// validate email
		if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
			if(strpos(file_get_contents($logname), $email)) {
				header("HTTP/1.0 500 Internal Server Error");
				$message = 'You are already subscribed.';
			} else {
				file_put_contents($logname, "$email,", FILE_APPEND);
				$message = 'Your email has successfully been added.';
			}
		} else {
			header("HTTP/1.0 500 Internal Server Error");
			$message = "Invalid email address.";
		}

		echo json_encode(array(
			'message' => $message
		));

		die();
	}
				 
?>

<?php get_header(); ?>

<div class="large-12 columns">
	<h1>Become a Space Advocate</h1>

	<p>Soon we will be offering Space Advocates memberships, just like many of the nations best and most notable nonprofits. These memberships will come with a lot of extra benefits that don't come to the general public.</p>
	<p>Additionally, Space Advocates is planning to open a member center soon, and we want you to join! There is going to be a lot of reasons that you will want to join, so join the mailing list and we will let you know when it's up!</p>

	<div class="row">
		<div class="large-6 columns" id="contact_form">
			<h2>Subscribe</h2>
			<label for="email">Email</label>
			<input type="text" name="email" placeholder="email address" id="email" >
			<span class="label"></span>
			<button class="submit btn-red">Submit</button>
		</div>
	</div>
</div>

<?php get_footer(); ?>