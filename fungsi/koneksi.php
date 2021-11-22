<?php
// definisikan koneksi ke database
$server = "localhost";
$username = "zaveaweb_payrol";
$password = "serpong0321";
$database = "zaveaweb_db_payrol";

// Koneksi dan memilih database di server
mysql_connect($server,$username,$password) or die("Koneksi gagal");
mysql_select_db($database) or die("Database tidak bisa dibuka");
