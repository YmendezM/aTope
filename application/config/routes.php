<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'principal';
$route['404_override'] = 'principal/notFound';
$route['translate_uri_dashes'] = FALSE;


/**
 * Rutas sitio
 */
$route['adulto-mayor'] = 'principal/adultoMayor';
$route['creole'] = 'principal/creole';
$route['mapudungun'] = 'principal/mapudungun';
$route['creole'] = 'principal/creole';
$route['sucursal-virtual'] = 'principal/ofv';
$route['validar-personal-contratista'] = 'principal/validarPersonalContratista';


$route['nosotros'] = 'principal/nosotros';
$route['nosotros/somos'] = 'principal/nosotrosSomos';
$route['nosotros/somos/datos-generales'] = 'principal/nosotrosSomosDatosGenerales';
$route['nosotros/somos/principios-inspiradores'] = 'principal/nosotrosSomosPrincipiosInspiradores';
$route['nosotros/somos/historia-de-la-compania'] = 'principal/nosotrosSomosHistoriaCompania';
$route['nosotros/somos/areas-de-concesion'] = 'principal/nosotrosSomosAreasConcesion';
$route['nosotros/somos/inversiones'] = 'principal/nosotrosSomosInversiones';

$route['nosotros/que-hacemos'] = 'principal/nosotrosQuehacemos';
$route['nosotros/que-hacemos/ciclo-urbano-del-agua'] = 'principal/nosotrosQuehacemosCicloUrbanoAgua';
$route['nosotros/que-hacemos/potabilizacion-del-agua'] = 'principal/nosotrosQuehacemosPotabilizacionAgua';
$route['nosotros/que-hacemos/tratamiento-de-aguas-servidas'] = 'principal/nosotrosQuehacemosTratamientoAguasServidas';
$route['nosotros/que-hacemos/mantencion-de-alcantarillado'] = 'principal/nosotrosQuehacemosMantenciónAlcantarillado';
$route['nosotros/que-hacemos/asesoria-apr'] = 'principal/nosotrosQuehacemosAsesoriaAPR';
$route['nosotros/que-hacemos/fiscalizacion-descarga-de-riles'] = 'principal/nosotrosQuehacemosFiscalizacionDescargaRiles';
$route['nosotros/que-hacemos/venta-de-agua-granel'] = 'principal/nosotrosQuehacemosVentaAguaGranel';

$route['nosotros/organizacion'] = 'principal/nosotrosOrganizacion';
$route['nosotros/organizacion/directorio'] = 'principal/nosotrosOrganizacionDirectorio';
$route['nosotros/organizacion/ejecutivos'] = 'principal/nosotrosOrganizacionEjecutivos';

$route['nosotros/etica-y-transparencia'] = 'principal/nosotrosEticaTransparencia';
$route['nosotros/etica-y-transparencia/sistema-gestion-de-etica'] = 'principal/nosotrosEticaTransparenciaSistemaGestionEtica';
$route['nosotros/etica-y-transparencia/practicas-de-gobierno-corporativo'] = 'principal/nosotrosEticaTransparenciaPracticasGobiernoCorporativo';
$route['nosotros/etica-y-transparencia/sistema-prevencion-de-delitos'] = 'principal/nosotrosEticaTransparenciaSistemaPrevencionDelitos';

$route['nosotros/regulacion'] = 'principal/nosotrosRegulacion';
$route['nosotros/regulacion/empresa-regulada'] = 'principal/nosotrosRegulacionEmpresaRegulada';
$route['nosotros/regulacion/nuestras-tarifas'] = 'principal/nosotrosRegulacionNuestrasTarifas';
$route['nosotros/regulacion/otra'] = 'principal/nosotrosRegulacionOtra';

$route['nosotros/noticias'] = 'principal/nosotrosNoticias';

