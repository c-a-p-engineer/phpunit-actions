<?php

require_once('vendor/autoload.php');

class VersionTest extends PHPUnit\Framework\TestCase
{
    /**
     * PHPバージョンテスト
     * @test
     * 
     * @return void
     */
    public function version() {
        $version = explode('.', PHP_VERSION);
        $this->assertEquals($version[0], 8);
        $this->assertEquals($version[1], 0);
    }
}