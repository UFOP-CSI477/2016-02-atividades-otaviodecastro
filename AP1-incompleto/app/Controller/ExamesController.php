<?php

class ExamesController extends AppController {

    public $helpers = array('Form');
    public $components = array('Flash');

    public function index() {

      $this->set('exames', $this->Exame->find('all'));

    }

    public function view($id = null) {

      if (!$id) {
        throw new NotFoundException("Exame Inválido!");
      }

      $exames = $this->Exame->findById($id);
      $this->set('exames', $exames);

    }

    public function add() {


        if ($this->Exame->save($this->request->data)) {
          $this->Flash->set("Exame solicitado com sucesso !");
          $this->redirect(array('action' => 'index'));
        }



    }

    public function edit($id = null) {

        if ($this->Exame->save($this->request->data)) {
          $this->Flash->set("Exame atualizado com sucesso !");

          $this->redirect(array('action' => 'index'));
        }
      }

    }
