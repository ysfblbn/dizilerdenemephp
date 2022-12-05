<?php
$urun = ["Mersedes", "Reno", "Bmw", "Fiat", NULL];
function myFunction($array, $value)
{
    $filtrele = array_filter($array);
    $random = array_rand($filtrele, $value);
    $filtre = array_map(function ($item) use ($filtrele) {
        return $filtrele[$item];
    }, $random);
    return $filtre;
}

echo "<pre>";
print_r(myFunction($urun, 2));
print_r(myFunction($urun, 3));
print_r(myFunction($urun, 2));
print_r(myFunction($urun, 4));
print_r(myFunction($urun, 5));
?>