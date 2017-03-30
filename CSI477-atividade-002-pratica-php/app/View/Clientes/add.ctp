<body background="../img/fundo.png" bgproperties="fixed" width=100% height=100% >
<br/>
<br/>

<center><img src="../img/pet.png" " height="160px" width="200px""></center></br>
</br>
<br/>
<br/>
<div class="panel panel-success">
    <div class="panel-heading clearfix">
        <h4 class="panel-title pull-left" style="padding-top: 7.5px;">Cadastrar Cliente</h4>
    </div>

          <div class="panel-body">
            <?php echo $this->Session->flash(); ?>
            <?php echo $this->Form->create('Cliente',array('inputDefaults'=>array('label'=>false)));?>
            <div class="form-group">
                <label for="ClienteNome">Nome</label>
                <?php
                    echo $this->Form->input('nome',array(
                        'class'=>'form-control',
                        'placeholder'=>'Informe seu nome'
                    ));
                ?>
            </div>
            <div class="form-group">
                <label for="ClienteLogin">Usuário</label>
                <?php
                    echo $this->Form->input('login',array(
                        'class'=>'form-control',
                        'placeholder'=>'Informe seu usuário'
                    ));
                ?>
            </div>
            <div class="form-group">
                <label for="ClienteSenha">Senha</label>
                <?php
                    echo $this->Form->input('senha',array(
                        'class'=>'form-control',
                        'placeholder'=>'Informe sua senha'
                    ));
                ?>
                </div>

            <div class="form-group">
                    <?php echo $this->Form->submit('Enviar',array('class'=>'btn btn-success'))?>
                </div>
            </div>

            <?php echo $this->Form->end();?>
        </div>
