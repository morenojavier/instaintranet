<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<?php
if (is_user_logged_in()) { ?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <!--[if IE]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>
    <div class="wrap" role="document">
      <div class="content row">
        <main class="main">
          <?php include Wrapper\template_path(); ?>
        </main><!-- /.main -->
        <?php if (Setup\display_sidebar()) : ?>
          <aside class="sidebar">
            <?php include Wrapper\sidebar_path(); ?>
          </aside><!-- /.sidebar -->
        <?php endif; ?>
      </div><!-- /.content -->
    </div><!-- /.wrap -->
    <?php
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
    ?>
  </body>
</html>

<? } else {
?>
<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <!--[if IE]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    
    <div class="wrap container-fluid" role="document">
      <div id="govillantas_intro" class="content row">
        <main class="main no-padding">
          <div class="col-md-6 govillantas-entrar pd-top-40"> 
            <div class="flex flex-column items-center justify-center center govillantas-entrar-container">
              <p>Govillantas</p>
              <p><img src="<?php echo get_template_directory_uri(); ?>/dist/images/logo.png" alt=""></p>
              <p>Govillantas su mejor opción para su consulta al mayoreo y menudeo.</p>  
            </div>
          </div>

          <div class="col-md-6 govillantas-form pd-bottom-20 pd-top-40"> 
            <div class="govillantas-form-text center">
              <p>Solicitud de acceso para la intranet</p>
              <p clas>Favor de llenar el formulario para que le autoricen un acceso a la plataforma de clientes mayoristas</p>
            </div>
            <p><?php echo do_shortcode('[contact-form-7 id="5" title="Solicitud de registro"]'); ?></p>
          </div>
         
        </main><!-- /.main -->
        
      </div><!-- /.content -->
    </div><!-- /.wrap -->
    
  </body>
</html>

<?php } ?>


