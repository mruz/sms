<?php

namespace Tzsk\Sms\Tests\Drivers;

use Tzsk\Sms\Tests\Mocks\Drivers\MockTextLocal;
use Tzsk\Sms\Tests\TestCase;

class TextlocalTest extends TestCase
{
    use DriverCommon;

    protected function getDriver()
    {
        return new MockTextLocal();
    }
}
