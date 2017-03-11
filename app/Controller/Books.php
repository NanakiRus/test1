<?php

namespace app\Controller;

use app\View;

class Books
{
    protected $view;

    public function __construct()
    {
        $this->view = new View();
    }

    public function actionAll()
    {
        $this->view->books = \app\Models\Books::getAllBooks();
        $this->view->view(__DIR__ . '/../../template/index.php');
    }

    public function actionOne()
    {
        if (isset($_GET['id'])) {
            $this->view->book = \app\Models\Books::getOneBook($_GET['id']);
            $this->view->view(__DIR__ . '/../../template/indexOne.php');
        }
    }


}