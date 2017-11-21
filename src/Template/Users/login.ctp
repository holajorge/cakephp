
<?= $this->Html->css('login.css') ?>
<div class = "container">
	<div class="wrapper">
	
		<?= $this->Flash->render('auth')?>
		<div class="form-signin">
		<?= $this->Form->create() ?>
		<fieldset>
		<!-- <form action="" method="post" name="Login_Form" class="form-signin">        -->

		    <h3 class="form-signin-heading">Bienvenido! Inicie session</h3>  
			  <hr class="colorgraph"><br>
			  
			 <!--  <input type="text" class="form-control" name="Username" placeholder="Username" required="" autofocus="" /> -->
			 <div class="form-control">
			  <?= $this->Form->input('email', ['class' => 'form-control', 'placeholder' => 'Correo Electronico','label' => false, 'required'])?>
			 </div>
			  <!-- <input type="password" class="form-control" name="Password" placeholder="Password" required=""/>     		   -->
			 <div class="form-control">
			  <?= $this->Form->input('password', ['type' => 'password','class' => 'form-control', 'placeholder' => 'Contraseña', 'label' => false, 'require' ])?>			 
			 <div>
			  <!-- <button class="btn btn-lg btn-primary btn-block"  name="Submit" value="Login" type="Submit">Login</button>  			 -->
			 <div class="row">
			  	<div class="col-xs-6 col-sm-6 col-md-6">
			   	  <?= $this->Form->button('Acceder', ['class' => 'btn btn-lg btn-success btn-block'])?>	
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6">
			   	  <?= $this->Html->link('registrar',['controller' => 'Users' , 'action' => 'add'], ['class' => 'btn btn-lg btn-primary btn-block'])?>	
				</div>
			 </div>
		<!-- </form>	 -->
		</fieldset>	
		<?= $this->Form->end() ?>	
		</div>
	</div>
</div>