<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><?= $this->Html->link('Aprendiendo', ['controller' => 'Users' , 'action' => 'index'],['class' => 'navbar-brand'])?></a>
    </div>
    <ul class="nav navbar-nav">      
      <li><?= $this->Html->link('lista de Usuarios', ['controller' => 'Users' , 'action' => 'index'])?></li>
      <li><?= $this->Html->link('Agregar Usuario', ['controller' => 'Users' , 'action' => 'add'])?></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><?= $this->Html->link('Login', ['controller' => 'Users' , 'action' => 'login'])?> </li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>