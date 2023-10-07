<?php

/**
 * Fired during plugin activation
 *
 * @link              http://metodopilardominguez.com
 * @since             1.0.0
 *
 * @package    neptuno
 * @subpackage neptuno/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    neptuno
 * @subpackage neptuno/includes
 * @author     Diego Medina <diegomedina@metodopilardominguez.com>
 */
class Neptuno_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {

		global $wpdb;
		// upgrade contiene la función dbDelta la cuál revisará si existe la tabla.
		require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );

		//TABLA MEDICOS
		$table_medicos = $wpdb->prefix.'medicos';
		$sql1 = "CREATE TABLE IF NOT EXISTS $table_medicos(
			`id` INT(10) NOT NULL AUTO_INCREMENT,
			`nombre` VARCHAR(50),
			`apellido` VARCHAR(50),
			`especialidad` VARCHAR(50),
			UNIQUE KEY id (id)
		)";
		//TABLA PACIENTES
		$table_pacientes = $wpdb->prefix.'pacientes';
		$sql2 = "CREATE TABLE IF NOT EXISTS $table_pacientes(
			`id`  INT(10) NOT NULL AUTO_INCREMENT,
			`nombre` VARCHAR(50) NOT NULL,
			`apellidos` VARCHAR(250) NOT NULL,
			`fechaNacimiento` DATE NOT NULL,
			`email` VARCHAR(250) NOT NULL,
			`telefono` VARCHAR(20) NOT NULL,
			`medicoId` INT(10) NOT NULL,
			UNIQUE KEY id (id),
			FOREIGN KEY (medicoId) REFERENCES $table_medicos(id)
		);";
		//TABLA NOMBRE DE TEST
		$table_test = $wpdb->prefix.'test';
		$sql3 = "CREATE TABLE IF NOT EXISTS $table_test(
			`id`  INT(10) NOT NULL AUTO_INCREMENT,
			`nombreTest` VARCHAR(50) NOT NULL,
			UNIQUE KEY id (id)
		)";
		
		
		//crea la tabla
		dbDelta($sql1);
		dbDelta($sql2);
		dbDelta($sql3);

		
	}

}
