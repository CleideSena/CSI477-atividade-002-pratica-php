
<body background="../img/fundo1.jpg" bgproperties="fixed">

  <center><div class="btn btn-info">
      <div class="form-top-left">
             <img src="../img/logo.png" " height="160px" width="200px""> </center>

                 </div>

  <br/><p class="lead"> Seja Bem-vindo!</p>
    <div class="list-group">
        <div class="list-group">

          <a href="<?php echo Router::url(array('controller' => 'exames', 'action' => 'solicita_exame')); ?>" class="list-group-item"> <strong> Solicitacao de Exames</strong></a>
          <a href="<?php echo Router::url(array('controller' => 'exames', 'action' => 'exames_solicitados')); ?>" class="list-group-item"><strong> Exames Solicitados</strong></a>
          <a href="<?php echo Router::url(array('controller' => 'exames', 'action' => 'altera_exame')); ?>" class="list-group-item"><strong> Alterar Exame</strong></a>
          <a href="<?php echo Router::url(array('controller' => 'exames', 'action' => 'exclui_exame')); ?>" class="list-group-item"><strong> Excluir Exame</strong></a>
          </div>
    </div>
  <br/><strong><a href="<?php echo Router::url(array('controller' => 'pacientes', 'action' => 'index_login')); ?>"><u>VOLTAR</u></a></strong>
</div>
</div>

</boby>
