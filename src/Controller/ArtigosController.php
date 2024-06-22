<?php

namespace App\Controller;

use App\Controller\AppController;

class ArtigosController extends AppController
{
    public function lista()
    {
        $this->loadModel('Times');

        $conditions = [];

        $this->paginate = [
            'contain' => ['Categorias'],
        ];


        if ($this->request->getQuery('busca') != '') {
            $busca = $this->request->getQuery('busca');
            $conditions[]['OR'] = [
                ['Artigos.titulo LIKE' => '%' . strtolower($busca) . '%'],
                ['Artigos.subtitulo LIKE' => '%' . strtolower($busca) . '%'],
                ['Times.descricao LIKE' => '%' . strtolower($busca) . '%'],
            ];
        }

        $artigos = $this->paginate($this->Artigos, ['contain' => 'Times', 'conditions' => ['OR' => $conditions], 'order' => ['Artigos.created' => 'DESC'], 'limit' => 3]);

        $artigos_recentes = $this->Artigos->find('all', ['contain' => ['Categorias', 'Times'], 'order' => ['Artigos.created' => 'DESC']]);

        $this->set(compact('artigos', 'artigos_recentes'));
    }

    public function maisVisto()
    {
        $artigos = $this->paginate($this->Artigos, ['conditions' => ['Artigos.categoria_id' => 1], 'limit' => 5, 'order' => ['created' => 'DESC']]);
        $artigos_recentes = $this->Artigos
            ->find('all', ['contain' => ['Categorias', 'Times']])
            ->orderDesc('Artigos.created')
            ->toArray();

        $this->set(compact('artigos', 'artigos_recentes'));
    }

    public function noticiasRecentes()
    {
        $artigos = $this->paginate($this->Artigos, ['conditions' => ['Artigos.categoria_id' => 2], 'limit' => 5, 'order' => ['created' => 'DESC']]);
        $artigos_recentes = $this->Artigos
            ->find('all', ['contain' => ['Categorias', 'Times']])
            ->orderDesc('Artigos.created')
            ->toArray();
        $this->set(compact('artigos', 'artigos_recentes'));
    }

    public function brasileirao()
    {
        $artigos = $this->paginate($this->Artigos, ['conditions' => ['Artigos.categoria_id' => 3], 'limit' => 5, 'order' => ['created' => 'DESC']]);
        $artigos_recentes = $this->Artigos
            ->find('all', ['contain' => ['Categorias', 'Times']])
            ->orderDesc('Artigos.created')
            ->toArray();
        $this->set(compact('artigos', 'artigos_recentes'));
    }

    public function copaBrasil()
    {
        $artigos = $this->paginate($this->Artigos, ['conditions' => ['Artigos.categoria_id' => 4], 'limit' => 5, 'order' => ['created' => 'DESC']]);
        $artigos_recentes = $this->Artigos
            ->find('all', ['contain' => ['Categorias', 'Times']])
            ->orderDesc('Artigos.created')
            ->toArray();
        $this->set(compact('artigos', 'artigos_recentes'));
    }

    public function libertadores()
    {
        $artigos = $this->paginate($this->Artigos, ['conditions' => ['Artigos.categoria_id' => 5], 'limit' => 5, 'order' => ['created' => 'DESC']]);
        $artigos_recentes = $this->Artigos
            ->find('all', ['contain' => ['Categorias', 'Times']])
            ->orderDesc('Artigos.created')
            ->toArray();
        $this->set(compact('artigos', 'artigos_recentes'));
    }

    public function sulAmericana()
    {
        $artigos = $this->paginate($this->Artigos, ['conditions' => ['Artigos.categoria_id' => 6], 'limit' => 5, 'order' => ['created' => 'DESC']]);
        $artigos_recentes = $this->Artigos
            ->find('all', ['contain' => ['Categorias', 'Times']])
            ->orderDesc('Artigos.created')
            ->toArray();
        $this->set(compact('artigos', 'artigos_recentes'));
    }

    public function index()
    {
        $conditions = [];

        $this->paginate = [
            'contain' => ['Categorias'],
        ];


        if ($this->request->getQuery('busca') != '') {
            $busca = $this->request->getQuery('busca');
            $conditions[]['OR'] = [
                ['Artigos.titulo LIKE' => '%' . strtolower($busca) . '%'],
                ['Artigos.subtitulo LIKE' => '%' . strtolower($busca) . '%']
            ];
        }

        $artigos = $this->paginate($this->Artigos, ['conditions' => ['OR' => $conditions], 'order' => ['created' => 'DESC']]);

        $artigos_recentes = $this->Artigos->find('all', ['contain' => ['Categorias', 'Times'], 'order' => ['Artigos.created' => 'DESC']]);

        $this->set(compact('artigos', 'artigos_recentes'));
    }

    public function noticia($slug = null)
    {
        $artigo = $this->Artigos->findBySlug($slug)
            ->contain(['Categorias'])
            ->first();


        $outrosArtigos = $this->Artigos->find()
            ->where(['Artigos.id !=' => $artigo->id])
            ->limit(8)
            ->orderDesc('Artigos.id')
            ->contain(['Categorias'])
            ->all();


        $this->set(compact('artigo', 'outrosArtigos'));
    }

    public function view($id = null)
    {
        $artigo = $this->Artigos->get($id, [
            'contain' => ['Categorias'],
        ]);

        $this->set(compact('artigo'));
    }

    public function add()
    {
        $artigo = $this->Artigos->newEntity();
        if ($this->request->is('post')) {
            $artigo = $this->Artigos->patchEntity($artigo, $this->request->getData());
            if ($this->Artigos->save($artigo)) {
                $this->Flash->success(__('The artigo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The artigo could not be saved. Please, try again.'));
        }
        $categorias = $this->Artigos->Categorias->find('list', ['limit' => 200]);
        $tags = $this->Artigos->Tags->find('list', ['limit' => 200]);
        $this->set(compact('artigo', 'categorias', 'tags'));
    }

    public function edit($id = null)
    {
        $artigo = $this->Artigos->get($id, [
            'contain' => ['Tags'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $artigo = $this->Artigos->patchEntity($artigo, $this->request->getData());
            if ($this->Artigos->save($artigo)) {
                $this->Flash->success(__('The artigo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The artigo could not be saved. Please, try again.'));
        }
        $categorias = $this->Artigos->Categorias->find('list', ['limit' => 200]);
        $tags = $this->Artigos->Tags->find('list', ['limit' => 200]);
        $this->set(compact('artigo', 'categorias', 'tags'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $artigo = $this->Artigos->get($id);
        if ($this->Artigos->delete($artigo)) {
            $this->Flash->success(__('The artigo has been deleted.'));
        } else {
            $this->Flash->error(__('The artigo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function incrementViews()
    {
        $this->autoRender = false;

        $artigo_id = $this->request->getData('article_id');

        $artigo = $this->Artigos->get($artigo_id, []);

        $artigo->views = $artigo->views + 1;

        if ($this->Artigos->save($artigo)) {
            $this->response->withStatus(200);
        } else {
            $this->response->withStatus(500);
        }
    }

    public function curiosidades()
    {
        $outrosArtigos = $this->Artigos->find()
            ->limit(8)
            ->orderDesc('Artigos.id')
            ->contain(['Categorias'])
            ->all();


        $this->set(compact('outrosArtigos'));
    }
}
