<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\About;
class AboutController extends Controller {

	public function getList()
	{
		$data = About::select('id', 'meta_key', 'meta_desc', 'image_thumb', 'alt')->orderBy('id', 'DESC')->get()->toArray();
		return view('admin.about.list', compact('data'));
	}

	public function getAdd()
	{
		return view('admin.about.add');
	}

	public function postAdd(Request $request)
	{
		$about = new About;
		$image_arr = explode('/', $request->images);
		$count = count($image_arr);	
		$about->meta_key = $request->txtKeywords;
		$about->meta_desc = $request->txtDescription;
		$about->image = $request->images;
		$about->alt = $request->alt;
		$about->image_thumb = URL().'/public/upload/_thumbs/Images/'.$image_arr[$count-1];
		if($about->save()){
			$message = ['level' => 'success', 'flash_message' => 'Tạo thành công'];
			return redirect()->route('admin.about.getList')->with($message);
		}
	}

	public function getDelete($id)
	{
		$about = About::find($id);
		if (isset($about) && $about && $about != null) {
			if ($about->delete()) {
				$message = ['level' => 'success', 'flash_message' => 'Xóa Thành Công'];
			}else{
				$message = ['level' => 'danger', 'flash_message' => 'Xóa Không Thành Công'];
			}
		}else{
			$message = ['level' => 'danger', 'flash_message' => 'Không có thông tin'];
		}
		return redirect()->route('admin.about.getList')->with($message);
	}

	public function getEdit($id=0)
	{
		$about = About::find($id);
		if (isset($about) && $about != null && isset($id)) {
			$data = $about->toArray();
			return view('admin.about.edit', compact('data'));
		}

		$notic = ['level' => 'danger', 'flash_message' => 'Không có thông tin'];
		return redirect()->route('admin.about.getList')->with($notic);
	}
	public function postEdit(Request $request)
	{

		$id = $request->id;
		$about = About::find($id);
		if ($about) {
			$image_arr = explode('/', $request->images);
			$count = count($image_arr);	
			$about->meta_key = $request->txtKeywords;
			$about->meta_desc = $request->txtDescription;
			$about->image = $request->images;
			$about->alt = $request->alt;
			$about->image_thumb = URL().'/public/upload/_thumbs/Images/'.$image_arr[$count-1];
			if($about->save()){
				$message = ['level' => 'success', 'flash_message' => 'Cập nhật thành công'];
			}else{
				$message = ['level' => 'danger', 'flash_message' => 'Cập nhật thất bại'];
			}
		}else{
			$message = ['level' => 'warning', 'flash_message' => 'Không có thông tin'];
		}
		
		return redirect()->route('admin.about.getList')->with($message);
	}

}
