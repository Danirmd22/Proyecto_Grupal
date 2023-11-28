<?php require("parts/head.php"); ?>
<?php require("parts/menu.php"); ?>
<div class="container">
    
    <form action="#" method="post" class="contact-form">
    <h2>Formulario de Contacto</h2>
      <div class="form-row">
        <div class="form-column">
          <label for="nombre">Nombre:</label>
          <input type="text" id="nombre" name="nombre" required>
          
          <label for="correo">Correo electrónico:</label>
          <input type="email" id="correo" name="correo" required>
          
          <label for="telefono">Teléfono:</label>
          <input type="text" id="telefono" name="telefono">
        </div>
        <div class="form-column">
          <label for="mensaje">Mensaje:</label>
          <textarea id="mensaje" name="mensaje" rows="8" required></textarea>
        </div>
      </div>
      
      <label class="checkbox-label">
        <input type="checkbox" id="confirmacion" name="confirmacion" required>
        <span>He leído y acepto los términos y condiciones.</span>
      </label>
      
      <input type="submit" value="Enviar" class="submit-btn">
    </form>
  </div>
  <?php require("parts/footer.php"); ?>