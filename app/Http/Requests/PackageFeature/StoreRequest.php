<?php

namespace App\Http\Requests\PackageFeature;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return $this->user()->hasPermission('store.package_features');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'name' => ['string', 'required', 'max:191', 'min:3'],
            'slug' => ['string', 'unique:package_features', 'min:3', 'max:255', 'required'],
            'enabled' => ['boolean'],
        ];
    }
}
