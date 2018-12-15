<?php
// Create database connection using config file
include_once("connection/koneksi.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM cerita");
?>
<html>
	<head>    
		<title>Homepage</title>
	</head>

	<body>
		<a href="add.php">Add New User</a><br><br>
		<table width="80%" border="1">
			<tbody>
				<tr>
					<th>Judul</th> 
					<th>Tanggal Post</th> 
					<th>Status</th> 
					<th>Update</th>
				</tr>
				<?php  
					while($cerita = mysqli_fetch_array($result)) {         
						echo "<tr>";
						echo "<td>".$cerita['JUDUL']."</td>";
						echo "<td>".$cerita['TGL_POST']."</td>";
						echo "<td>".$cerita['STATUS']."</td>"; 
						//echo "<td>".$cerita['ID_CERITA']."</td>";   
						//echo "<td><a href='edit.php?id_cerita='".$cerita['ID_CERITA'].">Edit</a> | <a href='delete.php?id_cerita='".$cerita['ID_CERITA'].">Delete</a></td>";
						echo "<td><a href=edit.php?ID_CERITA=".$cerita['ID_CERITA'].">Edit</a> | <a href=delete.php?ID_CERITA='".$cerita['ID_CERITA']."'>Delete</a></td>";
						echo "</tr>";			
					}
				?>		
			</tbody>
		</table>
	</body>
</html>