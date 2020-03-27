<?php
class db{
    
    private static $conn;
    
    
    public static function dbConnection(){
        
        try{
            $conn = new PDO('mysql:host=localhost;dbname=db', 'root', 'root');
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        }
        catch(PDOException $e){
            echo "Erro ao conectar na base de dados!".$e->getMessage(); 
            exit;
        }
    }
}
?>