$route['nosotros/trabaja-con-nosotros'] = 'principal/nosotrosTrabajaNosotros';
$route['nosotros/trabaja-con-nosotros/oportunidades-laborales-practicas-memorias'] = 'principal/nosotrosTrabajaNosotrosOportunidadesLaboralesPracticasMemorias';
$route['nosotros/trabaja-con-nosotros/diversidad-equidad-e-inclusion'] = 'principal/nosotrosTrabajaNosotrosDiversidadEquidadInclusion';
$route['nosotros/trabaja-con-nosotros/propuesta-de-valor-al-empleado'] = 'principal/nosotrosTrabajaNosotrosPropuestaValorEmpleado';


$route['clientes'] = 'principal/clientes';
$route['clientes/mi-cuenta'] = 'principal/clientesMiCuenta';
$route['clientes/mi-cuenta/pago-de-cuentas'] = 'principal/clientesMiCuentaPagoCuentas';
$route['clientes/mi-cuenta/conoce-tu-numero-de-servicio'] = 'principal/clientesMiCuentaConoceNumeroServicio';
$route['clientes/mi-cuenta/descarga-tu-boleta'] = 'principal/clientesMiCuentaDescargaBoleta';
$route['clientes/mi-cuenta/suscripcion-electronica'] = 'principal/clientesMiCuentaSuscripcionElectronica';
$route['clientes/mi-cuenta/facilidades-de-pago'] = 'principal/clientesMiCuentaFacilidadesPago';
$route['clientes/mi-cuenta/historico-de-pagos'] = 'principal/clientesMiCuentaHistoricoPagos';
$route['clientes/mi-cuenta/cupon-de-pago-presencial'] = 'principal/clientesMiCuentaCuponPagoPresencial';
$route['clientes/mi-cuenta/fecha-de-corte-por-no-pago'] = 'principal/clientesMiCuentaFechaCorteNoPago';
$route['clientes/mi-cuenta/reposicion-del-servicio'] = 'principal/clientesMiCuentaReposicionServicio';
$route['clientes/mi-cuenta/ingresar-lectura'] = 'principal/clientesMiCuentaIngresarLectura';
$route['clientes/mi-cuenta/contrata-pat'] = 'principal/clientesMiCuentaContrataPAT';

$route['clientes/nuevos-clientes'] = 'principal/clientesNuevosClientes';
$route['clientes/nuevos-clientes/pasos-para-ser-un-nuevo-cliente'] = 'principal/clientesNuevosClientesPasosNuevoCliente';
$route['clientes/nuevos-clientes/factibilidad'] = 'principal/clientesNuevosClientesFactibilidad';
$route['clientes/nuevos-clientes/proyecto'] = 'principal/clientesNuevosClientesProyecto';
$route['clientes/nuevos-clientes/ejecucion-inspeccion-y-recepcion'] = 'principal/clientesNuevosClientesEjecucionInspeccionRecepcion';
$route['clientes/nuevos-clientes/cliente'] = 'principal/clientesNuevosClientesCliente';
$route['clientes/nuevos-clientes/consultas-y-respuestas-orientadas'] = 'principal/clientesNuevosClientesConsultasRespuestasOrientadas';

$route['clientes/lugares-de-pago-oficinas-atencion'] = 'principal/clientesLugaresPagoOficinasAtencion';
$route['clientes/lugares-de-pago-oficinas-atencion/lugares-de-pago-mapa-recaudadores'] = 'principal/clientesLugaresPagoOficinasAtencionLugaresPagoMapaRecaudadores';
$route['clientes/lugares-de-pago-oficinas-atencion/oficinas'] = 'principal/clientesLugaresPagoOficinasAtencionOficinas';
$route['clientes/lugares-de-pago-oficinas-atencion/cortes-programados-y-de-emergencia'] = 'principal/clientesLugaresPagoOficinasAtencionCortesProgramadosEmergencia';
$route['clientes/lugares-de-pago-oficinas-atencion/paga-a-traves-de-tu-banco'] = 'principal/clientesLugaresPagoOficinasAtencionPagaBanco';
$route['clientes/lugares-de-pago-oficinas-atencion/medios-de-pago'] = 'principal/clientesLugaresPagoOficinasAtencionMediosPago';

