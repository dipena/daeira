
<div class="container">
	<div class="row">
        <!-- noticia principal -->
        <div class="col-xs-12 col-md-8 col-sm-8 col-lg-8">

          <div class="news_details">
              <div class="t_news">

                <?php echo $noticia['Noticia']['tituloN']?>
                
              </div>

              <div class="date">

                <span class="glyphicon glyphicon-time" ></span> <?php echo $this->Time->format('d-m-Y ', $noticia['Noticia']['created']); ?>
              
                
              </div>
                <?php echo $this->Html->image('../files/noticia/fotoN/' . $noticia['Noticia']['fotoN_dir'] . '/' . $noticia['Noticia']['fotoN'],array('class' => 'img-responsive news_image'));?>
              
                
                  
                  
              <div class="content_news">
                  <?php 
                      $txt= $noticia['Noticia']['contenidoN'];

                      echo  nl2br($txt);?> <!--mostrar texto con los saltos de linea guardados en la bd-->

              </div>

           
          </div>

        </div>

        <!-- mas noticias -->

        <div class="col-xs-12 col-md-4 col-sm-4 col-lg-4">
          
          
          <h3>More news</h3>
          <?php 

          $news= $noticia['Noticia']['id'];
          
           foreach ($noticias as $noticia): 
              if ($noticia['N']['id'] != $news) {?>

                 <ul class="media-list box_minN">
                    <li class="media">
                        <a class="pull-left" href="#">
                          

                            <?php echo $this->Html->link($this->Html->image('../files/noticia/fotoN/' . $noticia['N']['fotoN_dir'] . '/' . $noticia['N']['fotoN'],array('class' => 'img-responsive img_minN')), array('controller' => 'noticias', 'action' => 'view_public', $noticia['N']['id']),array('class' => 'pull-left', 'escape' => false));?>
                         </a>

                         <div class="media-body">
                              <h4 class="media-heading title_minN">

                              <?php 


                                  $length = 50;
                                  $tit = $noticia['N']['tituloN'];
                                    
                                  if( strlen($tit) > $length){
                                      
                                      $tit = substr($tit, 0, $length);

                                      $limit = strrpos($tit, " ");
                                      $tit = substr($tit, 0, $limit);
                                      $tit.="...";

                                      echo $this->Html->link($tit, array('controller' => 'noticias', 'action' => 'view_public',$noticia['N']['id']), array('escape' => false) );
                                    }else{

                                     echo $this->Html->link($tit,array('controller' => 'noticias', 'action' => 'view_public',$noticia['N']['id']), array('escape' => false) );
                                      
                                    }

                                    ?>
    
   

                             </h4>

                              <div class="date">
                                  <span class="glyphicon glyphicon-time " "></span> <?php echo $this->Time->format('d-m-Y ', $noticia['N']['created']); ?>
                            </div>
                        </div>
                   </li>
            
                </ul>



              <?php }else{}
           
              endforeach;
          ?>
         



        </div>

    </div>
</div>
		