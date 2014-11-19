<?php wp_footer(); ?>
<footer>
      <div class="container">
        <div class="row">
          <div class="col-md-2">
            <h2>SI TIENEN LOGO</h2>
          </div>
          
          <?php $page = query_posts('pagename=footer'); ?>
          <div class="col-md-8">
            <p><?php echo $page[0]->post_content ?></p>
          </div>
          <div class="col-md-2">
            <ul class="footer-links">
              <li><a href="#">Foro</a></li>
            </ul>
          </div>
        </div>
      </div>  
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/unslider.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/slick.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
</body>
</html>