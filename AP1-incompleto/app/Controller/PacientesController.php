<?php

class PacientesController extends AppController {

    public $helpers = array('Form');
    public $components = array('Flash');

    public function index() {

      $this->set('pacientes', $this->Paciente->find('all'));

    }

    public function view($id = null) {

      if (!$id) {
        throw new NotFoundException("Paciente Inválido!");
      }

      $pacientes = $this->Paciente->findById($id);
      $this->set('pacientes', $pacientes);

    }

    public function add() {


        if ($this->Paciente->save($this->request->data)) {
          $this->Flash->set("Paciente inserido com sucesso !");
          $this->redirect(array('action' => 'index'));
        }



    }


}
