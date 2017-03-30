<body background="../img/fundo.png" bgproperties="fixed" width=100% height=100% >
<br/>
<br/>

<center><img src="../img/pet.png" " height="160px" width="200px""></center></br>
</br>
</br>
</br>
<div class="row">
    <div class="col-lg-6 col-lg-offset-3">

        <h2>Area restrita. Faça login!</h2>

        <div class="well">
            <?php echo $this->Session->flash(); ?>
            <?php echo $this->Form->create('User',array('inputDefaults'=>array('label'=>false)));?>
            <div class="form-group">
                <label for="ClienteLogin">Usuário</label>
                <?php
                    echo $this->Form->input('login',array(
                        'class'=>'form-control',
                        'placeholder'=>'Nome de usuário'
                    ));
                ?>
            </div>
            <div class="form-group">
                <label for="ClienteSenha">Senha</label>
                <?php
                    echo $this->Form->password('senha',array(
                        'class'=>'form-control',
                        'placeholder'=>'Senha'
                    ));
                ?>
            </div>
            <div class="form-group">
                <?php echo $this->Form->submit('Entrar',array('class'=>'btn btn-success'))?>
                <?php echo $this->Form->end();?>
            </div>


    </div>
</div>
