<?php

class ProcedimentosController extends AppController {

    public $helpers = array('Form');
    public $components = array('Flash');

    public function index() {

      $this->set('procedimentos', $this->Procedimento->find('all'));

    }

    public function view($id = null) {

      if (!$id) {
        throw new NotFoundException("Procedimento Inválido!");
      }

      $procedimentos = $this->Procedimento->findById($id);
      $this->set('procedimentos', $procedimentos);

    }

    public function add() {

      if (empty($this->request->data)) {
        // data esta vazio -> carregar campos para inclusao.

        $procedimentos = $this->Procedimento->find('list',
          array('fields' => array('id', 'nome', 'preco', 'usuario_id'))
        );

        $this->set('procedimentos', $procedimentos);

      } else {
        // Persistir os dados
        if ($this->Cidade->save($this->request->data)) {
          $this->Flash->set("Procedimento inserido com sucesso !");
          $this->redirect(array('action' => 'index'));
        }
      }


    }



}
