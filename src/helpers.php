<?php
if(!function_exists("ddcors")){
    function ddcors(...$args) {
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: *');
        header('Access-Control-Allow-Headers: *');
        dd(...$args);
    }
}

if(!function_exists("genToken")){
    function genToken($payload, $secret) {
        $salt = "20210531";
        $secret = $secret.$salt;
        $header =  base64_encode(json_encode([
                "alg" => "HS256",
                "typ" => "jwt"
            ]));
        $payload = base64_encode(json_encode($payload));
        $string = $header.".".$payload;
        // dump($secret);
        // dump($string);
        // dump(hash_hmac('sha256', $string, $secret));

        return $string.".".base64_encode(hash_hmac('sha256', $string, $secret));
    }
}

