<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Usuarios Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('usuario/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Idusuarios</th>
						<th>Login</th>
						<th>Senha</th>
						<th>Permissoes</th>
						<th>Habilitado</th>
						<th>Nomepermissao</th>
						<th>Datacadastro</th>
						<th>Comissao</th>
						<th>Taxacomissao</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($usuarios as $u){ ?>
                    <tr>
						<td><?php echo $u['idusuarios']; ?></td>
						<td><?php echo $u['login']; ?></td>
						<td><?php echo $u['senha']; ?></td>
						<td><?php echo $u['permissoes']; ?></td>
						<td><?php echo $u['habilitado']; ?></td>
						<td><?php echo $u['nomepermissao']; ?></td>
						<td><?php echo $u['datacadastro']; ?></td>
						<td><?php echo $u['comissao']; ?></td>
						<td><?php echo $u['taxacomissao']; ?></td>
						<td>
                            <a href="<?php echo site_url('usuario/edit/'.$u['idusuarios']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('usuario/remove/'.$u['idusuarios']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
