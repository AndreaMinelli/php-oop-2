<?php

require_once __DIR__ . '/Product.php';

class Game extends Product
{
    private $material;
    private $sizes;

    public function __construct(
        $name,
        $pic,
        $price,
        $description,
        $brand,
        $genre,
        $material,
        $sizes
    ) {
        parent::__construct($name, $pic, $price, $description, $brand, $genre);
        $this->setMaterial(trim($material));
        $this->setSizes(trim($sizes));
    }

    public function setMaterial($material)
    {
        if (!$material && is_numeric($material)) return false;
        $this->material = $material;
    }

    public function getMaterial()
    {
        return $this->material;
    }

    public function setSizes($sizes)
    {
        if (!$sizes && gettype($sizes) !== 'array') return false;
        $this->sizes = $sizes;
    }

    public function getSizes()
    {
        $sizes = '';
        foreach ($this->sizes as $size) {
            $sizes .= "$size cm. x ";
        }
        return substr($sizes, 0, -3);
    }
}
