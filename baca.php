<?php

$file = "data.txt";
$data = file_get_contents($file);

$baris = explode("[R]", $data);

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
                            <th >Nama</th>
                            <th >Email</th>
                            <th >Phone</th>
                            <th colspan=2 style="text-align: center">Action</th>
                        </tr>
                    <?php
                    for($i =0; $i<count($baris)-1; $i++) {
                    $col = explode("|F|", $baris[$i]);
                    echo "<tr>";
                    echo "  <td>" . $col[0] . "</td>";
                    echo "  <td>" . $col[1] . "</td>";
                    echo "  <td>" . $col[2] . "</td>";
                    echo '  <td> <a href="delete.php?row='.$i.'">DELETE</a> </td>';
                    echo '  <td> <a href="edit.php?row='.$i.'">EDIT</a> </td>';
                    echo "</tr>";
                        }
                        ?>
                    </table>
                    <form>
                    <label style="margin-left: 15%; font-size: 28px; font-family: verdana;" for="dataLagi" class="dataLagi">Mau input data lagi? </label><br>
                    <input class="MyButton" type="button" value="Klik Disini" onclick="window.location.href='form.html'" />
                    </form>
</body>
</html>
