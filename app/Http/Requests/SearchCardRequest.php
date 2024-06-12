<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SearchCardRequest extends FormRequest {
  public function rules(): array {
    return [
      'number' => 'string|required',
    ];
  }
}
