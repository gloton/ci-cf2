<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Codigofacilito extends CI_Controller {
	function __construct() {
		parent::__construct();
		#lo que hace helper es que ci primero buscara mihelper dentro de la carpeta system y si no dentro de la carpeta helper de application
		$this->load->helper('mihelper');
		$this->load->helper('form');
		$this->load->model('codigofacilito_model');
	}
	function index() {
		$this->load->library('Menu', array('Inicio','Contacto','Cursos'));
		$data['mi_menu'] = $this->menu->construirMenu();
		//esta propiedad load se hereda cuando se carga CI_Controller
		$this->load->view('codigofacilito/bienvenido',$data);
	}
	function holamundo() {
		echo "hola mundo directo del metodo holamundo";
	}
	function sendMail() {
		$this->load->library('email');
		$this->email->from('codeigniter@w7.cl','Code Igniter');
		$this->email->to('gloton@gmail.com');
		$this->email->subject('Probando...asunto');
		$this->email->message('Este es el cuerpo del mensaje de prueba');
		if ($this->email->send()) {
			echo 'Correo enviado';
		} else {
			echo 'Correo no enviado';
		}
		
	}

} 