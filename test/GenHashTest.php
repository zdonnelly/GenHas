<?php

use GenHash\GenHash;
use PHPUnit\Framework\TestCase;

class GenHashTest extends TestCase
{
    function testGenHash() {
        $expected = 677850704066;
        $genHash = new GenHash();
        $result = $genHash->exec("kppracg");
        $this->assertEquals($expected, $result);
    }

    function testAnswer() {
        $expected = 675217408078;
        $genHash = new GenHash();
        $result = $genHash->exec("iorocks");
        $this->assertEquals($expected, $result);
    }

//    function testSearch() {
//
//        $letters = array('a','c','e','g','i','k','o','p','r','s');
//        $expected = 675217408078;
//        $genHash = new GenHash();
//        $this->assertEquals("foo", $genHash->search($letters, $expected));
//    }
}
