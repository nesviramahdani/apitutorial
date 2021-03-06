<?php
use Illuminate\Http\Request;
use App\Models\Galon;

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/test', function () use ($router) {
    $res['success'] = true;
    $res['result'] = "Hello there welcome to web api using lumen tutorial!";
    return response($res);
  });

$router->get('/key', function() {
    return \Illuminate\Support\Str::random(32);
});

$router->post('/login', ['uses' => 'UserController@login']);
$router->post('/register', ['uses' =>'UserController@register']);
//$router->post('/user/update', ['middleware' => 'auth', 'uses' =>  'UserController@update']);


$router->get('/index', ['uses' =>'GalonController@index']);
$router->get('image/{name}', 'GalonController@get_image');
$router->post('/create', ['uses' =>'GalonController@create']);
$router->post('/insert', ['uses' =>'HistoryController@insert']);

$router->get('galon/search/', 'GalonController@index');
$router->get('galon/search/{nama_galon}', 'GalonController@search');