	</main>
	<footer class="footer">

		<!-- <a class="navbar-brand-footer " href="/">
			<?php //if($empresa == "nuevosur"){?>
				<img class="logo-nuevosur" src="<?php //echo base_url().'assets/images/Nuevosur.svg'; ?>" alt="Logo Nuevosur"/>
			<?php //} else {?>
				<img class="logo-essbio" src="<?php //echo base_url().'assets/images/Essbio.svg'; ?>" alt="Logo Essbio"/>
			<?php //} ?>
		</a> -->

		<div class="container mt-4">
			<div class="row">
				<div class="col-12 col-sm-6 col-lg-4 mb-4">
					<div class="tit-foo">Accesos<span></span></div>
					<nav class="navbar">
						<ul class="navbar-nav mr-auto">
							<li class="nav-item">
								<a class="nav-link" href="/nosotros">Nosotros</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="/clientes">Clientes</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="/proveedores">Proveedores</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="/inversionistas">Inversionistas</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="/sostenibilidad">Sostenibilidad</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="/nosotros/trabaja-con-nosotros">Trabaja con nosotros</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="/sostenibilidad/comunidades/solicitud-de-auspicios">Solicitud de auspicio</a>
							</li>
						</ul>
					</nav>
				</div>
				<div class="col-12 col-sm-6 col-lg-4 mb-4">
					<div class="tit-foo">Clientes<span></span></div>
					<nav class="navbar">
						<ul class="navbar-nav mr-auto">
							<li class="nav-item">
								<a class="nav-link" href="/clientes/lugares-de-pago-oficinas-atencion/oficinas">Oficinas</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="/clientes/mi-cuenta/pago-de-cuentas">Pago de cuentas</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="/validar-personal-contratista">Validar personal contratista</a>
							</li>
						</ul>
					</nav>
				</div>
				<div class="col-12 col-sm-12 col-lg-4 mb-4">
					<div class="tit-foo">Contacto<span></span></div>
					<nav class="navbar">
						<ul class="navbar-nav mr-auto">
							<li class="nav-item">
								<span><i class="flaticon flaticon-phone-call"></i>600 33 11000</span>
							</li>
							<li class="nav-item">
								<span><i class="flaticon flaticon-phone-call"></i>600 37 24000</span>
							</li>
							<li class="nav-item">
								<span><i class="flaticon flaticon-smartphone"></i>*3311</span>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="/clientes/servicio-al-cliente/reclamos-y-sugerencias">Reclamos y sugerencias</a>
							</li>
						</ul>
					</nav>
					<div class="rrss mt-3">

						<?php // twitter ;?>
						<?php if($empresa == "nuevosur"){?>
							<a href="https://www.twitter.com/Nuevosur_cl" target="_blank">
								<i class="flaticon flaticon-twitter"></i>
							</a>
						<?php } else {?>
							<a href="https://www.twitter.com/essbio" target="_blank">
								<i class="flaticon flaticon-twitter"></i>
							</a>
						<?php } ?>

						<?php // facebook ;?>
						<?php if($empresa == "nuevosur"){?>
							<a href="https://www.facebook.com/NuevosurChile" target="_blank">
								<i class="flaticon flaticon-facebook"></i>
							</a>
						<?php } else {?>
							<a href="https://www.facebook.com/EssbioChile" target="_blank">
								<i class="flaticon flaticon-facebook"></i>
							</a>
						<?php } ?>

						<?php // instagram ;?>
						<?php if($empresa == "nuevosur"){?>
							<a href="https://www.instagram.com/nuevosur_chile" target="_blank">
								<i class="flaticon flaticon-instagram"></i>
							</a>
						<?php } else {?>
							<a href="https://www.instagram.com/essbio_chile" target="_blank">
								<i class="flaticon flaticon-instagram"></i>
							</a>
						<?php } ?>

						<?php // linkedin ;?>
						<?php if($empresa == "nuevosur"){?>
							<a href="https://www.linkedin.com/company/nuevosur" target="_blank">
								<i class="flaticon flaticon-linkedin-logo"></i>
							</a>
						<?php } else {?>
							<a href="https://www.linkedin.com/company/essbio" target="_blank">
								<i class="flaticon flaticon-linkedin-logo"></i>
							</a>
						<?php } ?>

						<?php // whatsapp ;?>
						<?php if($empresa == "nuevosur"){?>
							<a href="https://wa.me/56939545279?text=Hola%20Nuevosur!" target="_blank">
								<i class="flaticon flaticon-whatsapp"></i>
							</a>
						<?php } else {?>
							<a href="https://wa.me/56939545280?text=Hola%20Essbio!" target="_blank">
								<i class="flaticon flaticon-whatsapp"></i>
							</a>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>


		<div class="direcciones">
			<div class="container">
				<?php if($empresa == "nuevosur"){?>
					<div class="row">
						<div class="col-12 col-sm-6">
							<i class="flaticon-location"></i> Planta San Luis, Monte Baeza S/N, Talca
						</div>
						<div class="col-12 col-sm-6 text-sm-right">
							<i class="flaticon-phone-call"></i> Mesa Central: +56 9 71 22 04 127
						</div>
					</div>
				<?php } else {?>
					<div class="row">
						<div class="col-12 col-sm-6">
							<i class="flaticon-location"></i> Avenida Prat 199 Torre B, piso 15, Concepción
						</div>
						<div class="col-12 col-sm-6 text-sm-right">
							<i class="flaticon-phone-call"></i> Mesa Central: +56 41 22 63 700
						</div>
					</div>

					<hr class="d-sm-none">

					<div class="row">
						<div class="col-12 col-sm-6">
							<i class="flaticon-location"></i> Avenida Bello Horizonte 845, Rancagua
						</div>
						<div class="col-12 col-sm-6 text-sm-right">
							<i class="flaticon-phone-call"></i> Mesa Central: +56 72 24 43 030
						</div>
					</div>
				<?php } ?>
			</div>
		</div>

		<div class="creditos">
			<div class="container">
				<div class="row">
					<div class="col-12 text-center">
						© Copyright 2006 - 2021. Todos los derechos reservados 
					</div>
				</div>
			</div>			
		</div>
	</footer>


</body>
</html>