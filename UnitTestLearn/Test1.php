<?php
/**
 * Created by PhpStorm.
 * User: ABBY
 * Date: 2019-12-11
 * Time: 12:22 PM
 */

namespace UnitTestLearn;

use Test1;

class TestClass extends \PHPUnit_Framework_TestCase
{
    public $value1;
    public $value2;

    protected function setUp()
    {
        $this->value1 = 2;
        $this->value2 = 3;
    }

    public function testPass()
    {
        $this->assertTrue($this->value1 + $this->value2 == 14);
    }

}
