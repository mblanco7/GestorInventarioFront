<?php
require_once 'ServiceLogin.php';
require_once 'ServiceRest.php';
require_once 'StandardResponse.php';

$name = $contrasenia = '';
if (sizeof($_POST) > 0) {
    $name = $_POST['ingEmail'];
    $contrasenia = $_POST['ingPassword'];
}
if ($name != null && strlen($name) > 0 &&
    $contrasenia != null && strlen($contrasenia)) {
    $response = ServiceLogin::login($name, $contrasenia);
    if ($response != null && strlen($response) > 0) {
        $rObject = new StandardResponse(json_decode($response));
        if ($rObject->status == 200) {
            $accesToken = $rObject->data;
            $_SESSION[TOKEN] = $accesToken;
            $contenidoJWT = explode(".", $accesToken)[1];
            $contenidoJWT = base64_decode($contenidoJWT);
            $contenidoJWT = json_decode($contenidoJWT);
            // CONTROLAR EL BOTON DE INICIO DE SESION DE LA PANTALLA Y MOSTRAR EL USUARIO
            $nombreUsuario = $contenidoJWT->usuario->usuario.' - '.$contenidoJWT->perfil->nombre;
            
        } else if ($rObject->status >= 400) {
            //TODO: MOSTRAR MENSJAE OBTENIDO DEL SERVICIO
            print($rObject->mensaje);
        }
    } else {
        //TODO: MOSTRAR MENSAJE DE ERROR DE QUE NO SE OBTUVO RESPUESTA DEL SERVICIO Y COMUNICARSE CON EL ADMINISTRADOR
    }
} else {
    //TODO: CONTROLAR MENSAJE FALTA VALOR
}

//header("Location: ./index.php");
