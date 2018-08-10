<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">CONTAS A RECEBER</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('contasareceber/add'); ?>" class="btn btn-success">NOVA CONTA</a>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>

						<th>Nº DOC</th>
						<th>Cliente</th>
						<th>Descrição</th>
						<th>Valor</th>
						<th>Data venc</th>

						<th>Data pgto</th>
						<th>Status</th>

						<th>Ações</th>
                    </tr>
                    <?php foreach($contasareceber as $c){ ?>
                    <tr>
                      	<td><?php echo $c['numerodoc']; ?></td>
                        	<td><?php echo $c['clienteid']; ?></td>
                          	<td><?php echo $c['descricao']; ?></td>
                            <td><?php echo $c['valorconta']; ?></td>
                            	<td><?php echo $c['datavencimento']; ?></td>


						<td><?php echo $c['datapagamento']; ?></td>


						<td><?php echo $c['status']; ?></td>


						<td>
                            <a href="<?php echo site_url('contasareceber/edit/'.$c['idcontasareceber']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                            <a href="<?php echo site_url('contasareceber/remove/'.$c['idcontasareceber']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
