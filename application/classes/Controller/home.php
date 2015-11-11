<?php defined('SYSPATH') or die('No direct script access.');

class Controller_home extends Controller_Template {

	public $template = 'template';
	public function action_index()
	{
		$paises = ORM::factory('Pais')->find_all();
		$this->template->content = View::factory('index/indexview')->bind('paises',$paises);
	}
	public function action_adminAerolineas()
	{
		$model = ORM::factory('Aerolinea')->find_all();
		$this->template->content = View::factory('admin_aerolinea')->bind('aerolineas',$model);

	}
	public function action_editarAerolineas()
	{
		$aerolinea = ORM::factory('Aerolinea',$_POST['id']);
		unset($_POST['id']);
		$aerolinea->values($_POST);
		$aerolinea->save();
		$this->redirect('home/adminAerolineas',302);

	}
	public function action_agregarAerolineas()
	{
		$aerolinea = ORM::factory('Aerolinea');
		$aerolinea->nombre = $_POST['nombre'];
		$aerolinea->save();
		$this->redirect('home/adminAerolineas',302);

	}
	public function action_borrarAerolineas()
	{
		$id = $this->request->param('id');
		$aerolinea=ORM::factory('Aerolinea',$id)->delete();
		$this->redirect('home/adminAerolineas',302);

	}
	public function action_categoriaVuelo()
	{
		$model = ORM::factory('Aerolinea')->select('aerolinea.nombre','')->from()->join()->on();
		$this->template->content = View::factory('admin_categoriaVuelo');
	}
	public function action_destino()
	{
		$pais = ORM::factory('Pais')->find_all();
		$destinos = ORM::factory('Destino')->find_all();
		$this->template->content = View::factory('admin_destino')->bind('paises',$pais)->bind('destinos',$destinos);
	}
	public function action_agregarDestino()
	{
		$pais = ORM::factory('Destino');
		$pais->nombreCiudad=$_POST['nombre'];
		$pais->descripcion = $_POST['descripcion'];
		$pais->idpais = $_POST['idpais'];
		$pais->save();
	}
	
	public function action_adminReserva()
	{
		$this->template->content = View::factory('admin_reserva');
	}
	public function action_adminHotel()
	{
		$this->template->content = View::factory('admin_hotel');
	}
	public function action_adminTarjeta()
	{
		$this->template->content = View::factory('admin_tarjeta');
	}
	public function action_adminPais()
	{
		$this->template->content = View::factory('admin_pais');
	}
	public function action_adminUsuario()
	{
		$this->template->content = View::factory('admin_usuario');
	}
	public function action_adminVuelo()
	{
		$this->template->content = View::factory('admin_vuelo');
	}
	public function action_usuario()
	{
		$this->template->content = View::factory('perfil');
	}
	public function action_reservaUsuario()
	{
		$this->template->content = View::factory('reserva');
	}
}
