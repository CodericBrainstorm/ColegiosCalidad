<?php
/*
Template Name:componente
*/
?>

<?php get_header(); ?>

<?php include('inc/menuPrincipal.php')?>
<div class="container">
</div>
    
    <div class="text-inter">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h3>Lorem ipsum dolor sit amet consectetur adipiscing elit. Mauris mattis suscipit est, ut imperdiet tortor. Proin sed.</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris mattis suscipit est, ut imperdiet tortor. Proin sed molestie massa. Nullam condimentum mauris et rhoncus sagittis. Sed eu metus in diam tincidunt egestas non at odio. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
          <div class="divider"></div>
          <a href="#" class="button solid-color">BUTTON</a>
          <a href="#" class="button extra-color">BUTTON</a>
        </div>
        <div class="col-md-6">
          <h3>Lorem ipsum dolor sit amet consectetur adipiscing elit. Mauris mattis suscipit est, ut imperdiet tortor. Proin sed.</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris mattis suscipit est, ut imperdiet tortor. Proin sed molestie massa. Nullam condimentum mauris et rhoncus sagittis. Sed eu metus in diam tincidunt egestas non at odio.</p>
          <p>Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean vitae lectus erat. Duis consequat laoreet velit. Mauris convallis, sapien sit amet scelerisque accumsan, felis urna aliquet nunc, viverra mollis odio tellus a nisl. Nulla lobortis lectus non rutrum viverra. Sed et molestie libero. Sed ut ultrices dui.</p>
        </div>  
      </div>
    </div>
    </div>
    
    <div class="laptop-slider">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1 laptop-placeholder">
        <div class="slideshow">
        <figure class="show"><img alt="" src="<?php echo get_template_directory_uri(); ?>/img/slider/slide-01.png" /></figure>
        <figure><img alt="" src="<?php echo get_template_directory_uri(); ?>/img/slider/slide-02.png" /></figure>
        <figure><img alt="" src="<?php echo get_template_directory_uri(); ?>/img/slider/slide-01.png" /></figure>
        <figure><img alt="" src="<?php echo get_template_directory_uri(); ?>/img/slider/slide-02.png" /></figure>
        <span class="prev"><i class="fa fa-angle-left fa-4x"></i></span>
        <span class="next"><i class="fa fa-angle-right fa-4x"></i></span>
        </div>
        </div>
        <div> 
        </div>
      </div>
    </div>
    </div>
    <div class="quote-container">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
          <div class="col-md-10 col-md-offset-1">
            <div class="quote-slideshow">
              <figure class="show"><h2>Nam mi enim, auctor non ultricies a, fringilla eu risus. Praesent vitae lorem et elit tincidunt accumsan suscipit eu libero. </h2>
              <figcaption>
                Nam mi enim, auctor non ultricies.
              </figcaption>
              </figure>
              <figure><h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris mattis suscipit est, ut imperdiet tortor. Proin sed molestie massa.</h2>
              <figcaption>
                Nam mi enim, auctor.
              </figcaption>
              </figure>
            </div>
            </div>
            <span class="quote-prev circle"><i class="fa fa-angle-left fa-2x"></i></span>
            <span class="quote-next circle"><i class="fa fa-angle-right fa-2x"></i></span>
          </div>
        </div>
      </div>
    </div>
    <div class="shadow"></div>
<?php get_footer(); ?>