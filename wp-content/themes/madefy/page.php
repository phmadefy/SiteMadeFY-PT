<?php get_header(); ?>

<div class="bkg-contato">
    <div class="container">
        <div class="row">
            <div class="contato-form">
                <?php
                if (have_posts()) : while (have_posts()) : the_post();
                ?>

                    <h1><?php the_title(); ?> </h1>
                    <?php the_content(); ?>

                <?php endwhile; ?>
                <?php else : ?>
                    <p>Desculpe, nenhum conteúdo disponível.</p>
                <?php endif; wp_reset_query(); ?>

            </div>

        </div>
    </div>
</div>


<?php get_footer(); ?>