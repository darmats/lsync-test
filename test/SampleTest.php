<?php

use PHPUnit\Framework\TestCase;

class SampleTest extends TestCase
{
    public function testShared()
    {
        self::assertTrue(file_exists('/vagrant/test/SampleTest.php'));
        self::assertTrue(file_exists('/vagrant/test/sampletest.php'));
        self::assertTrue(file_exists('/vagrant/TEST/SAMPLETEST.PHP'));
    }

    public function testSync()
    {
        self::assertTrue(file_exists('/opt/.sync/test/SampleTest.php'));
        self::assertFalse(file_exists('/opt/.sync/test/sampletest.php'));
        self::assertFalse(file_exists('/opt/.sync/TEST/SAMPLETEST.PHP'));
    }
}
