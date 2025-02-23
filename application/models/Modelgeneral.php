<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Modelgeneral extends CI_Model
{

	function getTable($table, $select = NULL, $orderCamp = NULL, $order = NULL)
	{
		if (!is_null($select)) {
			$this->db->select($select);
		}
		if (!is_null($orderCamp)) {
			$this->db->order_by($orderCamp, $order);
		}
		$query = $this->db->get($table);
		return $query->result();
	}

	/**
	 * Retrieves a list of locations joined with airport information.
	 *
	 * This function queries the 'locaciones' table and joins it with the 'aeropuertos' table
	 * based on the 'AerId' field. It returns the result as an array of objects.
	 *
	 * @return array An array of objects containing the joined data from 'locaciones' and 'aeropuertos' tables.
	 *
	 * @example
	 * $this->Modelgeneral->getTableLocacionesAeropuerto();
	 * // Returns:
	 * // [
	 * //     {
	 * //         "LocId": 1,
	 * //         "LocName": "Location 1",
	 * //         "AerId": 1,
	 * //         "AerName": "Airport 1",
	 * //         ...
	 * //     },
	 * //     ...
	 * // ]
	 */
	function getTableLocacionesAeropuerto()
	{
		return $this->db->from('locaciones')
			->join('aeropuertos', 'locaciones.AerId = aeropuertos.AerId')
			->get()
			->result();
	}

	/**
	 * Retrieves records from a specified table with optional conditions and selected columns.
	 *
	 * @param string $table The name of the table to query.
	 * @param array|null $wheres Optional associative array of conditions for the WHERE clause.
	 * @param string|null $select Optional comma-separated list of columns to select.
	 * @return array The result set as an array of objects.
	 *
	 * @example
	 * // Retrieve all columns from the 'users' table where 'status' is 'active'
	 * $result = $this->Modelgeneral->getTableWhere('users', ['status' => 'active']);
	 *
	 * @example
	 * // Retrieve only 'id' and 'name' columns from the 'products' table where 'category' is 'electronics'
	 * $result = $this->Modelgeneral->getTableWhere('products', ['category' => 'electronics'], 'id, name');
	 */
	function getTableWhere($table, $wheres = NULL, $select = NULL)
	{
		if (!is_null($select)) {
			$this->db->select($select);
		}
		$this->db->where($wheres);
		$this->db->from($table);
		$query = $this->db->get();
		return $query->result();
	}

	/**
	 * Retrieves a single row from a specified table based on given conditions.
	 *
	 * @param string $table The name of the table to query.
	 * @param array|null $wheres An associative array of conditions to filter the query (optional).
	 * @param string|null $select A comma-separated string of columns to select (optional).
	 * @return object|null The resulting row as an object, or null if no row is found.
	 *
	 * @example
	 * // Example usage:
	 * $this->Modelgeneral->getTableWhereRow('users', ['id' => 1], 'name, email');
	 */
	function getTableWhereRow($table, $wheres = NULL, $select = NULL)
	{
		if (!is_null($select)) {
			$this->db->select($select);
		}
		$this->db->where($wheres);
		$this->db->from($table);
		$query = $this->db->get();
		return $query->row();
	}

	/**
	 * Retrieves a single row from a specified table as an associative array based on given conditions.
	 *
	 * @param string $table The name of the table to query.
	 * @param array|null $wheres An associative array of conditions to filter the query. Default is NULL.
	 * @param string|null $select A comma-separated string of columns to select. Default is NULL.
	 * @return array The resulting row as an associative array.
	 *
	 * @example
	 * // Example usage:
	 * $this->Modelgeneral->getTableWhereRowArray('users', ['id' => 1], 'name, email');
	 * // This will return an associative array with the 'name' and 'email' of the user with id 1.
	 */
	function getTableWhereRowArray($table, $wheres = NULL, $select = NULL)
	{
		if (!is_null($select)) {
			$this->db->select($select);
		}
		$this->db->where($wheres);
		$this->db->from($table);
		$query = $this->db->get();
		return $query->row_array();
	}

	function getTableLikeRow($table, $likes = NULL, $select = NULL)
	{
		if (!is_null($select)) {
			$this->db->select($select);
		}
		$this->db->like($likes);
		$this->db->from($table);
		$query = $this->db->get();
		return $query->row();
	}

	function getTableLimit($table, $cant, $indice, $id = NULL, $orden = NULL)
	{
		if ($id  != '' and $orden  != '') {
			$this->db->order_by($id, $orden);
		}

		$this->db->limit($cant, $indice);
		$query = $this->db->get($table);
		return $query->result();
	}

	function getTableLimitWhere($table, $cant, $indice, $campo, $valor, $id = NULL, $orden = NULL)
	{
		if ($id != '' and $orden != '') {
			$this->db->order_by($id, $orden);
		}
		if ($campo != '' and $valor != '') {
			$this->db->where($campo, $valor);
		}

		$this->db->limit($cant, $indice);
		$query = $this->db->get($table);
		return $query->result();
	}

	function getTotalRows($table)
	{
		$query = $this->db->get($table);
		$rows = $query->num_rows();
		return $rows;
	}

	function getTotalRowsWhere($table, $campo, $valor)
	{
		$this->db->where($campo, $valor);
		$query = $this->db->get($table);
		$rows = $query->num_rows();
		return $rows;
	}

	function insertRegist($table, $data)
	{
		$this->db->insert($table, $data);
		if ($this->db->affected_rows() === 1) {
			return $this->db->insert_id();
		}
		return NULL;
	}

	function editRegist($table, $wheres, $data)
	{
		$this->db->where($wheres);
		$this->db->update($table, $data);
		if ($this->db->affected_rows() === 1 || $this->db->affected_rows() === 0) {
			return TRUE;
		} else {
			return NULL;
		}
	}

	function deleteRegist($table, $wheres)
	{
		$this->db->where($wheres);
		$this->db->delete($table);
		if ($this->db->affected_rows() === 1) {
			return TRUE;
		} else {
			return NULL;
		}
	}

	function getTableWhereNotIn($table, $campo, $array)
	{
		$this->db->from($table);
		$this->db->or_where_not_in($campo, $array);
		$query = $this->db->get();
		return $query->result();
	}

	function getAdministrador()
	{
		return $this->db->from('usuarios')
			->where('EmpId', $this->session->userdata('IdEmpresa'))
			->where('(usuarios.UsrTipo = ' . SUPER_USUARIO . ' OR usuarios.UsrTipo = ' . ADMINISTRADOR . ' OR usuarios.UsrTipo = ' . SUPERVISOR_GENERAL . ')', NULL)
			->get()
			->result();
	}
	function obtenerPermiso($campo)
	{
		$query = $this->db->from('permisos')
			->select($campo)
			->where('UsrId', $this->session->userdata('IdUsuario'))
			->get()
			->row();
		return $query->$campo;
	}

	function verificaUnico($tabla, $campo, $valor, $idCampo = NULL, $idValor = NULL)
	{
		$this->db->from($tabla);
		$this->db->where($campo, $valor);
		if (!is_null($idCampo)) {
			$this->db->where_not_in($idCampo, $idValor);
		}
		$query = $this->db->get();
		if ($query->num_rows() == 0) {
			return true;
		} else {
			return false;
		}
	}
}

/* End of file Modelgeneral.php */
/* Location: ./application/models/Modelgeneral.php */
