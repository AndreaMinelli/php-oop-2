<?php

class Game extends Product
{
    private $material;
    private $game_type;

    public function __construct(
        $name,
        $pic,
        $price,
        $description,
        $brand,
        $material,
        $game_type
    ) {
        parent::__construct($name, $pic, $price, $description, $brand);
        $this->setMaterial(trim($material));
        $this->setGameType(trim($game_type));
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

    public function setGameType($game_type)
    {
        if (!$game_type && is_numeric($game_type)) return false;
        $this->game_type = $game_type;
    }

    public function getGameType()
    {
        return $this->game_type;
    }
}