$route['clientes/servicio-al-cliente'] = 'principal/clientesServicioCliente';
$route['clientes/servicio-al-cliente/canales-de-atencion'] = 'principal/clientesServicioClienteCanalesAtencion';
$route['clientes/servicio-al-cliente/canales-de-atencion'] = 'principal/clientesServicioClienteCanalesAtencion';
$route['clientes/servicio-al-cliente/preguntas-frecuentes'] = 'principal/clientesServicioClientePreguntasFrecuentes';
$route['clientes/servicio-al-cliente/reclamos-y-sugerencias'] = 'principal/clientesServicioClienteReclamosSugerencias';
$route['clientes/servicio-al-cliente/trazabilidad-ods'] = 'principal/clientesServicioClienteTrazabilidadODS';
$route['clientes/servicio-al-cliente/solicitudes-catastrales-llae'] = 'principal/clientesServicioClienteSolicitudesCatastralesLLAE';
$route['clientes/servicio-al-cliente/certificados-y-formularios'] = 'principal/clientesServicioClienteCertificadosFormularios';
$route['clientes/servicio-al-cliente/denuncia-de-ilicitos'] = 'principal/clientesServicioClienteDenunciaIlicitos';
$route['clientes/servicio-al-cliente/datos-del-medidor'] = 'principal/clientesServicioClienteDatosMedidor';
$route['clientes/servicio-al-cliente/consejos-utiles'] = 'principal/clientesServicioClienteConsejosUtiles';


$route['proveedores'] = 'principal/proveedores';
$route['proveedores/quiero-ser-proveedor'] = 'principal/proveedoresQuieroSerProveedor';
$route['proveedores/quiero-ser-proveedor/requisitos-para-ser-proveedor'] = 'principal/proveedoresQuieroSerProveedorRequisitosProveedor';
$route['proveedores/quiero-ser-proveedor/formulario-de-contacto'] = 'principal/proveedoresQuieroSerProveedorFormularioContacto';
$route['proveedores/quiero-ser-proveedor/modelo-proveedores'] = 'principal/proveedoresQuieroSerProveedorModeloProveedores';

$route['proveedores/licitaciones'] = 'principal/proveedoresLicitaciones';
$route['proveedores/licitaciones/licitaciones'] = 'principal/proveedoresLicitacionesLicitaciones';
$route['proveedores/licitaciones/proceso-de-contratacion'] = 'principal/proveedoresLicitacionesProcesoContratacion';
$route['proveedores/licitaciones/documentos-aplicables'] = 'principal/proveedoresLicitacionesDocumentosAplicables';

$route['proveedores/asistencia-a-proveedores'] = 'principal/proveedoresAsistenciaProveedores';
$route['proveedores/asistencia-a-proveedores/links-de-interes'] = 'principal/proveedoresAsistenciaProveedoresLinksInteres';


$route['inversionistas'] = 'principal/inversionistas';
$route['inversionistas/quienes-somos'] = 'principal/inversionistasQuienesSomos';
$route['inversionistas/quienes-somos/nuestra-empresa'] = 'principal/inversionistasQuienesSomosNuestraEmpresa';
$route['inversionistas/quienes-somos/nuestro-proposito'] = 'principal/inversionistasQuienesSomosNuestroProposito';
$route['inversionistas/quienes-somos/nuestra-historia'] = 'principal/inversionistasQuienesSomosNuestraHistoria';
$route['inversionistas/quienes-somos/informacion-del-mercado'] = 'principal/inversionistasQuienesSomosInformacionMercado';
$route['inversionistas/quienes-somos/factores-de-riesgo'] = 'principal/inversionistasQuienesSomosFactoresRiesgo';
$route['inversionistas/quienes-somos/sustentabilidad'] = 'principal/inversionistasQuienesSomosSustentabilidad';
$route['inversionistas/quienes-somos/informacion-de-contacto'] = 'principal/inversionistasQuienesSomosInformacionContacto';

