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

    ?>

    

</body>
</html>