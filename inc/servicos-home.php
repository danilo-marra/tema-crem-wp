<?php $sobre = 117 ?>
<hr>
<!-- Serviços na pagina home -->
<div id="container-servicos-home">

    <div class="row">
        <div class="col-sm-12">
            <h2 class="tituloCrem text-center">
                <?php the_field('titulo_area_servicos', $sobre); ?>
            </h2>
            <h3 class="call text-center">
                <?php the_field('substitulo_area_servicos', $sobre); ?>
            </h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="area-home-servicos">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img class="img-circle img-responsive img-center" src="<?php the_field('imagem_servico1', $sobre); ?>" alt="<?php the_field('descricao_img_servico1', $sobre); ?>">
                            <h2>
                                <?php the_field('titulo_servico1', $sobre); ?>
                            </h2>
                            <?php the_field('descricao_servico1', $sobre); ?>
                        </div>

                        <div class="item">
                            <img class="img-circle img-responsive img-center" src="<?php the_field('imagem_servico2', $sobre); ?>" alt="<?php the_field('descricao_img_servico2', $sobre); ?>">
                            <h2>
                                <?php the_field('titulo_servico2', $sobre); ?>
                            </h2>
                            <?php the_field('descricao_servico2', $sobre); ?>
                        </div>

                        <div class="item">
                            <img class="img-circle img-responsive img-center" src="<?php the_field('imagem_servico3', $sobre); ?>" alt="<?php the_field('descricao_img_servico3', $sobre); ?>">
                            <h2>
                                <?php the_field('titulo_servico3', $sobre); ?>
                            </h2>
                            <?php the_field('descricao_servico3', $sobre); ?>
                        </div>
                    </div>
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                </div>
            </div>
            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>
<?php if (!is_page('sobre')) { ?>
<div class="row">
    <div class="col-sm-12 text-center">
        <p>
            <?php the_field('call_servicos', $sobre);?>
        </p>
        <a class="btn btn-primary btn-lg" href="<?php bloginfo('url'); ?>/sobre/#container-servicos">Saiba mais &raquo;</a>
    </div>
</div>
<?php } ?>
