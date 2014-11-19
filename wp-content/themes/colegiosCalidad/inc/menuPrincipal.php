<header class="clearfix">
  <div class="logo col-md-3"><h2 class="logo-text">LOGO PROYECTO</h2></div>
  <nav class="clearfix">
   <ul class="clearfix">
     <li><a href="<?php echo home_url() ?>" class="active">Home</a></li>
     <li><a href="<?php echo home_url().'/dwqa-questions' ?>">Respuestas</a></li>
     <li class="dropdown">
      <a data-toggle="dropdown" class="dropdown-toggle" role="button" href="#" id="drop1">Componentes <span class="caret"></span></a>
      <ul aria-labelledby="drop1" role="menu" class="dropdown-menu">
        <li role="presentation"><a href="<?php echo home_url().'/componente-academico' ?>" tabindex="-1" role="menuitem">Académico</a></li>
        <li role="presentation"><a href="<?php echo home_url().'/componente-directivo' ?>" tabindex="-1" role="menuitem">Directivo</a></li>
        <li role="presentation"><a href="<?php echo home_url().'/componente-comunitario' ?>" tabindex="-1" role="menuitem">Comunitario</a></li>
      </ul>
    </li>
    <?php if(is_user_logged_in()):?>
      <li><a href="#">Mi institución</a></li>
      <li><a href="#">Cerrar sesión</a></li>
    <?php else:?>
      <li><a href="#" data-toggle="modal" data-target="#myModal">Iniciar sesión</a></li>
    <?php endif;?>
    <?php include('modalLogin.php')?>

    <li><a href="#" class="last">Contacto</a></li>
  </ul>
</nav>
<div class="pullcontainer">
  <a href="#" id="pull"><i class="fa fa-bars fa-2x"></i></a>
</div>     
</header>