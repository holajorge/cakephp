<?php
namespace App\Controller;

/**
 * User Controller
 *
 */
class UsersController extends AppController {

	public function index() {

		$users = $this->paginate($this->Users);
		$this->set('users', $users);

	}

	public function add() {

		$user = $this->Users->newEntity();

		if ($this->request->is('post')) {
			$user = $this->Users->patchEntity($user, $this->request->data);

			// $user->role = 'user';
			// $user->active = 1;
			if ($this->Users->save($user)) {
				$this->Flash->success('El usuario ha sido creado correctamente.');
				return $this->redirect(['controller' => 'Users', 'action' => 'index']);
			} else {
				$this->Flash->error('El usuario no pudo ser creado. Por favor, intente nuevamente.');
			}
		}
		$this->set(compact('user'));
	}

	public function view($name) {
		echo "vista de usuarios " . $name;
		exit();
	}
}