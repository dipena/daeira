 <?php $this->Html->css('detalles', array("inline"=>false));?>


<div class="container">
	<div class="row">
  		<div class="col-xs-12 col-md-6 col-md-offset-1 col-lg-6 col-lg-offset-1">
  			<legend class="text-center" style="font-size: 30px;"><?php echo __('Add software');?></legend>
		    <div class="panel-body">


				<?php echo $this->Form->create('Software', array(
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

					<?php echo $this->Form->input('nombre_Sw', array('placeholder' => 'Name', 'label' =>'Name')); ?>

            <?php echo $this->Html->script('ckeditor/ckeditor');?>
					<?php echo $this->Form->input('descripcion_Sw', array( 'type' => 'textarea','class' =>'ckeditor',
					'placeholder' => 'Description', 'label' => 'Description')); ?>








					<div class="row">
						<?php echo $this->Form->submit('Add software', array(
							'class' => 'btn btn-primary pull-left btn_project'
							));
						?>

						<?php echo $this->Html->link(
							' Cancel',array('controller' => 'softwares', 'action' => 'listar'),
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
