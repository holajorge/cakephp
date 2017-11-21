
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="page-header">
            <h2>Crear usuario</h2>
        </div>
        <?= $this->Form->create($user, ['novalidate']) ?>
        <fieldset>
         <?php
            echo $this->Form->control('first_name', ['label' => 'nombre']);
            echo $this->Form->control('email', ['label' => 'Correo Electronico']);
            echo $this->Form->control('password', ['label' => 'Contraseña']);
            echo $this->Form->select('role', ['userio', 'administrador'], ['empty' => 'Type User', 'required' => true, 'default' => '']);            
            echo $this->Form->control('active', ['required' => true]);
         ?>
        </fieldset>
        <?= $this->Form->button('Crear', ['class' => 'btn btn-mg btn-primary']) ?>
        <?= $this->Form->end() ?>
    </div>
</div>