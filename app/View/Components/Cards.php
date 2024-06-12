<?php

namespace App\View\Components;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class Cards extends Component {

  public function __construct(
    private readonly Collection $cards,
  ) {

  }

  public function render() {
    return view('components.cards', ['cards' => $this->cards]);
  }
}
