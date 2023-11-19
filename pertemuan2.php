<?php
$hostname = "127.0.0.1";
$username = "root";
$password = "";
$database = "db_kelas_C";

mysql_connet("localhost", "root", "", "db_kelas_C");


if($koneksi){
    echo "koneksi Berhasil";
}else {
    echo "Koneksi Gagal";
}

?>