<?php 
require_once ("db.php");

$sql="SELECT * FROM tblbuah";

$hasil = $koneksi->query($sql);


echo "<table border>";
echo "<tr>
    <th>idbuah</th>
    <th>buah</th>
    <th>deksripsi</th>
    <th>harga</th>
</tr>";
echo "<tr>";

if ($hasil -> num_rows > 0) {
    while ($row=$hasil->fetch_array()) {
        echo "<tr>";
        echo '<td>'.$row[0].'</td>';
        echo '<td>'.$row[1].'</td>';
        echo '<td>'.$row[2].'</td>';
        echo '<td>'.$row[3].'</td>';
        echo "</tr>";
    }
}


?>