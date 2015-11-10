<?php defined('SYSPATH') or die('No direct script access.');

class Controller_home extends Controller_Template {

	public $template = 'template';
	public function action_index()
	{

		$this->template->content = View::factory('index/indexview');
	}
	public function action_adminAerolineas()
	{
		$model = ORM::factory('Aerolinea')->find_all();
		$this->template->content = View::factory('admin_aerolinea')->bind('aerolineas',$model);

	}
	public function action_destino()
	{
		$this->template->content = View::factory('admin_destino');
	}
	public function action_destinoHotel()
	{
		$this->template->content = View::factory('admin_destinohotel');
	}
	public function action_galeria()
	{
		$this->template->content = View::factory('admin_galeria');
	}
	public function action_hotel()
	{
		$this->template->content = View::factory('admin_hotel');
	}
	public function action_adminPais()
	{
		$this->template->content = View::factory('admin_pais');
	}
	public function action_adminTarjeta()
	{
		$this->template->content = View::factory('admin_tarjetausuario');
	}
	public function action_tipoTarjeta()
	{
		$this->template->content = View::factory('admin_tipotarjeta');
	}
	public function action_adminUsuario()
	{
		$this->template->content = View::factory('admin_usuario');
	}
}