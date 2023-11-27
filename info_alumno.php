<?php require("parts/head.php"); ?>
<?php require("parts/menu.php"); ?>

<div class="crea-contenedor">
    
    <h2>Ficha Alumno</h2>
    <div class="cuadro">
        <form id="formu" name="form">
            <div class="inputs">
                <div class="column">
                    <label>Nombre: </label>
                    <input type="text" name="name" id="name"/>
                    <label>Apellidos: </label>
                    <input type="text" name="lastname" id="lastname"/>
                    <label>Contraseña: </label>
                    <input type="text" name="password" id="password"/>
                    <label>DNI: </label>
                    <input type="text" name="dni" id="dni"/>
                    <label>Fecha de Nacimiento: </label>
                    <input type="date" name="dob" id="dob"/>
                </div>
                <div class="column">
                    <label>Correo electrónico: </label>
                    <input type="text" name="email" id="email"/>
                    <label>Telefono móvil: </label>
                    <input type="text" name="phone" id="phone"/>
                    <label>Empresa de Prácticas: </label>
                    <input type="text" name="empresap" id="empresap"/>
                    <label>Observaciones: </label>
                    <textarea rows="4" cols="50" name="mensaje" id="observaciones"></textarea>
                </div>
                <div class="column">
                    <label>Tutor: </label>
                    <input type="text" name="tutor" id="tutor"/>
                    <label>Horas Dual: </label>
                    <input type="text" name="hdual" id="hdual"/>
                    <label>Horas FCT: </label>
                    <input type="text" name="hfct" id="hfct"/>

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