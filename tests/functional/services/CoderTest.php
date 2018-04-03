<?php
namespace tests\unit\services;

use Codeception\Test\Unit;
use Yii;

class CoderTest extends Unit
{
	
	public function testEncodeAndDecode()
	{
		$text = 'custom text';
		$encoded = Yii::$domain->encrypt->coder->encode($text);
		$decoded = Yii::$domain->encrypt->coder->decode($encoded);
		expect($text)->equals($decoded);
	}
	
	public function testEncodeAndDecodeByTestProfile()
	{
		$text = 'custom text';
		$encoded = Yii::$domain->encrypt->coder->encode($text, 'test');
		$decoded = Yii::$domain->encrypt->coder->decode($encoded, 'test');
		expect($text)->equals($decoded);
	}
	
	public function testDecodeByDefaultProfile()
	{
		$text = 'custom text';
		$encoded = 'aONuANgQUdKP5naf9R60bw==';
		$decoded = Yii::$domain->encrypt->coder->decode($encoded);
		expect($text)->equals($decoded);
	}
	
	public function testDecodeByTestProfile()
	{
		$text = 'custom text';
		$encoded = 'XkmHqAh9wRWsRcQpLdkkZQ==';
		$decoded = Yii::$domain->encrypt->coder->decode($encoded, 'test');
		expect($text)->equals($decoded);
	}
	
	public function testDecodeFail()
	{
		$text = 'custom text';
		$encoded = Yii::$domain->encrypt->coder->encode($text, 'test');
		$decoded = Yii::$domain->encrypt->coder->decode($encoded);
		expect(false)->equals($decoded);
	}
}
