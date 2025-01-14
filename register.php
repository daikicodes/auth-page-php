<?php 
    include('conn_db.php');
    
    // Es necesaria una validación de datos más robusta.
    if (isset($_POST['register'])) {
        $name = $_POST['name'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $email = $_POST['email'];
        $consulta = "INSERT INTO users(name, password, email) VALUES ('$name','$password','$email')";
        $resultado = mysqli_query($conn, $consulta);
        if ($resultado) {
            echo '<h3 class="success">Usuario registrado correctamente.</h3>';
        } else {
            echo '<h3 class="failure">Ha ocurrido un error.</h3>';
        }
    }
?>  