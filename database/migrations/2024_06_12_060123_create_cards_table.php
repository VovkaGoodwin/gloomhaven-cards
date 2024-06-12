<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  public function up() {
    Schema::create('cards', function (Blueprint $table) {
      $table->id();
      $table->string('number');
      $table->text('title');
      $table->text('text');
      $table->timestamps();
    });
  }

  public function down() {
    Schema::dropIfExists('cards');
  }
};
