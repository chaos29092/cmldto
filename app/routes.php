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

Route::get('/', function () {
    return View::make('hello');
});

Route::get('/products/{product}', array('as' => 'product', function ($product) {
    $url = URL::current();
    $date['product'] = $product;
    $date['url'] = $url . '/inquiry';
    return View::make('product_master', $date);
}));

Route::post('products/{product}/inquiry', array('as' => 'inquiry', 'before' => 'csrf', function ($product) {
    $date = input::all();
    $inquiry = new Inquiry;
    $inquiry->email = $date['email'];
    $inquiry->subject = $date['subject'];
    $inquiry->message = $date['message'];
    $inquiry->product = $product;
    $inquiry->save();
    return Redirect::back()->with('message', 'Message Send Successfully! We will contact you as soon as possible.');
}));

//登陆系统
Route::get('login', function () {
    return View::make('admin.login');
});
Route::post('login', array('before' => 'csrf', function () {
    if (Auth::attempt(Input::only('username', 'password'))) {
        return Redirect::intended('admin/inquiries');
    } else {
        return Redirect::back()
            ->withInput()
            ->with('error', "Invalid credentials");
    }
}));
Route::get('logout', function(){
    Auth::logout();
    return Redirect::to('login')
        ->with('message', 'You are now logged out');
});

//只有登录后可以看到的页面
Route::group(array('before'=>'auth'), function(){
    Route::model('product', 'Product');
    //询盘数据页面
    Route::get('admin/inquiries', function() {
        $date['inquiries'] = Inquiry::where('id','>', 0)->orderBy('id','desc')->paginate(30);
        return View::make('admin.inquiries', $date);
    });
    //产品列表页
    Route::get('admin/products', function() {
        $date['products'] = Product::where('id','>', 0)->paginate(5);
        return View::make('admin.products', $date);
    });
    //产品创建

    //产品修改
    Route::get('admin/products/{product}/edit', function(Product $product){
        return View::make('admin.product_edit')->with('product',$product);
    });
    Route::put('admin/products/{product}', array('before' => 'csrf' , function(Product $product){
        $date = Input::file('mainphoto');
        $name = $date->getClientOriginalName();
        $date->move('img/product', $name) ;
        $mainp = 'img/product/'.$name ;
        $product->update(array('mainphoto' => $mainp));
        return Redirect::back()
            ->with('message', 'Successfully updated product!');
    }));
});

