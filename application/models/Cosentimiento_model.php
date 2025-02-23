<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cosentimiento_model extends CI_Model
{
	function getConsentimientos($codi_tra)
	{
		$this->db->select('c.*, p.nombre as procedimiento');
		$this->db->from('consentimiento as c');
		$this->db->join('tratamiento as t', 'c.codi_tra = t.codi_tra');
		$this->db->join('enfermedad as e', 'c.codi_enf = e.codi_enf');
		$this->db->join('procedimiento as p', 'c.id_procedimiento = p.id_procedimiento');
		$this->db->where('c.codi_tra', $codi_tra);
		$query = $this->db->get();
		return $query->result();
	}

	function getConsentimiento($id)
	{
		$this->db->select('c.*, pac.*, enf.*, p.*');
		$this->db->from('consentimiento c');
		$this->db->join('paciente as pac', 'pac.codi_pac = c.codi_pac');
		$this->db->join('enfermedad as enf', 'enf.codi_enf = c.codi_enf');
		$this->db->join('procedimiento as p', 'c.id_procedimiento = p.id_procedimiento');
		$this->db->where('c.codi_consen', $id);
		$query = $this->db->get();
		return $query->row();
	}
}
