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

    public function insert ($table, $paramters)
    {
        $sql = sprintf(
            'insert into %s (%s) values (%s)',
            $table,
            implode(', ',array_keys($paramters)),
            ':' . implode(', ',array_keys($paramters))
        );

        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute($paramters);
        } catch (Exception $e) {
            // dd($e->getMessage());
            die('Woops something went wrong.');
        }
    }
}