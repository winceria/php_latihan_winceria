<?php
$nama = "Winceria";
$kelas = "TK B";
$jurusan = "Teknik Komputer";
$umur = 19;
$nilai = 87.5;

echo "========================================<br>";
echo "          KARTU PROFIL SISWA<br>";
echo "========================================<br>";

printf("Nama      : %s<br>", $nama);
printf("Kelas     : %s<br>", $kelas);

echo "Jurusan   : " . $jurusan . "<br>";

printf("Umur      : %d tahun<br>", $umur);
printf("Nilai     : %.2f<br>", $nilai);

if ($nilai >= 75) {
    echo "Status    : LULUS<br>";
} else {
    echo "Status    : TIDAK LULUS<br>";
}

echo "========================================<br>";
?>