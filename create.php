
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
            <h2 class=" text-center mt-4"> Create New Student</h2>
            <form action="store.php" method="POST">

                <div class="form-group mt-5 ">
                    <label> Name </label>
                    <input type="text" name="name" class="form-control" placeholder="Name" required>
                    </div>

                <div class="form-group ">
                    <label> Email </label>
                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                </div>

                <div class="form-group">
                    <label> Gender </label>
                    <select name="gender" class="form-control" >
                        <option value="" selected disabled >---Choose Gender---</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                </div>

                <div class="row justify-content-center">
                <div class="form-group col">
                    <label > Date of Birth </label> 
                    <input type="date" name="dob" class="form-control">
                </div>

                <div class="form-group col">
                    <label > Age </label> 
                    <input type="number" name="age" class="form-control">
                </div>
                </div>

                <button class="btn btn-outline-primary mt-2"> Add New Student </button>
                <a href="index.php" class="btn btn-outline-success mt-2 ml-3"> Back </a>

            </form>
        </div>

    </div>
        
</div>

</body>
</html>