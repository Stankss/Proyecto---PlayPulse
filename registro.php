<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <title>Crear una cuenta | PlayPulse</title>
</head>
<body>
    <video autoplay muted loop id="videoFondo">
        <source src="images/IntroInicio.mp4" type="video/mp4">
        Tu navegador no soporta videos HTML5.
    </video>
    <div class="wrapper">
        <nav class="nav">
            <div class="nav-logo">
                <a href="login.html">
                    <img src="images/LOGO.png" alt="Logo de PlayPulse" style="height: 100px;"/>
                </a>
            </div>
            
        </nav>

<!----------------------------- caja del form ----------------------------------->    
    <div class="form-box">
        
<!------------------- form de registro -------------------------->
<div class="register-container" id="login">
    <div class="top">
        <span>¿Ya tienes una cuenta? <a href="login.html" onclick="login()">Inicie sesión</a></span>
        <header>¡Se parte de nosotros!</header>
        <div class="two-forms">
            <div class="input-box">
                <input type="text" class="input-field" placeholder="Nombre">
                <i class="bx bx-user"></i>
            </div>
            <div class="input-box">
                <input type="text" class="input-field" placeholder="Apellido">
                <i class="bx bx-user"></i>
            </div>
        </div>
        <div class="input-box">
            <input type="text" class="input-field" placeholder="Nombre de usuario">
            <i class="bx bx-user"></i>
        </div>
        <div class="input-box">
            <input type="text" class="input-field" placeholder="Correo electrónico">
            <i class="bx bx-envelope"></i>
        </div>
        <div class="input-box">
            <input type="password" class="input-field" placeholder="Contraseña">
            <i class="bx bx-lock-alt"></i>
        </div>
        <div class="input-box">
            <input type="submit" class="submit" value="Registrarse" onclick="redirectToAnotherPage()">
        </div>
        <div class="two-col">
            <div class="one">
                <label><a href="TyC.html" style="color: white;">Términos y condiciones</a></label>
            </div>
            <div class="two">
                <input type="checkbox" id="login-check">
                <label for="login-check">Acepto los términos y condiciones</label>
            </div>
    </div>
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

<script>
    var a = document.getElementById("loginBtn");
    var b = document.getElementById("registerBtn");
    var x = document.getElementById("login");
    var y = document.getElementById("register");
</script>

<script>
    function redirectToAnotherPage() {
    window.location.href = "inicio.php";
    }
    
    function login() {
        x.style.left = "4px";
        y.style.right = "-520px";
        a.className += " white-btn";
        b.className = "btn";
        x.style.opacity = 1;
        y.style.opacity = 0;
    }
    function register() {
        x.style.left = "-510px";
        y.style.right = "5px";
        a.className = "btn";
        b.className += " white-btn";
        x.style.opacity = 0;
        y.style.opacity = 1;
    }
</script>
</body>
</html>