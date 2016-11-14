 <?php $this->Html->css('detalles', array("inline"=>false));?>

<div class="container">
	<div class="row">
  		<div class="col-xs-12 col-md-6 col-md-offset-1 col-lg-6 col-lg-offset-1">	

  			<p class="list"><?php echo ('Edit project');?></p>			
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
						'class' => 'form-horizontal', 'type' => 'file'
				)); ?>

					<?php echo $this->Form->input('tituloP', array('placeholder' => 'Title', 'label' =>'Title')); ?>

					<?php echo $this->Form->input('acronimoP', array('placeholder' => 'Acronym', 'label' =>'Acronym')); ?>
					
					<?php echo $this->Form->input('resumenP', array( 'type' => 'textarea', 'rows' => '3',
					'placeholder' => 'Summary', 'label' => 'Summary')); ?>

					<?php echo $this->Form->input('descripcionP', array( 'type' => 'textarea', 'rows' => '7',
					'placeholder' => 'Description', 'label' => 'Description')); ?>

					<?php echo $this->Form->input('colaboradorP', array('placeholder' => 'Contributors', 'label' =>'Contributors')); ?>

					<?php echo $this->Form->input('fotoP', array('type' => 'file','required' => 'no required', 'label' => 'Photo'));?>
					<?php echo $this->Form->input('fotoP_dir', array('type' => 'hidden'));?>


					<div class="row row_edit">
						<?php echo $this->Form->submit('Save changes', array(
							'class' => 'btn btn-warning pull-left btn_save'
						)); ?>

						<?php echo $this->Html->link(
							' Cancel',array('controller' => 'proyectos', 'action' => 'listar'),
							array('class' => 'btn btn-default ', 'role' => 'button' , 'escape' => false)
							);
						?>
					</div>



					
				<?php echo $this->Form->end(); ?>


    		</div>
  		</div>

	</div>
</div>
