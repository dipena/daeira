<?php
	class Software extends AppModel
	{


       /*variable que define los comportamientos(define configuración) que va tener el plugin referente al upload de imagenes*/
         public $actsAs= array(
            'Upload.Upload' => array(
                'foto_Sw1' => array(
                    'fields' => array(
                        'dir' => 'foto_Sw_dir1'
                    ),

                    /* cada vez que se actualice imagen que no se quede con la imagen anterior,sino que la borre*/
                    'deleteOnUpdate' => true,
                    /*cada vez que se elimine un registro se elimina la carpeta y la imagen almacenada en ella incluida*/
                    'deleteFolderOnDelete' => true
									),
								'foto_Sw2' => array(
                    'fields' => array(
                        'dir' => 'foto_Sw_dir2'
                    ),

                    /* cada vez que se actualice imagen que no se quede con la imagen anterior,sino que la borre*/
                    'deleteOnUpdate' => true,
                    /*cada vez que se elimine un registro se elimina la carpeta y la imagen almacenada en ella incluida*/
                    'deleteFolderOnDelete' => true
									),
									'foto_Sw3' => array(
	                    'fields' => array(
	                        'dir' => 'foto_Sw_dir3'
	                    ),

	                    /* cada vez que se actualice imagen que no se quede con la imagen anterior,sino que la borre*/
	                    'deleteOnUpdate' => true,
	                    /*cada vez que se elimine un registro se elimina la carpeta y la imagen almacenada en ella incluida*/
	                    'deleteFolderOnDelete' => true
										),
										'foto_Sw4' => array(
		                    'fields' => array(
		                        'dir' => 'foto_Sw_dir4'
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
            'nombre_Sw' => array(
                'rule' => 'notEmpty'
            ),
            'descripcion_Sw' => array(
                'rule' => 'notEmpty'
            ),

             'foto_Sw1' => array(
                 // si existe algun error en la subida de la foto(por ejemplo si el campo de subida es vacio),cada vez que lo creamos
                'uploadError' => array(
                    'rule' => 'uploadError',
                    'message' => 'Something is wrong, please try again',
                    'on' => 'create'
                ),
                // tipos de archivos permitidos en el software
                'isValidMimeType' => array(
                    'rule' => array('isValidMimeType',array('image/jpg','image/jpeg','image/png','image/gif'),false),
                    'message' => 'Image is neither jpg nor png'

                ),

                /*valida extension para subir en un software*/

                'isValidExtension' => array(
                    'rule' => array('isValidExtension',array('jpg','jpeg','png','gif'),false),
                    'message' => 'Image hasnt the jpg, jpeg, png and gif extension'

                )

            ),
						'foto_Sw2' => array(
								// si existe algun error en la subida de la foto(por ejemplo si el campo de subida es vacio),cada vez que lo creamos
							 'uploadError' => array(
									 'rule' => 'uploadError',
									 'message' => 'Something is wrong, please try again',
									 'on' => 'create'
							 ),
							 // tipos de archivos permitidos en el software
							 'isValidMimeType' => array(
									 'rule' => array('isValidMimeType',array('image/jpg','image/jpeg','image/png','image/gif'),false),
									 'message' => 'Image is neither jpg nor png'

							 ),

							 /*valida extension para subir en un software*/

							 'isValidExtension' => array(
									 'rule' => array('isValidExtension',array('jpg','jpeg','png','gif'),false),
									 'message' => 'Image hasnt the jpg, jpeg, png and gif extension'

							 )

					 ),
					 'foto_Sw3' => array(
							 // si existe algun error en la subida de la foto(por ejemplo si el campo de subida es vacio),cada vez que lo creamos
							'uploadError' => array(
									'rule' => 'uploadError',
									'message' => 'Something is wrong, please try again',
									'on' => 'create'
							),
							// tipos de archivos permitidos en el software
							'isValidMimeType' => array(
									'rule' => array('isValidMimeType',array('image/jpg','image/jpeg','image/png','image/gif'),false),
									'message' => 'Image is neither jpg nor png'

							),

							/*valida extension para subir en un software*/

							'isValidExtension' => array(
									'rule' => array('isValidExtension',array('jpg','jpeg','png','gif'),false),
									'message' => 'Image hasnt the jpg, jpeg, png and gif extension'

							)

					),
					'foto_Sw4' => array(
							// si existe algun error en la subida de la foto(por ejemplo si el campo de subida es vacio),cada vez que lo creamos
						 'uploadError' => array(
								 'rule' => 'uploadError',
								 'message' => 'Something is wrong, please try again',
								 'on' => 'create'
						 ),
						 // tipos de archivos permitidos en el software
						 'isValidMimeType' => array(
								 'rule' => array('isValidMimeType',array('image/jpg','image/jpeg','image/png','image/gif'),false),
								 'message' => 'Image is neither jpg nor png'

						 ),

						 /*valida extension para subir en un software*/

						 'isValidExtension' => array(
								 'rule' => array('isValidExtension',array('jpg','jpeg','png','gif'),false),
								 'message' => 'Image hasnt the jpg, jpeg, png and gif extension'

						 )

				 )


         );






	}

?>
