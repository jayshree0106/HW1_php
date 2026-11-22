<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="GET">
        username:
        <input type="text" name="uname"><br>
        password:
        <input type="number" name="pass"><br>
        <input type="checkbox" name="check" id="">Do you agree to terms and conditons?
<input type="submit">
</form>
</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"]==='GET'){
    $name=$_GET['uname'];
    $check=isset($_GET['check'])? "agreed":"not agreed";

    echo ": Welcome, $name. You have $check to the terms and conditions";


}
?>


