<body background="../img/fundo.jpg" bgproperties="fixed" width=100% height=100% >
</br>  <center><b><p class="fixed">  </br></p> </b> <center>


        <center><div class="btn btn-info">
            <div class="form-top-left">
                   <img src="../img/esportes1.jpg" " height="160px" width="200px""> </center>
  <br/><p class="lead"><a><strong><br/>Efetue o login ou <a href="<?php echo Router::url('/atletas/index_cadastro'); ?>"><u>Cadastre-se</u></a></strong>
</div>

<div class="form-top container top-content form-top row">
<div class="row">
  <br/>
    <div class="col-md-4 col-sm-offset-2">
        <?php echo $this->Form->create('Atleta', array('url' => 'login' ));?>
          <div class="form-group">
            <br/><h4><strong>Login:</strong></h4>
            <?php echo $this->Form->username('login', array('placeholder' => '', 'rule' => 'notEmpty', 'required' => true , 'class' => 'form-text form-control', 'label' => 'login')); ?>
          </div>
          <div class="form-group">
            <br/><p><h4><strong>Senha:</strong></h4></p>
            <?php echo $this->Form->password('senha', array('placeholder' => '', 'rule' => 'notEmpty', 'required' => true , 'class' => 'form-password form-control', 'label' => 'senha'));?>
            </div>
          <br/><?php  echo $this->Form->submit('Continuar', array('class' => 'btn btn-success') );  ?>
          <br/>
  <strong><a href="<?php echo Router::url('http://localhost/CSI477-2016-02-PROVA-001-PontoExtra/'); ?>"><u>VOLTAR</u></a></strong>
</div>
</div>
      </div>
    </div>
