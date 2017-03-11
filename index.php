<?php
require __DIR__ . '/autoload.php';

$books = new \app\Controller\Books();

if (isset($_GET['id'])) {
    $books->actionOne();
} else {
    $books->actionAll();
}
