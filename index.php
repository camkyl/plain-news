<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.min.css">
    <link rel="stylesheet" href="style.css">
    <style>@import url('https://fonts.googleapis.com/css?family=Cormorant+Garamond|Old+Standard+TT&display=swap');</style> 
    <title>The Silicon Valley Post</title>
</head>
<body>
    
<?php require __DIR__.'/data.php' ?>

<?php foreach ($articles as $article) : ?>

<h2><?php echo $article['title']; ?></h2>
<p><?php echo $article['content']; ?></p>
<p><?php echo $article['date']; ?></p>


<?php endforeach; ?>





</body>
</html>




