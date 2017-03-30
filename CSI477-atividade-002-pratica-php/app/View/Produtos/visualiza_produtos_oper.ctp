<body background="../img/fundo.png" bgproperties="fixed" width=100% height=100% >
<br/>
<br/>

<center><img src="../img/pet.png" " height="160px" width="200px""></center></br>
</br>

<div class="panel panel-success">
    <div class="panel-heading">
        Produtos Disponivéis
    </div>
        <table class="table table-success table-striped">
          <tr>
            <th class="col-md-1">Id</th>
            <th class="col-md-2">Imagem</th>
            <th class="col-md-3">Nome</th>
            <th class="col-md-3">Preço</th>
            <th class="col-md-3">Ações</th>
          </tr>

          <?php foreach($produtos as $produto): ?>
            <tr>
            <td>
                <?php echo $produto['Produto']['id']; ?>
              </td>
              <td>
                <?php
                    echo $this->Html->image($produto['Produto']['imagem'], array(
                        'alt' => 'imagem' . $produto['Produto']['id'],
                        'width' => '100',
                        'height' => '100'
                    ));
                ?>
              </td>
              <td>
                <?php
                  echo $produto['Produto']['nome'];
                ?>
              </td>
              <td>
                <?php
                  echo $produto['Produto']['preco'];
                ?>
              </td>
              <td>
                  <?php
                    echo $this->Html->link(
                        'Editar',
                        array(
                            'action' => 'edit', $produto['Produto']['id']
                        ),
                        array('class' => 'btn-success btn btn-md')
                    );
                  ?>
              </td>
            </tr>

          <?php endforeach; ?>
        </table>
        <?php unset($produtos); ?>
</div>
