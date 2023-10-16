<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        table {
            margin-left: 45px;
            margin-top: 5%;

            width: 45%;
        }

        th {
            border-bottom: 2px solid black;
            /* width: fit-content; */
            padding: 5px;
            font-size: 25px;
            text-align: left;
        }

        td {
            font-size: 20px;
            border-bottom: 2px solid #ccc;
            margin-top: 2%;

        }

        tr {

            gap: 20px;
        }

        .new a {
            margin-top: 6px;
            margin-left: 45px;
            border: 2px solid black;
            width: 30px;
            text-decoration: none;
            padding: 5px;
            background-color: #cdd;
            color: black;
        }
    </style>
</head>

<body>
    <div class="new">

        <a href="index.php">Add New</a>
    </div>
    <table>
        <tr>
            <th>Id</th>
            <th>Names</th>
            <th>Action</th>

        </tr>
        <tr>
            <?php
            include("conn.php");

            $sql = "SELECT * FROM users";

            $Output = mysqli_query($connect, $sql);

            if ($Output == true) {
                foreach ($Output as $user) {

                    echo "<tr>
                     <td>  $user[Id]  </td>
                     <td>  $user[Name]  </td>
                     <td> 
                     <a href='update.php?id={$user['Id']}'>Edit</a>
                     <a href='delete.php?id={$user['Id']}'>Delete</a>
                     </td>

                    </tr>";
                }
            } else {
                echo "Fail";
            }
            ?>

        </tr>
    </table>
</body>

</html>