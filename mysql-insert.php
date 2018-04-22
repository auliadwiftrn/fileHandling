
<!DOCTYPE html>
<html>
<head>
	<title>Mencoba Agar Bisa</title>
	<style>
form {
  padding: 1em;
  background: #f9f9f9;
  border: 1px solid #c1c1c1;
  margin-top: 1rem;
  max-width: 600px;
  margin-left: auto;
  margin-right: auto;
  padding: 1em;
}
input.MyButton {
margin-top: 3%;
margin-left: 25%;
width: 300px;
padding: 5px;
cursor: pointer;
font-weight: bold;
font-size: 150%;
background: #3366cc;
color: #fff;
border: 1px solid #3366cc;
border-radius: 2px;
}
input.MyButton:hover {
color: gold;
background: #c1c1c1;
border: 1px solid #c1c1c1;
}
</style>
</head>
<body>
<center><h1 style="margin-top: 5%; font-family:verdana;">BUKU TELEPON KU</h1></center>
<div style="max-width: 800px; margin-top: 2rem; max-width: 600px; margin-left: auto; margin-right: auto; padding: 1em;">
	<?php

include "mysql-connect.php";

//kirimkan variabel
$nama  = $_POST["nama"];
$email = $_POST["email"];
$phone   = $_POST["phone"];
$alamat   = $_POST["alamat"];

//input data ke tabel bukutelepon database butel
$sql = "INSERT INTO bukutelepon (nama, email, phone, alamat) "
     . "VALUES ('$nama','$email','$phone','$alamat')";
/* eksekusi query SQL */
$res = mysqli_query($link, $sql);
if($res) echo "<h1 style='max-width: 800px; font-size: 50px; margin-top: 5%; padding: 2% 2% 2% 2%; border: 1px solid #c1c1c1; color:gold; font-family:verdana; text-align: center;'>Data sudah disimpan!</h1>";
else echo mysqli_error($link);

/* tutup koneksi MySQL */
mysqli_close($link);
?>
</div>
<form>
<label style="margin-left: 15%; font-size: 40px; font-family: verdana;" for="dataLagi" class="dataLagi">Mau input data lagi? </label><br>
<input class="MyButton" type="button" value="Klik Disini" onclick="window.location.href='mysql-form.html'" />
</form>
</body>
</html>
