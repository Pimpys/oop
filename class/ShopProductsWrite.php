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
 * Time: 23:25
 */
/* @var $shopProducts ShopProducts*/
class ShopProductsWrite
{
    /**
     * @param ShopProducts $shopProducts
     */
    public function write(ShopProducts $shopProducts)
    {
        print $shopProducts->getProducer();
    }
}