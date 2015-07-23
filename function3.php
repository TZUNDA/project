<?php include 'smartNav.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$response = sendRequest('redtube.Stars.getStarDetailedList');
if ($response) {
    $json = json_decode($response, true);
    $stars = $json['stars'];

    $i = 0;
    foreach ($stars as $star) {
        //echo '<a href="' . $star['star']['star_url'] . '" ><img src="' . $star['star']['star_thumb'] . '">';
        if ($i < 100) {
            //AJAX¿?
            echo "
                                    <div class=\"col-sm-3\">
                                    <div>
                                    <div><a href=" . $star['star']['star_url'] . "><img src=" . $star['star']['star_thumb'] . "></div>
                                    <div>" . $star['star']['star_name'] . "</div>
                                    <div class = \"divider\"></div>
                                    </div>
                                    </div>";



            $i+=1;
//                if ($i % 5 == 0) {
//                    sleep(4);
//                }
        }
    }
}
                     