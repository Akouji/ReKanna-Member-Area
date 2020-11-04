<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="style/favicon.ico">

    <title>Re:Kanna - Member Area</title>

    <!-- Bootstrap core CSS -->
    <link href="style/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="style/custom/floating-labels.css" rel="stylesheet">
  </head>

  <body data-new-gr-c-s-check-loaded="14.981.0">
    <form class="form-signin" action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
      <div class="text-center mb-4">
        <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Re:Kanna Login</h1>
        <p>Build form controls with floating labels via the <code>:placeholder-shown</code> pseudo-element. <a href="https://caniuse.com/#feat=css-placeholder-shown">Works in latest Chrome, Safari, and Firefox.</a></p>
    <?php
		 //Fungsi untuk mencegah inputan karakter yang tidak sesuai
		 function input($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
		//Cek apakah ada kiriman form dari method post
		if ($_SERVER["REQUEST_METHOD"] == "POST") {

			session_start();
			include "koneksi.php";
			$p = input(md5($_POST["code"]));

			$sql = "select * from users where code='".$p."' limit 1";
			$hasil = mysqli_query ($kon,$sql);
			$jumlah = mysqli_num_rows($hasil);

			if ($jumlah>0) {
				$row = mysqli_fetch_assoc($hasil);
				$_SESSION["id_user"]=$row["id_user"];
				$_SESSION["username"]=$row["username"];
				$_SESSION["nama"]=$row["nama"];
				$_SESSION["email"]=$row["email"];
				$_SESSION["level"]=$row["level"];
		
		
				if ($_SESSION["level"]=$row["level"]==1)
				{
					header("Location:admin/index.php");
				}else if ($_SESSION["level"]=$row["level"]==2){
					header("Location:member/index.php");
				}
		
				
			}else {
				echo "<div class='alert alert-danger'>
				<strong>Error!</strong> Code tidak ditemukan. 
			  </div>";
			}

		}
	
	?>
      </div>

      <div class="form-label-group">
        <input type="text" id="inputCode" class="form-control" name="code" placeholder="Masukkan code login.." required="" autofocus="">
        <label for="inputCode">Login Code</label>
      </div>

      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted text-center">All Rights Reserved, Unless Otherwise Indicated.</p>
    </form>
  </body>
</html>