<?php

include "mysql-connect.php";

$sql = "SELECT id,nama,email,phone,alamat " . 
        "FROM bukutelepon";

$res = mysqli_query($link,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mencoba Agar Bisa</title>
<style>
table {
    margin-top: 2rem;
    margin-left: auto;
    margin-right: auto;
    border: 1px solid #c1c1c1;
    border-collapse: collapse;
    width: 50%;
    font-size: 14px;
    font-family: Verdana;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
}
form {
  padding: 1em;
  background: #f9f9f9;
  border: 1px solid #c1c1c1;
  margin-top: 3rem;
  max-width: 400px;
  margin-left: auto;
  margin-right: auto;
  padding: 1em;
}
input.MyButton {
margin-top: 3%;
margin-left: 30%;
width: 150px;
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
                    <table>
                        <tr>
                        	<th >ID</th>
                            <th >Nama</th>
                            <th >Email</th>
                            <th >Phone</th>
                            <th >Alamat</th>
                            <th colspan=2 style="text-align: center">Action</th>
                        </tr>
                    <?php
                    while ($baris = mysqli_fetch_array($res,MYSQLI_BOTH)){
            		$id= $baris['id'];
            		echo "<tr>";
            		echo "<td>". $baris["id"]. "</td>";
            		echo "<td>". $baris["nama"]. "</td>";
            		echo "<td>". $baris["email"]. "</td>";
            		echo "<td>". $baris["phone"]. "</td>";
            		echo "<td>". $baris["alamat"]. "</td>";
            		echo '<td><a href="mysql-delete.php?id='.$baris['id'].'">DELETE</a></td>';
            		echo '<td><a href="mysql-update.php?id='.$baris['id'].'">EDIT</a></td>';
            		echo "</tr>";
            	}
            		echo "</table>";
            		mysqli_close($link);
                    ?>
                    </table>
                    <form>
                    <label style="margin-left: 15%; font-size: 28px; font-family: verdana;" for="dataLagi" class="dataLagi">Mau input data lagi? </label><br>
                    <input class="MyButton" type="button" value="Klik Disini" onclick="window.location.href='mysql-form.html'" />
                    </form>
</body>
</html>