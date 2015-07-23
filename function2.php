<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'function.php';

function getRedtubeVideos($page = 0, $category = false) {
    $http = 'http://api.redtube.com/';
    $call = 'redtube.Videos.searchVideos';


    $params = array(
        'output' => 'json',
        'data' => $call,
        'page' => $page,
        'search' => 'holly'
    );

    if ($category) {
        $params['category'] = $category;
    }

    $response = RedTubeApiCall($http, $params);

    if ($response) {
        $json = json_decode($response);
        if (isset($json->code) && isset($json->message)) {
            throw new Exception($json->message, $json->code);
        }
        return $json;
    }
    return false;
}

$page = 1;
$pages = 1;
set_time_limit(50);
while (true) {

    try {
        if ($page > $pages) {
            break;
        }

        $videoResponse = getRedtubeVideos($page);
        // If you want to get videos from specific category you should pass second parameter to getRedtubeVideos function which is the name of the category.
        // getRedtubeVideos($page,'CATEGORY_NAME_HERE');
        $videos = $videoResponse->videos;

        foreach ($videos as $video) {
            $video_obj = $video->video;
            //echo $video_obj->title;
            echo $video_obj->title;
            // you can do whatever you want with that video details
        }

        $pages = $videoResponse->count % 20 == 0 ? $videoResponse->count / 20 : floor($videoResponse->count) / 20;
        $page++;

        unset($videoResponse);
        unset($videos);

        sleep(2);
    } catch (Exception $e) {
        // Something is wrong with the response. You should handle that exception.
    }
}