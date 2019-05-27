<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function list()
    {
    	$product = db::table('product')->get();
    	return view('admin.product.list',['product'=>$product]);
    }

    public function add()
    {
        $category = db::table('category')->where('active', 1)->get();
    	return view('admin.product.add', ['category'=>$category]);
    }

    public function postAdd(Request $request)
    {
        $this->validate($request, [
            'product' => 'required|min:3|unique:product,product',
            'category' => 'required',
            'image' => 'required',
            'quality' => 'required',
            'price' => 'required',
            'sale_price' => 'required',
        ],
        [
            'product.required' => 'Chưa nhập tên sản phẩm!',
            'product.min' => 'Tên sản phẩm chứa tối thiểu 3 kí tự!',
            'product.unique' => 'Tên sản phẩm đã tồn tại!',
            'quality.required' => 'Nhập vào số lượng!',
            'category.required' => 'Chưa chọn sạp hàng!',
            'image.required' => 'Chưa chọn hình ảnh!',
            'price.required' => 'Nhập giá sản phẩm (VND)!',
            'sale_price.required' => 'Nhập giá trị khuyến mãi!',
        ]);

        $product = new Product;
        $product->product = $request->product;
        $product->TenKhongDau = changeTitle($request->product);
        $product->id_category = $request->category;
        $product->description = $request->description;
        $product->quality = $request->quality;
        $product->price = ($request->price)*1000;
        $product->sale_price = ($request->sale_price)/100;
        $product->active = $request->active;

        if($request->hasFile('image')){
            $file = $request->file('image');
            $extends = $file->getClientOriginalExtension();

            if ($extends != 'jpg' && $extends != 'png' && $extends != 'jpeg') {
                return redirect()->back()->with('thongbao', 'Chỉ được nhập các file hình ảnh có đuôi JPG, PNG và JPEG!');
            }

            $name = $file->getClientOriginalName();
            $image = str_random(5)."_".$name;
            while (file_exists("upload/product/".$image)) {
                $image = str_random(5)."_".$name;
            }
            $file->move("upload/product/",$image); 
            $product->img_url = $image;
        }

        $product->save();
        return redirect()->back()->with('thongbao', 'Thêm thành công');
    }

    public function getEdit($id)
    {
    	$product = Product::find($id);
        $category = db::table('category')->where('active', 1)->get();
    	return view('admin.product.edit', ['product'=>$product, 'category'=>$category]);
    }

    public function postEdit(Request $request, $id)
    {
        $product = Product::find($id);
        $this->validate($request, [
            'product' => 'required|min:3',
            'category' => 'required',
            'quality' => 'required',
            'price' => 'required',
            'sale_price' => 'required',
        ],
        [
            'product.required' => 'Chưa nhập tên sản phẩm!',
            'product.min' => 'Tên sản phẩm chứa tối thiểu 3 kí tự!',
            'quality.required' => 'Nhập vào số lượng!',
            'category.required' => 'Chưa chọn sạp hàng!',
            'price.required' => 'Nhập giá sản phẩm (VND)!',
            'sale_price.required' => 'Nhập giá trị khuyến mãi!',
        ]);
        
        $product->product = $request->product;
        $product->TenKhongDau = changeTitle($request->product);
        $product->id_category = $request->category;
        $product->description = $request->description;
        $product->quality = $request->quality;
        $product->price = ($request->price)*1000;
        $product->sale_price = ($request->sale_price)/100;
        $product->active = $request->active;

        if($request->hasFile('image')){
            $file = $request->file('image');
            $extends = $file->getClientOriginalExtension();

            if ($extends != 'jpg' && $extends != 'png' && $extends != 'jpeg') {
                return redirect()->back()->with('thongbao', 'Chỉ được nhập các file hình ảnh có đuôi JPG, PNG và JPEG!');
            }

            $name = $file->getClientOriginalName();
            $image = str_random(5)."_".$name;
            while (file_exists("upload/product/".$image)) {
                $image = str_random(5)."_".$name;
            }
            $file->move("upload/product/",$image); 
            $product->img_url = $image;
        }

        $product->save();
        return redirect()->back()->with('thongbao', 'Sửa thành công');
    }

    public function getDelete($id)
    {
        $product = Product::find($id);
        $product -> delete();
        return redirect()->back()->with('thongbao', 'Xóa sản phẩm thành công');
    }
}
