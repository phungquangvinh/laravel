<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slide;

class SlideController extends Controller
{
    public function list()
    {
    	$slide = Slide::all();
    	return view('admin.slide.list', ['slide'=>$slide]);
    }
    public function add()
    {
    	return view('admin.slide.add');
    }
    public function postAdd(Request $request)
    {
    	$this->validate($request, [
    		'name' => 'required|min:3|unique:slide,name',
    		'noidung' => 'required',
    		'link' => 'required',
    		'image' => 'required'    		
    	],
    	[
    		'name.required' => 'Nhập tên slide đê',
    		'name.unique' => 'Tên có rồi, viết lại làm gì nữa',
    		'name.min' => 'Tên slide phải tối thiểu 3 kí tự',
    		'noidung.required' => 'Viết nội dung vào',
    		'link.required' => 'Chưa nhập link kìa',
    		'image.required' => 'Hình ảnh đâu hả chế?'
    	]);

    	$slide = new Slide;
    	$slide->name = $request->name;
    	$slide->NoiDung = $request->noidung;    	

        if (!filter_var($request->link, FILTER_VALIDATE_URL)) {
            return redirect('admin/slide/add')->with('thongbao', 'Sorry, link URL của bạn ko đúng định dạng!');
        } else $slide->link = $request->link;

    	if($request->hasFile('image')){
    		$file = $request->file('image');
    		$exnameds = $file->getClientOriginalExtension();

    		if ($exnameds != 'jpg' && $exnameds != 'png' && $exnameds != 'jpeg') {
    			return redirect('admin/slide/add')->with('thongbao', 'Chỉ được nhập các file hình ảnh có đuôi JPG, PNG và JPEG!');
    		}

    		$name = $file->getClientOriginalName();
    		$image = str_random(5)."_".$name;
    		while (file_exists("upload/slide/".$image)) {
    			$image = str_random(5)."_".$name;
    		}
    		$file->move("upload/slide/",$image); 
    		$slide->image = $image;
    	}

    	$slide->save();
    	return redirect()->back()->with('thongbao', 'Thêm slide thành công');
    }
    public function getEdit($id)
    {
    	$slide = Slide::find($id);
    	return view('admin.slide.edit',['slide' => $slide]);
    }

    public function postEdit(Request $request, $id)
    {
    	$slide = Slide::find($id);
    	$this->validate($request, [
    		'name' => 'required|min:5|max:50',
    		'noidung' => 'required|min:50',
    		'link' => 'required',   		
    	],
    	[
    		'name.required' => 'Nhập tên slide đê',
    		'name.min' => 'Tên quá ngắn, nghĩ tên nào dài ra đê',
    		'name.max' => 'Viết dài quá, xóa bớt đê',
    		'noidung.required' => 'Viết nội dung vào',
    		'noidung.min' => 'Nội dung phải lớn hơn 50 kí tự',
    		'link.required' => 'Chưa nhập link kìa',
    	]);

    	$slide->name = $request->name;
    	$slide->NoiDung = $request->noidung;
    	
        if (!filter_var($request->link, FILTER_VALIDATE_URL)) {
            return redirect('admin/slide/add'.$id)->with('thongbao', 'Sorry, link URL của bạn ko đúng định dạng!');
        } else $slide->link = $request->link;

    	if($request->hasFile('image')){
    		$file = $request->file('image');
    		$exnameds = $file->getClientOriginalExtension();

    		if ($exnameds != 'jpg' && $exnameds != 'png' && $exnameds != 'jpeg') {
    			return redirect('admin/slide/edit'.$id)->with('thongbao', 'Chỉ được nhập các file hình ảnh có đuôi JPG, PNG và JPEG!');
    		}

    		$name = $file->getClientOriginalName();
    		$image = str_random(5)."_".$name;
    		while (file_exists("upload/slide/".$image)) {
    			$image = str_random(5)."_".$name;
    		}
    		unlink("upload/slide/".$slide->image);
    		$file->move("upload/slide/",$image); 
    		$slide->image = $image;
    	}

    	$slide->save();
    	return redirect()->back()->with('thongbao', 'Sửa slide thành công');
    }

    public function getDelete($id)
    {
    	$slide = Slide::find($id);
    	$slide -> delete();
    	return redirect()->back()->with('thongbao', 'Xóa thành công');
    }
}
