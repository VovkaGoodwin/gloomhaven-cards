<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCardRequest extends FormRequest {
  public function rules(): array {
    return [
      'number' => 'string|required|unique:cards',
      'text' => 'string|required',
      'title' => 'string|required',
    ];
  }
}
