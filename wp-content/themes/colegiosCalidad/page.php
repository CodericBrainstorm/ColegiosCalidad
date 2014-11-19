<?php
/**
 * The template for displaying all pages
 *
 * Esta es la plantilla que se aplica a las paginas que se crea por defecto
 *
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<?php include('inc/menuPrincipal.php')?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="row">

<div class="col-md-12 col-xs-12 col-sm-12 content-page">
    <?php the_content(); ?> 
</div>

<?php endwhile; else: ?> 

<p><?php _e('Lo sentimos, no encontramos publicaciones para esta categoria.'); ?></p> 

<?php endif; ?> </div> </div>



<?php
get_footer();