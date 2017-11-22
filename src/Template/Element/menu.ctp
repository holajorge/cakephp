<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><?= $this->Html->link('Aprendiendo', ['controller' => 'Users' , 'action' => 'index'],['class' => 'navbar-brand'])?></a>
    </div>
    <?php if(isset($current_user)): ?>

      <ul class="nav navbar-nav">      
        <?php if($current_user['role'] == 'admin'):?>  
          <li><?= $this->Html->link('lista de Usuarios', ['controller' => 'Users' , 'action' => 'index'])?></li>
          <li><?= $this->Html->link('Agregar Usuario', ['controller' => 'Users' , 'action' => 'add'])?></li>
        <?php endif;?>
        <li><?= $this->Html->link('Mi lista', ['controller' => 'bookmarks', 'action' => 'index'])?></li>
      </ul>

      <ul class="nav navbar-nav navbar-right"> 
        <li><a href="#"><span class="glyphicon glyphicon-user"></span><?php echo $current_user['first_name']?></a></li>
        <li><?= $this->Html->link('salir', ['controller' => 'Users' , 'action' => 'logout'])?></li>
      </ul>
    <?php else: ?>
      <ul class="nav navbar-nav navbar-right">
        <li><?= $this->Html->link('Registrarse', ['controller' => 'Users' , 'action' => 'add'])?></li>
      </ul>
    <?php endif; ?>
  </div>
</nav>