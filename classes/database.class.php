<?php
class Database{
    protected $connection;
    protected function __construct(){
        try{
            $conn = mysqli_connect(
                getenv('host'),
                getenv('dbuser'),
                getenv('dbpassword'),
                getenv('dbname')
                );
            if($conn){
                $this -> connection = $conn;
            }   
            else{
                throw new Exception('Database Connection Error');
            }
        }
        catch(Exception $exc){
            echo $exc;
        }
    }
}
?>