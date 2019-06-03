<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'Zullama\ZullamaInitController@index');

Route::get('/register', [
	'as' => 'register',
	'uses' => 'Auth\AuthController@getRegister'
]);

Route::post('/register', [
	'as' => 'register',
	 'uses' => 'AccountApiController@register'
]);

Route::get('/services', [
	'as' => 'zullama.services',
	 'uses' => 'Zullama\ZullamaInitController@service'
]);

Route::get('/realisation', [
	'as' => 'zullama.realisation',
	 'uses' => 'Zullama\ZullamaInitController@realisation'
]);

Route::get('/team', [
	'as' => 'zullama.team',
	'uses' => 'Zullama\ZullamaInitController@team'
]);

Route::get('/a-propos', [
	'as' => 'zullama.Apropos',
	'uses' => 'Zullama\ZullamaInitController@about'
]);

Route::get('/secteurs', [
	'as' => 'zullama.secteurs',
	'uses' => 'Zullama\ZullamaInitController@secteur'
]);

Route::get('/team/{name}', [
	'as' => 'zullama.team.detail',
	'uses' => 'Zullama\TeamController@team'
]);

Route::get('api/users', 'UserController@getDatatable');
Route::resource('users', 'UserController');


// TODO remove these translation functions
    function uctrans($text)
    {
        return ucwords(trans($text));
    }

    // optional trans: only return the string if it's translated
    function otrans($text)
    {
        $locale = Session::get(SESSION_LOCALE);

        if ($locale == 'fr') {
            return trans($text);
        } else {
            $string = trans($text);
            $english = trans($text, [], 'fr');

            return $string != $english ? $string : '';
        }
    }

    // include modules in translations
    function mtrans($entityType, $text = false)
    {
        if (! $text) {
            $text = $entityType;
        }

        // check if this has been translated in a module language file
        if ($module = Module::find($entityType)) {
            $key = "{$module->getLowerName()}::texts.{$text}";
            $value = trans($key);
            if ($key != $value) {
                return $value;
            }
        }

        return trans("texts.{$text}");
    }

define('STATUS_ACTIVE', 'active');
define('STATUS_ARCHIVED', 'archived');
define('STATUS_DELETED', 'deleted');
