<?php

use Illuminate\Routing\Router;
use App\Admin\Controllers\HeaderController;
use App\Admin\Controllers\UserController;
use App\Admin\Controllers\Hero_HomeController;
use App\Admin\Controllers\Special_ServiceController;
use App\Admin\Controllers\About_UsController;
use App\Admin\Controllers\Hero_servicesController;
use App\Admin\Controllers\ServicesController;
use App\Admin\Controllers\Recent_ProjectsController;
use App\Admin\Controllers\Clients_Who_trust_UsController;
use App\Admin\Controllers\Useful_LinksController;
use App\Admin\Controllers\Follow_UsController;
use App\Admin\Controllers\Who_Are_weController;
// use Symfony\Component\Routing\Route;
// use OpenAdmin\Admin\Admin;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');

    $router->resource('headers', HeaderController::class);
    $router->resource('users', UserController::class);
    $router->resource('hero_-homes', Hero_HomeController::class);
    $router->resource('special_-services', Special_ServiceController::class);
    $router->resource('about_-uses', About_UsController::class);
    $router->resource('hero_services', Hero_servicesController::class);
    $router->resource('services', ServicesController::class);
    $router->resource('recent_-projects', Recent_ProjectsController::class);
    $router->resource('clients_-who_trust_-uses', Clients_Who_trust_UsController::class);
    $router->resource('useful_-links', Useful_LinksController::class);
    $router->resource('follow_-uses', Follow_UsController::class);
    $router->resource('who_-are_wes', Who_Are_weController::class);



});
