Установка
===

Устанавливаем зависимость:

```
composer require yii2module/yii2-encrypt
```

Создаем полномочие:

```
oExamlpe
```

Объявляем модуль:

```php
return [
	'modules' => [
		// ...
		'encrypt' => 'yii2module\encrypt\console\Module',
		// ...
	],
];
```

Объявляем домен:

```php
return [
	'components' => [
		// ...
		'encrypt' => [
			'class' => 'yii2lab\domain\Domain',
			'path' => 'yii2module\encrypt\domain',
			'repositories' => [
				'default',
			],
			'services' => [
				'default',
			],
		],
		// ...
	],
];
```
