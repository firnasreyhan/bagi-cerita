<?php
// include database connection file
include_once("../proses/connection/koneksi.php");

// Get id from URL to delete that user
$id_subcerita = $_GET['ID_SUBCERITA'];

// Delete user row from table based on given id
$result = mysqli_query($mysqli, "DELETE FROM subcerita WHERE ID_SUBCERITA=$id_subcerita");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:".$_SERVER['HTTP_REFERER']);
?>