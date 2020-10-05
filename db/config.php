<?php 
    
    try {
        $pdo = new PDO("mysql:dbname=school; host=localhost",'root','password');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch (PDOException $e) {
        die( $e->getMessage()." - " . "Error On Line No :" . $e->getLine());
    } catch (Exception $e) {
        die( $e->getMessage());
    }
     

      
?>