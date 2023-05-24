<?php

//removed router.php to test database
//everything public cause i dont know what shouldnt be public yet :D

require 'functions.php';
// require 'router.php';


class Database{

    public $connection;
    public function __construct(){
        $dsn = 'mysql:host=localhost;port=3306;dbname=my-webpage;charset=utf8mb4;user=root;';
        
        $this->connection = new PDO($dsn);
    }
    public function query($query){
        
        
        $statement = $this->connection->prepare($query);
        
        $statement->execute();
        
        return $statement;
    }
}

$db = new Database;

$posts = $db->query("SELECT * FROM posts")->fetchAll(PDO::FETCH_OBJ);

dd($posts);