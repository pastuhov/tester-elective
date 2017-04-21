<?php
namespace pastuhov\testerelective\tests\models;

use pastuhov\testerelective\models\ContactForm;
use PHPUnit\Framework\TestCase;

class ContactFormTest extends TestCase
{
	public function testCreateObject()
	{
		$foo = new ContactForm();

		$foo->name = 'kirill';
		$foo->phone = '+79049820930';
		$foo->message = 'hello!';

		$this->assertTrue($foo->validate());

	}
}
