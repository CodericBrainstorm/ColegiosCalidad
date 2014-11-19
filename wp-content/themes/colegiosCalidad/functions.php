<?php
//Funcion obtener una imagen del post
function get_image_from_post($post){
    $media = get_attached_media('image');
    $seguir=true;
    $imagen = "";
    foreach($media as $indice=>$image){
        if($seguir){
            $imagen = $image->guid;
            $seguir = false;
        }
    }
    return $imagen;
}

function get_slider_images(){
    $args = array(
        'post_type' => 'attachment',
        'post_mime_type' =>'image',
        'post_status' => 'inherit',
        'posts_per_page' => 5
    );
    $query_images = new WP_Query( $args );
    $images = array();
    foreach ( $query_images->posts as $image) {
        $tempTitle = $image->post_title;
        if (strlen(strstr($tempTitle,"header"))>0){
            $images[]= $image;
        }else {
        }
    }
    return $images;
}

function get_only_text_post($post){
    $texto = strip_tags($post->post_content);
    return $texto;
}

function mytheme_comment($comment, $args, $depth) {

   $GLOBALS['comment'] = $comment; ?>
   <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
     <div id="comment-<?php comment_ID(); ?>">
      <div class="comment-author vcard">

         <?php echo get_avatar($comment,$size='48',$default='<path_to_url>' ); ?>

         <?php printf(__('<cite class="fn">%s</cite> <span class="says">says:</span>'), get_comment_author_link()) ?>
      </div>
      <?php if ($comment->comment_approved == '0') : ?>
         <em><?php _e('Estamos revisando tu comentario.') ?></em>
         <br />
      <?php endif; ?>

      <div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf(__('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a><?php edit_comment_link(__('(Edit)'),'  ','') ?></div>

      <?php comment_text() ?>

      <div class="reply">
         <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
      </div>
     </div>
<?php
}