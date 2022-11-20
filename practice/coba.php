<form action="" method="post">
    buah:
    <input type="text" name="buah">
    deskripsi
    <input type="text" name="deksripsi">
    <input type="submit" value="enter" name="enter">
</form>
<?php
require_once("db.php");

$sql = "SELECT * FROM tblbuah";

$hasil = $koneksi->query($sql);

echo "<table border>";
echo "<tr>
        <th>idbuah</th>
        <th>buah</th>
        <th>deskripsi</th>
    </tr>";

if ( $hasil-> num_rows > 0) {
    while ($row =  $hasil->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row['idbuah']."</td>";
        echo "<td>" . $row['buah'] . "</td>";
        echo "<td>" . $row['deskripsi'] . "</td>";
        echo "</tr>";
    }
}
echo '</table>';

if (isset($_POST['enter'])) {
    $buah = $_POST['buah'];
    $deskripsi = $_POST['deksripsi'];
    $sql = "INSERT INTO tblbuah (buah,deskripsi) VALUES ('$buah','$deskripsi')";
    $koneksi->query($sql);
}







?>



