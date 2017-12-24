<?php

namespace yii2module\encrypt\console\controllers;

use Yii;
use yii2lab\console\helpers\input\Enter;
use yii2lab\console\yii\console\Controller;
use yii2lab\console\helpers\Output;

class CoderController extends Controller
{
	
	public function actionEncode()
	{
		$text = Enter::display('Enter text');
		$encrypted = Yii::$app->encrypt->coder->encode($text);
		Output::block($encrypted, 'Encrypted');
	}
	
	public function actionDecode()
	{
		$encrypted = Enter::display('Enter encrypted');
		$text = Yii::$app->encrypt->coder->decode($encrypted);
		Output::block($text, 'Text');
	}
	
}
