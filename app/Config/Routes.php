<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->addPlaceholder('uuid', '[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}');

// Routes Frontend Website
$routes->get('/', [\App\Controllers\Frontend\HomeController::class, 'index']);
$routes->get('services', [\App\Controllers\Frontend\ServicesController::class, 'index']);
$routes->get('pricing', [\App\Controllers\Frontend\PricingController::class, 'index']);
$routes->get('our-apps', [\App\Controllers\Frontend\OurappsController::class, 'index']);
$routes->get('our-apps/show/(:uuid)', [\App\Controllers\Frontend\OurappsController::class, 'show']);
$routes->get('about-us', [\App\Controllers\Frontend\AboutUsController::class, 'index']);
$routes->get('contact-us', [\App\Controllers\Frontend\ContactUsController::class, 'index']);
$routes->get('get-started', [\App\Controllers\Frontend\GetStartedController::class, 'index']);
$routes->get('get-started/(:uuid)', [\App\Controllers\Frontend\GetStartedController::class, 'register']);
$routes->post('get-started/store', [\App\Controllers\Frontend\GetStartedController::class, 'store']);

// Routes Backend Website
$routes->get('ext-login', [\App\Controllers\Extranet\AuthController::class, 'login']);
$routes->post('ext-auth', [\App\Controllers\Extranet\AuthController::class, 'auth']);
$routes->get('ext-logout', [\App\Controllers\Extranet\AuthController::class, 'logout']);
$routes->group('extranet', ['filter' => 'auth'], function($routes){
	$routes->get('/', [\App\Controllers\Extranet\HomeExtranetController::class, 'index']);

	$routes->group('config', function ($routes) {
		$routes->get('/', [\App\Controllers\Extranet\ConfigController::class, 'index']);
		$routes->post('update/(:uuid)', [\App\Controllers\Extranet\ConfigController::class, 'update']);
    });	

	$routes->group('config-menu', function ($routes) {
		$routes->get('/', [\App\Controllers\Extranet\ConfigMenuController::class, 'index']);
		$routes->post('update/(:uuid)', [\App\Controllers\Extranet\ConfigMenuController::class, 'update']);
    });

	$routes->group('app-type', function ($routes) {
		$routes->get('/', [\App\Controllers\Extranet\AppTypeController::class, 'index']);
		$routes->get('create', [\App\Controllers\Extranet\AppTypeController::class, 'create']);
		$routes->post('store', [\App\Controllers\Extranet\AppTypeController::class, 'store']);
		$routes->get('show/(:uuid)', [\App\Controllers\Extranet\AppTypeController::class, 'show']);
		$routes->get('edit/(:uuid)', [\App\Controllers\Extranet\AppTypeController::class, 'edit']);
		$routes->post('update/(:uuid)', [\App\Controllers\Extranet\AppTypeController::class, 'update']);
		$routes->get('destroy/(:uuid)', [\App\Controllers\Extranet\AppTypeController::class, 'destroy']);
    });	

	$routes->group('brand', function ($routes) {
		$routes->get('/', [\App\Controllers\Extranet\BrandController::class, 'index']);
		$routes->get('create', [\App\Controllers\Extranet\BrandController::class, 'create']);
		$routes->post('store', [\App\Controllers\Extranet\BrandController::class, 'store']);
		$routes->get('show/(:uuid)', [\App\Controllers\Extranet\BrandController::class, 'show']);
		$routes->get('edit/(:uuid)', [\App\Controllers\Extranet\BrandController::class, 'edit']);
		$routes->post('update/(:uuid)', [\App\Controllers\Extranet\BrandController::class, 'update']);
		$routes->get('destroy/(:uuid)', [\App\Controllers\Extranet\BrandController::class, 'destroy']);
    });	

	$routes->group('feature', function ($routes) {
		$routes->get('/', [\App\Controllers\Extranet\FeatureController::class, 'index']);
		$routes->get('create', [\App\Controllers\Extranet\FeatureController::class, 'create']);
		$routes->post('store', [\App\Controllers\Extranet\FeatureController::class, 'store']);
		$routes->get('show/(:uuid)', [\App\Controllers\Extranet\FeatureController::class, 'show']);
		$routes->get('edit/(:uuid)', [\App\Controllers\Extranet\FeatureController::class, 'edit']);
		$routes->post('update/(:uuid)', [\App\Controllers\Extranet\FeatureController::class, 'update']);
		$routes->get('destroy/(:uuid)', [\App\Controllers\Extranet\FeatureController::class, 'destroy']);
    });	

	$routes->group('service', function ($routes) {
		$routes->get('/', [\App\Controllers\Extranet\ServiceController::class, 'index']);
		$routes->get('create', [\App\Controllers\Extranet\ServiceController::class, 'create']);
		$routes->post('store', [\App\Controllers\Extranet\ServiceController::class, 'store']);
		$routes->get('show/(:uuid)', [\App\Controllers\Extranet\ServiceController::class, 'show']);
		$routes->get('edit/(:uuid)', [\App\Controllers\Extranet\ServiceController::class, 'edit']);
		$routes->post('update/(:uuid)', [\App\Controllers\Extranet\ServiceController::class, 'update']);
		$routes->get('destroy/(:uuid)', [\App\Controllers\Extranet\ServiceController::class, 'destroy']);
    });

	$routes->group('app', function ($routes) {
		$routes->get('/', [\App\Controllers\Extranet\AppController::class, 'index']);
		$routes->get('create', [\App\Controllers\Extranet\AppController::class, 'create']);
		$routes->post('store', [\App\Controllers\Extranet\AppController::class, 'store']);
		$routes->get('show/(:uuid)', [\App\Controllers\Extranet\AppController::class, 'show']);
		$routes->get('edit/(:uuid)', [\App\Controllers\Extranet\AppController::class, 'edit']);
		$routes->post('update/(:uuid)', [\App\Controllers\Extranet\AppController::class, 'update']);
		$routes->get('destroy/(:uuid)', [\App\Controllers\Extranet\AppController::class, 'destroy']);
    });

	$routes->group('client', function ($routes) {
		$routes->get('/', [\App\Controllers\Extranet\ClientController::class, 'index']);
		$routes->get('show/(:uuid)', [\App\Controllers\Extranet\ClientController::class, 'show']);
		$routes->get('edit/(:uuid)', [\App\Controllers\Extranet\ClientController::class, 'edit']);
		$routes->post('update/(:uuid)', [\App\Controllers\Extranet\ClientController::class, 'update']);
		$routes->get('destroy/(:uuid)', [\App\Controllers\Extranet\ClientController::class, 'destroy']);
    });	

	$routes->group('task', function ($routes) {
		$routes->get('/', [\App\Controllers\Extranet\TaskController::class, 'index']);
		$routes->get('create', [\App\Controllers\Extranet\TaskController::class, 'create']);
		$routes->post('store', [\App\Controllers\Extranet\TaskController::class, 'store']);
		$routes->get('show/(:uuid)', [\App\Controllers\Extranet\TaskController::class, 'show']);
		$routes->get('edit/(:uuid)', [\App\Controllers\Extranet\TaskController::class, 'edit']);
		$routes->post('update/(:uuid)', [\App\Controllers\Extranet\TaskController::class, 'update']);
		$routes->get('destroy/(:uuid)', [\App\Controllers\Extranet\TaskController::class, 'destroy']);
    });	
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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
