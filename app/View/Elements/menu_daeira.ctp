<div class="container">
      <div class="row">
        <div>
          <img class="logo_daeira" src="/daeira/app/webroot/img/daeira_logo.png" alt="DAEIRA logo">

        </div>




          <nav class="navbar navbar-default " role="navigation">
            <div class="container-fluid">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-da">
                  <span class="sr-only">Menu</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>

                <a href="#" class="navbar-brand"></a>
              </div>

              <div class="collapse navbar-collapse" id="navbar-da">
                <ul class="nav navbar-nav">
                    <li><?php echo $this->Html->link(
                              'Home',array('controller' => 'proyectos', 'action' => 'index'),
                            array('escape' => false));
                          ?>

                    </li>
                    <li>
                      <?php echo $this->Html->link(
                              'News',array('controller' => 'noticias', 'action' => 'index'),
                            array('escape' => false));
                          ?>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" >Software
                        </a>
                        <ul class="dropdown-menu" role="menu">
                              <li><a href="#">Govocitos</a></li>
                              <li><a href="#">Leucocitos</a></li>

                        </ul>
                      </li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                  </ul>
                  <ul class="nav navbar-nav navbar-right">
                       <li ><a href="#"><span class="glyphicon glyphicon-user"></span></a></li>
                  </ul>
              </div>
            </div>


          </nav>
        </div>
</div>
