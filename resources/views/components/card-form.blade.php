<div>
 @if($errors->isNotEmpty())
    {!! dd($errors) !!}
 @endif
  <form class="row g-3" action="/create" method="POST">
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
      <textarea name="text" rows="7" type="text" class="form-control" id="inputAddress" placeholder="Lorem ipsum..." required>{{ $text
 }}</textarea>
    </div>
    <div class="col-12">
      <button type="submit" class="btn btn-primary">Создать</button>
    </div>
    @csrf
  </form>
</div>
