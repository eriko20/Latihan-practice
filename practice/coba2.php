<form action="" method="post">
    idbuah
    <input type="text" name="idbuah">
    buah
    <input type="text" name="buah">
    deskripsi
    <input type="text" name="deskripsi">
    <input type="submit" value="submit" name="enter">
</form>
<?php 
require_once ("db.php");
$sql = "SELECT * FROM tblbarang";
$hasil = $koneksi->query($sql);

echo "<table border>";
echo "<tr> 
    <th>idbarang</th>
    <th>nama barang</th>
    <th>deskripsi</th>
    </tr>";

if ($hasil > 0) {
    while ($row = $hasil->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row['idbarang']."</td>";
        echo "<td>".$row['namabarang']."</td>";
        echo "<td>".$row['deskripsi']."</td>";
        echo "</tr>";
    }
}
echo "</table>";


if (isset($_POST['post'])) {
    $id=$_POST['idbuah'];
    $buah=$_POST['buah'];
    $deskripsi=$_POST['deskripsi'];
    $sql = "INSERT INTO tblbarang (namabarang,deskripsi) VALUES ('$buah','$deskripsi')";
    $hasil = $koneksi->query($sql);
}

?>