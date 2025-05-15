<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EnvironmentTest extends TestCase
{
    public function testEnv()
    {
        $appName = env("YOUTUBE");

        self::assertEquals("Programmer Zaman Now", $appName);

        if (App::envirnment)
    }

    public function testDefaultValue()
    {

        $auther = env("AUTHOR", "Eko");
        self::assertEquals("Eko", $auther);

    }
}
