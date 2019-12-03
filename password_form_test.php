<?php
//contact_form_test.php
include_once 'includes/settings.php';
require_once 'simpletest/autorun.php';
require_once 'simpletest/web_tester.php';

class PasswordForm extends WebTestCase {

	  function testCorrectPassword() {
		$this->get(VIRTUAL_PATH . '/pages/password_form.php');
		$this->assertResponse(200);

		$this->setField("password", "abc123");
		$this->clickSubmit("Enter Password!");

		$this->assertResponse(200);
		$this->assertText("Password correct!");
	}
	
 	 function testFailedPassword() {
		$this->get(VIRTUAL_PATH . '/pages/password_form.php');
		$this->assertResponse(200);

		$this->setField("password", "xyz");
		$this->clickSubmit("Enter Password!");

		$this->assertResponse(200);
		$this->assertText("Password Failed");
	}

}



