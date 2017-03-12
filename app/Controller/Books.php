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

    public function action($actionName)
    {
        $action = 'action' . $actionName;
        if (method_exists(self::class, $action)) {
            $this->$action();
        }

    }

    public function actionAll()
    {
        $this->view->books = \app\Models\Books::getAllBooks();
        $this->view->view(__DIR__ . '/../../template/index.php');
    }

    public function actionOne()
    {
        if (isset($_GET['id']) && '' !== $_GET['id']) {
            $this->view->book = \app\Models\Books::getOneBook($_GET['id']);
            $this->view->view(__DIR__ . '/../../template/indexOne.php');
        }
    }

    public function actionCU()
    {
        if (isset($_POST)) {
            $book = new \app\Models\Books();
            $book->fill($_POST);
            $book->save();
        }

        header('Location: /test1/template/index.php');
        die;
    }


}