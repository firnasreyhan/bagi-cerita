<?php
// include database connection file
include_once("../proses/connection/koneksi.php");

// Get id from URL to delete that user
$id_cerita = $_GET['ID_CERITA'];

// Delete user row from table based on given id
$result_cerita_genre = mysqli_query($mysqli, "UPDATE cerita SET STATUS = '2' WHERE ID_CERITA=$id_cerita");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:tables_approval_admin.php");
?>