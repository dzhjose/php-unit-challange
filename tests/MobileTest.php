<?php

namespace Tests;

use Mockery as m;
use PHPUnit\Framework\TestCase;
use App\Mobile;

class Provider implements \App\Interfaces\CarrierInterface 
{
	public function dialContact(\App\Contact $contact)
	{

	}

	public function makeCall(): \App\Call 
	{

	}
}

class MobileTest extends TestCase
{
	/** @test */
	public function it_returns_null_when_name_empty()
	{	$provider = new Provider();
		$mobile = new Mobile($provider);

		//return null if name is empty
		$this->assertNull($mobile->makeCallByName(''));
	}

	/** @test */ 
	public function validate_correct_number()
	{
		$provider = new Provider();
		$mobile = new Mobile($provider);

		$this->assertTrue($mobile->getNumber());
	}
}
