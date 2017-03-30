
<body background="../img/fundo1.jpg" bgproperties="fixed">

   <center><div class="btn btn-info">
             <div class="form-top-left">
               <img src="../img/logo.png" " height="160px" width="200px""> </center>
             </div>

    <p class="lead"> <br/>Efetue o login para prosseguir ou <a href="<?php
    echo Router::url('/pacientes/index_cadastro'); ?>">Cadastre-se.</a></p>


<div class="form-top container top-content form-top row">
<div class="row">
  <br/>
  <br/>
    <div class="col-md-3 col-sm-offset-3">
        <?php echo $this->Form->create('Paciente', array('url' => 'login' ));?>
          <div class="form-group">
            <br/><strong>Login:</strong>
            <?php echo $this->Form->username('login', array('placeholder' => '', 'rule' => 'notEmpty', 'required' => true , 'class' => 'form-text form-control', 'label' => 'login')); ?>
          </div>
          <div class="form-group">
            <br/><p><strong>Senha:</strong></p>
            <?php echo $this->Form->password('senha', array('placeholder' => '', 'rule' => 'notEmpty', 'required' => true , 'class' => 'form-password form-control', 'label' => 'senha'));?>
          </div>
          <br/><?php  echo $this->Form->submit('Continuar', array('class' => 'btn btn-success') );  ?>
          <br/>
         <strong><a href="<?php echo Router::url('http://localhost/CSI477-atividade-001-pratica-php'); ?>"><u>VOLTAR</u></a></strong>
  </div>
  </div>
</div>
</div>
</body>
