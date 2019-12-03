<?php
//contact_test2.php
include_once 'includes/settings.php';;
require_once 'simpletest/autorun.php';
require_once 'simpletest/web_tester.php';

class ContactTests2 extends WebTestCase {

	  function testContactSubmit() {
		$this->get(VIRTUAL_PATH . '/pages/contact.php');
		$this->assertResponse(200);

		$this->setField("name", "Jason");
		$this->setField("email", "wj@example.com");
		$this->setField("message", "I look forward to hearing from you!");

		$this->clickSubmit("Contact us!");

		$this->assertResponse(200);
		$this->assertText("We will be in touch within 24 hours.");
	}
	
	function testInvalidName() {
	  $this->get(VIRTUAL_PATH . '/pages/contact2.php');
	  $this->assertResponse(200);

	  $this->setField("name", "");
	  $this->setField("email", "wj@example.com");
	  $this->setField("message", "I look forward to hearing from you!");

	  $this->clickSubmit("Contact us!");

	  $this->assertResponse(200);
	  $this->assertText("Please provide your name.");
	}

}



