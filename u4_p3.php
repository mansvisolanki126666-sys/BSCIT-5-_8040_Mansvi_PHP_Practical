<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $conn = new mysqli("localhost","root","","studentdb");
    $sql = "INSERT INTO students3(name,email,city)
    VALUES ('tirth','tirth@gmail.com','rajkot')";
    if(mysqli_query($conn,$sql)){
        echo "record inserted successfully.";

    }
    else{
        echo"Error";
    }
</body>
</html>