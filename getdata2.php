<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Menangkap data dari input form
    $email = $_POST['inputemail'];
    $password = $_POST['inputpassword'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $alamat = $_POST['alamat'];
    $pekerjaan = $_POST['pekerjaan'];
    $no_telp = $_POST['no_telp'];
    
    // Khusus untuk checkbox, kita cek apakah dicentang atau tidak
    $agreement = isset($_POST['agreement']) ? "Setuju" : "Tidak Setuju";

    echo "<h2>Hasil Registrasi Anda:</h2>";
    echo "<hr>";
    echo "<b>Email:</b> " . htmlspecialchars($email) . "<br>";
    echo "<b>Password:</b> " . htmlspecialchars($password) . " <i>(Jangan ditampilkan di aplikasi asli!)</i><br>";
    echo "<b>Tanggal Lahir:</b> " . htmlspecialchars($tgl_lahir) . "<br>";
    echo "<b>Alamat:</b> " . nl2br(htmlspecialchars($alamat)) . "<br>";
    echo "<b>Pekerjaan:</b> " . htmlspecialchars($pekerjaan) . "<br>";
    echo "<b>No. Telepon:</b> " . htmlspecialchars($no_telp) . "<br>";
    echo "<b>Persetujuan:</b> " . $agreement . "<br>";
    
    echo "<br><a href='register.php'>Kembali ke Form</a>";
} else {
    echo "Akses ditolak. Silakan isi form terlebih dahulu.";
}
?>