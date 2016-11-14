<?php

 class ProyectosController extends AppController
 {
 		public $helpers = array('Html', 'Form', 'Time', 'Js');
 		public $components = array('Session','RequestHandler');

 		/*variable para paginacion*/
 		public $paginate = array(
 			'limit' => 5,
 			'order' => array( 'Proyecto.id' => 'asc'
 			)

 		);

 		public function index()
 		{
 			// llamada al layout correspondiente a la parte publica de la app
 			$this->layout = 'daeira';


 			

 			$this->paginate['Proyecto']['limit'] = 3;
 			$this->paginate['Proyecto']['order'] = array('Proyecto.id' => 'asc');
      $this->paginate['Proyecto']['conditions'] = array('Proyecto.visible' => 1);
 			$this->set('proyectos', $this->paginate());
 		}

 		public function visible($id)
 		{
 				//recuperacion de los datos de la proyecto concreta seleccionada
 				$proyecto=$this->Proyecto->findById($id);

 				if($proyecto['Proyecto']['visible'] == "0")
 				{
 					$this->Proyecto->id= $id;
 					$this->Proyecto->save(array("visible" => "1"));

 				}else{
 					$this->Proyecto->id= $id;
 					$this->Proyecto->save(array("visible" => "0"));
 				}

 				$this->set('proyectos', $this->Proyecto->find('all', array("conditions" => array( "visible" => "1"))));



 				return $this->redirect(array('action' => 'listar'));

 		}

 		public function listar()
 		{
 			$this->paginate['Proyecto']['limit'] = 5;
 			$this->paginate['Proyecto']['order'] = array('Proyecto.id' => 'asc');
 			$this->set('proyectos', $this->paginate());
 		}


 		public function ver($id = null)
 		{
 			if(!$id)//si no existe el id
 			{
 				throw new NotFoundException("Invalid data");

 			}
 			$proyecto = $this->Proyecto->findById($id);

 			//si no existe el proyecto

 			if(!$id)//si no existe el proyecto
 			{
 				throw new NotFoundException("The project doesn't exist");

 			}
 			//recupera el registro especifico segun el id que le pasamos
 			$this->set('proyecto', $proyecto);

 		}


 		public function view_public($id = null)
 		{
 			$this->layout='daeira';
 			if(!$id)//si no existe el id
 			{
 				throw new NotFoundException("Invalid data");

 			}
 			$proyecto = $this->Proyecto->findById($id);



 			if(!$proyecto)//si no existe la proyecto
 			{
 				throw new NotFoundException("The project doesn't exist");

 			}

 			//recupera el registro especifico segun el id que le pasamos
 			$this->set('proyecto', $proyecto);

 			$proyectos = $this->Proyecto->query("SELECT * FROM proyectos P WHERE P.visible =1 LIMIT 0,5");

 			$this->set('proyectos', $proyectos);


 		}

 		public function nuevo()
 		{
 			if($this->request->is('post'))//envio formulario con metodo post
 			{
 				$this->Proyecto->create();//creacion nuevo proyecto en bd
 				if($this->Proyecto->save($this->request->data)) //si están bien validados los datos que enviemos se creará el proyecto
 				{
 					$this->Session->setFlash('The project has been created', 'success');
 					return $this->redirect(array('action' => 'listar'));//redirecciona a listar para mostrar el listado de proyectos
 				}

 				$this->Session->setFlash('The project hasnt could be created','error');
 			}
 		}

 		public function editar($id=null)
 		{
 			if(!$id)//si no encuentra ningun id lanza la excepcion
 			{
 				throw new NotFoundException("Invalid data");
 			}

 			$proyecto = $this->Proyecto->findById($id);//recuperacion de los datos de el proyecto concreta seleccionada
 			if(!$proyecto)//si no encuentra el proyecto,lanza excepcion
 			{
 				throw new NotFoundException("The project hasn't been found");

 			}

 			if($this->request->is(array('post','put')))//saber si la peticion es put o post
 			{
 				$this->Proyecto->id = $id;//coincidir los ids para poder editar

 				if($this->Proyecto->save($this->request->data))//si se guardaron los datos,activa un flash de aviso de modificacion de proyecto.
 				{
 					$this->Session->setFlash("The project has been modified", 'success');
 					return $this->redirect(array('action' => 'listar'));
 				}
 				$this->Session->setFlash('The register hasnt could be modified','error');
 			}

 			if(!$this->request->data)//si no encuentra ninguna peticion enviado por formulario
 			{
 				$this->request->data = $proyecto;
 			}
 		}

 		public function eliminar($id)
 		{
 			if($this->request->is('get'))//si la peticion es de un metodo get
 			{
 				throw new MethodNotAllowedException('Incorrect');

 			}
 			if($this->Proyecto->delete($id))//validar si el proyecto ha sido eliminado segun el id guardado en la BD
 			{
 				$this->Session->setFlash('The project has been deleted','success');
 				return $this->redirect(array('action' => 'listar'));
 			}
 		}
 }
?>
