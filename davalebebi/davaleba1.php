<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
if(isset($_GET['gagzavna'])){
    $xelfasi = $_GET['salary'];
    echo $xelfasi - ($xelfasi * 0.2);
}
?>
<body>
    <form method="get"">
        <input type="text" name="name">
        <input type="text" name="lastname">
        <input type="text" name="pozicia">
        <input type="number" name="xelfasi">
        <button type="submit" name="gagzavna">gagzavna</button>
    </form>
    
</body>
</html>