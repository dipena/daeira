
	<div class="row">

		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item active">
                        <img class="img_slide" src="/daeira/app/webroot/img/carousel/1.jpg" alt="First slide">
                        <div class="carousel-caption">
                            <h3>
                               </h3> <!-- si queremos añadir letra dentro de las imagenes -->
                            <p>
                                </p>
                        </div>
                    </div>
                    <div class="item">
                        <img class="img_slide" src="/daeira/app/webroot/img/carousel/2.jpg" alt="Second slide">
                        <div class="carousel-caption">
                            <h3>
                                </h3>
                            <p>
                                </p>
                        </div>
                    </div>
                    <div class="item">
                        <img class="img_slide" src="/daeira/app/webroot/img/carousel/3.jpg" alt="Third slide">
                        <div class="carousel-caption">
                            <h3>
                                </h3>
                            <p>
                                </p>
                        </div>
                    </div>
                </div>
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                    <span class="icon-prev"></span>
                </a>
                 <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">

                 <span class="icon-next"></span>

                </a>
        </div>

    </div>
    <br>

<!-- listado de proyectos -->




		<div class="row">


			<?php foreach ($noticias as $noticia): ?>

			<div class="col-xs-12 news grow">
				<div class="col-xs-12 col-sm-3 col-md-3">

		             <?php echo $this->Html->link($this->Html->image('../files/noticia/fotoN/' . $noticia['Noticia']['fotoN_dir'] . '/' . $noticia['Noticia']['fotoN'],array('class' => 'img-responsive img-thumbnail img-rounded img_news')), array('controller' => 'noticias', 'action' => 'view_public', $noticia['Noticia']['id']),array('escape' => false));?>

		       </div>
			    <div class="col-xs-12 col-sm-9 col-md-9">
			        <div class="list-group info_news">
			            <div class="list-group-item content_news">



		                   <h4> <?php echo $this->Html->link($noticia['Noticia']['tituloN'],
							array('controller' => 'noticias', 'action' => 'view_public',$noticia['Noticia']['id']),
							array('class' => 'title_news', 'escape' => false)
							);
						?></h4>

		                    <span class="glyphicon glyphicon-time"></span> <?php echo $this->Time->format('d-m-Y ', $noticia['Noticia']['created']); ?>

		                     <div class="text_news">

		                     <?php

								$length = 220;
							    $content = $noticia['Noticia']['contenidoN'];

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
		                     		<?php echo $this->Html->link(
								'Continue reading >>',array('controller' => 'noticias', 'action' => 'view_public', $noticia['Noticia']['id']),
								array( 'class' => 'link_news', 'escape' => false)
								);
							?>

		                     </div>




			        	</div>

			   		 </div>

				</div>
		</div>

			<?php endforeach;?>





		</div>
	</div>
