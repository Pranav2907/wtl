<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        session_start();
        $uname = $_REQUEST["email"];
        $un = $_SESSION['user'] = $uname; 
        echo "Welcome, $un";
    ?>
    <br>
    <a href="./next.php">Next</a>
</body>
</html>