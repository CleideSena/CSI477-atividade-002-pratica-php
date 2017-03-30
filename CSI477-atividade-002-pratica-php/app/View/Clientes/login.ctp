<body background="../img/fundo.png" bgproperties="fixed" width=100% height=100% >

<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
          <?php echo $this->Html->link(__('Pagina Inicial!'),'/',array('class'=>'navbar-brand'));?>
</div>
    <center><img src="../img/pet.png" " height="160px" width="200px""></center>


<br/>
<div class="panel panel-success">
    <div class="panel-heading clearfix">
      <center><a><h4 class="panel-title" style="padding-top: 7.5px;">ÁREA DO CLIENTE</h4></a></center>
		</div>
		    <div class="panel-body">

	<br/>
	<br/>
	<br/>
  <div class="col-md-1 col-sm-offset-3">
        <p><?php
            echo $this->Html->Link(
                  'Comprar',
                 array(
                    'controller' => 'produtos',
                    'action' => 'visualiza_produtos_cliente'
                ),
                array('class' => 'btn-success btn btn-lg')
            );
         ?></p>
            </div>

            <div class="col-md-1 col-sm-offset-1">
        <p><?php
            echo $this->Html->Link(
                  'Histórico de Compras',
                 array(
                    'controller' => 'compras',
                    'action' => 'historico_de_compras'
                ),
                array('class' => 'btn-success btn btn-lg')
            );
         ?></p>
            </div>

            <div class="col-md-1 col-sm-offset-2">
         <p><?php
          echo $this->Html->link(
                  'Alterar dados',
                array(
                  'controller' => 'clientes',
                  'action' => 'edit',
                  $this->Session->read('Cliente.id')
          ),
          array('class' => 'btn-success btn btn-lg')
      );
        ?></p>
            </div>
    </div>
  </div>
