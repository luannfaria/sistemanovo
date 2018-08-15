<div class="row">
    <div class="col-md-12">
        <div class="box">

            <div class="box-body-caixa">
              <div class="esquerdacaixa">
              <div class="tabelacaixa">
                <table class="table table-striped">
                    <tr>
						<th>Idcaixa</th>
						<th>Data</th>
						<th>Valor</th>
						<th>Descricao</th>

						<th>Usuario Id</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($caixa as $c){ ?>
                    <tr>
						<td><?php echo $c['idcaixa']; ?></td>
						<td><?php echo $c['data']; ?></td>
						<td><?php echo $c['valor']; ?></td>
						<td><?php echo $c['descricao']; ?></td>

				
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
<div class="direitacaixa">
</div>
            </div>
        </div>
    </div>
</div>
