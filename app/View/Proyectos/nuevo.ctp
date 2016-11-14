 <?php $this->Html->css('detalles', array("inline"=>false));?>


<div class="container">
	<div class="row">
  		<div class="col-xs-12 col-md-6 col-md-offset-1 col-lg-6 col-lg-offset-1">	
  			<p class="list"><?php echo __('Add project');?></p>		
		    <div class="panel-body">


				<?php echo $this->Form->create('Proyecto', array(
						'inputDefaults' => array(
							'div' => 'form-group',
							'label' => array(
								'class' => 'col col-sm-3 control-label'
							),
							'wrapInput' => 'col col-sm-9',
							'class' => 'form-control'
						),
						'class' => 'form-horizontal' , 'type' => 'file'
				)); ?>

					<?php echo $this->Form->input('tituloP', array('placeholder' => 'Title', 'label' =>'Title')); ?>

					<?php echo $this->Form->input('acronimoP', array('placeholder' => 'Acronym', 'label' =>'Acronym')); ?>

					<?php echo $this->Form->input('resumenP', array( 'type' => 'textarea', 'rows' => '3',
					'placeholder' => 'Summary', 'label' => 'Summary')); ?>

					<?php echo $this->Form->input('descripcionP', array( 'type' => 'textarea', 'rows' => '7',
					'placeholder' => 'Description', 'label' => 'Description')); ?>

					<?php echo $this->Form->input('colaboradorP', array('placeholder' => 'Contributors', 'label' =>'Contributors')); ?>

					<?php echo $this->Form->input('fotoP', array('type' => 'file', 'label' => 'Photo', 'required' =>'false'));?>
					<?php echo $this->Form->input('fotoP_dir', array('type' => 'hidden'));?>


					<div class="row">
						<?php echo $this->Form->submit('Add proyect', array(	
							'class' => 'btn btn-primary pull-left btn_project'
							)); 
						?>

						<?php echo $this->Html->link(
							' Cancel',array('controller' => 'proyectos', 'action' => 'listar'),
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
<!-- en el atributo "fotoP_dir",como explica la documentacion del plugin, tenemos que renombrarlo como un campo oculto -->
