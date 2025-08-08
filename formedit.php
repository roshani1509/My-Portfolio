<?php
include 'conn.php';
$id=$_GET['id'];
$sql="SELECT * FROM `fromdata`  where id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);

?>
<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $username=$_POST['uname'];
    $password=password_hash($_POST['password'], PASSWORD_DEFAULT);
    $email=$_POST['email'];

    $sql="UPDATE `fromdata` SET `username`='$username',`password`='$password',`email`='email' WHERE id=$id";
    $result=mysqli_query($conn,$sql);

    if($result)
    {
       header("location:index.php");

    }
    else{
        header("refresh:2");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP CRUD Mini Project</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="bg-light">
<div class="container mt-5 d-flex justify-content-center">
        
        <form method="post" class="w-50 pt-2">
            <h2 class="mb-4">User Form UPdate</h2>
            <label>Username</label>
            <input type="text" name="uname" value="<?php echo $row['username']?>" class="form-control" required><br><br>

            <label>Email</label>
            <input type="email" name="email" value="<?php echo $row['email']?>"class="form-control" required><br><br>

            <label>Password</label>
            <input type="password" name="password"  value="<?php echo $row['password']?>"class="form-control" required><br><br>

            <input type="submit" value="Update" class="btn btn-success">
        </form>
    </div>
    </body>
</html>


