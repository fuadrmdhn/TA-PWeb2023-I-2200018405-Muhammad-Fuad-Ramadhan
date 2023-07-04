<?php
	if (isset($_POST['Login'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		if ($username == "admin" && $password == "rahasia") {
			echo "<h2>Login Berhasil, Selamat</h2>";
		} else {
			echo "<h2>Login Gagal, Mohon Ulang Lagi</h2> <br>";
			echo "<a href=5olahformlogin.html> Klik Disini </a>Untuk Mengisi Username dan Password";
		}
	}
?>