$route['inversionistas/nuestro-negocio'] = 'principal/inversionistasNuestroNegocio';
$route['inversionistas/nuestro-negocio/nuestras-operaciones'] = 'principal/inversionistasNuestroNegocioNuestrasOperaciones';
$route['inversionistas/nuestro-negocio/nuestros-clientes-y-zona-de-concesion'] = 'principal/inversionistasNuestroNegocioNuestrosClientesZonaConcesion';
$route['inversionistas/nuestro-negocio/empresas-del-grupo'] = 'principal/inversionistasNuestroNegocioEmpresasGrupo';
$route['inversionistas/nuestro-negocio/negocios-no-regulados'] = 'principal/inversionistasNuestroNegocioNegociosNoRegulados';

$route['inversionistas/gobierno-corporativo'] = 'principal/inversionistasGobiernoCorporativo';
$route['inversionistas/gobierno-corporativo/directores-y-ejecutivos'] = 'principal/inversionistasGobiernoCorporativoDirectoresEjecutivos';
$route['inversionistas/gobierno-corporativo/documentos-de-gobierno-corporativo'] = 'principal/inversionistasGobiernoCorporativoDocumentosGobiernoCorporativo';
$route['inversionistas/gobierno-corporativo/sistema-de-gestion-de-compliance'] = 'principal/inversionistasGobiernoCorporativoSistemaGestionCompliance';
$route['inversionistas/gobierno-corporativo/otros-documentos'] = 'principal/inversionistasGobiernoCorporativoOtrosDocumentos';

$route['inversionistas/comunicaciones-eventos-y-presentaciones'] = 'principal/inversionistasComunicacionesEventosPresentaciones';
$route['inversionistas/comunicaciones-eventos-y-presentaciones/calendario-de-resultados'] = 'principal/inversionistasComunicacionesEventosPresentacionesCalendarioResultados';
$route['inversionistas/comunicaciones-eventos-y-presentaciones/noticias'] = 'principal/inversionistasComunicacionesEventosPresentacionesNoticias';
$route['inversionistas/comunicaciones-eventos-y-presentaciones/hechos-esenciales'] = 'principal/inversionistasComunicacionesEventosPresentacionesHechosEsenciales';
$route['inversionistas/comunicaciones-eventos-y-presentaciones/comunicados-de-prensa'] = 'principal/inversionistasComunicacionesEventosPresentacionesComunicadosPrensa';
$route['inversionistas/comunicaciones-eventos-y-presentaciones/presentaciones'] = 'principal/inversionistasComunicacionesEventosPresentacionesPresentaciones';

$route['inversionistas/informacion-financiera'] = 'principal/inversionistasInformacionFinanciera';
$route['inversionistas/informacion-financiera/memorias'] = 'principal/inversionistasInformacionFinancieraMemorias';
$route['inversionistas/informacion-financiera/analisis-razonado'] = 'principal/inversionistasInformacionFinancieraAnalisisRazonado';
$route['inversionistas/informacion-financiera/estados-financieros'] = 'principal/inversionistasInformacionFinancieraEstadosFinancieros';

$route['inversionistas/accionistas'] = 'principal/inversionistasAccionistas';
$route['inversionistas/accionistas/composicion-accionaria'] = 'principal/inversionistasAccionistasComposicionAccionaria';
$route['inversionistas/accionistas/registro-de-accionistas'] = 'principal/inversionistasAccionistasRegistroAccionistas';
$route['inversionistas/accionistas/dividendos'] = 'principal/inversionistasAccionistasDividendos';
$route['inversionistas/accionistas/juntas-de-accionistas'] = 'principal/inversionistasAccionistasJuntasAccionistas';

$route['inversionistas/tenedores-de-deuda'] = 'principal/inversionistasTenedoresDeuda';
$route['inversionistas/tenedores-de-deuda/emision-de-bonos'] = 'principal/inversionistasTenedoresDeudaEmisionBonos';
$route['inversionistas/tenedores-de-deuda/estructura-de-la-deuda'] = 'principal/inversionistasTenedoresDeudaEstructuraDeuda';
$route['inversionistas/tenedores-de-deuda/clasificacion-de-riesgo'] = 'principal/inversionistasTenedoresDeudaClasificacionRiesgo';


$route['sostenibilidad'] = 'principal/sostenibilidad';
$route['sostenibilidad/estrategia-de-sostenibilidad'] = 'principal/sostenibilidadEstrategiaSostenibilidad';

