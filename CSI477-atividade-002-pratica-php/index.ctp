<body background="app/webroot/img/fundo.png" bgproperties="fixed" width=100% height=100% >

<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
          <?php echo $this->Html->link(__('Pagina Inicial!'),'/',array('class'=>'navbar-brand'));?>
</div>
    <center><img src="app/webroot/img/pet.png" " height="160px" width="200px""></center>


<br/>
<div class="panel panel-defaut">
    <div class="panel-heading clearfix">
      <center><a><h4 class="panel-title" style="padding-top: 7.5px;">ÁREA ADMINISTRATIVA</h4></a></center>
		</div>
		    <div class="panel-body">

	<br/>
	<br/>
	<br/>

						<div class="col-md-1 col-sm-offset-3">
				<p><?php
					  echo $this->Html->Link(
							    'Cadastrar Produto',
								 array(
									  'controller' => 'produtos',
										'action' => 'add'
								),
								array('class' => 'btn-success btn btn-lg')
						);
			   ?></p>
				    </div>


            <div class="col-md-2 col-sm-offset-3">
				 <p><?php
			 		echo $this->Html->link(
						      'Alterar ou Excluir Produtos',
                  array(
                     'controller' => 'produtos',
                     'action' => 'visualiza_produtos_adm'
                 ),
                 array('class' => 'btn-success btn btn-lg')
            );
			 	?></p>
				    </div>

		</div>
</div>
