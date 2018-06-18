<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {	
	$no = mysqli_real_escape_string($mysqli, $_POST['no']);
	$precio = mysqli_real_escape_string($mysqli, $_POST['precio']);
	$inventario = mysqli_real_escape_string($mysqli, $_POST['inventario']);
	//$sold = mysqli_real_escape_string($mysqli, $_POST['sold']);
    $id_clase = mysqli_real_escape_string($mysqli, $_POST['id_clase']);
    id_album = mysqli_real_escape_string($mysqli, $_POST['id_album']);
	// checking empty fields
    
   
    
	if(empty($no) || empty($precio) || empty($inventario)){
				
		echo "Debe llenar todos los campos";

		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Volver</a>";
	} else {
        $result = mysqli_query($mysqli, "SELECT no, id_album FROM estampa WHERE no='$no' and id_album='$id_album'");
        $res = mysqli_fetch_array($result);
        if($no==$res['no'] and $id_album==$res['id_album']){
            echo "<font color='red'>Ya exitse una tarjeta con ese número en ese album</font><br/>";
            echo "<br/><a href='javascript:self.history.back();'>Volver</a>";
        }
        else{
           // if all the fields are filled (not empty) 
            
            //insert data to database	
            $result = mysqli_query($mysqli, "INSERT INTO clase(id_estampa, id_clase, id_album, no, precio, inventario, sold) VALUES(0,'$id_clase','$id_album','$no','$precio','$inventario', 0)");
            
            //display success message
            echo "<font color='green'>Clase agregada correctamente.";
            echo "<br/><a href='index.php'>Regresar a Inicio</a>"; 
        }
		
	}
}
?>
</body>
</html>
