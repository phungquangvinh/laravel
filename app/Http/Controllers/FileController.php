<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Libs\Generate;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use App\Models\Media;

class FileController extends Controller
{
    public $media;

    public function __construct()
    {
        $this->media = new Media();
    }
    public function postFile(Request $request)
	{
		 //kiểm tra có tồn tại myFikle ?
		if($request->hasFile('myFile'))
		{
			 //lưu file
			$request->file('myFile')->move(
				'uploads', //nơi cần lưu
				'' //tên file
			);
		}
		else{
			echo "Chưa có file";
		}
	}
}
