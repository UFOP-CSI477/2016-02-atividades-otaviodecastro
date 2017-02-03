<span class="notice success">
    <?=
    $this->Html->link("Usuario", array('controller' => 'usuarios',
        'action' => 'index'));
    ?>
</span>

<span class="notice success">
    <?=
    $this->Html->link("Procedimento", array('controller' => 'procedimentos',
        'action' => 'index'));
    ?>
</span>

<span class="notice success">
    <?=
    $this->Html->link("Exame", array('controller' => 'exames',
        'action' => 'index'));
    ?>
</span>

<span class="notice success">
    <?=
    $this->Html->link("Paciente", array('controller' => 'pacientes',
        'action' => 'index'));
    ?>
</span>


<span class="notice success">

<?=
$this->Html->link("Sair do Sistema ", array('controller' => 'usuarios',
    'action' => 'logout'));
?>

</span>