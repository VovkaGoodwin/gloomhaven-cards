<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCardRequest extends FormRequest {
  public function rules(): array {
    return [
      'number' => ['required', 'string'],
      'title' => ['required', 'string'],
      'text' => ['required', 'string'],
      'id' => ['required', 'integer', 'exists:cards,id'],
    ];
  }
}
