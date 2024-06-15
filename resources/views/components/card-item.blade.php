@pushonce('scripts')
  <script>
    function onDeleteCardHandler(title) {
      return confirm(`Вы точно хотите удалить карточку '${title}'?`)
    }
  </script>
@endpushonce
<div style="flex: 1 0 30%">
  <div class="card shadow" style="height: 100%;">
    <div class="card-header d-flex justify-content-between align-items-center">
      <div>{{ $card->title }}</div>

    </div>
    <div class="card-body" style="min-height: 200px">
      <p>{!! $card->getTextForTextarea() !!}</p>
    </div>
    <div class="card-body d-flex justify-content-between align-items-center">
      <div>
        <form action="/cards/{{ $card->id }}" method="post" onsubmit="return onDeleteCardHandler('{{ $card->title }}')">
          <button class="btn btn-outline-danger btn-sm">Удалить</button>
          @csrf
          @method('DELETE')
        </form>
      </div>
      <div>
        <button type="button" class="btn btn-outline-primary btn-sm" onclick="window.location = `/cards/{{ $card->id }}/edit`">Редактировать</button>
      </div>
    </div>
    <div class="card-footer">
      #{{ $card->number }}
    </div>
  </div>
</div>
