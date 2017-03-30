<body background="../img/fundo.png" bgproperties="fixed" width=100% height=100% >
<br/>
<br/>

<center><img src="../img/pet.png" " height="160px" width="200px""></center></br>
</br>
</br>

<p> Seja Bem - Vindo, <?php echo $this->Session->read('Usuario.nome'); ?> </p>


<p>
    <?php
        echo $this->Html->link(
            'Gerenciar Produtos',
            array(
                'controller' => 'produtos',
                'action' => 'visualiza_produtos_admin',
                $this->Session->read('Usuario.tipo')
            )
        );
    ?>
</p>
