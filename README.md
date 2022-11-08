# Расчет значений прямоугольника.

Пакет предназначен для подсчета периметра, площади и диагонали прямоугольника.

## Требования

- PHP 7.1

## Установка

````bash
$ composer require veraadzhieva/rectangle-calculate
````

## Использование

````php
<?php
$rectangle = new Rectangle();
echo $rectangle->getPerimeter(5, 5);
````