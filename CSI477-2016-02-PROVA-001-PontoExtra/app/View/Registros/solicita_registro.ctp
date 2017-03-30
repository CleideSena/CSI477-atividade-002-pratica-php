<body background="../img/fundo.jpg" bgproperties="fixed" width=100% height=100% >
</br>  <center><b><p class="fixed">  </br></p> </b> <center>


        <center><div class="btn btn-info">
            <div class="form-top-left">
                   <img src="../img/esportes1.jpg" " height="160px" width="200px""> </center>
  <br/><p class="lead"><a><a><a/><strong>   ÁREA DO ATLETA. </strong> <br/>Solicite seu Registro:</p>
</div>


<div class="form-top container top-content form-top row">
<div class="row">
  <br/>
    <div class="col-md-8 col-sm-offset-1">
        <table class="table table-hover">
          <thead>
            <tr>
              <th></th>
              <th>REGISTRO</th>
              <th>VALOR</th>
            </tr>
          </thead>
          <tbody>
              <?php foreach ($eventos as $p): ?>
                <tr>
                  <td>
                    <center><a href=" <?php echo Router::url(array('controller' => 'registros', 'action' => 'salva_solicitacao', $p['Evento']['id'])); ?>" ><button class='btn btn-primary'>Solicitar</button></a></center>
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
      </div>
    </div>
    <br/><strong><a href="<?php echo Router::url(array('controller' => 'atletas', 'action' => 'geral')); ?>"><u>VOLTAR</u></a></strong>
</div>
