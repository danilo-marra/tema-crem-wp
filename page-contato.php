<?php
// Template Name: Contato
get_header();
?>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <!-- Page Content -->
    <div class="container">

        <?php include(TEMPLATEPATH . "/inc/introducao.php"); ?>

        <hr>

        <div class="row">
            <div class="col-sm-8">
                <?php echo do_shortcode('[wpforms id="251"]'); ?>
            </div>
            <div class="col-sm-4">
                <address>
                    <strong><?php bloginfo('name'); ?></strong>
                    <?php the_field('dados_endereco'); ?><br>
                    <abbr title="Telefone">Telefone: </abbr><?php the_field('telefone_endereco'); ?><br>
                    <abbr title="Email">Email: </abbr> <a href="mailto:<?php the_field('email_endereco'); ?>"><?php the_field('email_endereco'); ?></a>
                </address>
            </div>
            <?php include(TEMPLATEPATH . "/inc/redes-sociais.php"); ?>
        </div>
        <!-- .row -->
    </div>

    <hr>

    <?php endwhile; else: endif; ?>

    <?php get_footer(); ?>
