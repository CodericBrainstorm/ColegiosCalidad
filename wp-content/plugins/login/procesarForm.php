<?php
include('../../../wp-load.php');

$username = $_POST['log'];
$password = $_POST['pwd'];

login_nacional($username,$password);

function login_nacional($username,$password){
	if(empty($username) || empty($password)){
		//No se han ingresado todos los datos
		echo "Alguno de los campos se encuentra vacio";
	}else{
		//Verificar usuario
		$user = wp_authenticate($username,$password);
		if(is_wp_error($user)){
			if(query_ldap($username,$password)){
                $ID = registrar_usuario($username,$password);
                wp_set_auth_cookie($ID);
                redireccionar();
            }else{
                echo "Nombre de usuario o contraseña incorrecto";    
            }
		}else{
			wp_set_auth_cookie($user->ID);
			redireccionar();
		}
	}
}

function redireccionar(){
    echo get_option('home');
}

function registrar_usuario($username,$password){
    $userargs = array(
        'user_login' => $username,
        'user_email' => $username.'@unal.edu.co',
        'user_pass' => $password,
        'role' => 'subscriber'
    );
    $user = wp_insert_user($userargs);
    return $user;
};

function bd_temporal($usuario,$password){

    $resultado = false;
    $conexion = mysql_connect("localhost", "root", "7nai91mac");
    $query_usuario = "SELECT * FROM pruebaLDAP.usuario WHERE usuario='".$usuario."' AND password='".$password."'";
    $consulta = mysql_query($query_usuario, $conexion) or die(mysql_error());
    $total = mysql_num_rows($consulta);
    if($total >0 )
        $resultado = true;
    return $resultado;
};

function query_ldap($usuario, $password){
        $busqueda = false;
        $login = $usuario;
        $pass = $password;
        $ldapHost = "ldap://undirectorio.unal.edu.co"; 
        $ldapPort = "389"; 
        $ldapBusqueda ="uid=user_ldap,ou=institucional,o=bogota,o=unal.edu.co"; 
        $ldapBPassword="consultaldap"; 
        $identificadorUsuario="uid";
        $dn="o=unal.edu.co"; 
        $FiltroBaseUsuario=array('uid','cn','mailuserstatus','mail'); // Datos a ser extraidos del LDAP para el usuario
        $FiltroBaseUsuario=array();
        if($ldapLink =ldap_connect($ldapHost, $ldapPort)){
            if (ldap_set_option($ldapLink,LDAP_OPT_PROTOCOL_VERSION,3)){
                $ExitoConBusqueda=@ldap_bind($ldapLink,$ldapBusqueda,$ldapBPassword);
                if ($ExitoConBusqueda){
                    $result = ldap_search ($ldapLink,$dn,"(&(".$identificadorUsuario."=".$login.")".")", $FiltroBaseUsuario) or die(ldap_error($ldapLink));
                    $datos = ldap_get_entries($ldapLink, $result);
                    if (trim($pass)!='' && ldap_count_entries($ldapLink,$result)!=0 ) {
                        $validPass=@ldap_bind($ldapLink,$datos[0]["dn"],$pass);
                        //ldap_close($ldapLink);
                        if ($validPass){
                            $busqueda = true;
                        } 
                    }   
                }    
            }
            //ldap_close($ldapLink);
        }
    return $busqueda;
};



?>