<?php

class Product extends Category
{
    protected string $name;
    protected string $description;
    protected string $image;
    protected string $availability;
    protected int $price;

    public function __construct($categoria, $nome, $descrizione, $img, $disponibilità, $prezzo)
    {
        parent::__construct($categoria);
        $this->name = $nome;
        $this->description = $descrizione;
        $this->image = $img;
        $this->availability = $disponibilità;
        $this->price = $prezzo;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function getAvailability()
    {
        return $this->availability;
    }

    public function getPrice()
    {
        return $this->price;
    }
}
