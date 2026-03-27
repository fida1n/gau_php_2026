<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
if(isset($_POST['send'])){
    $kitxva1 = $_POST['Q1']; 
    $kitxva2 = $_POST['Q2'];
    $kitxva3 = $_POST['Q3'];
    $kitxva4 = $_POST['Q4'];
    $kitxva5 = $_POST['Q5'];

    $sworia = 0;

    if($kitxva1 == 'A'){
     $sworia++; }
    if($kitxva2 == 'B'){
        $sworia++; }
    if($kitxva3 == 'B'){
        $sworia++;}
    if($kitxva4 == 'kai ramea'){
        $sworia++; }
    if($kitxva5 == 'kai ramea'){
        $sworia++; }
    if($sworia >= 3){
        echo "თქვენი ქულა: $sworia/5";
        }

}
?>
<body>
    <form method="post">
        php rtulia?
        <input type="radio" name="Q1" value="A">ki
        <input type="radio" name="Q1" value="B">ara
        <br><br>
        tevzi ertia?
        <input type="radio" name="Q2" value="A">ki
        <input type="radio" name="Q2" value="B">ara
        <br><br>
        it gikvars?
        <input type="radio" name="Q3" value="A">ki
        <input type="radio" name="Q3" value="B">ara
        <br><br>
        <b>ras pikrobt php ze?</b>
        <input type="text" name="Q4">
        <br>
        ras pikrobt htmlze?
        <input type="text" name="Q5">
        <br>
        <button type="submit" name="send">gagzavna</button>

    </form>
</body>
</html>