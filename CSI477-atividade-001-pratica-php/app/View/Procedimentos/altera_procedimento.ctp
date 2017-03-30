
<body background="../img/fundo1.jpg" bgproperties="fixed" >

  <center><div class="btn btn-info">
      <div class="form-top-left">
             <img src="../img/logo.png" " height="160px" width="200px""> </center>

                 </div>

</div>
</div>


<div class="form-top container top-content form-top row">
  <div class="row">
    <br/>
    <div class="col-md-7 col-sm-offset-1">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <center><class="panel-title">PROCEDIMENTO: <?php echo $procedimentos[0]['Procedimento']['nome'] ?></center>
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
              <?php echo $this->Form->create('Procedimento');?>
              <tr>
                <td>
                  <br/><center><?php echo $this->Form->submit('Salvar', array('class' => 'btn btn-success') );?></center>
                </td>
                <td>
                  <br/><center><?php echo $procedimentos[0]['Procedimento']['id'] ?></center><br/>
                </td>
                <td>
                  <?php echo $this->Form->input('nome', array('placeholder' => '', 'rule' => 'notEmpty', 'required' => true ,
                  'value' => $procedimentos[0]['Procedimento']['nome'],'class' => 'form-text form-control', 'label' => '')); ?><br/>
                </td>
                <td>
                  <?php echo $this->Form->input('preco', array('placeholder' => '', 'rule' => 'notEmpty', 'required' => true ,
                  'value' => $procedimentos[0]['Procedimento']['preco'], 'class' => 'form-password form-control', 'label' => '')); ?><br/>
                </td>
            </tbody>
          </table>
          <br/><center><a href="<?php echo Router::url(array('controller' => 'procedimentos', 'action' => 'crud_procedimentos')); ?>"><u>VOLTAR</a></center>
          <br/>
          <br/><center><?php echo $this->Html->link('Deletar Procedimento',
                                      array('controller' => 'procedimentos', 'action' => 'delet', $procedimentos[0]['Procedimento']['id'] ),
                                      array('confirm' => 'Tem certeza que deseja excluir o procedimento?'));?> </u>
           </center>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</body>
