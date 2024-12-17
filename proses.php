<?php

if(isset($_POST['simpan']))
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jeniskelamin = $_POST['jeniskelamin'];

    echo "Perkenalkan Nama saya $nama, dari Kelas $kelas dan Kelamin saya $jeniskelamin";


?>