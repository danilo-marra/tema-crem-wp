<?php
get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="container">

    <div class="row">
        category
        <div class="col-sm-12">

            <?php endwhile; else: ?>

            <section class="introducao-interna introducao-geral">
                <div class="container">
                    <h1>Página não encontrada.</h1>
                </div>
            </section>

            <?php endif; ?>

        </div>

    </div>

</div>

<hr>


<?php get_footer(); ?>
