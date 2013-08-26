<?php
/*
Template Name: Become a Space Advocate Page
*/
?>

<?php get_header(); ?>

<center><h1 class="page_header">Become a Space Advocate</h1></center>


<div class="row">
	<div class="small-12 tablet-12 large-9 large-centered columns" style="color:#fff;" id="contact_form">
		<p>Soon we will be offering Space Advocates memberships, just like many of the nations best and most notable nonprofits. These memberships will come with a lot of extra benefits that don’t come to the general public.

		Additionally, Space Advocates is planning to open a member center soon, and we want you to join! There is going to be a lot of reasons that you will want to join, so join the mailing list and we will let you know when it’s up!</p>

		<script>
		function clearDefault(el) {
		if (el.defaultValue==el.value) el.value = ""
		}
		</script>

		<div style="width:200px;margin:0 auto;">   

			<center><h3>Subscribe</h3></center>

			<?php

			     
			    function showForm() {
			    echo '
			    <form method="post" action="">
			    <center><label for="contact_email">Email</label><input type="text" name="email" placeholder="Email" id="contact_email" ><input type="submit" value="Submit" name="submit" class="submit btn-red"></center>
			    </form>
			    ';
			    }
			     
			    if(empty($_POST['submit']) === false) {
			    $email = htmlentities(strip_tags($_POST['email']));
			     
			    $logname = 'email.csv';
			    $logcontents = file_get_contents($logname);
			     
			    if(strpos($logcontents,$email)) {
			    die('You are already subscribed.');
			    } else {
			    $filecontents = $email.',';
			    $fileopen = fopen($logname,'a+');
			    $filewrite = fwrite($fileopen,$filecontents);
			    $fileclose = fclose($fileopen);
			    if(!$fileopen or !$filewrite or !$fileclose) {
			    die('Error occured');
			    } else {
			    echo 'Your email has been added.';
			    }
			    }	
			    } else {
			    showForm();
			    }
			     
			    ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>