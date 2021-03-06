<?php

namespace App\Core\Database;

class Connection
{ 
    public static function make($config)
    {
        try {
            return new \PDO($config['db'] . ':host='.$config['host'].';dbname='.$config['dbname'].'',
                            $config['username'],
                            $config['password'],
                            $config['options']);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}
