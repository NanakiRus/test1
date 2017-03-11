<?php

namespace app;

class DB
{
    protected $dbh;

    public function __construct()
    {
        $cfg = include __DIR__ . '/dbconfig.php';
        $dsn = 'mysql:dbname=' . $cfg['dbname'] . ';host=' . $cfg['host'];
        $this->dbh = new \PDO($dsn, $cfg['user'], $cfg['password']);
    }

    public function query($sql, $data = [], $class = null)
    {
        $sth = $this->dbh->prepare($sql);
        $sth->execute($data);

        if ($class === null) {
            return $sth->fetchAll();
        } else {
            return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
        }

    }

}