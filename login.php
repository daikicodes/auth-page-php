<?php 
    include('conn_db.php');

    // Es necesaria una validación de datos más robusta.
    if(isset($_POST['login'])) {
        $name = $_POST['name'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM users WHERE name='$name'";
        $result = mysqli_query($conn, $sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $password_hash = $row['password'];
            if(password_verify($password, $password_hash)) {
                echo '<h3 class="success">Los datos ingresados son correctos.</h3>';
            } else {
                echo '<h3 class="failure">La contraseña ingresada es incorrecta.</h3>';
            }
        } else {
            echo '<h3 class="failure">Los datos ingresados son incorrectos.</h3>';
        }
    }


?>