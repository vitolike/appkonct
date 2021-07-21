<?php
defined('BASEPATH') or exit('No direct script access allowed');

class rest
{
    function header($code = null)
    {
        header("Access-Control-Allow-Origin: *");
        header("Content-Type: application/json; charset=UTF-8");
        header("Access-Control-Allow-Methods: OPTIONS,GET,POST,PUT,DELETE");
        header("Access-Control-Max-Age: 3600");
        header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

        if($code == 200){
            header("HTTP/1.1 200 OK");
        }
        elseif($code == 404){
            header("HTTP/1.1 404 Not Found");
        }
        elseif($code == 422){
            header("HTTP/1.1 422 Unprocessable Entity");
        }
        elseif($code == 500){
            header("HTTP/1.1 500 Internal Server Error");
        }
        elseif($code == 502){
            header("HTTP/1.1 502 Bad Gateway");
        }
        elseif($code == 503){
            header("HTTP/1.1 503 Service Unavailable");
        }
        else{
            header("HTTP/1.1 400 Bad Request");
        };
        
    }

    function get($code, $data)
    {
        $this->header($code);
        echo json_encode($data);
    }
}

?>