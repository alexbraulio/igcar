<?php 

 include "nav.php";

?>

<div class="container">
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Cadastra Veiculo.</button>
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Cadastro de Veiculo.</h4>
        </div>
          <div class="modal-body">
          <p>Prencha os dados com cuidado.</p>
<div class="row">
  <?php  
  include "conexao.php";
  $Veiculos=$pdo->prepare("SELECT * FROM veiculo");
  
                                   
                                   ?>
               <div class="col-md-12">
            <form method="post" role="form" action="funcoes.php?funcao=gravar_veiculo">
              <div class="form-group">
                <label class="control-label" for="marca">Placa:</label>
                <input name="placa" type="text"class="form-control" id="placa">
                 <label class="control-label" for="sel1">Marca:</label>
                                   <select name="marca" type="text"class="form-control" id="marca" id="sel1">
                                   <?php  
                                   $sql_visualizar =$pdo->prepare("SELECT * FROM marca");
                                   $sql_visualizar->execute();
                                   while($linhamarca =$sql_visualizar->fetch(PDO::FETCH_ASSOC)){
                                                                   ?>
                                   <option type="text"><?php  echo $linhamarca ['marca'] ?></option>
                                   <?php } ?>
                                   </select>
                                   </div>
                                
                <label class="control-label" for="sel1">Modelo:</label>
                                   <select name="modelo" type="text"class="form-control" id="modelo" id="sel1">
                                   <?php  
                                   $sql_visualizar = $pdo->prepare("SELECT * FROM modelo");
                                   $sql_visualizar->execute();
                                   while($linhamodelo = $sql_visualizar->fetch(PDO::FETCH_ASSOC)){
                                  
                                   ?>
                                   <option type="text"><?php  echo  $linhamodelo ['modelo'] ?></option>
                                   <?php } ?>
                                   </select>
                                
                                 
                <label class="control-label" for="marca">Motor:</label>
                <input name="motor" type="text"class="form-control" id="motor">
                <label class="control-label" for="marca">Cor:</label>
                <input name="cor" type="text"class="form-control" id="cor">
                <label class="control-label" for="marca">Combustivel:</label>
                 <select name="combustivel" type="text"class="form-control" id="combustivel">
                <option>Gasolina</option>
                <option>Etanol</option>
                <option>Diesel</option>
                <option>Flex</option>
                <option>Triflex</option>
                <option>Gas</option>                
                </select>
                <label class="control-label" for="fotos">Fotos:</label>                
                <input name="fotos" type="file"class="form-control" id="fotos">
               
                 <label class="control-label" for="sel1">Cliente:</label>
                                 <select name="cliente" type="text"class="form-control" id="cliente" id="sel1">
                                   <option disabled="disabled" type="text">Pessoa Física:</option>
                                   <?php  
                                   $sql_visualizar = $pdo->prepare("SELECT * FROM cliente_pf");
                                   $sql_visualizar->execute();
                                   while($linhamodelo = $sql_visualizar->fetch(PDO::FETCH_ASSOC)){
                                                                     
                                   ?>
                                   <option ><?php  echo $linhamodelo ['nome'] ?></option>
                                   <?php } ?>
                                   <option disabled="disabled" type="text">Pessoa Júridica:</option>
                                   <?php  
                                   $sql_visualizar = $pdo->prepare("SELECT * FROM cliente_pj");
                                   $sql_visualizar->execute();
                                   while($linhamodelo = $sql_visualizar->fetch(PDO::FETCH_ASSOC)){
                                                                 
                                   ?>
                                   <option><?php  echo $linhamodelo ['razao_social'] ?></option>
                                   <?php } ?>
                                   </select>
             
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
                <th>Placa</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Motor</th>
                <th>Cor</th>
                <th>Combustivel</th>
                <th>Fotos</th>
                <th>Cliente</th>
                <th>Editar</th>
                <th>Excluir</th>

      </tr>
    </thead>

        
  <?php
  //TRAZ OS DADOS PARA EXIBIR NA TELA 
  include "conexao.php";
  $sql_visualizar = $pdo->prepare("SELECT * FROM veiculo");
  $sql_visualizar->execute();
  while($linha =$sql_visualizar->fetch(PDO::FETCH_ASSOC)){
   $id = $linha['id'];

  ?>
</div>  
   <tbody>
                <tr>
                <td><?php echo       $linha["placa"];                      ?></td>
                <td><?php echo       $linha["marca"];                      ?></td>
                <td><?php echo       $linha["modelo"];                     ?></td>
                <td><?php echo       $linha["motor"];                      ?></td>
                <td><?php echo       $linha["cor"];                        ?></td>
                <td><?php echo       $linha["combustivel"];                ?></td>
                <td><?php echo       $linha["fotos"];                      ?></td>
                <td><?php echo       $linha["cliente"];                    ?></td>
              
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
            <form method="post" role="form" enctype="multipart/form-data" action="funcoes.php?funcao=editar_veiculo&id=<?php echo  $linha['id'] ?>">
              <div class="form-group">
                <label class="control-label" for="marca">Razão Social:</label>
                <input name="placa" type="text"class="form-control" id="placa" value="<?php echo   $linha['placa'];                             ?>">
                <label class="control-label" for="marca">Marca:</label>
                <input name="marca" type="text"class="form-control" id="marca" value="<?php echo   $linha['marca'];                                    ?>">
                <label class="control-label" for="marca">Modelo:</label>
                <input name="modelo" type="text"class="form-control" id="modelo" value="<?php echo   $linha['modelo'];                                 ?>">
                <label class="control-label" for="marca">Motor:</label>
                <input name="motor" type="text"class="form-control" id="motor" value="<?php echo   $linha['motor'];                                  ?>">
                <label class="control-label" for="marca">Cor:</label>
                <input name="cor" type="text"class="form-control" id="cor" value="<?php echo   $linha['cor'];                                     ?>">
                <label class="control-label" for="marca">Combustivel:</label>
                <input name="combustivel" type="text"class="form-control" id="combustivel" value="<?php echo   $linha['combustivel'];                                 ?>">
                <label class="control-label" for="marca">Fotos:</label>
                <imput type="file" name="fotos"  src="<?php echo   $linha['fotos'];                                   ?>" />
                <label class="control-label" for="marca">Cliente:</label>
                <input name="cliente" type="text"class="form-control" id="cliente" value="<?php echo   $linha['cliente'];                                   ?>">
               
                
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
         <a href="funcoes.php?funcao=excluir_veiculo&id=<?php echo  $linha['id'] ?>" role="button"  type="button" class="btn btn-lg btn-danger">Excluir </a> 
      </div>
  
    </div>
  </div>
</div></td>
                </tr> 
                <?php 
                }

                 ?>             
            </tbody>
  </table>
</div>