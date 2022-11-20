<form action="" method="post">
    bilangan 1
    <input type="number" name="bill1">
    <br>
    bilangan 2
    <input type="number" name="bill2">
    <br>    <br>
    <input type="submit" value="tambah" name="tambah">
    <br>    <br>
    <input type="submit" value="kali" name="kali">
    <br>    <br>
    <input type="submit" value="bagi" name="bagi">

</form>

<?php

    if (isset($_POST['tambah'])) {
        $bill1=$_POST['bill1'];
        $bill2=$_POST['bill2'];
        $hasil=$bill1+$bill2;

        echo $hasil;
    }

    if (isset($_POST['kali'])) {
        $bill1=$_POST['bill1'];
        $bill2=$_POST['bill2'];
        $hasil=$bill1 * $bill2;

        echo $hasil;
    }

    if (isset($_POST['bagi'])) {
        $bill1=$_POST['bill1'];
        $bill2=$_POST['bill2'];

        $hasil=$bill1/$bill2;

        echo $hasil; 
    }


?>