<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
if(isset($_GET['gagzavna'])){
    $salary = $_GET['xelfasi'];
    echo $salary - ($salary * 0.2) . "<br>";
    $tax = $_GET['tax'];
    echo $salary - ($tax /100 * $salary ) . "<br>";
}
?>
<body>
    <form method="get">
        name<input type="text" name="name">
        <br><br>
       lastname <input type="text" name="lastname">
        <br><br>
        pozicia<input type="text" name="pozicia">
        <br><br>
       xelfasi <input type="number" name="xelfasi">
        <br><br>
        gadasaxadi<input type="text" name="tax">
        <button type="submit" name="gagzavna">gagzavna</button>
    </form>
    
</body>
</html>