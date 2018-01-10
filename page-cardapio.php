<?php
//Template Name: Modelo Double
get_header();
?>

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

    <?php include(TEMPLATEPATH . "/inc/banners.php"); ?>
    <?php include(TEMPLATEPATH . "/inc/cardapio.php"); ?>


<?php endwhile; else : endif; ?>

<?php get_footer(); ?>
