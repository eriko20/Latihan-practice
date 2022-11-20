<form action="" method="post">
    tanggal
    <input type="number" name="tanggal">
    <br>
    bulan
    <input type="number" name="bulan">
    <br>
    <input type="submit" value="enter" name="enter">
</form>

<?php 

    if (isset($_POST['enter'])) {
        $tanggal=$_POST['tanggal'];
        $bulan=$_POST['bulan'];
        if ($bulan > 0 && $tanggal <=20) {
            echo 'anda uranus';
        }
    }


?>