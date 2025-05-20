



<?php
function callName()
{
    echo "Nama saya Angel";
}

function callNameLagi()
{
    return "Nama saya David";
}


function perkalian()
{
    $angka1 = 20;
    $angka2 = 20;
    $total = $angka1 * $angka2;
    return $total;
}
callName();
echo "<br>";
echo callNameLagi();
echo "<br>";
echo perkalian(30, 20);
echo perkalian(50, 20);

