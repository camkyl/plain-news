<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.min.css">
    <link rel="stylesheet" href="style.css"> 
    <title>A catchy title soon to be added</title>
</head>
<body>
    
<?php require __DIR__.'/data.php' ?>

<?php foreach ($authors as $author) : ?>

<h3><?php echo $author['fullName']; ?></h3>

<?php endforeach; ?>





</body>
</html>




