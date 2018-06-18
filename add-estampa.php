<html>
<head>
	<title>Add Data</title>
</head>

<body>
    
	<a href="index.php">Home</a>
	<br/><br/>

	<form action="query-add-estampa.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>No.</td>
				<td><input type="number" step="1" name="no"></td>
			</tr>
			<tr> 
				<td>Precio</td>
				<td><input type="number" step=".1"  name="precio"></td>
			</tr>
			<tr> 
				<td>Inventario</td>
				<td><input type="number" step="1" name="inventario"></td>
			</tr>
			<tr>
               <td>Clase</td>
               <td>
                <?php
                    include_once("config.php");
                    $sql = "SELECT * FROM clase";
                    $query = mysqli_query($mysqli, $sql);

                    echo '<select name="id_clase" style="width: 200px">';
                    while ($row = mysqli_fetch_array($query)) {
                        echo '<option value='.$row['id_clase'].'>'.$row['color'].'</option>';
                    }
                    echo '<option value="99999" selected>variable</option>';
                    echo '</select>';
                ?>
                
                </td>
    
			</tr>
			<tr>
               <td>Album</td>
               <td>
                <?php
                    $sql = "SELECT * FROM album";
                    $query = mysqli_query($mysqli, $sql);

                    echo '<select name="id_album" style="width: 200px">';
                    while ($row = mysqli_fetch_array($query)) {
                        echo '<option value='.$row['id_album'].'>'.$row['nombre'].'</option>';
                    }
                    echo '</select>';
                ?>
                
                </td>
    
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
</body>
</html>

