<?php $sobre = 117 ?>
<?php
// Template Name: Home
get_header();
?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <!-- Page Content -->
    <div class="container">

        <div class="area-home-introducao">
            <div class="row">
                <div class="col-sm-8">
                    <h1>
                        <?php the_field('titulo_home_introducao'); ?>
                    </h1>

                    <?php the_field('texto_home_introducao'); ?>

                    <p>
                        <a class="btn btn-primary btn-lg" href="<?php bloginfo('url'); ?>/sobre/">Saiba mais &raquo;</a>
                    </p>
                </div>
                <div class="col-sm-4">
                    <div class="videoInst">
                        <img class="img-square img-responsive img-center" src="<?php the_field('imagem_equipe_sobre', $sobre); ?>" alt="<?php the_field('descricao_imagem_equipe_sobre', $sobre); ?>">
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
        <!-- Orgaos -->
        <?php include(TEMPLATEPATH . "/inc/orgaos.php"); ?>

        <!-- Servicos -->
        <?php include(TEMPLATEPATH . "/inc/servicos-home.php"); ?>
    </div>

    <!-- /.row -->

    <hr>

    <?php endwhile; else: endif; ?>

    <?php get_footer(); ?>
