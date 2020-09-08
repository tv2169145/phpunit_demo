<?php

use app\DemoCaller;
use PHPUnit\Framework\TestCase;

/**
 * Created by PhpStorm.
 * User: user
 * Date: 2020/9/8
 * Time: 下午 11:36
 */
include('helper.php');

class HelloWorldTest extends TestCase
{
    public function testHelloWorld()
    {
        $this->assertTrue(true);
    }

    public function testApiCaller()
    {
//        $caller = new DemoCaller("http://localhost:8888/");
        $caller = getCaller("DemoCaller", "http://localhost:8888/");
        $response = $caller->getTo();
        $decode_data = json_decode($response, true);
        var_dump($decode_data);
        $this->assertEquals($decode_data["name"], "jimmy");
        $this->assertEquals($decode_data["age"], 25);
    }

    public function testMockCaller()
    {
        $caller = getCaller("mock");
        $response = $caller->getTo();
        $decode_data = json_decode($response, true);
        var_dump($decode_data);
        $this->assertEquals($decode_data["name"], "jimmy");
        $this->assertEquals($decode_data["age"], 25);
    }
}