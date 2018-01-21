<?php

$config = require(ROOT_DIR . '/vendor/yii2lab/yii2-app/tests/store/app/common/config/domains.php');

return \yii\helpers\ArrayHelper::merge($config, [
	'encrypt' => [
		'class' => 'yii2module\encrypt\domain\Domain',
		'services' => [
			'coder' => [
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
		],
	],
]);
