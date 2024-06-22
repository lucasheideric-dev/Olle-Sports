<?php

namespace App\Controller;

use App\Controller\AppController;

class InicialController extends AppController
{
    public function index()
    {
        $this->loadModel('Artigos');

        $artigos_principal = $this->Artigos->find()
            ->where(['is_principal' => 1])
            ->limit(3)
            ->orderDesc('id')
            ->toArray();

        $ultimos_ids = [];
        foreach ($artigos_principal as $artigo) {
            $ultimos_ids[] = $artigo->id;
        }

        $artigos = $this->paginate($this->Artigos, [
            'conditions' => [
                'NOT' => ['id IN' => $ultimos_ids]
            ],
            'order' => [
                'created' => 'DESC'
            ],
            'limit' => 8
        ]);



        $this->set(compact('artigos_principal', 'artigos'));
    }
}
