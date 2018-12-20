<?php
include('session.php');
// Create database connection using config file
include_once("../proses/connection/koneksi.php");

// Getting id from url
$id_cerita = $_GET['ID_CERITA'];

// Fetch all users data from database
$genre = mysqli_query($mysqli, "SELECT * FROM genre");
$result_cerita = mysqli_query($mysqli, "SELECT * FROM cerita WHERE ID_CERITA=$id_cerita");
$cerita_genre = mysqli_query($mysqli, "SELECT * FROM cerita_genre WHERE ID_CERITA=$id_cerita");
$data = array();
while($cerita = mysqli_fetch_assoc($result_cerita))
{
    $judul = $cerita['JUDUL'];
    $sinopsis = $cerita['SINOPSIS'];
}
while($cg = mysqli_fetch_assoc($cerita_genre))
{
    array_push($data, $cg['ID_GENRE']);
}
// Check If form submitted, insert form data into users table.
    if(isset($_POST['submit'])) {
		$result_hapus = mysqli_query($mysqli, "DELETE FROM cerita_genre WHERE ID_CERITA='$id_cerita'");
		$target = "../img/".basename($_FILES['cover']['name']);
        $judul = $_POST['judul'];
        $sinopsis = $_POST['sinopsis'];
		$cover = $_FILES['cover']['name'];

        // Update user data into table
		if($cover != null){
			$result = mysqli_query($mysqli, "UPDATE cerita SET EMAIL='$email', JUDUL='$judul', SINOPSIS='$sinopsis', GAMBAR='$cover' WHERE ID_CERITA ='$id_cerita'");
		} else {
			$result = mysqli_query($mysqli, "UPDATE cerita SET EMAIL='$email', JUDUL='$judul', SINOPSIS='$sinopsis' WHERE ID_CERITA ='$id_cerita'");
		}
		foreach($_POST['genre'] as $index => $val){
			$result_baru = mysqli_query($mysqli, "INSERT INTO cerita_genre(ID_CERITA, ID_GENRE) VALUES('$id_cerita','$val')");
		}
		if(move_uploaded_file($_FILES['cover']['tmp_name'], $target)) {
			echo "Berhasil";
		} else {
			echo "Gagal";
		}
        // Show message when user added
        header("Location:".$_SERVER['HTTP_REFERER']);
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="tables.php">SB Admin v2.0</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li>
					<a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="tables.php"><i class="fa fa-table fa-fw"></i> Daftar Cerita</a>
                        </li>
                        <li>
                            <a href="forms.php"><i class="fa fa-edit fa-fw"></i> Tulis Judul Cerita</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit Judul Cerita</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Edit Judul Cerita
                        </div>
                        <div class="panel-body">
						    <form action="forms_edit.php?ID_CERITA=<?php echo $id_cerita;?>" method="post" name="form1" enctype="multipart/form-data">
								<div class="row">
									<div class="col-lg-6">
											<div class="form-group">
												<label>Judul</label>
												<input name="judul" class="form-control" placeholder="Masukkan judul" value="<?php echo $judul;?>">
											</div>
											<div class="form-group">
												<label>Sinopsis</label>
												<textarea name="sinopsis" class="form-control" rows="10" placeholder="Masukkan sinopsis"><?php echo $sinopsis;?></textarea>
											</div>
											<div class="form-group">
												<label>Cover</label>
												<input type="file" name="cover">
											</div>
									<input type="submit" name="submit" class="btn btn-primary" value="Submit"/>
									</div>
									<div class="col-lg-6">
											<div class="form-group">
												<label>Genre</label>
												<br>
												<?php  
													while($result = mysqli_fetch_array($genre)) {
														echo "<div class='col-lg-3'>";
														echo "<label class='checkbox-inline'>";
														echo "<input name='genre[]' type='checkbox' value=".$result['ID_GENRE'];
														for($i = 0; $i < count($data); $i++) {
															if($data[$i] == $result['ID_GENRE']) {
																echo " checked";
															}
														}
														echo " >".$result['GENRE'];
														echo "</label></div>";			
													}
												?>
											</div>
									</div>
									<!-- /.col-lg-6 (nested) -->
								</div>
							</form>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>