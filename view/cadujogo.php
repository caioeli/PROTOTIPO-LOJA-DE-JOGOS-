<?php
include_once("header.php");
?>

<div class=container >
<form class="row g-3" action="../controler/inserirJogo.php" method="Get">
  <div class="col-md-5">
    <label for="inputnome" class="form-label">Nome do Jogo</label>
    <input type="text" name="nomejogo" class="form-control" id="inputnome" required>
  </div>

  <div class="input-group mb-2 col-md-5" >
  <span for="inputvalor" class="input-group-text" >R$</span>
  <input type="text" class="form" name="valorjogo" placeholder="Valor do jogo " id="inputvalor" >
</div>
 
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Gênero</label required>
    <select id=generojogo name="generojogo"class="form-select" > 
    <option selected >escolha...</option>
     <option value="Acão">Acão</option>
     <option value="Terror">Terror</option>
     <option value="Esporte">Esporte</option>
     <option value="RPG">RPG</option>
    </select>
  </div>

  <div class="col-1">
    <label for="inputquantidade" class="form-label">Quantidade </label>
    <input type="number" name="qtdjogo" class="form-control" id="inputquantidade" required>
  </div>
  <div class="col-md-2">
    <label for="inputcep" class="form-label">Data de Lançamento</label>
    <input type="date" name="datalancamentojogo" class="form-control" id="inputdatalancamento" placeholder="00/00/0000" required>
  </div>
  <div class="col-md-3">
    <label for="inputstudio" class="form-label">Studio</label>
    <input type="text" name="studiojogo" class="form-control" id="inputstudio"required >
  </div>

  
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck" required>
      <label class="form-check-label" for="gridCheck">
        Aceito os termos venda e compra  
      </label>
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">SUBIR</button>
  </div>
</div>
</form>

<?php
include_once("footer.php");
?>
