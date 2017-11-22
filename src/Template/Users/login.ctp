
<?= $this->Html->css('login.css') ?>
<div class = "container">
	<div class="wrapper">

		<?= $this->Flash->render('auth')?>
		<div class="form-signin">
			<?= $this->Form->create() ?>
			<fieldset>

				<h3 class="form-signin-heading">Bienvenido! Inicie session</h3>  
				<hr class="colorgraph"><br>

				<?= $this->Form->input('email', ['class' => 'form-control', 'placeholder' => 'Correo Electronico','label' => false, 'required'])?>					
					
				<?= $this->Form->input('password', ['type' => 'password','class' => 'form-control', 'placeholder' => 'Contraseña', 'label' => false, 'require' ])?>			 
				
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6">
						<?= $this->Form->button('Acceder', ['class' => 'btn btn-lg btn-success btn-block'])?>	
					</div>
				<div class="col-xs-6 col-sm-6 col-md-6">
					<?= $this->Html->link('registrar',['controller' => 'Users' , 'action' => 'add'], ['class' => 'btn btn-lg btn-primary btn-block'])?>	
				</div>

			</fieldset>	
			<?= $this->Form->end() ?>	
		</div>
	</div>
</div>