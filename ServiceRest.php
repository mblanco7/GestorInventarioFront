<?php

session_start();
const REST_URI = 'http://soporte.cystic.com.co/mblanco/public/api/';
const TOKEN = '_tk_';

class ServiceRest {

    static private function _tk(string|null $tk = null) {
        return array_key_exists(TOKEN, $_SESSION)? $_SESSION[TOKEN] : null;
    }

    static private function rest_call($method, $url, mixed $data = false, $contentType= false, $token = false)
    {
        $curl = curl_init();
        if($token){ //Add Bearer Token header in the request
            curl_setopt($curl, CURLOPT_HTTPHEADER, array(
                'Authorization: '.$token
            ));
        }
        switch ($method)
        {
            case "POST":
                curl_setopt($curl, CURLOPT_POST, 1);
                break;
            case "PUT":
                curl_setopt($curl, CURLOPT_PUT, 1);
                break;
            case "DELETE":
                curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");
                break;
            default:
                if ($data) $url = sprintf("%s?%s", $url, http_build_query($data));
        }
        if ($method == 'POST' || $method == 'PUT' || $method == 'DELETE') {
            if ($data){
                if($contentType){
                    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
                        'Content-Type: '.$contentType
                    ));
                }
                curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
            }
            
        }
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($curl);
        curl_close($curl);
        return $result;
    }

    static public function GET_JSON(string $url, mixed $data) {
        return ServiceRest::rest_call('GET', REST_URI.$url, $data, null, ServiceRest::_tk());
    }

    static public function POST_JSON(string $url, mixed $data) {
        $jsonData = json_encode($data);
        return ServiceRest::rest_call('POST', REST_URI.$url, $jsonData, 'appplication/json', ServiceRest::_tk());
    }

    static public function PUT_JSON(string $url, mixed $data) {
        $jsonData = json_encode($data);
        return ServiceRest::rest_call('PUT', REST_URI.$url, $jsonData, 'appplication/json', ServiceRest::_tk());
    }

    static public function DELETE_JSON(string $url, mixed $data) {
        $jsonData = json_encode($data);
        return ServiceRest::rest_call('PUT', REST_URI.$url, $jsonData, 'appplication/json', ServiceRest::_tk());
    }

}
