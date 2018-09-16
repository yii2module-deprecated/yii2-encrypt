<?php

namespace yii2module\encrypt\console\controllers;

use Yii;
use yii2lab\extension\console\helpers\input\Enter;
use yii2lab\extension\console\base\Controller;
use yii2lab\extension\console\helpers\Output;

/**
 * Encryption and decryption of data
 */
class CoderController extends Controller
{
	
	/**
	 * encryption of data
	 */
	public function actionEncode()
	{
		$text = Enter::display('Enter text');
		$encrypted = \App::$domain->encrypt->coder->encode($text);
		Output::block($encrypted, 'Encrypted');
	}
	
	/**
	 * decryption of data
	 */
	public function actionDecode()
	{
		$encrypted = Enter::display('Enter encrypted');
		$text = \App::$domain->encrypt->coder->decode($encrypted);
		Output::block($text, 'Text');
	}
	
}
