
<h1><?= $procedimentos['Procedimento']['nome']; ?></h1>

<p>Código: <?= $procedimentos['Procedimento']['id']; ?></p>
<p>Nome: <?= $procedimentos['Procedimento']['nome']; ?></p>
<p>Nome: <?= $procedimentos['Procedimento']['preco']; ?></p>
<p>Usuario_Id: <?= $this->Html->link($procedimentos['Usuario']['nome'] . '-' . $procedimentos['Procedimento']['usuario_id'],
     array('controller' => 'usuarios',
           'action' => 'view', $usuarios['Usuario']['id']));
           ?></p>

<?=
  $this->Html->link("Voltar",
    array('controller' => 'procedimentos',
          'action' => 'index'));
?>
