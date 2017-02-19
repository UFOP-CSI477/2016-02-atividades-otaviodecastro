<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Validar Dados</title>
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <?php
    if(isset($_POST["nome"])){
      $nome = "POST: ".$_POST["nome"];
      $sexo = "POST: ".$_POST["sexo"];
      $datan = "POST: ".$_POST["datan"];
      $curso = "POST: ".$_POST["curso"];
      $matricula = "POST: ".$_POST["matricula"];
      $senha = "POST: ".$_POST["senha"];
    }
    ?>
  </head>
  <body>

    <h1>Dados</h1>

    <?php
      echo "<table>";
      echo "<tr><td>Nome: </td><td>".$_POST["nome"];
      echo "</td></tr>";
      echo "<tr><td>Sexo: </td><td>".$_POST["sexo"];
      echo "</td></tr>";
      echo "<tr><td>Data de nascimento: </td><td>".$_POST["datan"];
      echo "</td></tr>";
      echo "<tr><td>Curso: </td><td>".$_POST["curso"];
      echo "</td></tr>";
      echo "<tr><td>Matrícula: </td><td>".$_POST["matricula"];
      echo "</td></tr>";
    ?>

    <br><a href="form.html">Voltar</a>

  </body>
</html>
