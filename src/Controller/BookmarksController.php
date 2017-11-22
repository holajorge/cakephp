<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Bookmarks Controller
 *
 * @property \App\Model\Table\BookmarksTable $Bookmarks
 *
 * @method \App\Model\Entity\Bookmark[] paginate($object = null, array $settings = [])
 */
class BookmarksController extends AppController
{

    public function isAuthorized($user)
    {

        if (isset($user['role']) and $user['role'] === 'user') {
            # code...
            if (in_array($this->request->action, ['add','index'])) {
                # code...
                return true;
            }
            if (in_array($this->request->action, ['edit', 'delete'])) {
                # code...
                $id = $this->request->param['pass'][0];
                $bookmark = $this->Bookmarks->get($id);

                if ($bookmark->user_id == $user['id']) {
                    # code...
                    return true;
                }
            }
        }
        return parent::isAuthorized($user);
    }

    public function index()
    {
        $this->paginate = [
            'conditions' => ['user_id' => $this->Auth->user('id') ],
            'order' => ['id' => 'desc']
        ];

        $this->set('bookmarks', $this->paginate($this->Bookmarks));
    }


    public function add()
    {
        $bookmark = $this->Bookmarks->newEntity();
        if ($this->request->is('post')) {
            $bookmark = $this->Bookmarks->patchEntity($bookmark, $this->request->getData());

            $bookmark->user_id = $this->Auth->user('id');
            if ($this->Bookmarks->save($bookmark)) {
                $this->Flash->success('se creo correctamente.');

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error('el enlace no se pudo crear, intente de nuevo');
        }
       
        $this->set(compact('bookmark'));
        
    }

    /**
     * Edit method
     *
     * @param string|null $id Bookmark id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $bookmark = $this->Bookmarks->get($id);

        if ($this->request->is(['patch', 'post', 'put']))
        {
            $bookmark = $this->Bookmarks->patchEntity($bookmark, $this->request->data);
            $bookmark->user_id = $this->Auth->user('id');
            
            if ($this->Bookmarks->save($bookmark))
            {
                $this->Flash->success('El enlace ha sido actualizado.');
                return $this->redirect(['action' => 'index']);
            }
            else
            {
                $this->Flash->error('El enlace no pudo ser eliminado. Por favor, intente nuevamente');
            }
        }
        $this->set(compact('bookmark'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Bookmark id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $bookmark = $this->Bookmarks->get($id);
        if ($this->Bookmarks->delete($bookmark)) {
            $this->Flash->success(__('The bookmark has been deleted.'));
        } else {
            $this->Flash->error(__('The bookmark could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
