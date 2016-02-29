<?php 

 include "nav.php";

?>
<script>
  $(function() {
    $("#grana").maskMoney({prefix:'R$ ', allowNegative: true, thousands:'.', decimal:',', affixesStay: false});
  })
</script>


 <div class="container">
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Cadastrar Serviço.</button>
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Cadastro de Serviço.</h4>
        </div>
          <div class="modal-body">
          <p>Prencha os dados com cuidado.</p>
<div class="row">
 <?php include "conexao.php";
  $sql_visualizar = $pdo->prepare("SELECT * FROM veiculo");
  ?>
              <div class="col-md-12">
            <form method="post" role="form" action="funcoes.php?funcao=gravar_servico">
              <div class="form-group">
               <label class="control-label" for="entrada">Data-Hora da Entrada:</label>
              <input type="text" name="entrada" class="form-control" maxlength="19" size="19" onKeyPress="DataHora(event, this)">
               
                 <label class="control-label" for="sel1">Placa:</label>
                                   <select name="placa" type="text"class="form-control" id="placa" id="sel1">
                                   <?php  
                                   $sql_visualizar = $pdo->prepare("SELECT * FROM veiculo");
                                   $sql_visualizar->execute();
                                  while($linhamarca = $sql_visualizar->fetch(PDO::FETCH_ASSOC)){
                                   $marca = utf8_encode($linhamarca ['placa'] ); 
                                   ?>
                                   <option type="text"><?php  echo $marca ?></option>
                                   <?php } ?>
                                   </select>
                                   
                                
                <label class="control-label" for="sel1">Serviço:</label>
                 <input name="servico" type="text" class="form-control" id="servico">
                                  
                                 
                <label class="control-label" for="marca">Descricão:</label>
                <input name="descricao" type="text" class="form-control" id="descricao" >
                <label class="control-label" for="marca">Saida:</label>
                    <body><input name="saida" type="text" id="exemplo" class="form-control"  value="Data de Saida">
                     <script src="js/bootstrap-datepicker.js"></script>
                    <script src="js/date.js"></script></body>
                             
                <label class="control-label" for="marca">Valor:</label>
                <input name="valor" type="text"class="form-control" id="grana">
            
              <button type="submit" class="btn btn-default">Cadastrar.</button>
               </div>
            </form>
          </div>
        </div>



        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>


<div class="container">
      <div class="page-header">
             <h1>Veiculos cadastrados:</h1>
      </div>
      <div class="row">
        <div class="col-md-12">
                <table class="table table-bordered">
    <thead>
      <tr>
                <th>Entrada</th>
                <th>Placa</th>
                <th>Servico</th>
                <th>Descricâo</th>
                <th>Saida</th>
                <th>Valor</th>
                <th>Editar</th>
                <th>Excluir</th>

      </tr>
    </thead>

        
  <?php
  //TRAZ OS DADOS PARA EXIBIR NA TELA 
  include "conexao.php";
  $sql_visualizar =$pdo->prepare("SELECT * FROM servico");
  $sql_visualizar->execute();
  while($linha = $sql_visualizar->fetch(PDO::FETCH_ASSOC)){
   $id = $linha['id'];

  ?>
</div>  
   <tbody>
                <tr>
                <td><?php echo             $linha['entrada'];                              ?></td>
                <td><?php echo               $linha['placa'];                              ?></td>
                <td><?php echo             $linha['servico'];                              ?></td>
                <td><?php echo           $linha['descricao'];                              ?></td>
                <td><?php echo               $linha['saida'];                              ?></td>
                <td><?php echo "R$".         $linha['valor'];                              ?></td>
              
              
                <td>       
  <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal22<?php echo  $linha['id']  ?>">Editar.</button>
  <div class="modal fade" id="myModal22<?php echo  $linha['id']  ?>" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Cadastro de Cliente.</h4>
        </div>
          <div class="modal-body">
          <p>Somente Pessoa Jurídica</p>

<div class="row">
          <div class="col-md-12">
            <form method="post" role="form" action="funcoes.php?funcao=editar_servico&id=<?php echo  $linha['id'] ?>">
              <div class="form-group">
                <label class="control-label" for="marca">Razão Social:</label>
                <input name="entrada" type="text"class="form-control" id="entrada" value="<?php echo         $linha['entrada'];      ?>">
                <label class="control-label" for="marca">Marca:</label>
                <input name="placa" type="text"class="form-control" id="marca" value="<?php echo         $linha['placa'];             ?>">
                <label class="control-label" for="marca">Modelo:</label>
                <input name="servico" type="text"class="form-control" id="modelo" value="<?php echo         $linha['servico'];           ?>">
                <label class="control-label" for="marca">Motor:</label>
                <input name="descricao" type="text"class="form-control" id="motor" value="<?php echo         $linha['descricao'];          ?>">
                <label class="control-label" for="marca">Cor:</label>
                <input name="saida" type="text"class="form-control" id="cor" value="<?php echo         $linha['saida'];           ?>">
                <label class="control-label" for="marca">Combustivel:</label>
                <input name="valor" type="text"class="form-control" id="combustivel" value="<?php echo        "R$".$linha['valor'];               ?>">
                 </div>
              <button type="submit" class="btn btn-success">Alterar.</button>
            </form>
          </div>
        </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger"  data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
        </div>
      
    </div>
  </div>
</div></td>
       <td><button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#exampleModal<?php echo  $linha['id']  ?>" >Excluir</button>
<div class="modal fade" id="exampleModal<?php echo  $linha['id']  ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Está certo disso?!</h4>
      </div>
     
      <div class="modal-body">
         <a href="funcoes.php?funcao=excluir_servico&id=<?php echo  $linha['id'] ?>" role="button"  type="button" class="btn btn-lg btn-danger">Excluir </a> 
      </div>
  
    </div>
  </div>
</div>
<?php } ?>