<?php
//koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "e-commerce");
function query($select)
{
    global $koneksi;
    $result = mysqli_query($koneksi, $select);
    $rows = [];
    while ($fetch = mysqli_fetch_assoc($result)) {
        $rows[] = $fetch;
    }
    return $rows;
}
function login($data)
{
    global $koneksi;
    $email =  stripslashes($data["email"]);
    $password = mysqli_real_escape_string($koneksi, $data["password"]);
    //Cek Ketersediaan username
    $result = mysqli_query($koneksi, "SELECT * FROM user WHERE email = '$email'");
    return mysqli_affected_rows($koneksi);
}
