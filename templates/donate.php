<?php
/*
Template Name: Donate
*/
?>


<?php get_header(); ?>

<h1>Donate</h1>

<?php if ( have_posts() ) : while( have_posts() ) : the_post();
     the_content();
endwhile; endif; ?>

<?php get_footer(); ?>