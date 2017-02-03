
<h1><?= $usuarios['Usuario']['nome']; ?></h1>

<p>Código: <?= $usuarios['Usuario']['id']; ?></p>
<p>Nome: <?= $usuarios['Usuario']['nome']; ?></p>
<p>Login: <?= $usuarios['Usuario']['login']; ?></p>
<p>Senha: <?= $usuarios['Usuario']['senha']; ?></p>
<p>Senha: <?= $usuarios['Usuario']['tipo']; ?></p>

  $this->Html->link("Voltar",
    array('controller' => 'usuarios',
          'action' => 'index'));
?>
