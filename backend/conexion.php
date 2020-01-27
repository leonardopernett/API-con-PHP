<?php

try {
    
    $pdo = new PDO('mysql:host=localhost;dbname=API', 'root', 'Admin09');

}catch(PDOException $e){
   
    print "ERROR!!!". $e->getMessage();
    die();
}