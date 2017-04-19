<?php
namespace pastuhov\testerelective\tests\models;

use PHPUnit\Framework\TestCase;

class ContactFormTest extends TestCase
{
	public function testCreateObject()
	{
		$foo = new \pastukhov\testerelective\models\ContactForm();
		echo 'ok';
	}
}
