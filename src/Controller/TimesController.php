<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Times Controller
 *
 * @property \App\Model\Table\TimesTable $Times
 *
 * @method \App\Model\Entity\Time[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TimesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $times = $this->paginate($this->Times);

        $this->set(compact('times'));
    }

    /**
     * View method
     *
     * @param string|null $id Time id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $time = $this->Times->get($id, [
            'contain' => ['Artigos'],
        ]);

        $this->set('time', $time);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $time = $this->Times->newEntity();
        if ($this->request->is('post')) {
            $time = $this->Times->patchEntity($time, $this->request->getData());
            if ($this->Times->save($time)) {
                $this->Flash->success(__('The time has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The time could not be saved. Please, try again.'));
        }
        $this->set(compact('time'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Time id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $time = $this->Times->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $time = $this->Times->patchEntity($time, $this->request->getData());
            if ($this->Times->save($time)) {
                $this->Flash->success(__('The time has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The time could not be saved. Please, try again.'));
        }
        $this->set(compact('time'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Time id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $time = $this->Times->get($id);
        if ($this->Times->delete($time)) {
            $this->Flash->success(__('The time has been deleted.'));
        } else {
            $this->Flash->error(__('The time could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
