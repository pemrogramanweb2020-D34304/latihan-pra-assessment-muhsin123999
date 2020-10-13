<?php

$buku = array(
    array(
    "judul" => "Sherlock Holmes", 
    "pengarang" => "Arthur Conan Doyle",
    "harga" => "50000",
    "stok" => "20"
    ),
    array(
    "judul" => "Arsene Lupin",
    "pengarang" => "Maurice LeBlanc", 
    "harga" => "250000", 
    "stok" => "50"
    ),
    array(
    "judul" => "Game Of Throne",
    "pengarang" => "George R.R. Martin", 
    "harga" => "125000", 
    "stok" => "60"
    ),
);

echo "<table border='1'>";
echo "<thead>
        <th colspan='4'><b>Data Buku</b></th>
        </thead>
        <thead>
        <th>Judul</th>
        <th>Pengarang</th>
        <th>Harga</th>
        <th>Stok</th>
        </thead>";
$totalbuku = 0;
foreach($buku as $value){
    $totalbuku = $totalbuku + $value["stok"];
    echo"<tr>";
    echo"<td>".$value["judul"]."</td>";
    echo"<td>".$value["pengarang"]."</td>";
    echo"<td>".$value["harga"]."</td>";
    echo"<td>".$value["stok"]."</td>";

}
echo "<tr>";
echo "<td colspan='3'><b>Total Buku</b></td>";
echo "<td>".$totalbuku."</td>";
echo "</table>";

$pembelian = array(
    array(
    "judul" => "Sherlock Holmes", 
    "jumlah" => "5"
    ),
    array(
        "judul" => "Arsene Lupin", 
        "jumlah" => "2"
    ),
    array(
        "judul" => "Game Of Throne", 
        "jumlah" => "4"
    ),
);

$totalharga = 0;
    echo "<table border='1'>";
    echo "<thead>
          <th colspan='3'><b>Data Pembelian</b></th>
          </thead>
          <thead>
          <th><b>Judul</b></th>
          <th><b>Jumlah<b></th>
          <th><b>Harga</b></th>
          </thead>";
          
    for($a=0;$a<count($pembelian);$a++){
        echo "<tr>";
        echo "<td>".$pembelian[$a]["judul"]."</td>";
        echo "<td>".$pembelian[$a]["jumlah"]."</td>";
        for($b=0;$b<count($buku);$b++){
            if($pembelian[$a]["judul"]==$buku[$b]['judul']){
                $harga = $buku[$b]["harga"]*$pembelian[$a]["jumlah"];
                break;
            }
        }
        $totalharga = $totalharga + $harga;
        echo "<td>".$harga."</td>";  
        echo "</tr>";
    }
    echo "<tr>
          <td colspan='2'><b>Total Harga</b></td>
          <td>".$totalharga."</td>
          </tr>";
    echo "</table>";

?>