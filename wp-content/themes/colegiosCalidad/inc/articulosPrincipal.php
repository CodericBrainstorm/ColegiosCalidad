<?php $catExclude = get_cat_ID('frases')?>

<?php $limite = 24?>
<div class="container carousel">
    <div class="row">
       <div class="col-md-12">
           <h1>Últimos posts</h1>
       </div>
       
        
        <?php if(have_posts()): ?>
        <?php 
            $args = array('posts_per_page'=> $limite,'cat'=>'-'.$catExclude);
            $posts = get_posts($args); 
        ?>
        <div class="container carousel">
            <div class="row">
                <div class="col-md-12">
                    <div class="slider multiple-items">
                        <?php foreach($posts as $post):?>
                           <a href="<?php echo get_permalink() ?>">
                                <div <?php if(count($posts)==2)echo "class='col-md-6'";if(count($posts)==1)echo "class='col-md-12'";if(count($posts)==3)echo "class='col-md-4'";if(count($posts)>3)echo "class='col-md-3'"?>class="col-md-3">
                                    <div class="ca-hover">
                                        <div class="carousel-img">
                                            <img src="<?php echo(get_image_from_post($post)); ?>" alt="Carousel Img">
                                        </div>
                                        <div class="avatar img-circle">
                                           <?php echo get_avatar($post->post_author); ?>
                                        </div>
                                        <div class="carousel-content">
                                            <h3><?php echo $post->post_title ?></h3>
                                            <p><?php echo substr(get_only_text_post($post),0,130) ?></p>
                                        </div>
                                        <div class="overlay"></div>
                                    </div>
                                </div>
                            <!-- </a>-->
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <?php else: ?>
                <div-col-md-12 class="col-sm-12 col-xs-12">
                    <h1>No hay publicaciones</h1>
                </div-col-md-12>
            <?php endif; ?>     
        </div>
    </div>
</div>
<?php if(count($posts)>4): ?>
<div class="row">
   <div class="col-md-8 col-md-offset-2 text-right">
       <a href="#">Ver todos</a>
   </div>
</div>
<?php endif; ?>