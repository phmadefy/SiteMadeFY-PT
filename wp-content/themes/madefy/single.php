 <?php get_header() ?>

 <section class="page-blog">
        <div class="container">
                <div class="row">
                    <div class="col-md-8 anime">
                        <div class="post-single">
                            <?php
                                if (have_posts()) : while (have_posts()) : the_post();
                                ?>
                                    <article class="text-single-blog">
                                        <h1><?php the_title(); ?></h1>
                                        <div class="data">Postado em <?php the_time('d \d\e F Y'); ?></div>
                                        <p>
                                            <?php the_content(); ?>
                                        </p>
                                    </article>
                                <?php endwhile; ?>
                            <?php else : ?>
                                <p>Desculpe, nenhum conteúdo disponível.</p>
                            <?php endif;
                                wp_reset_query(); ?>
                    
                            <div class="btn-voltar">
                                <a href="javascript: history.back();"><img src="<?php bloginfo('template_url'); ?>/img/right-arrow.png" />  Voltar </a>
                            </div>
                        </div>
                    </div>
                            
                    <div class="col-md-3 col-md-offset-1 anime-d">
                        <?php get_sidebar(); ?>
                    </div>
                </div>
        </div>
 </section>

 <?php get_footer() ?>