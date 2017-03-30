
<body background="../img/fundo1.jpg" bgproperties="fixed">

  <center><div class="btn btn-info">
      <div class="form-top-left">
             <img src="../img/logo.png" " height="160px" width="200px""> </center>

  </div>

  <p class="lead"><a><strong> Cadastre - se!<br/></a></strong>



<div class="form-top container top-content form-top row">
<div class="row">
  <br/>
      <div class="col-md-4 col-sm-offset-2">
        <?php echo $this->Form->create('Paciente', array('url' => 'index_cadastro' ));?>
          <div class="form-group">
            <br/><p><strong>Nome:</strong></p>
            <?php echo $this->Form->input('nome', array('placeholder' => '', 'rule' => 'notEmpty', 'required' => true , 'class' => 'form-text form-control', 'label' => '')); ?>
          </div>
          <div class="form-group">
            <br/><p><strong>Login:</strong></p>
            <?php echo $this->Form->username('login', array('placeholder' => '', 'rule' => 'notEmpty', 'required' => true , 'class' => 'form-text form-control', 'label' => '')); ?>
          </div>
          <div class="form-group">
            <br/><p><strong>Senha:</strong></p>
            <?php echo $this->Form->password('senha', array('placeholder' => '', 'rule' => 'notEmpty', 'required' => true , 'class' => 'form-password form-control', 'label' => ''));?>
          </div>
          <br/><?php echo $this->Form->submit('Cadastrar', array('class' => 'btn btn-success')); ?>
          <br/><strong><a href="<?php echo Router::url(array('controller' => 'pacientes', 'action' => 'index_login')); ?>"><u>VOLTAR</u></a></strong>
      </div>
  </div>
</div>
</boby>
