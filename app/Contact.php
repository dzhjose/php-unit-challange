<?php

namespace App;


class Contact
{
	private $name;
	private $number;
	
	public function __construct($number)
	{
		$this->number = $number;
	}

	public function setNumber(string $number)
	{
		$this->number = $number;
	}

	public function getNumber(): string 
	{
		return $this->number;
	}

	public function setName(string $name) 
	{
		$this->name = $name;
	}

	public function getName(): string 
	{
		return $this->name;
	}
}