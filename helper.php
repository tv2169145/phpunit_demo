<?php

use app\DemoCaller;
use app\MockCaller;

/**
 * Created by PhpStorm.
 * User: user
 * Date: 2020/9/9
 * Time: 上午 12:30
 */


function getCaller(string $caller_name, string $to = "")
{
    if ($caller_name !== "mock") {
        return new DemoCaller($to);
    } else {
        return new MockCaller();
    }
}
