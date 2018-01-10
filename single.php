<?php
//Template Name: Single Double
get_header();
?>

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

    <?php include(TEMPLATEPATH . "/inc/banners.php"); ?>

    <section class="content">
      <div class="container">
        <h2><?php echo the_field('titulo') ?></h2>
        <?php echo the_field('texto') ?>
      </div>
    </section>

<?php endwhile; else : endif; ?>

<?php get_footer(); ?>