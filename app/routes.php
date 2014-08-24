<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::model('product', 'Product');

Route::get('/', function () {
    $date['products'] = Product::take(20)->where('is_discount','=', 1)->orderBy('id','desc')->get(array('id','category','name','indexphoto','mrg','miniintro','fnt','style'));
    return View::make('index',$date);
});

//discount product page
Route::get('/products/{product}', array('as' => 'product', 'uses' => 'ProductController@dicountPage'));

//inquiry store
Route::post('products/{product}/inquiry', array('as' => 'inquiry', 'before' => 'csrf', 'uses' => 'InquiryController@store'));

//登陆系统
Route::get('login', function () {
    return View::make('admin.login');
});
Route::post('login', array('before' => 'csrf', 'uses' => 'UserController@postLogin'));
Route::get('logout', 'UserController@loginOut');

//登录后可以看到的页面
Route::group(array('before' => 'auth'), function () {
    //询盘数据页面
    Route::get('admin/inquiries', 'InquiryController@index');

    //产品列表页
    Route::get('admin/products', 'ProductController@listAll');

    //产品创建
    Route::get('admin/products/create', 'ProductController@getCreate');
    Route::post('admin/products/create', array('before' => 'csrf' , 'uses'=>'ProductController@create'));

    //产品修改
    Route::get('admin/products/{product}/edit', 'ProductController@getEdit');
    Route::put('admin/products/{product}', array('before' => 'csrf', 'uses' => 'ProductController@putEdit'));

    //产品删除
    Route::get('admin/products/{product}/delete', 'ProductController@getDelete');
    Route::delete('admin/products/{product}', 'ProductController@delete');
});