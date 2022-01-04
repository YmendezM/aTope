<section class="rel">

	<div class="box-slider">
		<ul class="nav nav-tabs nav-fill" id="tabIndex" role="tablist">
			<li class="nav-item" role="presentation">
				<a class="nav-link active" id="mi-cuenta-tab" data-toggle="tab" href="#mi-cuenta" role="tab" aria-controls="mi-cuenta" aria-selected="true">Mi cuenta</a>
			</li>
			<li class="nav-item" role="presentation">
				<a class="nav-link" id="pago-express-tab" data-toggle="tab" href="#pago-express" role="tab" aria-controls="pago-express" aria-selected="false">Pago express</a>
			</li>
		</ul>
		<div class="tab-content" id="tabIndexContent">
			<div class="tab-pane fade show active" id="mi-cuenta" role="tabpanel" aria-labelledby="mi-cuenta-tab">
				<p class="upp text-center">Ingresa a tu sucursal virtual</p>
				<form>
					<div class="form-group">
						<label for="rut">RUT</label>
						<div class="input-group mb-2">
							<div class="input-group-prepend">
								<div class="input-group-text"><i class="flaticon flaticon-user"></i></div>
							</div>
							<input type="text" class="form-control" id="rut">
						</div>
					</div>
					<div class="form-group">
						<label for="password">Contraseña</label>
						<div class="input-group mb-2">
							<div class="input-group-prepend">
								<div class="input-group-text"><i class="flaticon flaticon-padlock"></i></div>
							</div>
							<input type="password" class="form-control" id="password">
						</div>
					</div>
					<button type="submit" class="btn btn-primary btn-block">Ingresar</button>

					<p class="text-center mt-3">
						<a href="">¿Olvidaste tu contraseña?</a>
					</p>

					<p class="text-center">
						¿No conoces tu número de servicio?<br/>
						<a href=""><b>Haz clic aquí</b></a>
					</p>

					<p class="text-center">O ingresa con:</p>

					<div class="row">
						<div class="col-12 col-md-6">
							<button type="submit" class="btn btn-primary btn-block"> <i class="flaticon flaticon-facebook-1"></i> Facebook</button>
						</div>
						<div class="col-12 col-md-6">
							<button type="submit" class="btn btn-secondary btn-block mt-2 mt-md-0"> <i class="flaticon flaticon-google"></i> Google</button>
						</div>
					</div>
				</form>
			</div>
			<div class="tab-pane fade" id="pago-express" role="tabpanel" aria-labelledby="pago-express-tab">
				<p class="upp text-center">Realiza tu pago de servicio express</p>
				<form>
					<div class="form-group">
						<label for="email">Correo electrónico</label>
						<div class="input-group mb-2">
							<div class="input-group-prepend">
								<div class="input-group-text"><i class="flaticon flaticon-email"></i></div>
							</div>
							<input type="email" class="form-control" id="email">
						</div>
					</div>
					<div class="form-group">
						<label for="id_servicio">Número de servicio</label>
						<div class="input-group mb-2">
							<div class="input-group-prepend">
								<div class="input-group-text"><i class="flaticon flaticon-numbers"></i></div>
							</div>
							<input type="text" class="form-control" id="id_servicio">
						</div>
					</div>
					<button type="submit" class="btn btn-primary btn-block">Pagar</button>

					<p class="text-center mt-3">
						Al realizar el pago del servicio con el método "PAGO EXPRESS" no se registrará el pago del mes en el Historial de cuenta. Te recomendamos <b><a href="">Iniciar Sesión</a></b>
					</p>
				</form>
			</div>
		</div>
	</div>

	<div class="slider-principal d-none d-xl-block">
		<div>
			<img src="<?php echo base_url().'assets/images/slider1.jpg'; ?>" alt="" />
		</div>
		<div>
			<img src="<?php echo base_url().'assets/images/slider2.jpg'; ?>" alt="" />
		</div>
	</div>

	<div class="slider-principal d-none d-md-block d-xl-none">
		<div>
			<img src="<?php echo base_url().'assets/images/slider1-tab.jpg'; ?>" alt="" />
		</div>
		<div>
			<img src="<?php echo base_url().'assets/images/slider2-tab.jpg'; ?>" alt="" />
		</div>
	</div>

	<div class="slider-principal d-block d-md-none">
		<div>
			<img src="<?php echo base_url().'assets/images/slider1-mob.jpg'; ?>" alt="" />
		</div>
		<div>
			<img src="<?php echo base_url().'assets/images/slider2-mob.jpg'; ?>" alt="" />
		</div>
	</div>
	
	
</section>

<section class="accesos-directos">
	<?php $this->load->view('content/accesos-directos') ;?>
</section>