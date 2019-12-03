<?php
//contact_test1.php
include_once 'includes/settings.php';
require_once 'simpletest/autorun.php';
require_once 'simpletest/web_tester.php';

class SimpleFormTests extends WebTestCase {

  function testDoesContactPageExist() {
    $this->get(VIRTUAL_PATH . '/pages/contact.php');
    $this->assertResponse(200); 
  }

}

?>