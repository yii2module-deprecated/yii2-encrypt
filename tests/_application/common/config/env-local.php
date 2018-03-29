<?php

use yii\helpers\ArrayHelper;
use yii2lab\test\helpers\TestHelper;

$config = [
	'encrypt' => [
		'profiles' => [
			'default' => [
				'password' => 'zx1uDi4TG',
				'iv' => 'qrk4QVgE78ukb1PH',
			],
			'test' => [
				'password' => 'zxGqh96wC',
				'iv' => 'diUeXzEr426k8dNJ',
			],
		],
	],
];

$baseConfig = TestHelper::loadConfig('common/config/env-local.php');
return ArrayHelper::merge($baseConfig, $config);
