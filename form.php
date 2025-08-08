
<?php
include 'conn.php';
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $username=$_POST['uname'];
    $password=password_hash($_POST['password'], PASSWORD_DEFAULT);
    $email=$_POST['email'];

    $sql="INSERT INTO `fromdata`(`username`, `password`,`email`) VALUES ('$username','$password','$email')";
    $result=mysqli_query($conn,$sql);

    if($result)
    {
       header("location:index.php");

    }
    else
    {
        header("refresh:2");
    }
  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP CRUD</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="bg-light">
<div class="container mt-5 d-flex justify-content-center">
    
        <form method="post"  class="w-50 p-5">
            <h2 class="mb-4">User Form</h2>
            <label>Username</label>
            <input type="text" name="uname" class="form-control" required><br><br>

            <label>Email</label>
            <input type="email" name="email" class="form-control" required><br><br>

            <label>Password</label>
            <input type="password" name="password" class="form-control"required><br><br>


            <input type="submit" value="Submit" class="btn btn-success">
        </form>
    </div>
</body>
</html>
