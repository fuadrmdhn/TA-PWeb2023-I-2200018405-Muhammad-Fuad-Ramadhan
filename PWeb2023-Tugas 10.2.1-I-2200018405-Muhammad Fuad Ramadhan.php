<!DOCTYPE html>
<html>
<head>
    <title>Konversi Nilai</title>
</head>
<body>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Nilai: <input type="text" name="nilai">
        <input type="submit" value="Submit">
    </form>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nilai = $_POST['nilai'];

    if ($nilai >= 80.00 && $nilai <= 100.00) {
        echo "Nilai Anda $nilai, Anda mendapatkan nilai huruf A, Anda LULUS";
    } elseif ($nilai >= 76.25 && $nilai < 79.99) {
        echo "Nilai Anda $nilai, Anda mendapatkan nilai huruf A-, Anda LULUS";
    } elseif ($nilai >= 68.75 && $nilai < 76.24) {
        echo "Nilai Anda $nilai, Anda mendapatkan nilai huruf B+, Anda LULUS";
    } elseif ($nilai >= 65.00 && $nilai < 68.74) {
        echo "Nilai Anda $nilai, Anda mendapatkan nilai huruf B, Anda LULUS";
    } elseif ($nilai >= 62.50 && $nilai < 64.99) {
        echo "Nilai Anda $nilai, Anda mendapatkan nilai huruf B-, Anda LULUS";
    } elseif ($nilai >= 57.50 && $nilai < 62.49) {
        echo "Nilai Anda $nilai, Anda mendapatkan nilai huruf C+, Anda LULUS";
    } elseif ($nilai >= 55.00 && $nilai < 57.49) {
        echo "Nilai Anda $nilai, Anda mendapatkan nilai huruf C, Anda LULUS";
    } elseif ($nilai >= 51.25 && $nilai < 54.99) {
        echo "Nilai Anda $nilai, Anda mendapatkan nilai huruf C-, Anda GAGAL";
    } elseif ($nilai >= 43.75 && $nilai < 51.24) {
        echo "Nilai Anda $nilai, Anda mendapatkan nilai huruf D+, Anda GAGAL";
    } elseif ($nilai >= 40.00 && $nilai < 43.74) {
        echo "Nilai Anda $nilai, Anda mendapatkan nilai huruf D, Anda GAGAL";
    } else {
        echo "Nilai Anda $nilai, Anda mendapatkan nilai huruf D, Anda GAGAL";
    }
}
?>