<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules;

class HiSecureRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'ids' => ['required', 'string', 'max:10', 'alpha_num', 'unique:' . User::class],
            'name' => ['required', 'string', 'max:255'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()->symbols()],
            'group_id' => ['required', 'integer'],
            'authority_id' => ['required', 'integer'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
//            'period_of_use' => ['required', 'date'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
