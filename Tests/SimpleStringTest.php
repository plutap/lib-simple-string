<?php

namespace Gajdaw\TddExamples\SimpleString\Tests;

use Gajdaw\TddExamples\SimpleString\SimpleString;
use Symfony\Component\Yaml\Yaml;

class SimpleStringTest extends \PHPUnit_Framework_TestCase
{

    public function testNl2br()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }

    /**
     * @dataProvider getRemoveDigitsData
     *
     */
    public function testRemoveDigits($string, $result)
    {
        $this->assertEquals($result, SimpleString::removeDigits($string));
    }

    public function getRemoveDigitsData()
    {
        return Yaml::parse(
            file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . 'Fixtures' . DIRECTORY_SEPARATOR . 'removeDigits.yml')
        );
    }


    public function testAddString()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }

    public function testReplaceA()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }

}
