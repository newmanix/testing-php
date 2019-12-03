<?php
//calculator_test2.php
require_once 'simpletest/autorun.php';
include 'Calculator.php';

class TestOfCalculator extends UnitTestCase {
	function testAdd() {
	  $myCalc = new Calculator();
	  $this->assertEqual($myCalc->add(1,1), 2, "1 + 1");
	  $this->assertEqual($myCalc->add(2,2), 4, "2 + 2");
	  $this->assertEqual($myCalc->add(1,1,1), 3, "three params, 1 + 1 + 1");
	}
	
	function testMultiply() {
	  $myCalc = new Calculator();
	  $this->assertEqual($myCalc->multiply(1,1), 1, "1 * 1");
	  $this->assertEqual($myCalc->multiply(2,2), 4, "2 * 2");
	  $this->assertEqual($myCalc->multiply(3,5), 15, "3 * 5");
	}
	
	function testDivide() {
	  $myCalc = new Calculator();
	  $this->assertEqual($myCalc->divide(1,1), 1, "1 / 1");
	  $this->assertEqual($myCalc->divide(2,2), 1, "2 / 2");
	  $this->assertEqual($myCalc->divide(3,0), 15, "3 / 0");
	}
}