<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, maximum-scale=1, user-scalable=no">
	<meta name="description" content="Descripción de la página">
	<meta name="keywords" content="Palabras claves">
	<title><?php echo $empresa; ?> | Título de la página</title>

	<?php // favicon ;?>
	<link rel="shortcut icon" href="<?php echo base_url().'assets/images/favicon/favicon.ico'; ?>" type="image/x-icon" />
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url().'assets/images/favicon/apple-icon-57x57.png'; ?>">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url().'assets/images/favicon/apple-icon-60x60.png'; ?>">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url().'assets/images/favicon/apple-icon-72x72.png'; ?>">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url().'assets/images/favicon/apple-icon-76x76.png'; ?>">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url().'assets/images/favicon/apple-icon-114x114.png'; ?>">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url().'assets/images/favicon/apple-icon-120x120.png'; ?>">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url().'assets/images/favicon/apple-icon-144x144.png'; ?>">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url().'assets/images/favicon/apple-icon-152x152.png'; ?>">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url().'assets/images/favicon/apple-icon-180x180.png'; ?>">
	<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo base_url().'assets/images/favicon/android-icon-192x192.png'; ?>">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url().'assets/images/favicon/favicon-32x32.png'; ?>">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url().'assets/images/favicon/favicon-96x96.png'; ?>">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url().'assets/images/favicon/favicon-16x16.png'; ?>">
	<link rel="manifest" href="<?php echo base_url().'assets/images/favicon/manifest.json'; ?>">
	<meta name="msapplication-TileColor" content="#FFFFFF">
	<meta name="msapplication-TileImage" content="<?php echo base_url().'assets/images/favicon/ms-icon-144x144.png'; ?>">
	<meta name="theme-color" content="#FFFFFF">
	<?php // FIN favicon ;?>

	<link rel="stylesheet" href="<?php echo base_url().'assets/css/flaticon.css?v=1.0'; ?>">
	<link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.min.css'; ?>">
	<link rel="stylesheet" href="<?php echo base_url().'assets/css/dataTables.bootstrap4.min.css'; ?>">
	<link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap-select.min.css'; ?>">
	<link rel="stylesheet" href="<?php echo base_url().'assets/css/slick.css'; ?>">
	<link rel="stylesheet" href="<?php echo base_url().'assets/css/style.css?v=1.1'; ?>">

	<script src="<?php echo base_url().'assets/js/jquery-3.6.0.min.js'; ?>"></script>
	<script src="<?php echo base_url().'assets/js/popper.min.js'; ?>"></script>
	<script src="<?php echo base_url().'assets/js/bootstrap.min.js'; ?>"></script>
	<script src="<?php echo base_url().'assets/js/bootstrap-select.min.js'; ?>"></script>
	<script src="<?php echo base_url().'assets/js/datatables.min.js'; ?>"></script>
	<script src="<?php echo base_url().'assets/js/dataTables.bootstrap4.min.js'; ?>"></script>
	<script src="<?php echo base_url().'assets/js/slick.min.js'; ?>"></script>
	<script src="<?php echo base_url().'assets/js/diseno.js'; ?>"></script>
