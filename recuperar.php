<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <title>Recuperar contraseña | PlayPulse</title>
</head>
<body>
    <video autoplay muted loop id="videoFondo">
        <source src="images/IntroInicio.mp4" type="video/mp4">
        Tu navegador no soporta videos HTML5.
    </video>
    <div class="wrapper">
        <nav class="nav">
            <div class="nav-logo">
                <a href="login.php">
                    <img src="images/LOGO.png" alt="Logo de PlayPulse" style="height: 100px;"/>
                </a>
            </div>
            
        </nav>
    
<!----------------------------- caja del form ----------------------------------->    
<div class="form-box">
    <div class="password-container" id="password">
    <div class="top">
        <header>¿Olvidaste tu contraseña?</header>
        <h4>Si has olvidado tu contraseña, ingresa tu correo electronico para restablecer tu contraseña.</h4>
    </div>
    <div class="input-box">
        <input type="text" class="input-field" placeholder="Correo electrónico">
        <i class="bx bx-envelope"></i>
    </div>
    <div class="input-box">
        <input type="submit" class="submit1" value="Enviar">
    </div>
    <div class="bottom-text">
        <label><a href="index.php" style="color: white;">Volver al inicio</a></label>
    </div>
</div>
<!----------------------------- animaciones de js ----------------------------------->      
<script>
function myMenuFunction() {
    var i = document.getElementById("navMenu");
    if(i.className === "nav-menu") {
        i.className += " responsive";
    } else {
        i.className = "nav-menu";
    }
}

</script>

</body>
</html>