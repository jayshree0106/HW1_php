<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        UserName:
        <input type="text" name="uname">
PhoneNo:
<input type="number" name="phone">
<select name="drop" id="">
    <option value="Toyota">Toyota
</option>
 <option value="Ford">Ford
</option>
 <option value="Tesla">Tesla
</option>
</select>

<input type="submit">
</form>
</body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"]==='POST'){
    $name=$_POST['uname'];
    $phone=$_POST['phone'];
    $dropdown=$_POST['drop'];

    echo "Hello, $name . Your phone number is $phone and your  preferred car brand is $dropdown.";
                                                           



}
?>