# Поиск мобильных номеров телефонов

## Требования
 - PHP 7.4

## Установка
```bash
$ composer require shishak/search_phone
```

## Использование
```php
<?php 
$processor = new Search();
$array_phones = $processor->getPhone('Добрый день 8-909-443-82-82. Вот еще один номер 89094438282 вот еще+79094438282 и вот пример 8 909 443 82 82, и еще один 8(909)4438282');
echo(var_export($array_phones, true));
```
