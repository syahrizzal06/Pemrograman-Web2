<?php
session_start();
//pemeriksaan session
if (isset($_SESSION['LOGIN'])) {
//jika sudah login
//menampilkan isi session
echo "<center><h1>SELAMAT DATANG ". $_SESSION['LOGIN'] ."</h1></center>";
echo "<center><h2>Halaman ini hanya bisa diakses jika Anda sudah login</h2><center>";
echo "<center><h2>KLIK <a href='pert14_session3.php'>DISINI
(session3.php)</a> UNTUK LOGOUT</h2><center>";
} else {
//session belum ada artinya belum login
die ("Anda belum login! Anda tidak berhak masuk ke halaman
ini.Silahkan login <a href='pert14_session1.php'>di sini</a>"); 
}
 ?>