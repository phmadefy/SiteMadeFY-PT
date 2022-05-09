 <footer>
     <div class="container">
         <div class="row">
             <div class="col-md-4">
                 <div class="logo-footer">
                     <img src="<?php bloginfo('template_url'); ?>/img/logo-header.png" alt="">
                 </div>
                 <h4>Telefones</h4>
                 <p>Portugal +351 933 131 131</p>
                 <p>Brasil +55 62 3507-3447</p>
                 <h4>Email</h4>
                 <p> <a href="mailto: contato@madefy.com.br" target="_blank" class="footer-email">contato@madefy.com.br</a></p>
                 <div class="redes-footer">
                     <a href="https://www.linkedin.com/company/madefy/" target="_blank">
                         <img src="<?php bloginfo('template_url'); ?>/img/layout-2/linkedin.png" alt="">
                     </a>
                     <a href="https://www.facebook.com/madefydev" target="_blank">
                         <img src="<?php bloginfo('template_url'); ?>/img/layout-2/facebook.png" alt="">
                     </a>
                     <a href="https://www.instagram.com/madefyoficial/" target="_blank">
                         <img src="<?php bloginfo('template_url'); ?>/img/layout-2/instagram.png" alt="">
                     </a>
                     <a href="https://api.whatsapp.com/send/?phone=351933131131&text=Ol%C3%A1%21+%0AEstou+vindo+atrav%C3%A9s+do+site+da+MadeFY.+Gostaria+de+conhecer+mais+%C3%A0+respeito+dos+servi%C3%A7os+oferecidos+pela+empresa%21&app_absent=0" target="_blank">
                         <img src="<?php bloginfo('template_url'); ?>/img/layout-2/whats.png" alt="">
                     </a>
                 </div>

             </div>
             <div class="col-md-4">
                 <div class="footer-serv">
                     <h3>Nossos Serviços</h3>

                     <?php
                        query_posts('post_type=servicos');
                        if (have_posts()) : while (have_posts()) : the_post();
                        ?>

                        <p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>

                        <?php endwhile; ?>
                         <?php else : ?>
                             <p>Desculpe, nenhum conteúdo disponível.</p>
                         <?php endif;
                            wp_reset_query(); ?>

                     
                 </div>
             </div>
             <div class="col-md-4">
                 <div class="footer-inst">
                     <h3>Blog</h3>
                     <?php
                        query_posts('post_type=post&posts_per_page=3');
                        if (have_posts()) : while (have_posts()) : the_post();
                        ?>

                        <p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>

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
 </footer>
 <div class="container">
     <div class="row">
         <div class="col-md-12">
             <p class="cop">
                 Copyright © 2022 MadeFY - Desenvolvimento de softwares, aplicativos e sites. <a href="<?php bloginfo('url'); ?>/politica-de-privacidade">Política e Privacidade</a>  Todos os direitos reservados.
             </p>
         </div>
     </div>
 </div>
 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js "></script>
 <script>
     window.jQuery || document.write('<script src="<?php bloginfo('template_url'); ?>/js/vendor/jquery-1.11.2.min.js "><\/script>')
 </script>


 <script src="<?php bloginfo('template_url'); ?>/js/vendor/bootstrap.min.js "></script>

 <script src="<?php bloginfo('template_url'); ?>/js/owl.carousel.min.js "></script>

 <script src='https://www.google.com/recaptcha/api.js?hl=pt-BR'></script>


 <script src="<?php bloginfo('template_url'); ?>/js/main.js "></script>

 <?php if (is_page('sobre-nos')) { ?>
     <script src="<?php bloginfo('template_url'); ?>/js/typewriter.js"></script>
 <?php } ?>


 <?php if (is_singular('servicos')) { ?>
     <script src="<?php bloginfo('template_url'); ?>/js/flip.js"></script>
 <?php } ?>

 <?php wp_footer(); ?>

 </body>

 </html>