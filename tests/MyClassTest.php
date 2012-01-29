<?php

require_once("src/MyClass.php");

class MyClassTest extends PHPUnit_Framework_TestCase {

    public function testDemo() {
        $x = new MyClass();
        $this->assertEquals(1, $x->demo(1));
        $this->assertTrue(3, $x->demo(1));
        $this->assertFalse(3, $x->demo(1));
    }
}