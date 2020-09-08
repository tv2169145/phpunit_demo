<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2020/9/8
 * Time: 下午 11:47
 */

namespace app;


use ApiCaller;

include('interfaces/ApiCaller.php');

class DemoCaller implements ApiCaller
{
    public $to;

    public function __construct($to)
    {
        $this->to = $to;
    }

    public function getTo(): string
    {
        $url = $this->to;

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $output = curl_exec($ch);

        curl_close($ch);

        //echo $output;
        return $output;
    }
}