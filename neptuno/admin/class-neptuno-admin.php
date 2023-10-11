<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Plugin_Name
 * @subpackage Plugin_Name/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Plugin_Name
 * @subpackage Plugin_Name/admin
 * @author     Your Name <email@example.com>
 */
class Neptuno_Admin
{

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct($plugin_name, $version)
	{

		$this->plugin_name = $plugin_name;
		$this->version = $version;
	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles()
	{

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Plugin_Name_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Plugin_Name_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style($this->plugin_name, plugin_dir_url(__FILE__) . 'css/ipd-admin1.css', array(), $this->version, 'all');
		wp_enqueue_style( 'font_fa', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css', array(), $this->version, 'all' );
	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts()
	{

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Plugin_Name_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Plugin_Name_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script($this->plugin_name, plugin_dir_url(__FILE__) . 'js/plugin-name-admin.js', array('jquery'), $this->version, false);
	}

	public function mainMenu()
	{
		add_menu_page('Pilar Domínguez', 'Pilar Domínguez', 'manage_options', plugin_dir_path(__FILE__).'partials/inicio-admin-display.php',null,plugin_dir_url( __FILE__ ).'img/icon.png', '65');
		
		add_submenu_page(plugin_dir_path(__FILE__).'partials/inicio-admin-display.php', 'Pilar Domínguez', 'Inicio',
	'manage_options', plugin_dir_path(__FILE__).'partials/inicio-admin-display.php');

		add_submenu_page( plugin_dir_path(__FILE__).'partials/inicio-admin-display.php', 'Mis Pacientes - Pilar Domínguez', 'Pacientes',
	'manage_options', plugin_dir_path(__FILE__).'partials/historial-clinico-display.php');

	add_submenu_page( plugin_dir_path(__FILE__).'partials/inicio-admin-display.php', 'Mis Diagnósticos', 'Diagnóstico',
	'manage_options', plugin_dir_path(__FILE__).'partials/diagnostico-display.php');
			
	}
}
