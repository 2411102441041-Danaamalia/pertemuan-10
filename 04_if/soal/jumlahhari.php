<html>
<body>

<?php
$bulan = date("n");  // bulan saat ini dalam angka (1–12)

switch ($bulan) {
    case 1: case 3: case 5: case 7:
    case 8: case 10: case 12:
        $hari = 31;
        break;

    case 4: case 6: case 9: case 11:
        $hari = 30;
        break;

    case 2:
        $hari = "28 atau 29 (tergantung tahun kabisat)";
        break;
}

echo "<p>Bulan sekarang adalah bulan $bulan, jumlah harinya: $hari hari.</p>";
?>

</body>
</html>
