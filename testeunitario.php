<?php
use PHPUnit\Framework\TestCase; 

class SayHelloTest extends TestCase {
    public function testShouldSayHello() {
        $this->assertEquals("Hello, Qualified!", say_hello("Qualified"));
    }
}
?>