<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Formaspagamento Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('formaspagamento/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Idformaspagamento</th>
						<th>Nome</th>
						<th>Tipopagamento</th>
						<th>Numeroparcelas</th>
						<th>Prazoentreparcelas</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($formaspagamento as $f){ ?>
                    <tr>
						<td><?php echo $f['idformaspagamento']; ?></td>
						<td><?php echo $f['nome']; ?></td>
						<td><?php echo $f['tipopagamento']; ?></td>
						<td><?php echo $f['numeroparcelas']; ?></td>
						<td><?php echo $f['prazoentreparcelas']; ?></td>
						<td>
                            <a href="<?php echo site_url('formaspagamento/edit/'.$f['idformaspagamento']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('formaspagamento/remove/'.$f['idformaspagamento']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
