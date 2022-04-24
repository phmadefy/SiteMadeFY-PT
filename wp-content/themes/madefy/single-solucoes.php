<?php get_header(); ?>
<div class="banner-web">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center anime">
                <img src="<?php bloginfo('template_url'); ?>/img/servicos/<?php echo get_the_ID(); ?>.png" class="img-responsive" alt="<?php the_title() ?>">
            </div>
            <div class="col-md-6 anime-d">
                <h1><?php the_title() ?></h1>
            </div>
        </div>
    </div>
</div>


<div class="single-servicos">
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <?php
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

        <div class="row">
            <div class="col-md-12">

                <div class="contato-form">

                    <h2>Fale com a MadeFY</h2>

                    <p>Preencha o formulário abaixo para solicitar um orçamento!</p>

                    <form action="https://www.madefy.com.br/sucesso/" method="post" name="<?php echo sanitize_title(get_the_title( )); ?>" id="<?php echo sanitize_title(get_the_title( )); ?>">
                        <input type="text" name="nome" class="form-control" placeholder="Nome" required>

                        <div class="inf">
                            <input type="text" name="telefone" class="form-control" placeholder="Telefone" id="telefone" required>
                            <input type="email" name="email" class="form-control" placeholder="E-mail" required>
                        </div>
                        <textarea name="mensagem" class="form-control" rows="5" placeholder="Mensagem" required></textarea>
                        <div class="g-recaptcha" data-sitekey="6Lf12JgfAAAAAKoYbmP3xlzRMHEB2a7yNTC6qwkN"></div>
                        <button type="submit">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>







<?php get_footer(); ?>