<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 */
class Tarifario extends CI_Controller
{
	private $permisos;
	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata("login")) {
			redirect(base_url());
		}
		$this->load->model('tarifario_model');
		$this->load->model('modelgeneral');
		$this->load->library('form_validation');
		$this->permisos = $this->backend_lib->control();
	}

	public function index()
	{
		$data['tipo_conceptos'] = $this->modelgeneral->getTable('tipo_concepto');
		$data['unidad_medidades'] = $this->modelgeneral->getTable('unidad_medida');
		$data['categorias'] = $this->modelgeneral->getTable('categoria');
		$data['permisos'] = $this->permisos;
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/procedimiento/listarprocedimiento', $data);
		$this->load->view('layouts/footer');
	}

	public function jsontarifario()
	{
		$data['start'] = $this->input->get_post('start', true);
		$data['length'] = $this->input->get_post('length', true);
		$data['sEcho']  = $this->input->get_post('_', true);

		$columns = array('id_procedimiento', 'NombreProcedimiento', 'NombreMedida', 'NombreCategoria', 'nombre', 'prec_procedimiento', 'fecha_registro', 'estado');
		$orderCampo = $this->input->get_post('order', true);
		$orderCampo = $orderCampo[0]['column'];
		$orderCampo = $columns[$orderCampo];
		$orderDireccion = $this->input->get_post('order', true);
		$orderDireccion = $orderDireccion[0]['dir'];
		$data['orderCampo'] = $orderCampo;
		$data['orderDireccion'] = $orderDireccion;
		$desde = $this->input->get_post('desde');
		$hasta = $this->input->get_post('hasta');
		$procedimiento = $this->input->get_post('procedimiento');

		if ($desde != '' and $hasta != '') {
			$data['desde'] = $desde;
			$data['hasta'] = $hasta;
		}
		if ($procedimiento != '') {
			$data['procedimiento'] = $procedimiento;
		}
		$datos = $this->tarifario_model->getprocedimiento($data);
		header('content-type: application/json; charset=utf-8');
		echo json_encode($datos);
	}

	public function nuevo()
	{
		$data['tipo_conceptos'] = $this->modelgeneral->getTable('tipo_concepto');
		$data['unidad_medidas'] = $this->modelgeneral->getTable('unidad_medida');
		$data['categorias'] = $this->modelgeneral->getTable('categoria');
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/procedimiento/agregar', $data);
		$this->load->view('layouts/footer');
	}

	public function guardar()
	{
		$fechacreacion = date("Y-m-d H:i:s");

		$tipoconcepto = $this->input->post('concepto');
		$medida = $this->input->post('medida');
		$categoria = $this->input->post('categoria');
		$nombre = $this->input->post('nombre');
		$precio = $this->input->post('precio');
		$estado = $this->input->post('estado');

		$this->form_validation->set_rules("concepto", "Concepto", "required");
		$this->form_validation->set_rules("medida", "Medida", "required");
		$this->form_validation->set_rules("categoria", "Categoria", "required");
		$this->form_validation->set_rules("nombre", "Nombre", "required");
		$this->form_validation->set_rules("precio", "Precio", "required");
		$this->form_validation->set_rules("estado", "Estado", "required");

		if ($this->form_validation->run() == true) {
			$data  = array(
				'id_tipoconcepto' => $tipoconcepto,
				'id_medida' => $medida,
				'codi_cat' => $categoria,
				'nombre' => $nombre,
				'prec_procedimiento' => $precio,
				'fecha_registro' => $fechacreacion,
				'estado' => $estado
			);

			if ($this->tarifario_model->guardarprocedimiento($data)) {
				$this->session->set_flashdata('success', 'Registro Guardado ');
				redirect(base_url() . 'mantenimiento/tarifario');
			} else {
				$this->session->set_flashdata('error', 'No se pudo guardar la informacion.<br>Ingresar los datos correctamente');
				redirect(base_url() . 'mantenimiento/tarifario/nuevo');
			}
		} else {
			$this->nuevo();
		}
	}

	public function editar($id)
	{
		$data['tarifario'] = $this->tarifario_model->getprocedimiento_id($id);
		$data['tipo_conceptos'] = $this->modelgeneral->getTable('tipo_concepto');
		$data['unidad_medidas'] = $this->modelgeneral->getTable('unidad_medida');
		$data['categorias'] = $this->modelgeneral->getTable('categoria');
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/procedimiento/actualizar', $data);
		$this->load->view('layouts/footer');
	}


	public function update()
	{

		$fechacreacion = date("Y-m-d H:i:s");
		$idprocedimiento = $this->input->post('id_procedimiento');
		$tipoconcepto = $this->input->post('concepto');
		$medida = $this->input->post('medida');
		$categoria = $this->input->post('categoria');
		$nombre = $this->input->post('nombre');
		$precio = $this->input->post('precio');
		$estado = $this->input->post('estado');
		$que = $this->input->post('que');
		$como = $this->input->post('como');
		$duracion = $this->input->post('duracion');
		$beneficios = $this->input->post('beneficios');
		$riesgos_frecuentes = $this->input->post('riesgos_frecuentes');
		$riesgos_poco_frecuentes = $this->input->post('riesgos_poco_frecuentes');
		$riesgos_especificos = $this->input->post('riesgos_especificos');
		$alternativas = $this->input->post('alternativas');
		$manejo = $this->input->post('manejo');
		$consecuencias = $this->input->post('consecuencias');

		$ProcedimientoActual = $this->tarifario_model->getprocedimiento_id($idprocedimiento);

		if ($nombre == $ProcedimientoActual->nombre) {
			$is_unique = "";
		} else {
			$is_unique = '|is_unique[procedimiento.nombre]';
		}

		$this->form_validation->set_rules("id_procedimiento", "idprocedimiento", "required");
		$this->form_validation->set_rules("concepto", "Concepto", "required");
		$this->form_validation->set_rules("medida", "Medida", "required");
		$this->form_validation->set_rules("categoria", "Categoria", "required");
		$this->form_validation->set_rules("nombre", "Nombre", "required" . $is_unique);
		$this->form_validation->set_rules("precio", "Precio", "required");
		$this->form_validation->set_rules("estado", "Estado", "required");

		if ($this->form_validation->run() == true) {
			$data  = array(
				'id_procedimiento' => $idprocedimiento,
				'id_tipoconcepto' => $tipoconcepto,
				'id_medida' => $medida,
				'codi_cat' => $categoria,
				'nombre' => $nombre,
				'prec_procedimiento' => $precio,
				'fecha_registro' => $fechacreacion,
				'estado' => $estado,
				'que' => $que,
				'como' => $como,
				'duracion' => $duracion,
				'beneficios' => $beneficios,
				'riesgos_frecuentes' => $riesgos_frecuentes,
				'riesgos_poco_frecuentes' => $riesgos_poco_frecuentes,
				'riesgos_especificos' => $riesgos_especificos,
				'alternativas' => $alternativas,
				'manejo' => $manejo,
				'consecuencias' => $consecuencias
			);

			$config_grafico['upload_path'] = 'assets/uploads/procedimientos/';
			$config_grafico['allowed_types'] = 'png|jpg|jpeg';
			$config_grafico['max_size'] = '40000';
			$config_grafico['max_width'] = '40000';
			$config_grafico['max_height'] = '40000';
			$this->upload->initialize($config_grafico);
			$grafico_uploaded = $this->upload->do_upload('grafico');
			error_log('uploading file: ' . $this->upload->display_errors('<p>', '</p>'));
			if ($grafico_uploaded) {
				$fileData = $this->upload->data();
				$data['grafico'] = $fileData['file_name'];
			}

			if ($this->tarifario_model->update($idprocedimiento, $data)) {
				$this->session->set_flashdata('success', 'Te has registrado correctamente en nuestro sistema.<br>Hemos enviado un código de verificación a ');
				redirect(base_url() . 'mantenimiento/tarifario');
			} else {

				redirect(base_url() . 'mantenimiento/tarifario/editar' . $idprocedimiento);
			}
		} else {
			$this->editar($idprocedimiento);
		}
	}

	public function anularpago()
	{
		$id = $this->input->get('id');
		$data = array(
			'estado' => 'N'
		);
		$this->tarifario_model->update($id, $data);
		$resp['success'] = true;
		echo json_encode($resp);
	}
}
