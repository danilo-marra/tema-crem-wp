<?php
get_header();
?>

<div class="container">


    <div class="row">

        <div class="col-sm-12">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <article>
                <h2>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title() ?>

                    </a>
                </h2>
                <p>
                    <?php the_excerpt() ?>
                </p>
            </article>
            <hr>
            <?php endwhile; ?>


            <div class="nav-blog">
                <?php next_posts_link( '← Posts Antigos' ); ?>
                <?php previous_posts_link( 'Posts Novos →' ); ?>
            </div>

            <?php else: endif; ?>

        </div>

    </div>

</div>
<hr>

<?php get_footer(); ?>
