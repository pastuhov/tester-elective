<?php
namespace pastuhov\testerelective\tests\models;

use pastuhov\testerelective\models\ContactForm;
use PHPUnit\Framework\TestCase;

class ContactFormTest extends TestCase
{
	public function testCreateObject()
	{
		$foo = new ContactForm();
		echo 'ok';
	}
}
