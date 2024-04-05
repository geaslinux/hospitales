<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
//$routes->get('/', 'Home::index');


$routes->get('/', '\Myth\Auth\Controllers\AuthController::login');

$routes->group('/admin',['filter' => 'login', 'namespace'=>'App\Controllers\Admin'], function($routes){
	

    
   
	/****************************************************************************************************************************** */
	$routes->get('inicio', 'IndexController::inicio', ['as'=>'inicio_views']);
	$routes->get('persona', 'PersonaController::index', ['as'=>'persona_list']);
	$routes->post('persona', 'PersonaController::store', ['as'=>'persona_store']);
	$routes->get('persona/create', 'PersonaController::create', ['as'=>'persona_create']);
	$routes->get('persona/por_provincia/(:any)', 'PersonaController::por_provincia/$1', ['as' =>'por_provincia']);



	/****************************************************************************************************************************** */
	$routes->get('historia-clinicas/(:any)', 'HistoriaClinicaController::display/$1', ['as'=>'historia-clinica-display', 'filter' => 'permiso:vista historia clinica']);
	$routes->get('historia-clinica/create/(:any)', 'HistoriaClinicaController::create/$1', ['as'=>'historia-clinica-create']);
	$routes->post('historia-clinica', 'HistoriaClinicaController::store', ['as'=>'historia-clinica-store']);

	/***************************************************************************************************************************/
	$routes->get('buscar-paciente/(:any)', 'PacienteController::buscar/$1', ['as'=>'buscar-paciente']);

	/****************************************************************************************************************************** */
	$routes->get('detenido', 'DetenidoController::index', ['as'=>'detenido', 'filter' => 'permiso:vista lista detenidos']);
	$routes->get('detenido/create', 'DetenidoController::create', ['as'=>'detenido_create', 'filter' => 'permiso:vista crear detenido']);
	$routes->post('detenido', 'DetenidoController::store', ['as'=>'detenido_store']);
	$routes->get('detenido/(:any)', 'DetenidoController::show/$1', ['as'=>'detenido_show', 'filter' => 'permiso:vista editar detenido']);
	$routes->put('detenido', 'DetenidoController::update', ['as'=>'detenido_update']);	
	$routes->delete('detenido', 'DetenidoController::destroy', ['as'=>'detenido_destroy', 'filter' => 'permiso:eliminar detenido']);

	//$routes->get('causa', 'CausaController::index', ['as'=>'causa']);
	$routes->get('causa/create/(:any)', 'CausaController::create/$1', ['as'=>'causa_create', 'filter' => 'permiso:vista crear causa']);
	$routes->post('causa', 'CausaController::store', ['as'=>'causa_store']);
	$routes->get('causa/(:any)', 'CausaController::show/$1', ['as'=>'causa_show', 'filter' => 'permiso:vista editar causa']);
	$routes->put('causa', 'CausaController::update', ['as'=>'causa_update']);	
	$routes->delete('causa', 'CausaController::destroy', ['as'=>'causa_destroy', 'filter' => 'permiso:eliminar causa']);	
	$routes->get('causas/(:any)', 'CausaController::display/$1', ['as'=>'causasxforanea', 'filter' => 'permiso:vista lista causas']);

	//$routes->get('exorto', 'CausaController::index', ['as'=>'exorto']);
	$routes->get('exorto/create/(:any)', 'ExortoController::create/$1', ['as'=>'exorto_create']);
	$routes->post('exorto', 'ExortoController::store', ['as'=>'exorto_store']);
	$routes->get('exorto/(:any)', 'ExortoController::show/$1', ['as'=>'exorto_show']);
	$routes->put('exorto', 'ExortoController::update', ['as'=>'exorto_update']);	
	$routes->delete('exorto', 'ExortoController::destroy', ['as'=>'exorto_destroy']);	
	$routes->get('exortos/(:any)', 'ExortoController::display/$1', ['as'=>'exortos']);	

	//$routes->get('alojado', 'AlojadoController::index', ['as'=>'alojado']);
	$routes->get('alojado/create/(:any)', 'AlojadoController::create/$1', ['as'=>'alojado_create']);
	$routes->post('alojado', 'AlojadoController::store', ['as'=>'alojado_store']);
	$routes->get('alojado/(:any)', 'AlojadoController::show/$1', ['as'=>'alojado_show']);
	$routes->put('alojado', 'AlojadoController::update', ['as'=>'alojado_update']);	
	$routes->delete('alojado', 'AlojadoController::destroy', ['as'=>'alojado_destroy']);	
	$routes->get('alojados/(:any)', 'AlojadoController::display/$1', ['as'=>'alojados']);		

	//$routes->get('evacion', 'EvacionController::index', ['as'=>'evacion']);
	$routes->get('evacion/create/(:any)', 'EvacionController::create/$1', ['as'=>'evacion_create']);
	$routes->post('evacion', 'EvacionController::store', ['as'=>'evacion_store']);
	$routes->get('evacion/(:any)', 'EvacionController::show/$1', ['as'=>'evacion_show']);
	$routes->put('evacion', 'EvacionController::update', ['as'=>'evacion_update']);	
	$routes->delete('evacion', 'EvacionController::destroy', ['as'=>'evacion_destroy']);	
	$routes->get('evaciones/(:any)', 'EvacionController::display/$1', ['as'=>'evaciones']);			

});
$routes->group('/configuracion',['filter' => 'login', 'namespace'=>'App\Controllers\Configuracion'], function($routes){

	$routes->get('parametros', 'ParametrosController::index', ['as'=>'parametros']);
	$routes->get('parametros/crear', 'ParametrosController::create', ['as' => 'parametros_create']);
    $routes->post('parametros/guardar', 'ParametrosController::store', ['as' => 'parametros_store']);
    $routes->get('parametros/editar/(:any)', 'ParametrosController::edit/$1', ['as' => 'parametros_edit']);
    $routes->post('parametros/actualizar', 'ParametrosController::update',['as' => 'parametros_update']);
    $routes->get('parametros/eliminar/(:any)', 'ParametrosController::delete/$1', ['as' => 'parametros_delete']);
});

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
