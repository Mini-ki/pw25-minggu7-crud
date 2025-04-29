<?php
include "../koneksi.php";

$namaLengkap	= "";
$namaPanggilan  = "";
$umur     		= "";
$alamat   		= "";
$noHp			= "";
$sukses    		= "";
$error      	= "";

if (isset($_GET['op'])) {
    $op = $_GET['op'];
} else {
    $op = "";
}
if($op == 'delete'){
    $id_petugas = $_GET['id_petugas'];
    $sql1       = "delete from crud_057 where id_petugas = '$id_petugas'";
    $q1         = mysqli_query($koneksi,$sql1);
    if($q1){
        $sukses = "Berhasil hapus data";
    }else{
        $error  = "Gagal melakukan delete data";
    }
}
if ($op == 'edit') {
    $id_petugas     = $_GET['id_petugas'];
    $sql1      		= "select * from crud_057 where id_petugas = '$id_petugas'";
    $q1         	= mysqli_query($koneksi, $sql1);
    $r1         	= mysqli_fetch_array($q1);
    $namaLengkap	= $r1['namaLengkap'];
    $namaPanggilan  = $r1['namaPanggilan'];
	$umur			= $r1['umur'];
    $alamat     	= $r1['alamat'];
    $noHp   		= $r1['noHp'];

    if ($id_petugas == '') {
        $error = "Data tidak ditemukan";
    }
}
if (isset($_POST['submit'])) { 
	$namaLengkap	= $_POST['namaLengkap'];
    $namaPanggilan  = $_POST['namaPanggilan'];
	$umur			= $_POST['umur'];
    $alamat     	= $_POST['alamat'];
    $noHp   		= $_POST['noHp'];

    if ($namaLengkap && $namaPanggilan && $umur && $alamat && $noHp) {
        if ($op == 'edit') { 
            $sql1       = "update crud_057 set namaLengkap = '$namaLengkap',namaPanggilan ='$namaPanggilan',umur = '$umur', alamat = '$alamat', noHp='$noHp' where id_petugas = '$id_petugas'";
            $q1         = mysqli_query($koneksi, $sql1);
            if ($q1) {
                $sukses = "Data berhasil diupdate";
            } else {
                $error  = "Data gagal diupdate";
            }
        } else { 
            $sql1   = "insert into crud_057(namaLengkap,namaPanggilan,umur, alamat,noHp) values ('$namaLengkap','$namaPanggilan','$umur','$alamat','$noHp')";
            $q1     = mysqli_query($koneksi, $sql1);
            if ($q1) {
                $sukses     = "Berhasil memasukkan data baru";
            } else {
                $error      = "Gagal memasukkan data";
            }
        }
    } else {
        $error = "Silakan masukkan semua data";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="../../asset/css/dasboardAdmin.css">

	<title>Petugas Sampah</title>
</head>
<body>
	<section id="sidebar">
		<a href="#" class="logoSimpelah">
			<span class="text">SIMPELAH!</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="dashboardAdmin.php">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="petugasSampah.php">
					<i class='bx bxs-group' ></i>
					<span class="text">Petugas Sampah</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Analisis</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="#">
					<i class='bx bxs-cog' ></i>
					<span class="text">Setting</span>
				</a>
			</li>
			<li>
				<a href="../../index.php" class="logout">
                    <i class='bx bx-log-out'></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<section id="content">
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Categories</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a>
			<a href="#" class="profile">
				<img src="../../asset/image/AdminSimpelah.jpg">
			</a>
		</nav>
		<main>
		<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Home</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="table-data">
				<div class="createData">
					<div class="head">
						<h3>CREATE/EDIT DATA</h3>
					</div>
					<div class="body">
						<?php
						if ($error) {
						?>
							<div class="alert alert-danger" role="alert">
								<?php echo $error ?>
							</div>
						<?php
							header("refresh:5;url=petugasSampah.php");//5 : detik
						}
						?>
						<?php
						if ($sukses) {
						?>
							<div class="alert alert-success" role="alert">
								<?php echo $sukses ?>
							</div>
						<?php
							header("refresh:5;url=petugasSampah.php");
						}
						?>
					<form action="" method="POST">
						<label for="">Nama Lengkap</label>
						<input type="text" name="namaLengkap" id="namaLengkap" value="<?php echo $namaLengkap ?>">

						<label for="">Nama Panggilan</label>
						<input type="text" name="namaPanggilan" id="namaPanggilan" value="<?php echo $namaPanggilan ?>">

						<label for="">Umur</label>
						<input type="text" name="umur" id="umur" value="<?php echo $umur ?>">

						<label for="">Alamat</label>
						<input type="text" name="alamat" id="alamat" value="<?php $alamat ?>">
						
						<label for="">No HP</label>
						<input type="text" name="noHp" id="noHp" value="<?php $noHp ?>">
						<input type="submit" value="SUBMIT" name="submit">
						</form>
					</div>
				</div>
				<div class="showTable">
					<div class="head">
							<h3>DATA PETUGAS SAMPAH</h3>
						</div>
					<div class="body">
					<table id="table-information">
								<thead>
									<tr>
										<th scope="col">NO</th>
										<th scope="col">Nama Lengkap</th>
										<th scope="col">Nama Panggilan</th>
										<th scope="col">Umur</th>
										<th scope="col">Alamat</th>
										<th scope="col">No HP</th>
										<th scope="col">Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$sql2   = "select * from crud_057 order by id_petugas";
									$q2     = mysqli_query($koneksi, $sql2);
									$urut   = 1;
									while ($r2 = mysqli_fetch_array($q2)) {
										$id_petugas		= $r2['id_petugas'];
										$namaLengkap	= $r2['namaLengkap'];
										$namaPanggilan	= $r2['namaPanggilan'];
										$umur	    	= $r2['umur'];
										$alamat    		= $r2['alamat'];
										$noHp			= $r2['noHp'];
									?>
										<tr>
											<th scope="row"><?php echo $urut++ ?></th>
											<td scope="row"><?php echo $namaLengkap ?></td>
											<td scope="row"><?php echo $namaPanggilan ?></td>
											<td scope="row"><?php echo $umur ?></td>
											<td scope="row"><?php echo $alamat ?></td>
											<td scope="row"><?php echo $noHp ?></td>
											<td scope="row">
												<a href="petugasSampah.php?op=edit&id_petugas=<?php echo $id_petugas ?>"><button type="button" id="button-edit">Edit</button></a>
												<a href="petugasSampah.php?op=delete&id_petugas=<?php echo $id_petugas	?>" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini??')"><button type="button" id="button-delete">Delete</button></a>            
											</td>
										</tr>
									<?php
									}
									?>
								</tbody>
						
							</table>
					</div>
				</div>
			</div>
        </main>
    </section>
	
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script scr="../../asset/js/petugasSampah.js"></script>
    <script src="../../asset/js/main.js"></script>
</body>