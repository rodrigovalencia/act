<div id="modalDerivaTicket" class="modal fade modalDerivaTicket" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-md">
		<div class="modal-content">

			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">×</span>
				</button>
				<h4 class="modal-title" id="myModalLabel"><strong>Detalle Ticket</strong></h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						
						<h4>Ticket N° </h4>
						<div class="form-group">
							
							<div class="col-sm-10 col-xs-12">
								<select id="tipoBase" class="select2_single form-control" tabindex="-1">
									<option value="0" disable="true" selected="true">*** Seleccione un Tipo ***</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2 col-xs-12" for="first-name">
								Base
							</label>
							<div class="col-sm-10 col-xs-12">
								<select id="baseBase" class="select2_single form-control" tabindex="-1">
									<option value="0" disable="true" selected="true">*** Seleccione un Tipo ***</option>
								</select>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				<button type="button" class="btn btn-primary" id= "btnDerivar">Derivar Ticket</button>
			</div>
		</div>
	</div>
</div>