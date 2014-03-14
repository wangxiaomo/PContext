<?php

class PContextExceptionTest extends PHPUnit_Framework_TestCase {

    // @expectedException PContextException
    public function testPContextException(){
        throw new PContextException();
    }
}
