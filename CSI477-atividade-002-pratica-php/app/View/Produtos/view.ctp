<body background="../img/fundo.png" bgproperties="fixed" width=100% height=100% >
<br/>
<br/>

<center><img src="../img/pet.png" " height="160px" width="200px""></center></br>
</br>


<div class="panel panel-success col-md-3" align="center">
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
</div>
