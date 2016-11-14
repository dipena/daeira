 <?php $this->Html->css('detalles', array("inline"=>false));?>


<div class="container">
	<div class="row">
  		<div class="col-xs-12 col-md-6 col-md-offset-1 col-lg-6 col-lg-offset-1">	
  			<p class="list"><?php echo __('Add news');?></p>	
		    <div class="panel-body">


				<?php echo $this->Form->create('Noticia',array(
						'inputDefaults' => array(
							'div' => 'form-group',
							'label' => array(
								'class' => 'col col-sm-3 control-label'
							),
							'wrapInput' => 'col col-sm-9',
							'class' => 'form-control',
						),
						'class' => 'form-horizontal', 'type' => 'file'
				)); ?>

					<?php echo $this->Form->input('tituloN', array('placeholder' => 'Title', 'label' =>'Title')); ?>

					<?php echo $this->Form->input('contenidoN', array( 'type' => 'textarea', 'rows' => '7',
					'placeholder' => 'Content', 'label' => 'Content')); ?>

					<?php echo $this->Form->input('fotoN', array('type' => 'file', 'label' => 'Photo'));?>
					<?php echo $this->Form->input('fotoN_dir', array('type' => 'hidden'));?>


					<div class="row">
						<?php echo $this->Form->submit('Add news', array(
							'class' => 'btn btn-primary pull-left btn_news'
						)); ?>

						<?php echo $this->Html->link(
							' Cancel',array('controller' => 'noticias', 'action' => 'listar'),
							array('class' => 'btn btn-default', 'role' => 'button' , 'escape' => false)
							);
						?>
					</div>
				<?php echo $this->Form->end(); ?>


    		</div>
  		</div>
	</div>
</div>






<!-- para agregar tipos de archivos tipo file "type => file" || no validate-> para que valide los campos desde el modelo-->
<!-- en el atributo "foto dir",como explica la documentacion del plugin, tenemos que renombrarlo como un campo oculto -->
