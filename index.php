<!DOCTYPE html>
<html>
<head>
    <title>Restoran App</title>
    <link rel="stylesheet" type="text/css"  href="style.css">
    
    <style>
        .title-container {
            position: absolute;
            top: 20px;
            left: 0;
            right: 0;
            text-align: center;
        }

        .title-animation {
            animation: slideInOut 10s infinite;
            opacity: 0;
            font-size: 28px;
            font-weight: bold;
        }

        @keyframes slideInOut {
            0%, 100% {
                opacity: 0;
                transform: translateY(-50px);
            }
            10%, 90% {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const title = document.getElementById('title');
            title.classList.add('title-animation');
        });
    </script>
</head>
<body>
    <div class="container">
        <div class="title-container">
            <h1 id="title" class="title-animation">WARTEG NUSANTARA</h1>
        </div>

</head>
<body>
<div class="container">
    <h1>Makanan</h1>
    <table>
        <tr>
            <th>Nama Makanan</th>
            <th>Harga</th>
        </tr>
        <?php
        // Koneksi ke database
        $conn = mysqli_connect("localhost", "root", "", "warteg");

        // Query untuk mengambil data dari tabel makanan
        $query = "SELECT * FROM makanan";
        $result = mysqli_query($conn, $query);

        // Tampilkan data makanan dalam tabel
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>".$row['nama_makanan']."</td>";
            echo "<td>".$row['harga_makanan']."</td>";
            echo "</tr>";
        }
        ?>
    </table>

    <h1>Minuman</h1>
    <table>
        <tr>
            <th>Nama Minuman</th>
            <th>Harga</th>
        </tr>
        <?php
        // Query untuk mengambil data dari tabel minuman
        $query = "SELECT * FROM minuman";
        $result = mysqli_query($conn, $query);

        // Tampilkan data minuman dalam tabel
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>".$row['nama_minuman']."</td>";
            echo "<td>".$row['harga_minuman']."</td>";
            echo "</tr>";
        }
        ?>
    </table>

    <h1>Pesanan</h1>
    <h2 >Pesan Minuman</h2>
    <form action="process.php" method="post">
        <label for="makanan1">Makanan:</label>
        <select name="makanan1" id="makanan1">
            <?php
            // Query untuk mengambil data dari tabel makanan
            $query = "SELECT * FROM makanan";
            $result = mysqli_query($conn, $query);

            // Tampilkan pilihan makanan dalam dropdown
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<option value='".$row['id_makanan']."'>".$row['nama_makanan']."</option>";
            }
            ?>
        </select>

        <br>

    <form action="process.php" method="post">
        <label for="makanan2">Makanan2:</label>
        <select name="makanan2" id="makanan2">
            <?php
            // Query untuk mengambil data dari tabel makanan
            $query = "SELECT * FROM makanan";
            $result = mysqli_query($conn, $query);

            // Tampilkan pilihan makanan dalam dropdown
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<option value='".$row['id_makanan']."'>".$row['nama_makanan']."</option>";
            }
            ?>
        </select>

        <br>

        <form action="process.php" method="post">
        <label for="makanan3">Makanan3:</label>
        <select name="makanan3" id="makanan3">
            <?php
            // Query untuk mengambil data dari tabel makanan
            $query = "SELECT * FROM makanan";
            $result = mysqli_query($conn, $query);

            // Tampilkan pilihan makanan dalam dropdown
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<option value='".$row['id_makanan']."'>".$row['nama_makanan']."</option>";
            }
            ?>
        </select>

        <br>

        <form action="process.php" method="post">
        <label for="makanan4">Makanan4:</label>
        <select name="makanan4" id="makanan4">
            <?php
            // Query untuk mengambil data dari tabel makanan
            $query = "SELECT * FROM makanan";
            $result = mysqli_query($conn, $query);

            // Tampilkan pilihan makanan dalam dropdown
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<option value='".$row['id_makanan']."'>".$row['nama_makanan']."</option>";
            }
            ?>
        </select>

        <br>

        <form action="process.php" method="post">
        <label for="makanan5">Makanan5:</label>
        <select name="makanan5" id="makanan5">
            <?php
            // Query untuk mengambil data dari tabel makanan
            $query = "SELECT * FROM makanan";
            $result = mysqli_query($conn, $query);

            // Tampilkan pilihan makanan dalam dropdown
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<option value='".$row['id_makanan']."'>".$row['nama_makanan']."</option>";
            }
            ?>
        </select>

        <br>

        <h2>Pesan Minuman</h2>

        <form action="process.php" method="post">
        <label for="minuman1">Minuman1:</label>
        <select name="minuman1" id="minuman1">
            <?php
            // Query untuk mengambil data dari tabel minuman
            $query = "SELECT * FROM minuman";
            $result = mysqli_query($conn, $query);

            // Tampilkan pilihan minuman dalam dropdown
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<option value='".$row['id_minuman']."'>".$row['nama_minuman']."</option>";
            }
            ?>
        </select>

        <br>

        <form action="process.php" method="post">
        
        <label for="minuman2">Minuman 2:</label>
        <select name="minuman2" id="minuman2">
        <?php
            // Query untuk mengambil data dari tabel minuman
            $query = "SELECT * FROM minuman";
            $result = mysqli_query($conn, $query);

            // Tampilkan pilihan minuman dalam dropdown
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<option value='".$row['id_minuman']."'>".$row['nama_minuman']."</option>";
            }
            ?>
        </select>

        <br>

        <form action="process.php" method="post">
        
        <label for="minuman3">Minuman 3:</label>
        <select name="minuman3" id="minuman3">
        <?php
            // Query untuk mengambil data dari tabel minuman
            $query = "SELECT * FROM minuman";
            $result = mysqli_query($conn, $query);

            // Tampilkan pilihan minuman dalam dropdown
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<option value='".$row['id_minuman']."'>".$row['nama_minuman']."</option>";
            }
            ?>
        </select>

        <br>    

        <form action="process.php" method="post">
        
        <label for="minuman4">Minuman 4:</label>
        <select name="minuman4" id="minuman4">
        <?php
            // Query untuk mengambil data dari tabel minuman
            $query = "SELECT * FROM minuman";
            $result = mysqli_query($conn, $query);

            // Tampilkan pilihan minuman dalam dropdown
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<option value='".$row['id_minuman']."'>".$row['nama_minuman']."</option>";
            }
            ?>
        </select>

        <br>    

        <form action="process.php" method="post">
        
        <label for="minuman5">Minuman 5:</label>
        <select name="minuman5" id="minuman5">
        <?php
            // Query untuk mengambil data dari tabel minuman
            $query = "SELECT * FROM minuman";
            $result = mysqli_query($conn, $query);

            // Tampilkan pilihan minuman dalam dropdown
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<option value='".$row['id_minuman']."'>".$row['nama_minuman']."</option>";
            }
            ?>
        </select>

        <br>    

        <input type="submit" value="Pesan">
    </form>

    <?php
    // Tampilkan pesan kesalahan jika ada
    if (isset($_GET['error'])) {
        $error = $_GET['error'];
        echo "<p style='color: red;'>".$error."</p>";
    }
    
    ?>

<header>
        <div class="logo">
            <img src="logo.png" alt="Logo">
        </div>
        
        <div class="slogan">
            <p>Merupakan tempat makan yang <br>menghadirkan cita rasa Indonesia</p>
        </div>
    </header>


<header>
        <h1 class="slide-up">Warteg Nusantara</h1>
    </header>

<script>
window.addEventListener('scroll', function() {
  var header = document.querySelector('header');
  header.classList.toggle('visible', window.scrollY > 0);
});
</script>


</body>
</html>
