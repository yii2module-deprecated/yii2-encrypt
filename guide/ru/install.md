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

