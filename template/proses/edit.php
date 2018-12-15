<?php
// include database connection file
include_once("connection/koneksi.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
    $id_cerita = $_POST['id_cerita'];
    $judul = $_POST['judul'];
    $sinopsis = $_POST['sinopsis'];
	
    // update user data
    $result = mysqli_query($mysqli, "UPDATE cerita SET JUDUL='$judul', SINOPSIS='$sinopsis' WHERE ID_CERITA=$id_cerita");

    // Redirect to homepage to display updated user in list
    header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id_cerita = $_GET['ID_CERITA'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM cerita WHERE ID_CERITA=$id_cerita");

while($cerita = mysqli_fetch_assoc($result))
{
    $judul = $cerita['JUDUL'];
    $sinopsis = $cerita['SINOPSIS'];
}
?>
<html>
<head>  
    <title>Edit User Data</title>
</head>

<body>
    Home
    <form name="update_user" method="post" action="edit.php">
        JUDUL
        <input type="text" name="judul" value="<?php echo $judul;?>">
		<br>
        SINOPSIS
        <textarea type="text" name="sinopsis"><?php echo $sinopsis;?></textarea>
        <input type="hidden" name="id_cerita" value=<?php echo $_GET['ID_CERITA'];?>>
		<br>
        <input type="submit" name="update" value="Update">
    </form>
</body>
</html>