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
	function obtenerCurso($id) {
		$this->db->where( 'idCurso' , $id );
		$query = $this->db->get('Cursos');
		if ($query->num_rows() > 0) {
			return $query;
		} else {
			return false;
		}
	}
	function actualizarCurso( $id , $data ) {
		$datos = array('nombreCurso' => $data['nombre'], 'videosCurso' => $data['videos']);
		$this->db->where( 'idCurso' , $id );
		$query = $this->db->update( 'Cursos' , $datos );
		 
	}
	function eliminarCurso($id) {
		$this->db->delete( 'Cursos' , array('idCurso' => $id ) );
		/*
		 * seria lo mismo 
		 $query = DELETE FROM `codigofacilito`.`Cursos` WHERE `idCurso`='9';
		 $this->db->query($query);
		 */
		 */
	}
}