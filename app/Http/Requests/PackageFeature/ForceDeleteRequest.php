<?php

namespace App\Http\Requests\PackageFeature;

use Illuminate\Foundation\Http\FormRequest;

class ForceDeleteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return $this->user()->hasPermission('forceDelete.package_features');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'slug' => ['string', 'required', 'min:3', 'max:255'],
        ];
    }
}
