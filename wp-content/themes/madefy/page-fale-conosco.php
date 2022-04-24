<?php get_header(); ?>

<div class="bkg-contato">
    <div class="container">
        <div class="row">
            <div class="contato-form">
                <?php
                query_posts('pagename=fale-conosco');
                if (have_posts()) : while (have_posts()) : the_post();
                ?>

                        <?php the_content(); ?>
                    <?php endwhile; ?>
                <?php else : ?>
                    <p>Desculpe, nenhum conteúdo disponível.</p>
                <?php endif;
                wp_reset_query(); ?>

                <form action="<?php bloginfo('url'); ?>/gravar-contato" method="post">
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

<!-- 

<div class="localizacao">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Onde Estamos?</h2>
            </div>
            <div class="col-md-12">
                <img src="<?php bloginfo('template_url'); ?>/img/layout-2/loc-img.png" class="img-responsive" alt="">
            </div>
        </div>
    </div>
</div> -->
<!-- 
<div class="redundancia">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div>
                    <a href="<?php bloginfo('url'); ?>/">
                        <img src="<?php bloginfo('template_url'); ?>/img/logo-contato.png" class="img-responsive" alt="">
                    </a>

                </div>
            </div>
            <div class="col-md-6">
                <div class="redes-redundancia">
                    <a href="https://www.facebook.com/madefydev" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/layout-2/ico-fac.png" alt=""></a>
                    <a href="https://www.instagram.com/madefyoficial/" target="_blank"> <img src="<?php bloginfo('template_url'); ?>/img/layout-2/ico-inst.png" alt=""></a>
                    <a href="https://api.whatsapp.com/send/?phone=5562981778771&text=Ol%C3%A1%21+%0AEstou+vindo+atrav%C3%A9s+do+site+da+MadeFY.+Gostaria+de+saber+mais+%C3%A0+respeito+dos+servi%C3%A7os+oferecidos+pela+empresa%21&app_absent=0" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/layout-2/ico-whats.png" alt=""></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <p>Telefone</p>
                <a><span>(62) 3507-3447</span></a>

            </div>
            <div class="col-md-3">
                <p>Email</p>
                <a href="mailto: contato@madefy.com.br" target="_blank"><span>contato@madefy.com.br</span></a>
            </div>
        </div>
    </div>
</div> -->

<!--
<div class="banner-fale-conosco">
    <div class="container">
        <div class="row">
            <div class="col-md-4 anime">
                <h1>Fale Conosco</h1>
            </div>
            <div class="col-md-8 text-center anime-d">
                <img src="<?php bloginfo('template_url'); ?>/img/Working-amico-1.png" class="img-responsive" alt="">
            </div>
        </div>
    </div>
</div>

 <div class="fale-conosco">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center titulo-fale-conosco">
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

        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2 anime">
                <form action="">
                    <label for="">Seu nome <span>*</span> </label><br>
                    <input type="text" class="form-control">
                    <label for="">Seu email <span>*</span></label><br>
                    <input type="text" class="form-control">
                    <label for="">Seu Whatsapp <span>*</span></label><br>
                    <input type="text" class="form-control" id="telefone">

                    <label for="">Serviço de interesse <span>*</span> </label><br>
                    <select name="" id="">
                        <option value="">Selecionar</option>
                        <option value=" ">Desenvolvimento de aplicações web </option>
                        <option value=" ">Desenvolvimento de aplicativos</option>
                        <option value=" ">Desenvolvimento de API</option>
                        <option value=" ">Outsourcing de profissionais de TI </option>
                        <option value=" ">Consultoria especializada em BI </option>
                        <option value=" ">Administração de Banco de dados </option>
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

<script type="text/javascript">
    $("#telefone").mask("(00) 00000-0000");
</script>

<?php get_footer(); ?>