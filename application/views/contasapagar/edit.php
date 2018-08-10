<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Contaapagar Edit</h3>
            </div>
			<?php echo form_open('contasapagar/edit/'.$contaapagar['idcontasapagar']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="datavencimento" class="control-label"><span class="text-danger">*</span>Datavencimento</label>
						<div class="form-group">
							<input type="text" name="datavencimento" value="<?php echo ($this->input->post('datavencimento') ? $this->input->post('datavencimento') : $contaapagar['datavencimento']); ?>" class="form-control" id="datavencimento" />
							<span class="text-danger"><?php echo form_error('datavencimento');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="datapagamento" class="control-label">Datapagamento</label>
						<div class="form-group">
							<input type="text" name="datapagamento" value="<?php echo ($this->input->post('datapagamento') ? $this->input->post('datapagamento') : $contaapagar['datapagamento']); ?>" class="form-control" id="datapagamento" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="valorconta" class="control-label"><span class="text-danger">*</span>Valorconta</label>
						<div class="form-group">
							<input type="text" name="valorconta" value="<?php echo ($this->input->post('valorconta') ? $this->input->post('valorconta') : $contaapagar['valorconta']); ?>" class="form-control" id="valorconta" />
							<span class="text-danger"><?php echo form_error('valorconta');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="desconto" class="control-label">Desconto</label>
						<div class="form-group">
							<input type="text" name="desconto" value="<?php echo ($this->input->post('desconto') ? $this->input->post('desconto') : $contaapagar['desconto']); ?>" class="form-control" id="desconto" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="valorpago" class="control-label">Valorpago</label>
						<div class="form-group">
							<input type="text" name="valorpago" value="<?php echo ($this->input->post('valorpago') ? $this->input->post('valorpago') : $contaapagar['valorpago']); ?>" class="form-control" id="valorpago" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="idformaspagamento" class="control-label">Idformaspagamento</label>
						<div class="form-group">
							<input type="text" name="idformaspagamento" value="<?php echo ($this->input->post('idformaspagamento') ? $this->input->post('idformaspagamento') : $contaapagar['idformaspagamento']); ?>" class="form-control" id="idformaspagamento" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="status" class="control-label">Status</label>
						<div class="form-group">
							<input type="text" name="status" value="<?php echo ($this->input->post('status') ? $this->input->post('status') : $contaapagar['status']); ?>" class="form-control" id="status" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="datalanc" class="control-label">Datalanc</label>
						<div class="form-group">
							<input type="text" name="datalanc" value="<?php echo ($this->input->post('datalanc') ? $this->input->post('datalanc') : $contaapagar['datalanc']); ?>" class="has-datetimepicker form-control" id="datalanc" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="descricao" class="control-label">Descricao</label>
						<div class="form-group">
							<input type="text" name="descricao" value="<?php echo ($this->input->post('descricao') ? $this->input->post('descricao') : $contaapagar['descricao']); ?>" class="form-control" id="descricao" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="numerodoc" class="control-label">Numerodoc</label>
						<div class="form-group">
							<input type="text" name="numerodoc" value="<?php echo ($this->input->post('numerodoc') ? $this->input->post('numerodoc') : $contaapagar['numerodoc']); ?>" class="form-control" id="numerodoc" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="tipomovimentacao" class="control-label">Tipomovimentacao</label>
						<div class="form-group">
							<input type="text" name="tipomovimentacao" value="<?php echo ($this->input->post('tipomovimentacao') ? $this->input->post('tipomovimentacao') : $contaapagar['tipomovimentacao']); ?>" class="form-control" id="tipomovimentacao" />
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Save
				</button>
	        </div>				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>