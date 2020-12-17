<?php

namespace Wprk\Tests\ReadableNumbers;

class ConvertsNumberToHumanReadableTest extends BaseTestCase
{
    /** @test */
    public function convertsNumberToHumanReadableZero()
    {
        $blade = '@longInt(0)';
        $this->assertBladeRenders("0", $blade);
    }

    /** @test */
    public function convertsNumberToHumanReadableNormal()
    {
        $blade = '@longInt(784)';
        $this->assertBladeRenders("784", $blade);
    }

    /** @test */
    public function convertsNumberToHumanReadableThousands()
    {
        $blade = '@longInt(123456)';
        $this->assertBladeRenders("123K+", $blade);
    }

    /** @test */
    public function convertsNumberToHumanReadableMillions()
    {
        $blade = '@longInt(123456789)';
        $this->assertBladeRenders("123M+", $blade);
    }

    /** @test */
    public function convertsNumberToHumanReadableBillions()
    {
        $blade = '@longInt(123456789012)';
        $this->assertBladeRenders("123B+", $blade);
    }

    /** @test */
    public function convertsNumberToHumanReadableTrillions()
    {
        $blade = '@longInt(123456789012345)';
        $this->assertBladeRenders("123T+", $blade);
    }
}
