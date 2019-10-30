<?php require __DIR__. '/data.php' ;?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.min.css">
    <link rel="stylesheet" href="style.css">
    <style>@import url('https://fonts.googleapis.com/css?family=Cormorant+Garamond|Nunito+Sans|Old+Standard+TT|Lato|Roboto|Jomolhari&display=swap');</style> 
    <title><?php echo $title; ?></title>
</head>
<body>
    <header>
        <div class="heading">
            <h1>News of</h1>
            <h1>Silicon Valley</h1>
        </div>

        <div class="hamburgerMenu"> <!--For smartphones and tablets. Has no function, only for demonstration-->
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
        </div>
    </header>

    <nav> <!--For laptops/large screens. Has no function, only for demonstration-->
        <a href="#">Company</a>
        <a href="#">Tech</a>
        <a href="#">Fun</a>
        <a href="#">Design</a>
        <a href="#">More</a>
    </nav>

