Руководство
===

Для шифрования:

```php
$text = 'custom text';
$encoded = Yii::$app->encrypt->coder->encode($text);
```

Получим что-то вроде этого:

	aONuANgQUdKP5naf9R60bw==

Для дешифрования:

```php
$encoded = 'aONuANgQUdKP5naf9R60bw==';
$decoded = Yii::$app->encrypt->coder->decode($encoded);
```

## Профиль

Профили нужны для централизованного хранения ключей.

Профили назначаются в [конфигах](/guide/yii2module.yii2-encrypt/config).

Поумолчанию используется профиль `default`.

Имя профиля можно передать вторым параметром:

```php
$text = 'custom text';
$encoded = Yii::$app->encrypt->coder->encode($text, 'custom_profile');
```
