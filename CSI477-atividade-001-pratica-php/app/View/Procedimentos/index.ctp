
<body background=" app/webroot/img/fundo1.jpg" bgproperties="fixed" >
  <center><div class="btn btn-info">
      <div class="form-top-left">
             <img src=" app/webroot/img/logo.png" " height="160px" width="200px""> </center>
          </div>

<div class="form-top container top-content form-top row">
<div class="row">
  <br/>
    <div class="col-md-6 col-sm-offset-1">
      <h4><strong><center> <b>TABELA DE PROCEDIMENTOS REALIZADOS PELA ANALISE LABORATORIAL</b></center></strong></h4><br/>
      <table class="table table-bordered table-hover">
        <thead>
          <tr>
            <th>NOME</th>
            <th>VALOR</th>
          </tr>
        </thead>
        <tbody>

  <?php foreach ($procedimentos as $p): ?>
    <tr>
      <td>
        <?php echo $p['Procedimento']['nome']; ?>
      </td>
      <td>
        <?php echo $p['Procedimento']['preco']; ?>
      </td>
    </tr>
  <?php endforeach; ?>


</tbody>
</table>

<a href="<?php echo Router::url('http://localhost/CSI477-atividade-001-pratica-php'); ?>"><u>VOLTAR</u></a>
</div>
</div>
</div>
</body>
