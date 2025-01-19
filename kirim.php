<?php
// Koneksi ke database
$servername = "localhost";
$username = "root"; // Sesuaikan dengan username database Anda
$password = ""; // Sesuaikan dengan password database Anda
$dbname = "remidi_smpn1kalimanah";

$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Cek apakah form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['name'];
    $email = $_POST['email'];
    $subjek = $_POST['subject'];
    $pesan = $_POST['message'];

    // Menyimpan data ke dalam tabel kontak
    $sql = "INSERT INTO kontak (nama_lengkap, email, subjek, pesan) VALUES ('$nama', '$email', '$subjek', '$pesan')";

    if ($conn->query($sql) ==…
