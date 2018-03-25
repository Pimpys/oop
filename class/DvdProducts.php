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
 * Date: 26.03.2018
 * Time: 1:19
 */

class DvdProducts extends ShopProducts
{
    /**
     * @var
     */
    private $length;
    /**
     * @return string
     */
    public function __construct($title, $name, $firsName, $price, $length)
    {
        parent::__construct($title, $name, $firsName, $price);
        $this->length = $length;
    }

    /**
     * @return string
     */
    public function getSummaryLine(): string
    {
        $str = parent::getSummaryLine();
        $str .= 'Время звучания: ' . $this->length;
        $str .= ' Цена: ' . $this->getPrice();
        return $str;
    }

    /**
     * @return mixed
     */
    public function getLength()
    {
        return $this->length;
    }
}