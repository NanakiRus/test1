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
    <form method="post" action="/test1/index.php?act=CU">
        <input type="hidden" name="id" value="<?php echo $book->id; ?>" />
        <p>Заголовок: <input type="text" name="title" value="<?php echo $book->title; ?>" /></p>
        <p>Год: <input type="number" name="year" value="<?php echo $book->year; ?>" /></p>
        <p>Автор: <input type="text" name="author" value="<?php echo $book->author; ?>" /></p>
        <p>Цена: <input type="number" name="price" value="<?php echo $book->price; ?>" /></p>
        <input type="submit" />
    </form>
</body>
</html>