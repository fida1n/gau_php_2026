<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php
if (isset($_POST['send'])) {
    $nishani = $_POST['nishani'];

     if ($nishani >= 91) {
        $shefaseba = 'A';
    } elseif ($nishani >= 81) {
        $shefaseba = 'B';
    } elseif ($nishani >= 71) {
        $shefaseba = 'C';
    } elseif ($nishani >= 61) {
        $shefaseba = 'D';
    } elseif ($nishani >= 51){
        $shefaseba = 'E';
    } else {
        $shefaseba = 'F';
    }
    echo $shefaseba;
}
?>

<body>
    <form method="post">
       saxeli<input type="text" name="name">
       <br><br>
       gvari<input type="text" name="lastname">
       <br><br>
        Kursi <input type="number" name="kursi">
        <br><br>
        semestri<input type="number" name="semestri">
        <br><br>
        saswavlo kursi<input type="number" name="saswavlo_kursi">
        <br><br>
        nishani<input type="number" name="nishani" min = "0" max = "100">
        <br><br>
        leqtoris saxexli da gvari <input type="text" name="Lname">
        <br><br>
        dekanis saxeli da gvari <input type="text" name="Dname">
        <br><br>
        <button type="submit" name="send">send</button>
    </form>
</body>
</html>
