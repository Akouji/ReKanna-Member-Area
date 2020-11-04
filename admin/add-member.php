<?php
  include('../koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
?>
<?php
session_start();

if (!isset($_SESSION["username"])) {
	echo "Anda harus login dulu <br><a href='/index.php'>Klik disini</a>";
	exit;
}

$level=$_SESSION["level"];

if ($level!=1) {
    echo "Anda tidak punya akses pada halaman admin";
    exit;
}

$id_user=$_SESSION["id_user"];
$username=$_SESSION["username"];
$nama=$_SESSION["nama"];
$email=$_SESSION["email"];

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../style/favicon.ico">

    <title>Re:Kanna - Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="../style/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../style/custom/offcanvas.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  </head>

  <body class="bg-light">

<?php include('../header.php') ?>

    <main role="main" class="container">
      <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-purple rounded box-shadow">
        <img class="mr-3" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-outline.svg" alt="" width="48" height="48">
        <div class="lh-100">
          <h6 class="mb-0 text-white lh-100"><? echo $nama ?></h6>
          <small><? echo $email ?></small>
        </div>
      </div>

      <div class="my-3 p-3 bg-white rounded box-shadow">
        <div class="media text-muted pt-3">
        <form action="inc/member_tambah.php" method="post">
        <div class="form-group">
            <label>Username:</label>
            <input type="text" name="username" class="form-control" placeholder="Masukan Username" />
        </div>
	<div class="form-group">
            <label>Nama:</label>
            <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" />
        </div>
	<div class="form-group">
            <label>Email:</label>
            <input type="email" name="email" class="form-control" placeholder="Masukan Email" />
        </div>
	<div class="form-group">
            <label>Level:</label>
            <input type="number" name="level" class="form-control" placeholder="Masukan Level" />
        </div>
	<div class="form-group">
            <label>Code:</label>
            <input type="text" name="code" class="form-control" placeholder="Masukan Code" />
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>

    </form>
        </div>
      </div>
    
    </main>
<?php include('../footer.php') ?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../style/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../style/assets/js/vendor/popper.min.js"></script>
    <script src="../style/js/bootstrap.min.js"></script>
    <script src="../style/assets/js/vendor/holder.min.js"></script>
    <script src="../style/custom/offcanvas.js"></script>
  </body>
</html>