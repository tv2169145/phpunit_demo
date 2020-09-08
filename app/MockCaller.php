<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2020/9/9
 * Time: 上午 12:25
 */

namespace app;

use ApiCaller;

include('interfaces/ApiCaller.php');


class MockCaller implements ApiCaller
{
    public function getTo(): string
    {
        $response = ["name" => "jimmy", "age" => "25"];
        $to_Json_data = json_encode($response);
        return $to_Json_data;
    }
}