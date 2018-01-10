<?php
//Template Name: Principal
get_header();
?>

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

    <?php include(TEMPLATEPATH . "/inc/banners.php"); ?>
    <?php include(TEMPLATEPATH . "/inc/cardapio.php"); ?>
    <section class="adicionais">
        <div class="container">
            <h3>e mais</h3>
            <ul class="lista__adicionais">
                <li class="lista__adicionais__item">
                    <div class="item__imagem">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/sushi-fit.png" alt="" class="img-responsive">
                    </div>
                    <div class="item__descricao">
                        <h4>Sushi Fit</h4>
                        <p>
                            ​Para você que se preocupa com a boa forma, mas, não abre mão de um delicioso sushi – nós temos a opção certa. Sushis preparados sem arroz e com ingredientes de baixo valor calórico, porém,
                            mantendo o mais importante: o sabor. <br> É para comer sem culpa! Experimente.
                        </p>
                    </div>
                </li>
                <li class="lista__adicionais__item">
                    <div class="item__imagem">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/vinho.png" alt="" class="img-responsive">
                    </div>
                    <div class="item__descricao">
                        <h4>Vinhos</h4>
                        <p>
                            Carta de vinhos especiais escolhidos a dedo para harmonizar com o seu pedido. Diferentes marcas e sabores marcantes esperam por você. 
                        </p>
                    </div>
                </li>
                <li class="lista__adicionais__item">
                    <div class="item__imagem">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/sobremesa.png" alt="" class="img-responsive">
                    </div>
                    <div class="item__descricao">
                        <h4>Sobremesas</h4>
                        <p>
                            ​Deliciosas sobremesas para fechar com chave de ouro a sua refeição. Tempura de sorvete, Torta de Banana e Torta de Maçã. É de dar água na boca!
                        </p>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <section class="eventos" id="eventos">
        <div class="container">
            <h2>Eventos</h2>
            <p>
                ​Que tal ter o melhor sabor da culinária japonesa no coffee break da sua reunião de negócios? Ou em uma festa particular com os amigos? Nós sabemos a importância de servir bem e com muita qualidade em ocasiões especiais como estas. Por isso, disponibilizamos do serviço de entrega programada para eventos em geral. Entre em contato conosco com antecedência e informe-nos a data, o horário e o número de pessoas, para que possamos preparar tudo com muito carinho e entregarmos o seu pedido com tranquilidade.
            </p>
            <a href="#" class="agende">Agende Agora</a>
        </div>
    </section>
    <section class="sobre" id="sobre">
        <div class="container">         
			<h2>Sobre</h2>
            <div class="row">
                <div class="col-lg-6">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/sobre.jpg" alt="" class="img-responsive">
                </div>
                <div class="col-lg-6">
                    <p>
                        O Chef Diego Schreiner, com sua vasta experiência na culinária japonesa, escolheu o belíssimo Pôr-do-Sol de Ipanema, com vista para o Guaíba, como o local perfeito para o Sushi Enodô. Um restaurante com temática oriental e um clima de romantismo que encanta os seus clientes com música ao vivo ao estilo lounge, em um ambiente aconchegante, com uma das vistas mais lindas da cidade de Porto Alegre.
                    </p>
                    <p>
                        O Sushi Enodô encanta a todos os amantes da culinária japonesa, com seu saboroso cardápio de sushis e sashimis.
                    </p>
                    <p>
                        Vem para o Sushi Enodô.
                    </p>
                </div>
            </div>        
		</div>
    </section>

<?php endwhile; else : endif; ?>

<?php get_footer(); ?>