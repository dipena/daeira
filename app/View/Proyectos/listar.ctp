<?php


	$this->Paginator->options(array(
			'update' => '#contenedorProjects',
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

			<div id="contenedorProjects">

				<div class="col-xs-12 col-md-8 col-md-offset-1 col-lg-9 col-lg-offset-1">
					<p class="list">List projects</p>

						<?php echo $this->Html->link(
							$this->Html->tag('span','',array('class' => 'glyphicon glyphicon-plus-sign')).' Project',
							array('controller' => 'proyectos', 'action' => 'nuevo'),
							array('class' => 'btn btn-success add', 'role' => 'button' , 'escape' => false)
							);
						?>



						<div class="progress oculto" id="procesando">
							  <div class="progress-bar progress-bar-striped active" role="progressbar"
							       aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"
							       style="width: 100%">

							  </div>
						</div>


						<table class="table table-responsive table-hover">
							 <thead>
					                <tr class="list_titles">
					                  <th></th>
					                  <th><?php echo $this->Paginator->sort('tituloP','Title');?></th>
					                  <th class="hidden-xs"><?php echo $this->Paginator->sort('acronimoP','Acronym');?></th> <!-- ocultamos el acronimo en tamaño xs(movil) -->
					                  <th><?php echo $this->Paginator->sort('created','Created');?></th>
					                  <th>Actions</th>

					                </tr>
		              		</thead>
		              		<tbody>
		              			<?php foreach ($proyectos as $proyecto): ?>
		              			<tr>
		              				<td>
		              					<?php
		              						if($proyecto['Proyecto']['visible'] == 0){
																			echo $this->Html->link($this->Html->tag('span','',array('class' => 'glyphicon glyphicon-eye-close gly_eye')),array('controller' => 'proyectos', 'action' => 'visible', $proyecto['Proyecto']['id']),array( 'escape' => false)
																			);

		              						}else{
																			echo $this->Html->link($this->Html->tag('span','',array('class' => 'glyphicon glyphicon-eye-open gly_eye')),array('controller' => 'proyectos', 'action' => 'visible', $proyecto['Proyecto']['id']),array( 'escape' => false)
																			);

		              						}

										?>



		              				</td>
									<td>

										<?php

											$length = 80;
										    $content = $proyecto['Proyecto']['tituloP'];

										    if( strlen($content) > $length){

										    	$content = substr($content, 0, $length);

										    	$mark = strrpos($content, " ");
										    	$content = substr($content, 0, $mark);
										    	$content.="...";

										    	echo $content;
										    }else{

										     	echo $content;

								    }
								    ?>
									</td>
									<td><?php echo $proyecto['Proyecto']['acronimoP'];?></td>

									<td><?php echo $this->Time->format('d-m-Y  H:i:s ', $proyecto['Proyecto']['created']); ?></td>
									<td>

									<?php echo $this->Html->link(
										$this->Html->tag('span','',array('class' => 'glyphicon glyphicon-zoom-in')),
										array('controller' => 'proyectos', 'action' => 'ver', $proyecto['Proyecto']['id']),
										array('class' => 'btn btn-default btn-sm', 'role' => 'button' , 'escape' => false)
										);
									?>

									<?php echo $this->Html->link(
										$this->Html->tag('span','',array('class' => 'glyphicon glyphicon-pencil')),
										array('controller' => 'proyectos', 'action' => 'editar', $proyecto['Proyecto']['id']),
										array('class' => 'btn btn-primary btn-sm btn_edit', 'role' => 'button' , 'escape' => false)
										);
									?>

										<?php echo $this->Form->postLink(
											$this->Html->tag('span','',array('class' => 'glyphicon glyphicon-trash')), array('controller'=> 'proyectos','action' => 'eliminar', $proyecto['Proyecto']['id']),
											array('class' => 'btn btn-danger btn-sm', 'role' => 'button', 'confirm' => 'Are you sure delete ' .'"'.$proyecto['Proyecto']['tituloP'].'" ?','escape' => false ),
											array()); ?>
									</td>
		              			</tr>

								<?php endforeach;?>
		              		</tbody>

						</table>

						<!-- paginador e informacion sobre numero de elementos -->
						<div>
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


				</div><!--colxs-->


				<!-- necesario llamarlo para generar el efecto y la barra de progreso -->
				<?php echo $this->Js->writeBuffer(); ?>



			</div><!--contenedor proyectos-->

	</div>

</div>
