<?php

/*
Universidad Nacional Autonoma de Mexico
Facultad de Ingenieria 
Hecho por:
Herrejon Alarcon Jeerel Zalatiel
Asesorado:
Chavez Rodriguez Norma Elva
2017
*/

class Bienvenidos extends CI_Controller {

	
	public function index()
	{
		$data ['titulo'] = 'Bienvenidos';

		$this -> load -> view('Plantilla/header', $data);
		$this -> load -> view('Contenidos/index');
		$this -> load -> view('Plantilla/footer');
	}

	public function Profesores()
	{
		$data ['titulo'] = 'Profesores';

		$this -> load -> view('Plantilla/header', $data);
		$this -> load -> view('Contenidos/Profesores');
		$this -> load -> view('Plantilla/footer');

	}

	public function Areas()
	{
		$data ['titulo'] = 'Areas';
		
		$this -> load -> view('Plantilla/header', $data);
		$this -> load -> view('Contenidos/Areas');
		$this -> load -> view('Plantilla/footer');

	}

	public function Labs()
	{
		$data ['titulo'] = 'Laboratorios';

		$this -> load -> view('Plantilla/header', $data);
		$this -> load -> view('Contenidos/Labs');
		$this -> load -> view('Plantilla/footer');

	}

	public function Proyectos()
	{
		$data ['titulo'] = 'Proyectos';

		$this -> load -> view('Plantilla/header', $data);
		$this -> load -> view('Contenidos/Proyectos');
		$this -> load -> view('Plantilla/footer');

	}
}
