<?php

class Genre
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function setName($name)
    {
        if (!$name && is_numeric($name)) return false;
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}
