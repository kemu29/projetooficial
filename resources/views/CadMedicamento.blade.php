<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>

</head>
<body>

<form class="form-horizontal">
<fieldset>
<div class="panel panel-primary">
    <div class="panel-heading">Cadastro de Medicamento</div>
    
    <div class="panel-body">
<div class="form-group">
<!--
<div class="form-group">   
<div class="col-md-4 control-label">
    <img id="logo" src="http://blogdoporao.com.br/wp-content/uploads/2016/12/Faculdade-pitagoras.png"/>
</div>
<div class="col-md-4 control-label">
    <h1>Cadastro de Medicamento</h1>
    
</div>
</div>
    -->
<div class="col-md-11 control-label">
        <p class="help-block"><h11>*</h11> Campo Obrigatório </p>
</div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-2 control-label" for="Nome">Nome  Medicamento <h11>*</h11></label>  
  <div class="col-md-8">
  <input id="Nome" name="Nome" placeholder="" class="form-control input-md" required="" type="text">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-2 control-label" for="Nome">Validade <h11>*</h11></label>  
  <div class="col-md-2">
  <input id="cpf" name="cpf" placeholder="Apenas números" class="form-control input-md" required="" type="text" maxlength="11" pattern="[0-9]+$">
  </div>
  
  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-2 control-label" for="Nome">Data de Fabricação <h11>*</h11></label>  
    <div class="col-md-2">
    <input id="fab" name="fab" placeholder="Apenas números" class="form-control input-md" required="" type="date" maxlength="8" pattern="[0-9]+$">
    </div>

    <!-- Text input-->
  <div class="form-group">
    <label class="col-md-2 control-label" for="Nome">Valor da Compra<h11>*</h11></label>  
    <div class="col-md-2">
    <input id="vlr" name="vlr" placeholder="Valor" class="form-control input-md" required="" type="float" maxlength="20" pattern="[0-9]+$">
    </div>
    
    <!-- Text input-->
  <div class="form-group">
    <label class="col-md-2 control-label" for="Nome">Valor de Venda<h11>*</h11></label>  
    <div class="col-md-2">
    <input id="ven" name="ven" placeholder="Apenas números" class="form-control input-md" required="" type="float" maxlength="20" pattern="[0-9]+$">
    </div>

    <!-- Text input-->
  <div class="form-group">
    <label class="col-md-2 control-label" for="Nome">Descrição <h11>*</h11></label>  
    <div class="col-md-2">
    <input id="desc" name="desc" placeholder="Informe a  Descrição do produto" class="form-control input-md" required="" type="text" maxlength="20" pattern="[0-9]+$">
    </div>
    <br><br><br>
        
      </div>
      
      
<!-- Button (Double) -->
<div align="center" class="form-group">
  <label class="col-md-2 control-label" for="Cadastrar"></label>
  <div class="col-md-8">
    <button id="Cadastrar" name="Cadastrar" class="btn btn-success" type="Submit">Cadastrar</button>
    <button id="Cancelar" name="Cancelar" class="btn btn-danger" type="Reset">Cancelar</button>
  </div>
</div>
</fieldset>
</form>
</body>
</html>