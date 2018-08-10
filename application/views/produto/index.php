<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">PRODUTOS</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('produto/add'); ?>" class="btn btn-success">NOVO PRODUTO</a>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Codigo</th>
						<th>Codigo de barras</th>
						<th>Produto</th>
						<th>Preço de venda</th>
						<th>Estoque</th>
						<th>Status</th>

						<th>Ações</th>
                    </tr>
                    <?php foreach($produtos as $p){ ?>
                    <tr>
						<td><?php echo $p['produto_id']; ?></td>
            <td><?php echo $p['codbarra']; ?></td>
            	<td><?php echo $p['nomeproduto']; ?></td>
              	<td><?php echo $p['vendaproduto']; ?></td>
						<td><?php echo $p['estoque']; ?> <?php echo $p['unidade']; ?></td>
						<td><?php echo $p['ativo']; ?></td>

						<td>
                            <a href="<?php echo site_url('produto/edit/'.$p['produto_id']); ?>" class="btn btn-info"><span class="fa fa-pencil"></span> Editar</a>
                            <a href="<?php echo site_url('produto/remove/'.$p['produto_id']); ?>" class="btn btn-danger "><span class="fa fa-trash"></span> Excluir</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                <div class="pull-right">
                    <?php echo $this->pagination->create_links(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
