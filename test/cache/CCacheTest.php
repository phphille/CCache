<?php


namespace phpe\cache;


/**
* A class for caching objects.
*
* @package LydiaCore
*/
class CCacheTest extends \PHPUnit_Framework_TestCase {

    /*
    public function testExceptionHasRightMessage()
    {
        $el = new \phpe\cache\CCache('hejsan');
        throw new InvalidArgumentException('Failed to create hejsan', 'hejsan');
    }
    */
    public function testCCache()
    {
        $el = new \phpe\cache\CCache('hejsan');
        $fil = $el->Get('fil');
        $this->assertNull($fil);
    }

    public function testPruneCCache()
    {
        $el = new \phpe\cache\CCache('hejsan');
        $fil = $el->PruneAll();
        $this->assertEquals($fil, 0);
    }

}
