<?php

class Food extends Product
{
    private string $taste;
    private int $weight;

    public function __construct($categoria, $nome, $descrizione, $img, $disponibilità, $prezzo, $gusto, $peso)
    {
        parent::__construct($categoria, $nome, $descrizione, $img, $disponibilità, $prezzo);
        $this->taste = $gusto;
        $this->weight = $peso;
    }

    public function getTaste()
    {
        return $this->taste;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function printData()
    {
        return "<div class=\"card\">
            <h1> Categoria: {$this->getCategory()} </h1>
            <h2> {$this->getName()} </h2>
            <img src=\"{$this->getImage()}\" alt=\"food\">
            <h3> {$this->getDescription()} </h3>
            <h4> Gusto: {$this->getTaste()} </h4>
            <h4> Peso: {$this->getWeight()}KG </h4>
            <p> {$this->getAvailability()} </p>
            <h2> {$this->getPrice()}€ </h2>
        </div>";
    }
}
