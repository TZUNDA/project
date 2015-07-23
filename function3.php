<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'function.php';
$response = sendRequest('redtube.Stars.getStarList');
                        if ($response) {
                            $json = json_decode($response, true);
                            $stars = $json['stars'];
                            
                            foreach ($stars as $star) {
                                echo $star['star']['star_name'];
                        }
                        
                            }
