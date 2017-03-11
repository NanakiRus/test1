<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php foreach ($books as $book) : ?>
    <div>
        <h2><a href="?id=<?php echo $book->id; ?>"><?php echo $book->title; ?></a></h2>
        <p>Автор: <?php echo $book->author ?></p>
        <p>Год выпуска: <?php echo $book->year; ?></p>
        <p>Цена <?php echo $book->price; ?>р.</p>
    </div>
<?php endforeach; ?>
</body>
</html>