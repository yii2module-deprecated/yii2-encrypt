Конфигурация
===
Объявлять профили можно в конфиге `domains.php`
```php
return [
	'encrypt' => 'yii2module\encrypt\domain\Domain',
],
```

Профили следует хранить в конфиге `env-local.php` для локальной настройки профилей.

```php
return [
	'encrypt' => [
		'profiles' => [
			'default' => [
				'password' => 'qwerty123',
				'iv' => 'ZZZZZZZZZZZZZZZZ',
			],
		],
	],
];
```
