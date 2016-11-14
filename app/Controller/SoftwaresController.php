<?php

 class SoftwaresController extends AppController
 {
 		public $helpers = array('Html', 'Form', 'Time','Js');
 		public $components = array('Session','RequestHandler');

    /*variable para paginacion*/
    public $paginate = array(
      'limit' => 3,
      'order' => array( 'Proyecto.id' => 'asc'
      )

    );

 	// 	public function index()
 	// 	{
 	// 		// llamada al layout correspondiente a la parte publica de la app
 	// 		$this->layout = 'daeira';
 	// 		$this->set('softwares', $this->Software->find('all', array("conditions" => array( "visible" => "1"))));
 	// 	}

 		public function visible($id)
 		{
 				//recuperacion de los datos de la software concreta seleccionada
 				$software=$this->Software->findById($id);

 				if($software['Software']['visible'] == "0")
 				{
 					$this->Software->id= $id;
 					$this->Software->save(array("visible" => "1"));

 				}else{
 					$this->Software->id= $id;
 					$this->Software->save(array("visible" => "0"));
 				}

 				$this->set('softwares', $this->Software->find('all', array("conditions" => array( "visible" => "1"))));



 				return $this->redirect(array('action' => 'listar'));

 		}

    public function listar()
 		{
 			$this->paginate['Software']['limit'] = 3;
 			$this->paginate['Software']['order'] = array('Software.id' => 'asc');
 			$this->set('softwares', $this->paginate());
 		}


 		public function ver($id = null)
 		{
 			if(!$id)//si no existe el id
 			{
 				throw new NotFoundException("Invalid data");

 			}
 			$software = $this->Software->findById($id);

 			//si no existe el software

 			if(!$id)//si no existe el software
 			{
 				throw new NotFoundException("The software doesn't exist");

 			}
 			//recupera el registro especifico segun el id que le pasamos
 			$this->set('software', $software);

 		}


 		public function view_public($id = null)
 		{
 			$this->layout='daeira';
 			if(!$id)//si no existe el id
 			{
 				throw new NotFoundException("Invalid data");

 			}
 			$software = $this->Software->findById($id);



 			if(!$software)//si no existe la software
 			{
 				throw new NotFoundException("The software doesn't exist");

 			}

 			//recupera el registro especifico segun el id que le pasamos
 			$this->set('software', $software);


 		}

 		public function nuevo()
 		{

 			if($this->request->is('post'))//envio formulario con metodo post
 			{
 				$this->Software->create();//creacion nuevo software en bd
 				if($this->Software->save($this->request->data)) //si están bien validados los datos que enviemos se creará el software
 				{
 					$this->Session->setFlash('The software has been created', 'success');
 					return $this->redirect(array('action' => 'listar'));//redirecciona a listar para mostrar el listado de softwares
 				}

 				$this->Session->setFlash('The software hasnt could be created','error');
 			}
 		}

 		public function editar($id=null)
 		{
 			if(!$id)//si no encuentra ningun id lanza la excepcion
 			{
 				throw new NotFoundException("Invalid data");
 			}

 			$software = $this->Software->findById($id);//recuperacion de los datos de el software concreta seleccionada
 			if(!$software)//si no encuentra el software,lanza excepcion
 			{
 				throw new NotFoundException("The software hasn't been found");

 			}

 			if($this->request->is(array('post','put')))//saber si la peticion es put o post
 			{
 				$this->Software->id = $id;//coincidir los ids para poder editar

 				if($this->Software->save($this->request->data))//si se guardaron los datos,activa un flash de aviso de modificacion de software.
 				{
 					$this->Session->setFlash("The software has been modified", 'success');
 					return $this->redirect(array('action' => 'listar'));
 				}
 				$this->Session->setFlash('The register hasnt could be modified','error');
 			}

 			if(!$this->request->data)//si no encuentra ninguna peticion enviado por formulario
 			{
 				$this->request->data = $software;
 			}
 		}

 		public function eliminar($id)
 		{
 			if($this->request->is('get'))//si la peticion es de un metodo get
 			{
 				throw new MethodNotAllowedException('Incorrect');

 			}
 			if($this->Software->delete($id))//validar si el software ha sido eliminado segun el id guardado en la BD
 			{
 				$this->Session->setFlash('The software has been deleted','success');
 				return $this->redirect(array('action' => 'listar'));
 			}
 		}
 }
?>
