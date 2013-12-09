<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Codigofacilito_model extends CI_Model {
	function __construct() {
		parent::__construct();
		$this->load->database();
	}
	
	function crearCurso($data) {
		$this->db->insert('Cursos', array('nombreCurso' => $data['nombre'], 'videosCurso' => $data['videos']));
	}
	
	function obtenerCursos() {
		$query = $this->db->get('Cursos');
		if ($query->num_rows() > 0) {
			return $query;
		} else {
			return false;
		}
	}
}