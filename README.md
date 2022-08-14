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
$processor = new StringProcessor();
echo $processor->getPhones('');
```
