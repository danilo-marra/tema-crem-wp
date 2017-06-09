<?php $contato = get_page_by_title('contato') ?>
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
                <p><i class="fa fa-copyright" aria-hidden="true"></i>
                    <?php echo date('Y'); ?> Desenvolvido por: <br><a href="http://www.cofen.gov.br/">Conselho Federal de Enfermagem</a></p>
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
