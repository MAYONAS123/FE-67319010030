<?php
    $username = "root";
    $password = "123456";
    $host = "localhost";
    $database = "udtc_db";

    $connection = mysqli_connect($host,$username,$password,$database);

    $sql = "SELECT * FROM users";
    $query_sql = mysqli_query($connection,$sql);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user_list</title>
</head>
<body>
        <?php
            while($respond= mysqli_fetch_array($query_sql)){
                echo $respond['username'].$respond['password'];
            }
   
        ?>
    </textarea>


</body>
</html>