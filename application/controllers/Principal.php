<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {
	
	public function index(){
		//echo getEmpresaUrl();
		//echo "<pre>",print_r($_SERVER),"</pre>";
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/index");
		$this->load->view("content/footer");
	}

	public function notFound(){
		$this->load->view("errors/cli/error_404");
	}

	public function adultoMayor(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/adulto-mayor");
		$this->load->view("content/footer");
	}

	public function creole(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/creole");
		$this->load->view("content/footer");
	}

	public function mapudungun(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/mapudungun");
		$this->load->view("content/footer");
	}

	public function ofv(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/sucursal-virtual");
		$this->load->view("content/footer");
	}

	public function validarPersonalContratista(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/validar-personal-contratista");
		$this->load->view("content/footer");
	}

	public function nosotros(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/nosotros");
		$this->load->view("content/footer");
	}

	public function nosotrosSomos(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/nosotros/somos");
		$this->load->view("content/footer");
	}

	public function nosotrosSomosDatosGenerales(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/nosotros/somos/datos-generales");
		$this->load->view("content/footer");
	}

	public function nosotrosSomosPrincipiosInspiradores(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/nosotros/somos/principios-inspiradores");
		$this->load->view("content/footer");
	}

	public function nosotrosSomosHistoriaCompania(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/nosotros/somos/historia-de-la-compania");
		$this->load->view("content/footer");
	}

	public function nosotrosSomosAreasConcesion(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/nosotros/somos/areas-de-concesion");
		$this->load->view("content/footer");
	}

	public function nosotrosSomosInversiones(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/nosotros/somos/inversiones");
		$this->load->view("content/footer");
	}

	public function nosotrosQuehacemos(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/nosotros/que-hacemos");
		$this->load->view("content/footer");
	}

	public function nosotrosQuehacemosCicloUrbanoAgua(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/nosotros/que-hacemos/ciclo-urbano-del-agua");
		$this->load->view("content/footer");
	}

	public function nosotrosQuehacemosPotabilizacionAgua(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/nosotros/que-hacemos/potabilizacion-del-agua");
		$this->load->view("content/footer");
	}

	public function nosotrosQuehacemosTratamientoAguasServidas(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/nosotros/que-hacemos/tratamiento-de-aguas-servidas");
		$this->load->view("content/footer");
	}

	public function nosotrosQuehacemosMantenciónAlcantarillado(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/nosotros/que-hacemos/mantencion-de-alcantarillado");
		$this->load->view("content/footer");
	}

	public function nosotrosQuehacemosAsesoriaAPR(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/nosotros/que-hacemos/asesoria-apr");
		$this->load->view("content/footer");
	}

	public function nosotrosQuehacemosFiscalizacionDescargaRiles(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/nosotros/que-hacemos/fiscalizacion-descarga-de-riles");
		$this->load->view("content/footer");
	}

	public function nosotrosQuehacemosVentaAguaGranel(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/nosotros/que-hacemos/venta-de-agua-granel");
		$this->load->view("content/footer");
	}

	public function nosotrosOrganizacion(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/nosotros/organizacion");
		$this->load->view("content/footer");
	}

	public function nosotrosOrganizacionDirectorio(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/nosotros/organizacion/directorio");
		$this->load->view("content/footer");
	}

	public function nosotrosOrganizacionEjecutivos(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/nosotros/organizacion/ejecutivos");
		$this->load->view("content/footer");
	}

	public function nosotrosEticaTransparencia(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/nosotros/etica-y-transparencia");
		$this->load->view("content/footer");
	}

	public function nosotrosEticaTransparenciaSistemaGestionEtica(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/nosotros/etica-y-transparencia/sistema-gestion-de-etica");
		$this->load->view("content/footer");
	}

	public function nosotrosEticaTransparenciaPracticasGobiernoCorporativo(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/nosotros/etica-y-transparencia/practicas-de-gobierno-corporativo");
		$this->load->view("content/footer");
	}

	public function nosotrosEticaTransparenciaSistemaPrevencionDelitos(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/nosotros/etica-y-transparencia/sistema-prevencion-de-delitos");
		$this->load->view("content/footer");
	}

	public function nosotrosRegulacion(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/nosotros/regulacion");
		$this->load->view("content/footer");
	}

	public function nosotrosRegulacionEmpresaRegulada(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/nosotros/regulacion/empresa-regulada");
		$this->load->view("content/footer");
	}

	public function nosotrosRegulacionNuestrasTarifas(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/nosotros/regulacion/nuestras-tarifas");
		$this->load->view("content/footer");
	}

	public function nosotrosRegulacionOtra(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/nosotros/regulacion/otra");
		$this->load->view("content/footer");
	}

	public function nosotrosNoticias(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/nosotros/noticias");
		$this->load->view("content/footer");
	}

	public function nosotrosTrabajaNosotros(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/nosotros/trabaja-con-nosotros");
		$this->load->view("content/footer");
	}

	public function nosotrosTrabajaNosotrosOportunidadesLaboralesPracticasMemorias(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/nosotros/trabaja-con-nosotros/oportunidades-laborales-practicas-memorias");
		$this->load->view("content/footer");
	}

	public function nosotrosTrabajaNosotrosDiversidadEquidadInclusion(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/nosotros/trabaja-con-nosotros/diversidad-equidad-e-inclusion");
		$this->load->view("content/footer");
	}

	public function nosotrosTrabajaNosotrosPropuestaValorEmpleado(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/nosotros/trabaja-con-nosotros/propuesta-de-valor-al-empleado");
		$this->load->view("content/footer");
	}

	public function clientes(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/clientes");
		$this->load->view("content/footer");
	}

	public function clientesMiCuenta(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/clientes/mi-cuenta");
		$this->load->view("content/footer");
	}

	public function clientesMiCuentaPagoCuentas(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/clientes/mi-cuenta/pago-de-cuentas");
		$this->load->view("content/footer");
	}

	public function clientesMiCuentaConoceNumeroServicio(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/clientes/mi-cuenta/conoce-tu-numero-de-servicio");
		$this->load->view("content/footer");
	}

	public function clientesMiCuentaDescargaBoleta(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/clientes/mi-cuenta/descarga-tu-boleta");
		$this->load->view("content/footer");
	}

	public function clientesMiCuentaSuscripcionElectronica(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/clientes/mi-cuenta/suscripcion-electronica");
		$this->load->view("content/footer");
	}

	public function clientesMiCuentaFacilidadesPago(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/clientes/mi-cuenta/facilidades-de-pago");
		$this->load->view("content/footer");
	}

	public function clientesMiCuentaHistoricoPagos(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/clientes/mi-cuenta/historico-de-pagos");
		$this->load->view("content/footer");
	}

	public function clientesMiCuentaCuponPagoPresencial(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/clientes/mi-cuenta/cupon-de-pago-presencial");
		$this->load->view("content/footer");
	}

	public function clientesMiCuentaFechaCorteNoPago(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/clientes/mi-cuenta/fecha-de-corte-por-no-pago");
		$this->load->view("content/footer");
	}

	public function clientesMiCuentaReposicionServicio(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/clientes/mi-cuenta/reposicion-del-servicio");
		$this->load->view("content/footer");
	}

	public function clientesMiCuentaIngresarLectura(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/clientes/mi-cuenta/ingresar-lectura");
		$this->load->view("content/footer");
	}

	public function clientesMiCuentaContrataPAT(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/clientes/mi-cuenta/contrata-pat");
		$this->load->view("content/footer");
	}

	public function clientesNuevosClientes(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/clientes/nuevos-clientes");
		$this->load->view("content/footer");
	}

	public function clientesNuevosClientesPasosNuevoCliente(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/clientes/nuevos-clientes/pasos-para-ser-un-nuevo-cliente");
		$this->load->view("content/footer");
	}

	public function clientesNuevosClientesFactibilidad(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/clientes/nuevos-clientes/factibilidad");
		$this->load->view("content/footer");
	}

	public function clientesNuevosClientesProyecto(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/clientes/nuevos-clientes/proyecto");
		$this->load->view("content/footer");
	}

	public function clientesNuevosClientesEjecucionInspeccionRecepcion(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/clientes/nuevos-clientes/ejecucion-inspeccion-y-recepcion");
		$this->load->view("content/footer");
	}

	public function clientesNuevosClientesCliente(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/clientes/nuevos-clientes/cliente");
		$this->load->view("content/footer");
	}

	public function clientesNuevosClientesConsultasRespuestasOrientadas(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/clientes/nuevos-clientes/consultas-y-respuestas-orientadas");
		$this->load->view("content/footer");
	}

	public function clientesLugaresPagoOficinasAtencion(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/clientes/lugares-de-pago-oficinas-atencion");
		$this->load->view("content/footer");
	}

	public function clientesLugaresPagoOficinasAtencionLugaresPagoMapaRecaudadores(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/clientes/lugares-de-pago-oficinas-atencion/lugares-de-pago-mapa-recaudadores");
		$this->load->view("content/footer");
	}

	public function clientesLugaresPagoOficinasAtencionOficinas(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/clientes/lugares-de-pago-oficinas-atencion/oficinas");
		$this->load->view("content/footer");
	}

	public function clientesLugaresPagoOficinasAtencionCortesProgramadosEmergencia(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/clientes/lugares-de-pago-oficinas-atencion/cortes-programados-y-de-emergencia");
		$this->load->view("content/footer");
	}

	public function clientesLugaresPagoOficinasAtencionPagaBanco(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/clientes/lugares-de-pago-oficinas-atencion/paga-a-traves-de-tu-banco");
		$this->load->view("content/footer");
	}

	public function clientesLugaresPagoOficinasAtencionMediosPago(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/clientes/lugares-de-pago-oficinas-atencion/medios-de-pago");
		$this->load->view("content/footer");
	}

	public function clientesServicioCliente(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/clientes/servicio-al-cliente");
		$this->load->view("content/footer");
	}

	public function clientesServicioClienteCanalesAtencion(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/clientes/servicio-al-cliente/canales-de-atencion");
		$this->load->view("content/footer");
	}

	public function clientesServicioClientePreguntasFrecuentes(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/clientes/servicio-al-cliente/preguntas-frecuentes");
		$this->load->view("content/footer");
	}

	public function clientesServicioClienteReclamosSugerencias(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/clientes/servicio-al-cliente/reclamos-y-sugerencias");
		$this->load->view("content/footer");
	}

	public function clientesServicioClienteTrazabilidadODS(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/clientes/servicio-al-cliente/trazabilidad-ods");
		$this->load->view("content/footer");
	}

	public function clientesServicioClienteSolicitudesCatastralesLLAE(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/clientes/servicio-al-cliente/solicitudes-catastrales-llae");
		$this->load->view("content/footer");
	}

	public function clientesServicioClienteCertificadosFormularios(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/clientes/servicio-al-cliente/certificados-y-formularios");
		$this->load->view("content/footer");
	}

	public function clientesServicioClienteDenunciaIlicitos(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/clientes/servicio-al-cliente/denuncia-de-ilicitos");
		$this->load->view("content/footer");
	}

	public function clientesServicioClienteDatosMedidor(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/clientes/servicio-al-cliente/datos-del-medidor");
		$this->load->view("content/footer");
	}

	public function clientesServicioClienteConsejosUtiles(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/clientes/servicio-al-cliente/consejos-utiles");
		$this->load->view("content/footer");
	}

	public function proveedores(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/proveedores");
		$this->load->view("content/footer");
	}

	public function proveedoresQuieroSerProveedor(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/proveedores/quiero-ser-proveedor");
		$this->load->view("content/footer");
	}

	public function proveedoresQuieroSerProveedorRequisitosProveedor(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/proveedores/quiero-ser-proveedor/requisitos-para-ser-proveedor");
		$this->load->view("content/footer");
	}

	public function proveedoresQuieroSerProveedorFormularioContacto(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/proveedores/quiero-ser-proveedor/formulario-de-contacto");
		$this->load->view("content/footer");
	}

	public function proveedoresQuieroSerProveedorModeloProveedores(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/proveedores/quiero-ser-proveedor/modelo-proveedores");
		$this->load->view("content/footer");
	}

	public function proveedoresLicitaciones(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/proveedores/licitaciones");
		$this->load->view("content/footer");
	}

	public function proveedoresLicitacionesLicitaciones(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/proveedores/licitaciones/licitaciones");
		$this->load->view("content/footer");
	}

	public function proveedoresLicitacionesProcesoContratacion(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/proveedores/licitaciones/proceso-de-contratacion");
		$this->load->view("content/footer");
	}

	public function proveedoresLicitacionesDocumentosAplicables(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/proveedores/licitaciones/documentos-aplicables");
		$this->load->view("content/footer");
	}

	public function proveedoresAsistenciaProveedores(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/proveedores/asistencia-a-proveedores");
		$this->load->view("content/footer");
	}

	public function proveedoresAsistenciaProveedoresLinksInteres(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/proveedores/asistencia-a-proveedores/links-de-interes");
		$this->load->view("content/footer");
	}

	public function inversionistas(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/inversionistas");
		$this->load->view("content/footer");
	}

	public function inversionistasQuienesSomos(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/inversionistas/quienes-somos");
		$this->load->view("content/footer");
	}

	public function inversionistasQuienesSomosNuestraEmpresa(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/inversionistas/quienes-somos/nuestra-empresa");
		$this->load->view("content/footer");
	}

	public function inversionistasQuienesSomosNuestroProposito(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/inversionistas/quienes-somos/nuestro-proposito");
		$this->load->view("content/footer");
	}

	public function inversionistasQuienesSomosNuestraHistoria(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/inversionistas/quienes-somos/nuestra-historia");
		$this->load->view("content/footer");
	}

	public function inversionistasQuienesSomosInformacionMercado(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/inversionistas/quienes-somos/informacion-del-mercado");
		$this->load->view("content/footer");
	}

	public function inversionistasQuienesSomosFactoresRiesgo(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/inversionistas/quienes-somos/factores-de-riesgo");
		$this->load->view("content/footer");
	}

	public function inversionistasQuienesSomosSustentabilidad(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/inversionistas/quienes-somos/sustentabilidad");
		$this->load->view("content/footer");
	}

	public function inversionistasQuienesSomosInformacionContacto(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/inversionistas/quienes-somos/informacion-de-contacto");
		$this->load->view("content/footer");
	}

	public function inversionistasNuestroNegocio(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/inversionistas/nuestro-negocio");
		$this->load->view("content/footer");
	}

	public function inversionistasNuestroNegocioNuestrasOperaciones(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/inversionistas/nuestro-negocio/nuestras-operaciones");
		$this->load->view("content/footer");
	}

	public function inversionistasNuestroNegocioNuestrosClientesZonaConcesion(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/inversionistas/nuestro-negocio/nuestros-clientes-y-zona-de-concesion");
		$this->load->view("content/footer");
	}

	public function inversionistasNuestroNegocioEmpresasGrupo(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/inversionistas/nuestro-negocio/empresas-del-grupo");
		$this->load->view("content/footer");
	}

	public function inversionistasNuestroNegocioNegociosNoRegulados(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/inversionistas/nuestro-negocio/negocios-no-regulados");
		$this->load->view("content/footer");
	}

	public function inversionistasGobiernoCorporativo(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/inversionistas/gobierno-corporativo");
		$this->load->view("content/footer");
	}

	public function inversionistasGobiernoCorporativoDirectoresEjecutivos(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/inversionistas/gobierno-corporativo/directores-y-ejecutivos");
		$this->load->view("content/footer");
	}

	public function inversionistasGobiernoCorporativoDocumentosGobiernoCorporativo(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/inversionistas/gobierno-corporativo/documentos-de-gobierno-corporativo");
		$this->load->view("content/footer");
	}

	public function inversionistasGobiernoCorporativoSistemaGestionCompliance(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/inversionistas/gobierno-corporativo/sistema-de-gestion-de-compliance");
		$this->load->view("content/footer");
	}

	public function inversionistasGobiernoCorporativoOtrosDocumentos(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/inversionistas/gobierno-corporativo/otros-documentos");
		$this->load->view("content/footer");
	}

	public function inversionistasComunicacionesEventosPresentaciones(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/inversionistas/comunicaciones-eventos-y-presentaciones");
		$this->load->view("content/footer");
	}

	public function inversionistasComunicacionesEventosPresentacionesCalendarioResultados(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/inversionistas/comunicaciones-eventos-y-presentaciones/calendario-de-resultados");
		$this->load->view("content/footer");
	}

	public function inversionistasComunicacionesEventosPresentacionesNoticias(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/inversionistas/comunicaciones-eventos-y-presentaciones/noticias");
		$this->load->view("content/footer");
	}

	public function inversionistasComunicacionesEventosPresentacionesHechosEsenciales(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/inversionistas/comunicaciones-eventos-y-presentaciones/hechos-esenciales");
		$this->load->view("content/footer");
	}

	public function inversionistasComunicacionesEventosPresentacionesComunicadosPrensa(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/inversionistas/comunicaciones-eventos-y-presentaciones/comunicados-de-prensa");
		$this->load->view("content/footer");
	}

	public function inversionistasComunicacionesEventosPresentacionesPresentaciones(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/inversionistas/comunicaciones-eventos-y-presentaciones/presentaciones");
		$this->load->view("content/footer");
	}

	public function inversionistasInformacionFinanciera(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/inversionistas/informacion-financiera");
		$this->load->view("content/footer");
	}

	public function inversionistasInformacionFinancieraMemorias(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/inversionistas/informacion-financiera/memorias");
		$this->load->view("content/footer");
	}

	public function inversionistasInformacionFinancieraAnalisisRazonado(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/inversionistas/informacion-financiera/analisis-razonado");
		$this->load->view("content/footer");
	}

	public function inversionistasInformacionFinancieraEstadosFinancieros(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/inversionistas/informacion-financiera/estados-financieros");
		$this->load->view("content/footer");
	}

	public function inversionistasAccionistas(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/inversionistas/accionistas");
		$this->load->view("content/footer");
	}

	public function inversionistasAccionistasComposicionAccionaria(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/inversionistas/accionistas/composicion-accionaria");
		$this->load->view("content/footer");
	}

	public function inversionistasAccionistasRegistroAccionistas(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/inversionistas/accionistas/registro-de-accionistas");
		$this->load->view("content/footer");
	}

	public function inversionistasAccionistasDividendos(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/inversionistas/accionistas/dividendos");
		$this->load->view("content/footer");
	}

	public function inversionistasAccionistasJuntasAccionistas(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/inversionistas/accionistas/juntas-de-accionistas");
		$this->load->view("content/footer");
	}

	public function inversionistasTenedoresDeuda(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/inversionistas/tenedores-de-deuda");
		$this->load->view("content/footer");
	}

	public function inversionistasTenedoresDeudaEmisionBonos(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/inversionistas/tenedores-de-deuda/emision-de-bonos");
		$this->load->view("content/footer");
	}

	public function inversionistasTenedoresDeudaEstructuraDeuda(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/inversionistas/tenedores-de-deuda/estructura-de-la-deuda");
		$this->load->view("content/footer");
	}

	public function inversionistasTenedoresDeudaClasificacionRiesgo(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/inversionistas/tenedores-de-deuda/clasificacion-de-riesgo");
		$this->load->view("content/footer");
	}

	public function sostenibilidad(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/sostenibilidad");
		$this->load->view("content/footer");
	}

	public function sostenibilidadEstrategiaSostenibilidad(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/sostenibilidad/estrategia-de-sostenibilidad");
		$this->load->view("content/footer");
	}

	public function sostenibilidadPlanSostenibilidad(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/sostenibilidad/plan-de-sostenibilidad");
		$this->load->view("content/footer");
	}

	public function sostenibilidadPlanSostenibilidadPersonas(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/sostenibilidad/plan-de-sostenibilidad/personas");
		$this->load->view("content/footer");
	}

	public function sostenibilidadPlanSostenibilidadResiduos(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/sostenibilidad/plan-de-sostenibilidad/residuos");
		$this->load->view("content/footer");
	}

	public function sostenibilidadPlanSostenibilidadAgua(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/sostenibilidad/plan-de-sostenibilidad/agua");
		$this->load->view("content/footer");
	}

	public function sostenibilidadPlanSostenibilidadGEI(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/sostenibilidad/plan-de-sostenibilidad/gei");
		$this->load->view("content/footer");
	}

	public function sostenibilidadPlanSostenibilidadAdaptacionMitigacion(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/sostenibilidad/plan-de-sostenibilidad/adaptacion-mitigacion");
		$this->load->view("content/footer");
	}

	public function sostenibilidadPlanSostenibilidadMedioambiente(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/sostenibilidad/plan-de-sostenibilidad/medioambiente");
		$this->load->view("content/footer");
	}

	public function sostenibilidadPlanSostenibilidadEnergia(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/sostenibilidad/plan-de-sostenibilidad/energia");
		$this->load->view("content/footer");
	}

	public function sostenibilidadCompromiso(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/sostenibilidad/compromiso");
		$this->load->view("content/footer");
	}

	public function sostenibilidadCompromisoPoliticaSostenibilidad(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/sostenibilidad/compromiso/politica-de-sostenibilidad");
		$this->load->view("content/footer");
	}

	public function sostenibilidadCompromisoGresb(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/sostenibilidad/compromiso/gresb");
		$this->load->view("content/footer");
	}

	public function sostenibilidadCompromisoMaterialidad(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/sostenibilidad/compromiso/materialidad");
		$this->load->view("content/footer");
	}

	public function sostenibilidadCompromisoGruposInteres(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/sostenibilidad/compromiso/grupos-de-interes");
		$this->load->view("content/footer");
	}

	public function sostenibilidadCompromisoCertificaciones(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/sostenibilidad/compromiso/certificaciones");
		$this->load->view("content/footer");
	}

	public function sostenibilidadCompromisoAlianzas(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/sostenibilidad/compromiso/alianzas");
		$this->load->view("content/footer");
	}

	public function sostenibilidadCompromisoProveedoresSostenibles(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/sostenibilidad/compromiso/proveedores-sostenibles");
		$this->load->view("content/footer");
	}

	public function sostenibilidadComunidades(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/sostenibilidad/comunidades");
		$this->load->view("content/footer");
	}

	public function sostenibilidadComunidadesBomberos(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/sostenibilidad/comunidades/bomberos");
		$this->load->view("content/footer");
	}

	public function sostenibilidadComunidadesVisitasPlantas(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/sostenibilidad/comunidades/visitas-a-plantas");
		$this->load->view("content/footer");
	}

	public function sostenibilidadComunidadesFondosConcursables(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/sostenibilidad/comunidades/fondos-concursables");
		$this->load->view("content/footer");
	}

	public function sostenibilidadComunidadesConsejosCiudadanos(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/sostenibilidad/comunidades/consejos-ciudadanos");
		$this->load->view("content/footer");
	}

	public function sostenibilidadComunidadesSolicitudAuspicios(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/sostenibilidad/comunidades/solicitud-de-auspicios");
		$this->load->view("content/footer");
	}

	public function sostenibilidadAcademia(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/sostenibilidad/academia");
		$this->load->view("content/footer");
	}

	public function sostenibilidadAcademiaEcobrigada(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/sostenibilidad/academia/ecobrigada");
		$this->load->view("content/footer");
	}

	public function sostenibilidadAcademiaCicloUrbanoAgua(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/sostenibilidad/academia/ciclo-urbano-del-agua");
		$this->load->view("content/footer");
	}

	public function sostenibilidadAcademiaTomaSartenMargo(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/sostenibilidad/academia/toma-la-sarten-por-el-margo");
		$this->load->view("content/footer");
	}

	public function sostenibilidadReporte(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/sostenibilidad/reporte");
		$this->load->view("content/footer");
	}

	public function sostenibilidadReporteReporte2021(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/sostenibilidad/reporte/reporte-2021");
		$this->load->view("content/footer");
	}

	public function sostenibilidadReporteReporte2020(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/sostenibilidad/reporte/reporte-2020");
		$this->load->view("content/footer");
	}

	public function sostenibilidadReporteReporte2019(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/sostenibilidad/reporte/reporte-2019");
		$this->load->view("content/footer");
	}
	
	public function sostenibilidadUltimasActividades(){
		$data = array(
			"empresa" => getEmpresaUrl()
		);
		$this->load->view("content/header", $data);
		$this->load->view("main/sostenibilidad/ultimas-actividades");
		$this->load->view("content/footer");
	}



}