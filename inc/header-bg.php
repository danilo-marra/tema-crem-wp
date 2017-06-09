<!-- Image Background Page Header -->
<!-- BG DESKTOP -->
<?php 
        $imagem_id = get_field('background_imagem');
        $background_large = wp_get_attachment_image_src($imagem_id, 'large');
    ?>
<style type="text/css">
    .business-header {
        background: url('<?php echo $background_large[0] ?>') center center no-repeat scroll;
        background-size: cover;
    }
</style>
<header class="business-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!--  <h1 class="tagline">Conselho Regional de Enfermagem do Mercosul</h1>-->
            </div>
        </div>
    </div>
</header>
