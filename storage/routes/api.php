<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*
Route::middleware('auth:api')->get('/tech-api', function (Request $request) {
    $creds = $request->only(['email','password']);
    $token = auth()->guard('tech')->attempt($creds);
    return $creds;
});
*/

Route::group([
    'middleware' => 'api',
    'prefix' => 'v1/tech'
], function ($router) {
    //login & logout
        Route::match(array('get','post'),'login', 'Api\Tech\Login\AuthController@login');
        Route::match(array('get','post'),'logout', 'Api\Tech\Login\AuthController@logout');
        Route::match(array('get','post'),'refresh', 'Api\Tech\Login\AuthController@refresh');
        Route::get('me', 'Api\Tech\Login\AuthController@me');
    //projects
        Route::get('projects',[ 'as' => 'project.all', 'uses' => 'Api\Tech\ProjectsController@all' ]);
        Route::get('latestprojects',[ 'as' => 'project.latestProject', 'uses' => 'Api\Tech\ProjectsController@latestProject' ]);
        Route::get('project/{id}',[ 'as' => 'project.show', 'uses' => 'Api\Tech\ProjectsController@show' ]);
    //project minutes
        Route::get('minutes','Api\Tech\ProjectsMinutesController@all');
        Route::post('minute/create',['as' => 'minute.store', 'uses' => 'Api\Tech\ProjectsMinutesController@store']);
        Route::get('minute/{id}',['as' => 'minute.show', 'uses' => 'Api\Tech\ProjectsMinutesController@show']);
        Route::post('minute/update/{id}',['as' => 'minute.update', 'uses' => 'Api\Tech\ProjectsMinutesController@update']);
        Route::delete('minute/delete/{id}',['as' => 'minute.destroy', 'uses' => 'Api\Tech\ProjectsMinutesController@destroy']);
    //project report
        Route::get('reports',[ 'as' => 'project.all', 'uses' =>  'Api\Tech\ProjectsReportsController@all' ]);
        Route::get('report/show/{id}',[ 'as' => 'project.show', 'uses' =>  'Api\Tech\ProjectsReportsController@show' ]);
        Route::post('report/create',[ 'as' => 'project.create', 'uses' =>  'Api\Tech\ProjectsReportsController@create' ]);
        Route::post('report/store',[ 'as' => 'project.storeall', 'uses' =>  'Api\Tech\ProjectsReportsController@storeAll' ]);
        Route::post('report/store/image',[ 'as' => 'project.storeimage', 'uses' =>  'Api\Tech\ProjectsReportsController@storeImage' ]);
        Route::post('report/store/text',[ 'as' => 'project.storetext', 'uses' =>  'Api\Tech\ProjectsReportsController@storeText' ]);
        Route::post('report/store/file',[ 'as' => 'project.storefile', 'uses' =>  'Api\Tech\ProjectsReportsController@storeFile' ]);
    //project expenses
        Route::get('expenses','Api\Tech\ProjectsExpensesController@all');
        Route::post('expense/create',['as' => 'expense.store', 'uses' => 'Api\Tech\ProjectsExpensesController@store']);
        Route::post('expense/update/{id}',['as' => 'expense.update', 'uses' => 'Api\Tech\ProjectsExpensesController@update']);
        Route::delete('expense/delete/{id}',['as' => 'expense.destroy', 'uses' => 'Api\Tech\ProjectsExpensesController@destroy']);
});