</head>
<body>
	<header role="banner" class="header">
		<div class="menu-sup">
			<div class="container">
				<div class="row justify-content-between">
					<div class="col-7 col-sm-7 col-md-7">
						<span class="dropdown">
							<a href="#" class="btn-header">
								<i class="flaticon flaticon-name"></i> <span class="d-none d-md-inline-block">Registro</span>
							</a>
						</span>

						<?php // LOGIN;?>
						<span class="dropdown">
							<a href="" class="btn-header" role="button" id="loginDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="flaticon flaticon-user"></i> <span class="d-none d-md-inline-block">Ingresar</span>
							</a>
							<div class="dropdown-menu" aria-labelledby="loginDropdown">
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

									<button type="submit" class="btn btn-primary btn-block"> <i class="flaticon flaticon-facebook-1"></i> Facebook</button>
									<button type="submit" class="btn btn-secondary btn-block"> <i class="flaticon flaticon-google"></i> Google</button>
								</form>
							</div>
						</span>
						<?php // FIN LOGIN;?>

						<?php // LOGUEADO;?>
						<span class="dropdown">
							<a href="" class="btn-header" role="button" id="logueadoDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="flaticon flaticon-user"></i> <span class="d-none d-md-inline-block">Hola Maximiliano</span>
							</a>
							<div class="dropdown-menu" aria-labelledby="logueadoDropdown">
								<ul class="navbar-nav navbar-logueado">
									<li class="nav-item"><a class="nav-link" href="/sucursal-virtual">Mi Perfil</a></li>
									<li class="nav-item"><a class="nav-link" href="#">Cerrar Sesión</a></li>
								</ul>
							</div>
						</span>
						<?php // FIN LOGIN;?>
					</div>
					<div class="col-5 col-sm-5 col-md-5 text-right">
						<div class="dropdown">
							<a class="btn-header dropdown-toggle" role="button" id="idiomaDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<img class="img-idioma" src="<?php echo base_url().'assets/images/banderas/espanol.svg'; ?>" alt="" /> <span class="d-none d-md-inline-block">Español</span>
							</a>
							<ul class="dropdown-menu dropdown-menu-right" aria-labelledby="idiomaDropdown">
								<li class="dropdown-item">
									<a href="">
										<img class="img-idioma" src="<?php echo base_url().'assets/images/banderas/espanol.svg'; ?>" alt="" /> Español
									</a>
								</li>
								<li class="dropdown-item">
									<a href="">
										<img class="img-idioma" src="<?php echo base_url().'assets/images/banderas/ingles.svg'; ?>" alt="" /> Inglés
									</a>
								</li>
								<li class="dropdown-item">
									<a href="">
										<img class="img-idioma" src="<?php echo base_url().'assets/images/banderas/mapudungun.svg'; ?>" alt="" /> Mapudungún
									</a>
								</li>
								<li class="dropdown-item">
									<a href="">
										<img class="img-idioma" src="<?php echo base_url().'assets/images/banderas/creole.svg'; ?>" alt="" /> Creolé
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>

		<nav class="navbar navbar-expand-lg navbar-dark bg-celeste justify-content-between">
			<a class="navbar-brand" href="/">
				<?php if($empresa == "nuevosur"){?>
					<img class="logo-nuevosur" src="<?php echo base_url().'assets/images/Nuevosur.svg'; ?>" alt="Logo Nuevosur"/>
				<?php } else {?>
					<img class="logo-essbio" src="<?php echo base_url().'assets/images/Essbio.svg'; ?>" alt="Logo Essbio"/>
				<?php } ?>
			</a>

			<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse navbar-expand-lg" id="collapsibleNavbar">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="/">
							<i class="flaticon flaticon-home"></i>
						</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" id="nosotrosDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Nosotros
						</a>
						<ul class="dropdown-menu" id="nosotrosMenu" aria-labelledby="nosotrosDropdown">
							<li class="dropdown-submenu">
								<a class="dropdown-item collapsed" data-toggle="collapse" href="#collapse-1" role="button" aria-expanded="false" aria-controls="collapse-1">
									Somos <?php echo $empresa; ?>
								</a>
								<div class="collapse" id="collapse-1" data-parent="#nosotrosMenu">
									<a class="collapse-item" href="/nosotros/somos/datos-generales">Datos generales</a>
									<a class="collapse-item" href="/nosotros/somos/principios-inspiradores">Principios inspiradores</a>
									<a class="collapse-item" href="/nosotros/somos/historia-de-la-compania">Historia de la compañía</a>
									<a class="collapse-item" href="/nosotros/somos/areas-de-concesion">Áreas de concesión</a>
									<a class="collapse-item" href="/nosotros/somos/inversiones">Inversiones</a>
								</div>
							</li>
							<li class="dropdown-submenu">
								<a class="dropdown-item collapsed" data-toggle="collapse" href="#collapse-2" role="button" aria-expanded="false" aria-controls="collapse-2">
									Qué Hacemos
								</a>
								<div class="collapse" id="collapse-2" data-parent="#nosotrosMenu">
									<a class="collapse-item" href="/nosotros/que-hacemos/ciclo-urbano-del-agua">Ciclo urbano del agua</a>
									<a class="collapse-item" href="/nosotros/que-hacemos/potabilizacion-del-agua">Potabilización del agua</a>
									<a class="collapse-item" href="/nosotros/que-hacemos/tratamiento-de-aguas-servidas">Tratamiento de aguas servidas</a>
									<a class="collapse-item" href="/nosotros/que-hacemos/mantencion-de-alcantarillado">Mantención de alcantarillado</a>
									<a class="collapse-item" href="/nosotros/que-hacemos/asesoria-apr">Asesoría APR</a>
									<a class="collapse-item" href="/nosotros/que-hacemos/fiscalizacion-descarga-de-riles">Fiscalización descarga de riles</a>
									<a class="collapse-item" href="/nosotros/que-hacemos/venta-de-agua-granel">Venta de agua granel</a>
								</div>
							</li>
							<li class="dropdown-submenu">
								<a class="dropdown-item collapsed" data-toggle="collapse" href="#collapse-3" role="button" aria-expanded="false" aria-controls="collapse-3">
									Organización
								</a>
								<div class="collapse" id="collapse-3" data-parent="#nosotrosMenu">
									<a class="collapse-item" href="/nosotros/organizacion/directorio">Directorio</a>
									<a class="collapse-item" href="/nosotros/organizacion/ejecutivos">Ejecutivos</a>
								</div>
							</li>
							<li class="dropdown-submenu">
								<a class="dropdown-item collapsed" data-toggle="collapse" href="#collapse-4" role="button" aria-expanded="false" aria-controls="collapse-4">
									Ética y Transparencia
								</a>
								<div class="collapse" id="collapse-4" data-parent="#nosotrosMenu">
									<a class="collapse-item" href="/nosotros/etica-y-transparencia/sistema-gestion-de-etica">Sistema gestión de ética</a>
									<a class="collapse-item" href="/nosotros/etica-y-transparencia/practicas-de-gobierno-corporativo">Prácticas de gobierno corporativo</a>
									<a class="collapse-item" href="/nosotros/etica-y-transparencia/sistema-prevencion-de-delitos">Sistema prevención de delitos</a>
								</div>
							</li>
							<li class="dropdown-submenu">
								<a class="dropdown-item collapsed" data-toggle="collapse" href="#collapse-5" role="button" aria-expanded="false" aria-controls="collapse-5">
									Regulación
								</a>
								<div class="collapse" id="collapse-5" data-parent="#nosotrosMenu">
									<a class="collapse-item" href="/nosotros/regulacion/empresa-regulada">Empresa regulada</a>
									<a class="collapse-item" href="/nosotros/regulacion/nuestras-tarifas">Nuestras tarifas</a>
									<a class="collapse-item" href="/nosotros/regulacion/otra">Otra</a>
								</div>
							</li>
							<li>
								<a class="dropdown-item" href="/nosotros/noticias">Noticias</a>
							</li>
							<li class="dropdown-submenu">
								<a class="dropdown-item collapsed" data-toggle="collapse" href="#collapse-6" role="button" aria-expanded="false" aria-controls="collapse-6">
									Trabaja con Nosotros
								</a>
								<div class="collapse" id="collapse-6" data-parent="#nosotrosMenu">
									<a class="collapse-item" href="/nosotros/trabaja-con-nosotros/oportunidades-laborales-practicas-memorias">Oportunidades laborales, prácticas y memorias</a>
									<a class="collapse-item" href="/nosotros/trabaja-con-nosotros/diversidad-equidad-e-inclusion">Diversidad, equidad e inclusión</a>
									<a class="collapse-item" href="/nosotros/trabaja-con-nosotros/propuesta-de-valor-al-empleado">Propuesta de valor al empleado</a>
								</div>
							</li>
						</ul>
					</li>

					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" id="clientesDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Clientes
						</a>
						<ul class="dropdown-menu" id="clientesMenu" aria-labelledby="clientesDropdown">
							<li class="dropdown-submenu">
								<a class="dropdown-item collapsed" data-toggle="collapse" href="#collapse-10" role="button" aria-expanded="false" aria-controls="collapse-10">
									Mi Cuenta
								</a>
								<div class="collapse" id="collapse-10" data-parent="#clientesMenu">
									<a class="collapse-item" href="/clientes/mi-cuenta/pago-de-cuentas">Pago de cuentas</a>
									<a class="collapse-item" href="/clientes/mi-cuenta/conoce-tu-numero-de-servicio">Conoce tu número de servicio</a>
									<a class="collapse-item" href="/clientes/mi-cuenta/descarga-tu-boleta">Descarga tu boleta</a>
									<a class="collapse-item" href="/clientes/mi-cuenta/suscripcion-electronica">Suscripción electrónica</a>
									<a class="collapse-item" href="/clientes/mi-cuenta/facilidades-de-pago">Facilidades de pago</a>
									<a class="collapse-item" href="/clientes/mi-cuenta/historico-de-pagos">Histórico de pagos</a>
									<a class="collapse-item" href="/clientes/mi-cuenta/cupon-de-pago-presencial">Cupón de pago presencial</a>
									<a class="collapse-item" href="/clientes/mi-cuenta/fecha-de-corte-por-no-pago">Fecha de corte por no pago</a>
									<a class="collapse-item" href="/clientes/mi-cuenta/reposicion-del-servicio">Reposición del servicio</a>
									<a class="collapse-item" href="/clientes/mi-cuenta/ingresar-lectura">Ingresar lectura</a>
									<a class="collapse-item" href="/clientes/mi-cuenta/contrata-pat">Contrata PAT</a>
								</div>
							</li>
							<li class="dropdown-submenu">
								<a class="dropdown-item collapsed" data-toggle="collapse" href="#collapse-11" role="button" aria-expanded="false" aria-controls="collapse-11">
									Nuevos Clientes
								</a>
								<div class="collapse" id="collapse-11" data-parent="#clientesMenu">
									<a class="collapse-item" href="/clientes/nuevos-clientes/pasos-para-ser-un-nuevo-cliente">Pasos para ser un nuevo cliente</a>
									<a class="collapse-item" href="/clientes/nuevos-clientes/factibilidad">Factibilidad</a>
									<a class="collapse-item" href="/clientes/nuevos-clientes/proyecto">Proyecto</a>
									<a class="collapse-item" href="/clientes/nuevos-clientes/ejecucion-inspeccion-y-recepcion">Ejecución, inspección y recepción</a>
									<a class="collapse-item" href="/clientes/nuevos-clientes/cliente">Cliente</a>
									<a class="collapse-item" href="/clientes/nuevos-clientes/consultas-y-respuestas-orientadas">Consultas y respuestas orientadas</a>
								</div>
							</li>
							<li class="dropdown-submenu">
								<a class="dropdown-item collapsed" data-toggle="collapse" href="#collapse-12" role="button" aria-expanded="false" aria-controls="collapse-12">
									Lugares de Pago y Oficinas de Atención
								</a>
								<div class="collapse" id="collapse-12" data-parent="#clientesMenu">
									<a class="collapse-item" href="/clientes/lugares-de-pago-oficinas-atencion/lugares-de-pago-mapa-recaudadores">Lugares de pago - Mapa recaudadores</a>
									<a class="collapse-item" href="/clientes/lugares-de-pago-oficinas-atencion/oficinas">Oficinas</a>
									<a class="collapse-item" href="/clientes/lugares-de-pago-oficinas-atencion/cortes-programados-y-de-emergencia">Cortes programados y de emergencia</a>
									<a class="collapse-item" href="/clientes/lugares-de-pago-oficinas-atencion/paga-a-traves-de-tu-banco">Paga a traves de tu banco</a>
									<a class="collapse-item" href="/clientes/lugares-de-pago-oficinas-atencion/medios-de-pago">Medios de pago</a>
								</div>
							</li>
							<li class="dropdown-submenu">
								<a class="dropdown-item collapsed" data-toggle="collapse" href="#collapse-13" role="button" aria-expanded="false" aria-controls="collapse-13">
									Servicio al Cliente
								</a>
								<div class="collapse" id="collapse-13" data-parent="#clientesMenu">
									<a class="collapse-item" href="/clientes/servicio-al-cliente/canales-de-atencion">Canales de atención</a>
									<a class="collapse-item" href="/clientes/servicio-al-cliente/preguntas-frecuentes">Preguntas frecuentes</a>
									<a class="collapse-item" href="/clientes/servicio-al-cliente/reclamos-y-sugerencias">Reclamos y sugerencias</a>
									<a class="collapse-item" href="/clientes/servicio-al-cliente/trazabilidad-ods">Trazabilidad ODS</a>
									<a class="collapse-item" href="/clientes/servicio-al-cliente/solicitudes-catastrales-llae">Solicitudes catastrales (LLAE)</a>
									<a class="collapse-item" href="/clientes/servicio-al-cliente/certificados-y-formularios">Certificados y formularios</a>
									<a class="collapse-item" href="/clientes/servicio-al-cliente/denuncia-de-ilicitos">Denuncia de ilicitos</a>
									<a class="collapse-item" href="/clientes/servicio-al-cliente/datos-del-medidor">Datos del medidor</a>
									<a class="collapse-item" href="/clientes/servicio-al-cliente/consejos-utiles">Consejos útiles</a>
								</div>
							</li>
						</ul>
					</li>

					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" id="proveedoresDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Proveedores
						</a>
						<ul class="dropdown-menu" id="proveedoresMenu" aria-labelledby="proveedoresDropdown">
							<li class="dropdown-submenu">
								<a class="dropdown-item collapsed" data-toggle="collapse" href="#collapse-20" role="button" aria-expanded="false" aria-controls="collapse-20">
									Quiero Ser Proveedor
								</a>
								<div class="collapse" id="collapse-20" data-parent="#proveedoresMenu">
									<a class="collapse-item" href="/proveedores/quiero-ser-proveedor/requisitos-para-ser-proveedor">Requisitos para ser proveedor</a>
									<a class="collapse-item" href="/proveedores/quiero-ser-proveedor/formulario-de-contacto">Formulario de contacto</a>
									<a class="collapse-item" href="/proveedores/quiero-ser-proveedor/modelo-proveedores">Modelo proveedores</a>
								</div>
							</li>
							<li class="dropdown-submenu">
								<a class="dropdown-item collapsed" data-toggle="collapse" href="#collapse-21" role="button" aria-expanded="false" aria-controls="collapse-21">
									Licitaciones
								</a>
								<div class="collapse" id="collapse-21" data-parent="#proveedoresMenu">
									<a class="collapse-item" href="/proveedores/licitaciones/licitaciones">Licitaciones</a>
									<a class="collapse-item" href="/proveedores/licitaciones/proceso-de-contratacion">Proceso de contratación</a>
									<a class="collapse-item" href="/proveedores/licitaciones/documentos-aplicables">Documentos aplicables</a>
								</div>
							</li>
							<li class="dropdown-submenu">
								<a class="dropdown-item collapsed" data-toggle="collapse" href="#collapse-22" role="button" aria-expanded="false" aria-controls="collapse-22">
									Asistencia a Proveedores
								</a>
								<div class="collapse" id="collapse-22" data-parent="#proveedoresMenu">
									<a class="collapse-item" href="/proveedores/asistencia-a-proveedores/links-de-interes">Links de interés</a>
								</div>
							</li>
							<li><a class="dropdown-item" href="#">Consulta de Pago</a></li>
						</ul>
					</li>

					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" id="inversionistasDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Inversionistas
						</a>
						<ul class="dropdown-menu" id="inversionistasMenu" aria-labelledby="inversionistasDropdown">
							<li class="dropdown-submenu">
								<a class="dropdown-item collapsed" data-toggle="collapse" href="#collapse-30" role="button" aria-expanded="false" aria-controls="collapse-30">
									Quiénes Somos
								</a>
								<div class="collapse" id="collapse-30" data-parent="#inversionistasMenu">
									<a class="collapse-item" href="/inversionistas/quienes-somos/nuestra-empresa">Nuestra empresa</a>
									<a class="collapse-item" href="/inversionistas/quienes-somos/nuestro-proposito">Nuestro propósito</a>
									<a class="collapse-item" href="/inversionistas/quienes-somos/nuestra-historia">Nuestra historia</a>
									<a class="collapse-item" href="/inversionistas/quienes-somos/informacion-del-mercado">Información del mercado</a>
									<a class="collapse-item" href="/inversionistas/quienes-somos/factores-de-riesgo">Factores de riesgo</a>
									<a class="collapse-item" href="/inversionistas/quienes-somos/sustentabilidad">Sustentabilidad</a>
									<a class="collapse-item" href="/inversionistas/quienes-somos/informacion-de-contacto">Información de contacto</a>
								</div>
							</li>
							<li class="dropdown-submenu">
								<a class="dropdown-item collapsed" data-toggle="collapse" href="#collapse-31" role="button" aria-expanded="false" aria-controls="collapse-31">
									Nuestro Negocio
								</a>
								<div class="collapse" id="collapse-31" data-parent="#inversionistasMenu">
									<a class="collapse-item" href="/inversionistas/nuestro-negocio/nuestras-operaciones">Nuestras operaciones</a>
									<a class="collapse-item" href="/inversionistas/nuestro-negocio/nuestros-clientes-y-zona-de-concesion">Nuestros clientes y zona de concesión</a>
									<a class="collapse-item" href="/inversionistas/nuestro-negocio/empresas-del-grupo">Empresas del grupo</a>
									<a class="collapse-item" href="/inversionistas/nuestro-negocio/negocios-no-regulados">Negocios no regulados</a>
								</div>
							</li>
							<li class="dropdown-submenu">
								<a class="dropdown-item collapsed" data-toggle="collapse" href="#collapse-32" role="button" aria-expanded="false" aria-controls="collapse-32">
									Gobierno Corporativo
								</a>
								<div class="collapse" id="collapse-32" data-parent="#inversionistasMenu">
									<a class="collapse-item" href="/inversionistas/gobierno-corporativo/directores-y-ejecutivos">Directores y ejecutivos</a>
									<a class="collapse-item" href="/inversionistas/gobierno-corporativo/documentos-de-gobierno-corporativo">Documentos de gobierno corporativo</a>
									<a class="collapse-item" href="/inversionistas/gobierno-corporativo/sistema-de-gestion-de-compliance">Sistema de gestión de compliance</a>
									<a class="collapse-item" href="/inversionistas/gobierno-corporativo/otros-documentos">Otros documentos</a>
								</div>
							</li>
							<li class="dropdown-submenu">
								<a class="dropdown-item collapsed" data-toggle="collapse" href="#collapse-33" role="button" aria-expanded="false" aria-controls="collapse-33">
									Comunicaciones, Eventos y Presentaciones
								</a>
								<div class="collapse" id="collapse-33" data-parent="#inversionistasMenu">
									<a class="collapse-item" href="/inversionistas/comunicaciones-eventos-y-presentaciones/calendario-de-resultados">Calendario de resultados</a>
									<a class="collapse-item" href="/inversionistas/comunicaciones-eventos-y-presentaciones/noticias">Noticias</a>
									<a class="collapse-item" href="/inversionistas/comunicaciones-eventos-y-presentaciones/hechos-esenciales">Hechos esenciales</a>
									<a class="collapse-item" href="/inversionistas/comunicaciones-eventos-y-presentaciones/comunicados-de-prensa">Comunicados de prensa</a>
									<a class="collapse-item" href="/inversionistas/comunicaciones-eventos-y-presentaciones/presentaciones">Presentaciones</a>
								</div>
							</li>
							<li class="dropdown-submenu">
								<a class="dropdown-item collapsed" data-toggle="collapse" href="#collapse-34" role="button" aria-expanded="false" aria-controls="collapse-34">
									Información Financiera
								</a>
								<div class="collapse" id="collapse-34" data-parent="#inversionistasMenu">
									<a class="collapse-item" href="/inversionistas/informacion-financiera/memorias">Memorias</a>
									<a class="collapse-item" href="/inversionistas/informacion-financiera/analisis-razonado">Análisis razonado</a>
									<a class="collapse-item" href="/inversionistas/informacion-financiera/estados-financieros">Estados financieros</a>
								</div>
							</li>
							<li class="dropdown-submenu">
								<a class="dropdown-item collapsed" data-toggle="collapse" href="#collapse-35" role="button" aria-expanded="false" aria-controls="collapse-35">
									Accionistas
								</a>
								<div class="collapse" id="collapse-35" data-parent="#inversionistasMenu">
									<a class="collapse-item" href="/inversionistas/accionistas/composicion-accionaria">Composición accionaria</a>
									<a class="collapse-item" href="/inversionistas/accionistas/registro-de-accionistas">Registro de accionistas</a>
									<a class="collapse-item" href="/inversionistas/accionistas/dividendos">Dividendos</a>
									<a class="collapse-item" href="/inversionistas/accionistas/juntas-de-accionistas">Juntas de accionistas</a>
								</div>
							</li>
							<li class="dropdown-submenu">
								<a class="dropdown-item collapsed" data-toggle="collapse" href="#collapse-36" role="button" aria-expanded="false" aria-controls="collapse-36">
									Tenedores de Deuda
								</a>
								<div class="collapse" id="collapse-36" data-parent="#inversionistasMenu">
									<a class="collapse-item" href="/inversionistas/tenedores-de-deuda/emision-de-bonos">Emisión de bonos</a>
									<a class="collapse-item" href="/inversionistas/tenedores-de-deuda/estructura-de-la-deuda">Estructura de la deuda</a>
									<a class="collapse-item" href="/inversionistas/tenedores-de-deuda/clasificacion-de-riesgo">Clasificación de riesgo</a>
								</div>
							</li>
						</ul>
					</li>

					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" id="sostenibilidadDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Sostenibilidad
						</a>
						<ul class="dropdown-menu dropdown-menu-right" id="sostenibilidadMenu" aria-labelledby="sostenibilidadDropdown">
							<li><a class="dropdown-item" href="/sostenibilidad/estrategia-de-sostenibilidad">Estrategia de Sostenibilidad</a></li>
							<li class="dropdown-submenu">
								<a class="dropdown-item collapsed" data-toggle="collapse" href="#collapse-40" role="button" aria-expanded="false" aria-controls="collapse-40">
									Plan de Sostenibilidad
								</a>
								<div class="collapse" id="collapse-40" data-parent="#sostenibilidadMenu">
									<a class="collapse-item" href="/sostenibilidad/plan-de-sostenibilidad/personas">Personas</a>
									<a class="collapse-item" href="/sostenibilidad/plan-de-sostenibilidad/residuos">Residuos</a>
									<a class="collapse-item" href="/sostenibilidad/plan-de-sostenibilidad/agua">Agua</a>
									<a class="collapse-item" href="/sostenibilidad/plan-de-sostenibilidad/gei">GEI</a>
									<a class="collapse-item" href="/sostenibilidad/plan-de-sostenibilidad/adaptacion-mitigacion">Adaptación/mitigación</a>
									<a class="collapse-item" href="/sostenibilidad/plan-de-sostenibilidad/medioambiente">Medioambiente</a>
									<a class="collapse-item" href="/sostenibilidad/plan-de-sostenibilidad/energia">Energía</a>
								</div>
							</li>
							<li class="dropdown-submenu">
								<a class="dropdown-item collapsed" data-toggle="collapse" href="#collapse-41" role="button" aria-expanded="false" aria-controls="collapse-41">
									Compromiso
								</a>
								<div class="collapse" id="collapse-41" data-parent="#sostenibilidadMenu">
									<a class="collapse-item" href="/sostenibilidad/compromiso/politica-de-sostenibilidad">Política de sostenibilidad</a>
									<a class="collapse-item" href="/sostenibilidad/compromiso/gresb">GRESB</a>
									<a class="collapse-item" href="/sostenibilidad/compromiso/materialidad">Materialidad</a>
									<a class="collapse-item" href="/sostenibilidad/compromiso/grupos-de-interes">Grupos de interés</a>
									<a class="collapse-item" href="/sostenibilidad/compromiso/certificaciones">Certificaciones</a>
									<a class="collapse-item" href="/sostenibilidad/compromiso/alianzas">Alianzas</a>
									<a class="collapse-item" href="/sostenibilidad/compromiso/proveedores-sostenibles">Proveedores sostenibles</a>
								</div>
							</li>
							<li class="dropdown-submenu">
								<a class="dropdown-item collapsed" data-toggle="collapse" href="#collapse-42" role="button" aria-expanded="false" aria-controls="collapse-42">
									Comunidades
								</a>
								<div class="collapse" id="collapse-42" data-parent="#sostenibilidadMenu">
									<a class="collapse-item" href="/sostenibilidad/comunidades/bomberos">Bomberos</a>
									<a class="collapse-item" href="/sostenibilidad/comunidades/visitas-a-plantas">Visitas a plantas</a>
									<a class="collapse-item" href="/sostenibilidad/comunidades/fondos-concursables">Fondos concursables</a>
									<a class="collapse-item" href="/sostenibilidad/comunidades/consejos-ciudadanos">Consejos ciudadanos</a>
									<a class="collapse-item" href="/sostenibilidad/comunidades/solicitud-de-auspicios">Solicitud de auspicios</a>
								</div>
							</li>
							<li class="dropdown-submenu">
								<a class="dropdown-item collapsed" data-toggle="collapse" href="#collapse-43" role="button" aria-expanded="false" aria-controls="collapse-43">
									Academia
								</a>
								<div class="collapse" id="collapse-43" data-parent="#sostenibilidadMenu">
									<a class="collapse-item" href="/sostenibilidad/academia/ecobrigada">Ecobrigada</a>
									<a class="collapse-item" href="/sostenibilidad/academia/ciclo-urbano-del-agua">Ciclo urbano del agua</a>
									<a class="collapse-item" href="/sostenibilidad/academia/toma-la-sarten-por-el-margo">Toma la sartén por el margo</a>
								</div>
							</li>
							<li class="dropdown-submenu">
								<a class="dropdown-item collapsed" data-toggle="collapse" href="#collapse-44" role="button" aria-expanded="false" aria-controls="collapse-44">
									Reporte
								</a>
								<div class="collapse" id="collapse-44" data-parent="#sostenibilidadMenu">
									<a class="collapse-item" href="/sostenibilidad/reporte/reporte-2021">Reporte 2021</a>
									<a class="collapse-item" href="/sostenibilidad/reporte/reporte-2020">Reporte 2020</a>
									<a class="collapse-item" href="/sostenibilidad/reporte/reporte-2019">Reporte 2019</a>
								</div>
							</li>
							<li><a class="dropdown-item" href="/sostenibilidad/ultimas-actividades">Últimas Actividades</a></li>
						</ul>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="#">
							<i class="flaticon flaticon-search"></i>
						</a>
					</li>
				</ul>
			</div>
		</nav>


		<h1 style="display: none;">Header <?php echo $empresa; ?></h1>
		<div class="whatsapp" style="">
			<?php if($empresa == "nuevosur"){?>
				<a href="https://wa.me/56939545279?text=Hola%20Nuevosur!" class="ico-whatsapp" target="_blank">
					<i class="flaticon flaticon-whatsapp"></i><span class="upp">¿Te Ayudo?</span>
				</a>
			<?php } else {?>
				<a href="https://wa.me/56939545280?text=Hola%20Essbio!" class="ico-whatsapp" target="_blank">
					<i class="flaticon flaticon-whatsapp"></i><span class="upp">¿Te Ayudo?</span>
				</a>
			<?php } ?>
		</div>

		<div class="accesibilidad">
			<div class="ico-acc">
				<a href="/adulto-mayor">
					<i class="flaticon flaticon-adulto-mayor"></i>
				</a>
			</div>

			<div class="ico-acc">
				<a href="#" id="mas">
					<i class="flaticon flaticon-add"></i>
				</a>

				<i class="flaticon2 flaticon-font"></i>

				<a href="#" id="menos">
					<i class="flaticon flaticon-minus"></i>
				</a>
			</div>

			<div class="ico-acc">
				<a href="#" id="claro">
					<i class="flaticon flaticon-brightness"></i>
				</a>	
				<a href="#" id="oscuro">
					<i class="flaticon flaticon-night"></i>
				</a>			
			</div>

			<div class="ico-acc">
				<a href="/preguntas-frecuentes">
					<i class="flaticon flaticon-tech-support"></i>
				</a>
			</div>

		</div>
	</header>

	<main class="main">