<?php 
   require_once("db.php");
   $db = new DB;
   $result = $db->edit($_GET['id']); 
   
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Form</title>
<link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
    
        <div class="col-8">
            <h2 class=" text-center mt-4"> Update Student</h2>
            <form action="update.php" method="POST">

                <input type="hidden" name="id" value="<?php echo $result->id ; ?>">

                <div class="form-group mt-5 ">
                    <label> Name </label>
                    <input type="text" name="name" value= "<?php echo $result->name; ?>" class="form-control" >
                    </div>

                <div class="form-group ">
                    <label> Email </label>
                    <input type="email" name="email" value= "<?php echo $result->email; ?>" class="form-control" >
                </div>

                <div class="form-group">
                    <label> Gender </label>
                    <select name="gender" class="form-control">
                        <option value=""  disabled >---Choose Gender---</option>
                        <option value="male" <?php if($result->gender == "male"){ echo "selected"; }?> >Male</option>
                        <option value="female" <?php if($result->gender == "female"){ echo "selected"; }?> >Female</option>
                        <option value="other">Other</option>
                    </select>
                </div>

                <div class="row justify-content-center">
                <div class="form-group col">
                    <label > Date of Birth </label> 
                    <input type="date" name="dob" value= "<?php echo $result->dob; ?>" class="form-control">
                </div>

                <div class="form-group col">
                    <label > Age </label> 
                    <input type="number" name="age" value= "<?php echo $result->age; ?>" class="form-control">
                </div>
                </div>

                <button class="btn btn-outline-primary mt-2"> Update  </button>
                <a href="index.php" class="btn btn-outline-success mt-2 ml-3"> Back </a>

            </form>
        </div>

    </div>
        
</div>

</body>
</html>