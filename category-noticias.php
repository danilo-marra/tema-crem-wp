<?php
get_header();
?>

<div class="container">
    <div class="row">
        <?php include(TEMPLATEPATH . "/inc/introducao-categorias.php"); ?>
    </div>
    <hr>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="row">
        <div class="col-sm-2">
            <div class="container-media">
                <div class="media">
                    <div class="media-left media-middle">
                        <a href="<?php the_permalink(); ?>">
                            <img class="media-object" src="<?php the_field('imagem_thumb') ?>" alt="<?php the_field('alt_thumb') ?>">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-10">
            <div class="media-body">
                <h4 class="media-heading">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title() ?> </a>
                </h4>
                <p>
                    <?php the_excerpt() ?> </p>
                <div class="botaoSaibaMais">
                    <a class="btn btn-default btn-primary" href="<?php the_permalink(); ?>">Saiba mais &raquo;</a>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <?php endwhile; ?>
    <div class="nav-blog">
        <?php next_posts_link( '← Posts Antigos' ); ?>
        <?php previous_posts_link( 'Posts Novos →' ); ?>
    </div>
    <?php else: endif; ?>
</div>

<hr>

<?php get_footer(); ?>
