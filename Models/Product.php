<?php

class Product
{
    private $name;
    private $pic;
    private $price;
    private $description;
    private $brand;
    private $genre;
    private $category;

    public function __construct($name, $pic, $price, $description, $brand, Genre $genre, $category)
    {
        $this->setName(trim($name));
        $this->setPic(trim($pic));
        $this->setPrice(trim($price));
        $this->setDescription(trim($description));
        $this->setBrand(trim($brand));
        $this->setGenre($genre);
        $this->setCategory($category);
    }

    public function setName($name)
    {
        if (!$name || is_numeric($name)) return false;
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setPic($pic)
    {
        if (!$pic || is_numeric($pic)) return false;
        $this->pic = $pic;
    }

    public function getPic()
    {
        return $this->pic;
    }

    public function setPrice($price)
    {
        if (!$price || !is_numeric($price)) return false;
        $this->price = $price;
    }

    public function getPrice()
    {
        return "$this->price €";
    }

    public function setDescription($description)
    {
        if (!$description || is_numeric($description)) return false;
        $this->description = $description;
    }

    public function getDescription($length = null)
    {
        if ($length) {
            return substr($this->description, 0, $length) . '...';
        }
        return $this->description;
    }

    public function setBrand($brand)
    {
        if (!$brand || is_numeric($brand)) return false;
        $this->brand = $brand;
    }

    public function getBrand()
    {
        return $this->brand;
    }

    public function setGenre($genre)
    {
        if (gettype($genre) !== 'object') return false;
        $this->genre = $genre;
    }

    public function getGenre()
    {
        return $this->genre->getName();
    }

    public function setCategory($category)
    {
        if (!$category || is_numeric($category)) return false;
        $this->category = $category;
    }

    public function getCategory()
    {
        return $this->category;
    }
}
