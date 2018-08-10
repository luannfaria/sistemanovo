<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Contasapagar Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('contasapagar/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Idcontasapagar</th>
						<th>Datavencimento</th>
						<th>Datapagamento</th>
						<th>Valorconta</th>
						<th>Desconto</th>
						<th>Valorpago</th>
						<th>Idformaspagamento</th>
						<th>Status</th>
						<th>Datalanc</th>
						<th>Descricao</th>
						<th>Numerodoc</th>
						<th>Tipomovimentacao</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($contasapagar as $c){ ?>
                    <tr>
						<td><?php echo $c['idcontasapagar']; ?></td>
						<td><?php echo $c['datavencimento']; ?></td>
						<td><?php echo $c['datapagamento']; ?></td>
						<td><?php echo $c['valorconta']; ?></td>
						<td><?php echo $c['desconto']; ?></td>
						<td><?php echo $c['valorpago']; ?></td>
						<td><?php echo $c['idformaspagamento']; ?></td>
						<td><?php echo $c['status']; ?></td>
						<td><?php echo $c['datalanc']; ?></td>
						<td><?php echo $c['descricao']; ?></td>
						<td><?php echo $c['numerodoc']; ?></td>
						<td><?php echo $c['tipomovimentacao']; ?></td>
						<td>
                            <a href="<?php echo site_url('contasapagar/edit/'.$c['idcontasapagar']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('contasapagar/remove/'.$c['idcontasapagar']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
