<?php

$server = "localhost";
$user = "id18196253_aismasiswa";
$password = "MSg4h\*Kl[ClQMEl";
$nama_database = "id18196253_pendaftaransmasiswa";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>