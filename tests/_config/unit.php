<?php

namespace yii2lab\app;

use yii2lab\app\domain\helpers\Config;
use yii2lab\app\domain\helpers\Env;
use yii2lab\helpers\yii\ArrayHelper;

Env::init([
	'commands' => [],
	'filters' => [
		[
			'class' => 'yii2lab\app\domain\filters\env\LoadConfig',
			'paths' => [
				'vendor/yii2lab/yii2-app/tests/store/app/common/config',
				'vendor/yii2lab/yii2-app/src/domain/config',
			],
		],
		'yii2lab\app\domain\filters\env\YiiEnv',
		'yii2lab\app\domain\filters\env\NormalizeDbConfig',
	],
]);
$definition = Env::get('config');
$config = @include('main.php');
return ArrayHelper::merge(Config::load($definition), $config);
