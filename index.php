<?php require("parts/head.php"); ?>
<body class="index">
    <section>
        <form>
            <h1>Iniciar Sesión</h1>
            <div class="inputbox">
                <ion-icon name="mail-outline"></ion-icon>
                <input type="email" id="email" name="email" required>
                <label for="email">Email</label>
            </div>
            <div class="inputbox">
                <ion-icon name="lock-closed-outline"></ion-icon>
                <input type="password" id="password" name="password" required>
                <label for="password">Contraseña</label>
            </div>
            <div class="forget">
                <label ><input type="checkbox">Recuérdame</label>
              <a href="#">Contraseña Olvidada</a>
            </div>
            <button type="button" onclick="validarEmail()">Iniciar Sesion</button>
            <div class="register">
                <p>¿No tienes una cuenta?<br><a href="#">Registrarse</a></p>
            </div>
        </form>
        
    </section>
    <script src="static/js/app.js"></script>
</body>
</html>