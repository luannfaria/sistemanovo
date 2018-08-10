<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Pedidodelivery Add</h3>
            </div>
            <?php echo form_open('pedidodelivery/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="status" class="control-label">Status</label>
						<div class="form-group">
							<input type="text" name="status" value="<?php echo $this->input->post('status'); ?>" class="form-control" id="status" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="timestamp" class="control-label">Timestamp</label>
						<div class="form-group">
							<input type="text" name="timestamp" value="<?php echo $this->input->post('timestamp'); ?>" class="has-datetimepicker form-control" id="timestamp" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="troco" class="control-label">Troco</label>
						<div class="form-group">
							<input type="text" name="troco" value="<?php echo $this->input->post('troco'); ?>" class="form-control" id="troco" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="identregador" class="control-label">Identregador</label>
						<div class="form-group">
							<input type="text" name="identregador" value="<?php echo $this->input->post('identregador'); ?>" class="form-control" id="identregador" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="idtaxaentrega" class="control-label">Idtaxaentrega</label>
						<div class="form-group">
							<input type="text" name="idtaxaentrega" value="<?php echo $this->input->post('idtaxaentrega'); ?>" class="form-control" id="idtaxaentrega" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="idclientes" class="control-label">Idclientes</label>
						<div class="form-group">
							<input type="text" name="idclientes" value="<?php echo $this->input->post('idclientes'); ?>" class="form-control" id="idclientes" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="data" class="control-label">Data</label>
						<div class="form-group">
							<input type="text" name="data" value="<?php echo $this->input->post('data'); ?>" class="form-control" id="data" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="subtotal" class="control-label">Subtotal</label>
						<div class="form-group">
							<input type="text" name="subtotal" value="<?php echo $this->input->post('subtotal'); ?>" class="form-control" id="subtotal" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="taxaentrega" class="control-label">Taxaentrega</label>
						<div class="form-group">
							<input type="text" name="taxaentrega" value="<?php echo $this->input->post('taxaentrega'); ?>" class="form-control" id="taxaentrega" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="desconto" class="control-label">Desconto</label>
						<div class="form-group">
							<input type="text" name="desconto" value="<?php echo $this->input->post('desconto'); ?>" class="form-control" id="desconto" />
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