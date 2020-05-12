<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <label>Nhap so phan tu: </label>
    <input type="text" name="number"><br>
    <input type="submit" name="Run">

</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = $_POST["number"];
    if ($num < 0 || $num > 100) {
        check();
    } else {
        for ($i = 0; $i < $num; $i++) {
            echo $i . " ";
        }
    }
}
function checkNum($number)
{
    if ($number < 0 || $number > 100) {
        throw new Exception("Gia tri nhap tu 0-100");
    } else {
        return true;
    }
}

function check()
{
    try {
        checkNum(102);
        echo "Nhap gia tri tu 0-100";
    } catch (Exception $e) {
        echo "Mesage: " . $e->getMessage();
    }
}

?>

</body>
</html>
