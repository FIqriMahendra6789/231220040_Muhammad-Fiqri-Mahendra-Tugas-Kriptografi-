<?php 
 function fpb($m, $n);

 {
    while ($n != 0) {
        $kali = floor ($m / $n);
        $sisa = $m % $n;
        echo "$m = $kali x $n + $sisa <br>";

        $temp = $n;
        $n = $m % $n;
        $m = $temp;
    }

    return $m;
 }

//   AMBIL input dari form HTML via post

$m = isset($_POST['angka1']) ? (int)$_POST['angka1'] : 0;
$n = isset($_POST['angka2']) ? (int)$_POST['angka2'] : 0;


$hasilfpb = fpb($m, $n);

 if($hasilfpb == 1) {
    echo "FPB dari $m dan $n relatif prima";
 } else {
    echo "Fpb dari $m dan $n bukan relatif prima, dengan nilai FPB " . $hasilfpb;
 }

?>