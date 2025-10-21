<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CouponRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'code' => 'required|string|unique:coupons,code,' . $this->route('coupon'),
            'discount' => 'required|numeric|min:0',
            'expires_at' => 'required',
            'status' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'code.required' => 'The code field is required.',
            'code.unique' => 'This coupon code has already been used.',
            'discount.required' => 'The discount field is required.',
            'discount.numeric' => 'The discount must be a number.',
            'expires_at.required' => 'The expiration date field is required.',
            'expires_at.date' => 'The expiration date is not a valid date.',
            'status.required' => 'The status field is required.',
            'status.in' => 'The status must be either enabled or disabled.',
        ];
    }
}
