<?php
  // memanggil file koneksi.php untuk membuat koneksi
include '../koneksi.php';

  // mengecek apakah di url ada nilai GET id
  if (isset($_GET['id'])) {
    // ambil nilai id dari url dan disimpan dalam variabel $id
    $id = ($_GET["id"]);

    // menampilkan data dari database yang mempunyai id=$id
    $query = "SELECT * FROM rekanna WHERE id='$id'";
    $result = mysqli_query($kon, $query);
    // jika data gagal diambil maka akan tampil error berikut
    if(!$result){
      die ("Query Error: ".mysqli_errno($kon).
         " - ".mysqli_error($kon));
    }
    // mengambil data dari database
    $data = mysqli_fetch_assoc($result);
      // apabila data tidak ada pada database maka akan dijalankan perintah ini
       if (!count($data)) {
          echo "<script>alert('Data tidak ditemukan pada database');window.location='/admin/index.php';</script>";
       }
  } else {
    // apabila tidak ada data GET id pada akan di redirect ke index.php
    echo "<script>alert('Masukkan data id.');window.location='/admin/index.php';</script>";
  }         
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
        <form action="inc/theme_edit.php" method="post">
        <b>Edit theme versi : <?php echo $data['versi']; ?></b><br/>
        <!-- menampung nilai id produk yang akan di edit -->
        <input name="id" value="<?php echo $data['id']; ?>"  hidden />
        <div class="form-group">
            <label>Versi:</label>
            <input type="text" name="versi" class="form-control" value="<?php echo $data['versi']; ?>" />
        </div>
	<div class="form-group">
            <label>Keterangan:</label>
            <input type="text" name="keterangan" class="form-control" value="<?php echo $data['keterangan']; ?>" />
        </div>
	<div class="form-group">
            <label>Link:</label>
            <input type="text" name="link" class="form-control" value="<?php echo $data['link']; ?>" />
        </div>
	<div class="form-group">
            <label>Tanggal:</label>
            <input type="date" name="tanggal" class="form-control" value="<?php echo $data['tanggal']; ?>" />
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Save</button>

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