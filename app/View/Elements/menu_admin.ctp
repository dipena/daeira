<!--barra superior-->
    <nav class="navbar navbar-inverse navbar-static-top" id="navbar_admin">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><img class="navAdmin_logo" src="/daeira/app/webroot/img/daeira_name.png"></a>

        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

          <ul class="nav navbar-nav navbar-right">
            <li><?php echo $this->Html->link(
                              'Visit DAEIRA',array('controller' => 'proyectos', 'action' => 'index'),
                            array('escape' => false));
                          ?></li>
            <li><a href="http:\\lia.ei.uvigo.es/daeira/"><span class="glyphicon glyphicon-lock"></span> Logout</a></li>


            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
  </nav>

  <!--sidebar-->
  <nav class="navbar navbar-default sidebar" role="navigation">
    <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">

      <ul class="nav navbar-nav">

        <li>

          <?php echo $this->Html->link(
            $this->Html->tag('span','',array('class' => 'glyphicon glyphicon-list-alt hidden-xs showopacity pull-right')).' News',
            array('controller' => 'noticias', 'action' => 'listar'),
            array('escape' => false)
            );
          ?>
        </li>

        <li>
            <?php echo $this->Html->link(
            $this->Html->tag('span','',array('class' => 'glyphicon glyphicon-folder-open hidden-xs showopacity pull-right')).' Projects',
            array('controller' => 'proyectos', 'action' => 'listar'),
            array('escape' => false)
            );
          ?>

        </li>

        <li>

          <?php echo $this->Html->link(
          $this->Html->tag('span','',array('class' => 'glyphicon glyphicon-wrench hidden-xs showopacity pull-right')).' Softwares',
          array('controller' => 'softwares', 'action' => 'listar'),
          array('escape' => false)
          );
        ?>

        </li>

        <li>
          <a href="#">Web Services <span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-link"></span></a>
        </li>

      </ul>

    </div>
  </div>

</nav>
