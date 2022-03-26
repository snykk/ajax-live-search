<?php
define("HOST","localhost");
define("USER","root");
define("PASS","");
define("DB","mhs");

$db = new mysqli("localhost","root","","mhs");
if ($db->connect_error) {
    //  akan dieksekusi ketika terjadi error
    die("Koneksi Gagal");
}