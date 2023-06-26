<?php

$products = [
    'food' => [
        [
            'category' => 'Dog',
            'name' => 'Dog Food',
            'description' => 'Normal Dog Food',
            'image' => 'assets/dog-food-1.jpg',
            'availability' => 'In stock',
            'price' => 20,
            'taste' => 'Chicken',
            'weight' => 10,
        ],
        [
            'category' => 'Cat',
            'name' => 'Cat Food',
            'description' => 'Normal Cat Food',
            'image' => 'assets/cat-food-1.jpg',
            'availability' => 'Out of stock',
            'price' => 30,
            'taste' => 'Tuna',
            'weight' => 15,
        ],
        [
            'category' => 'Cat',
            'name' => 'Premium Cat Food',
            'description' => 'Premium Cat Food',
            'image' => 'assets/cat-food-2.jpg',
            'availability' => 'In stock',
            'price' => 100,
            'taste' => 'Chicken',
            'weight' => 12,
        ],
    ],
    'toy' => [
        [
            'category' => 'Dog',
            'name' => 'Dog Toy',
            'description' => 'Normal Dog Toy',
            'image' => 'assets/dog-toy-1.jpg',
            'availability' => 'Out of stock',
            'price' => 40,
            'material' => 'Rubber',
            'dimension' => 'Large',
        ],
        [
            'category' => 'Dog',
            'name' => 'Premium Dog Toy',
            'description' => 'Premium Dog Toy',
            'image' => 'assets/dog-toy-2.jpg',
            'availability' => 'In stock',
            'price' => 899,
            'material' => 'Wood',
            'dimension' => 'Medium',
        ],
        [
            'category' => 'Cat',
            'name' => 'Cat Toy',
            'description' => 'Normal Cat Toy',
            'image' => 'assets/cat-toy-1.jpg',
            'availability' => 'In stock',
            'price' => 50,
            'material' => 'Plastic',
            'dimension' => 'Small',
        ],
        [
            'category' => 'Cat',
            'name' => 'Premium Cat Toy',
            'description' => 'Premium Cat Toy',
            'image' => 'assets/cat-toy-2.jpg',
            'availability' => '1 in stock',
            'price' => 399,
            'material' => 'Rubber',
            'dimension' => 'Very Small',
        ],
    ],
];

$dogFoods = [];
$catFoods = [];
foreach ($products['food'] as $food) {

    if ($food['category'] == 'Dog') {
        $dogFoods[] = new Food(
            $food['category'],
            $food['name'],
            $food['description'],
            $food['image'],
            $food['availability'],
            $food['price'],
            $food['taste'],
            $food['weight'],
        );
    } else if ($food['category'] == 'Cat') {
        $catFoods[] = new Food(
            $food['category'],
            $food['name'],
            $food['description'],
            $food['image'],
            $food['availability'],
            $food['price'],
            $food['taste'],
            $food['weight'],
        );
    }
};


$dogToys = [];
$catToys = [];
foreach ($products['toy'] as $toy) {

    if ($toy['category'] == 'Dog') {
        $dogToys[] = new Toy(
            $toy['category'],
            $toy['name'],
            $toy['description'],
            $toy['image'],
            $toy['availability'],
            $toy['price'],
            $toy['material'],
            $toy['dimension'],
        );
    } else if ($toy['category'] == 'Cat') {
        $catToys[] = new Toy(
            $toy['category'],
            $toy['name'],
            $toy['description'],
            $toy['image'],
            $toy['availability'],
            $toy['price'],
            $toy['material'],
            $toy['dimension'],
        );
    }
};
