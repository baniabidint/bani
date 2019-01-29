<?php
include "conn.php";
$id_hobbies=$_POST['id_hobbies'];
$person_hobbies=$_POST['person_hobbies'];
$name=$_POST['name'];
$name_kategori=$_POST['name_kategori'];
$query=mysql_query("insert into tabel_hobbies(id_hobbies, name, person_hobbies)
value('$id_hobbies','$name','$person_hobbies')");
if($query){
echo "Data Berhasil ditambah";
?>
<a href="/arkademy.php">
&nbsp;&nbsp;Lihat Data Masuk
</a>
<?php
}else{
echo "Gagal input data";
echo mysql_error();
}
?>