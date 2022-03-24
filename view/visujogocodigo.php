<?php
include_once("../view/header.php");
include_once("../model/conexao.php");
include_once("../model/jogomodel.php");
?>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title>Loja online de jogos para PC</title>
</head>

<div class="container mt-5">
  <form action="#" method="Post" class="row row-cols-auto justify-content-lg-center g-2 align-items-center">
    <div class="col-2">
      <label class="visually-hidden" for="inlineFormInputGroupUsername">Código</label>
      <div class="input-group">
        <div class="input-group-text">Código</div>
        <input type="number" name="codigojogo" class="form-control" id="inlineFormInputGroupUsername">
      </div>
    </div>
    <div class="col-2">
      <button type="submit" class="btn btn-primary">Pesquisar</button>
    </div>
  </form>
  <table class="table mt-5">
    <thead>
      <tr>
        <th scope="col">Código</th>
        <th scope="col">Nome</th>
        <th scope="col">valor</th>
        <th scope="col">Gênero</th>
        <th scope="col">Data de Lançamento</th>
        <th scope="col">Studio</th>
        <th scope="col">Alterar</th>
        <th scope="col">Apagar</th>


      </tr>
    </thead>
    <tbody>

      <?php

      $codigojogo = isset($_POST["codigojogo"]) ? $_POST["codigojogo"] : "";

      if ($codigojogo) {

        $codigojogos = visujogocodigo($conn, $codigojogo);
      ?>

        <tr>
          <th scope="row"><?= $codigojogos["idjogo"] ?></th>
          <td><?= $codigojogos["nomejogo"] ?></td>
          <td><?= $codigojogos["valorjogo"] ?></td>
          <td><?= $codigojogos["generojogo"] ?></td>
          <td><?= $codigojogos["datalancamentojogo"] ?></td>
          <td><?= $codigojogos["studiojogo"] ?></td>

          <td>

            <form action="../view/alterarjogoform.php" method="POST">
              <input type="hidden" value="<?= $codigojogos["idjogo"] ?>" name="codigojogo">
              <button type="submit" class="btn btn-primary">Alterar</button>
            </form>
          </td>
          <td>
            <button type="button" class="btn btn-danger" codigo="<?= $codigojogos["idjogo"] ?>" data-bs-toggle="modal" data-bs-target="#deleteModal">
              APAGAR
            </button>
          </td>
        </tr>
    </tbody>

  <?php
      }
  ?>

  </table>
</div>
<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteModal">Exclusão de Usuário</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <form action="../controler/deletarform.php" method="GET">
          <input type="hidden" class="codigo form-control" name="codigousu">
          <button type="submit" class="btn btn-danger">SIM</button>
        </form>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">NÃO</button>

      </div>
    </div>
  </div>
</div>

<script>
  var deletarUsuario = document.getElementById('deleteModal');
  deletarUsuario.addEventListener('show.bs.modal', function(event) {
    var button = event.relatedTarget;
    var codigo = button.getAttribute('codigo');
    var email = button.getAttribute('email');

    var modalbody = deletarUsuario.querySelector('.modal-body');
    modalbody.textContent = 'Gostaria Excluir o Codigo ' + codigo + '?';

    var Codigo = deletarUsuario.querySelector('.modal-footer .codigo');
    Codigo.value = codigo;

  })
</script>


<?php
include_once("footer.php");
?>