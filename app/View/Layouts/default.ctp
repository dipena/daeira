<?php

$cakeDescription = __d('cake_dev', 'DAEIRA');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css(array('menu_admin.css','detalles.css','bootstrap.min','bootstrap-theme.min'));

		echo $this->Html->script(array('jquery.min', 'bootstrap.min'));?>


<?php
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>

		<?php echo $this->element('menu_admin'); ?>

		<?php echo $this->Session->flash(); ?>

		<?php echo $this->fetch('content'); ?>

</body>
</html>
