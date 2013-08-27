<?php
/*
Template Name: Volunteer Page
*/
?>

<?php get_header(); ?>

<center><h1 class="page_header">Volunteer</h1></center>

<div class="row"><div class="small-12 tablet-12 large-9 large-centered columns" style="color:#fff;" id="contact_form">
<p>Space Advocates is a social advocacy organization concerned with the improvement of, and support for, space exploration in every form. We have many people already on our team and we are constantly growing. If you are interested in helping out then shoot us an email on the following form and check the box for the team you are interested in joining!

We currently aren’t looking for specific positions, but when we are, we will post a description of the ideal candidates here! :)</p>

<?php echo do_shortcode( '[contact-form-7 id="2147" title="Volunteer"]' ); ?>
</div>

<?php get_footer(); ?>