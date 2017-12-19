<?php
/**
 * Created by PhpStorm.
 * User: AntonKa
 * Date: 12/16/2017
 * Time: 20:32
 */

require_once 'PHPUnit/Framework.php';
require_once 'MethodsToBeTested.php';
require_once __DIR__.'/phpunit.phar';


class ClassTest extends PHPUnit_Framework_TestCase
{

    public function testPower()
    {
        $my = new MethodsToBeTested();
        $this->assertEquals(81, $my->power(3, 4));
    }

    public function testDividePositive()
    {
        $my = new MethodsToBeTested();
        $this->assertEquals(5, $my->divide(10, 2));
    }
    public function testDivideNegative()
    {
        $this->setExpectedException('MathException');
        $my = new MethodsToBeTested();
        $my->divide(8, 0);
    }
    public function testDivideNegativeTryCach()
    {
        $my = new MethodsToBeTested();
        try {
            $my->divide (8, 2);
        } catch (MathException $e) {
            return;
        }
        $this->fail ('Not raise an exception');
    }

    public function testDoSomething()
    {

    }

    public function testDoSomethingAnother()
    {

    }
}
?>