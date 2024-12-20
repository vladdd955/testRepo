<?php

class TestController
{

    public function testAction()
    {
        $x = 2;
        $y = 3;

        $res = $x + $y;



        return $res;
    }


    public function test2()
    {
        $rr = $this->testAction();

    }

    public function test3()
    {

    }
}