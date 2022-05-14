<?php get_header() ?>
<div class="home-b">
    <div class="container">
        <div class="row">
            <div class="col-md-6 anime">
                <?php
                query_posts('pagename=home');
                if (have_posts()) : while (have_posts()) : the_post();
                ?>

                        <?php the_content(); ?>
                    <?php endwhile; ?>
                <?php else : ?>
                    <p>Desculpe, nenhum conteúdo disponível.</p>
                <?php endif;
                wp_reset_query(); ?>

                <a href="<?php bloginfo('url'); ?>/fale-conosco">Entre em contato</a>
            </div>
            <div class="col-md-6 anime-d">
                <img src="<?php bloginfo('template_url'); ?>/img/layout-2/banner-home.png" class="img-responsive hidden-sm hidden-xs" alt="">
            </div>
        </div>
    </div>
</div>
<div class="home-b-qs">
    <div class="container">
        <div class="row">
            <div class="col-md-6 anime">
                <img src="<?php bloginfo('template_url'); ?>/img/layout-2/banner-home-qs.png" class="img-responsive" alt="">
            </div>
            <div class="col-md-6 anime-d">
                <?php
                query_posts('pagename=quem-somos-home');
                if (have_posts()) : while (have_posts()) : the_post();
                ?>

                        <?php the_content(); ?>
                    <?php endwhile; ?>
                <?php else : ?>
                    <p>Desculpe, nenhum conteúdo disponível.</p>
                <?php endif;
                wp_reset_query(); ?>

                <a href="<?php bloginfo('url'); ?>/sobre-nos">
                    Saiba mais
                </a>
            </div>
        </div>
    </div>
</div>

<div class="criamos">
    <div class="container">
        <div class="row">
            <div class="col-md-12 anime">
                <h2>
                Você Gerencia o Negócio, Nós Lidamos com Tecnologia.
                </h2>
            </div>
            <div class="col-md-6 anime">
                <?php
                query_posts('pagename=voce-gerencia-o-negocio-nos-lidamos-com-tecnologia');
                if (have_posts()) : while (have_posts()) : the_post();
                ?>

                        <?php the_content(); ?>
                    <?php endwhile; ?>
                <?php else : ?>
                    <p>Desculpe, nenhum conteúdo disponível.</p>
                <?php endif;
                wp_reset_query(); ?>

            </div>
            <div class="col-md-6 anime-d">
                <img src="<?php bloginfo('template_url'); ?>/img/layout-2/criamos-banner.png" class="img-responsive" alt="">
            </div>
        </div>
    </div>
</div>


<div class="nossos-servicos">
    <div class="container">
        <div class="row">
            <div class="col-md-12 anime">
                <h2>
                    Nossos serviços
                </h2>
            </div>
            <div class="col-md-6 anime">
                <img src="<?php bloginfo('template_url'); ?>/img/layout-2/ns-banner.png" class="img-responsive" alt="">
            </div>
            <div class="col-md-6 anime-d">
                <h3>Nossas soluções foram pensadas para atender todos os tipos de negócios</h3>

                <?php
                query_posts('pagename=home-nossos-servicos');
                if (have_posts()) : while (have_posts()) : the_post();
                ?>

                        <?php the_content(); ?>
                    <?php endwhile; ?>
                <?php else : ?>
                    <p>Desculpe, nenhum conteúdo disponível.</p>
                <?php endif;
                wp_reset_query(); ?>


            </div>
            <div class="col-md-12 anime">
                <div class="btn-ns">
                    <a href="<?php bloginfo('url'); ?>/nossos-servicos">Nossos Serviços</a>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="como-fazemos">
    <div class="container">
        <div class="row">
            <div class="col-md-12 anime">
            <?php
                query_posts('pagename=como-fazemos');
                if (have_posts()) : while (have_posts()) : the_post();
                ?>
                      <h2><?php $titulo = the_title(); ?></h2>  

                        
                    <?php endwhile; ?>
                <?php else : ?>
                    <p>Desculpe, nenhum conteúdo disponível.</p>
                <?php endif;
                wp_reset_query(); ?>
                 
            </div>
            <div class="col-md-12 anime-d">
                <?php
                query_posts('pagename=como-fazemos');
                if (have_posts()) : while (have_posts()) : the_post();
                ?>
                         
                        <?php the_content(); ?>
                    <?php endwhile; ?>
                <?php else : ?>
                    <p>Desculpe, nenhum conteúdo disponível.</p>
                <?php endif;
                wp_reset_query(); ?>
            </div>

            <div class="col-md-12 anime">
                <div class="btn-como-fazemos">
                    <a href="<?php bloginfo('url'); ?>/fale-conosco">Entre em Contato</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="parceiros">
    <div class="container">
        <div class="row">
            <div class="col-md-12 anime-d">
                <h2>
                    Parceiros que acreditam na gente
                </h2>
            </div>
            <div class="col-md-12 anime">
                <?php
                query_posts('pagename=parceiros');
                if (have_posts()) : while (have_posts()) : the_post();
                ?>

                        <?php the_content(); ?>
                    <?php endwhile; ?>
                <?php else : ?>
                    <p>Desculpe, nenhum conteúdo disponível.</p>
                <?php endif;
                wp_reset_query(); ?>
            </div>

             
        </div>
    </div>
</div>

<div class="blog-mf">
    <div class="container">
        <div class="row">
            <div class="col-md-12 anime">
                <h2>Blog</h2>
            </div>
            <?php
            query_posts('post_type=post&posts_per_page=2');
            if (have_posts()) : while (have_posts()) : the_post();
            ?>
                    <div class="post">
                        <div class="col-md-6 anime-d">


                            <a href="<?php the_permalink(); ?>">
                                <div class="post-imagem">
                                    <?php
                                    if (has_post_thumbnail()) {
                                        the_post_thumbnail('full', array('class' => 'img-responsive'));
                                    } else {
                                        echo '<img src="' . get_bloginfo('stylesheet_directory')
                                            . '/img/sem-foto.jpg" class="img-responsive" />';
                                    }
                                    ?>
                                </div>
                            </a>
                            <div class="info-post">
                            <span><?php the_category(' ');  ?></span>
                                <div class="data"><?php the_time('d \d\e F Y'); ?></div>
                                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </h3>

                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else : ?>
                <p>Desculpe, nenhum conteúdo disponível.</p>
            <?php endif;
            wp_reset_query(); ?>
        </div>
    </div>
</div> 
<?php get_footer(); ?>