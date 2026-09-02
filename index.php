<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $nama = "April";
    $umur = 19;
    $status = false;
    
    // nama saya April, umur saya 19 tahun dan saya belum menikah

    if ($status == false) {
        echo "nama saya ". $nama . " , " . "umur saya " . $umur . " tahun dan saya belum menikah" ;
    } else {
        echo "nama saya ". $nama . " , " . "umur saya " . $umur . " tahun dan saya sudah menikah" ;
    }

    echo "<br>";

    for ($i=1; $i < 10; $i+=2) {
        echo $i;
    }

    echo "<br>";

    $belanja = 80000;

    if ($belanja > 100000) {
        $belanja = $belanja - ($belanja * 0.10);
    } else {

    }

    echo "Total belanjamu adalah " . $belanja;

    echo "<br>";

    $user = "admin";
    $pass = "alamak";

    $iuser = "admin";
    $ipass = "alamak";

    if ($iuser == $user && $ipass == $pass) {
        echo "Akses diberikan!";
    } else {
        echo "Akses ditolak!";
    }

    echo "<br>";

    $mhs = ['vano', 'april', 'rio'];
    $datamhs = ["nama"=>"April","umur"=>20,"kelas"=>"A","prodi"=>"BD"];

    echo "saya ". $datamhs["nama"] . ", umur saya " . $datamhs["umur"] . " tahun, saya prodi " . $datamhs["prodi"] . " kelas " . $datamhs["kelas"];

    echo "<br>";

    function perkalian($angka1, $angka2) {
        return $angka1 * $angka2;
    }

    $hasil = perkalian(20,10);
    
    echo $hasil;
    ?>

    

    

</body>
</html>