<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model {
  use HasFactory;

  protected $fillable = [
    'text',
    'number',
    'title'
  ];

  public function getTextForTextarea(): string {
    return nl2br($this->text);
  }
}
