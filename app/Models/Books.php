<?php

namespace app\Models;

use app\DB;
use app\GetTrait;

class Books
{
    use GetTrait;

    public $fillable = [
        'id',
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

        return $db->execute($sql, $data);
    }

    public function updateOneBook()
    {
        $db = new DB();

        $data = [];
        $set = [];

        foreach ($this->data as $key => $value) {
            $data[':' . $key] = $value;
            if ('id' === $key) {
                continue;
            }
            $set[] = $key . ' = :' . $key;
        }

        $sql = 'UPDATE books SET ' . implode(', ', $set) . ' WHERE id = :id';

        return $db->execute($sql, $data);
    }

    public static function deleteOneBook($id)
    {
        $db = new DB();

        $sql = 'DELETE FROM books WHERE id = :id';

        return $db->execute($sql, [':id' => $id]);
    }

    public function save()
    {
        if (isset($this->id) && '' !== $this->id) {
            $this->updateOneBook();
        } else {
            $this->insertOneBook();
        }
        return $this;
    }

    public function fill(array $data)
    {
        foreach ($this->fillable as $value) {
            $this->$value = $data[$value];
        }
        return $this;
    }

}