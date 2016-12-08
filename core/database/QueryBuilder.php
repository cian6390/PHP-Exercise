<?php

class QueryBuilder
{
    protected $pdo;

    public function __construct (PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {
        $sql = $this->pdo->prepare("select * from {$table}");

        $sql->execute();
        
        return $sql->fetchAll(PDO::FETCH_OBJ);
    }
}