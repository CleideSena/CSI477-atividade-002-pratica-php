<body background="../img/fundo.png" bgproperties="fixed" width=100% height=100% >
<br/>
<br/>

<center><img src="../img/pet.png" " height="160px" width="200px""></center></br>
</br>
<br/>
<br/>
<div class="panel panel-success">
	<div class="panel-heading clearfix">
			<h4 class="panel-title pull-left" style="padding-top: 7.5px;">Historico de Compras</h4>
  </div>
  <div class="panel-body">
      <table class="table">
        <thead>
          <tr>
            <th class="col-md-1">Id</th>
            <th class="col-md-2">Produto</th>
            <th class="col-md-3">Preço</th>
            <th class="col-md-3">Quantidade</th>
            <th class="col-md-3">Data</th>
          </tr>
        <thead>
        <tbody>
          <?php foreach($compra as $compra): ?>
            <tr>
            <td>
                <?php echo $compra['Compra']['id']; ?>
              </td>
              <td>
                <?php
                    echo $this->Html->image($imagens[$compra['Compra']['produtos_id']], array(
                        'alt' => 'imagem' . $compra['Compra']['id'],
                        'width' => '150',
                        'height' => '150'
                    ));
                ?>
              </td>
              <td>
                <?php
                  echo $compra['Compra']['preco'];
                ?>
              </td>
              <td>
                <?php
                  echo $compra['Compra']['quantidade'];
                ?>
              </td>
              <td>
                <?php
                  echo $compra['Compra']['data'];
                ?>
              </td>
            </tr>

          <?php endforeach; unset($compra); ?>
          </tbody>
        </table>

</div>
</div>
