 <?php
    echo $session->flash('auth');
    echo $form->create('Usuario', array('action' => 'login'));
    echo $form->input('username');
    echo $form->input('password');
    echo $form->end('Login');
?>