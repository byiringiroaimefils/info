<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <input type="text" name="usernme">
        <input type="password" name="pssword">
        <button>submit</button>
    </form>

    <?php

echo $_GET["usernme"];
echo $_GET["password"];

    ?>
</body>
</html>