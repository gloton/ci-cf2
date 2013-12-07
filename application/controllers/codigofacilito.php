<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Codigofacilito extends CI_Controller {
	function __construct() {
		parent::__construct();
	}
	function index() {
		//esta propiedad load se hereda cuando se carga CI_Controller
		$this->load->view('codigofacilito/bienvenido');
	}
} 