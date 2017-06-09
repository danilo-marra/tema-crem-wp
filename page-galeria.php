<?php
// Template Name: Galeria
get_header();
?>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <!-- Page Content -->
    <div class="container">

        <?php include(TEMPLATEPATH . "/inc/introducao.php"); ?>

        <hr>

        <!-- Container Noticias -->
        <div id="container-noticias">
            <div class="row">
                <div class="col-sm-2">
                    <div class="container-media">
                        <div class="media">
                            <div class="media-left media-middle">
                                <a href="#">
                                    <img class="media-object" src="http://placehold.it/120x120" alt="...">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-10">
                    <div class="media-body">
                        <h4 class="media-heading"><a href="#">Título Evento #1 </a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer quis purus massa. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer sed lorem sit amet eros sollicitudin convallis. Aenean ut felis id magna mattis semper ut quis nisi. Proin molestie, orci laoreet feugiat dictum, massa leo lobortis lectus, ac volutpat ipsum ex maximus erat. Quisque eu tellus suscipit, rutrum purus non, porta est. </p>
                        <div class="botaoSaibaMais">
                            <a class="btn btn-default btn-primary" href="#">Saiba mais &raquo;</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->

            <hr>

            <div class="row">
                <div class="col-sm-2">
                    <div class="container-media">
                        <div class="media">
                            <div class="media-left media-middle">
                                <a href="#">
                                    <img class="media-object" src="http://placehold.it/120x120" alt="...">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-10">
                    <div class="media-body">
                        <h4 class="media-heading"><a href="#">Título Evento #2 </a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer quis purus massa. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer sed lorem sit amet eros sollicitudin convallis. Aenean ut felis id magna mattis semper ut quis nisi. Proin molestie, orci laoreet feugiat dictum, massa leo lobortis lectus, ac volutpat ipsum ex maximus erat. Quisque eu tellus suscipit, rutrum purus non, porta est.</p>
                        <div class="botaoSaibaMais">
                            <a class="btn btn-default btn-primary" href="#">Saiba mais &raquo;</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->

            <hr>

            <div class="row">
                <div class="col-sm-2">
                    <div class="container-media">
                        <div class="media">
                            <div class="media-left media-middle">
                                <a href="#">
                                    <img class="media-object" src="http://placehold.it/120x120" alt="...">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-10">
                    <div class="media-body">
                        <h4 class="media-heading"><a href="#">Título Evento #3 </a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer quis purus massa. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer sed lorem sit amet eros sollicitudin convallis. Aenean ut felis id magna mattis semper ut quis nisi. Proin molestie, orci laoreet feugiat dictum, massa leo lobortis lectus, ac volutpat ipsum ex maximus erat. Quisque eu tellus suscipit, rutrum purus non, porta est.</p>
                        <div class="botaoSaibaMais">
                            <a class="btn btn-default btn-primary" href="#">Saiba mais &raquo;</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <div class="col-sm-12 text-center">
                <nav aria-label="Page navigation">
                    <ul class="pagination">
                        <li>
                            <a href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li>
                            <a href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-noticias -->

        <br>
    </div>

    <hr>

    <?php endwhile; else: endif; ?>

    <?php get_footer(); ?>
