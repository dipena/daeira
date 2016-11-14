<?php


	$this->Paginator->options(array(
			'update' => '#publicProjects',
			'before' => $this->Js->get('#loading')->effect('fadeIn', array('buffer' => false)),
			'complete' => $this->Js->get('#loading')->effect('fadeOut',array('buffer' => false))
		));

?>
	<!-- ^^^^^^^^ explicacion del codigo superior ^^^^^ -->
	<!-- aqui ponemos lo que queremos que nos muestre -->
	<!--cada vez que vaya paginando nos va mostrando una barra de progreso-->
	<!--aparece y desaparece la barra de progreso-->


	<div class="row">

		<div class="col-xs-12">
			<div class="intro">

				Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.Expetenda tincidunt in sed, ex partem placerat sea, porro commodo ex eam. His putant aeterno interesset at. Usu ea mundi tincidunt, omnium virtute aliquando ius ex. Ea aperiri sententiae duo. Usu nullam dolorum quaestio ei, sit vidit facilisis ea. Per ne impedit iracundia neglegentur. Consetetur neglegentur eum ut, vis animal legimus inimicus id.<br><br>

				His audiam deserunt in, eum ubique voluptatibus te. In reque dicta usu. Ne rebum dissentiet eam, vim omnis deseruisse id. Ullum deleniti vituperata at quo, insolens complectitur te eos, ea pri dico munere propriae. Vel ferri facilis ut, qui paulo ridens praesent ad. Possim alterum qui cu. Accusamus consulatu ius te, cu decore soleat appareat usu.
				Est ei erat mucius quaeque. Ei his quas phaedrum, efficiantur mediocritatem ne sed, hinc oratio blandit ei sed. Blandit gloriatur eam et. Brute noluisse per et, verear disputando neglegentur at quo. Sea quem legere ei, unum soluta ne duo. Ludus complectitur quo te, ut vide autem homero pro.<br><br>

				Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.Expetenda tincidunt in sed, ex partem placerat sea, porro commodo ex eam. His putant aeterno interesset at. Usu ea mundi tincidunt, omnium virtute aliquando ius ex. Ea aperiri sententiae duo. Usu nullam dolorum quaestio ei, sit vidit facilisis ea. Per ne impedit iracundia neglegentur. Consetetur neglegentur eum ut, vis animal legimus inimicus id.
				Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.Expetenda tincidunt in sed, ex partem placerat sea, porro commodo ex eam. His putant aeterno interesset at. Usu ea mundi tincidunt, omnium virtute aliquando ius ex. Ea aperiri sententiae duo. Usu nullam dolorum quaestio ei, sit vidit facilisis ea. Per ne impedit iracundia neglegentur. Consetetur neglegentur eum ut, vis animal legimus inimicus id.<br><br>



			</div>
		</div>
	</div>

	<div class="row">

			<div  id="publicProjects">
				<div class="col-xs-12">
					<div class="list_projects">
					LIST PROJECTS
					</div>
				</div>




			<div class="progress oculto" id="loading">
			  <div class="progress-bar progress-bar-striped active" role="progressbar"
			       aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"
			       style="width: 100%">

			  </div>
		</div>

		<?php foreach ($proyectos as $proyecto): ?>
		<div class="col-xs-12 col-md-6 col-sm-6 col-lg-4 project grow">
			<div class="box_project">

				<div class="content_project">



						 <?php
							if(!empty($proyecto['Proyecto']['fotoP'])){


						 		echo $this->Html->image('../files/proyecto/fotoP/' . $proyecto['Proyecto']['fotoP_dir'] . '/' . $proyecto['Proyecto']['fotoP'],array('class' => 'img-responsive img-circle img_box', 'escape' => 'false'));
						 	}else{}


						 ?>




					<div class="info">
						<div class="title_project"><?php echo $proyecto['Proyecto']['tituloP'];?></div>

						<div class="more_info">
							<b>Acronym: </b><?php echo $proyecto['Proyecto']['acronimoP'];?><br>

							<b>Contributors: </b><?php echo $proyecto['Proyecto']['colaboradorP'];?>
						</div>

					</div>


					<!-- <?php echo $this->Html->link('read more',
						array('controller' => 'proyectos', 'action' => 'ver', $proyecto['Proyecto']['id']),
						array('class' => 'btn btn-primary btn_project','data-toggle' => 'modal','data-target'=>'#windowP', 'role' => 'button' , 'escape' => false)
						);
					?> -->

					<button type="button" class="btn btn-primary btn_project" data-toggle="modal" data-target="#windowP">read more</button>
					<div class="modal fade" id="windowP" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">

						<div class="modal-dialog">
							<div class="modal-content"><!--contenido de la ventana modal-->


									<div class="modal-header">
										<h3><?php echo $proyecto['Proyecto']['tituloP'];?></h3>
										<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>

									</div>

									<div class="modal-body descriptionP">
										<!-- aqui va la descripcion del proyecto -->
										<?php
										 	$txt = $proyecto['Proyecto']['descripcionP'];
											echo  nl2br($txt);?>
									</div>

							</div>

						</div>

					</div>



				</div>


			</div>

   		 </div>
    	<?php endforeach; ?>


    	<!-- paginador -->
	<ul class="pagination pagination-sm paginadorP_public">
		  <li>
		  	<?php echo $this->Paginator->prev('<', array('tag' => false), null, array('class' => 'prev disabled')); ?>
		  </li>

		  <?php echo $this->Paginator->numbers(array('separator' => ' ', 'tag' => 'li', 'currentTag' => 'a', 'currentClass' => 'active'));?>

		  <li>
		  	<?php echo $this->Paginator->next('>' , array('tag' => false), null, array('class' => 'next disabled')); ?>
		  </li>


 	</ul>

 	<!-- necesario llamarlo para generar el efecto y la barra de progreso -->
	<?php echo $this->Js->writeBuffer(); ?>

	</div><!--public projects-->

</div><!--row-->
