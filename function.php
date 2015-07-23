<?php

// Simple url builder function.
// You can use CURL for passing HTTP GET parameters and to call the RedTube API.

function RedTubeApiCall($http_server, $params = array()) {
    $query_string = '?';

    if (is_array($params) && count($params)) {
        foreach ($params as $k => $v) {
            $query_string .= $k . '=' . $v . '&';
        }
        $query_string = rtrim($query_string, '&');
    }

    $content = file_get_contents($http_server . $query_string);
    return $content;
}

function sendRequest($request) {//esta funcion ace toa la peticion, solo le pasamos el metodo a ejecutar
    $params = array(
        'output' => 'json',
        'data' => $request
    );
    $resp = RedTubeApiCall('http://api.redtube.com/', $params);
    return $resp;
}
