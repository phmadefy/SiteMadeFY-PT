<?php get_header() ?>

<section class="page-blog">
    <div class="container">
        <div class="row">
            <div class="col-md-12 anime">
                <h1>Made<strong>FY</strong> Blog - <b><?php single_cat_title(); ?> </b> </h1>
            </div>
        </div>
        <?php
        $contalinha = 0;
        query_posts('post_type=post&posts_per_page=8');
        if (have_posts()) : while (have_posts()) : the_post();

                if ($contalinha == 0) {
                    echo '<div class="row">';
                }
        ?>
                <div class="post">
                    <div class="col-md-6 anime-d">

                        <div class="post-imagem">
                            <a href="<?php the_permalink(); ?>">
                                <?php
                                if (has_post_thumbnail()) {
                                    the_post_thumbnail('full', array('class' => 'img-responsive'));
                                } else {
                                    echo '<img src="' . get_bloginfo('stylesheet_directory')
                                        . '/img/sem-foto.jpg" class="img-responsive" />';
                                }
                                ?>
                            </a>
                        </div>
                        <div class="info-post">
                            
                                <span><?php the_category(' ');  ?></span>
                                <div class="data"><?php the_time('d \d\e F Y'); ?></div>
                                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </h3>
                             
                        </div>
                    </div>
                </div>
                <?php
                if ($contalinha == 1) {
                    echo '</div>';
                    $contalinha = 0;
                } else {
                    $contalinha++;
                }
                ?>

            <?php endwhile; ?>
        <?php else : ?>
            <p>Desculpe, nenhum conte??do dispon??vel.</p>
        <?php endif;
        wp_reset_query(); ?>

        <?php
        if ($contalinha >= 1) {
            echo '</div>';
        }
        ?>

    </div>
</section>
<!-- 
<div class="fale-conosco">
    <div class="container">
        <div class="row">
            <div class="col-md-12 anime">
                <div class="text-center titulo-fale-conosco">
                    <h2>Ficou com alguma <strong>d??vida</strong> ou <strong>interessado</strong> ? Ent??o fale conosco
                    </h2>
                    <p>Preencha o formul??rio abaixo que, em breve um de nossos consultores entrar?? em contato.</p>
                    <a href="">ou Entre em Contato pelo Whatsapp</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2 anime-d">
                <form action="">
                    <label for="">Seu nome <span>*</span> </label><br>
                    <input type="text" class="form-control">
                    <label for="">Seu email <span>*</span></label><br>
                    <input type="text" class="form-control">
                    <label for="">Seu Whatsapp <span>*</span></label><br>
                    <input type="text" class="form-control">

                    <label for="">Servi??o de interesse <span>*</span> </label><br>
                    <select name="" id="">
                        <option value="">Selecionar</option>
                        <option value=" ">Desenvolvimento de aplica????es web </option>
                        <option value=" ">Desenvolvimento de aplicativos</option>
                        <option value=" ">Desenvolvimento de API</option>
                        <option value=" ">Outsourcing de profissionais de TI </option>
                        <option value=" ">Consultoria especializada em BI </option>
                        <option value=" ">Administra????o de Banco de dados </option>
                        <option value="">Outros</option>
                    </select>


                    <label for="">Escreva a sua mensagem <span>*</span></label><br>
                    <textarea name="" id="comentario" cols="30" rows="5" class="form-control"></textarea>
                    <button>Enviar mensagem</button>

                </form>
            </div>
        </div>
    </div>
</div> -->
<?php get_footer(); ?>