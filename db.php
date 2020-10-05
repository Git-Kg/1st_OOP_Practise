<?php 
   class DB
   {  
      protected $pdo ; 
      public function __construct()
      {
         try {
               $this->pdo = new PDO("mysql:dbname=school; host=localhost",'root','password');
               $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
               
               } catch (PDOException $e) {
                     die( $e->getMessage()." - " . "Error Line No :" . $e->getLine());
               } catch (Exception $e) {
                     die( $e->getMessage());
            }
      }  

      public function index()
      {
         $statement = $this->pdo->query(" SELECT * FROM students ");
           
         if($statement){
               $result = $statement->fetchAll(PDO::FETCH_OBJ);
               return $result ;
          } 

      }

      public function store($data)
      {
         if($_POST){
            $sql = $this->pdo->prepare(
                " INSERT INTO students (name, email, gender, dob, age) 
                  VALUES (:name, :email, :gender, :dob, :age)
               ");
               $sql->bindParam(":name", $data['name']);
               $sql->bindParam(":email", $data['email']);
               $sql->bindParam(":gender", $data['gender']);
               $sql->bindParam(":dob", $data['dob']);
               $sql->bindParam(":age", $data['age']);
               
               if( $sql->execute() ){
                  header("Location:index.php");
               }
        }
      }

      public function edit($id)
      {  
         $sql = $this->pdo->prepare("SELECT * FROM students WHERE id = :id");
         $sql->bindParam(":id", $id);
         
         if( $sql->execute()){
            $result = $sql->fetch(PDO::FETCH_OBJ);
            return $result;
         }        
 
      }

      public function update($data)
      {      
         $sql = $this->pdo->prepare(
            "UPDATE students SET 
            name=:name, email=:email, gender=:gender, dob=:dob, age=:age 
            WHERE id = :id" 
           );
            $sql->bindParam(":name",$data['name']);
            $sql->bindParam(":email",$data['email']);
            $sql->bindParam(":gender",$data['gender']);
            $sql->bindParam(":dob",$data['dob']);
            $sql->bindParam(":age", $data['age']);
            $sql->bindParam(":id", $data['id']);
          
            if($sql->execute()){
               header("Location:index.php");
            }        
      }

      public function destroy($id)
      {
         $sql = $this->pdo->prepare(" DELETE FROM students WHERE id = :id ");
         $sql->bindParam(":id", $id);
                  
         if($sql->execute()){
            header("Location:index.php");
         } 
   
      }

   }

?>