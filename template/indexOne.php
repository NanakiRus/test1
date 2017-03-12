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
<h1><?php echo $book->title; ?></h1>
<p>Год: <?php echo $book->year; ?></p>
<p>Автор: <?php echo $book->author; ?></p>
<p>Цена: <?php echo $book->price; ?></p>
</body>
</html>