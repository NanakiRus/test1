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
<a href="/test1/template/indexOneAdd.php">Добавить книгу</a>
<?php foreach ($books as $book) : ?>
    <div>
        <h2><a href="?act=One&id=<?php echo $book->id; ?>"><?php echo $book->title; ?></a></h2>
        <p>Автор: <?php echo $book->author ?></p>
        <p>Год выпуска: <?php echo $book->year; ?></p>
        <p>Цена <?php echo $book->price; ?>р.</p>
        <br />
        <p><a href="?act=OneUpd&id=<?php echo $book->id; ?>">Редактировать</a></p>
        <p><a href="?act=Delete&id=<?php echo $book->id; ?>">Удалить</a></p>
    </div>
    <hr />
<?php endforeach; ?>
</body>
</html>