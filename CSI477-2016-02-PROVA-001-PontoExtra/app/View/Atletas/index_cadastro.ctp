<body background="../img/fundo.jpg" bgproperties="fixed" width=100% height=100% >
</br>  <center><b><p class="fixed">  </br></p> </b> <center>


        <center><div class="btn btn-info">
            <div class="form-top-left">
                   <img src="../img/esportes1.jpg" " height="160px" width="200px""> </center>
  <br/><b><p class="lead"><a><strong><br/>Informe os dados:</a></strong></b>
</div>


<div class="form-top container top-content form-top row">
<div class="row">
  <br/>
      <div class="col-md-4 col-sm-offset-2">
        <?php echo $this->Form->create('Atleta', array('url' => 'index_cadastro' ));?>
          <div class="form-group">
            <br/><p><h4><strong>Nome:</strong></h4></p>
            <?php echo $this->Form->input('nome', array('placeholder' => '', 'rule' => 'notEmpty', 'required' => true , 'class' => 'form-text form-control', 'label' => '')); ?>
          </div>
          <div class="form-group">
            <br/><p><h4><strong>Login:</strong></h4></p>
            <?php echo $this->Form->username('login', array('placeholder' => '', 'rule' => 'notEmpty', 'required' => true , 'class' => 'form-text form-control', 'label' => '')); ?>
          </div>
          <div class="form-group">
            <br/><p><h4><strong>Senha:</strong></h4></p>
            <?php echo $this->Form->password('senha', array('placeholder' => '', 'rule' => 'notEmpty', 'required' => true , 'class' => 'form-password form-control', 'label' => ''));?>
          </div>
          <br/><?php echo $this->Form->submit('Cadastrar', array('class' => 'btn btn-success')); ?>
          <br/><strong><a href="<?php echo Router::url(array('controller' => 'atletas', 'action' => 'index_login')); ?>"><u>Voltar</u></a></strong>
      </div>
  </div>
</div>
