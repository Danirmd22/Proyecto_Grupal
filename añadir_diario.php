<?php require("parts/head.php"); ?>
<?php require("parts/menu.php"); ?>

<div class="crea-container">
    
    <h2>Añadir Diario</h2>
    <div class="cuadro-diario">
        <form id="form-diario" name="form-diario">
            <div class="inputs">
                <div class="columna">
                    <label>Fecha: </label>
                    <input type="text" name="email" id="email"/>
                    <label>Tipo de Practica: </label>
                    <input type="text" name="phone" id="phone"/>
                    <label>Observaciones: </label>
                    <textarea rows="4" cols="50" name="mensaje" id="obser"></textarea>
                </div>
                <div class="columna">
                    <label>Horas: </label>
                    <input type="text" name="tutor" id="tutor"/>
                    <label>Actividad Realizada: </label>
                    <input type="text" name="hdual" id="hdual"/>

                </div>
            </div>
            <div>
                <button>Añadir</button>
            </div>
            
        </form>
    </div>
</div>

<?php require("parts/footer.php"); ?>