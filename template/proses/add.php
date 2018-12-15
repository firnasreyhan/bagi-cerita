<html>
<head>
    <title>Add Cerita</title>
</head>

<body>
    <a href="index.php">Add New User</a><br><br>
    <form action="add.php" method="post" name="form1">
        Judul
        <input type="text" name="judul">
		<br>
        Sinopsis
       	<textarea type="text" name="sinopsis"></textarea>
		<input type="submit" name="Submit" value="Add">
    </form>
    <?php
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $judul = $_POST['judul'];
        $sinopsis = $_POST['sinopsis'];

        // include database connection file
        include_once("connection/koneksi.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO cerita(EMAIL,JUDUL,SINOPSIS) VALUES('rezaariestyaputra@yahoo.co.id','$judul','$sinopsis')");

        // Show message when user added
        echo "cerita berhasil ditambah";
    }
    ?>
</body>
</html>