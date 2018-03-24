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
 * Time: 23:02
 */

class ShopProducts
{
    /* public protected private*/
    /**
     * @var string
     */
    public $title;
    /**
     * @var string
     */
    public $name = 'Имя автора';
    /**
     * @var string
     */
    public $firstName = 'Его фамилия';
    /**
     * @var int
     */
    public $price = 10;

    /**
     * ShopProducts constructor.
     * @param $title
     * @param $name
     * @param $firsName
     * @param int $price
     */
    public function __construct($title, $name, $firsName, $price = 0)
    {
        $this->title = $title;
        $this->name = $name;
        $this->firstName = $firsName;
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getProducer(): string
    {
        return 'Название книги: <b>' . $this->title . '</b> Автор: <b>' . $this->name . ' - ' . $this->firstName . '</b> Цена: ' . $this->price;
    }
}