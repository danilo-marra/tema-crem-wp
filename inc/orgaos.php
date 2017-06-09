<?php $sobre = 117 ?>
<hr>
<!-- Órgãos -->
<div id="container-orgaos">
    <div class="row">
        <div class="col-sm-12">
            <h2 class="tituloCrem text-center">
                <?php the_field('titulo_pagina_orgaos', $sobre); ?>
            </h2>
            <h3 class="call text-center">
                <?php the_field('substitulo_pagina_orgaos', $sobre);?>
            </h3>
        </div>
    </div>


    <div class="area-home-orgaos">
        <div class="row">
            <?php if(have_rows('item_orgao', $sobre)): while(have_rows('item_orgao', $sobre)) : the_row(); ?>

            <div class="col-sm-3">
                <img class="img-circle img-responsive img-center" src="<?php the_sub_field('imagem_orgao', $sobre); ?>" alt="<?php the_sub_field('descricao_orgao', $sobre); ?>">
                <h2 class="text-center">
                    <?php the_sub_field('titulo_orgao', $sobre);?>
                </h2>
                <p>
                    <?php the_sub_field('texto_orgao', $sobre);?>
                </p>
                <?php if (!is_page('sobre')) { ?>
                <a class="btn btn-primary btn-default btpadrao" href="<?php bloginfo('url'); ?>/sobre">Saiba mais &raquo;</a>
                <?php } ?>
            </div>

            <?php endwhile; else : endif; ?>
        </div>
    </div>
</div>
