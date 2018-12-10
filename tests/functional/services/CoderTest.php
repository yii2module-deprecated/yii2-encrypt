<?php
namespace tests\unit\services;

use yii2lab\test\Test\Unit;

class CoderTest extends Unit
{
	
	public function testEncodeAndDecode()
	{
		$text = 'custom text';
		$encoded = \App::$domain->encrypt->coder->encode($text);
		$decoded = \App::$domain->encrypt->coder->decode($encoded);
		$this->tester->assertEquals($text, $decoded);
	}
	
	public function testEncodeAndDecodeByTestProfile()
	{
		$text = 'custom text';
		$encoded = \App::$domain->encrypt->coder->encode($text, 'test');
		$decoded = \App::$domain->encrypt->coder->decode($encoded, 'test');
		$this->tester->assertEquals($text, $decoded);
	}
	
	public function testDecodeByDefaultProfile()
	{
		$text = 'custom text';
		$encoded = 'aONuANgQUdKP5naf9R60bw==';
		$decoded = \App::$domain->encrypt->coder->decode($encoded);
		$this->tester->assertEquals($text, $decoded);
	}
	
	public function testDecodeByTestProfile()
	{
		$text = 'custom text';
		$encoded = 'XkmHqAh9wRWsRcQpLdkkZQ==';
		$decoded = \App::$domain->encrypt->coder->decode($encoded, 'test');
		$this->tester->assertEquals($text, $decoded);
	}
	
	public function testDecodeFail()
	{
		$text = 'custom text';
		$encoded = \App::$domain->encrypt->coder->encode($text, 'test');
		$decoded = \App::$domain->encrypt->coder->decode($encoded);
		$this->tester->assertEquals(false, $decoded);
	}
}
