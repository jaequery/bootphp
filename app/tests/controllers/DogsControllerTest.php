<?php

class DogsControllerTest extends TestCase {
	public function testIndex()
	{
		$response = $this->call('GET', 'dogs');
		$this->assertTrue($response->isOk());
	}

	public function testShow()
	{
		$response = $this->call('GET', 'dogs/1');
		$this->assertTrue($response->isOk());
	}

	public function testCreate()
	{
		$response = $this->call('GET', 'dogs/create');
		$this->assertTrue($response->isOk());
	}

	public function testEdit()
	{
		$response = $this->call('GET', 'dogs/1/edit');
		$this->assertTrue($response->isOk());
	}
}
