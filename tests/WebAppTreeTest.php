<?php

use Silex\WebTestCase;

class WebAppTreeTest extends PHPUnit\Framework\TestCase
{
    public function createApplication()
    {
        return require __DIR__ . '/../web/index.php';
    }

   public function testAssert(){

        $this->assertTrue(true);
   }

   public function testArray(){
        $tab = array(1,2,3,4,5);
        $this->assertTrue(sizeof($tab) == 5);
   }
}