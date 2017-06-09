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
        <div class="col-sm-12">
            <h4>
                <a href="<?php the_permalink(); ?>">
                    <?php the_title() ?> </a>
            </h4>
            <p>
                <?php the_excerpt() ?> </p>
            <div class="botaoSaibaMais">
                <a class="btn btn-default btn-primary" href="<?php the_permalink(); ?>">Saiba mais &raquo;</a>
            </div>
            <hr>
        </div>
    </div>
</div>

<?php endwhile; ?>
<div class="nav-blog">
    <?php next_posts_link( '← Posts Antigos' ); ?>
    <?php previous_posts_link( 'Posts Novos →' ); ?>
</div>
<?php else: endif; ?>


<hr>

<?php get_footer(); ?>
