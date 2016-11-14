<?php
 
 class NoticiasController extends AppController
 {
 		public $helpers = array('Html', 'Form', 'Time', 'Js');
 		public $components = array('Session', 'RequestHandler');

 		/*variable para paginacion*/
 		public $paginate = array(
 			'limit' => 5,
 			'order' => array( 'Noticia.id' => 'asc'
 			)

 		);

 		public function index()
 		{
 			// llamada al layout correspondiente a la parte publica de la app
 			$this->layout = 'daeira';

 			
 			$this->set('noticias', $this->Noticia->find('all', array("conditions" => array( "visible" => "1"))));
 		}

 		public function visible($id)
 		{		
 				//recuperacion de los datos de la noticia concreta seleccionada
 				$noticia=$this->Noticia->findById($id);
 				
 				if($noticia['Noticia']['visible'] == "0")
 				{
 					$this->Noticia->id= $id;
 					$this->Noticia->save(array("visible" => "1"));
 					
 				}else{
 					$this->Noticia->id= $id;
 					$this->Noticia->save(array("visible" => "0"));
 				}

 				$this->set('noticias', $this->Noticia->find('all', array("conditions" => array( "visible" => "1"))));



 				return $this->redirect(array('action' => 'listar'));
 				
 		}

 		public function listar()
 		{
 			
 			// $this->Noticia->recursive=0;
 			$this->paginate['Noticia']['limit'] = 5;
 			$this->paginate['Noticia']['order'] = array('Noticia.id' => 'asc');
 			$this->set('noticias', $this->paginate());
 		}

 		public function ver($id = null)
 		{
 			if(!$id)//si no existe el id
 			{
 				throw new NotFoundException("Invalid data");
 				
 			}
 			$noticia = $this->Noticia->findById($id);

 			

 			if(!$noticia)//si no existe la noticia
 			{
 				throw new NotFoundException("The news doesn't exist");
 				
 			}

 			//recupera el registro especifico segun el id que le pasamos
 			$this->set('noticia', $noticia);

 		}



 		public function view_public($id = null)
 		{
 			$this->layout='daeira';
 			if(!$id)//si no existe el id
 			{
 				throw new NotFoundException("Invalid data");
 				
 			}
 			$noticia = $this->Noticia->findById($id);

 			

 			if(!$noticia)//si no existe la noticia
 			{
 				throw new NotFoundException("The news doesn't exist");
 				
 			}

 			//recupera el registro especifico segun el id que le pasamos
 			$this->set('noticia', $noticia);

 			$noticias = $this->Noticia->query("SELECT * FROM noticias N WHERE N.visible =1 LIMIT 0,5");

 			$this->set('noticias', $noticias);


 		}

 		public function nuevo()
 		{
 			if($this->request->is('post'))//envio formulario con metodo post
 			{
 				$this->Noticia->create();//creacion nueva noticia en bd
 				if($this->Noticia->save($this->request->data)) //si están bien validados los datos que enviemos creará la noticia.
 				{
 					$this->Session->setFlash('The news has been created', 'success');
 					return $this->redirect(array('action' => 'listar'));//redirecciona a listar para mostrar el listado de noticias
 				}

 				$this->Session->setFlash('The news hasnt could be created','error');
 			}
 		}

 		public function editar($id=null)
 		{
 			if(!$id)//si no encuentra ningun id lanza la excepcion
 			{
 				throw new NotFoundException("Invalid data");
 			}

 			$noticia = $this->Noticia->findById($id);//recuperacion de los datos de la noticia concreta seleccionada
 			if(!$noticia)//si no encuentra la noticia,lanza excepcion
 			{
 				throw new NotFoundException("The news hasn't been found");
 				
 			}

 			if($this->request->is (array('post','put')))//saber si la pedicion es put o post
 			{
 				$this->Noticia->id = $id;//coincidir los id's para poder editar

 				if($this->Noticia->save($this->request->data))//si se guardaron los datos,activa un flash de aviso de modificacion de noticia.
 				{
 					$this->Session->setFlash("The news has been modified",'success');
 					return $this->redirect(array('action' => 'listar'));
 				}
 				$this->Session->setFlash('The register hasnt could be modified','error');
 			}

 			if(!$this->request->data)//si no encuentra ninguna peticion enviado por formulario
 			{
 				$this->request->data = $noticia;
 			}
 		}

 		public function eliminar($id)
 		{
 			if($this->request->is('get'))//si la peticion es de un metodo get
 			{
 				throw new MethodNotAllowedException('Incorrect');
 				
 			}
 			if($this->Noticia->delete($id))//validar si la noticia ha sido eliminado segun el id guardado en la BD
 			{
 				$this->Session->setFlash('The news has been deleted','success');
 				
 				return $this->redirect(array('action' => 'listar'));
 			}
 		}
 }
?>