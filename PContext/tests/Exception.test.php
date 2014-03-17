<?php
namespace PContext;

include('UnitTestFrameWork.php');
include('PContext/Exception.class.php');

class PContextExceptionTest extends UnitTestFrameWork {
    /**
     * @expectedException PContext\PContextException
     */
    public function testPContextException(){
        throw new PContextException();
    }
}
