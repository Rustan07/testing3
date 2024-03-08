<?php

if(isset($_POST['hitung'])) {
    $bil1 = intval($_POST['bil1']);
    $bil2 = intval($_POST['bil2']);
    $opera = $_POST['opera'];

    switch ($opera) {
        case '+' :
        $hasil = $bil1 + $bil2;
        break;
        case '-' :
        $hasil = $bil1 - $bil2;
        break;
        case '*' :
        $hasil = $bil1 * $bil2;
        break;
        case '/' :
        $hasil = $bil1  / $bil2;
        break;
    }
}

if(isset($_POST['hapus'])) {
    $_POST = 'bil1';
    $_POST = 'bil2';
    $_POST = 'hasil';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Sederhana</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

    <div class="kalku">
        <a class="a" href="menu.html">X</a>
        <h3 class="judul">Kalkulator Sederhana</h3>
        <marquee class="marq" behavior="scroll" direction="right">Selamat Menggunakan Kalkulator</marquee>
        <form method="POST" action="index.php">
            <input type="text" name="bil1" class="bil" autocomplete="off" placeholder="Masukkan Bilangan Pertama">
            <input type="text" name="bil2" class="bil" autocomplete="off" placeholder="Masukkan Bilangan Kedua">
            <select name="opera" class="opera">
                <option value="+">Tambah</option>
                <option value="-">Kurang</option>
                <option value="*">Kali</option>
                <option value="/">Bagi</option>
            </select>
            <button name="hitung" class="tombol" value="hitung">Hitung</button>
            <button name="hapus" class="tombol" value="hapus">Hapus</button>
            <?php if(isset($_POST['hitung'])) { ?>
            <input type="text" name="hasil" class="hasil" value="<?php echo number_format($hasil); ?>" readonly>
            <?php } else { ?>
                <input type="text" name="hasil" class="hasil" value="0" readonly>
                <?php } ?> 
                <hr color="">
                <h3 class="copyright">Copyright &copy; Rustan 2024</h3>
        </form>
    </div>
</body>
</html>