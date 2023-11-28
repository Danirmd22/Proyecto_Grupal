<?php require("parts/head.php"); ?>
<?php require("parts/menu.php"); ?>

<div class="crea-empresas-contenedor">
    
    <h2>Creación Empresas</h2>
    <div class="cuadro">
        <form id="formu" name="form">
            <div class="inputs">
                <div class="column">
                    <label>Nombre: </label>
                    <input type="text" name="email" id="email"/>
                    <label>Telefono móvil: </label>
                    <input type="text" name="phone" id="phone"/>
                    <label>Observaciones: </label>
                    <textarea rows="4" cols="50" name="mensaje" id="observaciones"></textarea>
                </div>
                <div class="column">
                    <label>Email: </label>
                    <input type="text" name="tutor" id="tutor"/>
                    <label>Responsable de la empresa: </label>
                    <input type="text" name="hdual" id="hdual"/>
                </div>
            </div>
            <div class="boton">
                <button>Crear</button>
            </div>
            
        </form>
    </div>
</div>

<?php require("parts/footer.php"); ?>