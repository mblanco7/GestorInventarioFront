<?php
require_once 'ServiceRest.php';

class ServiceLogin {

    private static $loginUrl = "login/getToken";

    static public function login(string $usr, string $psw) {
        $data = [
            "usuario" => $usr,
            "contrasenia" => $psw
        ];
        return ServiceRest::POST_JSON(ServiceLogin::$loginUrl, $data);
    }

}