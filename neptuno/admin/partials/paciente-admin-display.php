<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Plugin_Name
 * @subpackage Plugin_Name/admin/partials
 */
?>


<?php
//  Almacenamos en $current_user el resultado de la funci´pon wp_get_current_user();
//  Luego recorremos el resultado para mostrar los datos personales como el nombre, apellido, etc.
$current_user = wp_get_current_user();
?>
<!-- This file should primarily consist of HTML with a little bit of PHP. -->

<div class="wrap example">
  <?php
  echo "<h1 class='wp-heading-inline'>" . get_admin_page_title() . "</h1>";
  if (is_user_logged_in()) {
    echo '<br />User ID: ' . get_current_user_id() . '<br />';
    echo 'User first name: ' . $current_user->user_firstname . '<br />';
    echo 'User last name: ' . $current_user->user_lastname . '<br />';
    echo 'User display name: ' . $current_user->display_name . '<br />';
  } else {
    echo 'Hello visitor!';
  }
  ?>


  <form>
    <fieldset>
      <legend>Introduce los datos personales del paciente : </legend>
      <label for="name">Nombre :</label>
      <input type="text" id="name" name="name" required minlength="2" maxlength="48" size="50" /></br>
      <label for="firstName">Primer Apellido :</label>
      <input type="text" id="firstName" name="firstName" required minlength="2" maxlength="50" size="52" /></br>
      <label for="secondName">Segundo Apellido :</label>
      <input type="text" id="secondName" name="secondName" required minlength="2" maxlength="50" size="52" /></br>
      <label for="dataNacimiento">Fecha de Nacimmiento :</label>
      <input type="data" id="dataNacimiento" name="dataNacimiento" required /></br>
      <label for="email">Email :</label>
      <input type="email" id="email" size="50" required /></br>
      <label for="documentoId">Documento Identificación :</label>
      <select id="documentoId" name="documentoId" required>
        <option value="0" disabled>selecciona</option>
        <option value="DNI">DNI</option>
        <option value="NIE">NIE</option>
        <option value="PASAPORTE">Pasaporte</option>
        <option value="OTROS">Otro</option>
      </select>
      <input type="text" required /></br>
      <label for="movil">Móvil :</label>
      <input type="tel" id="movil" name="movil" required /></br>
      <input type="submit" value="Guardar Paciente" />
    </fieldset>
  </form>
</div>