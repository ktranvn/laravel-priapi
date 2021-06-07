<?php
if(!function_exists("ddcors")){
    function ddcors(...$args) {
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: *');
        header('Access-Control-Allow-Headers: *');
        dd(...$args);
    }
}

