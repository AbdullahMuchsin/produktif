<?php

$panjang = 3;
$lebar = 4;

$hasil = $panjang * $lebar;

echo "Hasil dari lebar persegi panjang : $hasil";
echo "Hasil dari lebar persegi panjang : {$hasil}" . "error";
echo 'Hasil dari lebar persegi panjah : $hasil';

$sql = <<<'SQL'
    nama $hasil
SQL;

echo $sql;