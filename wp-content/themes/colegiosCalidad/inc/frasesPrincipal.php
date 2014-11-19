<?php $frases = query_posts(array('category_name'=>'frases'))?>
<div class="quote-container">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
          <div class="col-md-10 col-md-offset-1">
            <div class="quote-slideshow">
                <?php foreach($frases as $index=>$frase):?>
                    <figure <?php if($index==0)echo "class='show'" ?>>
                        <h2><?php echo $frase->post_content?></h2>
                        <figcaption><?php echo $frase->post_title?></figcaption>
                    </figure>
                <?php endforeach; ?>
            </div>
            </div>
                <span class="quote-prev circle"><i class="fa fa-angle-left fa-2x"></i></span>
                <span class="quote-next circle"><i class="fa fa-angle-right fa-2x"></i></span>

          </div>
        </div>
      </div>
    </div>