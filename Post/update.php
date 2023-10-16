<?php
$id=$_GET['id']; 
include("conn.php");
$sql = "SELECT * FROM users WHERE Id='$id'";
$Output = mysqli_query($connect, $sql);
$row=mysqli_fetch_assoc($Output);
echo $row['Name'];
echo $row['password'];



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <style>
        body{
            background-color: black;
            
        }
        form {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: white;
            padding: 40px;
            border: 9px solid skyblue;
        }
        form input{
            width: 95%;
            padding: 9px;
            border: 1px solid;
        }
        button{
           width: 104%;
           padding: 5px;
           background-color: skyblue;
           border: none;
           color: white;
        }
    </style>
</head>

<body>
    <form action="" method="Post">
        <label for="">UserName</label>
        <input type="text" name="username" value="<?php $row['Name'];?>"> <br> <br> <br>
        <label for="">Password</label>
        <input type="password" name="Password"  value="<?php $row['password'];?>" > <br> <br>
        <button type="submit">submit</button>
    
    </form>
    
</body>

</html>

