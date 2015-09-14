<?php

use package\Calculator\Calculator;

class CalculatorTest extends PHPUnit_Framework_TestCase {
 
  public function testAdd()
  {
    $calculator = new Calculator();
    $result = $calculator->add( 2, 3 );
    $this->assertEquals( $result, 5 );
  }

  public function testSubtract()
  {
  	$calculator = new Calculator();
    $result = $calculator->subtract( 6, 3 );
    $this->assertEquals( $result, 3 );
  }

  public function testMultiply()
  {
  	$calculator = new Calculator();
    $result = $calculator->multiply( 6, 3 );
    $this->assertEquals( $result, 18 );
  }

  public function testDivide()
  {
  	$calculator = new Calculator();
    $result = $calculator->divide( 6, 3 );
    $this->assertEquals( $result, 2 );
  }

  public function testDivideByZero()
  {
    $calculator = new Calculator();
    $result = $calculator->divide( 6, 0 );
    $this->assertEquals( $result, false );
  }
 
}