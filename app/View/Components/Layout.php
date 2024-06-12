<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Layout extends Component {

  public function __construct(
    private readonly string $searchNumber = ""
  ) {
  }

  public function render() {
    return $this->view('components.layout', [ 'searchNumber' => $this->searchNumber ]);
  }
}
