<html>
<body>

<?php
$tahun = $_POST['tahun'];

if (($tahun % 4 == 0 && $tahun % 100 != 0) || ($tahun % 400 == 0))
    echo "<p>Tahun $tahun adalah tahun kabisat.</p>";
else
    echo "<p>Tahun $tahun BUKAN tahun kabisat.</p>";
?>

</body>
</html>
