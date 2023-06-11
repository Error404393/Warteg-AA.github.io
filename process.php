<?php
// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "warteg");

// Cek koneksi database
if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

// Fungsi untuk mengecek apakah inputan kosong
function isEmpty($input)
{
    return empty(trim($input));
}

// Simpan data pesanan
for ($i = 1; $i <= 5; $i++) {
    $makanan = $_POST["makanan" . $i];
    $minuman = $_POST["minuman" . $i];

    if (!isEmpty($makanan) || !isEmpty($minuman)) {
        $query = "INSERT INTO pesanan (id_makanan, id_minuman) VALUES ('$makanan', '$minuman')";
        $result = mysqli_query($conn, $query);

        // Cek apakah query berhasil dijalankan
        if ($result) {
            echo "Pesanan $i berhasil ditambahkan!<br>";
        } else {
            echo "Gagal menambahkan pesanan $i. Silakan coba lagi.<br>";
        }
    }
}

// Menutup koneksi database
mysqli_close($conn);
?>
