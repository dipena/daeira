<?php

$cakeDescription = __d('cake_dev', 'DAEIRA');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
<script
  src="https://code.jquery.com/jquery-3.1.1.js"
  integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="
  crossorigin="anonymous"></script>

<script type="text/javascript">
	// todo lo que esta dentro de ready(function) no se va a ejecutar hasta que todo el documento se haya cargado
	$(document).ready(function(){

		$('.glyphicon.glyphicon-chevron-up.arrowtop').click(function(){
			$('body, html').animate({
				scrollTop: '0px'
			}, 500); //scrollTop hace que al clickar en boton te envia arriba de todo de la pagina y el tiempo que tarda en subir(500ms)
		});

		//cuando el usuario haga scroll en la pagina
		$(window).scroll(function(){
			if($(this).scrollTop() > 150 ){ //si el scroll es mayor que 0 
				$('.glyphicon.glyphicon-chevron-up.arrowtop').slideDown(300);//desaparece la clase en un tiempo determinado (300ms)
			}else{
				$('.glyphicon.glyphicon-chevron-up.arrowtop').slideUp(300);//aparece la clase en un tiempo determinado
			};
		})

	});

</script>

	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css(array('menu_daeira.css','daeira_front', 'bootstrap.min', 'bootstrap-theme.min'));
		echo $this->Html->script(array('jquery.min', 'bootstrap.min'));

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>

		<?php echo $this->element('menu_daeira'); ?>
 
		<?php echo $this->Session->flash(); ?>
		
		<div class="container">
			<?php echo $this->fetch('content'); ?>
			<span class="glyphicon glyphicon-chevron-up arrowtop"></span>
		</div>

		
		
		<div class="container">
			
			<div class="row">
				<div class="col-xs-12 col-md-12 col-lg-12 foot1">
							
	                  <ul class="list-inline">
	                    <li><a href="#">Sitemap</a></li>
	                    <li><a href="javascript:void(0);" onclick="printThisPage()" class="printpage">Print this page</a></li>
	                  </ul>
			
				</div>
					
					<div class="col-xs-6 col-md-6 col-lg-6 foot21">
					<ul class="list-inline">
								
	                	<p>Copyright &copy; 2016 <a href="http://lia.ei.uvigo.es/daeira/home">  daeira.com</a></p> 
	                 </ul>
			
				</div>
				<div class="col-xs-6 col-md-6 col-lg-6 foot22">
							
	               <ul class="list-inline pull-right">
	                  <li><a href="http://validator.w3.org/check?uri=http://lia.ei.uvigo.es/daeira/" target="_blank">
	                          <img src="http://lia.ei.uvigo.es/daeira/assets/img/html_valid.gif" alt="Valid HTML" title="Valid HTML"></a>
	                  </li>
	                  <li><a href="http://jigsaw.w3.org/css-validator/validator?uri=http://lia.ei.uvigo.es/daeira/" target="_blank">
	                          <img src="http://lia.ei.uvigo.es/daeira/assets/img/css_valid.gif" alt="Valid CSS" title="Valid CSS">
	                        </a>
	                  </li>

	                </ul> 

			
				</div>




				
				
				
				</div>

			</div>

	</div>


    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

 
<script src="bootstrap.min.js"></script>

</body>


</html>
