  <main>
      <div class="slider">
      <?php if(have_rows('slider')): while(have_rows('slider')) : the_row(); ?>
        <?php
          $link = get_sub_field('link');
          if($link){
         ?>
          <a href="<?php the_sub_field('link') ?>" target="_blank">
            <div>
                <div class="slide" style="background-image:url(<?php the_sub_field('imagem_desktop'); ?>)"></div>
            </div>
          </a>
          <?php }else{ ?>
          <div>
            <div class="slide" style="background-image:url(<?php the_sub_field('imagem_desktop'); ?>)"></div>
          </div>
          <?php } ?>
      <?php endwhile; else : endif; ?>
      </div>
  </main>
