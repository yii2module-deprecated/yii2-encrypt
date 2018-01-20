<?php

use yii2lab\domain\helpers\ConfigHelper;

return [
	'components' => [
		'encrypt' => ConfigHelper::normalizeItemConfig('encrypt', [
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
		]),
	],
];
