<?php

	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('No recarge esta página directamente!');

	if ( post_password_required() ) { ?>
		<h2>Este post esta protegido. Por favor logueate para poder verlo</h2>
	<?php
		return;
	}
?>

<?php if ( have_comments() ) : ?>

	<h2 id="comments"><?php comments_number('No hay respuestas', '1 respuesta', '% respuestas' );?></h2>

	<div class="navigation">
		<div class="next-posts"><?php previous_comments_link() ?></div>
		<div class="prev-posts"><?php next_comments_link() ?></div>
	</div>

	<ul class="commentlist">


		<?php wp_list_comments('type=comment&callback=mytheme_comment'); ?>


		
	</ul>

	<div class="navigation">
		<div class="next-posts"><?php previous_comments_link() ?></div>
		<div class="prev-posts"><?php next_comments_link() ?></div>
	</div>

 <?php else : // this is displayed if there are no comments so far ?>

	<?php if ( comments_open() ) : ?>
		<!-- If comments are open, but there are no comments. -->

	 <?php else : // comments are closed ?>

		<p>Los comentarios se han cerrado.</p>

	<?php endif; ?>

<?php endif; ?>

<?php if ( comments_open() ) : ?>

<div id="respond">

	<h2><?php comment_form_title( 'Deja tu comentario', 'Deja un comentario a %s' ); ?></h2>

	<div class="cancel-comment-reply">
		<?php cancel_comment_reply_link('Cancelar tu respuesta'); ?>
	</div>

	<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
		<p><a href="<?php echo wp_login_url( get_permalink() ); ?>">Debes loguearte</a> para publicar un comentario.</p>
	<?php else : ?>

	<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

		<?php if ( is_user_logged_in() ) : ?>

			<p>Logueado como <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account">Desloguearse »</a></p>

		<?php else : ?>

			<div class="form-group">
				<label for="author">Nombre <?php if ($req) echo "(requerido)"; ?></label>
				<input required="" class="form-control" type="text" name="author" id="author" value="<?php echo esc_attr($comment_author); ?>" size="22" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
			</div>

			<div class="form-group">
				<label for="email">E-Mail (no sera publicado) <?php if ($req) echo "(required)"; ?></label>
				<input required="" class="form-control" type="email" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" size="22" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
			</div>

		<?php endif; ?>

		<!--<p>You can use these tags: <code><?php echo allowed_tags(); ?></code></p>-->

		<div>
			<label for="comment">Comentario</label>
			<textarea requrired="" class="form-control" name="comment" id="comment" cols="58" rows="10" tabindex="4"></textarea>
		</div>

		<div>
			<input class="btn btn-lg btn-default" name="submit" type="submit" id="submit" tabindex="5" value="Publicar comentario" />

			<?php comment_id_fields(); ?>
		</div>

		<?php do_action('comment_form', $post->ID); ?>

	</form>

	<?php endif; // If registration required and not logged in ?>

</div>

<?php endif; ?>