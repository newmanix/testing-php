<?php
//calculator_test3.php
include_once 'includes/settings.php';
require_once 'simpletest/autorun.php';
require_once 'simpletest/web_tester.php';

class CalculatorFormTests extends WebTestCase {

	  function testCalculatorSubmit() {
		$this->get(VIRTUAL_PATH . '/pages/calculator_form.php');
		$this->assertResponse(200);

		$this->setField("num1", 5);
		$this->setField("num2", 10);

		$this->clickSubmit("Add Em!");

		$this->assertResponse(200);
		$this->assertText("15");
	}

}