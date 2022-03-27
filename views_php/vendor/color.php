
<?php 
include '../koneksi.php';
$sql = "INSERT INTO tbcolor VALUES ('', '$_POST[warna]')";
if(mysqli_query($conn, $sql)){
		echo "Data warna berhasil ditambahkan";
	}else{
		echo "Data warna gagal ditambahkan";
	}
	mysqli_close($conn);

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title></title>
		<link rel="stylesheet" href="../css/style.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="../fontawesome/all.min.css"> -->
		<style>
        * {
            font-family: 'photon-entypo', 'Roboto', 'Helvetica Neue';
            font-size: 12px;
        }

        .container {
            margin-top: 20px;
        }
    </style>
  </head>
  <body>
    
	<div class="container mt-5">
		<form action="color.php" method="POST">
		Warna : <input type="text" name="warna">
		<input type="submit" value="Submit">
		</form>
		<?php
			echo '<pre>';
			print_r($_POST);
		?>
		<table>
			<thead>
				<th>No.</th>
				<th>Warna</th>
			</thead>
			<tbody>
				<?php
					$sql = "SELECT * FROM tbcolor";
					$result = mysqli_query($conn, $sql);
					$no = 1;
					while ($row = mysqli_fetch_assoc($result)) {
						echo '<tr>';
						echo '<td>'.$no.'</td>';
						echo '<td>'.$row['warna'].'</td>';
						echo '</tr>';
						$no++;
					}
				?>
			</tbody>
		</table>
	</div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>