<?= $this->Html->css(['perfil.css'])?>
<?= $this->Html->script(['perfil.js']) ?>
<div class="container">
      <div class="row">
    
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
   
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">INFORMACION PERSONAL</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User" src="/img/perfil-default.png"  class="img-circle img-responsive"> </div>
              
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>ROLE:</td>
                        <td><?php echo $user->role ?></td>
                      </tr>
                      <tr>
                        <td>NOMBRE:</td>
                        <td><?php echo $user->first_name ?></td>
                      </tr>
                      <tr>
                        <td>Fecha de Creacion:</td>
                        <td><?php echo $user->created?></td>
                      </tr>                      
                      <tr>
                          
                      <tr>
                        <td>Email</td>
                        <td><?php echo $user->email ?></td>
                      </tr>
                        <td>NUMERO TELEFONICO:</td>
                        <td>123-4567-890(Landline)
                        </td>
                           
                      </tr>
                     
                    </tbody>
                  </table>
                  
                </div>
              </div>
            </div>
             <div class="panel-heading">
              <h3 class="panel-title">CAMBIO CONTRASEÑA</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Contraseña:</td>
                        <td>???????</td>
                      </tr>
                      <tr>
                        <td>Nueva Contraseña:</td>
                        <td>06/23/2013</td>
                      </tr>
                      <tr>
                        <td>Confirmar Nueva Contraseña:</td>
                        <td>01/24/1988</td>
                      </tr>
                     
                    </tbody>
                  </table>
                  
                  <a href="#" class="btn btn-primary">Cambiar Contraseña</a>
                  </div>
              </div>
            </div>
            
            
          </div>
        </div>
      </div>
    </div>