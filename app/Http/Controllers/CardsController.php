<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCardRequest;
use App\Http\Requests\SearchCardRequest;
use App\Models\Card;

class CardsController extends Controller {
  public function index() {
    return view('index', ['cards' => Card::all(), 'searchNumber' => '']);
  }

  public function create(CreateCardRequest $request) {
    Card::create($request->validated());

    return redirect('/');
  }

  public function search(SearchCardRequest $request) {
    return view(
      'index',
      [
        'cards' => Card::whereNumber($request->validated('number'))->get(),
        'searchNumber' => $request->validated('number'),
      ]
    );
  }

  public function newCard() {
    return view('card');
  }

  public function showCard(Card $card) {
    return view('card', [
      'card' => $card,
    ]);
  }

  public function editCard(Card $card) {
    return view('card', [
      'card' => $card,
    ]);
  }
}
