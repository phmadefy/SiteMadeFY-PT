 <?php get_header() ?>
 <div class="banner-sobre">
     <div class="container">
         <div class="row">
             <div class="col-md-4 anime">
                 <h1>Sobre Nós</h1>
             </div>
             <div class="col-md-8 text-center anime-d">
                 <img src="<?php bloginfo('template_url'); ?>/img/desenho-sobre-2.png" alt="">
             </div>
         </div>
     </div>
 </div>
 <div class="sobre  ">
     <div class="container">
         <div class="col-md-5 anime">
             <?php
                query_posts('pagename=sobre-nos');
                if (have_posts()) : while (have_posts()) : the_post();
                ?>
                     <?php the_content(); ?>

                 <?php endwhile; ?>
             <?php else : ?>
                 <p>Desculpe, nenhum conteúdo disponível.</p>
             <?php endif;
                wp_reset_query(); ?>

         </div>
         <div class="col-md-7 anime-d">
             <div class="institucional">

                 <img src="<?php bloginfo('template_url'); ?>/img/Telework-amico.png" class="img-responsive cola-1" alt="">
                 <img src="<?php bloginfo('template_url'); ?>/img/img-ilustracao.png" class="img-responsive cola-2" alt="">
             </div>
         </div>
     </div>
 </div>
 <div class="porque">
     <div class="container">
         <div class="row">
             <div class="col-md-7">
                 <div class="feito anime">
                     <h3>Made<b>FY</b> é <strong id="efeito"></strong> </h3>
                 </div>
             </div>
             <div class="col-md-5">
                 <div class="anime-d">
                     <?php
                        query_posts('pagename=por-que-madefy');
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
 </div>
 <div class="valores  ">
     <div class="container">
         <div class="row">
             <div class="col-md-12 anime">
                 <div>
                     <h2>Por que existimos <strong>?</strong></h2>
                 </div>
             </div>
         </div>
         <div class="row anime-d">
             <div class="col-md-3">
                 <div class="etica">
                     <div>
                         <?php
                            query_posts('pagename=proposito');
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
             <div class="col-md-3">
                 <div class="etica">
                     <div>
                         <?php
                            query_posts('pagename=missao');
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
             <div class="col-md-3">
                 <div class="etica">
                     <div>
                         <?php
                            query_posts('pagename=visao');
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
             <div class="col-md-3">
                 <div class="etica">
                     <div>
                         <?php
                            query_posts('pagename=valores');
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
     </div>
 </div>

 <!--

 <div class="madefy-plus">
     <div class="container">
         <div class="row">
             <div class="col-md-12">
                 <?php
                    query_posts('pagename=madefy-academy');
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

-->

 <?php get_footer(); ?>