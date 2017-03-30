
<body background="../img/fundo.jpg" bgproperties="fixed" width=100% height=100% >
</br>  <center><b><p class="fixed">  </br></p> </b> <center>


        <center><div class="btn btn-info">
            <div class="form-top-left">
                   <img src="../img/esportes1.jpg" " height="160px" width="200px""> </center>
  <br/><p class="lead"><a><strong>   ÁREA DO ATLETA. </strong> <br/>Informe a data do registro e salve sua solicitação:</p>
</div>


<div class="form-top container top-content form-top row">
<div class="row">
  <br/>
  <div class="col-md-6 col-sm-offset-1">
    <div class="panel panel-primary">
      <div class="panel-body">
        <?php
        echo $evento['Evento']['nome'];?>
        &nbsp&nbsp&nbsp&nbsp
        R$<?php echo $evento['Evento']['preco'];
        echo $this->Form->create('Registro');?>
        &nbsp&nbsp&nbsp&nbsp
        <?php  echo $this->Form->input('data', array('label' => 'Data para pagamento:    ', 'rule' => 'notEmpty', 'required' => true ,'placeholder' => '', 'class' => 'form-text'));?>
        <?php
              $this->Form->hidden('atleta_id');
              $this->Form->hidden('evento_id'); ?>
        <br/><?php echo $this->Form->submit('Salvar',  array('class' => 'btn btn-success')); ?>
      </div>
    </div>
  </div>
</div>
  <br/><strong><a href="<?php echo Router::url(array('controller' => 'registros', 'action' => 'solicita_registro')); ?>"><u>VOLTAR</u></a></strong>
</div>
