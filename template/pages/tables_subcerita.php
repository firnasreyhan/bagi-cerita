<?php
include('session.php');
// Create database connection using config file
include_once("../proses/connection/koneksi.php");

// Getting id from url
$id_cerita = $_GET['ID_CERITA'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM subcerita WHERE ID_CERITA=$id_cerita order by TGL_POST DESC");
$result_cerita = mysqli_query($mysqli, "SELECT * FROM cerita WHERE ID_CERITA=$id_cerita");
while($cerita = mysqli_fetch_assoc($result_cerita))
{
    $judul = $cerita['JUDUL'];
    $sinopsis = $cerita['SINOPSIS'];
	$cover = $cerita['GAMBAR'];
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

    <!-- DataTables CSS -->
    <link href="../vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

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
                <div class="col-lg-9">
                    <h1 class="page-header"><?php echo $judul;?></h1>
                </div>
                <div class="col-lg-3">
                    <?php
						echo "<a type='button' class='btn btn-primary page-header' href=forms_subcerita.php?ID_CERITA=".$id_cerita.">Tambah Chapter</a> ";
						echo "<a type='button' class='btn btn-warning page-header' href=forms_edit.php?ID_CERITA=".$id_cerita.">Edit Cerita</a>";
					?>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
                        <div class="panel-heading">
                            Sinopsis
                        </div>
                        <div class="panel-body">
                            <p><?php echo $sinopsis;?></p>
                        </div>
                    </div>
				</div>
			</div>
            <div class="row">
				<div class="col-lg-4">
					<div class="panel panel-default">
                        <div class="panel-heading">
                            Cover
                        </div>
                        <div class="panel-body">
                            <img src="../img/<?php echo $cover;?>" class="img-responsive" width="300px" alt="Responsive image">
                        </div>
                    </div>
				</div>
                <div class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            List Chapter
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Judul Chapter</th>
                                        <th>Tanggal Post</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
									<?php  
										while($cerita = mysqli_fetch_array($result)) {         
											echo "<tr>";
											echo "<td>".$cerita['JUDUL_SUBCERITA']."</td>";
											echo "<td>".$cerita['TGL_POST']."</td>";
											if($cerita['STATUS_SUBCERITA'] == 0){
												echo "<td><label class='btn-warning btn-xs'>Diarsipkan</label></td>";
											} else {
												echo "<td><label class='btn-success btn-xs'>Dipubikasikan</label></td>";
											}
											echo "<td><a type='button' class='btn btn-primary btn-xs' href=tables_subcerita?ID_CERITA=".$cerita['ID_SUBCERITA'].">Detail</a> | <a type='button' class='btn btn-warning btn-xs' href=forms_subcerita_edit.php?ID_SUBCERITA=".$cerita['ID_SUBCERITA'].">Edit</a> | <a type='button' class='btn btn-danger btn-xs' href=delete_subcerita.php?ID_SUBCERITA=".$cerita['ID_SUBCERITA'].">Hapus</a>";
											echo "</tr>";			
										}
									?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
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

    <!-- DataTables JavaScript -->
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true,
			"order": [[ 1, "asc" ]]
        });
    });
    </script>

</body>

</html>
