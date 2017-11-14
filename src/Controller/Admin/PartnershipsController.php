<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Partnerships Controller
 *
 * @property \App\Model\Table\PartnershipsTable $Partnerships
 *
 * @method \App\Model\Entity\Partnership[] paginate($object = null, array $settings = [])
 */
class PartnershipsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Fonts']
        ];
        $partnerships = $this->paginate($this->Partnerships);

        $this->set(compact('partnerships'));
        $this->set('_serialize', ['partnerships']);
    }

    /**
     * View method
     *
     * @param string|null $id Partnership id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $partnership = $this->Partnerships->get($id, [
            'contain' => ['Fonts', 'Grants']
        ]);

        $this->set('partnership', $partnership);
        $this->set('_serialize', ['partnership']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $partnership = $this->Partnerships->newEntity();
        if ($this->request->is('post')) {
            $partnership = $this->Partnerships->patchEntity($partnership, $this->request->getData());
            if ($this->Partnerships->save($partnership)) {
                $this->Flash->success(__('The partnership has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The partnership could not be saved. Please, try again.'));
        }
        $fonts = $this->Partnerships->Fonts->find('list', ['limit' => 200]);
        $this->set(compact('partnership', 'fonts'));
        $this->set('_serialize', ['partnership']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Partnership id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $partnership = $this->Partnerships->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $partnership = $this->Partnerships->patchEntity($partnership, $this->request->getData());
            if ($this->Partnerships->save($partnership)) {
                $this->Flash->success(__('The partnership has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The partnership could not be saved. Please, try again.'));
        }
        $fonts = $this->Partnerships->Fonts->find('list', ['limit' => 200]);
        $this->set(compact('partnership', 'fonts'));
        $this->set('_serialize', ['partnership']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Partnership id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $partnership = $this->Partnerships->get($id);
        if ($this->Partnerships->delete($partnership)) {
            $this->Flash->success(__('The partnership has been deleted.'));
        } else {
            $this->Flash->error(__('The partnership could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
