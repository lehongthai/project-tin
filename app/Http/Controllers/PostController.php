<?php 
namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\Tags;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Post;
class PostController extends Controller {

	public function getList()
	{
		$data = Post::select('id', 'title', 'views', 'image_thumbnail')->orderBy('id', 'DESC')->get()->toArray();
		return view('admin.post.list', compact('data'));
	}

	public function getAdd()
	{
		$listTags = Post::getListTags();
		$parent = Cate::select('id', 'name', 'parent_id')->get()->toArray();
		return view('admin.post.add', compact('listTags', 'parent'));
	}

	public function postAdd(PostRequest $PostRequest)
	{

		/*add tags mới*/
		$listTagsOld = array();
		if ($PostRequest->tags != NULL) {
			foreach ($PostRequest->tags as $tag) {
				if (array_key_exists($tag, Post::getListTags())) {
					array_push($listTagsOld, $tag);
				}else{
					$dbTags = new Tags();
					$dbTags->name = $tag;
					$dbTags->save();
					array_push($listTagsOld, $dbTags->id);
				}
			}
		}
		

		$image_arr = explode('/', $PostRequest->image_link);
		$count = count($image_arr);	

		$post = new Post;
		$post->title = $PostRequest->txtTitle;
		$post->alias = convert_vi_to_en($PostRequest->txtTitle);
		$post->intro = $PostRequest->txtIntro;
		$post->content = $PostRequest->txtContent;
		$post->keywords = $PostRequest->txtKeyword;
		$post->description = $PostRequest->txtDescription;
		$post->tags = implode(',', $listTagsOld);
		$post->image_link = $PostRequest->image_link;
		$post->image_thumbnail = URL().'/public/upload/_thumbs/Images/'.$image_arr[$count-1];
		$post->views = 0;
		$post->user_id = /*Auth::user()->id;*/ 1;

		if($post->save()){
			$message = ['level' => 'success', 'flash_message' => 'Tạo thành công postgory '.$PostRequest->txtTitle];
			return redirect()->route('admin.post.list')->with($message);
		}
	}

	
	public function getEdit($id=0)
	{
		$post = Post::find($id);
		if (isset($post) && $post != null && isset($post)) {
			$data = $post->toArray();
			$listTags = Post::getListTags();
			return view('admin.post.edit', compact('data', 'listTags'));
		}
		$notic = ['level' => 'danger', 'flash_message' => 'Không có thông tin'];
		return redirect()->route('admin.post.list')->with($notic);
	}
	public function postEdit(Request $request)
	{

		$listTagsOld = array();
		
		foreach ($request->tags as $tag) {
				if (array_key_exists($tag, Post::getListTags())) {
					array_push($listTagsOld, $tag);
				}else{
					$dbTags = new Tags();
					$dbTags->name = $tag;
					$dbTags->save();
					array_push($listTagsOld, $dbTags->id);
				}
		}

		$id = $request->id;
		$this->validate($request, 
								[
								'txtTitle' => "required|unique:posts,title,$id",
								'image_link' => 'required',
								'txtIntro' => 'required',
								'txtContent' => 'required'
								],
								[
								'txtTitle.required' => 'Vui lòng nhập tên bài',
								'txtTitle.unique' => 'Bài viết đã tồn tại',
								'image_link.required' => 'Vui lòng nhập ảnh hiển thị',
								'txtIntro.required' => 'Vui lòng nhập giới thiệu bài viết',
								'txtContent.required' => 'Vui lòng nhập nội dung'
								]
			);
		
		$post = Post::find($id);
		if ($post) {
			$image_arr = explode('/', $request->image_link);
			$count = count($image_arr);	
			$post->title = $request->txtTitle;
			$post->alias = convert_vi_to_en($request->txtTitle);
			$post->intro = $request->txtIntro;
			$post->content = $request->txtContent;
			$post->keywords = $request->txtKeyword;
			$post->description = $request->txtDescription;
			$post->tags = implode(',', $listTagsOld);
			$post->image_link = $request->image_link;
			$post->image_thumbnail = URL().'/public/upload/_thumbs/Images/'.$image_arr[$count-1];
			$post->views = 0;
			$post->user_id = /*Auth::user()->id;*/ 1;
			if($post->save()){
				$message = ['level' => 'success', 'flash_message' => 'Cập nhật thành công  '.$request->txtTitle];
			}else{
				$message = ['level' => 'danger', 'flash_message' => 'Cập nhật thất bại  '.$request->txtTitle];
			}
		}else{
			$message = ['level' => 'warning', 'flash_message' => 'Không có thông tin'];
		}
		
		return redirect()->route('admin.post.list')->with($message);
	}

	public function getDelete($id=0)
	{
		$post = Post::find($id);
		if (isset($post) && $post && $post != null) {
			if ($post->delete()) {
				$message = ['level' => 'success', 'flash_message' => 'Xóa Thành Công <b>'. $post->toArray()['title'].'</b>'];
			}else{
				$message = ['level' => 'danger', 'flash_message' => 'Xóa Không Thành Công <b>'. $post->toArray()['title'] .'</b>'];
			}
		}else{
			$message = ['level' => 'danger', 'flash_message' => 'Không có thông tin'];
		}
		return redirect()->route('admin.post.list')->with($message);
	}



}
