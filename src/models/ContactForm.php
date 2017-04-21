<?php
namespace pastuhov\testerelective\models;

class ContactForm
{
	public $name;
	public $phone;
	public $message;

	public function validate()
    {
        $result = false;

        if (!empty($this->phone)) {
            $result = true;
        }

        return $result;
    }
}
