<?php
require __DIR__ . '/autoload.php';

$books = new \app\Controller\Books();

$actionName = $_GET['act'] ?? 'All';

$books->action($actionName);
