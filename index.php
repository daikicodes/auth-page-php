<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styles.css">
    <script src="./script.js" defer></script>
</head>
<body>
    <div class="form-container">
        <form method="post">
            <h2>Registro</h2>
            <div class="input-container">
                <input type="text" name="name" id="name" placeholder="Nombre de Usuario" required>
            </div>
            <div class="input-container">
                <input type="password" name="password" id="password" placeholder="Contraseña" required>
            </div>
            <div class="input-container">
                <input type="email" name="email" id="email" placeholder="Correo electrónico" required>
            </div>
            <input type="submit" name="register" value="Crear cuenta">
        </form>
    </div>
<!--
    <div class="form-container">
        <form action="">
            <h2>Iniciar sesión</h2>
            <div class="input-container">
                <input type="text" name="name" id="name" placeholder="Nombre de Usuario" required>
            </div>
            <div class="input-container">
                <input type="password" name="password" id="password" placeholder="Contraseña" required>
            </div>
            <input type="submit" name="login" value="Iniciar sesión">
        </form>
    </div>
-->
    <?php 
        include('register.php');
    ?>
</body>
</html>