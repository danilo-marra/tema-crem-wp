<?php
get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <section class="introducao-interna introducao-geral">
                <h1>
                    <?php the_title(); ?>
                </h1>
                <hr>
            </section>

            <section class="conteudo-geral">
                <?php the_content(); ?>
            </section>

            <?php endwhile; else: ?>

            <section class="introducao-interna introducao-geral">
                <h1>Página não encontrada.</h1>
            </section>

            <?php endif; ?>
        </div>


    </div>
</div>

<hr>


<?php get_footer(); ?>
