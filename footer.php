<?php $contato = 19 ?>
<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <address>
                    <strong>Conselho Regional de Enfermagem do Mercosul</strong>
                    <?php the_field('dados_endereco', $contato); ?><br>
                    <abbr title="Telefone">Telefone: </abbr><?php the_field('telefone_endereco', $contato); ?><br>
                    <abbr title="Email">Email: </abbr> <a href="mailto:<?php the_field('email_endereco', $contato); ?>"><?php the_field('email_endereco', $contato); ?></a>
                </address>
            </div>
            <?php include(TEMPLATEPATH . "/inc/redes-sociais.php"); ?>
            <div class="col-sm-4">
                <p> <a href="http://www.cofen.gov.br/"><img src="http://londrina:40369/sistemaos/img/logos_dtic_desenvolvimento_peq.png"></a> <i class="fa fa-copyright" aria-hidden="true"></i> 
                    <?php echo date('Y'); ?></p> 
            </div>
        </div>
    </div>
    <!-- /.row -->
</footer>

<!-- /.container -->

<!-- Inicio Wordpress Footer -->
<?php wp_footer(); ?>
<!-- Final Wordpress Footer -->

</body>

</html>
