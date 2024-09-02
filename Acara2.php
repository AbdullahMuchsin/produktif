<?php

// ======== VARIABEL

// Penulisan variable harus diawali dengan tanda $
$nama;
$umur;
$_lokasi_momori;
$ANGKA_MAKSIMUM;

// Varible dalam php harus bersifat case sensitif
$andi = "Andi";
echo $Andi . PHP_EOL; // Undefined variable: Andi

// Cara memberikan nilai kepada variable
$nama = "andi";
$umur = 17;
$pesan = "Saya sedang belajar PHP di Politeknik Negeri Jember";

// Variable dalam PHP tidak memerlukan deklarasi terlebih dahulu
$andi = "Andi";
echo $andi . PHP_EOL;

// Varible dalam PHP tidak bertipe
$a = 17_00;
$a = "Aku";
$a = 17.5_00;

// Variable sistem PHP (Predefined Variables)
var_dump($GLOBALS);

// ======== TIPE DATA
$umur = 21;
$harga = 15_000;
$rugi = 5_000_00;

echo $umur;
echo "<br/>";
echo $harga;
echo "<br/>";
echo $rugi;
echo "<br/>";

// Mengambil nilai max INTEGER
print PHP_INT_MAX . PHP_EOL;

$angka_float1 = 0.78;
$angka_float2 = 14.99;
$angka_scientific1 = 0.314E1;
$angka_scientific2 = 0.3365E-3;

echo $angka_float1 . PHP_EOL;
echo "<br/>";
echo $angka_float2 . PHP_EOL;
echo "<br/>";
echo $angka_scientific1 . PHP_EOL;
echo "<br/>";
echo $angka_scientific2 . PHP_EOL;

// Penulisan Tipe Data String dengan Single Quoted
$string1 = 'Ini adalah string sederhana' . PHP_EOL;
$string2 = 'Ini adalag string yang bisa memiliki
beberapa baris';
$string3 = 'Dia berkata : "\'ll be back"';
$string4 = 'Anda telah berhasil menghapus C:\\xampp\\htdoct';
$string5 = 'Kalimat ini tidak akan pindah ke: \n baris baru';
$string6 = 'Variabel juga tidak otomatis ditampilkan $string1 dan $string3';

echo $string1;
echo "<br>";
echo $string2;
echo "<br>";
echo $string3;
echo "<br>";
echo $string4;
echo "<br>";
echo $string5;
echo "<br>";
echo $string6;

// Penulisan Tipe Data String dengan Double Quoted
$string1 = "Ini adalah string sederhana" . PHP_EOL;
$string2 = "Ini adalag string yang bisa memiliki
beberapa baris";
$string3 = "Dia berkata : \"I'll be back\"";
$string4 = "Anda telah berhasil menghapus C:\\xampp\\htdoct";
$string5 = "Kalimat ini tidak akan pindah ke: \n baris baru";
$string6 = "Variabel juga tidak otomatis ditampilkan $string1 dan $string3";

echo $string1;
echo "<br>";
echo $string2;
echo "<br>";
echo $string3;
echo "<br>";
echo $string4;
echo "<br>";
echo $string5;
echo "<br>";
echo $string6;

// Penulisan Tipe Data String Dengan Heredoc
$IPK = 3.9;
$string1 = <<<end
Saya sedang belajar PHP
di Politeknik Negeri Jember <br />
Kali ini tentang pembahasan
mengenai "PHP", <br /> dan berharap
bisa dapat IPK $IPK :)
end;

echo $string1 . PHP_EOL;

// Penulisan Tipe Data String Dengan Nowdoc
$IPK = 3.9;
$string1 = <<<'selesai'
Saya sedang belajar PHP
di Politeknik Negeri Jember <br />
Kali ini tentang pembahasan
mengenai "PHP", <br /> dan berharap
bisa dapat IPK $IPK :)
selesai;

echo $string1 . PHP_EOL;

$hasil1 = -3;
$hasil2 = 3 + 5;
$hasil3 = 8 - 4.5;
$hasil4 = 2 * 5;
$hasil5 = 3 + 8 / 5 - 3;
$hasil6 = 10 % 4;

