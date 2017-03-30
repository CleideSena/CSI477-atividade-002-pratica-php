<body background="../img/fundo.png" bgproperties="fixed" width=100% height=100% >
<br/>
<br/>

<center><img src="../img/pet.png" " height="160px" width="200px""></center></br>
</br>


</br>
<br/>
<?php echo $this->Form->create('Carrinho',array('url'=>array('action'=>'comprar')));?>
<div class="panel panel-defaut">
	<div class="panel-heading clearfix">
			<h4 class="panel-title pull-left" style="padding-top: 7.5px;">Itens Adicionados ao seu carrinho</h4>
			<p class="text-right">
					<?php echo $this->Form->submit('Comprar',array('class'=>'btn-default btn btn-md pull-right','div'=>false));?>
			</p>
  </div>

<div class="panel-body">
		<table class="table">
			<thead>
				<tr>
					<th class="col-lg-4">Produto</th>
					<th class="col-lg-3">Preço</th>
					<th class="col-lg-3">Quantidade</th>
					<th class="col-lg-2">Total</th>
				</tr>
			</thead>
			<tbody>
				<?php $total=0;?>
				<?php $ValorTotal=0;?>
				<?php foreach ($produtos as $produto):?>
				<tr>
					<td>
						<p><?php
							echo $this->Html->image($produto['Produto']['imagem'], array(
								'width' => '100',
								'height' => '100',
								'alt' => 'imagem' . $produto['Produto']['id'],
							));
						?></p>
						<p><?php echo $produto['Produto']['nome'];?>
					</td>
					<td>R$<?php echo $produto['Produto']['preco'];?>
					</td>
					<td>
						<div class="col-md-3">
							<?php
								echo $this->Form->hidden('id.',array('value'=>$produto['Produto']['id']));?>
							<?php
								echo $this->Form->number('count.',array('label'=>false,
									'class'=>'form-control input-md', 'value'=>$produto['Produto']['count']));?>
						</div>
					</td>
					<td>R$<?php
					$totalProduto = $produto['Produto']['count']*$produto['Produto']['preco'];
					$ValorTotalProduto=number_format($totalProduto,2,'.',',');
					echo $ValorTotalProduto;  ?>
					</td>
				</tr>
				<?php $total = $total + ($produto['Produto']['count']*$produto['Produto']['preco']);
											 $ValorTotal=number_format($total,2,'.',','); ?>
				<?php endforeach;?>
				<tr class="success">
					<td colspan=2></td>
					<th class="col-lg-4">Valor Total da Compra</th> <td>R$<?php echo $ValorTotal;?>
					</td>
				</tr>
			</tbody>
		</table>

	</div>
</div>
<?php echo $this->Form->end();?>
