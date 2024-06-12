<div style="flex: 0 0 30%">
  <div class="card shadow">
    <div class="card-header d-flex justify-content-between align-items-center">
      <div>{{ $card->title }}</div>
      <div>
        <button type="button" class="btn btn-link" onclick="window.location = `/cards/{{ $card->id }}/edit`">Редактировать</button>
      </div>
    </div>
    <div class="card-body" style="min-height: 200px">
      {{ $card->text }}
    </div>
    <div class="card-footer">
      #{{ $card->number }}
    </div>
  </div>
</div>
