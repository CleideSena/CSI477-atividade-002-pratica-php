
<body background="../img/fundo.png" bgproperties="fixed" width=100% height=100% >
<br/>
<br/>

<center><img src="../img/pet.png" " height="160px" width="200px""></center></br>
<div class="panel panel-success">
    <div class="panel-heading clearfix">

        <?php
            echo $this->Html->Link(
                'Carrinho',
                array(
                    'controller' => 'carrinhos',
                    'action' => 'visualiza_carrinho'
                ),
                array('class' => 'btn-success btn btn-md pull-right')
            );
        ?>
    </div>

    <div class="panel-body">
        <?php foreach($produtos as $produto): ?>
                <div class="col-sm-6 col-md-4">
                    <div class="panel panel-success" align="center">
                      <p><?php
                          echo $this->Html->image($produto['Produto']['imagem'], array(
                              'alt' => 'imagem' . $produto['Produto']['id'],
                              'width' => '150',
                              'height' => '150',
                              'style' => 'padding-top:5px;'
                          ));
                      ?></p>
                      <p><?php echo $produto['Produto']['nome']; ?></p>
                      <p><?php echo "R$" . $produto['Produto']['preco']; ?></p>
                      <p>

                        <?php echo $this->Form->create('Carrinho',array('id'=>'add-form','url'=>array('controller'=>'carrinhos','action'=>'add')));?>
                        <?php echo $this->Form->hidden('id',array('value'=>$produto['Produto']['id']))?>
                        <?php echo $this->Form->submit('Adicionar ao carrinho',array('class'=>'btn-success btn btn-md'));?>
                        <?php echo $this->Form->end();?>
                      </p>
                  </div>
              </div>
              <?php endforeach; unset($produtos); ?>

    </div>
  </div>
