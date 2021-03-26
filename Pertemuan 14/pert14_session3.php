<?php 

	session_start();
	if (isset($_SESSION['LOGIN'])) {
		unset($_SESSION);
		session_destroy();

		echo "<center><h1>ANDA BERHASIL LOGOUT</h1></center>";
		echo "<center><h2><a href='pert14_session1.php'>KLIK DISINI</a> UNTUK LOGIN KEMBALI</h2></center>";

		echo "<center><h2>Anda sekarang tidak bisa masuk kehalaman <a href='pert14_session2.php'>session2.php</a></h2></center>";
	}
 ?>
© 2021 GitHub, Inc.