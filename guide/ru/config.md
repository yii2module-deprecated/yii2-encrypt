Конфигурация
===
Объявлять профили можно в конфиге `domains-local.php`
```php
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
```

> Note: профили следует хранить в конфиге `domains-local.php` для локальной настройки профилей.