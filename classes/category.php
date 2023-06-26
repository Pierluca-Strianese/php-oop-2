<?php

class Category
{
    protected string $category;

    public function __construct($categoria)
    {
        $this->category = $categoria;
    }

    public function getCategory()
    {
        return $this->category;
    }
}
