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
     * Returns string without digits
     *
     * @param string $string String to process
     *
     * @return string String with @
     */
    public static function replaceA($string)
    {
        throw new \RuntimeException('Not implemented!');
    }

}
