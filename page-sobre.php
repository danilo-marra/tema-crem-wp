<?php
// Template Name: Sobre
get_header();
?>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <!-- Page Content -->
    <div class="container">

        <?php include(TEMPLATEPATH . "/inc/introducao.php"); ?>

        <hr>

        <div class="row">
            <div class="col-sm-8">
                <?php the_field('texto_sobre');?>
            </div>
            <div class="col-sm-4">
                <div class="videoInst">
                    <img class="img-square img-responsive img-center" src="<?php the_field('imagem_equipe_sobre'); ?>" alt="Foto da Equipe CREM">
                </div>
            </div>
        </div>
        <!-- /.row -->

        <!-- Orgaos -->
        <?php include(TEMPLATEPATH . "/inc/orgaos.php"); ?>

        <hr>
        <!-- Servicos -->
        <div id="container-servicos">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="tituloCrem text-center">
                        <?php the_field('titulo_area_servicos'); ?>
                    </h2>
                    <p class="text-center">
                        <?php the_field('substitulo_area_servicos'); ?>
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4">
                    <img class="img-circle img-responsive img-center" src="<?php the_field('imagem_servico1'); ?>" alt="<?php the_field('descricao_img_servico1'); ?>">
                </div>
                <div class="col-sm-8">
                    <h2>
                        <?php the_field('titulo_servico1'); ?>
                    </h2>
                    <?php the_field('descricao_servico1'); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <img class="img-circle img-responsive img-center" src="<?php the_field('imagem_servico2'); ?>" alt="<?php the_field('descricao_img_servico2'); ?>">
                </div>
                <div class="col-sm-8">
                    <h2>
                        <?php the_field('titulo_servico2'); ?>
                    </h2>
                    <?php the_field('descricao_servico2'); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <img class="img-circle img-responsive img-center" src="<?php the_field('imagem_servico3'); ?>" alt="<?php the_field('descricao_img_servico3'); ?>">
                </div>
                <div class="col-sm-8">
                    <h2>
                        <?php the_field('titulo_servico3'); ?>
                    </h2>
                    <?php the_field('descricao_servico3'); ?>
                </div>
            </div>

        </div>
    </div>
    <hr>

    <?php endwhile; else: endif; ?>

    <?php get_footer(); ?>
