<?php require("parts/head.php"); ?>
<?php require("parts/menu.php"); ?>

<div class="crea-contenedor">
    
    <h2>Ficha Alumno</h2>
    <div class="cuadro">
        <form id="formu" name="form">
            <div class="inputs">
                <div class="column">
                    <label>Nombre: </label>
                    <input type="text" name="name" id="name" value="Pedro"/>
                    <label>Apellidos: </label>
                    <input type="text" name="lastname" id="lastname" value="Martinez Olmedo"/>
                    <label>Contraseña: </label>
                    <input type="text" name="password" id="password" value="cesur1234"/>
                    <label>DNI: </label>
                    <input type="text" name="dni" id="dni" value="87663549R"/>
                    <label>Fecha de Nacimiento: </label>
                    <input type="date" name="dob" id="dob" value="08/10/2002"/>
                </div>
                <div class="column">
                    <label>Correo electrónico: </label>
                    <input type="text" name="email" id="email" value="pedro@cesurformacion.com"/>
                    <label>Telefono móvil: </label>
                    <input type="text" name="phone" id="phone" value="722146598"/>
                    <label>Empresa de Prácticas: </label>
                    <input type="text" name="empresap" id="empresap" value="ViewNext"/>
                    <label>Observaciones: </label>
                    <textarea rows="4" cols="50" name="mensaje" id="observaciones">Gran estudiante, mejor persona.</textarea>
                </div>
                <div class="column">
                    <label>Tutor: </label>
                    <input type="text" name="tutor" id="tutor" value="Jose Antonio Romero Lopez"/>
                    <label>Horas Dual: </label>
                    <input type="text" name="hdual" id="hdual" value="200"/>
                    <label>Horas FCT: </label>
                    <input type="text" name="hfct" id="hfct" value="400"/>

                </div>
            </div>
            
        </form>
    </div>

    <h2>Diario Alumno</h2>

    <div class="empresas">
        <table>
            <tr>
                <th>Fecha</th>
                <th>Tipo de Práctica</th>
                <th>Horas</th>
                <th>Actividad Realizada</th>
                <th>Observaciones</th>
            </tr>    
            <tr>
                <td>29/05/23</td>
                <td>Dual</td>
                <td>6</td>
                <td>Curso JavaScript</td>
                <td>Ninguna</td>
            </tr>
            <tr>
                <td>30/05/23</td>
                <td>Dual</td>
                <td>6</td>
                <td>Curso JavaScript</td>
                <td>Ninguna</td>
            </tr>
            <tr>
                <td>31/05/23</td>
                <td>Dual</td>
                <td>6</td>
                <td>Curso Java PildorasInformaticas</td>
                <td>Ninguna</td>
            </tr>
            
        </table>
    </div>
</div>

<?php require("parts/footer.php"); ?>