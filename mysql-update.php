<?php
include "mysql-connect.php";
$id= $_GET['id'];

$sql = "SELECT id,nama,email,phone,alamat " . 
        "FROM bukutelepon WHERE id='$id'";
        $res = mysqli_query($link,$sql);
        $coba=mysqli_fetch_assoc($res);
     
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="mysql-formStyle.css">
    <title>Mencoba Agar Bisa</title>
</head>
<body>
<?print_r($coba);?>
	<center><h1 style="margin-top: 5%; font-family:verdana;">BUKU TELEPON KU</h1>
        <h2 style="margin-top: 2%; font-family:verdana;">Mau edit? Silahkan diubah :)</h2></center>
        <form action="#" method="POST">
            <fieldset>
                <legend><h2>Ubah data</h2></legend>
                <label for="nama" class="nama">Nama </label>
                <input name="nama" type="text" value="<?php echo $coba["nama"];?>">

                <label for="email" class="email">Email </label>
                <input name="email" type="email" value="<?php echo $coba["email"];?>">

                <label for="phone" class="phone">Phone </label>
                <input name="phone" type="tel" value="<?php echo $coba["phone"];?>">

                <label for="alamat" class="alamat">Alamat </label>
                <input name="alamat" type="text" value="<?php echo $coba["alamat"];?>">

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
    $alamat = $_POST["alamat"];

  $sql1="UPDATE bukutelepon SET nama='$nama', email='$email',phone='$phone',alamat='$alamat',
        WHERE id='$id'";

    $hasil=mysqli_query($link,$sql1);
}

if (isset($_POST['submit'])) {
header('location:mysql-select.php');
}
?>
