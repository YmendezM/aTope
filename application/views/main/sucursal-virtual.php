<section class="cabecera">
	<div  class="img-cabecera" style="background-position: center; background-repeat: no-repeat;background-size:cover !important; -webkit-background-size:cover !important; -o-background-size:cover !important; -moz-background-size:cover !important;">

		<div class="d-none src-ajuste-imgs-desktop" data-target="img-cabecera" data-type="background">
			<?php echo base_url().'assets/images/cabecera.jpg'; ?>
		</div>

		<div class="d-none src-ajuste-imgs-mobile" data-target="img-cabecera" data-type="background">
			<?php echo base_url().'assets/images/cabecera-mob.jpg'; ?>
		</div>

		<div class="row">
			<div class="col-12">
				<h1 class="blanco text-center my-0 mb-xl-5">
					Sucursal Virtual
				</h1>
			</div>
		</div>
		<div class="overlay"></div>
	</div>

	<nav aria-label="breadcrumb" class="bread">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="/"><i class="flaticon flaticon-home"></i></a></li>
			<li class="breadcrumb-item active" aria-current="page">Sucursal Virtual</li>
		</ol>
	</nav>
</section>


<section class="my-5 hentry">
	<div class="container">
		<div class="row mb-5">
			<div class="col-12">
				<div class="tit-int">
					<img class="ico" src="<?php echo base_url().'assets/images/ico.png'; ?>" alt="" /> Sucursal Virtual
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-12">

				<ul id="sucursalVirtualTabs" class="nav nav-tabs nav-justified nav-tabs-int" role="tablist">
					<li class="nav-item">
						<a id="perfil-tab" href="#perfil" class="nav-link active" data-toggle="tab" role="tab">Perfil</a>
					</li>
					<li class="nav-item">
						<a id="pagos-tab" href="#pagos" class="nav-link" data-toggle="tab" role="tab">Pagos y facturación</a>
					</li>
					<li class="nav-item">
						<a id="servicios-tab" href="#servicios" class="nav-link" data-toggle="tab" role="tab">Servicios</a>
					</li>
					<li class="nav-item">
						<a id="cert-tab" href="#cert" class="nav-link" data-toggle="tab" role="tab">Certificados y formularios</a>
					</li>
					<li class="nav-item">
						<a id="consejos-tab" href="#consejos" class="nav-link" data-toggle="tab" role="tab">Consejos</a>
					</li>
					<li class="nav-item">
						<a id="campanas-tab" href="#campanas" class="nav-link" data-toggle="tab" role="tab">Campañas</a>
					</li>
				</ul>

				<div id="sucursalVirtualContent" class="tab-content tab-content-int p-md-3 p-lg-4" role="tablist">
					<div id="perfil" class="card tab-pane fade show active" role="tabpanel" aria-labelledby="perfil-tab">
						<div class="card-header" role="tab" id="perfilHead">
							<a data-toggle="collapse" href="#perfilCollapse" aria-expanded="true" aria-controls="perfilCollapse">
								Perfil
							</a>
						</div>
						<div id="perfilCollapse" class="collapse show" data-parent="#sucursalVirtualContent" role="tabpanel" aria-labelledby="perfilHead">
							<div class="card-body">

								<?php $this->load->view('content/sucursar-virtual/datos-usuario') ;?>
								<hr class="border-azul">
								<?php $this->load->view('content/sucursar-virtual/datos-titular') ;?>

							</div>
						</div>
					</div>

					<div id="pagos" class="card tab-pane fade" role="tabpanel" aria-labelledby="pagos-tab">
						<div class="card-header" role="tab" id="pagosHead">
							<a class="collapsed" data-toggle="collapse" href="#pagosCollapse" aria-expanded="false" aria-controls="pagosCollapse">
								Pago en línea
							</a>
						</div>
						<div id="pagosCollapse" class="collapse" data-parent="#sucursalVirtualContent" role="tabpanel" aria-labelledby="pagosHead">
							<div class="card-body">

								<div class="row mb-5">
									<div class="col-12">
										<div class="accordion" id="pagos-en-linea-accordion">

											<?php $this->load->view('content/sucursar-virtual/pago-online') ;?>

											<?php $this->load->view('content/sucursar-virtual/cupon-pago-presencial') ;?>

											<?php $this->load->view('content/sucursar-virtual/copia-ultima-boleta') ;?>

											<?php $this->load->view('content/sucursar-virtual/historico-pagos') ;?>

											<?php $this->load->view('content/sucursar-virtual/facturacion-historica') ;?>

										</div>
									</div>
								</div>

							</div>
						</div>
					</div>

					<div id="servicios" class="card tab-pane fade" role="tabpanel" aria-labelledby="servicios-tab">
						<div class="card-header" role="tab" id="serviciosHead">
							<a class="collapsed" data-toggle="collapse" href="#serviciosCollapse" aria-expanded="false" aria-controls="serviciosCollapse">
								Servicios
							</a>
						</div>
						<div id="serviciosCollapse" class="collapse" role="tabpanel" data-parent="#sucursalVirtualContent" aria-labelledby="serviciosHead">
							<div class="card-body">

								<div class="row mb-5">
									<div class="col-12">

										<div class="accordion" id="servicios-accordion">
										
											<?php $this->load->view('content/sucursar-virtual/suscripcion-facturacion-electronica') ;?>
										
											<?php $this->load->view('content/sucursar-virtual/fecha-corte-no-pago') ;?>
										
											<?php $this->load->view('content/sucursar-virtual/reposicion-servicio') ;?>
										
											<?php $this->load->view('content/sucursar-virtual/ingreso-lectura-del-mes') ;?>
										
											<?php $this->load->view('content/sucursar-virtual/datos-medidor') ;?>
										
											<?php $this->load->view('content/sucursar-virtual/contratar-pat') ;?>
										
											<?php $this->load->view('content/sucursar-virtual/solicitar-convenio-pago') ;?>
										
											<?php $this->load->view('content/sucursar-virtual/revisar-convenio-vigente') ;?>
										
											<?php $this->load->view('content/sucursar-virtual/postulacion-subsidio') ;?>

										</div>
										
									</div>
								</div>

							</div>
						</div>
					</div>

					<div id="cert" class="card tab-pane fade" role="tabpanel" aria-labelledby="cert-tab">
						<div class="card-header" role="tab" id="certHead">
							<a class="collapsed" data-toggle="collapse" href="#certCollapse" aria-expanded="false" aria-controls="certCollapse">
								Certificados y formularios
							</a>
						</div>
						<div id="certCollapse" class="collapse" role="tabpanel" data-parent="#sucursalVirtualContent" aria-labelledby="certHead">
							<div class="card-body">
								
								<div class="row">
									<div class="col-12 col-lg-4 mb-5 mb-lg-0">
										Cliente activo
									</div>

									<div class="col-12 col-lg-4 mb-5 mb-lg-0">
										Certificado no deuda
									</div>

									<div class="col-12 col-lg-4">
										Formularios
									</div>
								</div>

							</div>
						</div>
					</div>

					<div id="consejos" class="card tab-pane fade" role="tabpanel" aria-labelledby="consejos-tab">
						<div class="card-header" role="tab" id="consejosHead">
							<a class="collapsed" data-toggle="collapse" href="#consejosCollapse" aria-expanded="false" aria-controls="consejosCollapse">
								Consejos
							</a>
						</div>
						<div id="consejosCollapse" class="collapse" role="tabpanel" data-parent="#sucursalVirtualContent" aria-labelledby="consejosHead">
							<div class="card-body">
								
								<div class="row">
									<div class="col-12 col-lg-4 mb-5 mb-lg-0">
										Conoce tu boleta (boleta en detalle)
									</div>

									<div class="col-12 col-lg-4 mb-5 mb-lg-0">
										Intervenciones ilegales
									</div>

									<div class="col-12 col-lg-4">
										Derechos y deberes consumidor
									</div>
								</div>
								
								<div class="row">
									<div class="col-12 col-lg-4 mb-5 mb-lg-0">
										Agua y salud
									</div>

									<div class="col-12 col-lg-4 mb-5 mb-lg-0">
										Consejos de mantención
									</div>

									<div class="col-12 col-lg-4">
										Detecte perdida de agua potable
									</div>
								</div>

							</div>
						</div>
					</div>

					<div id="campanas" class="card tab-pane fade" role="tabpanel" aria-labelledby="campanas-tab">
						<div class="card-header" role="tab" id="campanasHead">
							<a class="collapsed" data-toggle="collapse" href="#campanasCollapse" aria-expanded="false" aria-controls="campanasCollapse">
								Campañas
							</a>
						</div>
						<div id="campanasCollapse" class="collapse" role="tabpanel" data-parent="#sucursalVirtualContent" aria-labelledby="campanasHead">
							<div class="card-body">
								
								<div class="row">
									<div class="col-12 col-md-6 col-lg-4">
										Campaña 1
									</div>

									<div class="col-12 col-md-6 col-lg-4">
										Campaña 2
									</div>

									<div class="col-12 col-md-6 col-lg-4">
										Campaña 3
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>