<?php

namespace App\Controller\Admin;

use App\Controller\Admin\AppController;
use Cake\I18n\Time;
use DateTime;

class ArtigosController extends AppController
{

    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Data');
    }

    public function index()
    {
        $this->paginate = [
            'contain' => ['Categorias', 'Times'],
            'limit' => 10,
            'order' => ['id' => 'DESC']
        ];
        $artigos = $this->paginate($this->Artigos);

        $this->set(compact('artigos'));
    }

    public function adicionar()
    {
        $artigo = $this->Artigos->newEntity();

        if ($this->request->is('post')) {
            $artigo = $this->Artigos->patchEntity($artigo, $this->request->getData());

            $artigo->created_by = 'Lucas Heideric';
            $artigo->data_publicacao = $this->Data->CorrigeData($artigo->data_publicacao);


            if (!empty($this->request->getData()['caminho_foto_titulo']['name'])) {
                $file = $this->request->getData()['caminho_foto_titulo'];

                $ext = pathinfo($file['name'], PATHINFO_EXTENSION);
                $ext = strtolower($ext);
                $arr_ext = array('jpg', 'jpeg', 'gif', 'png', 'webp');

                $nome_arquivo = preg_replace(
                    [
                        '/[áàãâä]/u', '/[éèêë]/u', '/[íìîï]/u', '/[óòõôö]/u', '/[úùûü]/u', '/ç/u',
                        '/[ÁÀÃÂÄ]/u', '/[ÉÈÊË]/u', '/[ÍÌÎÏ]/u', '/[ÓÒÕÔÖ]/u', '/[ÚÙÛÜ]/u', '/Ç/u'
                    ],
                    [
                        'a', 'e', 'i', 'o', 'u', 'c',
                        'A', 'E', 'I', 'O', 'U', 'C'
                    ],
                    str_replace([' ', ','], ['_', '_'], $artigo->titulo)
                );

                if (in_array($ext, $arr_ext)) {
                    $numeros = rand();
                    $filename = $nome_arquivo . '-' . $numeros . '.' . $ext;
                    move_uploaded_file($file['tmp_name'], WWW_ROOT . 'img/conteudos/esportes/' . $filename);
                    $artigo->caminho_foto_titulo = 'conteudos/esportes/' . $filename;
                } else {
                    $this->Flash->error(__('Só é permitido documentos do tipo (JPG, JPEG, GIF, PNG, WEBP).'));
                }
            }

            if (!empty($this->request->getData()['caminho_foto_conteudo']['name'])) {
                $file = $this->request->getData()['caminho_foto_conteudo'];

                $ext = pathinfo($file['name'], PATHINFO_EXTENSION);
                $ext = strtolower($ext);
                $arr_ext = array('jpg', 'jpeg', 'gif', 'png', 'webp');

                $nome_arquivo2 = preg_replace(
                    [
                        '/[áàãâä]/u', '/[éèêë]/u', '/[íìîï]/u', '/[óòõôö]/u', '/[úùûü]/u', '/ç/u',
                        '/[ÁÀÃÂÄ]/u', '/[ÉÈÊË]/u', '/[ÍÌÎÏ]/u', '/[ÓÒÕÔÖ]/u', '/[ÚÙÛÜ]/u', '/Ç/u'
                    ],
                    [
                        'a', 'e', 'i', 'o', 'u', 'c',
                        'A', 'E', 'I', 'O', 'U', 'C'
                    ],
                    str_replace([' ', ','], ['_', '_'], $artigo->titulo)
                );

                if (in_array($ext, $arr_ext)) {
                    $numeros = rand();
                    $filename = $nome_arquivo2 . '-' . $numeros . '.' . $ext;
                    move_uploaded_file($file['tmp_name'], WWW_ROOT . 'img/conteudos/esportes/' . $filename);
                    $artigo->caminho_foto_conteudo = 'conteudos/esportes/' . $filename;
                } else {
                    $this->Flash->error(__('Só é permitido documentos do tipo (JPG, JPEG, GIF, PNG).'));
                }
            }

            if ($this->Artigos->save($artigo)) {
                $this->Flash->success(__('Artigo registrado com sucesso.'));
                return $this->redirect(['action' => 'index']);
            }

            $this->Flash->error(__('O artigo não pode ser salvo, tente novamente.'));
        }
        $times = $this->Artigos->Times->find('list');
        $categorias = $this->Artigos->Categorias->find('list');
        $this->set(compact('artigo', 'times', 'categorias'));
    }

    public function editar($id = null)
    {
        $artigo = $this->Artigos->get($id, [
            'contain' => ['Times', 'Categorias'],
        ]);

        $foto1 = $artigo->caminho_foto_titulo;
        $foto2 = $artigo->caminho_foto_conteudo;

        $data_da_publicacao = $artigo->data_publicacao;


        if ($this->request->is(['patch', 'post', 'put'])) {
            $artigo = $this->Artigos->patchEntity($artigo, $this->request->getData());

            if ($artigo->dirty('data_publicacao')) {
                $artigo->data_publicacao = $this->Data->CorrigeData($artigo->data_publicacao);
            } else {
                $artigo->data_publicacao = $data_da_publicacao;
            }

            if (!empty($this->request->getData()['caminho_foto_titulo']['name'])) {
                $file = $this->request->getData()['caminho_foto_titulo'];

                $ext = pathinfo($file['name'], PATHINFO_EXTENSION);
                $ext = strtolower($ext);
                $arr_ext = array('jpg', 'jpeg', 'gif', 'png', 'webp');

                $nome_arquivo = preg_replace(
                    [
                        '/[áàãâä]/u', '/[éèêë]/u', '/[íìîï]/u', '/[óòõôö]/u', '/[úùûü]/u', '/ç/u',
                        '/[ÁÀÃÂÄ]/u', '/[ÉÈÊË]/u', '/[ÍÌÎÏ]/u', '/[ÓÒÕÔÖ]/u', '/[ÚÙÛÜ]/u', '/Ç/u'
                    ],
                    [
                        'a', 'e', 'i', 'o', 'u', 'c',
                        'A', 'E', 'I', 'O', 'U', 'C'
                    ],
                    str_replace([' ', ','], ['_', '_'], $artigo->titulo)
                );

                if (in_array($ext, $arr_ext)) {
                    $numeros = rand();
                    $filename = $nome_arquivo . '-' . $numeros . '.' . $ext;

                    move_uploaded_file($file['tmp_name'], WWW_ROOT . 'img/conteudos/esportes/' . $filename);
                    $artigo->caminho_foto_titulo = 'conteudos/esportes/' . $filename;
                } else {
                    $this->Flash->error(__('Só é permitido documentos do tipo (JPG, JPEG, GIF, PNG).'));
                }
            }

            if (!empty($this->request->getData()['caminho_foto_conteudo']['name'])) {
                $file = $this->request->getData()['caminho_foto_conteudo'];
                
                
                $ext = pathinfo($file['name'], PATHINFO_EXTENSION);
                $ext = strtolower($ext);
                $arr_ext = array('jpg', 'jpeg', 'gif', 'png', 'webp');

                $nome_arquivo2 = preg_replace(
                    [
                        '/[áàãâä]/u', '/[éèêë]/u', '/[íìîï]/u', '/[óòõôö]/u', '/[úùûü]/u', '/ç/u',
                        '/[ÁÀÃÂÄ]/u', '/[ÉÈÊË]/u', '/[ÍÌÎÏ]/u', '/[ÓÒÕÔÖ]/u', '/[ÚÙÛÜ]/u', '/Ç/u'
                    ],
                    [
                        'a', 'e', 'i', 'o', 'u', 'c',
                        'A', 'E', 'I', 'O', 'U', 'C'
                    ],
                    str_replace([' ', ','], ['_', '_'], $artigo->titulo)
                );

                if (in_array($ext, $arr_ext)) {
                    $numeros = rand();
                    $filename = $nome_arquivo . '-' . $numeros . '.' . $ext;
                    
                    move_uploaded_file($file['tmp_name'], WWW_ROOT . 'img/conteudos/esportes/' . $filename);
                    $artigo->caminho_foto_conteudo = 'conteudos/esportes/' . $filename;
                } else {
                    $this->Flash->error(__('Só é permitido documentos do tipo (JPG, JPEG, GIF, PNG).'));
                }
            }

            if (empty($this->request->getData()['caminho_foto_titulo']['name'])) {
                $artigo->caminho_foto_titulo = $foto1;
            }

            if (empty($this->request->getData()['caminho_foto_conteudo']['name'])) {
                $artigo->caminho_foto_conteudo = $foto2;
            }

            if ($this->Artigos->save($artigo)) {
                $this->Flash->success(__('Artigo alterado com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }

            $this->Flash->error(__('Não foi possivel alterar este artigo, tente novamente.'));
        }
        $categorias = $this->Artigos->Categorias->find('list', ['limit' => 200]);
        $times = $this->Artigos->Times->find('list', ['limit' => 200]);
        $this->set(compact('artigo', 'categorias', 'times'));
    }
}
