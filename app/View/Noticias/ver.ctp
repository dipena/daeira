 <?php $this->Html->css('detalles', array("inline"=>false));?>

<div class="container">
	<div class="row">
            <div class="col-xs-12 col-md-8 col-sm-8 col-lg-7">
              <div class="thumbnail">
                <?php echo $this->Html->image('../files/noticia/fotoN/' . $noticia['Noticia']['fotoN_dir'] . '/' . $noticia['Noticia']['fotoN'],array('class' => 'img-responsive img-rounded img_news'));?>
               
              <div class="date">

                <span class="glyphicon glyphicon-calendar" ></span> <?php echo $this->Time->format('d-m-Y  H:m:s ', $noticia['Noticia']['created']); ?>
                <?php echo $this->Html->link(
                  $this->Html->tag('span','',array('class' => 'glyphicon glyphicon-pencil pull-right gly_edit')),
                  array('controller' => 'noticias', 'action' => 'editar',$noticia['Noticia']['id']),
                  array('escape' => false)
                  );
                ?>
                
              </div>
                
                  <h2 class="titleN"><?php echo $noticia['Noticia']['tituloN']?></h2>
                  
                  <div class="textN">
                     <?php 
                      $txt= $noticia['Noticia']['contenidoN'];

                      echo  nl2br($txt);?> <!--mostrar texto con los saltos de linea guardados en la bd-->

                  </div>

                  
                 
                  
               
              </div>
              <?php echo $this->Html->link(
					$this->Html->tag('span','',array('class' => 'glyphicon glyphicon-chevron-left')).' List news',
					array('controller' => 'noticias', 'action' => 'listar'),
					array('class' => 'btn btn-primary ver_news', 'role' => 'button' , 'escape' => false)
					);
				?>
             
            </div>

        </div>

    </div>
		


    



