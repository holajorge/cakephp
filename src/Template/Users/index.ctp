

<div class="row">
 <div class="col-md-12">
    <div class="page-header">
        <h2>Usuarios</h2>
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('#') ?></th>
                    <th><?= $this->Paginator->sort('first_name', ['Nombre']) ?></th>
                    <th><?= $this->Paginator->sort('email',['Correo Electronico']) ?></th>                                   
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= $this->Number->format($user->id) ?></td>
                    <td><?= h($user->first_name) ?></td>
                    <td><?= h($user->email) ?></td>
                    
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $user->id], ['class' => 'btn btn-sm btn-info']) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id], ['class' => 'btn btn-sm btn-primary']) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id),  'class' => 'btn btn-sm btn-danger']) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< Anterior') ?>
            <?= $this->Paginator->numbers(['before' => '' , 'after' => '']) ?>
            <?= $this->Paginator->next('Seguiente >') ?>            
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
 </div>
</div>
