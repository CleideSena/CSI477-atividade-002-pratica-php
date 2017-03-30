<body background=" app/webroot/img/fundo.jpg" bgproperties="fixed" width=100% height=100% >
</br>  <center><b><p class="fixed">  </br></p> </b> <center>


        <center><div class="btn btn-info">
            <div class="form-top-left">
                   <img src=" app/webroot/img/esportes1.jpg" " height="160px" width="200px""> </center>

  <br/><p class="lead"><a><a/> <strong>EVENTOS DISPONIVÉIS </BR></strong></p>

</div>


<div class="form-top container top-content form-top row">
<div class="row">
  <br/>
    <div class="col-md-6 col-sm-offset-1">

      <table class="table table-bordered table-hover">
        <thead>
          <tr>
              <th>DATA</th>
            <th>NOME</th>
            <th>VALOR</th>


          </tr>
        </thead>
        <tbody>

  <?php foreach ($eventos as $p): ?>
    <tr>
      <td>
        <?php echo $p['Evento']['data']; ?>
      </td>
      <td>
        <?php echo $p['Evento']['nome']; ?>
      </td>
      <td>
        <?php echo $p['Evento']['preco']; ?>
      </td>


    </tr>
  <?php endforeach; ?>
</tbody>
</table>
  <strong><a href="<?php echo Router::url('http://localhost/CSI477-2016-02-PROVA-001-PontoExtra/'); ?>"><u>VOLTAR</u></a></strong>
</div>
</div>
