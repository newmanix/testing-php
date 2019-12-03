<?php
//suite.php
/*
Use to setup a test suite and run
automated tests
*/
require_once 'simpletest/autorun.php';

class AllTests extends TestSuite {
    function AllTests() {
        $this->TestSuite('All tests');
        $this->addFile('calculator_test2.php');
		$this->addFile('contact_test1.php');
		$this->addFile('contact_test2.php');
		$this->addFile('calculator_test3.php');
    }
}
?>
