Установка
===

Устанавливаем зависимость:

```
composer require yii2module/yii2-encrypt
```

Создаем полномочие:

```
oEncryptManage
```

Объявляем консольный модуль:

```php
return [
	'modules' => [
		// ...
		'encrypt' => 'yii2module\encrypt\console\Module',
		// ...
	],
];
```

Объявляем домен в `domains-local.php`:

```php
return [
	'components' => [
		// ...
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
		// ...
	],
];
```
