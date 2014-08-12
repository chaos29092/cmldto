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

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/products/{product}',array('as'=>'product', function($product)
{
    $url = URL::current();
    $date['product'] = $product ;
    $date['url'] = $url.'/inquiry' ;
    return View::make('index',$date);
}));

Route::post('products/{product}/inquiry', array('as'=>'inquiry','before'=>'csrf',function($product)
{
    $date = input::all() ;
    $inquiry = new Inquiry ;
    $inquiry->email = $date['email'] ;
    $inquiry->subject = $date['subject'] ;
    $inquiry->message = $date['message'] ;
    $inquiry->product = $product ;
    $inquiry->save();


}
));