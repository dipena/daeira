 <?php $this->Html->css('detalles', array("inline"=>false));?>



<div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-8 col-sm-8 col-lg-4">
            <div class="thumbnail">
                  <!-- si hay foto en el proyecto la mostramos sino eliminamos el espacio que ocupa -->
                  <?php if(!empty($proyecto['Proyecto']['fotoP'])){
                   
                      echo $this->Html->image('../files/proyecto/fotoP/' . $proyecto['Proyecto']['fotoP_dir'] . '/' . $proyecto['Proyecto']['fotoP'],array('class' => 'img-responsive img-rounded img_project'));
                  }else{}?>
                 
                <h3 class="title_project"><?php echo $proyecto['Proyecto']['tituloP'];?></h3>

                  <ul class="nav nav-tabs tabsP_admin">
                      <li class="active"><a href="#tab1" data-toggle="tab">Description</a></li>
                      <li><a href="#tab2" data-toggle="tab">+ Info</a></li>
                      <div><?php echo $this->Html->link(
                    $this->Html->tag('span','',array('class' => 'glyphicon glyphicon-pencil pull-right gly_edit')),
                    array('controller' => 'proyectos', 'action' => 'editar',$proyecto['Proyecto']['id']),
                    array('escape' => false)
                    );
                  ?></div>
                  </ul>
                 
                  
                  <div class="tab-content info_project">
                      <div class="tab-pane fade in active" id="tab1">
                        
                         <?php 
                      $txt= $proyecto['Proyecto']['descripcionP'];

                      echo  nl2br($txt);?>

                      </div>
                      <div class="tab-pane fade" id="tab2">
                          
                          <div class="summary_project">

                          <b>Summary</b></div><br/>
                          <?php echo $proyecto['Proyecto']['resumenP'];?><br/><br/>

                          <b>Acronym: </b><?php echo $proyecto['Proyecto']['acronimoP'];?><br/>

                          <b>Created: </b><?php echo $this->Time->format('d-m-Y  H:m:s ', $proyecto['Proyecto']['created']); ?>


                      </div>
                      
                  </div>

             </div>
            <?php echo $this->Html->link(
              $this->Html->tag('span','',array('class' => 'glyphicon glyphicon-chevron-left')).' List news',
              array('controller' => 'proyectos', 'action' => 'listar'),
              array('class' => 'btn btn-primary ver_news', 'role' => 'button' , 'escape' => false)
              );
             ?> 
               
          </div>
          
             
    </div>

</div>


    


    






