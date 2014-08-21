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
        $date['products'] = Product::where('id','>', 0)->orderBy('id','desc')->paginate(20);
            return View::make('admin.products', $date);
    }

    //create product
    public function getCreate()
    {
        $product = new Product;
        return View::make('admin.product_create')
            ->with('product', $product);
    }
    public function create()
    {
        $rule = array('name'=>'required');
        $validator = Validator::make(Input::except('mainphoto'),$rule);

        if ($validator->passes())
        {
        mkdir('img/product/'.Input::get('name'));
        $product = Product::create(Input::except('mainphoto'));
        return Redirect::to('admin/products/'.$product->id.'/edit')
            ->with('message', 'Successfully created product!');
        }
        else
        {
            return Redirect::back()
                ->with('message','产品name必须填写！');
        }
    }

    //edit product
    public function getEdit (Product $product)
    {
        return View::make('admin.product_edit')->with('product',$product);
    }

    public  function putEdit (Product $product) {
        //保存mainphoto图片路径，默认路径为img/product/$product->name，并且在修改了name后也修改相应文件夹名称
        $date = Input::file('mainphoto');
        $name = Input::get('name');
        if($name){
            //if name be edit,then modify img folder.
            rename('img/product/'.$product->name,'img/product/'.$name);
            if($date)
            {
                $fileName = $date->getClientOriginalName();
                $date->move('img/product/'.$name, $fileName) ;
                $product->update(array('mainphoto'=> $fileName));
            }
        }

        //update all date except image.
        $product->update(Input::except(array('mainphoto')));
        return Redirect::back()
            ->with('message', 'Successfully updated product!');
    }

    //delete product
    public function getDelete(Product $product)
    {
        return View::make('admin.product_delete')
            ->with('product',$product);
    }

    public function delete(Product $product)
    {
        $product->delete();
        return Redirect::to('admin/products')
            ->with('message','Successfully deleted product!');
    }

}