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

<!-- This file should primarily consist of HTML with a little bit of PHP. -->

<div class="wrap">
  <?php
  echo "<h1 class='wp-heading-inline'>" . get_admin_page_title() . "</h1>";
  if (is_user_logged_in()) {
    echo 'User ID: ' . get_current_user_id();
  } else {
    echo 'Hello visitor!';
  }
  ?>
  <div class="topnav">
    Buscar: <input type="text" placeholder="Buscar Paciente..">
  </div>
</div>