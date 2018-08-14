<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">EDITAR CONTA</h3>
            </div>
			<?php echo form_open('contasapagar/edit/'.$contaapagar['idcontasapagar']); ?>
			<div class="box-body">
				<div class="row clearfix">

          <div class="col-md-2">
            <label for="numerodoc" class="control-label">Nº DOC</label>
            <div class="form-group">
              <input type="text" name="numerodoc" value="<?php echo ($this->input->post('numerodoc') ? $this->input->post('numerodoc') : $contaapagar['numerodoc']); ?>" class="form-control" id="numerodoc" />
            </div>
          </div>

          <div class="col-md-6">
            <label for="descricao" class="control-label">Descrição</label>
            <div class="form-group">
              <input type="text" name="descricao" value="<?php echo ($this->input->post('descricao') ? $this->input->post('descricao') : $contaapagar['descricao']); ?>" class="form-control" id="descricao" />
            </div>
          </div>

          <div class="col-md-2">
            <label for="valorconta" class="control-label"><span class="text-danger">*</span>Valor</label>
            <div class="form-group">
              <input type="text" name="valorconta" value="<?php echo ($this->input->post('valorconta') ? $this->input->post('valorconta') : $contaapagar['valorconta']); ?>" class="form-control" id="valorconta" />
              <span class="text-danger"><?php echo form_error('valorconta');?></span>
            </div>
          </div>
					<div class="col-md-2">
						<label for="datavencimento" class="control-label"><span class="text-danger">*</span>Vencimento</label>
						<div class="form-group">
							<input type="text" name="datavencimento" value="<?php echo ($this->input->post('datavencimento') ? $this->input->post('datavencimento') : $contaapagar['datavencimento']); ?>" class="has-datepicker form-control" id="datavencimento" />
							<span class="text-danger"><?php echo form_error('datavencimento');?></span>
						</div>
					</div>








							<input type="hidden" name="tipomovimentacao" value="SAIDA" class="form-control" id="tipomovimentacao" />

				</div>
			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> ALTERAR
				</button>
	        </div>
			<?php echo form_close(); ?>
		</div>
    </div>
</div>

<script src="<?php echo site_url('resources/js/jquery-2.2.3.min.js');?>"></script>
<script src="<?php echo site_url('resources/js/maskmoney.js');?>"></script>

<script>
$("#valorconta").maskMoney();
$("#valorpago").maskMoney();
$("#desconto").maskMoney();


</script>
