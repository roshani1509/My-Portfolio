<?php
 include 'conn.php';

 $sql= "SELECT * FROM `fromdata`";
 $result=mysqli_query($conn,$sql);


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
    <style>
        .head{
            width: 100%;
            
            display: flex;
            justify-content: space-between;
        }
    </style>
</head>
<body class="bg-light">
<div class="container mt-5">
        <div class="head">
            <h2> User form Data</h2>
            <a href="form.php">ADD FORM DATA</a>
        </div>
        <table class="table table-bordered pt-2">
            <tr>
                <th>Id</th>
                <th>User Name</th>
                <th>Email</th>
                <th colspan="2">Actions</th>
            </tr>
            <?php
            if($result->num_rows > 0)
            {
                while($row= mysqli_fetch_assoc($result))
                {
                    echo "<tr>
                        <td>".$row['id']."</td>
                        <td>".$row['username']."</td>
                        <td>".$row['email']."</td>
                        
                        <td><a href='formedit.php?id=".$row['id']."'>EDIT</a>
                        <a href='formdelete.php?id=".$row['id']."'>DELETE</a></td>
                        </tr>";
                }
            }
            else
            {
                 echo "<tr><td colspan='5'>No data found</td></tr>";
            }
            ?>
        </table>
</div>
</body>
</html>

