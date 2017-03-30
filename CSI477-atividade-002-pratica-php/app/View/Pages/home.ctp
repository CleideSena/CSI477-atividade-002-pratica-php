<body background="app/webroot/img/fundo.png" bgproperties="fixed" width=100% height=100% >

<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
          <?php echo $this->Html->link(__('Pet Shop Online!'),'/',array('class'=>'navbar-brand'));?>
</div>
  <a><text><center><h1>No PetShop Online, você encontra produtos de qualidade e comodidade na hora de comprar!</h1></center></text></a>
          <center><img src="app/webroot/img/pet.png" " height="160px" width="200px""></center></br>
          <div class="col-md-2 col-sm-offset-1">
            <center><p><a href="<?php echo Router::url(array('controller' => 'produtos', 'action' => 'visualiza_produtos')); ?>"
               class="btn-defaut btn btn-lg">ÁREA GERAL</a></p></center>
          </div>


          <div class="col-md-3 col-sm-offset-1">
            <center><p><a href="<?php echo Router::url(array('controller' => 'clientes', 'action' => 'login')); ?>"
              class="btn-defaut btn btn-lg">ÁREA CLIENTE</a></p></center>
          </div>

          <div class="col-md-2 col-md-offset-1">
            <center><p><a href="<?php echo Router::url(array('controller' => 'administradores', 'action' => 'index')); ?>"
               class="btn-defaut btn btn-lg">ÁREA ADMINISTRATIVA</a></p></center>
          </div>
        </div>
</div>
</body>
