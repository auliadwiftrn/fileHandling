<?php

$file = "data.txt";
$data = file_get_contents($file);

$rowdel = $_GET['row'];

$baris = explode("[R]", $data);
$databaru = "";
for($i = 0; $i<count($baris)-1; $i++) {
	$kolom = explode("|F|", $baris[$i]);
    if($i == $rowdel) {
    	?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="formStyle.css">
    <title>Mencoba Agar Bisa</title>
</head>
<body>
    <center><h1 style="margin-top: 5%; font-family:verdana;">BUKU TELEPON KU</h1>
        <h2 style="margin-top: 2%; font-family:verdana;">Mau edit? Silahkan diubah :)</h2></center>
        <form action="#" method="POST">
            <fieldset>
                <legend><h2>Ubah data</h2></legend>
                <label for="nama" class="nama">Nama </label>
                <input name="nama" type="text" value="<?php echo $kolom[0]?>">

                <label for="email" class="email">Email </label>
                <input name="email" type="email" value="<?php echo $kolom[1]?>">

                <label for="phone" class="phone">Phone </label>
                <input name="phone" type="tel" value="<?php echo $kolom[2]?>">

                <input type="submit" name="submit" value="Simpan Update" style="float:right;">

                <br>
                
            </fieldset>
        </form>
</body>
</html>

<?php
        if (isset($_POST["submit"])) {
            $nama = $_POST["nama"];
            $email = $_POST["email"];
            $phone = $_POST["phone"];
            $data = $nama  . "|F|" . 
                    $email . "|F|" .
                    $phone;
            $baris[$i] = $data; 
        }
    }
    $databaru .= $baris[$i] . "[R]";
}

if (isset($_POST["submit"])) {
    file_put_contents($file, $databaru);
    header('location:baca.php');
}
?>
?>
