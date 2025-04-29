<?php
session_start();

if(!isset($_SESSION['user'])) {
	header('location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="../../asset/css/dasboardAdmin.css">

	<title>AdminHub</title>
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
			<ul class="box-info">
				<li>
					<i class='bx bxs-trash-alt'></i>
					<span class="text">
						<h3>26,2 JUTA TON</h3>
						<p>Organik</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-trash-alt'></i>
					<span class="text">
						<h3>33,79 JUTA TON</h3>
						<p>Anorganik</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-trash-alt'></i>
					<span class="text">
						<h3>10.500 TON</h3>
						<p>Sampah B3</p>
					</span>
				</li>
			</ul>
			<div class="table-data">
				<div class="grafik">
					<div class="head">
						<h3>GRAFIK SAMPAH</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
                    <canvas id="myChart" width="1000" height="700"></canvas>
				</div>
			</div>
		</main>
	</section>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
	<script src="../../asset/js/dashboardAdmin.js"></script>
	<script src="../../asset/js/main.js"></script>
</body>
</html>