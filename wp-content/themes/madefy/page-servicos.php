 <?php get_header() ?>
 <div class="banner-servicos">
     <div class="container">
         <div class="row">
             <div class="col-md-8 text-center">
                 <img src="<?php bloginfo('template_url'); ?>/img/desenho-servicos-3.png" class="img-responsive" alt="">
             </div>
             <div class="col-md-4">
                 <h1>
                     Serviços
                 </h1>

             </div>
         </div>
     </div>
 </div>
 <div class="tecnologia">
     <div class="container">
         <div class="row">
             <div class="col-md-12">
                 <?php
                    query_posts('pagename=servicos');
                    if (have_posts()) : while (have_posts()) : the_post();
                    ?>

                         <?php the_content(); ?>



                     <?php endwhile; ?>
                 <?php else : ?>
                     <p>Desculpe, nenhum conteúdo disponível.</p>
                 <?php endif;
                    wp_reset_query(); ?>

                 <div class="text-center btn-solicitar">
                     <a href="">ou Entre em Contato pelo Whatsapp</a>
                 </div>

             </div>
         </div>
         <div class="row">
             <div class="col-md-12">
                 <h4>Tecnologias</h4>
                 <span></span>
             </div>

             <div class="flip col-md-3 card">
                 <div class="face front">
                     <img src="<?php bloginfo('template_url'); ?>/img/html.png" alt="">
                     <p>html</p>
                 </div>
                 <div class="face back">
                     <img src="<?php bloginfo('template_url'); ?>/img/html.png" alt="">
                 </div>
             </div>
             <div class="flip col-md-3 card">
                 <div class="face front">
                     <img src="<?php bloginfo('template_url'); ?>/img/javascript.png" alt="">
                     <p>javascript </p>
                 </div>
                 <div class="face back">
                     <img src="<?php bloginfo('template_url'); ?>/img/javascript.png" alt="">
                 </div>

             </div>
             <div class="flip col-md-3 card">
                 <div class="face" class="front">
                     <img src="<?php bloginfo('template_url'); ?>/img/c.png" alt="">
                     <p>C#</p>
                 </div>
                 <div class="face" class="back" class="card">
                     <img src="<?php bloginfo('template_url'); ?>/img/c.png" alt="">
                 </div>

             </div>

             <div class="flip col-md-3 card">
                 <div class="face" class="front">
                     <img src="<?php bloginfo('template_url'); ?>/img/php.png" alt="">
                     <p>PHP</p>
                 </div>
                 <div class="face" class="back">
                     <img src="<?php bloginfo('template_url'); ?>/img/php.png" alt="">
                 </div>

             </div>
             <div class="flip col-md-3 card">
                 <div class="face" class="front">
                     <img src="<?php bloginfo('template_url'); ?>/img/angular.png" alt="">
                     <p>angular </p>
                 </div>
                 <div class="face" class="back">
                     <img src="<?php bloginfo('template_url'); ?>/img/angular.png" alt="">
                 </div>

             </div>
             <div class="flip col-md-3 card">
                 <div class="face" class="front">
                     <img src="<?php bloginfo('template_url'); ?>/img/flutter.png" alt="">
                     <p>flutter</p>
                 </div>
                 <div class="face" class="back">
                     <img src="<?php bloginfo('template_url'); ?>/img/flutter.png" alt="">
                 </div>
             </div>

             <div class="flip col-md-3 card">
                 <div class="face" class="front">
                     <img src="<?php bloginfo('template_url'); ?>/img/java.png" alt="">
                     <p>java</p>
                 </div>
                 <div class="face" class="back">
                     <img src="<?php bloginfo('template_url'); ?>/img/java.png" alt="">
                 </div>

             </div>
             <div class="flip col-md-3 card">
                 <div class="face" class="front">
                     <img src="<?php bloginfo('template_url'); ?>/img/net-3.png" alt="">
                     <p>.NET</p>
                 </div>
                 <div class="face" class="back">
                     <img src="<?php bloginfo('template_url'); ?>/img/net-3.png" alt="">
                 </div>

             </div>
         </div>
     </div>
 </div>
 <div class="servicos ">
     <div class="container">
         <div class="row">
             <div class="col-md-12">
                 <h4>Desenvolvimento e Soluções</h4>
             </div>
         </div>
         <div class="row">
             <div class="col-md-7">
                 <div class="serv">
                     <h2> Desenvolvimento de aplicações web</h2>
                     <h5>
                         Soluções simples, objetivas e personalizadas para facilitar a rotina da sua empresa
                     </h5>
                     <span></span>
                     <p>
                         Desenvolva um software web que te ajude a ter mais controle sobre os seus negócios. Através de um software específico e personalizado a sua empresa pode alcançar a evolução tecnológica.
                     </p>
                     <a href="">Saiba mais</a>
                 </div>
             </div>
             <div class="col-md-5">
                 <div class="ilust-serv">
                     <img src="<?php bloginfo('template_url'); ?>/img/ilust-web.png" class="img-responsive" alt="">
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-md-5">
                 <div class="ilust-serv">
                     <img src="<?php bloginfo('template_url'); ?>/img/ilust-app.png" class="img-responsive" alt="">
                 </div>
             </div>
             <div class="col-md-7">
                 <div class="serv direita">
                     <h2> Desenvolvimento de aplicativos</h2>
                     <h5>
                         Crie aplicativos para atender as demandas internas e externas do dia a dia
                     </h5>
                     <span></span>
                     <p>
                         Precisa de um aplicativo para atender melhor os seus clientes, gerenciar seus serviços, ou ter melhor fluxo interno da empresa? A criação de um aplicativo próprio pode te ajudar a ter todos os dados na palma da sua mão.
                     </p>
                     <a href="">Saiba mais</a>
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-md-7">
                 <div class="serv">
                     <h2>
                         Desenvolvimento de API
                     </h2>
                     <h5>
                         Integre seus sistemas e aumente a funcionalidade deles
                     </h5>
                     <span></span>
                     <p>
                         A integração de vários sistemas otimiza o tempo da sua equipe ou do seu cliente, e melhora a experiência com a sua empresa. Além de permitir que a sua interface seja intuitiva e de fácil acesso a qualquer usuário.
                     </p>
                     <a href="">Saiba mais</a>
                 </div>
             </div>
             <div class="col-md-5">
                 <div class="ilust-serv">
                     <img src="<?php bloginfo('template_url'); ?>/img/ilust-api.png" class="img-responsive" alt="">
                 </div>

             </div>
         </div>
         <div class="row">
             <div class="col-md-5">
                 <div class="ilust-serv">
                     <img src="<?php bloginfo('template_url'); ?>/img/ilust-out.png" class="img-responsive" alt="">
                 </div>
             </div>
             <div class="col-md-7">
                 <div class="serv direita">

                     <h2>
                         Outsourcing de profissionais de TI

                     </h2>
                     <h5>
                         Encontre profissionais qualificados para atender à sua empresa

                     </h5>
                     <span></span>
                     <p>
                         Com profissionais experientes, você pode solicitar nosso serviço sob demanda ou para atuação in loco. Assim, você pode solucionar questões de TI mais rapidamente com o suporte exclusivo que o seu negócio precisa.
                     </p>
                     <a href="">Saiba mais</a>
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-md-7">
                 <div class="serv">

                     <h2>
                         Consultoria especializada em BI
                     </h2>
                     <h5>
                         Encontre os indicadores mais relevantes para o seu negócio
                     </h5>
                     <span></span>
                     <p>
                         O Business Intelligence (BI) permite tomar decisões inteligentes de forma mais assertiva, com base nos principais indicadores da sua empresa. O objetivo é o crescimento do seu negócio por meio da análise de dados e a integração de diferentes sistemas.
                     </p>
                     <a href="">Saiba mais</a>
                 </div>
             </div>
             <div class="col-md-5">
                 <div class="ilust-serv">
                     <img src="<?php bloginfo('template_url'); ?>/img/ilust-bi-2.png" class="img-responsive" alt="">
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-md-5">
                 <div class="ilust-serv">
                     <img src="<?php bloginfo('template_url'); ?>/img/ilust-bd.png" class="img-responsive" alt="">
                 </div>
             </div>
             <div class="col-md-7">
                 <div class="serv direita">

                     <h2>
                         Administração de banco de dados
                     </h2>
                     <h5>
                         Gerencie seus dados de maneira prática e segura
                     </h5>
                     <div class="">
                         <span></span>
                     </div>
                     <p>
                         O gerenciamento eficiente do seu banco de dados possibilita o acesso às principais informações sobre a sua empresa, o cálculo das perspectivas futuras do seu negócio, além de permitir identificar tendências e comportamentos do seu público.
                     </p>
                     <div>
                         <a href="">Saiba mais</a>
                     </div>

                 </div>
             </div>
         </div>


     </div>
 </div>

 <?php get_footer(); ?>