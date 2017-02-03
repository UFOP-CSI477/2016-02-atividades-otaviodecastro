<h1>Pacientes</h1>

<?= $this->Html->link("Voltar",
array('controller' => 'pages',
  'action' => 'home'
  )); ?>
  <?= $this->Html->link("Cadastrar",
  array('controller' => 'Pacientes',
    'action' => 'add'
    )); ?>
<table>

  <tr>
      <th>Id</th>
      <th>Nome</th>
      <th>Login</th>
      <th>Senha</th>
  </tr>

  <?php foreach ($pacientes as $p): ?>

      <tr>
          <td>
            <?php echo $p['Paciente']['id']; ?>
          </td>

          <td>
<?= $this->Html->link($p['Paciente']['nome'],
     array('controller' => 'pacientes',
           'action' => 'view', $p['Paciente']['id']));

?>
          </td>

          <td>
            <?php echo $p['Paciente']['login']
             ?>
          </td>

          <td>
            <?php echo $p['Paciente']['senha']
             ?>
          </td>

      </tr>

    <?php endforeach;  ?>








</table>
