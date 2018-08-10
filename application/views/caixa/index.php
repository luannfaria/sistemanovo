<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Caixa Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('caixa/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Idcaixa</th>
						<th>Data</th>
						<th>Valor</th>
						<th>Descricao</th>
						<th>Idformaspagamento</th>
						<th>Tipomovimentacao</th>
						<th>Usuario Id</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($caixa as $c){ ?>
                    <tr>
						<td><?php echo $c['idcaixa']; ?></td>
						<td><?php echo $c['data']; ?></td>
						<td><?php echo $c['valor']; ?></td>
						<td><?php echo $c['descricao']; ?></td>
						<td><?php echo $c['idformaspagamento']; ?></td>
						<td><?php echo $c['tipomovimentacao']; ?></td>
						<td><?php echo $c['usuario_id']; ?></td>
						<td>
                            <a href="<?php echo site_url('caixa/edit/'.$c['idcaixa']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('caixa/remove/'.$c['idcaixa']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
