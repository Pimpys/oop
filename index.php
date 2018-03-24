<?php
/**
 *Copyright (c)
 *http://maxsuccess.ru/
 *https://vk.com/pimpys
 *https://www.facebook.com/the.web.lessons/
 *Веб разработка на Yii2 Framework
 * +7-978-051-57-37
 * Кодируй так, как будто человек,
 * поддерживающий твой код, - буйный психопат,
 * знающий, где ты живешь.
 * Created by PhpStorm.
 * User: Max
 * Date: 24.03.2018
 * Time: 1:13
 */
require_once 'class.php';
?>

<html lang="ru-RU">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Магазин ООП</title>
    <meta name="description" content="Проект по ООП, создание магазина.">
	<link rel="stylesheet" type="text/css" media="screen" href="/css/style.css" />
</head>
<body>
<header>
    <h1>Наш супер магазин!</h1>
</header>
<article>
<?php
$products = new ShopProductsWrite();
$products->write(
        new ShopProducts(
            'Программирование',
            'Max',
            'Smit',
            150
        )
);
?>
</article>
<footer>
    <p>
        Наш магазин!
    </p>
</footer>
</body>
</html>
