<body background="../img/fundo.png" bgproperties="fixed" width=100% height=100% >
<br/>
<br/>

<center><img src="../img/pet.png" " height="160px" width="200px""></center></br>
</br>

<br/>
<br/>
<div class="panel panel-success">
    <div class="panel-heading clearfix">
        <h4 class="panel-title pull-left" style="padding-top: 7.5px;">Cadastro de Produto</h4>
    </div>

        <div class="panel-body">
            <?php echo $this->Session->flash(); ?>
            <?php
                echo $this->Form->create('Produto',array(
                    'inputDefaults'=>array(
                        'label'=>false
                    ),
                    'type' => 'file'
                ));
            ?>
              <div class="form-group">
                <label for="ProdutoNome">Nome</label>
                <?php
                    echo $this->Form->input('nome',array(
                        'class'=>'form-control',
                        'placeholder'=>'Nome do produto'
                    ));
                ?>
            </div>
            <div class="input-group form-group">
              <label for="ProdutoNome">Imagem</label>
                <span class="input-group">
                    <label for="ProdutoFile" class="btn btn-success btn-file">Baixar Imagem...
                        <?php
                            echo $this->Form->input('file',array(
                                'type' => 'file',
                                'multiple',
                                'style' => 'display:none',
                                'accept' => '.png,.jpg'
                            ));
                        ?></span></label>
            </div>
            <div class="form-group">
                <label for="ProdutoPreco">Preço</label>
                <div class="input-group">
                    <div class="input-group-addon">R$</div>
                    <?php
                        echo $this->Form->input('preco',array(
                            'class'=>'form-control',
                            'placeholder'=>'Preço do produto'
                        ));
                    ?>
                </div>
            </div>
            <div class="form-group">
                    <?php echo $this->Form->submit('Enviar',array('class'=>'btn btn-success'))?>
              </div>
      </div>
        <?php echo $this->Form->end();?>
</div>
