 <?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?> 

<?php include('inc/menuPrincipal.php'); ?>

 <div class="container">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<h1><?php the_title(); ?></h1>
			</div>
			<div class="col-md-12 col-xs-12 cols-sm-12">
				Por <?php the_author(', '); ?> el <?php the_time('F jS, Y'); ?> en <?php the_category(', ') ?> | <?php comments_popup_link('Sin comentarios »', '1 Comentario »', '% Comentarios »'); ?>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 col-xs-12 col-sm-12">
				<?php the_post_thumbnail(); ?>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 col-xs-12 col-sm-12">
				<?php the_content(); ?>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12 col-xs-12 col-sm-12">
				<h1>Comparte este artículo</h1>
			</div>
			<div class="col-md-12 col-xs-12 col-sm-12">
				<a target="_black" href="http://www.facebook.com/sharer.php?s=100&p[url]=<?php echo get_permalink() ?>"><i class="facebook-32"></i></a>
			</div>
		</div>

        <?php comments_template(); ?>


	<?php endwhile; ?>

	<?php else : ?>

		<h2>pagina no encontrada</h2>

	<?php endif; ?>
    </div>

<?php get_footer(); ?>