<body background="app/webroot/img/fundo.png" bgproperties="fixed" width=100% height=100% >

<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
          <?php echo $this->Html->link(__('Pagina Inicial!'),'/',array('class'=>'navbar-brand'));?>
</div>
<br/>
  <?php echo $this->Session->flash(); ?>
<div class="panel panel-primary">
    <div class="panel-heading clearfix">
        <h4 class="panel-title pull-left" style="padding-top: 7.5px;">EFETUAR LOGIN</h4>
    </div>
        <div class="panel-body">

            <?php echo $this->Form->create('Cliente',array('inputDefaults'=>array('label'=>false)));?>
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
                    echo $this->Form->password('senha',array(
                        'class'=>'form-control',
                        'placeholder'=>'Informe sua senha'
                    ));
                ?>
            </div>
            <div class="form-group">
                <?php echo $this->Form->submit('Enviar',array('class'=>'btn btn-primary'))?>
                <?php echo $this->Form->end();?>
            </div>

            <div class="form-group">
                <?php
                    echo $this->Form->Html->link(
                        'Não possui conta? Clique aqui!',
                        array('controller' => 'clientes', 'action' => 'add')
                    );
                ?>
            </div>
        </div>
</div>
