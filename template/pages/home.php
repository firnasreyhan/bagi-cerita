<?php
	// Create database connection using config file
	include_once("../proses/connection/koneksi.php");
?>
<html>

<head>
    <title>Week 4 - Bootstrap</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-light " style="background-color: #e3f2fd;">
        <a class="navbar-brand" href="home.html">Bagi Cerita</a>
    </nav>
    <nav class="navbar navbar-expand-sm navbar-dark bg-secondary">
        <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
            aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Genre List</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
            </ul>
            <div>
                <a href="login.html">SIGN UP/LOGIN</a>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col-9 bg-light">
				<?php 
					$halaman = 10;
					$page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
					$mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
					$result = mysqli_query($mysqli, "SELECT * FROM cerita");
					$total = mysqli_num_rows($result);
					$pages = ceil($total/$halaman);            
					$query = mysqli_query($mysqli, "select * from cerita LIMIT $mulai, $halaman")or die(mysql_error);
					//$no =$mulai+1;
									 
					while ($data = mysqli_fetch_assoc($query)) {
				?>
				<div class="row m-2 border p-2">
                    <div class="col-5">
                        <img src="../img/<?php echo $data['GAMBAR'];?>" alt="" class="img-responsive" width="300px">
                    </div>
                    <div class="col-7">
						<h2><?php echo $data['JUDUL'];?></h2>
                        <p><?php echo $data['SINOPSIS'];?></p>
							<a type='button' class='btn btn-warning btn-xs' href="pageceritadetail.php?ID_CERITA=<?php echo $data['ID_CERITA'];?>">Read More</a>
                    </div>
                </div>
				<?php               
					} 
				?>
				<div class="row" style="padding:10px">
					<div class="col-12 bg-light" style="text-align:center">
						<?php for ($i=1; $i<=$pages ; $i++){ ?>
							<a type='button' class='btn btn-primary btn-xs' href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a>
						<?php } ?>
					</div>
				</div>
            </div>
            <div class="col-3 bg-dark">
                Sidebar
            </div>
        </div>
    </div>
	<div class="row">
		<div class="col-12">
			<footer class="bg-secondary text-center">
				Copyright RezaAriestyaPutra @POLINEMA
			</footer>
		</div>
	</div>
</body>
</html>