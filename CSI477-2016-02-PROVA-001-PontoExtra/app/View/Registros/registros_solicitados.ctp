<body background="../img/fundo.jpg" bgproperties="fixed" width=100% height=100% >
</br>  <center><b><p class="fixed">  </br></p> </b> <center>


        <center><div class="btn btn-info">
            <div class="form-top-left">
                   <img src="../img/esportes1.jpg" " height="160px" width="200px""> </center>
  <br/><p class="lead"><a><strong> ÁREA DO ATLETA. </strong> <br/>Registros Solicitados:</p>
</div>

<div class="form-top container top-content form-top row">
<div class="row">
  <br/>
    <div class="col-md-6 col-sm-offset-1">
        <table class="table table-hover">
          <thead>
            <tr>
              <th>REGISTRO</th>
              <th>VALOR</th>
              <th>DATA</th>
            </tr>
          </thead>
          <tbody>
            <?php
             $qtdexam = 0;
             $qtdvalor = 0;

            foreach ($registros as $e):
              $qtdexam = $qtdexam + 1;
              $qtdvalor += $e['Evento']['preco']; ?>
              <tr>
                <td>
                  <?php echo $e['Evento']['nome']; ?>
                </td>
                <td>
                  <?php echo $e['Evento']['preco']; ?>
                </td>
                <td>
                  <?php echo $e['Registro']['data']; ?>
                </td>
              </tr>
            <?php endforeach; ?>
            <tr><td colspan="3"></td></tr>
              <tr class="success">
              <td><strong>QUANTIDADE DE REGISTROS:</strong></td><td><?php echo $qtdexam; ?></td><td></td>
              </tr>
            <tr class="success">
              <td><strong>VALOR TOTAL:</strong></td><td> R$ <?php echo $qtdvalor; ?></td>
              <td></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
        <br/><strong><a href="<?php echo Router::url(array('controller' => 'atletas', 'action' => 'geral')); ?>"><u>VOLTAR</u></a></strong>
</div>
