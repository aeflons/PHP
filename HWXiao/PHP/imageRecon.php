<?php
/**
 * Created by PhpStorm.
 * User: yujunzhen
 * Date: 2019/4/24
 * Time: 19:50
 */

require_once 'AipImageClassify.php';

const APP_ID = '16083753';
const API_KEY = 'EYQW69zB2UnBQEpdGox55jZs';
const SECRET_KEY = 'wC7OKkFhMQFU8eBd0fHw0HXRZ8w7k94R';
flowerReconfig();
function flowerReconfig()
{
    $path = "498159452_b71afd65ba.jpg";
    $image = file_get_contents($path);

    $client = new AipImageClassify(APP_ID, API_KEY, SECRET_KEY);
//     print_r($client);
    $options = array();
    $options["baike_num"] = 5;
    print_r($client->plantDetect($image, $options));


}
