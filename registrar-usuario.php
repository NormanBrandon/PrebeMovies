<?php

	 $host_db = "localhost";
	 $user_db = "root";
	 $pass_db = "Conan@1234";
	 $db_name = "registration";
	 $tbl_name = "users";
	 

	 $conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);
 $form_pass = $_POST['password'];
 $correo = $_POST['mail'];
 $hash = md5($form_pass); 


 if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}

 $buscarUsuario = "SELECT	 * FROM $tbl_name
 WHERE username = '$_POST[username]' ";

 $result = $conexion->query($buscarUsuario);

 $count = mysqli_num_rows($result);

 if ($count == 1) {
 echo "<br />". "El Nombre de Usuario ya a sido tomado." . "<br />";

 echo "<a href='index.html'>Por favor escoga otro Nombre</a>";
 }
 else{
 
 $query = "INSERT INTO users (username, password ,email)
           VALUES ('$_POST[username]', '$hash','$correo')";

 if ($conexion->query($query) === TRUE) {
 
 echo "<br />" . "<h2>" . "Usuario Creado Exitosamente!" . "</h2>";
 echo "<h4>" . "Bienvenido: " . $_POST['username'] . "</h4>" . "\n\n";
 echo "<h5>" . "Hacer Login: " . "<a href='login.html'>Login</a>" . "</h5>"; 
 }

 else {
 echo "Error al crear el usuario." . $query . "<br>" . $conexion->error; 
   }
 }
 mysqli_close($conexion);
?>