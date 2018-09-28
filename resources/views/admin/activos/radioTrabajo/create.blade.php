@extends('layouts.app')

@section('titulo', ' Crear Radio Trabajo')

@push('estilos')
@endpush

@push('acciones')
@endpush

@section('contenido')
<div class="container-fluid">
	<div class="d-flex flex-row justify-content-center">
		<h3 class="text-center"><strong>Administración de Activos</strong></h3>
		<h5 class="text-center"><strong>Radios de Trabajo</strong></h5>
	</div>
	<hr>
	<div class="d-flex flex-row">
		<label for="txtDate">Fecha de Creación</label>
		<input type="text" name="txtDate" class="form-text text-center" value="<?php echo date("d-m-Y");?>" disabled>
	</div>
	<hr>
	<div class="d-flex flex-md-row flex-sm-row">
			<h4><strong>Carga Masiva</strong></h4>
	</div>
	<div class="d-flex flex-row align-items-center">
		<span class="d-sm-inline-flex"><input type="file" title="Seleccione archivo" class="file col-md-4 col-sm-6" id="massiveFile" name="massiveFile" accept=".csv"></span>
		<span class="d-sm-inline-flex"><button class="btn btn-primary">Importar Masivamente</button></span>
	</div>
	<hr>
	<div class="d-flex flex-row">
		<h4><strong>Carga Individual</strong></h4>
		<div class="flex-row">
			<h5>Datos de la Radio</h5>
			<div class="flex-row">
				<div class="d-inline-flex">
					<span class="d-sm-inline-flex col-lg-5 col-md-3 col-sm-6 col-xs-12">
						<label for="Marca_activo">Fabricante</label>
						<select class="custom-select" id="Marca_activo" name="Marca_activo"></select> 
					</span>
					<span class="d-sm-inline-flex col-lg-5 col-md-3 col-sm-6 col-xs-12">
						<label for="txtFlashport">Flashport</label>
						<input type="text" name="txtFlashport" class="form-text">
					</span>
				</div>
			</div>
			<div class="flex-row">
				<div class="d-inline-flex">
					<span class="d-sm-inline-flex col-lg-5 col-md-3 col-sm-6 col-xs-12">
						<label for="Modelo_activo">Modelo</label>
						<select class="custom-select" id="Modelo_activo" name="Modelo_activo"></select>
					</span>
					<span class="d-sm-inline-flex col-lg-5 col-md-3 col-sm-6 col-xs-12">
						<label for="Sistema_activo">Sistema</label>
						<select class="custom-select" id="Sistema_activo" name="Sistema_activo"></select>
					</span>
				</div>
			</div>
			<div class="flex-row">
				<div class="d-inline-flex">
					<span class="d-sm-inline-flex col-lg-5 col-md-3 col-sm-6 col-xs-12">
						<label for="txtSerie">N° de Serie</label>
						<input type="text" name="txtSerie" class="form-text text-center">
					</span>
					<span class="d-sm-inline-flex col-lg-5 col-md-3 col-sm-6 col-xs-12">
						<label for="txtIdSistema">ID de Sistema</label>
						<input type="text" name="txtIdSistema" id="txtIdSistema" class="form-text">
					</span>
				</div>
			</div>
		</div>
		<div class="flex-row">
			<h5>Datos de Administración</h5>
			<div class="flex-row">
				<div class="d-inline-flex">
					<span class="d-sm-inline-flex col-lg-5 col-md-6 col-sm-6">
						<label for="Empresa_activo">Empresa</label>
						<select class="custom-select" id="Empresa_activo" name="Empresa_activo"></select> 
					</span>
					<span class="d-sm-inline-flex col-lg-5 col-md-6 col-sm-6">
						<label for="txtContrato">N° de Contrato</label>
						<input type="text" name="txtContrato" id="txtContrato" class="form-text">
					</span>
				</div>
				<div class="d-inline-flex">
					<span class="d-sm-inline-flex col-lg-5 col-md-6 col-sm-6">
						<label for="txtResponsable">Responsable</label>
						<input type="text" name="txtResponsable" id="txtResponsable" class="form-text">
					</span>
					<span class="d-sm-inline-flex col-lg-5 col-md-6 col-sm-6">
						<label for="txtTercero">Adm. Tercero</label>
						<input type="text" name="txtTercero" id="txtTercero" class="form-text">
					</span>
				</div>
			</div>
		</div>
		<hr>
		<div class="flex-row">
			<h5>Datos de Ubicación</h5>
			<div class="flex-row">
				<div class="d-inline-flex">
					<span class="d-sm-inline-flex col-lg-5 col-md-6 col-sm-6">
						<label for="Ubicacion_activo">Ubicación</label>
						<select class="custom-select" id="Ubicacion_activo" name="Ubicacion_activo"></select><br>
						<label for="Area_activo">Área</label>
						<select class="custom-select" id="Area_activo" name="Area_activo"></select> 
					</span>
				</div>
				<div class="d-inline-flex">
					<span class="d-sm-inline-flex col-lg-5 col-md-6 col-sm-6">
						<label for="txtInstalacion">Lugar de Instalación</label>
						<input type="text" name="txtInstalacion" id="txtInstalacion" class="form-text" disabled>
						<button class="btn-block btn-primary">Oficina</button>
						<button class="btn-block btn-primary">Vehículo</button>
					</span>
				</div>
			</div>
		</div>
	</div>
	<hr>
	<div class="d-flex flex-row">
		<button class="btn btn-primary">Ingresar</button>
		<button class="btn btn-danger">Cancelar</button>
	</div>
</div>
@endsection