echo "\$hasil1: ";
var_dump($hasil1);
echo "<br \>";
echo "\$hasil2: ";
var_dump($hasil2);
echo "<br \>";
echo "\$hasil3: ";
var_dump($hasil3);
echo "<br \>";
echo "\$hasil4: ";
var_dump($hasil4);
echo "<br \>";
echo "\$hasil5: ";
var_dump($hasil5);
echo "<br \>";
echo "\$hasil6: ";
var_dump($hasil6);
echo "<br \>";

$a = 10;
$a = $a + 5;
$a = $a - 10;
echo "\$a = $a";
echo "<br />";

// Sama hasil nya dengan kode berikut
$b = 10;
$b += 5;
$b -= 10;
echo "\$b = $b";

echo "1.12 < 14 =";
var_dump(12 < 14);
echo "<br />";
echo "2.14 < 14 =";
var_dump(14 < 14);
echo "<br />";
echo "3.14 < 14 =";
var_dump(14 <= 14);
echo "<br />";
echo "4.10 < '10' =";
var_dump(14 <= 14);
echo "<br />";
echo "5.10 < '10' =";
var_dump(14 <= 14);
echo "<br />";
echo "6.10 < '10' =";
var_dump(14 <= 14);
echo "<br />";
echo "7.'150 < '1.5e2' =";
var_dump(14 <= 14);
echo "<br />";
echo "8.'Politeknik_Negeri_Jember == 0 =";
var_dump('Politeknik_Negeri_Jember' == 0);
echo "<br />";

echo "<h3>Postincrement</h3>";
$a = 5;
echo "\$a = $a <br />";
echo "\$a akan bernilai 5: " . $a++ . " (\$a++)<br />";
echo "\$a akan bernilai 6: " . $a . "<br />";

echo "<h3>Preincrement</h3>";
$a = 5;
echo "\$a = $a <br />";
echo "\$a akan bernilai 6: " . ++$a . " (++\$a)<br />";
echo "\$a akan bernilai 6: " . $a . "<br />";

echo "<h3>Postdecrement</h3>";
$a = 5;
echo "\$a = $a <br />";
echo "\$a akan bernilai 5: " . $a-- . " (\$a--)<br />";
echo "\$a akan bernilai 4: " . $a . "<br />";

echo "<h3>Predecrement</h3>";
$a = 5;
echo "\$a = $a <br />";
echo "\$a akan bernilai 4: " . --$a . " (--\$a)<br />";
echo "\$a akan bernilai 4: " . $a . "<br />";

$hasil1 = true and false;
echo '$hasil1 = ';
echo var_dump($hasil1) . "<br/>"; // $hasil1 = bool(true) 
$hasil2 = (true and false);
echo '$hasil2 = ';
echo var_dump($hasil2) . "<br/>"; // $hasil2 = bool(false) 
$hasil3 = (true xor false);
echo '$hasil3 = ';
echo var_dump($hasil3) . "<br/>"; // $hasil3 = bool(true) 
$hasil4 = (false or true && false);
echo '$hasil4 = ';
echo var_dump($hasil4) . "<br/>"; // $hasil4 = bool(false) 
$a = true;
$b = false;
$hasil5 = ($a and $b || $a or $b);
echo '$hasil5 = ';
echo var_dump($hasil5); // $hasil5 = bool(true)

$a = "Hello ";
$b = "World!";
$a .= $b;
echo $a; // Hello World!
echo "<br />";
$a = "belajar ";
$b = "PHP ";
$c = "di Politeknik Negeri Jember";
$hasil = "Saya sedang " . $a . $b . $c;
echo $hasil; // Saya sedang belajar PHP di Politeknik Negeri Jember

$a = "Hello ";
$hasil = "{$a} World!";
echo $hasil; // Hello World!
echo "<br />";
$a = "belajar ";
$b = "PHP ";
$c = "di Politeknik Negeri Jember";
$hasil = "Saya sedang {$a}{$b}{$c}";
echo $hasil; // Saya sedang belajar PHP di Politeknik Negeri Jember