<?php 

  $hasilText="";
 function fpb($m, $n){
    $langkah ="";
    while ($n != 0) {
        $kali = floor ($m / $n);
        $sisa = $m % $n;
        $langkah .= "$m = $kali x $n + $sisa\n";

        $temp = $n;
        $n = $m % $n;
        $m = $temp;
    }

    return[$m, $langkah];
 }

//   AMBIL input dari form HTML via post

$m = isset($_POST['angka1']) ? (int)$_POST['angka1'] : 0;
$n = isset($_POST['angka2']) ? (int)$_POST['angka2'] : 0;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $m = (int)$_POST['angka1'];
    $n = (int)$_POST['angka2'];

    list($hasilfpb, $langkah) = fpb($m, $n); 

    if($hasilfpb == 1) {
        $hasilText = $langkah . "FPB dari $m dan $n = $hasilfpb → Relatif Prima ✓";
    } else {
        $hasilText = $langkah . "FPB dari $m dan $n = $hasilfpb → Bukan Relatif Prima ✗";
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Membuat Kalkulator FPB</title>
</head>
<body>
   <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
            <div class="calculator-form">
                <h2 class="mb-4 mt-4 text-center">Kalkulator FPB Kriptografi</h2>
                <!-- masukan angka 1 -->
                 <form action="" method="post">
                    <div class="mb-3">
                        <label for="name" class="form-label">Masukan Angka 1 </label>
                        <input type="number" class="form-control" id="angka1" name="angka1" required>
                    </div>

                    <!-- masukan angka 2 -->

                     <div class="mb-3">
                        <label for="name" class="form-label">Masukan Angka 2 </label>
                        <input type="number" class="form-control" id="angka2" name="angka2" required>
                    </div>


                       <!-- button hasil  -->
                     <div class="d-flex justify-content-end">
                         <button type="submit" class="btn btn-danger px-4 w-80 tombol">Hitung Hasil</button>

                     </div>
                 </form>

                    <!-- masukan angka 2 -->

              
            </div>

            <div class="mb-3">
                <label for="message" class="form-label">Hasil dan Penjelasan</label>
                <textarea class="form-control" id="message" rows="5"><?php echo $hasilText ?></textarea>
            </div>
          </div>
      </div>

   </div>
</body>
</html>