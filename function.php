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

$http = 'http://api.redtube.com/';
$call = 'redtube.Categories.getCategoriesList';


$params = array(
    'output' => 'json',
    'data' => $call
);

$response = RedTubeApiCall($http, $params);

if ($response) {
    $json = json_decode($response, true);

    $users = $json['categories'];
    foreach ($users as $user) {
        echo $user['category']."\n\n";
    }
}
?>