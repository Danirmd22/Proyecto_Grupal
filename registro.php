<?php require("parts/head.php"); ?>
<body class="index">
    <section>
        <form>
            <h1>Crear Cuenta</h1>
            <div class="inputbox">
            <ion-icon name="person-outline"></ion-icon>
                <input type="email" id="email" name="email" required>
                <label for="email">Nombre y Apellidos</label>
            </div>
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
            <div class="inputbox">
                <ion-icon name="lock-closed-outline"></ion-icon>
                <input type="password" id="password" name="password" required>
                <label for="password">Confirmar Contraseña</label>
            </div>
           
            <div class="forget">
                <label ><input type="checkbox">Recuérdame</label>
              
            </div>
            <button type="button" onclick="validarEmail()">Crear Cuenta</button>
            <div class="register">
                <p>¿Ya tienes una cuenta?<br><a href="index.php">Inicia Sesión</a></p>
            </div>
        </form>
        
    </section>
    
</body>
</html>