<h1>Usuarios</h1>

<?= $this->Html->link("Voltar",
array('controller' => 'pages',
  'action' => 'home'
  )); ?>


<table>

<table>

  <tr>
      <th>Id</th>
      <th>Nome</th>
      <th>Login</th>
      <th>Senha</th>
      <th>Tipo</th>
  </tr>

  <?php foreach ($usuarios as $u): ?>

      <tr>
          <td>
            <?php echo $u['Usuario']['id']; ?>
          </td>


          <td>
            <?php echo $u['Usuario']['nome']
             ?>
          </td>

          <td>
            <?php echo $u['Usuario']['login']
             ?>
          </td>

          <td>
            <?php echo $u['Usuario']['senha']
             ?>
          </td>

          <td>
            <?php echo $u['Usuario']['tipo']
             ?>
          </td>

    <?php endforeach;  ?>








</table>
