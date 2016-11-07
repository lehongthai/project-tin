<?php 
namespace App\Http\Requests;

use App\Http\Requests\Request;

class PostRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'txtTitle' => 'required|unique:posts,title',
			'image_link' => 'required',
			'txtIntro' => 'required',
			'txtContent' => 'required'
		];
	}

	public function messages()
	{
		return [
			'txtTitle.required' => 'Vui lòng nhập tên bài',
			'txtTitle.unique' => 'Bài viết đã tồn tại',
			'image_link.required' => 'Vui lòng nhập ảnh hiển thị',
			'txtIntro.required' => 'Vui lòng nhập giới thiệu bài viết',
			'txtContent.required' => 'Vui lòng nhập nội dung'	
		];
	}

}
