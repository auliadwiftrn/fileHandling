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
		<head><link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="styles.css">
		</head>
		<body style="background-color:#2980b9;">
			<div class="container" >
				<div class="row justify-content-center " style="margin:50px;">
					<div class="col-xm-6 offset-xm-3" style="">
						<div class="card" style="width: 18rem;">
							<div class="card-body">
								<form action="#" method="POST">
										<div class="form-group">
												<label for="name">Nama</label>
												<input type="text" class="form-control" name="nama"  value="<?php echo $kolom[0] ?>">
										</div>
										<div class="form-group">
												<label for="exampleInputEmail1">Alamat Email</label>
												<input name="email" type="email" class="form-control"  aria-describedby="emailHelp" value="<?php echo $kolom[1] ?>">
										</div>
										<div class="form-group">
												<label for="phone">Nomor Handphone</label>
												<input type="tel" class="form-control" name="phone" value="<?php  echo $kolom[2]?>" >
										</div>
										<div class="form-group">
												<label for="tgl">Tanggal Lahir</label>
												<input type="date" class="form-control" name="tl" value="<?php echo $kolom[3]?>" >
										</div>
										<div class="form-group">
												<label for="name">Hobi</label>
												<input type="text" class="form-control" name="hobi" value="<?php echo $kolom[4] ?>" >
										</div>
										<input type="submit" name="submit" value="Simpan Update" style="float:right;">
								</form>
							</div>
						</div>        
					</div>
				</div>
        	</div>
		</body>
	</html>


    	<?php
    	if (isset($_POST['submit'])) {
    		$nama = $_POST['nama'];
    		$email = $_POST['email'];
    		$phone = $_POST['phone'];
			$lahir = $_POST['tl'];
			$hobi = $_POST['hobi'];
    		$data = $nama  . "|F|" . 
        			$email . "|F|" .
					$phone . "|F|" .
					$lahir . "|F|" .
					$hobi;
        	$baris[$i] = $data; 
    	}
    }
    $databaru .= $baris[$i] . "[R]";
}



if (isset($_POST['submit'])) {
	file_put_contents($file, $databaru);
	header('location:baca.php');
}
?>