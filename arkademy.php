<html>
  <head>
    <title>
      Data Masuk
    </title>
  </head>
  <body>
    <?php
include "koneksi.php";
$query=mysql_query("select * from tabel_hobbies");
$jumlah=mysql_num_rows($query);
echo "Jumlah Pesan : ".$jumlah;
echo "<hr>";
?>
    <?php
while($row=mysql_fetch_array($query))
{
echo "Pesan ke-"; echo $a=$a+1; echo "<br>";
echo "id_kategori :$row[id_kategori]<br>";
echo "name :$row[name]<br>";
echo "nama_kategori :$row[nama_kategori]<br>";
echo "<hr>";
}
?>
    <br/>
    <a href="/isi.php">
      Isi buku tamu
    </a>
  </body>
</html>