$route['sostenibilidad/plan-de-sostenibilidad'] = 'principal/sostenibilidadPlanSostenibilidad';
$route['sostenibilidad/plan-de-sostenibilidad/personas'] = 'principal/sostenibilidadPlanSostenibilidadPersonas';
$route['sostenibilidad/plan-de-sostenibilidad/residuos'] = 'principal/sostenibilidadPlanSostenibilidadResiduos';
$route['sostenibilidad/plan-de-sostenibilidad/agua'] = 'principal/sostenibilidadPlanSostenibilidadAgua';
$route['sostenibilidad/plan-de-sostenibilidad/gei'] = 'principal/sostenibilidadPlanSostenibilidadGEI';
$route['sostenibilidad/plan-de-sostenibilidad/adaptacion-mitigacion'] = 'principal/sostenibilidadPlanSostenibilidadAdaptacionMitigacion';
$route['sostenibilidad/plan-de-sostenibilidad/medioambiente'] = 'principal/sostenibilidadPlanSostenibilidadMedioambiente';
$route['sostenibilidad/plan-de-sostenibilidad/energia'] = 'principal/sostenibilidadPlanSostenibilidadEnergia';

$route['sostenibilidad/compromiso'] = 'principal/sostenibilidadCompromiso';
$route['sostenibilidad/compromiso/politica-de-sostenibilidad'] = 'principal/sostenibilidadCompromisoPoliticaSostenibilidad';
$route['sostenibilidad/compromiso/gresb'] = 'principal/sostenibilidadCompromisoGresb';
$route['sostenibilidad/compromiso/materialidad'] = 'principal/sostenibilidadCompromisoMaterialidad';
$route['sostenibilidad/compromiso/grupos-de-interes'] = 'principal/sostenibilidadCompromisoGruposInteres';
$route['sostenibilidad/compromiso/certificaciones'] = 'principal/sostenibilidadCompromisoCertificaciones';
$route['sostenibilidad/compromiso/alianzas'] = 'principal/sostenibilidadCompromisoAlianzas';
$route['sostenibilidad/compromiso/proveedores-sostenibles'] = 'principal/sostenibilidadCompromisoProveedoresSostenibles';

$route['sostenibilidad/comunidades'] = 'principal/sostenibilidadComunidades';
$route['sostenibilidad/comunidades/bomberos'] = 'principal/sostenibilidadComunidadesBomberos';
$route['sostenibilidad/comunidades/visitas-a-plantas'] = 'principal/sostenibilidadComunidadesVisitasPlantas';
$route['sostenibilidad/comunidades/fondos-concursables'] = 'principal/sostenibilidadComunidadesFondosConcursables';
$route['sostenibilidad/comunidades/consejos-ciudadanos'] = 'principal/sostenibilidadComunidadesConsejosCiudadanos';
$route['sostenibilidad/comunidades/solicitud-de-auspicios'] = 'principal/sostenibilidadComunidadesSolicitudAuspicios';

$route['sostenibilidad/academia'] = 'principal/sostenibilidadAcademia';
$route['sostenibilidad/academia/ecobrigada'] = 'principal/sostenibilidadAcademiaEcobrigada';
$route['sostenibilidad/academia/ciclo-urbano-del-agua'] = 'principal/sostenibilidadAcademiaCicloUrbanoAgua';
$route['sostenibilidad/academia/toma-la-sarten-por-el-margo'] = 'principal/sostenibilidadAcademiaTomaSartenMargo';

$route['sostenibilidad/reporte'] = 'principal/sostenibilidadReporte';
$route['sostenibilidad/reporte/reporte-2021'] = 'principal/sostenibilidadReporteReporte2021';
$route['sostenibilidad/reporte/reporte-2020'] = 'principal/sostenibilidadReporteReporte2020';
$route['sostenibilidad/reporte/reporte-2019'] = 'principal/sostenibilidadReporteReporte2019';

$route['sostenibilidad/ultimas-actividades'] = 'principal/sostenibilidadUltimasActividades';


/**
 * Rutas ajax
 */