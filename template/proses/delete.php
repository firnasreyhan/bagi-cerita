<?php
// include database connection file
include_once("connection/koneksi.php");

// Get id from URL to delete that user
$id_cerita = $_GET['ID_CERITA'];

// Delete user row from table based on given id
$result = mysqli_query($mysqli, "DELETE FROM cerita WHERE ID_CERITA=$id_cerita");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:index.php");
?>