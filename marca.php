<?php 

 include "nav.php";

?>
      <div class="page-header">
        <h1>Tables</h1>
      </div>
      <div class="row">
        <div class="col-md-6">
                <table class="table">

            <thead>
              <tr>
                <th>#</th>
                <th>Marca</th>
                <th>Last Name</th>
                <th>Username</th>
              </tr>
            </thead>
  <?php 
  include "conexao.php";
  $sql_visualizar = mysql_query("SELECT * FROM marca ORDER BY marca");
  while($linha = mysql_fetch_array($sql_visualizar)){
  $pega_marca = $linha['marca'];
  ?>

            <tbody>
                <tr>
                <td><?php echo $pega_marca ?></td>
                </tr>              
            </tbody>
<?php
}
?> 