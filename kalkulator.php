<?php
echo "Kalkulator Sederhana \n";
echo "#########################\n";
echo "Masukkan inputan Awal \n";
$inp_first = trim(fgets(STDIN));
echo "Masukkan inputan Akhir \n";
$inp_end = trim(fgets(STDIN));
echo "Masukkan operator bilangan \n";
$num = trim(fgets(STDIN));


while ($num == "+") {
    $result = $inp_first + $inp_end;
    echo "Hasil = $result \n";
    return;
}while ($num == "-") {
    $result = $inp_first - $inp_end;
    echo "Hasil = $result \n";
    return;
}while ($num == "/") {
    $result = $inp_first / $inp_end;
    echo "Hasil = $result \n";
    return;
}while ($num == "*") {
    $result = $inp_first * $inp_end;
    echo "Hasil = $result \n";
    return;
}
