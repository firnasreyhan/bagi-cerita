<?php
include('session.php');
// Create database connection using config file
include_once("../proses/connection/koneksi.php");

// Getting id from url
$id_subcerita = $_GET['ID_SUBCERITA'];
$result_subcerita = mysqli_query($mysqli, "SELECT * FROM subcerita WHERE ID_SUBCERITA=$id_subcerita");
while($subcerita = mysqli_fetch_assoc($result_subcerita))
{
    $id_cerita = $subcerita['ID_CERITA'];
	$judul_subcerita = $subcerita['JUDUL_SUBCERITA'];
	$isi_cerita = $subcerita['ISI_CERITA'];
}
$result_cerita = mysqli_query($mysqli, "SELECT * FROM cerita WHERE ID_CERITA=$id_cerita");
while($cerita = mysqli_fetch_assoc($result_cerita))
{
    $judul = $cerita['JUDUL'];
}
// Check If form submitted, insert form data into users table.
    if(isset($_POST['publish'])) {
        $judul_chapter = $_POST['judul_chapter'];
        $isi_chapter = $_POST['isi_chapter'];

        // Insert user data into table
        $result = mysqli_query($mysqli, "UPDATE subcerita SET JUDUL_SUBCERITA = '$judul_chapter', ISI_CERITA = '$isi_chapter', STATUS_SUBCERITA = '1' WHERE ID_SUBCERITA = '$id_subcerita'");

        // Show message when user added
        header("Location:tables_subcerita.php?ID_CERITA=".$id_cerita);
    }
	
	if(isset($_POST['arsip'])) {
        $judul_chapter = $_POST['judul_chapter'];
        $isi_chapter = $_POST['isi_chapter'];

        // Insert user data into table
        $result = mysqli_query($mysqli, "UPDATE subcerita SET JUDUL_SUBCERITA = '$judul_chapter', ISI_CERITA = '$isi_chapter', STATUS_SUBCERITA = '0' WHERE ID_SUBCERITA = '$id_subcerita'");

        // Show message when user added
        header("Location:tables_subcerita.php?ID_CERITA=".$id_cerita);
    }
	
	if(isset($_POST['kembali'])) {
        header("Location:tables_subcerita.php?ID_CERITA=".$id_cerita);
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
                            <a href="tables.php"><i class="fa fa-dashboard fa-fw"></i> Daftar Cerita</a>
                        </li>
                        <li>
                            <a href="forms.php"><i class="fa fa-edit fa-fw"></i> Tulis Judul Cerita</a>
                        </li>
						<li <?php if($level != 1){echo " style='display:none'";}?>>
                            <a href="tables_approval_admin.php"><i class="fa fa-table fa-fw"></i> Approval Cerita</a>
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
                    <h1 class="page-header"><?php echo $judul;?></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tulis Chapter
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form action="forms_subcerita_edit.php?ID_SUBCERITA=<?php echo $id_subcerita;?>" method="post" name="form1">
                                        <div class="form-group">
                                            <label>Judul Chapter</label>
                                            <input name="judul_chapter" class="form-control" placeholder="Masukkan judul chapter" value=<?php echo $judul_subcerita;?>>
                                        </div>
                                        <div class="form-group">
                                            <label>Isi Chapter</label>
                                            <textarea name="isi_chapter" class="form-control" rows="9" placeholder="Masukkan isi chapter"><?php echo $isi_cerita;?></textarea>
                                        </div>
                                        <input type="submit" name="publish" class="btn btn-success" value="Publikasikan"/>
                                        <input type="submit" name="arsip" class="btn btn-warning" value="Arsipkan"/>
                                        <input type="submit" name="kembali" class="btn btn-danger" value="Kembali"/>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
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