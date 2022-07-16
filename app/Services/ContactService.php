<?php

namespace App\Services;

use App\Contact;


class ContactService
{
	
	public static function findByName(): Contact
	{
		// queries to the db
	}

	public static function validateNumber(string $number): bool
	{
		// logic to validate numbers
		$contact = new Contact($number);
		if(is_numeric($contact->getNumber())){
			return true;
		}

		return false;

	}
}