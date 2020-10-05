<?php 
   require_once("db.php");
   $db = new DB;
   $result = $db->index();       
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students List</title>
    <link rel="stylesheet" href="bootstrap.min.css" >
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10 mb-3">

                <h2 class="text-center mt-3"> Student List </h2>

                <a href="create.php" class="btn btn-success mt-2"> Create New Student </a> 

            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-10">
               <table class="table table-striped boreder">
                    <thead >
                        <th> No </th>
                        <th> Name </th>
                        <th> Email </th>
                        <th> Gender </th>
                        <th> Date of Birth</th>
                        <th> Age </th>
                        <th> Actions </th>                     
                    </thead>
                    <tbody>
                        <?php $count = 0; ?>
                        <?php foreach($result as $student) : ?>
                        <?php $count ++ ; ?>
                            <tr>
                                <td> <?php echo $count ?> </td>
                                <td> <?php echo ucfirst($student->name); ?> </td> 
                                <td> <?php echo $student->email ?> </td>
                                <td> <?php echo ucfirst($student->gender); ?> </td>
                                <td> <?php echo $student->dob ?> </td>
                                <td> <?php echo $student->age ?> </td>                       
                            <td>
                                <a href="edit.php?id=<?php echo $student->id ?> "class="btn btn-primary btn-sm"> Edit </a>
                                <a onClick=" javascript: return confirm('Are you sure want to Delete ');"  href="destroy.php?id=<?php echo $student->id ?> " class="btn btn-outline-danger btn-sm"> Delete </a>
                            </td>
                        </tr> 
                        <?php endforeach; ?>
                        
                    </tbody>
               </table>
            </div>
        </div>
    </div>
    
</body>
</html>

