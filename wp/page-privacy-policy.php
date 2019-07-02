
<?php get_header(); ?>

<main class="pp_box">

<?php
if ( have_posts() ): while ( have_posts() ) : the_post();
?>

<?php the_content(); ?>

<?php
  endwhile;
  endif;
?>

</main>
<?php get_footer(); ?>
</body>

</html>