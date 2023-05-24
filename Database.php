//everything public cause i dont know what shouldnt be public yet :D
<?php
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