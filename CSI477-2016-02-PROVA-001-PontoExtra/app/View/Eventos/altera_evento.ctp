<body background="../img/fundo.jpg" bgproperties="fixed" width=100% height=100% >
</br>  <center><b><p class="fixed">  </br></p> </b> <center>


        <center><div class="btn btn-info">
            <div class="form-top-left">
                   <img src="../img/esportes1.jpg" " height="160px" width="200px""> </center>  <br/><p class="lead"><a><a/> <strong> ÁREA ADMINISTRATIVA. </br></strong> Altere ou Exclua o evento:</p>
</div>



<div class="form-top container top-content form-top row">
  <div class="row">
    <br/>
    <div class="col-md-7 col-sm-offset-1">
      <div class="panel panel-success">
        <div class="panel-heading">
          <center><strong><h3class="panel-title">EVENTO: <?php echo $eventos[0]['Evento']['nome'] ?></h3></strong></center>
        </div>
        <div class="panel-body">
          <table class="table table-hover table-condensed">
            <thead>
              <tr>
                <th width= "10%"></th>
                <th>id</th>
                <th>NOME</th>
                <th width= "15%">VALOR</th>
              </tr>
            </thead>
            <tbody>
              <?php echo $this->Form->create('Evento');?>
              <tr>
                <td>
                  <br/><center><?php echo $this->Form->submit('Salvar', array('class' => 'btn btn-success') );?></center>
                </td>
                <td>
                  <br/><center><?php echo $eventos[0]['Evento']['id'] ?></center><br/>
                </td>
                <td>
                  <?php echo $this->Form->input('nome', array('placeholder' => '', 'rule' => 'notEmpty', 'required' => true ,
                  'value' => $eventos[0]['Evento']['nome'],'class' => 'form-text form-control', 'label' => '')); ?><br/>
                </td>
                <td>
                  <?php echo $this->Form->input('preco', array('placeholder' => '', 'rule' => 'notEmpty', 'required' => true ,
                  'value' => $eventos[0]['Evento']['preco'], 'class' => 'form-password form-control', 'label' => '')); ?><br/>
                </td>
            </tbody>
          </table>
          <br/><center><a href="<?php echo Router::url(array('controller' => 'eventos', 'action' => 'crud_eventos')); ?>"><strong><u>VOLTAR</a></center>
          <br/>
          <br/><center><?php echo $this->Html->link('Deletar Evento',
                                      array('controller' => 'eventos', 'action' => 'delet', $eventos[0]['Evento']['id'] ),
                                      array('confirm' => 'Tem certeza que deseja excluir o evento?'));?> </u></strong>
           </center>
        </div>
      </div>
    </div>
  </div>
</div>
