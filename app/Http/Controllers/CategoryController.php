<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Category;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function list()
    {
    	$category = db::table('category')->get();
    	return view('admin.category.list',['category'=>$category]);
    }

    public function add()
    {
    	return view('admin.category.add');
    }

    public function postAdd(Request $request)
    {
        $this->validate($request, [
            'name_category' => 'required|min:3|unique:category,name',
            'image_category' => 'required',
        ],
        [
            'name_category.required' => 'Chưa nhập tên sản phẩm!',
            'name_category.min' => 'Tên sản phẩm chứa tối thiểu 3 kí tự!',
            'name_category.unique' => 'Tên sản phẩm đã tồn tại!',
            'image_category.required' => 'Chưa chọn hình ảnh!',
        ]);

        $category = new Category;
        $category->name = $request->name_category;
        $category->description = $request->mota;
        $category->active = $request->active_category;

        if($request->hasFile('image_category')){
            $file = $request->file('image_category');
            $extends = $file->getClientOriginalExtension();

            if ($extends != 'jpg' && $extends != 'png' && $extends != 'jpeg') {
                return redirect()->back()->with('thongbao', 'Chỉ được nhập các file hình ảnh có đuôi JPG, PNG và JPEG!');
            }

            $name = $file->getClientOriginalName();
            $image = str_random(5)."_".$name;
            while (file_exists("upload/category/".$image)) {
                $image = str_random(5)."_".$name;
            }
            $file->move("upload/category/",$image); 
            $category->img_url = $image;
        }

        $category->save();
        return redirect()->back()->with('thongbao', 'Thêm thành công');
    }

    public function getEdit($id)
    {
    	$category = Category::find($id);
    	return view('admin.category.edit', ['category'=>$category]);
    }

    public function postEdit(Request $request, $id)
    {
    	$category = Category::find($id);
        $this->validate($request, [
            'name_category' => 'required|min:3',
        ],
        [
            'name_category.required' => 'Chưa nhập tên sản phẩm!',
            'name_category.min' => 'Tên sản phẩm chứa tối thiểu 3 kí tự!',
        ]);
        
        $category->name = $request->name_category;
        $category->description = $request->mota;
        $category->active = $request->active_category;

        if($request->hasFile('image_category')){
            $file = $request->file('image_category');
            $extends = $file->getClientOriginalExtension();

            if ($extends != 'jpg' && $extends != 'png' && $extends != 'jpeg') {
                return redirect()->back()->with('thongbao', 'Chỉ được nhập các file hình ảnh có đuôi JPG, PNG và JPEG!');
            }

            $name = $file->getClientOriginalName();
            $image = str_random(5)."_".$name;
            var_dump($image);
            while (file_exists("upload/category/".$image)) {
                $image = str_random(5)."_".$name;
            }
            $file->move("upload/category/",$image); 
            $category->img_url = $image;
        }

        $category->save();
        return redirect()->back()->with('thongbao', 'Chỉnh sửa thành công');
    }

    public function getDelete($id)
    {
        $category = Category::find($id);
        $category -> delete();
        return redirect()->back()->with('thongbao', 'Xóa category thành công');
    }
}
