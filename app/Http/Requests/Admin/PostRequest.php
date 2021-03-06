<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PostRequest extends FormRequest
{
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
        $rules = [
            'name' => [
                'required',
                'string',
                'min:3',
                'max:200'
            ],
            'keyword' => 'string|max:200|nullable',
            'description' => 'string|nullable|max:300',
            'content' => 'required',
            'category_id' => 'numeric|required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:20480',
            'slug' => [
                'required',
                'min:3',
                'regex:/^[a-z0-9]+(?:-[a-z0-9]+)*$/',
                'max:120',
                Rule::unique('posts')->where(function ($query) {
                    $query->where('isDelete', 0);
                })
            ]
        ];

        if (in_array($this->method(), ['PUT', 'PATCH', 'DELETE'])) {
            $rules['slug'] = [
                'required',
                'string',
                'max:120',
                Rule::unique('posts')->where(function ($query) {
                    $query->where('isDelete', 0);
                })->ignore($this->post->id)
            ];
        }

        return $rules;
    }

    public function attributes()
    {
        return [
            'name' => 'tiêu đề trang',
            'slug' => 'đường dẫn (URL)',
            'content' => 'nội dung',
            'keyword' => 'từ khóa',
            'description' => 'mô tả',
            'category_id' => 'thể loại',
            'image' => 'hình ảnh'
        ];
    }
}
