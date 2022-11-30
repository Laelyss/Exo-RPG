<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Factory as ValidationFactory;

class LoginRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'pseudo' => 'required',
            'password' => 'required',
        ];
    }

    public function getCredentials()
    {
        $pseudo = $this->get('pseudo');
        if ($this->isEmail($pseudo)) {
            return [
                'email' => $pseudo,
                'password' => $this->get('password')
            ];
        }
        return $this->only('pseudo', 'password');
    }

    public function isEmail($value)
    {
        $factory = $this->container->make(ValidationFactory::class);
        return !$factory->make(['pseudo' => $value], ['pseudo' => 'email'])->fails();
    }
}
