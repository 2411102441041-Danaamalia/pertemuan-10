<html>
<body>

<?php
$jam = $_POST['jam'];
$gol = $_POST['gol'];

switch ($gol) {
    case 'A': $upah = 4000; break;
    case 'B': $upah = 5000; break;
    case 'C': $upah = 6000; break;
    case 'D': $upah = 7500; break;
}

$upahLembur = 3000;

if ($jam > 48) {
    $lembur = $jam - 48;
    $gaji = (48 * $upah) + ($lembur * $upahLembur);
} else {
    $gaji = $jam * $upah;
}

echo "<p>Golongan: $gol<br>";
echo "Total upah: Rp. $gaji</p>";
?>

</body>
</html>
