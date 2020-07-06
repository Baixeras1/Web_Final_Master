<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Registro RSEntrenamientos</title>
</head>
<body>
<header>
    <div class="logo" alt="Logo_RsEntrenamientos">
        <img src="../img/LogoRS.png" alt="">
    </div>
        <div class="navegador">
            <nav>
                <a href="../index.html">Inicio</a>
                <a href="/blog/ejerciciofisico.html">Blog</a>
                <a href="#">Galería</a>
                <a href="#">Contacto</a>
                <a href="login.php">Área Cliente</a>
            </nav>
        </div>
</header>
<form class="login" action="autentificacion.php" method="POST">
    <h3>INICIO SESIÓN</h3>
    <h4>Bienvenido a RSEntrenamientos</h4>
    <input type="text" id="usuario" name="usuario" placeholder="Usuario">
    <input type="password" id="pass" name="password" placeholder="Contraseña">
    <input type="checkbox" name="politica" id="politica">
    <label for="politica">Recordar Contraseña</label>
    <button class="btn-inicio" type="submit">Inicio</button>
    <p>¿Aun no tienes cuenta? <a href="register.php">Regístrate ahora</a></p>
</form>    
    
</body>
</html>