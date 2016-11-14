<?php


	$this->Paginator->options(array(
			'update' => '#contenedorSoftwares',
			'before' => $this->Js->get('#procesando')->effect('fadeIn', array('buffer' => false)),
			'complete' => $this->Js->get('#procesando')->effect('fadeOut',array('buffer' => false))
		));

?>
	<!-- ^^^^^^^^ explicacion del codigo superior ^^^^^ -->
	<!-- aqui ponemos lo que queremos que nos muestre -->
	<!--cada vez que vaya paginando nos va mostrando una barra de progreso-->
	<!--aparece y desaparece la barra de progreso-->




<div class="container">
	<div class="row">

    <div id="contenedorSoftwares">
		    <div class="col-xs-12 col-md-8 col-md-offset-1 col-lg-6 col-lg-offset-2">
				<h2 class="list_softwares">List softwares</h2>
        <div>
          <?php echo $this->Html->link(
            $this->Html->tag('span','',array('class' => 'glyphicon glyphicon-plus-sign')).' Software',
            array('controller' => 'softwares', 'action' => 'nuevo'),
            array('class' => 'btn btn-success add_software', 'role' => 'button' , 'escape' => false)
            );
          ?>
        </div>

        <!-- progress bar  -->
        <div class="progress oculto" id="procesando">
            <div class="progress-bar progress-bar-striped active" role="progressbar"
                 aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"
                 style="width: 100%">

            </div>
        </div>

          <?php foreach($softwares as $software): ?>
					<div class="col-xs-12 col-md-4 col-lg-4">
							<div class="software">
		              <img class="img_software img-responsive" src="/daeira/app/webroot/img/software_icon.jpg">

	                <h4 class="name_software"><?php echo $software['Software']['nombre_Sw'];?></h4>

									 <div class="actions">

		 											<div class="buttons_software">

                              <?php echo $this->Html->link(
                                $this->Html->tag('span','',array('class' => 'glyphicon glyphicon-zoom-in')),
                                array('controller' => 'softwares', 'action' => 'ver', $software['Software']['id']),
                                array('class' => 'btn btn-default', 'role' => 'button' , 'escape' => false)
                                );
                              ?>

                              <?php echo $this->Html->link(
                                $this->Html->tag('span','',array('class' => 'glyphicon glyphicon-pencil')),
                                array('controller' => 'softwares', 'action' => 'editar', $software['Software']['id']),
                                array('class' => 'btn btn-primary btn_edit', 'role' => 'button' , 'escape' => false)
                                );
                              ?>

                                <?php echo $this->Form->postLink(
                                  $this->Html->tag('span','',array('class' => 'glyphicon glyphicon-trash')), array('controller'=> 'softwares','action' => 'eliminar', $software['Software']['id']),
                                  array('class' => 'btn btn-danger', 'role' => 'button', 'confirm' => 'Are you sure delete ' .'"'.$software['Software']['nombre_Sw'].'" ?','escape' => false ),
                                  array()); ?>
		 											</div>
		 							</div>
							</div>
              <div class="visible">
                <?php
                  if($software['Software']['visible'] == 0){
            echo $this->Html->link($this->Html->tag('span','',array('class' => 'glyphicon glyphicon-eye-close gly_eye')),array('controller' => 'softwares', 'action' => 'visible', $software['Software']['id']),array( 'escape' => false)
            );

                  }else{
            echo $this->Html->link($this->Html->tag('span','',array('class' => 'glyphicon glyphicon-eye-open gly_eye')),array('controller' => 'proyectos', 'action' => 'visible', $software['Software']['id']),array( 'escape' => false)
            );

                  }

        ?>

              </div>

					</div>
        <?php endforeach;?>

        <!-- paginador e informacion sobre numero de elementos -->
        <div class="row">
          <div>
            <?php
              echo $this->Paginator->counter(array(
                'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}' )

              ));
            ?>
          </div>

          <!-- paginador -->
          <ul class="pagination pagination-sm">
              <li>
                <?php echo $this->Paginator->prev('<', array('tag' => false), null, array('class' => 'prev disabled')); ?>
              </li>

              <?php echo $this->Paginator->numbers(array('separator' => ' ', 'tag' => 'li', 'currentTag' => 'a', 'currentClass' => 'active'));?>

              <li>
                <?php echo $this->Paginator->next('>' , array('tag' => false), null, array('class' => 'next disabled')); ?>
              </li>


          </ul>

        </div>
	     </div><!--col xs-->

       <!-- necesario llamarlo para generar el efecto y la barra de progreso -->
       <?php echo $this->Js->writeBuffer(); ?>
     </div><!--contenedorSoftwares-->

  </div>
</div>
