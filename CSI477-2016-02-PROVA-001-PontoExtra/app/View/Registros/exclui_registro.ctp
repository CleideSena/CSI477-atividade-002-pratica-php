<body background="../img/fundo.jpg" bgproperties="fixed" width=100% height=100% >
</br>  <center><b><p class="fixed">  </br></p> </b> <center>


        <center><div class="btn btn-info">
            <div class="form-top-left">
                   <img src="../img/esportes1.jpg" " height="160px" width="200px""> </center>
  <br/><p class="lead"><a><strong>   ÁREA DO ATLETA. </strong> <br/>Altere seu Registro:</p>
</div>

<div class="form-top container top-content form-top row">
  <div class="row">
    <br/>
    <div class="col-md-7 col-sm-offset-1">
      <div class="panel panel-success">
        <div class="panel-heading">
          <center><h3 class="panel-title">Registro: <?php echo $registros[0]['Registro']['id'] ?></h3></center>
        </div>
        <div class="panel-body">
          <h4><strong><center>Dados:</center></strong></h4><br/>
          <table class="table table-hover table-condensed">
            <thead>
              <tr>
                <th width= "10%"></th>
                <th width= "10%">id</th>
                <th>Atleta</th>
                <th>Nome</th>
                <th width= "19%">Data</th>
              </tr>
            </thead>
            <tbody>
              <?php echo $this->Form->create('Registro');?>
              <tr>
                <td>
                  &nbsp<center><?php echo $this->Form->submit('Salvar', array('class' => 'btn btn-success') );?></center>
                </td>
                <td>
                  <center><br/><?php echo $registros[0]['Registro']['id'] ?></center>
                </td>
                <td>
                  <br/><?php echo $registros[0]['Atleta']['nome'] ?>
                </td>
                <td>
                  <br/><?php echo $registros[0]['Evento']['nome'] ?>
                </td>
                <td>
                  <?php echo $this->Form->input('data', array('placeholder' => 'Digite o preço..', 'rule' => 'notEmpty', 'required' => true ,
                  'value' => $registros[0]['Registro']['data'], 'class' => 'form-password form-control', 'label' => '')); ?><br/>
                </td>
            </tbody>
          </table>
          <br/><center><a href="<?php echo Router::url(array('controller' => 'registros', 'action' => 'examgeral')); ?>">Voltar</a></center>
          <br/>
          <br/><center><?php echo $this->Html->link('Deletar Registro',
                                      array('controller' => 'registros', 'action' => 'delet', $registros[0]['Registro']['id'] ),
                                      array('confirm' => 'Deseja mesmo deletar esse Registro?'));?>
           </center>
        </div>
      </div>
    </div>
  </div>
</div>
