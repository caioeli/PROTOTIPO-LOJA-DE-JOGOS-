<?php
include_once("header.php");
include_once("../model/conexao.php");
include_once("../model/jogomodel.php");

extract($_REQUEST, EXTR_OVERWRITE);

$informa = visujogocodigo($conn,$codigojogo);


?>

<div class=container>
    <form class="row g-3" action="../controler/alterarjogo.php" method="post">
        <div class="col-md-3">

            <input type="hidden" name="codigojogo" value="<?= $informa["idjogo"] ?>">

            <label for="inputnome" class="form-label">Nome do jogo </label>
            <input type="text" name="nomejogo" value="<?= $informa["nomejogo"] ?>" class="form-control" id="inputnomecol-md-3" required>
        </div>
        <div class="input-group mb-3">
            <span for="inputvalor" class="input-group-text">R$</span>
            <input type="text" class="form-control" name="valorjogo" value=" <?= $informa["valorjogo"] ?>" placeholder="Valor do jogo " id="inputvalor">
        </div>

        <div class="col-md-2">
            <label for="inputZip" class="form-label">Gênero</label required>
            <select id=generojogo name="generojogo" value="<?= $informa["generojogo"] ?>" class="form-select">
                <option selected>escolha...</option>
                <option value="Acão">Acão</option>
                <option value="Terror">Terror</option>
                <option value="Esporte">Esporte</option>
                <option value="RPG">RPG</option>
            </select>
        </div>

        <div class="col-1">
            <label for="inputquantidade" class="form-label">Quantidade </label>
            <input type="number" name="qtdjogo" value="<?= $informa["qtdjogo"] ?>" class="form-control" id="inputquantidade" required>
        </div>
        <div class="col-md-2">
            <label for="inputcep" class="form-label">Data de Lançamento</label>
            <input type="date" name="datalancamentojogo" value="<?= $informa["datalancamentojogo"] ?>" class="form-control" id="inputdatalancamento" placeholder="00/00/0000" required>
        </div>
        <div class="col-md-3">
            <label for="inputstudio" class="form-label">Studio</label>
            <input type="text" name="studiojogo" value="<?= $informa["studiojogo"] ?>" class="form-control" id="inputstudio" required>
        </div>
        </select>
</div>
<div class="col-2">
    <button type="submit" class="btn btn-primary">Alterar</button>
</div>
</div>
</form>

<?php
include_once("footer.php");
?>