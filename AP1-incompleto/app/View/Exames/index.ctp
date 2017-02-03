<h1>Exames</h1>

<?= $this->Html->link("Voltar",
array('controller' => 'pages',
  'action' => 'home'
  )); ?>

  <?= $this->Html->link("Solicitar",
  array('controller' => 'Exames',
    'action' => 'add'
    )); ?>


<table>
  <tr>
    <th>Id</th>
    <th>Nome</th>
    <th>Usuario_Id</th>
    <th>Data</th>
  </tr>

  <?php foreach ($exames as $e): ?>

    <tr>
      <td>
        <?php echo $e['Exame']['id']; ?>
      </td>
      <td>
        <?php echo $this->Html->link($e['Exame']['nome'],
          array('controller' => 'exames',
                'action' => 'view', $e['Exame']['nome']));

         ?>
      </td>
      <td>
        <?php echo $this->Html->link($e['Paciente']['id'],
          array('controller' => 'pacientes',
                'action' => 'view', $e['Exame']['paciente_id']));

         ?>
      </td>
      <td>
        <?php echo $this->Html->link("Editar",
          array('controller' => 'exames',
                'action' => 'edit', $e['Exame']['id']));

         ?>
      </td>

      <td>

        <?php
echo $this->Html->link("Excluir",
array('controller' => 'exames', 'action' => 'delete', $e['Exame']['id']),
array('confirm' => 'Confirma exclusão?'));

         ?>

      </td>

      <td>
        <?php echo $this->Html->link($e['Exame']['data'],
          array('controller' => 'exames',
                'action' => 'view', $e['Exame']['data']));

         ?>
      </td>

    </tr>

  <?php endforeach; ?>
</table>
