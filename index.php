<?php
include __DIR__ . '/classes/category.php';
include __DIR__ . '/classes/product.php';
include __DIR__ . '/classes/food.php';
include __DIR__ . '/classes/toy.php';
include __DIR__ . '/db.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP-2</title>
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>

    <div class="container">

        <h1>DOG CATEGORY</h1>
        <div class="cards">

            <?php foreach ($dogFoods as $food) {
                echo $food->printData();
            } ?>

            <?php foreach ($dogToys as $toy) {
                echo $toy->printData();
            } ?>

        </div>

        <h1 style="margin-top: 2em;">CAT CATEGORY</h1>
        <div class="cards">

            <?php foreach ($catFoods as $food) {
                echo $food->printData();
            } ?>

            <?php foreach ($catToys as $toy) {
                echo $toy->printData();
            } ?>

        </div>

    </div>

</body>

</html>