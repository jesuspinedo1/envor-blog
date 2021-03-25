<?php
/*
*  Template Name: Ciencia
*/
  get_header();

    while ( have_posts() ) : the_post();
    the_title();
    get_the_author_meta('nicename', $author_id);
    the_content();
    endwhile;

  get_footer();

?>
