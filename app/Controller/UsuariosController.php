<?php

App::uses('AppController' , 'Controller');

	class UsuariosController extends AppController
	{
		var $name = 'Usuarios';
    	var $components = array('Auth'); //No es necesario si se declaro en el app controller

		 /**
	     *  El AuthComponent proporciona la funcionalidad necesaria
	     *  para el acceso (login), por lo que se puede dejar esta función en blanco.
	     */
	    function login() {
	    }

	    function logout() {
	        $this->redirect($this->Auth->logout());
	    }
	}

?>