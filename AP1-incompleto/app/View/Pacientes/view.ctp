
<h1><?= $pacientes['Paciente']['nome']; ?></h1>

<p>Código: <?= $pacientes['Paciente']['id']; ?></p>
<p>Nome: <?= $pacientes['Paciente']['nome']; ?></p>
<p>Login: <?= $pacientes['Paciente']['login']; ?></p>
<p>Senha: <?= $pacientes['Paciente']['senha']; ?></p>

<?= $this->Html->link("Voltar",
array('controller' => 'pages',
  'action' => 'home'
  )); ?>
