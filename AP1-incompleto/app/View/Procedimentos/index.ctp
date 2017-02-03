<h1>Procedimentos</h1>

<?= $this->Html->link("Voltar",
array('controller' => 'pages',
  'action' => 'home'
  )); ?>

<table>
  <tr>
    <th>Nome</th>
    <th>Preco</th>
    <th>Usuario_Id</th>
  </tr>

  <?php foreach ($procedimentos as $procedimentos): ?>

    <tr>

      <td>
        <?php echo $procedimentos['Procedimento']['nome']
         ?>
      </td>
      <td>
        <?php echo $procedimentos['Procedimento']['preco']
         ?>
      </td>
      <td>
        <?php echo $procedimentos['Procedimento']['usuario_id']; ?>
      </td>



    </tr>

  <?php endforeach; ?>
</table>
