<?php
//Template Name: Modelo Double
get_header();
?>

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

    <?php include(TEMPLATEPATH . "/inc/banners.php"); ?>

    <section class="content">
      <div class="container">
        <h2><?php echo the_field('titulo') ?></h2>
        <?php echo the_field('texto') ?>
        <ul class="galeria">
          <?php if(have_rows('galeria_fotos')): while(have_rows('galeria_fotos')) : the_row(); ?>
          <li>
            <a data-fancybox="gallery" href="<?php the_sub_field('foto'); ?>" data-caption="<b><?php the_sub_field('legenda'); ?></b>">
              <img src="<?php the_sub_field('foto'); ?>" alt="" class="img-responsive">
            </a>
          </li>
          <?php endwhile; else : endif; ?>
        </ul>
        <?php echo the_field('resumo') ?>

      </div>
    </section>

<?php endwhile; else : endif; ?>

<?php get_footer(); ?>
