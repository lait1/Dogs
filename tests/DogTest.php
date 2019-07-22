<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 22.07.2019
 * Time: 10:29
 */

require '../function.php';

class DogTest extends PHPUnit_Framework_TestCase
{
    private $dog;

    public function setUp()
    {
        $this->dog = new ShibuInu();
    }

    public function testFabric(){
        $result = $this->dog->sound();
        $this->assertEquals('woof, woof', $result);
    }
}
