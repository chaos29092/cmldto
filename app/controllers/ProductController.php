<?php

class ProductController extends BaseController {
    //prodcut page
    public function dicountPage($product)
    {
        $url = URL::current();
        $date['product'] = $product;
        $date['url'] = $url . '/inquiry';
        return View::make('product_master', $date);
    }

    //product list
    public function listAll()
    {
        $date['products'] = Product::where('id','>', 0)->paginate(5);
            return View::make('admin.products', $date);
    }

    //edit product
    public function getEdit (Product $product)
    {
        return View::make('admin.product_edit')->with('product',$product);
    }

    public  function putEdit (Product $product) {
        //保存图片路径
        $date = Input::file('mainphoto');
        if($date){
            $name = $date->getClientOriginalName();
            $date->move('img/product/'.$product->name, $name) ;
            $mainp = 'img/product/'.$product->name.'/'.$name ;
            $product->update(array('mainphoto' => $mainp));
        }
        $all = Input::except('mainphoto');
        $product->update($all);
        return Redirect::back()
            ->with('message', 'Successfully updated product!');
    }
}