<?php

/**
 * SimpleString library
 *
 * This file is part of the TDD PHP project:
 *
 *     https://github.com/tdd-php
 *
 * (c)2013 Włodzimierz Gajda <gajdaw@gajdaw.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 */

namespace Gajdaw\TddExamples\SimpleString;

/**
 * SimpleString performs following operations:
 * - nl2br
 * - removes digits
 *
 * @package PHPTDD
 * @author  Włodzimierz Gajda <gajdaw@gajdaw.pl>
 *
 */
class SimpleString
{

    /**
     * Returns string with \n converted to <br/>\n
     *
     * @param string $string String to process
     *
     * @todo Implement nl2br().
     *
     * @return string String with \n converted to <br/>\n
     */
    public static function nl2br($string)
    {
        throw new \RuntimeException('Not implemented');
    }

    /**
     * Returns string without digits
     *
     * @param string $string String to process
     *
     * @return string String without digits
     */
    public static function removeDigits($string)
    {
        return preg_replace('/[0-9]/', '', $string);
    }
    /**
     * Return replace in string a to hello
     *
     * @param string $string String to process
     *
     * @return string String without digits
     */
    public static function replaceAToHello($string)
    {
        throw new \RuntimeException('Not implemented');
    }
    
    /**
     * Returns replace string to Barcelona 
     *
     * @param string $string String to process
     *
     * @return string String Barcelona
     */
    public static function stringBarcelona($string)
    {
        throw new \RuntimeException('Not implemented');
    }

    /**
     * Returns Trollo 
     *
     * @param string $string String to process
     *
     * @return string String with trollo
     */
    public static function trollo($string)
    {
        throw new \RuntimeException('Not implemented');
    }

     /**
     * Adding string to text
     *
     * @param string $string1 String to add
     * @param string $string2 String to add
     *
     * @todo Implement addString().
     *
     * @return string String with two old strings
     */
    public static function addString($string1,$string2)
    {
        // This function connect two string into one
        return $string1 . $string2;
    }

    /**
     * Returns string without "a" letters
     *
     * @param string $string String to process
     *
     * @return string String without "a" letters
     */
    public static function removeA($string)
    {
        return preg_replace('a', '', $string);
        //do zrobienia: poprawki
    }

    /**
     * Returns string from behind
     *
     * @param string $string String to process
     *
     * @todo Implement wordBehind().
     *
     * @return string String from behind
     */
    public static function wordBehind($string)
    {
        $result = '';
        for($int = strlen($string) - 1; $int >= 0; $int--)
        {
            $result .= $string[$int];
        }
        return $result;
    }

     /**
     * Returns string padded with dots
     *
     * @param string $string String to process
     *
     * @todo Implement padWithDots().
     *
     * @return string String padded with dots
     */
    public static function padWithDots($string)
    {
        throw new \RuntimeException('Not implemented');
    }

    /**
     * Returns string without digits
     *
     * @param string $string String to process
     *
     * @return string String with @
     */
    public static function replaceA($string)
    {
        return preg_replace('/[A,a]/', '@', $string);
        //komentarz 1
        //komentarz 2
        //komentarz 3
        //komentarz 4
        //komentarz 5
    }

    /**
     * Uncomment
     *
     * @param string $string String to process
     *
     * @todo Implement uncomment().
     *
     * @return string String without comments.
     */
    public static function uncomment($string)
    {
        //
        // some comments...
        //
        throw new \RuntimeException('Not implemented');
    }

     public static function funkcja()
     {
         throw new \RuntimeException('Brak ciala funkcji');
     }
}
