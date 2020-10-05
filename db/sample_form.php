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
    
    <form action="data.php" method="POST">

        <div class="form-group mt-5 ">
            <label> Name </label>
            <input type="text" name="name" class="form-control" placeholder="Name">
            </div>

        <div class="form-group ">
            <label> Password </label>
            <input type="password" name="password" class="form-control" placeholder="Password">
        </div>

        <div class="form-group ">
            <label> Email </label>
            <input type="email" name="email" class="form-control" placeholder="Email">
        </div>

        <div class="form-group">
            <label> Gender </label>
            <select name="gender" class="form-control">
                <option value="" selected disabled >---Choose Gender---</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>
        </div>

        <div class="form-group">
            <label > Twonships </label>
            <input list="townships" name="township" class="form-control">
            <datalist id="townships">
                <option value="Yangon">
                <option value="Mandalay">
                <option value="Nay Pyi Taw">                  
            </datalist>
        </div>
        
        <button class="btn btn-outline-primary "> Submit </button>
        
    </form>

        
</div>

</body>
</html>