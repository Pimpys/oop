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
    /**
     * @var string
     */
    private $title;
    /**
     * @var string
     */
    private $name;
    /**
     * @var string
     */
    private $firstName;
    /**
     * @var int
     */
    private $discount = 5;

    /**
     * @var int
     */
    protected $price;


    /**
     * ShopProducts constructor.
     * @param $title
     * @param $name
     * @param $firsName
     * @param int $price
     */
    public function __construct($title, $name, $firsName, $price)
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
        return $this->name . ' - ' . $this->firstName;
    }

    /**
     * @return string
     */
    public function getSummaryLine(): string
    {
        return $this->getTitle() . ' (<b>' . $this->getProducer() . '</b>) ';
    }
    /**
     * @return int
     */
    public function getPrice(): int
    {
        return $this->price - $this->discount;
    }

    /**
     * @param $int
     * @return int
     */
    public function setDiscount($int): int
    {
        $this->discount = $int;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @return int
     */
    public function getDiscount(): int
    {
        return $this->discount;
    }
}