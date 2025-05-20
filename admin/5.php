

<!--if: percabangan dan logika; untuk menjalankan kode berdasarkan kondisi yang akan dicari.
operator pembanding:
= memberikan nilai
== membandingkan nilai
=== membandingkan tapi dengan tipe datanya.
!: tidak
empty: kosong
isset : tidak kosong
>: lebih besar; <: lebih kecil; >=:lebih besar sama dengan; <=: lebih kecil sama dengan
-->

<?php
$nama = "bambang";
if ($nama !="bambang"){
    echo "Iya";
} else{
    echo "Bukan";
}

if (!isset($nama)) {
    echo "Yaa";
} else {
    echo "Tidak";
}
echo "<br>";


$suhu = 35;
if ($suhu > 37) {
    echo "Demam";
} elseif($suhu>=35) {
    echo "Normal";
} else {
    echo "Kedinginan";
}
echo "<br>"


?>

<!--
Output:
Nama Peserta: nama kalian
Nilai: 85
Grade: B
Status: Lulus

Peserta dinyatakan lulus jika nilainya lebih dari 70 dan tidak lulus jila nilai kurang dari 70
Nilai juga dikategorikan ke dalam grade dengan huruf:
A: 90-100
B: 80-89
C: 70-79
D: 60-69
E: dibawah 60
-->

