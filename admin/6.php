<?php


$nama = "Angela";
if ($nama = "Angela") {
    echo "Angela";
}
echo "<br>";

$nilai = "85";
if ($nilai >= "70") {
    echo "Lulus";
} elseif ($nilai < "70") {
    echo "Tidak lulus";
}
echo "<br>";


$grade = "B";
if ($nilai >= "90") {
    echo "A";
}
if ($nilai >= "80") {
    echo "B";
}
if ($nilai >= "70") {
    echo "C";
}
if ($nilai >= "60") {
    echo "D";
} elseif ($nilai <= "60") {
    echo "E";
}

echo "<br>";


$status = "Lulus";
if ($nilai >= "70") {
    echo "Lulus";
} elseif ($nilai < "70") {
    echo "Tidak lulus";
}
echo "<br>";
echo "<br>";















$nama = "Angela";
$nilai = "65";
$grade = "";
$status = "";

if ($nilai >= 70) {
    $status = "Lulus";
} else {
    $status = "Tidak Lulus";
}

if ($nilai >= 90) {
    $grade = "A";
} elseif ($nilai >= 80) {
    $grade = "B";
} elseif ($nilai >= 70) {
    $grade = "C";
} elseif ($nilai >= 60) {
    $grade = "D";
} else {
    $grade = "E";
}


echo "Nama Peserta :" . $nama . "<br>";
echo "Nilai : " . $nilai . "<br>";
echo "Grade :" . $grade . "<br>";
echo "Status :" . $status . "<br>";


echo "<br>";
echo "<br>";




$username = "admin56";
$password = "admin123";

if ($username == "admin" or $password == "admin") {
    echo "Login Berhasil";
} else {
    echo "Login Gagal";
}
