<div style="flex: 0 0 30%">
  <div class="card shadow">
    <div class="card-header d-flex justify-content-between align-items-center">
      <div>{{ $card->title }}</div>
      <div>
        <form action="/cards/{{ $card->id }}" method="post" onsubmit="return confirm(`Вы точно хотите удалить карточку '{{ $card->title }}'?`)">
          <button class="btn btn-outline-danger">Удалить</button>
          @csrf
          @method('DELETE')
        </form>
      </div>
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
