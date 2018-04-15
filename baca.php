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
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="styles.css">
    <title>Data</title>
   
</head>
<body style="background-color:#2980b9;">
<div class="container" >
    <div class="row justify-content-center " style="margin-top:50px;">
        <div class="col-xm-6 offset-xm-3" style="">
            <div class="card" style="width: 55rem;">
                    <table class="table table-bordered">
                        <tr><th class="text-center"colspan =" 7"  > Biodata </th></tr>
                        <tr>
                            <td class="table-primary">Nama</td>
                            <td class="table-primary">Email</td>
                            <td class="table-primary">Phone</td>
                            <td class="table-primary">Tanggal Lahir</td>
                            <td class="table-primary">Hobi</td>
                            <td class="table-primary" colspan=2>Action</td>
                        </tr>
                    <?php
                    for($i =0; $i<count($baris)-1; $i++) {
                    $col = explode("|F|", $baris[$i]);
                    echo "<tr>";
                    echo "  <td>" . $col[0] . "</td>";
                    echo "  <td>" . $col[1] . "</td>";
                    echo "  <td>" . $col[2] . "</td>";
                    echo "  <td>" . $col[3] . "</td>";
                    echo "  <td>" . $col[4] . "</td>";
                    echo '  <td> <a href="delete.php?row='.$i.'">DELETE</a> </td>';
                    echo '  <td> <a href="edit.php?row='.$i.'">EDIT</a> </td>';
                    echo "</tr>";
                        }
                        ?>
                    </table>
                    <a href="form.html" style=" width:150px; margin-left:45.5rem;" class="btn btn-outline-dark btn-sm">Kembali Ke Form!</a>
            </div>
        </div>
    </div>
</div>



</body>
</html>




    


