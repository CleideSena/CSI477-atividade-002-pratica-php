
<body background="../img/fundo1.jpg" bgproperties="fixed">

  <center><div class="btn btn-info">
      <div class="form-top-left">
             <img src="../img/logo.png" " height="160px" width="200px""> </center>

<div class="form-top container top-content form-top row">
<div class="row">
  <br/>
    <div class="col-md-6 col-sm-offset-1">
        <table class="table table-hover">
          <thead>
            <tr>
              <th>EXAME</th>
              <th>VALOR</th>
              <th>DATA</th>
            </tr>
          </thead>
          <tbody>
            <?php
             $qtdexam = 0;
             $qtdvalor = 0;

            foreach ($exames as $e):
              $qtdexam = $qtdexam + 1;
              $qtdvalor += $e['Procedimento']['preco']; ?>
              <tr>
                <td>
                  <?php echo $e['Procedimento']['nome']; ?>
                </td>
                <td>
                  <?php echo $e['Procedimento']['preco']; ?>
                </td>
                <td>
                  <?php echo $e['Exame']['data']; ?>
                </td>
              </tr>
            <?php endforeach; ?>
            <tr><td colspan="3"></td></tr>
              <tr class="success">
              <td><strong>QUANTIDADE DE EXAMES:</strong></td><td><?php echo $qtdexam; ?></td><td></td>
              </tr>
            <tr class="success">
              <td><strong>VALOR TOTAL:</strong></td><td> R$ <?php echo $qtdvalor; ?></td>
              <td></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
        <br/><strong><a href="<?php echo Router::url(array('controller' => 'pacientes', 'action' => 'geral')); ?>"><u>Voltar</u></a></strong>
</div>
</body>
