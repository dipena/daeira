<?php
	class Proyecto extends AppModel
	{
       

       /*variable que define los comportamientos(define configuración) que va tener el plugin referente al upload de imagenes*/
         public $actsAs= array(
            'Upload.Upload' => array(
                'fotoP' => array(
                    'fields' => array(
                        'dir' => 'fotoP_dir'
                    ),
                    
                    /* cada vez que se actualice imagen que no se quede con la imagen anterior,sino que la borre*/
                    'deleteOnUpdate' => true,
                    /*cada vez que se elimine un registro se elimina la carpeta y la imagen almacenada en ella incluida*/
                    'deleteFolderOnDelete' => true
                    )
                )
            );





        /*reglas de validacion*/
		public $validate = array(
            'tituloP' => array(
                'rule' => 'notEmpty'
            ),
            'acronimoP' => array(
                'rule' => 'notEmpty'
            ),
            'resumenP' => array(
                'rule' => 'notEmpty'
            ),
             'descripcionP' => array(
                'rule' => 'notEmpty'
            ),
             'colaboradorP' => array(
                'rule' => 'notEmpty'
            ),
             'fotoP' => array(
                 
               
                // tipos de archivos permitidos en el proyecto
                'isValidMimeType' => array(
                    'rule' => array('isValidMimeType',array('image/jpeg','image/png'),false),
                    'message' => 'Image is neither jpg nor png'

                ),

                /*valida extension para subir en un proyecto*/

                'isValidExtension' => array(
                    'rule' => array('isValidExtension',array('jpg','png'),false),
                    'message' => 'Image hasnt the jpg or png extension'

                ),

                /*verifica si la imagen ya existe en nuestro servidor,comprobacion en editar*/
                'checkUniqueName' => array(
                    'rule' => array('checkUniqueName'),
                    'message' => 'Image is already exists',
                    'on' => 'update'
                )



            )

         );



         // método para validad que la imagen ya existe en nuestro servidor,entonces salta un mensaje.Primero creamos validacion en fotoP->checkUniqueName y aqui creamos el metodo para que lo reconozca.

        /*metodo recibe un dato y comprueba*/
        function checkUniqueName($data){

            /*busca el PRIMER REGISTRO de nuestro campo fotoP y como condicion que el campo fotoP sea igual al $data['fotoP'] que se esta subiendo y se realiza una busqueda en base al archivo que se está subiendo */
            $isUnique = $this->find('first',array('fields' => array('Proyecto.fotoP'), 
                'conditions' => array( 'Proyecto.fotoP'=> $data['fotoP'])));

            // si no esta vacio isUnique es porque el campo esta repetido entonces salta el mensaje de que "la imagen ya existe", sino devuelve true porque esta vacia
            if(!empty($isUnique))
            {
                return false;
            }
            else{
                return true;
            }
        }



	}

?>