<form  name="loginform" id="loginform" action="<?php echo plugins_url()."/login/procesarForm.php" ?>" method="post" role="form">
    <div class="form-group">
        <label for="exampleInputEmail1">Usuario</label>
        <input type="email" class="form-control" name="log" id="user_login" value="">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="pwd" id="user_pass">
    </div>
    <button type="submit" class="btn btn-default">Iniciar sesión</button>
</form>


<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

<script type="text/javascript">
	$("#loginform").submit(function(e){
		var postData = $(this).serializeArray();
		var formURL = $(this).attr("action");
		$.ajax({
			url : formURL,
			type : "POST",
			data : postData,
			success:function(data, textStatus, jqXHR){
				if( (data.search("http://")==-1) ){
					$("#errores_form").html(data);
				}else{
					var url= window.location.pathname.split('/');
					if((url[1]==='cuidado-del-campus') || (url[1]==='comunicacion-participacion-y-confianza') || (url[1]==='cultura-academica') || (url[1]==='resolucion-de-conflictos-y-el-buen-trato')){
						window.location.reload(true);
					}else{
						window.setTimeout( function(){window.location = data;}, 100 );
					}
				}
			}
		});
		e.preventDefault();
	});
</script>
