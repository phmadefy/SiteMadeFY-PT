 <?php get_header() ?>

 <div class="home-servicos">
     <div class="container">
         <div class="row">
             <div class="col-md-6 anime">
                 <?php
                    query_posts('pagename=nossos-servicos');
                    if (have_posts()) : while (have_posts()) : the_post();
                    ?>

                         <?php the_content(); ?>
                     <?php endwhile; ?>
                 <?php else : ?>
                     <p>Desculpe, nenhum conteúdo disponível.</p>
                 <?php endif;
                    wp_reset_query(); ?>

                 <a href="<?php bloginfo('url'); ?>/fale-conosco">Entre em Contato</a>
             </div>
             <div class="col-md-6 anime-d">
                 <img src="<?php bloginfo('template_url'); ?>/img/layout-2/banner-serv.png" class="img-responsive hidden-sm hidden-xs" alt="">
             </div>
         </div>
     </div>
 </div>
 <div class="container">
     <div class="row">
         <div class="col-md-12">
             <div class="tx-servicos anime">
                 <?php
                    query_posts('pagename=descricao-servicos');
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

 <div class="sof-app">
     <div class="container">
         <div class="row">
             <div class="col-md-12 anime">
                 <h2>Nossos serviços</h2>
             </div>
             <div class="col-md-12 anime-d">
                 <h3>
                     Soluções digitais de ponta para atender a todas as necessidades da sua empresa.
                 </h3>
             </div>
             <div class="col-md-12 anime">
                 <?php
                    query_posts('pagename=softwares-e-aplicativos');
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

 <!--<div class="nosso-processo">
     <div class="container">
         <div class="row">
             <div class="col-md-12 anime">
                 <h2>Nosso ciclo de desenvolvimento de soluções</h2>
             </div>
             <div class="col-md-6 anime">
                 <div class="processo">

                     <div>
                         <img src="<?php bloginfo('template_url'); ?>/img/layout-2/ideacao.png" alt="">
                         <?php
                            query_posts('pagename=ideacao');
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
             <div class="col-md-6 anime-d">
                 <div class="processo">
                      
                     <div>
                     <img src="<?php bloginfo('template_url'); ?>/img/layout-2/planejamento.png" alt="">
                         <?php
                            query_posts('pagename=planejamento');
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
             <div class="col-md-6 anime">
                 <div class="processo">
                      
                     <div>
                     <img src="<?php bloginfo('template_url'); ?>/img/layout-2/prototipagem.png" alt="">
                         <?php
                            query_posts('pagename=prototipagem');
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
             <div class="col-md-6 anime-d">
                 <div class="processo">
                    
                     <div>
                     <img src="<?php bloginfo('template_url'); ?>/img/layout-2/implementacao.png" alt="">
                         <?php
                            query_posts('pagename=implementacao');
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

             <div class="col-md-12 anime">
                 <div class="btn-processo">
                     <a href="<?php bloginfo('url'); ?>/fale-conosco">Entre em Contato</a>
                 </div>
             </div>
         </div>
     </div>
 </div>-->

 <!--

<a name="nossa-equipe"></a>
 <div  class="equipe">
     <div class="container">
         <div class="row">
             <div class="col-md-12 anime-d">
                 <h2>Nossa Equipe</h2>
             </div>

             <div class="col-md-12 anime">
                 <?php
                    query_posts('pagename=nossa-equipe');
                    if (have_posts()) : while (have_posts()) : the_post();
                    ?>

                         <?php the_content(); ?>
                     <?php endwhile; ?>
                 <?php else : ?>
                     <p>Desculpe, nenhum conteúdo disponível.</p>
                 <?php endif;
                    wp_reset_query(); ?>

                 <div class="btn-equipe anime">
                     <a href="<?php bloginfo('url'); ?>/fale-conosco">Entre em Contato</a>
                 </div>

             </div>
         </div>
     </div>
 </div>

-->

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
                                <a href="<?php the_permalink(); ?>">
                                    <span>Categoria</span>
                                    <h3><?php the_title(); ?></h3>
                                    <div class="data"><?php the_time('d \d\e F Y'); ?></div>
                                </a>

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