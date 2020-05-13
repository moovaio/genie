<?php

use Mockery as m;

class TestCase extends PHPUnit\Framework\TestCase
{

    public function tearDown() :void
    {
        m::close();
    }
}
