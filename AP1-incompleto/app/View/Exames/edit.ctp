<h1>Editar exame</h1>

<?php

  echo $this->Form->create('Exame');

  echo $this->Form->input('id');

  echo $this->Form->input('nome');
  echo $this->Form->select('id', $pacientes);
    echo $this->Form->select('id', $procedimentos);

  echo $this->Form->end('Salvar');






 ?>
