<h1>Solicitar Exame</h1>

<?php

  echo $this->Form->create('Exame');
  echo $this->Form->select('paciente_id', $pacientes);
  echo $this->Form->select('procedimento_id', $procedimentos);
  echo $this->Form->input('data');


  echo $this->Form->end('Salvar');






 ?>
