<body background="../img/fundo.jpg" bgproperties="fixed" width=100% height=100% >
</br>  <center><b><p class="fixed">  </br></p> </b> <center>


        <center><div class="btn btn-info">
            <div class="form-top-left">
                   <img src="../img/esportes1.jpg" " height="160px" width="200px""> </center>
  <br/><p class="lead"><a><a/> <strong> ÁREA ADMINISTRATIVA. </br></strong></p>
</div>
<div class="form-top container top-content form-top row">
  <div class="row">
    <br/>
    <div class="col-md-6 col-sm-offset-1">
      <div class="panel panel-success">
        <div class="panel-heading">
          <center><h3 class="panel-title">INCLUIR EVENTO</h3></center>
        </div>
        <div class="panel-body">
          <p><center>
            <div class="form-bottom">
              <?php echo $this->Form->create('Evento', array('url' => 'cadastro' ));?>

              <div class="form-group">
                <br/><p><h4><strong>Nome do novo Evento:</strong></h4></p>
                <?php echo $this->Form->input('nome', array('placeholder' => '', 'required' => true , 'class' => 'form-text form-control', 'label' => '')); ?>
              </div>
              <div class="form-group">
                <br/><p><h4><strong>Preço do novo Evento:</strong></h4></p>
                <?php echo $this->Form->input('preco', array('placeholder' => '', 'required' => true , 'class' => 'form-text form-control', 'label' => ''));?>
              </div>
              <br/><?php echo $this->Form->submit('Cadastrar', array('class' => 'btn btn-success')); ?>
            </div>
          </center></p>
        </div>
      </div>
      <div class="panel panel-primary">
        <div class="panel-heading">
          <center><h3 class="panel-title">EDITAR OU EXCLUIR EVENTOS</h3></center>
        </div>
        <div class="panel-body">
          <p><center><table class="table table-bordered table-hover">
            <thead>
              <tr>
                <th></th>
                <th>id</th>
                <th>NOME</th>
                <th>VALOR</th>
              </tr>
            </thead>
            <tbody>

      <?php foreach ($eventos as $p): ?>
        <tr>
          <td><center><a href=" <?php echo Router::url(array('controller' => 'eventos', 'action' => 'altera_evento', $p['Evento']['id'])); ?>" >Editar</a></center></td>
          <td><?php echo $p['Evento']['id']; ?></td>
          <td>
            <?php echo $p['Evento']['nome']; ?>
          </td>
          <td>
            <?php echo $p['Evento']['preco']; ?>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>-
    </table></center></p>
        </div>
      </div>
    </div>
  </div>
<br/><strong><a href="<?php echo Router::url(array('controller' => 'administradores', 'action' => 'index')); ?>"><u>VOLTAR</u></a></strong>
</div>
