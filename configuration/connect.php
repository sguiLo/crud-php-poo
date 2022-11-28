<?php 

    define('HOST', 'localhost');        
    define('DATABASENAME', 'db_confianca');        
    define('USER', 'root');        
    define('PASSWORD', '907420');     

    class Connect{
        protected $connection;

        function __construct()
        {
            $this->connectDatabase();
        }

        function connectDatabase()
        {
            try {
                $this->connection = new PDO('mysql:host='.HOST.';dbname='.DATABASENAME, USER, PASSWORD);
            } catch (PDOException $e) {
                echo "Error!".$e->getMessage();
                die();
            }
        }
    }
