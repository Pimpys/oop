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

class BookProducts extends ShopProducts
{
    /**
     * @var
     */
    private $page;

    /**
     * ShopProducts constructor.
     * @param $title
     * @param $name
     * @param $firsName
     * @param int $price
     */
    public function __construct($title, $name, $firsName, $price, $page)
    {
        parent::__construct($title, $name, $firsName, $price);
        $this->page = $page;
    }
    /**
     * @return string
     */
    public function getSummaryLine(): string
    {
        $str = parent::getSummaryLine();
        $str .= 'Кол-во стр.: ' . $this->page;
        $str .= ' Цена: ' . $this->getPrice();
        return $str;
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        return $this->price;
    }

    /**
     * @return int
     */
    public function getPage(): int
    {
        return $this->page;
    }
}