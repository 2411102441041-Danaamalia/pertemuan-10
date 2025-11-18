<html>
<body>

<?php
$jam = $_POST['jam'];
$upah = 2000;
$upahLembur = 3000;

if ($jam > 48) {
    $lembur = $jam - 48;
    $gaji = (48 * $upah) + ($lembur * $upahLembur);
} else {
    $gaji = $jam * $upah;
}

echo "<p>Total upah: Rp. $gaji</p>";
?>

</body>
</html>