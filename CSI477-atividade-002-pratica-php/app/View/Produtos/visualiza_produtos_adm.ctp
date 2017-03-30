<body background="../img/fundo.png" bgproperties="fixed" width=100% height=100% >
<br/>
<br/>

<center><img src="../img/pet.png" " height="160px" width="200px""></center></br>
</br>
<br/>
<br/>
<?php
     echo $this->Session->flash(); ?>
<div class="panel panel-success">
    <div class="panel-heading clearfix">
        <h4 class="panel-title pull-left" style="padding-top: 7.5px;">PRODUTOS DISPONIVEIS</h4>
    </div>

        <table class="table table-responsive table-striped">
          <tr>
            <th class="col-md-1">Id</th>
            <th class="col-md-2">Imagem</th>
            <th class="col-md-2">Nome</th>
            <th class="col-md-2">Preço</th>
            <th class="col-md-2">Ações</th>
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
                        'width' => '120',
                        'height' => '120'
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

                  <?php
                      echo $this->Html->link(
                          'Excluir',
                          array(
                              'action' => 'delete', $produto['Produto']['id']
                          ),
                          array(
                              'class' => 'btn-success btn btn-md',
                              'confirm' => 'Deseja realmente excluir o produto ' . $produto['Produto']['id'] . '?'
                          )
                      );
                  ?>
              </td>
            </tr>

          <?php endforeach; ?>
        </table>
        <?php unset($produtos); ?>
</div>
