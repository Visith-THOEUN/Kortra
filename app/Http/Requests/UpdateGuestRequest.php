<?php

namespace App\Http\Requests;

use App\Enums\PaymentMethod;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Symfony\Component\HttpFoundation\Response;

class UpdateGuestRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        abort_if(Gate::denies('guest.edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'fullname' => ['required'],
            'address' => ['required'],
            'amount_kh' => ['sometimes', 'integer', 'nullable'],
            'amount_usd' => ['sometimes', 'integer', 'nullable'],
            'payment_method' => ['sometimes', 'nullable', Rule::enum(PaymentMethod::class)],
        ];
    }
}
