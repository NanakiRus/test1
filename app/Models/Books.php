<?php

namespace app\Models;

use app\DB;

class Books
{

    public static function getAllBooks()
    {
        $db = new DB();

        $sql = 'SELECT * FROM books';

        return $db->query($sql, [], static::class);
    }

    public static function getOneBook($id)
    {
        $db = new DB();

        $sql = 'SELECT * FROM books WHERE id=:id';

        return $db->query($sql, [':id' => $id], static::class)[0];
    }

}