<?php?>

<?php $imagenes = get_slider_images();?>

<div class="banner">
  <ul>
  <li style="background-image: url('<?php echo $imagenes[0]->guid ?>');background-size: cover">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3">
            <div class="hero-title">
              Participa activamente
            </div>
            <p class="hero-content">Escribe tus articulos</p>
            <a href="#" class="hero-btn">Escribe aquí</a>
          </div>
        </div>
      </div>
    </li>

    <li style="background-image: url('<?php echo $imagenes[1]->guid ?>');background-size: cover">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3">
            <div class="hero-title">
              VERY PHOTO, SUCH WAVES, WOW.
            </div>
            <p class="hero-content">A very artsy photo with waves crashing over rocks. So /emosh.</p>
            <a href="#" class="hero-btn">BEER ME!</a>
          </div>
        </div>
      </div>
    </li>

  </ul>
</div>