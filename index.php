<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Store</title>
    <style>
        p{
            font-size: 20px;
            color: white;
            width: 20%;
            height: 10%;
            background-color: skyblue;
            padding: 5px;
        }
    </style>
</head>
<body>

<?php
// include("connection.php");

$conn = mysqli_connect("localhost", "root", "", "green");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_name = $_POST["Username"];
    $password = $_POST["password"];
    $email = $_POST["Email"];

    $sql = "INSERT INTO info (Username, Password, Email) VALUES ('$user_name', '$password', '$email')";
   
    if( mysqli_query($conn, $sql)== true){
        echo " <p> Student sucessful Added </p>" ;
    }
};
?>
     <form action="#" method="post">
        <label for="User name">User name</label> <br>
        <input type="text" name="Username"> <br>
        <label for="password">PASSWORD</label> <br>
        <input type="password" name="password"> <br>
        <label for="email">Eml</label> <br>
        <input type="email" name="Email"> <br>

        <button type="submit" name="su">submit</button>
     </form>
    
</body>
</html>