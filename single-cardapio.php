<?php

// Template Name: Single Cardapio

get_header();?>



<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

    <?php include(TEMPLATEPATH . "/inc/banners.php"); ?>

    <section class="content produto-interna">
      <div class="container">
      	<div class="row">
      		<div class="col-lg-6 col-12">
      			<div class="imagem__cardapio__item">
      				<img src="<?php the_field('imagem'); ?>" alt="" class="img-responsive">
      			</div>
      		</div>
      		<div class="col-lg-6 col-12 descricao_cardapio__item">
      			<h3><?php echo the_field('titulo') ?></h3>
      			<?php echo the_field('texto') ?>
      		</div>
      	</div>
      </div>
    </section>

<?php endwhile; else : endif; ?>



<?php get_footer(); ?>

