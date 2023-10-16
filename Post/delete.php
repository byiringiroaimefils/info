<?php
if(isset($_GET["id"])){
    include("conn.php");
    $id = $_GET["id"];
    $sql= "DELETE FROM users WHERE id = $id";
    mysqli_query($connect, $sql);
      if( mysqli_query($connect, $sql) == true){
        header("location:Output.php");
      }
}

?>
 