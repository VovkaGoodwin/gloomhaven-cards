<?php

namespace App\View\Components;

use App\Models\Card;
use Illuminate\View\Component;

class CardForm extends Component {

  public function __construct(
    private readonly Card | null $card = null,
  ) {
  }

  public function render() {
    return view('components.card-form', [
      'number' => $this->card?->number ?? '',
      'title' => $this->card?->title ?? '',
      'text' => $this->card?->text ?? '',
    ]);
  }
}
