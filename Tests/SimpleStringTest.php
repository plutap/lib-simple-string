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

    public function testStringBarcelona() 
    {
        $this->markTestIncomplete('This test has not been implemented yet');
    }
    
    public function testTrollo() 
    {
        $this->markTestIncomplete('This test has not been implemented yet');
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
    public function testReplaceATOHello(){
        $this->markTestIncomplete('This test has not been implemented yet.');
    }

    /**
     * @dataProvider getAddString
     */

    public function testAddString($result, $s1, $s2)
    {
        $this->assertEquals($result, SimpleString::addString($s1, $s2));
    }
    public function getAddString()
    {
        return array(
            array('Ala', 'A','la'),
        );
    }


    public function testRemoveA()
    {
        $this->assertEquals('adam', SimpleString::removea('dm'));
        //nie działa :P
        //no nie i koniec!
    }

    public function testWordBehind()
    {
        $this->assertEquals('tset', SimpleString::wordBehind('test'));
        $this->assertEquals('aicbab', SimpleString::wordBehind('babcia'));
    }

    public function testReplaceA()
    {
        $this->assertEquals("@l@", SimpleString::replaceA("Ala"));
        $this->assertEquals("Ol@", SimpleString::replaceA("Ola"));
    }


    public function testPadWithDots()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }

    public function testUncomment()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
    }
}
