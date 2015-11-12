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
		$model = ORM::factory('Tarjeta')->find_all();
		$usuario = ORM::factory('Usuario')->find_all();
		$this->template->content = View::factory('admin_tarjeta')->bind('tarjetas',$model)->bind('usuarios',$usuario);
	}
	public function action_agregarTarjeta()
	{

		$tarjeta = ORM::factory('Tarjeta');
		$tarjeta->nTarjeta = $_POST['nTarjeta'];
		$tarjeta->idUsario = $_POST['usuario'];
		$tarjeta->save();
		$this->redirect('home/adminTarjeta',302);
	}
	public function action_editarTarjeta()
	{
		$tarjeta = ORM::factory('Tarjeta',$_POST['id']);
		unset($_POST['id']);
		$tarjeta->values($_POST);
		$tarjeta->save();
		$this->redirect('home/adminTarjeta',302);
	}
	public function action_borrarTarjeta()
	{
		$id = $this->request->param('id');
		$tarjeta=ORM::factory('Tarjeta',$id)->delete();
		$this->redirect('home/adminTarjeta',302);
	}

	public function action_adminPais()
	{
		$this->template->content = View::factory('admin_pais');
	}
	public function action_agregarPais()
	{
		$pais = ORM::factory('Pais');
		$nombre=$_POST['nombre'];
		$ruta = "img/".$nombre.".jpg";
		/*$carpeta = "<?=url::base()?>/img/"	;
		//Abrimos el directorio con el comnado OPENDIR, y le decimos dentro donde esta especificada la ruta.
		opendir($carpeta);
		//creamos una variable destino que me va almacenar el nombre.
		$destino = $carpeta.$_FILES['foto']['name'];
		copy($_FILES['foto']['tmp_name'] , $destino);
		//le cambiamos el nombre de la imagen por medio de la variable xD ...
		$nuevoNombre = $nombre.".jpg";
		//cambiamos el nombre de la imagen por la ruta anterios y la tura nueva.
		rename($destino,"<?=url::base()?>/img/".$nuevoNombre);
		$pais->nombre=$_POST['nombre'];
		$pais->ruta_foto=$ruta;*/
		$pais->save();
		
	}
	public function action_adminUsuario()
	{
		$usuarios = ORM::factory('Usuario');
		$this->template->content = View::factory('admin_usuario')->bind('usuarios',$usuarios);
	}
	public function action_agregarUsuario()
	{
		
		$tarjeta = ORM::factory('Usuario');
		$nuevoUsuario = ORM::factory('Usuario');
			$nuevoUsuario->values($_POST);
			$nuevoUsuario->save();
		$this->redirect('home/adminUsario',302);
	}
	public function action_editarUsuario()
	{
		
		$tarjeta = ORM::factory('Uusario',$_POST['id']);
		unset($_POST['id']);
		$tarjeta->values($_POST);
		$tarjeta->save();
		$this->redirect('home/adminUsario',302);
	}
	public function action_borrarUsuario()
	{
		
		$id = $this->request->param('id');
		$tarjeta=ORM::factory('Usuario',$id)->delete();
		$this->redirect('home/adminUsario',302);
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
	public function action_registrar()
	{
		$usuario = ORM::factory('Usuario',$_POST['usuario'])->find_all();
		if (isset($usuario)){
			$this->redirect('home/index',302);
		}else{
			$nuevoUsuario = ORM::factory('Usuario');
			$nuevoUsuario->values($_POST);
			$nuevoUsuario->tipo=0;
			$nuevoUsuario->save();
			$this->redirect('home/index',302);
		}
	}
	public function action_auth()
	{
		$usuario = ORM::factory('Usuario',$_POST['usuario'],$_POST['clave'])->find_all();
		if (isset($usuario)){
			$this->redirect('home/index',302);
		}else{
			
			$this->redirect('home/adminPais',302);
		}
	}
}
