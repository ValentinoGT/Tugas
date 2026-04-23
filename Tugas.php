<!-- Kasus Absensi Kelas -->
<?php
$nama = ["Budi", "Sinta", "Rian", "Dodi", "Alya"];
$cari = "Rian";
$ketemu = false;

for ($i = 0; $i < count($nama); $i++) {
    if ($nama[$i] == $cari) {
        echo "Nama ditemukan di indeks " . $i;
        $ketemu = true;
        break;
    }
}

if ($ketemu == false) {
    echo "Nama tidak ditemukan";
}
?>


<!-- Kasus Lost and Found -->
 <?php
$barang = ["Botol", "Tas", "Kunci Motor", "Payung", "Buku"];
$cari = "Kunci Motor";
$ketemu = false;

for ($i = 0; $i < count($barang); $i++) {
    if ($barang[$i] == $cari) {
        echo "Barang ditemukan di indeks " . $i;
        $ketemu = true;
        break;
    }
}

if ($ketemu == false) {
    echo "Barang tidak ditemukan";
}
?>


<!-- Kasus Buku Perpustakaan -->
 <?php
$buku = [100, 102, 105, 108, 110];
$cari = 105;

$awal = 0;
$akhir = count($buku) - 1;
$ketemu = false;

while ($awal <= $akhir) {
    $tengah = floor(($awal + $akhir) / 2);

    if ($buku[$tengah] == $cari) {
        echo "Data ditemukan di indeks " . $tengah;
        $ketemu = true;
        break;
    } elseif ($buku[$tengah] < $cari) {
        $awal = $tengah + 1;
    } else {
        $akhir = $tengah - 1;
    }
}

if ($ketemu == false) {
    echo "Data tidak ditemukan";
}
?>


<!-- Kasus Ranking Tryout -->
 <?php
$nilai = [950, 920, 890, 870, 850];
$cari = 890;

$awal = 0;
$akhir = count($nilai) - 1;
$ketemu = false;

while ($awal <= $akhir) {
    $tengah = floor(($awal + $akhir) / 2);

    if ($nilai[$tengah] == $cari) {
        echo "Skor ditemukan di indeks " . $tengah;
        $ketemu = true;
        break;
    } elseif ($nilai[$tengah] > $cari) {
        $awal = $tengah + 1;
    } else {
        $akhir = $tengah - 1;
    }
}

if ($ketemu == false) {
    echo "Skor tidak ditemukan";
}
?>


<!-- Kasus Kamus Istilah -->
 <?php
$kata = ["Algorithm", "Browser", "Database", "Network", "Program"];
$cari = "Algorithm";

$awal = 0;
$akhir = count($kata) - 1;
$ketemu = false;

while ($awal <= $akhir) {
    $tengah = floor(($awal + $akhir) / 2);

    if ($kata[$tengah] == $cari) {
        echo "Kata ditemukan di indeks " . $tengah;
        $ketemu = true;
        break;
    } elseif ($kata[$tengah] < $cari) {
        $awal = $tengah + 1;
    } else {
        $akhir = $tengah - 1;
    }
}

if ($ketemu == false) {
    echo "Kata tidak ditemukan";
}
?>