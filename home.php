<?php 
include "nav.php";
?>
    <div class="container theme-showcase" role="main">
      <div class="jumbotron">
        <h1>SISTEMA | IGCAR <i class="glyphicon glyphicon-wrench"></i></h1>
        <p>Bem vindo ao sistema para cadastro e  consulta de cliente, serviços ou veículos.<br></p>
        <p>Versão DEMO 1.17.5<br></p>
        <iframe src="//giphy.com/embed/10mwAti1muJZcI" width="480" height="199" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p>
    <a href="http://giphy.com/gifs/track-drifting-gt-10mwAti1muJZcI"></a></p>
     </div>
      <div class="page-header">
        <h1>Ecolha um caminho.</h1>
      </div>
      <p>
        <a href="home.php" role="button"  type="button" class="btn btn-lg btn-default">HOME </a>
        <a href="veiculo.php" role="button"  type="button" class="btn btn-lg btn-success">VEÍCULOS </a>       
        <a href="igcar.pdf" role="button"  type="button" class="btn btn-lg btn-info">INFORMAÇÃO</a> 
        <a href="servico.php" role="button"  type="button" class="btn btn-lg btn-warning">SERVIÇOS </a> 
         <button type="button" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#exampleModal" >CLIENTES</button>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Escolha qual tipo de cliente:</h4>
      </div>
     
      <div class="modal-body">
         <a href="cliente_pf.php" role="button"  type="button" class="btn btn-lg btn-info">Pessoa Física.</a>
         <a href="cliente_pj.php" role="button"  type="button" class="btn btn-lg btn-success">Pessoa Júridica.</a> 
      </div>

    </div>
  </div>
</div>          
      </p>
     </div>
