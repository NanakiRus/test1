<?php

namespace app\Models;

use app\DB;
use app\GetTrait;

class Books
{
    use GetTrait;

    public $fillable = [
        'title',
        'year',
        'author',
        'price',
    ];

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

    public function insertOneBook()
    {
        $db = new DB();

        foreach ($this->data as $key => $value) {

            if ('id' === $key) {
                continue;
            }

            $data[':' . $key] = $value;
        }

        $sql = 'INSERT INTO books (title, year, author, price) VALUES (' . implode(', ', array_keys($data)) . ')';

        $db->execute($sql, $data);
    }

    public function save()
    {
        if (isset($this->id) && '' !== $this->id) {

        } else {
            $this->insertOneBook();
        }
    }

    public function fill(array $data)
    {
        foreach ($this->fillable as $value) {
            $this->$value = $data[$value];
        }
    }

}