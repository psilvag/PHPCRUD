
<?php
    $servidor="localhost";
    $db="phpcrud";
    $usuario="root";
    $password="";

    try{
        $conexion= new PDO("mysql:host=$servidor;dbname=$db",$usuario,$password);
        
    }catch(Exception $e){
        echo "Exception:".$e->getMessage();
    }
    

?>