<?php
	
//App::uses('AppModel', 'Model');
//App::uses('SimplePasswordHasher' , 'Controller/Component/Auth');
	class Usuario extends AppModel
	{
		public $validate = array(

				'username' => array(
        			'required' => array(
           			 'rule' => array('notEmpty'),
           			 'message' => 'El nombre de usuario es obligatorio'
           		 )
        	),
        		'password' => array(
            		'required' => array( 
                	'rule' => array('notEmpty'),
               		'message' => 'La contraseña es obligatoria'
            	)
       		 )

		);


		public function beforeSave($options = array())
		{
			/*password hashing*/
	        if (isset($this->data[$this->alias]['password'])) 
	        {
	             $this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
        	}
        	return true;
    	}

    

        
	}


?>