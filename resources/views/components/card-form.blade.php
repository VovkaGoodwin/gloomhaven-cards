<div>
  <form class="row g-3" action="/cards" method="POST">
    <div class="col-md-6">
      <label for="inputEmail4" class="form-label">Номер</label>
      <input name="number" class="form-control" id="inputEmail4" required value="{{ $number }}">
    </div>
    <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Название</label>
      <input name="title" class="form-control" id="inputPassword4" required value="{{ $title }}">
    </div>
    <div class="col-12">
      <label for="inputAddress" class="form-label">Текст</label>
      <textarea name="text" rows="7" type="text" class="form-control" id="inputAddress" placeholder="Lorem ipsum..." required>{{ $text }}</textarea>
    </div>
    @if($number === '')
      <div class="col-12">
        <button type="submit" class="btn btn-primary">Создать</button>
      </div>
    @else
      <div class="col-12">
        <button type="submit" class="btn btn-primary">Сохранить изменения</button>
      </div>
      <input type="hidden" name="id" value="{{ $id }}">
      @method('PUT')
    @endif
    @csrf
  </form>
</div>
