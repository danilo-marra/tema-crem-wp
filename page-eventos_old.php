<?php
// Template Name: Eventos
get_header();
?>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <!-- Page Content -->
    <div class="container">

<?php include(TEMPLATEPATH . "/inc/introducao.php"); ?>

        <hr>

        <div class="row">
            <div class="col-sm-8">
                <h2>Sobre o CREM</h2>
                <p>Introduce the visitor to the business using clear, informative text. Use well-targeted keywords within your sentences to make sure search engines can find the business.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et molestiae similique eligendi reiciendis sunt distinctio odit? Quia, neque, ipsa, adipisci quisquam ullam deserunt accusantium illo iste exercitationem nemo voluptates asperiores. Introduce the visitor to the business using clear, informative text. Use well-targeted keywords within your sentences to make sure search engines can find the business</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et molestiae similique eligendi reiciendis sunt distinctio odit? Quia, neque, ipsa, adipisci quisquam ullam deserunt accusantium illo iste exercitationem nemo voluptates asperiores. Introduce the visitor to the business using clear, informative text. Use well-targeted keywords within your sentences to make sure search engines can find the business</p>
            </div>
            <div class="col-sm-4">
                <div class="videoInst">
                    <img class="img-square img-responsive img-center" src="http://placehold.it/250x250" alt="">
                </div>
            </div>
        </div>
        <!-- /.row -->
        <br>
        <div class="row">
            <div class="col-sm-4">
                <div class="videoInst">
                    <img class="img-square img-responsive img-center" src="http://placehold.it/250x250" alt="">
                </div>
            </div>
            <div class="col-sm-8">
                <p>Introduce the visitor to the business using clear, informative text. Use well-targeted keywords within your sentences to make sure search engines can find the business.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et molestiae similique eligendi reiciendis sunt distinctio odit? Quia, neque, ipsa, adipisci quisquam ullam deserunt accusantium illo iste exercitationem nemo voluptates asperiores. Introduce the visitor to the business using clear, informative text. Use well-targeted keywords within your sentences to make sure search engines can find the business</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et molestiae similique eligendi reiciendis sunt distinctio odit? Quia, neque, ipsa, adipisci quisquam ullam deserunt accusantium illo iste exercitationem nemo voluptates asperiores. Introduce the visitor to the business using clear, informative text. Use well-targeted keywords within your sentences to make sure search engines can find the business</p>
            </div>
        </div>

        <div id="container-servicos">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="tituloCrem text-center">Saiba o que o CREM pode fazer por você</h2>
                </div>
                <div class="col-sm-4">
                    <img class="img-circle img-responsive img-center" src="http://placehold.it/300x300" alt="">
                </div>
                <div class="col-sm-8">
                    <h2>Serviço #1</h2>
                    <p>These marketing boxes are a great place to put some information. These can contain summaries of what the company does, promotional information, or anything else that is relevant to the company. These will usually be below-the-fold.</p>
                    <p>These marketing boxes are a great place to put some information. These can contain summaries of what the company does, promotional information, or anything else that is relevant to the company. These will usually be below-the-fold.</p>
                    <p>These marketing boxes are a great place to put some information. These can contain summaries of what the company does.</p>
                </div>
            </div>
            <!-- .row -->
            <div class="row">
                <div class="col-sm-4">
                    <img class="img-circle img-responsive img-center" src="http://placehold.it/300x300" alt="">
                </div>
                <div class="col-sm-8">
                    <h2>Serviço #2</h2>
                    <p>These marketing boxes are a great place to put some information. These can contain summaries of what the company does, promotional information, or anything else that is relevant to the company. These will usually be below-the-fold.</p>
                    <p>These marketing boxes are a great place to put some information. These can contain summaries of what the company does, promotional information, or anything else that is relevant to the company. These will usually be below-the-fold.</p>
                    <p>These marketing boxes are a great place to put some information. These can contain summaries of what the company does.</p>
                </div>
            </div>
            <!-- .row -->
            <div class="row">
                <div class="col-sm-4">
                    <img class="img-circle img-responsive img-center" src="http://placehold.it/300x300" alt="">
                </div>
                <div class="col-sm-8">
                    <h2>Serviço #3</h2>
                    <p>These marketing boxes are a great place to put some information. These can contain summaries of what the company does, promotional information, or anything else that is relevant to the company. These will usually be below-the-fold.</p>
                    <p>These marketing boxes are a great place to put some information. These can contain summaries of what the company does, promotional information, or anything else that is relevant to the company. These will usually be below-the-fold.</p>
                    <p>These marketing boxes are a great place to put some information. These can contain summaries of what the company does.</p>
                </div>
            </div>
            <!-- .row -->
        </div>

        <hr>

        <?php endwhile; else: endif; ?>

        <?php get_footer(); ?>
