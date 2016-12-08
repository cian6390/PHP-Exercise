<?php

class Connection
{ 
    public static function make($config)
    {
        try {
            return new PDO($config['db'] . ':host='.$config['host'].';dbname='.$config['dbname'].'',
                            $config['username'],
                            $config['password']);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}
