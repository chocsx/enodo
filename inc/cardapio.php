<section class="cardapio" id="cardapio">
      <div class="container">
          <h2>cardápio</h2>
          <p>
            O melhor sabor da Zona Sul de Porto Alegre. Aqui, você encontra uma ampla variedade dos mais deliciosos sushis e sashimis – dos clássicos aos especiais da casa – preparados com todo o expertise gastronômico e a qualidade única que só o Sushi Enodô sabe fazer. <br> Peça também através do app <a href="#">iFood</a>.
          </p>
          <ul class="cardapio__lista">
            <?php
                $args = array (
                        'post_type' => 'cardapio',
                        'order'   => 'ASC'
                    );
                $the_query = new WP_Query ( $args );
            ?>
            <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
              <li class="cardapio__item">
                <a href="<?php echo the_permalink() ?>">
                  <div class="cardapio__item_imagem"><img src="<?php the_field('imagem'); ?>" alt="" class="img-responsive">
                  </div>
                  <h3><?php the_field('titulo'); ?></h3>
                  <p>
                    <?php the_field('resumo'); ?>
                  </p>
                </a>
              </li>
              <?php endwhile; else: endif; ?>
            <?php wp_reset_query(); wp_reset_postdata(); ?>
          </ul>
      </div>
  </section>
