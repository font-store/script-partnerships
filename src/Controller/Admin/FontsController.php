<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Fonts Controller
 *
 * @property \App\Model\Table\FontsTable $Fonts
 *
 * @method \App\Model\Entity\Font[] paginate($object = null, array $settings = [])
 */
class FontsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $fonts = $this->paginate($this->Fonts);

        $this->set(compact('fonts'));
        $this->set('_serialize', ['fonts']);
    }

    /**
     * View method
     *
     * @param string|null $id Font id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $font = $this->Fonts->get($id, [
            'contain' => ['Partnerships']
        ]);

        $this->set('font', $font);
        $this->set('_serialize', ['font']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $font = $this->Fonts->newEntity();
        if ($this->request->is('post')) {
            $font = $this->Fonts->patchEntity($font, $this->request->getData());
            if ($this->Fonts->save($font)) {
                $this->Flash->success(__('The font has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The font could not be saved. Please, try again.'));
        }
        $this->set(compact('font'));
        $this->set('_serialize', ['font']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Font id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $font = $this->Fonts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $font = $this->Fonts->patchEntity($font, $this->request->getData());
            if ($this->Fonts->save($font)) {
                $this->Flash->success(__('The font has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The font could not be saved. Please, try again.'));
        }
        $this->set(compact('font'));
        $this->set('_serialize', ['font']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Font id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $font = $this->Fonts->get($id);
        if ($this->Fonts->delete($font)) {
            $this->Flash->success(__('The font has been deleted.'));
        } else {
            $this->Flash->error(__('The font could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
