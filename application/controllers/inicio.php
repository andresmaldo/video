<?php
class Inicio extends CI_Controller {
	function __construct()
	{
		parent::__construct();
	}
	function index()
	{
		$this->load->view('header');
		$this->load->view('cuerpo');
		$this->load->view('footer');
	}
	function nombre()
	{
		$variables['var1'] = 'valor1';
		$variables['var2'] = 'valor2';
		$variables['var3'] = 'valor3';
		$this->load->view('header');
		$this->load->view('inicio/cuerpo_nombre', $variables);
		$this->load->view('footer');
	}
	function nombre_uno($nom)
	{
		echo $nom;
	}
	function sentencias()
	{
		$var = 2;
		$vector = array( 
	   				"uno" => 1, 
	   				"dos" => 2,
	   				"tres" => 3,
	   				"diecisiete" => 17,
				);
		$data['var'] = $var;
		$data['vector'] = $vector;
		$this->load->view('header');
		$this->load->view('inicio/sentencias_control', $data);
		$this->load->view('footer');
	}
}