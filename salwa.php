<!DOCTYPE html>
<html>
<body>

<h3>Form Pemesanan Kamar Hotel</h3>

<form method="post">
    <input type="radio" name="kamar" value="biasa" checked> Biasa (150.000 / hari)<br>
    <input type="radio" name="kamar" value="vip"> VIP (200.000 / hari)<br>
    <input type="radio" name="kamar" value="super"> Super VIP (400.000 / hari)<br><br>

    Lama Inap :
    <input type="number" name="hari" value="1"><br><br>

    <input type="submit" name="proses" value="Hitung">
</form>

<?php
if (isset($_POST['proses'])) {

    $kamar = $_POST['kamar'];
    $hari  = $_POST['hari'];

    if ($kamar == "biasa") {
        $harga = 150000;
        $nama = "Biasa";
    } elseif ($kamar == "vip") {
        $harga = 200000;
        $nama = "VIP";
    } else {
        $harga = 400000;
        $nama = "Super VIP";
    }

    $total = $harga * $hari;

    if ($hari > 5) {
        $diskon = $total * 0.1;
    } else {
        $diskon = 0;
    }

    $bayar = $total - $diskon;

    echo "<hr>";
    echo "Jenis Kamar : $nama <br>";
    echo "Harga per Hari : Rp $harga <br>";
    echo "Lama Inap : $hari hari <br>";
    echo "Diskon : Rp $diskon <br>";
    echo "Total Bayar : Rp $bayar";
}
?>

</body>
</html>
