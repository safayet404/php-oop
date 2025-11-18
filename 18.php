

<!-- Exception -->


<?php

class ServerLoadException extends Exception{}
class NetworkException extends Exception{}
class DiskFullException extends Exception{}

interface NetworkStorage{
    function connect();
    function getName();
}


class MySQLServer implements NetworkStorage {
    function connect()
    {
        throw new DiskFullException();
    }

    function getName()
    {
       return "MySQL";
    }
}

class PostgreSQLServer implements NetworkStorage {
    function connect()
    {
        return $this;
    }

    function getName()
    {
       return "PostgreSQL";
    }
}

class MSSQLServer implements NetworkStorage {
    function connect()
    {
        throw new NetworkException();
    }

    function getName()
    {
       return "MSSQL";
    }
}

class ConnectionPool{
    private $storage;
    private $connectin;

    function __construct()
    {
        $this->storage = array();
    }

    function addStorage(NetworkStorage $storage)
    {
        array_push($this->storage,$storage);
    }

    function getConnection()
    {
        foreach($this->storage as $storage)
        {
            try {
                $this->connectin = $storage->connect();
            } catch (ServerLoadException $e) {
                echo $storage->getName()." is facing huge load";
            }catch(NetworkException $e)
            {
                 echo $storage->getName()." is facing huge network issue";
            }catch(DiskFullException $e)
            {
                 echo $storage->getName()." is facing huge disk full issue";
            }
        }

        if($this->connectin)
        {
            return $this->connectin;
        }

        return false;
    }
}


$mysql = new MySQLServer();
$pgsql = new PostgreSQLServer();
$mssql = new MySQLServer();

$cp = new ConnectionPool();
$cp->addStorage($mysql);
$cp->addStorage($mysql);
$cp->addStorage($mssql);
