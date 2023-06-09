<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderStoreRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'ticket_id' => 'required|exists:tickets,id',
            'email' => 'required|email'
        ];
    }
}
