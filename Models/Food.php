<?php

class Food extends Product
{
    private $ingredients;
    private $container;
    private $size;

    public function __construct(
        $name,
        $pic,
        $price,
        $description,
        $brand,
        $ingredients,
        $container,
        $size
    ) {
        parent::__construct($name, $pic, $price, $description, $brand);
        $this->setIngredients($ingredients);
        $this->setContainer(trim($container));
        $this->setSize(trim($size));
    }

    public function setIngredients($ingredients)
    {
        if (!$ingredients && gettype($ingredients) !== 'array') return false;
        $this->ingredients = $ingredients;
    }

    public function getIngredients()
    {
        $ingredients = '';
        foreach ($this->ingredients as $ingredient) {
            $ingredients .= "$ingredient, ";
        }
        return substr($ingredients, 0, -2);
    }

    public function setContainer($container)
    {
        if (!$container && is_numeric($container)) return false;
        $this->container = $container;
    }

    public function getContainer()
    {
        return $this->container;
    }

    public function setSize($size)
    {
        if (!$size && !is_numeric($size)) return false;
        $this->size = $size;
    }

    public function getSize()
    {
        return $this->size . 'gr.';
    }
}
