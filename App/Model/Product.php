<?php

namespace App\Model;

class Product
{
    private $name, $description, $id;

    public function getName()
    {
        return $this->name;
    }

    public function setName($n)
    {
        $this->name = $n;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($d)
    {
        $this->description = $d;
    }
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }
}