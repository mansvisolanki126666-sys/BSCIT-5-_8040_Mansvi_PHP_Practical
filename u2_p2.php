<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sort arry</title>
</head>
<body>

<form method="post">
    Enter numbers separated by commas:
    <input type="text" name="numbers">
    <input type="submit" value="Sort">
</form>

<?php
if(isset($_POST['numbers']))
{

    $input = $_POST['numbers'];
    $array = explode(",", $input);

    sort($array);
    echo "<h3>Sorted Array:</h3>";
    foreach($array as $value)
    {
        echo $value . " ";
    }
}
?>

</body>
</html>
    